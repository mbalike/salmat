@extends('layouts.app')

@section('title', 'Event Management & Production • Salmart Diplomatic Hospitality')
@section('meta_description', 'Professional event management and production by Salmart — from concept to delivery, covering conferences, state dinners, galas, cultural events, and international productions in Tanzania.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/conference1.jpg') }}');--hero-bg-position:center 30%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Event Management Services</span>
    </nav>

    <h1 class="inner-hero-title">Event Management Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/events/MarCOSIO (7).jpeg') }}" alt="Event delivery" loading="lazy" />
      </div>

      <div class="feature-body">
        <h2 style="margin-top:0">From Concept to Completion. Precision Planning. Seamless Execution.</h2>

        <p style="color:#6b7280;line-height:1.8;margin:0">From the first brief to the final applause, Salmart Diplomatic Hospitality manages every moving part so stakeholders stay aligned, timelines stay protected, and the overall experience feels effortless.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">We provide end-to-end event planning, production, and operational management for corporate, institutional, and high-level engagements, ensuring each event is professionally delivered, visually impactful, and aligned with international standards.</p>

        <h2>What We Manage</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We lead the full event lifecycle, including:</p>
        <ul>
          <li>Concept development and planning</li>
          <li>Budgeting and timeline management</li>
          <li>Vendor sourcing and coordination</li>
          <li>Stakeholder alignment and communication</li>
          <li>Run-of-show development and rehearsals</li>
          <li>On-site operations and supervision</li>
          <li>Post-event reporting and closeout</li>
        </ul>

        <h2>Our Service Scope</h2>

        <h3>Event Planning &amp; Concept Development</h3>
        <ul>
          <li>Discovery sessions to understand objectives and audience</li>
          <li>Program design and agenda structure</li>
          <li>Budget preparation and cost control</li>
          <li>Project timelines and milestone management</li>
        </ul>

        <h3>Venue Selection &amp; Setup</h3>
        <ul>
          <li>Identification and evaluation of suitable venues</li>
          <li>Space planning, seating layouts, and guest flow design</li>
          <li>Stage setup, lighting, and audio-visual coordination</li>
          <li>Coordination with venue management and technical teams</li>
        </ul>

        <h3>Event Production &amp; Branding</h3>
        <ul>
          <li>Event branding and visual identity implementation</li>
          <li>Backdrops, media walls, banners, and signage</li>
          <li>Fabrication of booths, structures, and display elements</li>
          <li>Printing, installation, and dismantling</li>
        </ul>

        <h3>Vendor &amp; Supplier Coordination</h3>
        <ul>
          <li>Supplier sourcing and contract management</li>
          <li>Catering, décor, equipment, and technical services</li>
          <li>Coordination and supervision of all service providers</li>
          <li>Quality control and delivery monitoring</li>
        </ul>

        <h3>Guest &amp; Participant Management</h3>
        <ul>
          <li>Invitation management and RSVP tracking</li>
          <li>Registration and reception services</li>
          <li>VIP coordination in collaboration with Protocol Services</li>
          <li>On-site guest support</li>
        </ul>

        <h3>Conference Support &amp; Human Capital</h3>
        <p style="color:#6b7280;line-height:1.8;margin:0">We strengthen the quality, structure, and intellectual delivery of conferences and forums through experienced professional support.</p>
        <ul>
          <li>Event Moderators – Facilitation of panels, plenaries, and high-level discussions</li>
          <li>Masters of Ceremony (MCs) – Managing program flow, transitions, and audience engagement</li>
          <li>Rapporteurs &amp; Documentation Specialists – Accurate capture of discussions, key messages, resolutions, and outcomes</li>
          <li>Session Coordination – Speaker liaison, presentation management, and session timing control</li>
        </ul>

        <h3>On-Site Event Operations</h3>
        <ul>
          <li>Run-of-show development and rehearsal coordination</li>
          <li>Operational readiness and team briefings</li>
          <li>Real-time issue management and schedule control</li>
          <li>Program flow coordination and session transitions</li>
        </ul>

        <h2>Types of Events We Deliver</h2>
        <ul>
          <li>International Conferences &amp; Forums</li>
          <li>Executive Summits &amp; Leadership Retreats</li>
          <li>Corporate Meetings &amp; Board Sessions</li>
          <li>Sales Kickoffs &amp; Roadshows</li>
          <li>Product Launches &amp; Brand Activations</li>
          <li>Corporate Anniversary Events</li>
          <li>Awards &amp; Recognition Ceremonies</li>
          <li>Incentive Programs &amp; VIP Gatherings</li>
        </ul>

        <h2>Event Formats</h2>
        <ul>
          <li>Live (In-Person) Events</li>
          <li>Hybrid Events (Physical + Virtual)</li>
          <li>Fully Virtual / Online Events</li>
        </ul>

        <h2>How We Work</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">Our structured delivery approach ensures clarity and control at every stage:</p>
        <ul>
          <li>Discovery and concept development</li>
          <li>Budgeting, scheduling, and stakeholder alignment</li>
          <li>Supplier sourcing and contract coordination</li>
          <li>Run-of-show planning, rehearsals, and operational readiness</li>
          <li>On-site delivery and issue management</li>
          <li>Post-event reporting and closeout</li>
        </ul>

        <h2>High-Level &amp; Protocol-Sensitive Events</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">For ministerial, diplomatic, and executive engagements, we provide:</p>
        <ul>
          <li>Coordination with Protocol &amp; Diplomatic Services</li>
          <li>Security liaison and controlled access planning</li>
          <li>Schedule protection and movement coordination</li>
          <li>Discreet handling for high-level delegations</li>
        </ul>

        <h2>Operational Approach</h2>
        <ul>
          <li>End-to-end project ownership</li>
          <li>Real-time coordination and contingency management</li>
          <li>Daily operational briefings for multi-day events</li>
          <li>Seamless collaboration with Media, Destination Management, and Protocol teams</li>
        </ul>

        <h2>Ideal For</h2>
        <ul>
          <li>Government institutions and public agencies</li>
          <li>Diplomatic missions and international organizations</li>
          <li>Corporate leadership and executive teams</li>
          <li>Development partners, associations, and private sector clients</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">With strong operational discipline, production expertise, and diplomatic awareness, Salmart Diplomatic Hospitality ensures every event is professionally executed, strategically aligned, and delivered with precision and confidence.</p>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Delivery</strong><br/>End-to-end management</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Planning • vendors • on-site ops</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Protocol-ready</strong><br/>VIP handling + security liaison</div>
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
        <strong>Let’s scope your event</strong>
        <span>Send your objectives, dates, location, audience size, and format. Salmart Diplomatic will outline a delivery plan and timeline.</span>
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
      <img src="{{ asset('img/events/ROW25 (11).jpg') }}" alt="Operations team" loading="lazy" />
      <img src="{{ asset('img/events/MarCOSIO (9).jpg') }}" alt="Conference environment" loading="lazy" />
      <img src="{{ asset('img/events/MarCOSIO (2).jpg') }}" alt="Planning table" loading="lazy" />
      <img src="{{ asset('img/eventmng.jpg') }}" alt="Stage and audience" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
