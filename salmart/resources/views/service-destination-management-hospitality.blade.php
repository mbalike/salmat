@extends('layouts.app')

@section('title', 'Destination Management &amp; Hospitality • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/miss universe (6).jpg') }}');--hero-bg-position:center 30%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Destination Management &amp; Hospitality</span>
    </nav>

    <h1 class="inner-hero-title">Destination Management &amp; Hospitality</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/events/miss universe (4).jpg') }}" alt="Destination hospitality" loading="lazy" style="object-position: center 1%;"/>
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0"><em>Trusted Coordination for High-Level Visits and Global Delegations.</em></p>

        <p>At Salmart Diplomatic Hospitality, our Destination Management &amp; Hospitality services ensure that every visit whether for a diplomatic mission, international conference, corporate engagement, or official delegation is professionally planned, efficiently coordinated, and delivered with excellence.</p>

        <p>From arrival to departure, we manage accommodation, transportation, guest experience, and on-ground operations with precision, discretion, and cultural intelligence.</p>

        <h2>Our Full Service Scope</h2>

        <h3>Airport Reception &amp; Arrival Services</h3>
        <ul>
          <li>VIP meet-and-greet at airport terminals</li>
          <li>Fast-track coordination where applicable</li>
          <li>Immigration and baggage assistance support</li>
          <li>Executive transfers and arrival coordination</li>
          <li>Departure assistance and schedule management</li>
        </ul>

        <h3>Accommodation Sourcing &amp; Management</h3>
        <p>We provide tailored accommodation solutions that meet comfort, security, and operational requirements.</p>
        <ul>
          <li>Five-star hotel and executive residence sourcing</li>
          <li>Accommodation selection based on proximity, security, and client preferences</li>
          <li>Delegation rooming lists and block bookings</li>
          <li>Room upgrades and preference management</li>
          <li>Early check-in and late check-out coordination</li>
          <li>On-site support for VIP arrivals and departures</li>
        </ul>

        <h3>Transport &amp; Movement Coordination</h3>
        <p>Our transport planning ensures smooth, secure, and time-sensitive movement for individuals and groups.</p>
        <ul>
          <li>VIP transportation and professional chauffeured services</li>
          <li>Fleet management for delegations and large groups</li>
          <li>Airport, hotel, and venue transfers</li>
          <li>Vehicle staging, routing, and movement scheduling</li>
          <li>Coordination with hotels, venues, and protocol teams</li>
          <li>Movement buffers and contingency planning to protect schedules</li>
        </ul>

        <h3>VIP &amp; Executive Hospitality</h3>
        <ul>
          <li>Dedicated guest relations and concierge support</li>
          <li>Personalized welcome amenities and arrangements</li>
          <li>Special dietary coordination and executive dining support</li>
          <li>Discreet handling for high-level and protocol-sensitive guests</li>
        </ul>

        <h3>Venue Scouting &amp; Coordination</h3>
        <ul>
          <li>Identification and evaluation of venues for meetings, conferences, and events</li>
          <li>Assessment of capacity, accessibility, and technical suitability</li>
          <li>Coordination with venue management and service providers</li>
          <li>Integration with event and logistics planning teams</li>
        </ul>

        <h3>On-Ground Guest Support</h3>
        <ul>
          <li>Hospitality desks at airports, hotels, and event venues</li>
          <li>Delegate welcome kits and orientation materials</li>
          <li>24/7 support and real-time coordination</li>
          <li>Issue resolution and operational assistance</li>
        </ul>

        <h3>Cultural &amp; Destination Experiences</h3>
        <p>We design curated experiences that showcase the destination while aligning with official schedules.</p>
        <ul>
          <li>City tours and cultural heritage visits</li>
          <li>Executive and VIP leisure programs</li>
          <li>Spouse and companion programs</li>
          <li>Pre- and post-event travel extensions</li>
          <li>Customized experiences for investment or official missions</li>
        </ul>

        <h2>Operational Approach</h2>
        <ul>
          <li>Advance planning based on guest profiles and mission requirements</li>
          <li>Real-time communication and operational control</li>
          <li>Close coordination with hotels, transport providers, authorities, and security teams</li>
          <li>Full respect for protocol, privacy, and confidentiality</li>
        </ul>

        <h2>Ideal For</h2>
        <ul>
          <li>Heads of State and diplomatic delegations</li>
          <li>Government ministries and international organizations</li>
          <li>Corporate executives and investment missions</li>
          <li>Conference speakers, VIP participants, and official guests</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <p>With strong destination expertise across Tanzania and the region, Salmart Diplomatic delivers integrated logistics, premium hospitality, and professional coordination ensuring every visit is efficient, comfortable, and aligned with international standards of diplomatic service.</p>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Best for</strong><br/>VIP visits • delegations</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Arrival → departure coordination</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Scope</strong><br/>Stay • movement • on-ground support</div>
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
        <strong>Planning a high-level visit?</strong>
        <span>Share guest profiles, dates, itinerary outline, accommodation preferences, and movement needs. We’ll propose a full coordination plan.</span>
      </div>

      <nav class="side-nav" aria-label="Services navigation">
        <div class="side-nav-title">Explore Services</div>
        <ul>
          <li><a href="/service-event-management-production">Event Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-mice-delivery">MICE Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-destination-management-hospitality" aria-current="page">Destination Management &amp; Hospitality <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-cruise-line-services">Cruise Line Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-maritime-services">Maritime Services <span class="arr" aria-hidden="true">↗</span></a></li>
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
      <img src="{{ asset('img/events/korea-1 (15).jpeg') }}" alt="Arrival coordination" loading="lazy" />
      <img src="{{ asset('img/events/korea-1 (17).jpeg') }}" alt="Executive transport" loading="lazy" />
      <img src="{{ asset('img/events/miss universe (5).jpg') }}" alt="Accommodation" loading="lazy" />
      <img src="{{ asset('img/events/miss universe (2).jpg') }}" alt="On-ground coordination" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
