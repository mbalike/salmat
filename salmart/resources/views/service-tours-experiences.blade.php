@extends('layouts.app')

@section('title', 'Tours & Experiences • Salmart Diplomatic Hospitality')
@section('meta_description', 'Curated tours and immersive experiences by Salmart — wildlife safaris, cultural tours, coastal getaways, and VIP excursions across Tanzania for diplomatic and corporate guests.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/services/TOURS5.webp') }}')">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Tours &amp; Experiences Services</span>
    </nav>

    <h1 class="inner-hero-title">Tours &amp; Experiences Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/services/TOURS3.jpeg') }}" alt="Tours and experiences" loading="lazy" style="object-position: center 70%;" />
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0"><em>Authentic Journeys. Curated Moments. Meaningful Connections.</em></p>

        <p>At SALMART Diplomatic Hospitality, our Tours &amp; Experiences service is designed to showcase the unique culture, heritage, and natural beauty of each destination while maintaining the comfort, safety, and professionalism expected by high-level visitors.</p>
        <p>Whether for diplomatic delegations, corporate guests, conference participants, or VIP travelers, we create carefully planned experiences that combine authenticity with operational excellence.</p>

        <h2>Our Service Scope</h2>

        <h3>Curated City &amp; Cultural Tours</h3>
        <ul>
          <li>Guided city tours highlighting historical and cultural landmarks</li>
          <li>Visits to museums, heritage sites, and cultural institutions</li>
          <li>Local arts, crafts, and community experiences</li>
          <li>Professional multilingual guides and interpreters</li>
        </ul>

        <h3>Nature &amp; Leisure Experiences</h3>
        <ul>
          <li>Wildlife safaris and conservation visits</li>
          <li>Coastal, island, and marine excursions</li>
          <li>Nature trails, eco-tourism, and outdoor activities</li>
          <li>Relaxation and wellness experiences</li>
        </ul>

        <h3>Executive &amp; VIP Experiences</h3>
        <ul>
          <li>Private and luxury guided tours</li>
          <li>Customized itineraries based on guest interests and schedules</li>
          <li>Exclusive access experiences where available</li>
          <li>Discreet handling for high-profile and protocol-sensitive visitors</li>
        </ul>

        <h3>Delegation &amp; Group Programs</h3>
        <ul>
          <li>Coordinated group excursions for conferences and official missions</li>
          <li>Spouse and companion programs during events</li>
          <li>Cultural evenings, networking experiences, and themed activities</li>
          <li>Time-managed itineraries aligned with official schedules</li>
        </ul>

        <h3>Pre- &amp; Post-Event Travel Packages</h3>
        <ul>
          <li>Extended travel arrangements before or after conferences or missions</li>
          <li>Multi-destination itineraries within Tanzania and the region</li>
          <li>Accommodation, transport, and activity coordination</li>
        </ul>

        <h2>Operational Approach</h2>
        <ul>
          <li>Advance planning aligned with client objectives and schedules</li>
          <li>Safe and reliable transportation and licensed service providers</li>
          <li>Real-time coordination and on-ground support</li>
          <li>Full respect for protocol, cultural sensitivity, and guest privacy</li>
        </ul>

        <h2>Ideal For</h2>
        <ul>
          <li>Diplomatic and government delegations</li>
          <li>International organizations and development partners</li>
          <li>Corporate executives and investors</li>
          <li>Conference participants and VIP guests</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <p>We combine destination expertise, cultural intelligence, and operational precision to ensure every experience is enriching, seamless, and memorable—reflecting the standards of excellence that define Salmart Diplomatic Hospitality.</p>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Formats</strong><br/>Private • group • VIP-ready</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Best for</strong><br/>Delegations • VIP guests • conferences</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Scope</strong><br/>Curate • coordinate • deliver</div>
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
        <strong>Plan your program</strong>
        <span>Share your group profile, dates, mobility needs, and tone (formal, relaxed, VIP). Salmart Diplomatic will propose an experience plan.</span>
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
          <li><a href="/service-tours-experiences" aria-current="page">Tours &amp; Experiences Services <span class="arr" aria-hidden="true">↗</span></a></li>
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
      <img src="{{ asset('img/services/TOURS1.jpeg') }}"style="object-position: center 10%;" alt="Destination experience" loading="lazy" />
      <img src="{{ asset('img/services/TOURS2.jpeg') }}"style="object-position: center 5%;" alt="Culinary experience" loading="lazy" />
      <img src="{{ asset('img/services/TOURS4.jpeg') }}"style="object-position: center 90%;" alt="Heritage site" loading="lazy" />
      <img src="{{ asset('img/services/TOURS1.jpeg') }}"style="object-position: center 90%;" alt="Guest experience" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
