@extends('layouts.app')

@section('title', 'Oryx Energy Iftar Gala 2026 • Event • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart produced the Oryx Energy Iftar Gala 2026 — an elegant corporate and diplomatic gala dinner blending Ramadan tradition with world-class event production and hospitality.')
@section('og_type', 'article')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/oryx.jpeg') }}');--hero-bg-position:center 12%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <a href="/portfolio">Event</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Oryx Energy Iftar Gala 2026</span>
    </nav>
    <h1 class="inner-hero-title">Oryx Energy Iftar Gala 2026</h1>
  </div>
</section>

<section class="pd-wrap" aria-label="Portfolio detail">
    <div class="pd-gallery" aria-label="Gallery">
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/oryx.jpeg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 1">
        <img src="{{ asset('img/events/oryx.jpeg') }}" alt="Oryx Energy Iftar Gala 2026 photo 1" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/oryx (1).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 2">
        <img src="{{ asset('img/events/oryx (1).jpg') }}" alt="Oryx Energy Iftar Gala 2026 photo 2" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/oryx (2).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 3">
        <img src="{{ asset('img/events/oryx (2).jpg') }}" alt="Oryx Energy Iftar Gala 2026 photo 3" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/oryx (3).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 4">
        <img src="{{ asset('img/events/oryx (3).jpg') }}" alt="Oryx Energy Iftar Gala 2026 photo 4" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/oryx (4).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 5">
        <img src="{{ asset('img/events/oryx (4).jpg') }}" alt="Oryx Energy Iftar Gala 2026 photo 5" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/oryx (5).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 6">
        <img src="{{ asset('img/events/oryx (5).jpg') }}" alt="Oryx Energy Iftar Gala 2026 photo 6" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
    </div>
    <div class="pd-gallery-extra" aria-hidden="true">
      <a data-lightbox href="{{ asset('img/events/oryx (6).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 7"></a>
      <a data-lightbox href="{{ asset('img/events/oryx (7).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 8"></a>
      <a data-lightbox href="{{ asset('img/events/oryx (8).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 9"></a>
      <a data-lightbox href="{{ asset('img/events/oryx (9).jpg') }}" aria-label="Oryx Energy Iftar Gala 2026 photo 10"></a>
    </div>

    <div class="pd-detail">
      <article class="pd-content">
        <h2 class="pd-title">Event Details</h2>
        <p>The Oryx Energy Iftar Gala 2026 brought together corporate leaders, strategic partners, invited dignitaries, and distinguished guests for an evening of Ramadan fellowship, networking, and hospitality.</p>
        <p>Salmart Diplomatic Hospitality led the protocol and guest hospitality coordination, ensuring smooth guest management, executive reception services, ceremonial coordination, and a refined VIP experience aligned with corporate and diplomatic hospitality standards.</p>

        <div class="pd-block" aria-label="Event overview">
          <h3>Overview</h3>
          <p><strong>Venue:</strong> VI Restaurant, Urban by CityBlue Hotel</p>
          <p><strong>Event:</strong> Oryx Energy Iftar Gala 2026</p>
          <p><strong>Date:</strong> 11th March, 2026</p>
          <p><strong>Host Organization:</strong> Oryx Energy</p>
          <p><strong>Hospitality &amp; Protocol Partner:</strong> Salmart Diplomatic Hospitality</p>
        </div>

        <div class="pd-block" aria-label="Services delivered">
          <h3>Services Delivered</h3>
          <ul>
            <li>Executive protocol and diplomatic hospitality coordination</li>
            <li>VIP guest reception and ushering services</li>
            <li>Seating arrangement and guest flow management</li>
            <li>Event logistics support and coordination</li>
            <li>Corporate hospitality management</li>
            <li>Guest relations and ceremonial support</li>
            <li>On-site event coordination and operational supervision</li>
            <li>Professional hospitality staffing and protocol assistance</li>
          </ul>
        </div>

        <div class="pd-block" aria-label="Event experience">
          <h3>Event Experience</h3>
          <p>The evening was designed to foster meaningful engagement among stakeholders in a warm and culturally respectful environment. Guests experienced a professionally managed reception, seamless coordination, and premium hospitality services throughout the Iftar gathering.</p>
          <p>The atmosphere blended corporate elegance with Ramadan traditions, creating an environment suitable for networking, appreciation, and relationship strengthening among attendees.</p>
        </div>

        <div class="pd-block" aria-label="Impact">
          <h3>Impact</h3>
          <p>The successful execution of the Oryx Energy Iftar Gala reinforced strong corporate relationships and showcased the importance of professional protocol and hospitality management in high-level corporate events. Salmart Diplomatic Hospitality contributed to delivering an organized, welcoming, and memorable experience for all invited guests and partners.</p>
        </div>

        <div class="pd-block" aria-label="Brands and partners">
          <h3>Brands / Partners Covered</h3>
          <ul>
            <li>Oryx Energy</li>
            <li>Salmart Diplomatic Hospitality</li>
            <li>Urban by CityBlue Hotel</li>
            <li>VI Restaurant</li>
          </ul>
        </div>
      </article>

      <aside class="pd-aside" aria-label="Portfolio summary">
        <h4>Summary</h4>
        <div class="pd-meta">
          <div class="pd-meta-row"><strong>Category</strong><span>Corporate Event, Hospitality, Iftar Gala</span></div>
          <div class="pd-meta-row"><strong>Date</strong><span>11th March, 2026</span></div>
          <div class="pd-meta-row"><strong>Location</strong><span>VI Restaurant, Urban by CityBlue Hotel</span></div>
          <div class="pd-meta-row"><strong>Department</strong><span>Protocol &amp; Diplomatic Hospitality Services</span></div>
          <div class="pd-meta-row"><strong>Client</strong><span>Oryx Energy</span></div>
        </div>

        <div class="pd-share" aria-label="Share">
          <span class="pd-share-label">Share:</span>
          <a class="wa" href="#" data-share-wa aria-label="Share on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg></a>
          <a class="ig" href="#" data-share-ig aria-label="Share on Instagram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg></a>
        </div>
      </aside>
    </div>

    <div class="pd-nav" aria-label="Previous and next portfolio">
      <a href="/portfolio" aria-label="Back to events">
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <span><span class="pd-nav-kicker">Back</span><br /><span class="pd-nav-title">All Events</span></span>
      </a>

      <div class="pd-nav-center" aria-hidden="true"><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span></div>

      <a href="/portfolio-detail-alc-2024-fft" aria-label="Next: ALC 2025 & 10th FFT Anniversary" style="justify-content:flex-end;text-align:right">
        <span><span class="pd-nav-kicker">Next</span><br /><span class="pd-nav-title">ALC 2025 &amp; 10th FFT Anniversary</span></span>
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio-detail.js') }}"></script>
@endpush
