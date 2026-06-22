@extends('layouts.app')

@section('title', 'Regenerative Ocean Week (ROW) 2025 • Event • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart managed Regenerative Ocean Week (ROW) 2025 — a landmark ocean sustainability summit bringing together diplomats, scientists, and conservationists in Tanzania for marine dialogue.')
@section('og_type', 'article')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/ROW25 (2).jpg') }}');--hero-bg-position:center 45%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <a href="/portfolio">Event</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Regenerative Ocean Week (ROW) 2025</span>
    </nav>
    <h1 class="inner-hero-title">Regenerative Ocean Week (ROW) 2025</h1>
  </div>
</section>

<section class="pd-wrap" aria-label="Portfolio detail">
    <div class="pd-gallery" aria-label="Gallery">
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (1).jpg') }}" aria-label="ROW 2025 Event"><img src="{{ asset('img/events/ROW25 (1).jpg') }}" alt="ROW 2025 Event" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (2).jpg') }}" aria-label="ROW 2025 moments"><img src="{{ asset('img/events/ROW25 (2).jpg') }}" alt="ROW 2025 moments" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (4).jpg') }}" aria-label="Conference sessions"><img src="{{ asset('img/events/ROW25 (4).jpg') }}" alt="Conference sessions" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (5).jpg') }}" aria-label="Ocean innovation"><img src="{{ asset('img/events/ROW25 (5).jpg') }}" alt="Ocean innovation" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (6).jpg') }}" aria-label="Event highlights"><img src="{{ asset('img/events/ROW25 (6).jpg') }}" alt="Event highlights" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (7).jpg') }}" aria-label="Participants"><img src="{{ asset('img/events/ROW25 (7).jpg') }}" alt="Participants" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (8).jpg') }}" aria-label="Collaboration"><img src="{{ asset('img/events/ROW25 (8).jpg') }}" alt="Collaboration" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (9).jpg') }}" aria-label="Networking"><img src="{{ asset('img/events/ROW25 (9).jpg') }}" alt="Networking" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (10).jpg') }}" aria-label="Blue economy initiatives"><img src="{{ asset('img/events/ROW25 (10).jpg') }}" alt="Blue economy initiatives" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (11).jpg') }}" aria-label="Panel discussions"><img src="{{ asset('img/events/ROW25 (11).jpg') }}" alt="Panel discussions" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (12).jpg') }}" aria-label="Keynote sessions"><img src="{{ asset('img/events/ROW25 (12).jpg') }}" alt="Keynote sessions" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (13).jpg') }}" aria-label="Event coverage"><img src="{{ asset('img/events/ROW25 (13).jpg') }}" alt="Event coverage" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (14).jpg') }}" aria-label="Ocean conservation"><img src="{{ asset('img/events/ROW25 (14).jpg') }}" alt="Ocean conservation" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW25 (15).jpg') }}" aria-label="Closing remarks"><img src="{{ asset('img/events/ROW25 (15).jpg') }}" alt="Closing remarks" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW.jpg') }}" aria-label="ROW gathering"><img src="{{ asset('img/events/ROW.jpg') }}" alt="ROW gathering" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/ROW2.jpg') }}" aria-label="ROW 2025 moments"><img src="{{ asset('img/events/ROW2.jpg') }}" alt="ROW 2025 moments" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/RegOceanWeek (1).jpg') }}" aria-label="Regenerative ocean initiatives"><img src="{{ asset('img/events/RegOceanWeek (1).jpg') }}" alt="Regenerative ocean initiatives" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/RegOceanWeek (2).jpg') }}" aria-label="Ocean regeneration initiatives"><img src="{{ asset('img/events/RegOceanWeek (2).jpg') }}" alt="Ocean regeneration initiatives" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
    </div>

    <div class="pd-detail">
      <article class="pd-content">
        <h2 class="pd-title">Event Details</h2>
        <p>Regenerative Ocean Week 2025 (ROW 2025) convened scientists, innovators, policymakers, entrepreneurs, and ocean champions to accelerate ocean innovation and drive the regenerative blue economy in Tanzania and beyond.</p>
        <p>Salmart Diplomatic Hospitality delivered protocol, branded exhibition coordination, media coverage, conference moderation support, and logistics oversight, including support for the launch of The Bahari Accelerator.</p>

        <div class="pd-block" aria-label="Event overview">
          <h3>Overview</h3>
          <p><strong>Venue:</strong> Ramada Resort, Dar es Salaam</p>
          <p><strong>Guest of Honor: Hon. Alexander Pastory Mnyeti, Deputy Minister of Livestock and Fisheries</strong></p>
          <p><strong>Client:</strong> International Union for Conservation of Nature (IUCN)</p>
          <p><strong>Dates:</strong> 24th to 28th February 2025</p>
        </div>

        <div class="pd-block" aria-label="Services delivered">
          <h3>Services Delivered</h3>
          <ul>
            <li>Protocol and dignitary management</li>
            <li>Exhibition coordination and branded setups</li>
            <li>Media coverage, photography, and videography</li>
            <li>MC and conference moderation</li>
            <li>Press conference management</li>
            <li>Logistics oversight and smooth execution</li>
            <li>Launch support for The Bahari Accelerator</li>
          </ul>
        </div>

        <div class="pd-block" aria-label="Impact">
          <h3>Impact</h3>
          <p>Established ROW as a pioneering international platform for blue economy collaboration, strengthening Tanzania’s position as a hub for ocean innovation and partnership.</p>
        </div>

        <div class="pd-block" aria-label="Brands and partners">
          <h3>Brands / Partners Covered</h3>
        </div>
      </article>

      <aside class="pd-aside" aria-label="Portfolio summary">
        <h4>Summary</h4>
        <div class="pd-meta">
          <div class="pd-meta-row"><strong>Category</strong><span>Conference</span></div>
          <div class="pd-meta-row"><strong>Date</strong><span>24 to 28 Feb 2025</span></div>
          <div class="pd-meta-row"><strong>Location</strong><span>Ramada Resort, Dar es Salaam</span></div>
          <div class="pd-meta-row"><strong>Department</strong><span>Protocol & Diplomatic Services</span></div>
        </div>

        <div class="pd-share" aria-label="Share">
          <span class="pd-share-label">Share:</span>
          <a class="wa" href="#" data-share-wa aria-label="Share on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg></a>          <a class="ig" href="#" data-share-ig aria-label="Share on Instagram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg></a>
        </div>
      </aside>
    </div>

    <div class="pd-nav" aria-label="Previous and next portfolio">
      <a href="/portfolio-detail-far4vibe-2024" aria-label="Previous: 3rd FAR4ViBE Conference 2024">
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <span><span class="pd-nav-kicker">Previous</span><br /><span class="pd-nav-title">3rd FAR4ViBE Conference 2024</span></span>
      </a>

      <div class="pd-nav-center" aria-hidden="true"><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span></div>

      <a href="/portfolio-detail-marcosio-2025" aria-label="Next: MarCOSIO Fisheries Exchange Workshop 2025" style="justify-content:flex-end;text-align:right">
        <span><span class="pd-nav-kicker">Next</span><br /><span class="pd-nav-title">MarCOSIO Fisheries Exchange Workshop 2025</span></span>
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio-detail.js') }}"></script>
@endpush
