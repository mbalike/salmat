@extends('layouts.app')

@section('title', 'Destination Management & Hospitality Department • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's Destination Management & Hospitality department oversees end-to-end logistics, accommodation, ground transfers, and curated experiences for visiting delegations and dignitaries in Tanzania.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/miss universe (6).jpg') }}');--hero-bg-position:center 40%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Destination Management &amp; Hospitality</span>
    </nav>

    <h1 class="inner-hero-title">Destination Management &amp; Hospitality</h1>
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
              <li><a href="/department-destination-management-hospitality" aria-current="page">Destination Management &amp; Hospitality <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-tours-experiences">Tours &amp; Experiences <span class="plus" aria-hidden="true">+</span></a></li>
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
        <div class="feature-media" aria-label="Department featured image" style="--feature-media-x:50%;--feature-media-y:20%;">
          <img
            src="{{ asset('img/events/miss universe (2).jpg') }}"
            alt="VIP transport and hospitality logistics"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Destination Management &amp; Hospitality Department</h2>
          <div class="tagline">Seamless Journeys. Exceptional Care. World-Class Experience.</div>

          <p class="lead">The Destination Management &amp; Hospitality Department at Salmart Diplomatic Hospitality delivers end-to-end travel logistics, accommodation management, transport coordination, and on-ground guest experience for high-level delegations, executives, and international visitors.</p>

          <p>From arrival to departure, we ensure every journey is carefully planned, efficiently managed, and delivered with discretion, comfort, and cultural awareness.</p>

          <h2>Vision</h2>
          <p>To make Salmart Diplomatic Hospitality the trusted and preferred partner for premium destination management and high-level hospitality across Africa and global platforms.</p>

          <h2>Mission</h2>
          <p>To provide seamless logistics, personalized guest care, and refined hospitality experiences that reflect operational excellence and diplomatic standards.</p>

          <h2>Scope of Services</h2>

          <h3>Airport Transfers &amp; Arrival Support</h3>
          <ul>
            <li>VIP meet-and-greet services</li>
            <li>Arrival coordination and baggage assistance</li>
            <li>Coordination with Protocol &amp; Diplomatic Services for official clearances where required</li>
            <li>Coordinated convoys and executive transport arrangements</li>
          </ul>

          <h3>Hotel Booking &amp; Room Management</h3>
          <ul>
            <li>Luxury and secure accommodation sourcing</li>
            <li>Custom rooming lists for delegations</li>
            <li>VIP preference management and upgrades</li>
            <li>Early check-in and late check-out coordination</li>
            <li>On-site hotel liaison and guest support</li>
          </ul>

          <h3>Transport &amp; Movement Coordination</h3>
          <ul>
            <li>VIP transportation and chauffeured services</li>
            <li>Vehicle staging, routing, and movement planning</li>
            <li>Airport&ndash;hotel&ndash;venue transfer coordination</li>
            <li>Real-time schedule monitoring and contingency management</li>
          </ul>

          <h3>Venue Scouting &amp; Setup Support</h3>
          <ul>
            <li>Venue selection based on operational, protocol, and technical requirements</li>
            <li>Assessment of AV capacity, breakout spaces, accessibility, and branding zones</li>
            <li>Site inspections and coordination with Event Management teams</li>
          </ul>

          <h3>Tourism &amp; Cultural Itineraries</h3>
          <ul>
            <li>Curated sightseeing, cultural visits, and leisure experiences</li>
            <li>Personal guides, interpreters, and secure transport</li>
            <li>Spouse and accompanying guest programs</li>
            <li>Post-event excursions and extended stay experiences</li>
          </ul>

          <h3>On-Ground Hospitality &amp; Concierge Support</h3>
          <ul>
            <li>Hospitality desks at hotels, venues, and airports</li>
            <li>Delegate kits, local briefings, and destination orientation</li>
            <li>24/7 concierge services for special requests</li>
            <li>Real-time guest assistance and issue resolution</li>
          </ul>

          <h2>Who We Serve</h2>
          <ul>
            <li>Heads of State and diplomatic delegations</li>
            <li>Government ministries and intergovernmental organizations</li>
            <li>Corporate executives and private sector delegations</li>
            <li>International conference participants</li>
            <li>Cultural, investment, and business missions</li>
          </ul>

          <h2>Our Approach</h2>
          <p>Every guest journey is planned and monitored through structured coordination, direct communication, and centralized operational control.</p>

          <p>We work closely with:</p>
          <ul>
            <li>Protocol &amp; Diplomatic Services teams</li>
            <li>Transport providers and security personnel</li>
            <li>Hotels and hospitality partners</li>
            <li>Event and Conference Management teams</li>
          </ul>

          <p>This integrated approach ensures smooth movement, operational reliability, and a high-quality guest experience.</p>

          <h2>Featured Destinations</h2>
          <ul>
            <li>Tanzania: Dar es Salaam | Zanzibar | Arusha | Dodoma</li>
            <li>Regional &amp; International: Nairobi | Addis Ababa | Kigali | Johannesburg | Cape Town</li>
            <li>Global Hubs: Dubai | Abu Dhabi | Accra | Luanda</li>
          </ul>

          <h2>Role Within Salmart Diplomatic Hospitality</h2>
          <p>The Destination Management &amp; Hospitality Department serves as the operational backbone for all guest logistics, ensuring seamless travel, accommodation, transport, and on-ground experiences aligned with overall program requirements.</p>

          <h2>Why Salmart Diplomatic?</h2>
          <p>With strong destination expertise, trusted partner networks, and disciplined operational control, Salmart Diplomatic Hospitality delivers hospitality experiences that are efficient, secure, and memorable.</p>
          <p>We don&rsquo;t just manage logistics &mdash; we create confidence, comfort, and a seamless experience at every stage.</p>

          <div class="callout" aria-label="Next step">
            <strong>Work with this department</strong>
            <span>Share your travel dates, delegation profile, and support requirements, and we&rsquo;ll propose a logistics plan and service timeline.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
