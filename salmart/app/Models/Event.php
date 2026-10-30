<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Event extends Model
{
    /**
     * Where the admin saves photos, inside the site's web root.
     */
    public const UPLOAD_DIRECTORY = 'img/events/uploads';

    /**
     * The departments listed on the departments page.
     */
    public const DEPARTMENTS = [
        'Strategic Affairs & Government Engagement',
        'Protocol & Diplomatic Services',
        'Event & Conference Management',
        'Destination Management & Hospitality',
        'Tours & Experiences',
        'Media & Communications',
        'Business Development & Partnerships',
        'Training & Capacity Building',
        'Finance & Administration',
    ];

    /**
     * Web addresses already taken by the hand-built event pages.
     */
    public const RESERVED_SLUGS = [
        'alc-2024-fft',
        'far4vibe-2024',
        'ijuka-omuka-2024',
        'kiost-delegation',
        'marcosio-2025',
        'nane-nane-summary',
        'oryx-energy-iftar-gala-2026',
        'row-2025',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'cover_image',
        'hero_position',
        'gallery',
        'details',
        'overview',
        'services',
        'experience',
        'impact',
        'partners',
        'event_category_id',
        'start_date',
        'end_date',
        'location',
        'department',
        'client',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'gallery' => 'array',
            'overview' => 'array',
            'services' => 'array',
            'partners' => 'array',
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    protected static function booted(): void
    {
        static::updated(function (Event $event) {
            $before = array_merge([$event->getOriginal('cover_image')], $event->getOriginal('gallery') ?? []);
            $after = array_merge([$event->cover_image], $event->gallery ?? []);

            static::deleteUploads(array_diff($before, $after));
        });

        static::deleted(function (Event $event) {
            static::deleteUploads(array_merge([$event->cover_image], $event->gallery ?? []));
        });
    }

    /**
     * Only ever removes photos the admin uploaded, never the site's other images.
     *
     * @param  array<int, string|null>  $paths
     */
    protected static function deleteUploads(array $paths): void
    {
        $uploads = array_filter($paths, fn (?string $path) => Str::startsWith((string) $path, self::UPLOAD_DIRECTORY.'/'));

        Storage::disk('site')->delete(array_values($uploads));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function scopeNewestFirst(Builder $query): void
    {
        $query->orderByDesc('start_date')->orderByDesc('id');
    }

    /**
     * Formats dates like the existing pages: "11th March, 2026" or "24 to 28 Feb 2025".
     */
    protected function dateLabel(): Attribute
    {
        return Attribute::get(function (): string {
            $start = $this->start_date;
            $end = $this->end_date;

            if (! $end || $end->isSameDay($start)) {
                return $start->format('jS F, Y');
            }

            if ($start->isSameMonth($end)) {
                return $start->format('j').' to '.$end->format('j M Y');
            }

            if ($start->isSameYear($end)) {
                return $start->format('j M').' to '.$end->format('j M Y');
            }

            return $start->format('j M Y').' to '.$end->format('j M Y');
        });
    }

    /**
     * Splits text typed in the admin into paragraphs at each blank line.
     *
     * @return list<string>
     */
    public function paragraphs(?string $text): array
    {
        return preg_split('/\R\s*\R/', trim((string) $text), -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * The next event up the events page, if any.
     */
    public function newer(): ?self
    {
        $events = static::newestFirst()->get(['id', 'title', 'slug']);

        return $events->get($events->search(fn (Event $event) => $event->is($this)) - 1);
    }

    /**
     * The next event down the events page, if any.
     */
    public function older(): ?self
    {
        $events = static::newestFirst()->get(['id', 'title', 'slug']);

        return $events->get($events->search(fn (Event $event) => $event->is($this)) + 1);
    }

    /**
     * The card data read by js/portfolio.js.
     *
     * @return array<string, int|string>
     */
    public function toCard(): array
    {
        return [
            'title' => $this->title,
            'category' => $this->category->name,
            'image' => '/'.$this->cover_image,
            'count' => count($this->gallery),
            'href' => '/portfolio-detail-'.$this->slug,
        ];
    }
}
