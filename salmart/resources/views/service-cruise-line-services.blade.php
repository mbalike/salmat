@extends('layouts.app')

@section('title', 'Cruise Line Services • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/yatch.jpg') }}');--hero-bg-position:center 55%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Cruise Line Services</span>
    </nav>

    <h1 class="inner-hero-title">Cruise Line Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/yatch1.jpg') }}" alt="Luxury cruise experience" loading="lazy" />
      </div>

      <div class="feature-body">
        <h2 style="margin-top:0">Vision</h2>
        <p>To make Salmart Diplomatic Hospitality Africa’s leading DMC for cruise experiences, delivering premium, curated, and culturally rich shore excursions that elevate coastal destinations.</p>

        <h2>Overview</h2>
        <p>Cruise Line Services is a specialized Destination Management service offered by Salmart Diplomatic Hospitality, designed for international cruise operators, VIP passengers, and special delegations.</p>
        <p>As a DMC, Salmart Diplomatic goes beyond port reception and logistics. We design and deliver curated shore tours, immersive cultural experiences, adventure activities, and VIP itineraries that transform every cruise stop into a meaningful destination experience.</p>
        <p>Our service is fully turnkey, covering planning, transport, guides, cultural immersion, hospitality coordination, and optional media documentation. This ensures seamless, safe, and premium experiences for guests and operators alike.</p>

        <h2>Core Service Components</h2>

        <h3>1. Curated Shore Tours &amp; Excursions</h3>
        <ul>
          <li>Cultural heritage tours: museums, historical sites, villages, landmarks</li>
          <li>Nature &amp; wildlife experiences: safaris, mangrove tours, coastal reserves</li>
          <li>Adventure &amp; lifestyle activities: city exploration, culinary tours, sailing, diving</li>
          <li>VIP and tailor-made itineraries for executive guests and special delegations</li>
        </ul>

        <h3>2. Port Hospitality &amp; Guest Reception</h3>
        <ul>
          <li>Meet-and-greet services for passengers, crew, and VIP guests</li>
          <li>Coordination with port authorities, customs, and immigration stakeholders</li>
          <li>Cultural welcome ceremonies showcasing local music, traditions, and hospitality</li>
        </ul>

        <h3>3. Transportation &amp; On-Ground Coordination</h3>
        <ul>
          <li>Executive coaches, vehicles, and guided transport to excursions</li>
          <li>Time-sensitive scheduling and route planning aligned with cruise itineraries</li>
          <li>Dedicated on-ground coordinators and tour managers</li>
        </ul>

        <h3>4. Destination Promotion &amp; Experience Branding</h3>
        <ul>
          <li>Collaboration with tourism boards and local authorities</li>
          <li>Storytelling through photography, videography, and digital content</li>
          <li>Branded experiences that enhance destination appeal and cruise line visibility</li>
        </ul>

        <h3>5. Event Integration &amp; VIP Engagement</h3>
        <ul>
          <li>Shore-side receptions, cultural showcases, and curated networking events</li>
          <li>Integration with diplomatic, corporate, or investor engagements during port calls</li>
          <li>Optional media coverage and experience documentation</li>
        </ul>

        <div class="callout" aria-label="For our clients">
          <strong>For Our Clients</strong>
          <span>Cruise operators benefit from a single, reliable DMC partner delivering high-quality shore experiences that enhance passenger satisfaction and brand reputation. Guests enjoy immersive, well-managed, and memorable experiences tailored to their interests and schedule.</span>
        </div>

        <div class="callout" aria-label="For Salmart" style="margin-top:14px">
          <strong>For Salmart Diplomatic Hospitality</strong>
          <span>This service strengthens Salmart Diplomatic’s position as a full-service African DMC, combining tourism, culture, hospitality, and diplomatic-level attention to detail, while positioning Africa’s coastal destinations as premium cruise hubs.</span>
        </div>

        <p style="margin:18px 0 0;color:#6b7280">📌 Transforming cruise stops into world-class destination experiences.</p>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Best for</strong><br/>Incentives • VIP groups</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Onboard + shore planning</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Tone</strong><br/>Luxury • privacy-first</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.5 15.5 0 006.6 6.6l2.2-2.2a1 1 0 011-.24c1.1.36 2.3.56 3.5.56a1 1 0 011 1V20a1 1 0 01-1 1C10.4 21 3 13.6 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.4.56 3.5a1 1 0 01-.25 1L6.6 10.8z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Support</strong><br/>Consultation by appointment</div>
        </div>
      </div>

      <a class="btn-solid" href="/contact" style="width:100%">Request support</a>
      <div class="callout" style="margin-top:14px">
        <strong>Planning a cruise program?</strong>
        <span>Share your group size, dates, destinations, and objectives. Salmart Diplomatic will propose an itinerary and delivery approach.</span>
      </div>

      <nav class="side-nav" aria-label="Services navigation">
        <div class="side-nav-title">Explore Services</div>
        <ul>
          <li><a href="/service-event-management-production">Event Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-mice-delivery">MICE Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-destination-management-hospitality">Destination Management &amp; Hospitality <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-cruise-line-services">Cruise Line Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-sports-tourism-services">Sports Tourism Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-protocol-diplomatic">Protocol &amp; Diplomatic Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-tours-experiences">Tours &amp; Experiences Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-media-management-strategic-storytelling">Media Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li class="all"><a href="/services">View all services</a></li>
        </ul>
      </nav>
    </aside>

  </div>
</section>

<section class="page-wrap" aria-label="Service photos" style="padding-top:0">
  <section class="service-photos" aria-label="Service photos">
    <div class="service-photos-title">Service Photos</div>
    <div class="service-photos-grid">
      <img src="{{ asset('img/yatch2.jpg') }}" alt="Cruise deck" loading="lazy" />
      <img src="{{ asset('img/yatch3.webp') }}" alt="Destination excursion" loading="lazy" />
      <img src="{{ asset('img/yatchy.jpg') }}" alt="Onboard gathering" loading="lazy" />
      <img src="{{ asset('img/yatch5.jpg') }}" alt="VIP experience" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
