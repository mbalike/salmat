@extends('layouts.app')

@section('title', 'Maritime Services • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/harbour.jpg') }}');--hero-bg-position:center 65%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Maritime Services</span>
    </nav>

    <h1 class="inner-hero-title">Maritime Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/ports1.jpg') }}" alt="Maritime operations" loading="lazy" />
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0"><em>Operational Precision. Seamless Port Coordination. Premium Shore &amp; Travel Experiences</em></p>

        <p>At Salmart Diplomatic Hospitality, our Maritime Services provide comprehensive onshore coordination and destination support for cruise operators, maritime agencies, port authorities, and industry stakeholders.</p>

        <p>We combine operational discipline, destination expertise, and diplomatic-level coordination to ensure smooth port calls, efficient passenger and crew movement, and curated tourism experiences that enhance the overall voyage.</p>

        <h2>Our Maritime Service Scope</h2>

        <h3>Port Call Coordination &amp; Operational Support</h3>
        <ul>
          <li>Liaison with port authorities, terminal operators, and maritime agencies</li>
          <li>Arrival and departure planning and scheduling</li>
          <li>Immigration, customs, and security coordination</li>
          <li>Passenger flow management and terminal operations support</li>
          <li>Real-time coordination and contingency planning</li>
        </ul>

        <h2>Cruise Passenger &amp; Crew Services</h2>
        <p>We provide specialized ground handling services to ensure efficient and seamless onshore operations.</p>

        <h3>Passenger Handling</h3>
        <ul>
          <li>Port meet-and-greet and reception services</li>
          <li>Disembarkation and embarkation coordination</li>
          <li>Group transport and movement management</li>
        </ul>

        <h3>Crew Support</h3>
        <ul>
          <li>Crew transfers and accommodation coordination</li>
          <li>Airport transfers and crew rotation logistics</li>
          <li>Welfare, medical, and emergency assistance facilitation</li>
        </ul>

        <h2>Visa &amp; Immigration Facilitation</h2>
        <p>Salmart Diplomatic supports cruise operations through efficient entry and clearance coordination.</p>
        <ul>
          <li>Visa assistance for passengers and crew (where required)</li>
          <li>Visa-on-arrival and entry documentation support</li>
          <li>Pre-arrival clearance coordination</li>
          <li>Liaison with immigration authorities for group processing</li>
          <li>Advisory on entry requirements and regulatory compliance</li>
        </ul>
        <p>This ensures smooth entry processes while minimizing operational delays and risks.</p>

        <h2>Shore Excursions, Tourism &amp; Destination Packages</h2>
        <p>As a professional Destination Management Company, Salmart Diplomatic designs and delivers premium tourism experiences that showcase the destination while maintaining strict operational timing.</p>

        <h3>Standard &amp; Customized Excursions</h3>
        <ul>
          <li>City and cultural heritage tours</li>
          <li>Nature, wildlife, and marine experiences</li>
          <li>Shopping and culinary experiences</li>
        </ul>

        <h3>Premium &amp; VIP Experiences</h3>
        <ul>
          <li>Private guided tours and luxury transport</li>
          <li>Executive and diplomatic itineraries</li>
          <li>Small-group and exclusive programs</li>
        </ul>

        <h3>Extended Stay Packages</h3>
        <ul>
          <li>Pre- and post-cruise accommodation and travel</li>
          <li>Mainland or multi-destination tours</li>
          <li>Corporate, incentive, or themed travel programs</li>
        </ul>

        <p>All programs are delivered with professional guides, reliable transport, and strict return-to-vessel coordination.</p>

        <h2>Maritime Delegations &amp; Official Visits</h2>
        <ul>
          <li>Port inspections and technical site visits</li>
          <li>Government and maritime authority delegations</li>
          <li>Naval courtesy visits and official engagements</li>
          <li>Executive transport, security liaison, and protocol coordination</li>
        </ul>

        <h2>Maritime Events &amp; Industry Engagement</h2>
        <ul>
          <li>Port inaugurations and vessel commissioning ceremonies</li>
          <li>Maritime conferences and industry forums</li>
          <li>Blue Economy and shipping sector events</li>
          <li>Stakeholder meetings and investment missions</li>
        </ul>
        <p>Services include venue coordination, event management, protocol services, and media support.</p>

        <h2>Operational Approach</h2>
        <ul>
          <li>Advance planning and stakeholder mapping</li>
          <li>Real-time operational coordination and communication</li>
          <li>Schedule control and risk management</li>
          <li>Full compliance with port regulations and safety standards</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <ul>
          <li>Strong destination expertise across Tanzania and the region</li>
          <li>Integrated logistics, tourism, protocol, and event capabilities</li>
          <li>Experience managing large passenger volumes and VIP movements</li>
          <li>Reliable coordination with government, port, and private-sector stakeholders</li>
        </ul>
        <p>We ensure every maritime engagement is efficient, compliant, and enriched with memorable destination experiences.</p>

        <h2>Ideal For</h2>
        <ul>
          <li>Cruise Operators and Marine Tourism Companies</li>
          <li>Port Authorities and Terminal Operators</li>
          <li>Shipping and Logistics Companies</li>
          <li>Government and Maritime Agencies</li>
          <li>Blue Economy and Tourism Partners</li>
        </ul>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Best for</strong><br/>Port calls • operators • agencies</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Coordination • handling • excursions</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Focus</strong><br/>Compliance • timing • experience</div>
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
        <strong>Planning a port call?</strong>
        <span>Share your vessel schedule, passenger/crew volumes, port(s), timing windows, and excursion requirements. We’ll propose an operational plan.</span>
      </div>

      <nav class="side-nav" aria-label="Services navigation">
        <div class="side-nav-title">Explore Services</div>
        <ul>
          <li><a href="/service-event-management-production">Event Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-mice-delivery">MICE Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-destination-management-hospitality">Destination Management &amp; Hospitality <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-cruise-line-services">Cruise Line Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-maritime-services" aria-current="page">Maritime Services <span class="arr" aria-hidden="true">↗</span></a></li>
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
      <img src="{{ asset('img/ports3.jpg') }}" alt="Maritime coordination" loading="lazy" />
      <img src="{{ asset('img/ports.jpg') }}" alt="Port terminal" loading="lazy" />
      <img src="{{ asset('img/ports4.webp') }}" alt="Vessel arrival" loading="lazy" />
      <img src="{{ asset('img/ports2.jpg') }}" alt="Shore excursion" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
