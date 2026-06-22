@extends('layouts.app')

@section('title', 'Nane Nane, Uvuvi & Mifugo Day • Event • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart supported the Nane Nane Farmers, Fisheries & Livestock Day — Tanzania\'s premier agricultural celebration, providing event coordination and hospitality services.')
@section('og_type', 'article')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/NaneNane (10).jpg') }}');--hero-bg-position:center 45%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <a href="/portfolio">Event</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Nane Nane, Uvuvi &amp; Mifugo Day</span>
    </nav>
    <h1 class="inner-hero-title">Nane Nane, Uvuvi &amp; Mifugo Day</h1>
  </div>
</section>

<section class="pd-wrap" aria-label="Portfolio detail">
    <div class="pd-gallery" aria-label="Gallery">
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/NaneNane (1).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 1"><img src="{{ asset('img/events/NaneNane (1).jpg') }}" alt="Nane Nane, Uvuvi &amp; Mifugo Day — photo 1" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/NaneNane (2).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 2"><img src="{{ asset('img/events/NaneNane (2).jpg') }}" alt="Nane Nane, Uvuvi &amp; Mifugo Day — photo 2" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/NaneNane (3).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 3"><img src="{{ asset('img/events/NaneNane (3).jpg') }}" alt="Nane Nane, Uvuvi &amp; Mifugo Day — photo 3" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/NaneNane (4).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 4"><img src="{{ asset('img/events/NaneNane (4).jpg') }}" alt="Nane Nane, Uvuvi &amp; Mifugo Day — photo 4" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/NaneNane (5).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 5"><img src="{{ asset('img/events/NaneNane (5).jpg') }}" alt="Nane Nane, Uvuvi &amp; Mifugo Day — photo 5" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>
      <a class="pd-photo" data-lightbox href="{{ asset('img/events/NaneNane (6).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 6"><img src="{{ asset('img/events/NaneNane (6).jpg') }}" alt="Nane Nane, Uvuvi &amp; Mifugo Day — photo 6" loading="lazy" decoding="async" /><span class="pd-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg></span></a>

      <a data-lightbox href="{{ asset('img/events/NaneNane (7).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 7"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (8).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 8"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (9).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 9"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (10).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 10"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (11).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 11"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (12).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 12"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (13).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 13"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (14).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 14"></a>
      <a data-lightbox href="{{ asset('img/events/NaneNane (15).jpg') }}" aria-label="Nane Nane, Uvuvi &amp; Mifugo Day — photo 15"></a>
    </div>

    <div class="pd-detail">
      <article class="pd-content">
        <h2 class="pd-title">Event Details</h2>
        <p>Nane Nane, Uvuvi &amp; Mifugo Day is a high-visibility national celebration showcasing Tanzania’s agriculture, fisheries, and livestock sectors, bringing together leaders, institutions, exhibitors, and the public.</p>
        <p>Salmart Diplomatic Hospitality supported event operations with a focus on protocol-ready delivery, stakeholder care, and a polished production environment that elevated the program’s public and institutional impact.</p>

        <div class="pd-block" aria-label="Event overview">
          <h3>Overview</h3>
          <p><strong>Event:</strong> Nane Nane, Uvuvi &amp; Mifugo Day</p>
          <p><strong>Location:</strong> Tanzania</p>
          <p><strong>Date:</strong> 8th August</p>
        </div>

        <div class="pd-block" aria-label="Services delivered">
          <h3>Services Delivered</h3>
          <ul>
            <li>Protocol and VIP coordination (as required)</li>
            <li>Event operations and on-site coordination</li>
            <li>Branding support and venue readiness</li>
            <li>Stakeholder hosting and guest experience management</li>
            <li>Media coordination and documentation support (optional)</li>
          </ul>
        </div>

        <div class="pd-block" aria-label="Impact">
          <h3>Impact</h3>
          <p>Supported a well-executed, professional program experience that strengthened stakeholder engagement and amplified sector visibility during the celebration.</p>
        </div>

        <div class="pd-block" aria-label="Brands and partners">
          <h3>Brands / Partners Covered</h3>
        </div>
      </article>

      <aside class="pd-aside" aria-label="Portfolio summary">
        <h4>Summary</h4>
        <div class="pd-meta">
          <div class="pd-meta-row"><strong>Category</strong><span>Events</span></div>
          <div class="pd-meta-row"><strong>Date</strong><span>8th August</span></div>
          <div class="pd-meta-row"><strong>Location</strong><span>Tanzania</span></div>
          <div class="pd-meta-row"><strong>Department</strong><span>Event &amp; Conference Management</span></div>
        </div>

        <div class="pd-share" aria-label="Share">
          <span class="pd-share-label">Share:</span>
          <a class="wa" href="#" data-share-wa aria-label="Share on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg></a>          <a class="ig" href="#" data-share-ig aria-label="Share on Instagram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg></a>
        </div>
      </aside>
    </div>

    <div class="pd-nav" aria-label="Previous and next portfolio">
      <a href="/portfolio-detail-kiost-delegation" aria-label="Previous: Korean Delegation Visit to Tanzania">
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <span><span class="pd-nav-kicker">Previous</span><br /><span class="pd-nav-title">Korean Delegation Visit to Tanzania</span></span>
      </a>

      <div class="pd-nav-center" aria-hidden="true"><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span><span class="pd-nav-dot"></span></div>

      <a href="/portfolio" aria-label="Back to Portfolio" style="justify-content:flex-end;text-align:right">
        <span><span class="pd-nav-kicker">Next</span><br /><span class="pd-nav-title">Portfolio</span></span>
        <span class="pd-nav-pill" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio-detail.js') }}"></script>
@endpush
