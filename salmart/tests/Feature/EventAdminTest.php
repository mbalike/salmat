<?php

namespace Tests\Feature;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class EventAdminTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('site');
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function makeEvent(array $overrides = []): Event
    {
        return Event::create(array_merge([
            'title' => 'Blue Economy Summit <2026>',
            'slug' => 'blue-economy-summit-2026',
            'cover_image' => Event::UPLOAD_DIRECTORY.'/cover.jpg',
            'gallery' => array_map(fn (int $i) => Event::UPLOAD_DIRECTORY."/photo-{$i}.jpg", range(1, 8)),
            'details' => "First paragraph.\n\nSecond paragraph.",
            'overview' => [['label' => 'Venue', 'value' => 'Serena Hotel']],
            'services' => ['Protocol and VIP hosting'],
            'impact' => 'Stronger regional ties.',
            'partners' => ['TAFIRI'],
            'event_category_id' => EventCategory::where('name', 'Conference')->value('id'),
            'start_date' => '2026-02-24',
            'end_date' => '2026-02-28',
            'location' => 'Dar es Salaam',
            'department' => 'Protocol & Diplomatic Services',
            'client' => 'IUCN',
        ], $overrides));
    }

    /**
     * @return array<string, mixed>
     */
    private function formData(): array
    {
        return [
            'title' => 'Blue Economy Summit 2026',
            'slug' => 'blue-economy-summit-2026',
            'cover_image' => UploadedFile::fake()->image('cover.jpg'),
            'hero_position' => 'center 35%',
            'gallery' => [UploadedFile::fake()->image('one.jpg'), UploadedFile::fake()->image('two.jpg')],
            'details' => 'A regional summit.',
            'overview' => [['label' => 'Venue', 'value' => 'Serena Hotel']],
            'services' => [['service' => 'Protocol and VIP hosting']],
            'event_category_id' => EventCategory::where('name', 'Workshop')->value('id'),
            'department' => 'Tours & Experiences',
            'start_date' => '2026-02-24',
            'location' => 'Dar es Salaam',
        ];
    }

    public function test_guests_cannot_reach_the_admin(): void
    {
        $this->get('/admin/events/create')->assertRedirect('/admin/login');
    }

    public function test_the_categories_and_departments_are_available(): void
    {
        $this->assertSame(
            ['Conference', 'Corporate Event', 'Culture', 'Events', 'Government', 'Hospitality', 'Iftar Gala', 'Workshop'],
            EventCategory::orderBy('name')->pluck('name')->all(),
        );
        $this->assertCount(9, Event::DEPARTMENTS);
    }

    public function test_an_admin_can_create_an_event_with_photos(): void
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(CreateEvent::class)
            ->fillForm($this->formData())
            ->call('create')
            ->assertHasNoFormErrors();

        $event = Event::sole();

        $this->assertSame('Workshop', $event->category->name);
        $this->assertSame('Tours & Experiences', $event->department);
        $this->assertSame(['Protocol and VIP hosting'], array_values($event->services));
        $this->assertStringStartsWith(Event::UPLOAD_DIRECTORY.'/', $event->cover_image);
        $this->assertCount(2, $event->gallery);
        Storage::disk('site')->assertExists($event->cover_image);
        Storage::disk('site')->assertExists($event->gallery[0]);
    }

    public function test_required_fields_and_taken_web_addresses_are_rejected(): void
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(CreateEvent::class)
            ->fillForm(['slug' => 'oryx-energy-iftar-gala-2026', 'department' => 'Not a department'])
            ->call('create')
            ->assertHasFormErrors([
                'title' => 'required',
                'slug',
                'department',
                'event_category_id' => 'required',
                'cover_image' => 'required',
                'gallery' => 'required',
            ]);

        $this->assertSame(0, Event::count());
    }

    public function test_the_event_page_shows_the_event_like_the_existing_pages(): void
    {
        $this->makeEvent();

        $this->get('/portfolio-detail-blue-economy-summit-2026')
            ->assertOk()
            ->assertSee('Blue Economy Summit &lt;2026&gt;', false)
            ->assertSee('<p>First paragraph.</p>', false)
            ->assertSee('<p>Second paragraph.</p>', false)
            ->assertSee('<strong>Venue:</strong> Serena Hotel', false)
            ->assertSee('<span>Conference</span>', false)
            ->assertSee('<span>24 to 28 Feb 2026</span>', false)
            ->assertSee('<span>Protocol &amp; Diplomatic Services</span>', false)
            ->assertSee('<span>IUCN</span>', false)
            ->assertSee('Oryx Energy Iftar Gala 2026')
            ->assertDontSee('Event Experience');
    }

    public function test_the_existing_event_pages_are_untouched(): void
    {
        $this->get('/portfolio-detail-marcosio-2025')
            ->assertOk()
            ->assertSee('MarCOSIO Fisheries Exchange Workshop 2025');

        $this->get('/portfolio-detail-does-not-exist')->assertNotFound();
    }

    public function test_the_events_page_lists_new_events_and_adds_missing_tabs(): void
    {
        $this->makeEvent();
        $this->makeEvent([
            'title' => 'Coastal Workshop',
            'slug' => 'coastal-workshop',
            'event_category_id' => EventCategory::where('name', 'Workshop')->value('id'),
        ]);

        $this->get('/portfolio')
            ->assertOk()
            ->assertSee('/portfolio-detail-coastal-workshop', false)
            ->assertSee('data-portfolio-filter="Workshop"', false)
            ->assertSeeInOrder(['data-portfolio-filter="Government"', 'data-portfolio-filter="Workshop"'], false);

        $this->assertSame(1, substr_count(
            $this->get('/portfolio')->getContent(),
            'data-portfolio-filter="Conference"',
        ));
    }

    public function test_the_sitemap_includes_new_events(): void
    {
        $this->makeEvent();

        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertSee('/portfolio-detail-blue-economy-summit-2026', false)
            ->assertSee('/portfolio-detail-marcosio-2025', false);
    }

    public function test_dates_are_formatted_like_the_existing_pages(): void
    {
        $event = new Event;

        $event->start_date = '2026-03-11';
        $this->assertSame('11th March, 2026', $event->date_label);

        $event = new Event(['start_date' => '2024-10-29', 'end_date' => '2024-10-31']);
        $this->assertSame('29 to 31 Oct 2024', $event->date_label);

        $event = new Event(['start_date' => '2024-10-30', 'end_date' => '2024-11-02']);
        $this->assertSame('30 Oct to 2 Nov 2024', $event->date_label);

        $event = new Event(['start_date' => '2024-12-30', 'end_date' => '2025-01-02']);
        $this->assertSame('30 Dec 2024 to 2 Jan 2025', $event->date_label);
    }

    public function test_removing_photos_only_deletes_admin_uploads(): void
    {
        $disk = Storage::disk('site');
        $kept = Event::UPLOAD_DIRECTORY.'/kept.jpg';
        $removed = Event::UPLOAD_DIRECTORY.'/removed.jpg';
        $original = 'img/events/oryx.jpeg';

        foreach ([$kept, $removed, $original] as $path) {
            $disk->put($path, 'photo');
        }

        $event = $this->makeEvent(['cover_image' => $kept, 'gallery' => [$kept, $removed, $original]]);

        $event->update(['gallery' => [$kept]]);
        $disk->assertMissing($removed);
        $disk->assertExists($kept);
        $disk->assertExists($original);

        $event->update(['gallery' => [$kept, $original]]);
        $event->delete();
        $disk->assertMissing($kept);
        $disk->assertExists($original);
    }
}
