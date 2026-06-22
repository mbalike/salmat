@extends('layouts.app')

@section('title', 'Korean Delegation Visit to Tanzania • Event • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/korea-1 (21).jpeg') }}');--hero-bg-position:center 30%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <a href="/portfolio">Event</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Korean Delegation Visit to Tanzania</span>
    </nav>
    <h1 class="inner-hero-title">Korean Delegation Visit to Tanzania</h1>
  </div>
</section>

<section class="pd-wrap" aria-label="Portfolio detail">
    <div class="pd-gallery" aria-label="Gallery">
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/korea-1.jpeg') }}" aria-label="Korean delegation — photo 1"><img src="{{ asset('img/events/korea-1.jpeg') }}" alt="Korean delegation — photo 1" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/korea-1 (2).jpeg') }}" aria-label="Korean delegation — photo 2"><img src="{{ asset('img/events/korea-1 (2).jpeg') }}" alt="Korean delegation — photo 2" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/korea-1 (3).jpeg') }}" aria-label="Korean delegation — photo 3"><img src="{{ asset('img/events/korea-1 (3).jpeg') }}" alt="Korean delegation — photo 3" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/korea-1 (4).jpeg') }}" aria-label="Korean delegation — photo 4"><img src="{{ asset('img/events/korea-1 (4).jpeg') }}" alt="Korean delegation — photo 4" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/korea-1 (5).jpeg') }}" aria-label="Korean delegation — photo 5"><img src="{{ asset('img/events/korea-1 (5).jpeg') }}" alt="Korean delegation — photo 5" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/korea-1 (6).jpeg') }}" aria-label="Korean delegation — photo 6"><img src="{{ asset('img/events/korea-1 (6).jpeg') }}" alt="Korean delegation — photo 6" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
    </div>
    <div class="pd-gallery-extra" aria-hidden="true">
      <a data-lightbox href="{{ asset('img/events/korea-1 (7).jpeg') }}" aria-label="Korean delegation — photo 7"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (8).jpeg') }}" aria-label="Korean delegation — photo 8"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (9).jpeg') }}" aria-label="Korean delegation — photo 9"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (10).jpeg') }}" aria-label="Korean delegation — photo 10"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (11).jpeg') }}" aria-label="Korean delegation — photo 11"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (12).jpeg') }}" aria-label="Korean delegation — photo 12"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (13).jpeg') }}" aria-label="Korean delegation — photo 13"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (14).jpeg') }}" aria-label="Korean delegation — photo 14"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (15).jpeg') }}" aria-label="Korean delegation — photo 15"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (16).jpeg') }}" aria-label="Korean delegation — photo 16"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (17).jpeg') }}" aria-label="Korean delegation — photo 17"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (18).jpeg') }}" aria-label="Korean delegation — photo 18"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (19).jpeg') }}" aria-label="Korean delegation — photo 19"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (20).jpeg') }}" aria-label="Korean delegation — photo 20"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (21).jpeg') }}" aria-label="Korean delegation — photo 21"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (22).jpeg') }}" aria-label="Korean delegation — photo 22"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (23).jpeg') }}" aria-label="Korean delegation — photo 23"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (24).jpeg') }}" aria-label="Korean delegation — photo 24"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (25).jpeg') }}" aria-label="Korean delegation — photo 25"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (26).jpeg') }}" aria-label="Korean delegation — photo 26"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (27).jpeg') }}" aria-label="Korean delegation — photo 27"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (28).jpeg') }}" aria-label="Korean delegation — photo 28"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (29).jpeg') }}" aria-label="Korean delegation — photo 29"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (30).jpeg') }}" aria-label="Korean delegation — photo 30"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (31).jpeg') }}" aria-label="Korean delegation — photo 31"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (32).jpeg') }}" aria-label="Korean delegation — photo 32"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (33).jpeg') }}" aria-label="Korean delegation — photo 33"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (34).jpeg') }}" aria-label="Korean delegation — photo 34"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (35).jpeg') }}" aria-label="Korean delegation — photo 35"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (36).jpeg') }}" aria-label="Korean delegation — photo 36"></a>
      <a data-lightbox href="{{ asset('img/events/korea-1 (37).jpeg') }}" aria-label="Korean delegation — photo 37"></a>
    </div>

    <div class="pd-detail">
      <article class="pd-content">
        <h2 class="pd-title">Event Details</h2>
        <p>This delegation program supported a Korean delegation’s official engagement in Tanzania, combining high-touch hospitality with protocol-driven coordination, schedule protection, and on-ground logistics.</p>
        <p>Salmart Diplomatic Hospitality ensured a seamless visit experience, from arrival support and escorted movements to meeting support, venue readiness, and real-time coordination.</p>

        <div class="pd-block" aria-label="Event overview">
          <h3>Overview</h3>
          <p><strong>Engagement:</strong> Delegation hosting, meetings, and site visits</p>
          <p><strong>Client / Delegation:</strong> Korean Delegation (KIOST visit program)</p>
          <p><strong>Location:</strong> Tanzania</p>
          <p><strong>Dates:</strong> 2025 </p>
        </div>

        <div class="pd-block" aria-label="Services delivered">
          <h3>Services Delivered</h3>
          <ul>
            <li>Protocol planning and on-ground hosting</li>
            <li>Arrival and movement coordination</li>
            <li>Meeting support and run-of-show management</li>
            <li>VIP-ready hospitality and stakeholder care</li>
            <li>Real-time schedule coordination and contingencies</li>
          </ul>
        </div>

        <div class="pd-block" aria-label="Impact">
          <h3>Impact</h3>
          <p>Delivered a professionally hosted delegation experience aligned to diplomatic standards, supporting productive engagements and stakeholder confidence throughout the program.</p>
        </div>

        <div class="pd-block" aria-label="Brands and partners">
          <h3>Brands / Partners Covered</h3>
        </div>
      </article>

      <aside class="pd-aside" aria-label="Portfolio summary">
        <h4>Summary</h4>
        <div class="pd-meta">
          <div class="pd-meta-row"><strong>Category</strong><span>Government</span></div>
          <div class="pd-meta-row"><strong>Date</strong><span>2025</span></div>
          <div class="pd-meta-row"><strong>Location</strong><span>Tanzania</span></div>
          <div class="pd-meta-row"><strong>Department</strong><span>Destination Management &amp; Hospitality</span></div>
        </div>

        <div class="pd-share" aria-label="Share">
          <span class="pd-share-label">Share:</span>
          <a class="wa" href="#" data-share-wa aria-label="Share on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg></a>
          <a class="ig" href="#" data-share-ig aria-label="Share on Instagram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg></a>
        </div>
      </aside>
    </div>

    <div class="pd-nav" aria-label="Previous and next portfolio">
      <a href="/portfolio-detail-marcosio-2025" aria-label="Previous: MarCOSIO Fisheries Exchange Workshop 2025">
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <span><span class="pd-nav-kicker">Previous</span><br /><span class="pd-nav-title">MarCOSIO Fisheries Exchange Workshop 2025</span></span>
      </a>

      <div class="pd-nav-center" aria-hidden="true"><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span></div>

      <a href="/portfolio-detail-nane-nane-summary" aria-label="Next: Nane Nane, Uvuvi &amp; Mifugo Day" style="justify-content:flex-end;text-align:right">
        <span><span class="pd-nav-kicker">Next</span><br /><span class="pd-nav-title">Nane Nane, Uvuvi &amp; Mifugo Day</span></span>
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio-detail.js') }}"></script>
@endpush
