@extends('layouts.app')

@section('title', $event->title.' • Event • Salmart Diplomatic Hospitality')
@section('meta_description', $event->meta_description ?: Str::limit($event->paragraphs($event->details)[0] ?? $event->title, 155))
@section('og_type', 'article')
@section('og_image', asset($event->cover_image))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset($event->cover_image) }}');--hero-bg-position:{{ $event->hero_position }}">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <a href="/portfolio">Event</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">{{ $event->title }}</span>
    </nav>
    <h1 class="inner-hero-title">{{ $event->title }}</h1>
  </div>
</section>

<section class="pd-wrap" aria-label="Portfolio detail">
    <div class="pd-gallery" aria-label="Gallery">
      @foreach (array_slice($event->gallery, 0, 6) as $photo)
      <a class="pd-photo" data-lightbox href="{{ asset($photo) }}" aria-label="{{ $event->title }} photo {{ $loop->iteration }}">
        <img src="{{ asset($photo) }}" alt="{{ $event->title }} photo {{ $loop->iteration }}" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      @endforeach
    </div>
    @if (count($event->gallery) > 6)
    <div class="pd-gallery-extra" aria-hidden="true">
      @foreach (array_slice($event->gallery, 6) as $photo)
      <a data-lightbox href="{{ asset($photo) }}" aria-label="{{ $event->title }} photo {{ $loop->iteration + 6 }}"></a>
      @endforeach
    </div>
    @endif

    <div class="pd-detail">
      <article class="pd-content">
        <h2 class="pd-title">Event Details</h2>
        @foreach ($event->paragraphs($event->details) as $paragraph)
        <p>{{ $paragraph }}</p>
        @endforeach

        @if (filled($event->overview))
        <div class="pd-block" aria-label="Event overview">
          <h3>Overview</h3>
          @foreach ($event->overview as $row)
          <p><strong>{{ $row['label'] }}:</strong> {{ $row['value'] }}</p>
          @endforeach
        </div>
        @endif

        @if (filled($event->services))
        <div class="pd-block" aria-label="Services delivered">
          <h3>Services Delivered</h3>
          <ul>
            @foreach ($event->services as $service)
            <li>{{ $service }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if (filled($event->experience))
        <div class="pd-block" aria-label="Event experience">
          <h3>Event Experience</h3>
          @foreach ($event->paragraphs($event->experience) as $paragraph)
          <p>{{ $paragraph }}</p>
          @endforeach
        </div>
        @endif

        @if (filled($event->impact))
        <div class="pd-block" aria-label="Impact">
          <h3>Impact</h3>
          @foreach ($event->paragraphs($event->impact) as $paragraph)
          <p>{{ $paragraph }}</p>
          @endforeach
        </div>
        @endif

        @if (filled($event->partners))
        <div class="pd-block" aria-label="Brands and partners">
          <h3>Brands / Partners Covered</h3>
          <ul>
            @foreach ($event->partners as $partner)
            <li>{{ $partner }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </article>

      <aside class="pd-aside" aria-label="Portfolio summary">
        <h4>Summary</h4>
        <div class="pd-meta">
          <div class="pd-meta-row"><strong>Category</strong><span>{{ $event->category->name }}</span></div>
          <div class="pd-meta-row"><strong>Date</strong><span>{{ $event->date_label }}</span></div>
          <div class="pd-meta-row"><strong>Location</strong><span>{{ $event->location }}</span></div>
          <div class="pd-meta-row"><strong>Department</strong><span>{{ $event->department }}</span></div>
          @if (filled($event->client))
          <div class="pd-meta-row"><strong>Client</strong><span>{{ $event->client }}</span></div>
          @endif
        </div>

        <div class="pd-share" aria-label="Share">
          <span class="pd-share-label">Share:</span>
          <a class="wa" href="#" data-share-wa aria-label="Share on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg></a>
          <a class="ig" href="#" data-share-ig aria-label="Share on Instagram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg></a>
        </div>
      </aside>
    </div>

    @php($newer = $event->newer())
    @php($older = $event->older())
    <div class="pd-nav" aria-label="Previous and next portfolio">
      <a href="{{ $newer ? '/portfolio-detail-'.$newer->slug : '/portfolio' }}" aria-label="{{ $newer ? 'Previous: '.$newer->title : 'Back to events' }}">
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <span><span class="pd-nav-kicker">{{ $newer ? 'Previous' : 'Back' }}</span><br /><span class="pd-nav-title">{{ $newer ? $newer->title : 'All Events' }}</span></span>
      </a>

      <div class="pd-nav-center" aria-hidden="true"><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span></div>

      {{-- The oldest admin event leads on to the first hand-built event on the events page. --}}
      <a href="{{ $older ? '/portfolio-detail-'.$older->slug : '/portfolio-detail-oryx-energy-iftar-gala-2026' }}" aria-label="Next: {{ $older ? $older->title : 'Oryx Energy Iftar Gala 2026' }}" style="justify-content:flex-end;text-align:right">
        <span><span class="pd-nav-kicker">Next</span><br /><span class="pd-nav-title">{{ $older ? $older->title : 'Oryx Energy Iftar Gala 2026' }}</span></span>
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio-detail.js') }}"></script>
@endpush
