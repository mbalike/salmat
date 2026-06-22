@extends('layouts.app')

@section('title', 'Event & Conference Management Department • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's Event & Conference Management department plans and executes world-class conferences, summits, galas, and diplomatic events with precision and creative excellence in Tanzania.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/conference1.jpg') }}');--hero-bg-position:center 40%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Event &amp; Conference Management</span>
    </nav>

    <h1 class="inner-hero-title">Event &amp; Conference Management</h1>
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
              <li><a href="/department-event-conference-management" aria-current="page">Event &amp; Conference Management <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-protocol-diplomatic-services">Protocol &amp; Diplomatic Services <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-destination-management-hospitality">Destination Management &amp; Hospitality <span class="plus" aria-hidden="true">+</span></a></li>
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
        <div class="feature-media" aria-label="Department featured image" style="--feature-media-x:50%;--feature-media-y:28%;">
          <img
            src="{{ asset('img/conference2.jpg?q=80&w=2400&auto=format&fit=crop') }}"
            alt="A conference in session"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Event &amp; Conference Management Department</h2>
          <div class="tagline">From Concept to Completion. Precision Planning. Seamless Execution.</div>

          <p class="lead">The Event &amp; Conference Management Department at Salmart Diplomatic Hospitality is responsible for the planning, production, and delivery of conferences, forums, summits, and institutional events.</p>

          <p>We provide full lifecycle management &mdash; from concept development to post-event reporting &mdash; ensuring that each engagement is professionally executed, visually impactful, and aligned with international standards.</p>

          <h2>Vision</h2>
          <p>To make Salmart Diplomatic Hospitality the trusted and preferred partner for high-level event and conference delivery across Africa and global platforms.</p>

          <h2>Mission</h2>
          <p>To design, manage, and execute seamless events that enable strategic engagement, knowledge exchange, and institutional visibility.</p>

          <h2>Core Functions</h2>

          <h3>Event Planning &amp; Concept Development</h3>
          <ul>
            <li>Discovery sessions to define objectives and outcomes</li>
            <li>Program design and agenda structuring</li>
            <li>Budget preparation and financial control</li>
            <li>Timeline and milestone management</li>
          </ul>

          <h3>Venue Selection &amp; Setup</h3>
          <ul>
            <li>Identification and evaluation of suitable venues</li>
            <li>Space planning, seating layouts, and participant flow design</li>
            <li>Stage setup, lighting, and audio-visual coordination</li>
            <li>Technical assessments and venue liaison</li>
          </ul>

          <h3>Event Production &amp; Branding</h3>
          <ul>
            <li>Implementation of event branding and visual identity</li>
            <li>Backdrops, media walls, banners, and signage</li>
            <li>Fabrication of booths and exhibition structures</li>
            <li>Printing, installation, and dismantling</li>
          </ul>

          <h3>Vendor &amp; Supplier Management</h3>
          <ul>
            <li>Sourcing and contracting service providers</li>
            <li>Coordination of catering, d&eacute;cor, equipment, and technical services</li>
            <li>Quality control and delivery monitoring</li>
          </ul>

          <h3>Participant &amp; Guest Management</h3>
          <ul>
            <li>Invitation management and RSVP tracking</li>
            <li>Registration systems and reception services</li>
            <li>VIP handling within the event environment</li>
            <li>On-site participant support</li>
          </ul>

          <h3>Conference Human Capital</h3>
          <ul>
            <li>Professional Masters of Ceremony (MCs)</li>
            <li>Moderators and panel facilitators</li>
            <li>Rapporteurs for documentation of proceedings and outcomes</li>
          </ul>

          <h2>Protocol Integration for Events</h2>
          <p>For high-level conferences and official functions, the department ensures:</p>
          <ul>
            <li>Order of precedence and seating arrangements</li>
            <li>Flag protocol and ceremonial elements within the venue</li>
            <li>VIP reception flow and movement inside the event space</li>
            <li>Coordination with the Protocol &amp; Diplomatic Services Department for government liaison, external clearances, and official movements</li>
          </ul>

          <h2>Event Formats</h2>
          <ul>
            <li>Live (In-Person)</li>
            <li>Hybrid (Physical + Virtual)</li>
            <li>Fully Virtual / Online</li>
          </ul>

          <h2>Monitoring &amp; Evaluation</h2>
          <ul>
            <li>Post-event operational and financial reports</li>
            <li>Stakeholder feedback collection</li>
            <li>Lessons learned and performance analysis</li>
          </ul>

          <h2>Role Within Salmart Diplomatic Hospitality</h2>
          <p>This department serves as the lead operational authority for event delivery, ensuring full project ownership, execution control, and quality assurance from concept to completion.</p>

          <div class="callout" aria-label="Next step">
            <strong>Work with this department</strong>
            <span>Share your event goals, audience profile, and timeline, and we&rsquo;ll propose a delivery plan from concept through post-event reporting.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
