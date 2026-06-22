@extends('layouts.app')

@section('title', 'Tours &amp; Experiences • Departments • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/tourism.jpg') }}');--hero-bg-position:center 1%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Tours &amp; Experiences</span>
    </nav>

    <h1 class="inner-hero-title">Tours &amp; Experiences</h1>
  </div>
</section>

<main id="main" class="dept-detail">
  <section class="page-wrap" aria-label="Department content">
    <div class="page-grid">

      <aside class="dept-aside" aria-label="Department sidebar">
        <section class="aside-widget" aria-label="Contact">
          <div class="aside-widget-header">Contact</div>
          <div class="aside-widget-body">
            <div class="aside-kv">
              <div>
                <div class="k">Phone Hours of Availability:</div>
                <div class="v">8am-5pm</div>
              </div>
              <div>
                <div class="k">Phone:</div>
                <div class="v"><a href="tel:+255699611093">+255699 611 093</a></div>
              </div>
              <div>
                <div class="k">Email:</div>
                <div class="v"><a href="mailto:relations@salmartdiplomatic.com">relations@salmartdiplomatic.com</a></div>
              </div>
            </div>
          </div>
        </section>

        <section class="aside-widget" aria-label="All departments">
          <div class="aside-widget-header">All Categories</div>
          <div class="aside-widget-body">
            <ul class="aside-links">
              <li><a href="/department-business-development-partnerships">Business Development &amp; Partnerships <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-media-communications">Media &amp; Communications <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-event-conference-management">Event &amp; Conference Management <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-protocol-diplomatic-services">Protocol &amp; Diplomatic Services <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-destination-management-hospitality">Destination Management &amp; Hospitality <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-tours-experiences" aria-current="page">Tours &amp; Experiences <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-strategic-affairs-scientific-engagement">Strategic Affairs &amp; Government Engagement <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-training-capacity-building">Training &amp; Capacity Building <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-finance-administration">Finance &amp; Administration <span class="plus" aria-hidden="true">+</span></a></li>
            </ul>
          </div>
        </section>

        <section class="download-card" aria-label="Department profile">
          <a class="dl" href="/contact" aria-label="Request department profile">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 3v10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="m8 11 4 4 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4 21h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </a>
          <div class="body">
            <div class="meta">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z" stroke="currentColor" stroke-width="2"/>
                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" fill="currentColor" opacity=".95"/>
              </svg>
              <span>Department Profile</span>
            </div>
            <h3>Download</h3>
          </div>
        </section>
      </aside>

      <article class="feature-card article" aria-label="Department article">
        <div class="feature-media" aria-label="Department featured image" style="--feature-media-x:50%;--feature-media-y:30%;">
          <img
            src="{{ asset('img/tours.jpg') }}"
            alt="Coastal destination experience"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Tours &amp; Experiences Department</h2>
          <div class="tagline">Every journey, perfectly curated. Every destination, fully experienced.</div>

          <h2>Vision</h2>
          <p>To make Salmart Diplomatic Hospitality Africa’s leading DMC for curated tours, immersive experiences, and premium destination services, blending culture, leisure, wildlife, and diplomacy.</p>

          <h2>Overview</h2>
          <p>The Tours &amp; Experiences Department is the hub for all visitor experiences across Africa, providing end-to-end planning, coordination, and execution.</p>

          <p>This department includes:</p>
          <ul>
            <li>Cruise Line Services: shore excursions and port hospitality</li>
            <li>Sports Tourism Services: football teams, fans, and sporting events</li>
            <li>Safari &amp; Wildlife Experiences: guided tours in national parks and game reserves</li>
            <li>Beaches &amp; Coastal Experiences: leisure, water activities, and cultural coastal tours</li>
            <li>Cultural &amp; Heritage Tours: immersive itineraries for delegations, corporates, and leisure travelers</li>
          </ul>

          <p>Every experience is fully managed, seamless, culturally rich, and designed to leave a lasting impression.</p>

          <h2>Core Functions</h2>

          <h3>1. Curated Cultural &amp; Heritage Experiences</h3>
          <ul>
            <li>Visits to historical sites, museums, villages, and cultural centers</li>
            <li>Traditional arts, music, dance, and culinary experiences</li>
            <li>Storytelling to deepen engagement and understanding</li>
          </ul>

          <h3>2. Safari &amp; Wildlife Experiences</h3>
          <ul>
            <li>Guided safaris in national parks and private reserves</li>
            <li>Wildlife photography, bird watching, and eco-tourism adventures</li>
            <li>Luxury lodges, eco-camps, and VIP safari itineraries</li>
          </ul>

          <h3>3. Beaches &amp; Coastal Experiences</h3>
          <ul>
            <li>Private beach tours, cultural beach villages, and water sports</li>
            <li>Coastal leisure experiences for VIPs, cruise passengers, and families</li>
            <li>Integration with cultural showcases and local cuisine experiences</li>
          </ul>

          <h3>4. Cruise Line Services</h3>
          <ul>
            <li>Port hospitality, VIP reception, and cultural welcome ceremonies</li>
            <li>Curated shore excursions highlighting culture, heritage, and nature</li>
            <li>Coordination with cruise operators and local tourism authorities</li>
            <li>Transport, guides, and guest liaison support</li>
          </ul>

          <h3>5. Sports Tourism Services</h3>
          <ul>
            <li>Football team and delegation handling: travel, accommodation, stadium coordination</li>
            <li>Fan engagement: guided tours, match-day experiences, cultural integration</li>
            <li>Event and match-day support, including hospitality, scheduling, and protocol</li>
          </ul>

          <h3>6. VIP &amp; Tailored Itineraries</h3>
          <ul>
            <li>Personalized journeys for executives, diplomats, and high-profile visitors</li>
            <li>Luxury transport, private guides, exclusive access, and flexible schedules</li>
            <li>Integration with corporate events, forums, and diplomatic engagements</li>
          </ul>

          <h3>7. Full Logistics &amp; Guest Support</h3>
          <ul>
            <li>Transport, accommodation, and concierge services</li>
            <li>On-ground guest liaison ensuring seamless flow</li>
            <li>Real-time troubleshooting and continuous quality monitoring</li>
          </ul>

          <h3>8. Destination Promotion &amp; Marketing</h3>
          <ul>
            <li>Collaborating with tourism boards and partners to enhance destination appeal</li>
            <li>Media documentation, storytelling, and social media engagement</li>
            <li>Highlighting African destinations as premium cultural, leisure, and adventure hubs</li>
          </ul>

          <div class="callout" aria-label="For our clients">
            <strong>For Our Clients</strong>
            <span>Clients receive turnkey, immersive, and high-quality experiences for leisure, diplomacy, corporate purposes, cruise travel, or sports events, with seamless logistics and premium hospitality.</span>
          </div>

          <div class="callout" aria-label="For Salmart" style="margin-top:14px">
            <strong>For Salmart Diplomatic</strong>
            <span>This department anchors our DMC capabilities, combining tours, cruises, sports, wildlife, and coastal experiences under one experiential portfolio, positioning Salmart Diplomatic as Africa’s premier provider of curated, high-value destination experiences.</span>
          </div>

          <p style="margin:18px 0 0;color:#6b7280">📌 Every journey, perfectly curated. Every destination, fully experienced.</p>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
