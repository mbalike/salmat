@extends('layouts.app')

@section('title', '3rd FAR4ViBE Conference 2024 • Event • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart produced the 3rd FAR4ViBE Conference 2024 — an international festival celebrating Afro-Caribbean culture and vibrancy, managed with full event production and hospitality services.')
@section('og_type', 'article')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/F4RVIBE.jpeg') }}');--hero-bg-position:center 16%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <a href="/portfolio">Event</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">3rd FAR4ViBE Conference 2024</span>
    </nav>
    <h1 class="inner-hero-title">3rd FAR4ViBE Conference 2024</h1>
  </div>
</section>

<section class="pd-wrap" aria-label="Portfolio detail">
    <div class="pd-gallery" aria-label="Gallery">
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/FAR4VIBE%20(1).jpeg') }}" aria-label="FAR4ViBE Conference photo 1">
        <img src="{{ asset('img/events/FAR4VIBE%20(1).jpeg') }}" alt="FAR4ViBE Conference photo 1" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/FAR4VIBE%20(2).jpeg') }}" aria-label="FAR4ViBE Conference photo 2">
        <img src="{{ asset('img/events/FAR4VIBE%20(2).jpeg') }}" alt="FAR4ViBE Conference photo 2" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/FAR4VIBE%20(3).jpeg') }}" aria-label="FAR4ViBE Conference photo 3">
        <img src="{{ asset('img/events/FAR4VIBE%20(3).jpeg') }}" alt="FAR4ViBE Conference photo 3" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/FAR4VIBE%20(4).jpeg') }}" aria-label="FAR4ViBE Conference photo 4">
        <img src="{{ asset('img/events/FAR4VIBE%20(4).jpeg') }}" alt="FAR4ViBE Conference photo 4" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/FAR4VIBE%20(5).jpeg') }}" aria-label="FAR4ViBE Conference photo 5">
        <img src="{{ asset('img/events/FAR4VIBE%20(5).jpeg') }}" alt="FAR4ViBE Conference photo 5" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/FAR4VIBE%20(6).jpeg') }}" aria-label="FAR4ViBE Conference photo 6">
        <img src="{{ asset('img/events/FAR4VIBE%20(6).jpeg') }}" alt="FAR4ViBE Conference photo 6" loading="lazy" decoding="async" />
        <span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span>
      </a>
    </div>

    <div class="pd-detail">
      <article class="pd-content">
        <h2 class="pd-title">Event Details</h2>
        <p>The 3rd FAR4ViBE Conference gathered researchers, policymakers, and industry stakeholders to advance fisheries and aquaculture research and strengthen investment readiness across the sector.</p>
        <p>Salmart Diplomatic Hospitality supported dignitary hosting, managed exhibition flow, and coordinated media and PR, culminating in the launch of The Bahari Accelerator.</p>

        <div class="pd-block" aria-label="Event overview">
          <h3>Overview</h3>
          <p><strong>Venue:</strong> Arusha International Conference Centre (AICC)</p>
          <p><strong>Guest of Honor: Hon. Abdallah Hamis Ulega, Minister of Livestock and Fisheries</strong></p>
          <p><strong>Client:</strong> Tanzania Fisheries Research Institute (TAFIRI)</p>
          <p><strong>Dates:</strong> 29th to 31st October 2024</p>
        </div>

        <div class="pd-block" aria-label="Services delivered">
          <h3>Services Delivered</h3>
          <ul>
            <li>Protocol and dignitary hosting</li>
            <li>Exhibition coordination</li>
            <li>Media and PR management</li>
            <li>Launch support for The Bahari Accelerator</li>
          </ul>
        </div>

        <div class="pd-block" aria-label="Impact">
          <h3>Impact</h3>
          <p>Strengthened FAR4ViBE as a leading research and investment platform in African fisheries, boosting partner engagement and visibility.</p>
        </div>

        <div class="pd-block" aria-label="Brands and partners">
          <h3>Brands / Partners Covered</h3>
        </div>
      </article>

      <aside class="pd-aside" aria-label="Portfolio summary">
        <h4>Summary</h4>
        <div class="pd-meta">
          <div class="pd-meta-row"><strong>Category</strong><span>Conference</span></div>
          <div class="pd-meta-row"><strong>Date</strong><span>29 to 31 Oct 2024</span></div>
          <div class="pd-meta-row"><strong>Location</strong><span>AICC, Arusha</span></div>
          <div class="pd-meta-row"><strong>Department</strong><span>Event & Conference Management</span></div>
        </div>

        <div class="pd-share" aria-label="Share">
          <span class="pd-share-label">Share:</span>
          <a class="wa" href="#" data-share-wa aria-label="Share on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg></a>          <a class="ig" href="#" data-share-ig aria-label="Share on Instagram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg></a>
        </div>
      </aside>
    </div>

    <div class="pd-nav" aria-label="Previous and next portfolio">
      <a href="/portfolio-detail-ijuka-omuka-2024" aria-label="Previous: Ijuka Omuka Festival 2024">
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <span><span class="pd-nav-kicker">Previous</span><br /><span class="pd-nav-title">Ijuka Omuka Festival 2024</span></span>
      </a>

      <div class="pd-nav-center" aria-hidden="true"><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span></div>

      <a href="/portfolio-detail-row-2025" aria-label="Next: Regenerative Ocean Week (ROW) 2025" style="justify-content:flex-end;text-align:right">
        <span><span class="pd-nav-kicker">Next</span><br /><span class="pd-nav-title">Regenerative Ocean Week (ROW) 2025</span></span>
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio-detail.js') }}"></script>
@endpush
