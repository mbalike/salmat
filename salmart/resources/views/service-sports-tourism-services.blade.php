@extends('layouts.app')

@section('title', 'Sports Tourism Services • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart delivers sports tourism services for international sporting events, team delegations, and sports-related diplomatic exchanges and fan experiences in Tanzania.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/mkapastadium.jpg') }}');--hero-bg-position:center 55%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Sports Tourism Services</span>
    </nav>

    <h1 class="inner-hero-title">Sports Tourism Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/mkapastadiumfans.jpg') }}" alt="Football stadium" loading="lazy" />
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0"><em>Precision Coordination. Premium Hospitality. Performance-Focused Travel.</em></p>

        <p>At Salmart Diplomatic Hospitality, our Sports Tourism &amp; Delegation Services provide comprehensive destination management and operational support for sports teams, football delegations, officials, supporters, and event organizers.</p>
        <p>We combine logistics discipline, hospitality expertise, and cultural integration to ensure seamless travel, efficient scheduling, and a well-managed environment that allows athletes, officials, and fans to focus on performance and participation.</p>

        <h2>Our Service Scope</h2>

        <h3>Team &amp; Delegation Management</h3>
        <ul>
          <li>Airport meet-and-greet and arrival coordination</li>
          <li>Visa assistance and entry facilitation (where required)</li>
          <li>Group transportation planning and movement logistics</li>
          <li>Accommodation sourcing near training and competition venues</li>
          <li>Dedicated liaison support throughout the stay</li>
        </ul>

        <h3>Football Teams &amp; Official Delegations</h3>
        <ul>
          <li>Coordination of arrival, accommodation, and local transport</li>
          <li>Liaison with stadiums, sports authorities, and event organizers</li>
          <li>Training session and match logistics support</li>
          <li>VIP hospitality for players, coaches, and officials</li>
        </ul>

        <h3>Event &amp; Match Day Coordination</h3>
        <ul>
          <li>Scheduling for training sessions, warm-ups, and matches</li>
          <li>On-ground operational and hospitality support</li>
          <li>Security liaison and crowd coordination where required</li>
          <li>Protocol integration for VIP guests, sponsors, and dignitaries</li>
        </ul>

        <h3>Supporter &amp; Fan Experiences</h3>
        <ul>
          <li>Guided supporter tours and match-day experiences</li>
          <li>Stadium visits and fan engagement activities</li>
          <li>Cultural integration through local entertainment, cuisine, and events</li>
          <li>Customized travel itineraries for supporter groups attending tournaments</li>
        </ul>

        <h3>Destination &amp; Cultural Programs</h3>
        <ul>
          <li>Sightseeing and leisure activities aligned with event schedules</li>
          <li>Immersive cultural experiences for teams and visitors</li>
          <li>Pre- and post-event tourism extensions</li>
          <li>VIP and exclusive packages for sponsors, partners, and executives</li>
        </ul>

        <h3>Logistics &amp; On-Ground Operations</h3>
        <ul>
          <li>Transportation routing, fleet coordination, and driver management</li>
          <li>Accommodation, catering, and concierge services</li>
          <li>Equipment handling and movement coordination</li>
          <li>Real-time operational control and contingency planning</li>
        </ul>

        <h2>Operational Approach</h2>
        <ul>
          <li>Advance planning with teams and event organizers</li>
          <li>Dedicated coordination teams for each delegation</li>
          <li>Continuous schedule monitoring and risk management</li>
          <li>Close liaison with venues, authorities, and service providers</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <ul>
          <li>Strong destination management expertise across Tanzania and the region</li>
          <li>Integrated logistics, hospitality, protocol, and event capabilities</li>
          <li>Experience handling large groups, VIPs, and official delegations</li>
          <li>Reliable coordination with government, sports bodies, and private-sector partners</li>
        </ul>
        <p>We ensure every sports engagement is efficient, professionally managed, and enriched with a memorable destination experience.</p>

        <h2>Ideal For</h2>
        <ul>
          <li>National and international football teams</li>
          <li>Sports federations and associations</li>
          <li>Tournament and event organizers</li>
          <li>Supporter groups and fan communities</li>
          <li>Corporate sponsors and sports partners</li>
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
          <div><strong style="color:var(--ink)">Best for</strong><br/>Teams • delegations • supporters</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Hospitality • logistics • protocol</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v10H4V4Zm2 12h12v2H6v-2Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Operations</strong><br/>Scheduling • routing • on-ground control</div>
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
        <strong>Planning a delegation?</strong>
        <span>Share your match schedule, group size, dates, preferred hotels, and movement requirements. We’ll propose a full delivery plan.</span>
      </div>

      <nav class="side-nav" aria-label="Services navigation">
        <div class="side-nav-title">Explore Services</div>
        <ul>
          <li><a href="/service-event-management-production">Event Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-mice-delivery">MICE Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-destination-management-hospitality">Destination Management &amp; Hospitality <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-cruise-line-services">Cruise Line Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-sports-tourism-services" aria-current="page">Sports Tourism Services <span class="arr" aria-hidden="true">↗</span></a></li>
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
      <img src="{{ asset('img/amaan_stadium19.jpg') }}" alt="Football fans" loading="lazy" />
      <img src="{{ asset('img/tanzaniafans.jpg') }}" alt="Team travel" loading="lazy" />
      <img src="https://images.unsplash.com/photo-1489944440615-453fc2b6a9a9?q=80&w=800&auto=format&fit=crop" alt="Match day" loading="lazy" />
      <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?q=80&w=800&auto=format&fit=crop" alt="Stadium experience" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
