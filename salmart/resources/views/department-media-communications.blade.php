@extends('layouts.app')

@section('title', 'Media & Communications Department • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's Media & Communications department manages brand storytelling, content production, media relations, and digital communications for diplomatic and corporate clients across East Africa.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/MarCOSIO (20).jpeg') }}');--hero-bg-position:center 40%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Media &amp; Communications</span>
    </nav>

    <h1 class="inner-hero-title">Media &amp; Communications</h1>
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
              <li><a href="/department-media-communications" aria-current="page">Media &amp; Communications <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-event-conference-management">Event &amp; Conference Management <span class="plus" aria-hidden="true">+</span></a></li>
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
        <div class="feature-media" aria-label="Department featured image" style="--feature-media-x:50%;--feature-media-y:50%;">
          <img
            src="{{ asset('img/events/MarCOSIO (3).jpeg?q=80&w=2400&auto=format&fit=crop') }}"
            alt="A communications team planning a campaign"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Media &amp; Communications Department</h2>
          <div class="tagline">“Where Diplomacy Meets Storytelling, Strategy, and Visibility”</div>

          <p class="lead">At Salmart Diplomatic Hospitality, the Media &amp; Communications Department operates at the intersection of diplomacy, media excellence, and strategic visibility.</p>

          <p>We serve both internal departments and external clients by crafting powerful narratives, driving high-impact campaigns, and ensuring seamless communications for events, forums, and missions across the diplomatic, development, and corporate landscape.</p>

          <p>We are not just storytellers. We are curators of identity, visibility architects, and strategic communicators.</p>

          <h2>Mission</h2>
          <p>To amplify the voices of visionary leaders, global forums, and transformative initiatives, with clarity, creativity, and protocol-compliant precision.</p>

          <h2>Vision</h2>
          <p>To become Africa’s leading diplomatic media and communications hub, telling stories that shape narratives, build reputation, and drive influence across borders.</p>

          <h2>Core Functions &amp; Services</h2>

          <h3>1. Media Coverage &amp; Press Relations</h3>
          <ul>
            <li>On-site media management for high-level events, summits, and conferences</li>
            <li>Coordination with national, regional, and international press</li>
            <li>Preparation and dissemination of media kits, press releases, and advisories</li>
          </ul>

          <h3>2. Branding &amp; Identity Management</h3>
          <ul>
            <li>Development of brand and communications guidelines</li>
            <li>Oversight of diplomatic branding, logo placement, and protocol-aligned aesthetics</li>
            <li>Production of branded materials (banners, folders, backdrops, media walls)</li>
          </ul>

          <h3>3. Photography &amp; Videography</h3>
          <ul>
            <li>Professional coverage of diplomatic engagements and corporate milestones</li>
            <li>Production of recap videos, interviews, highlights, and documentaries</li>
            <li>Drone coverage, behind-the-scenes content, and protocol-approved visuals</li>
          </ul>

          <h3>4. Content Development &amp; Editorial Services</h3>
          <ul>
            <li>Drafting and editing of speeches, communiqués, and talking points</li>
            <li>Development of newsletters, blogs, brochures, and event editorials</li>
            <li>Multilingual translation services and international audience briefs</li>
          </ul>

          <h3>5. Digital &amp; Social Media Campaigns</h3>
          <ul>
            <li>Management of official social media handles for clients and events</li>
            <li>Real-time event updates: live tweeting, reels, LinkedIn posts, and IG stories</li>
            <li>Paid digital strategies for visibility, public engagement, and brand positioning</li>
          </ul>

          <h3>6. Creative &amp; Production Sub-Unit</h3>
          <ul>
            <li>Graphic design, animation, and motion content for events and campaigns</li>
            <li>Teaser videos, sizzle reels, and branded intros for diplomatic platforms</li>
            <li>Advocacy-driven storytelling and narrative design for cause-based projects</li>
          </ul>

          <h3>7. Visibility Strategy &amp; Intelligence</h3>
          <ul>
            <li>Media mapping and stakeholder targeting frameworks</li>
            <li>Engagement analytics, sentiment monitoring, and media intelligence</li>
            <li>Crisis communications protocols and reputation management advisory</li>
          </ul>

          <h3>8. Media Protocol &amp; Public Relations</h3>
          <ul>
            <li>Coordination of press briefings and official media invitations</li>
            <li>Clearance and facilitation of accredited coverage</li>
            <li>Liaison with national broadcasters, international correspondents, and diplomatic media houses</li>
          </ul>

          <h3>9. Digital Presence Management</h3>
          <ul>
            <li>Oversight of digital visibility across platforms</li>
            <li>Social media account management and influencer relations</li>
            <li>Post-event reporting, digital impressions monitoring, and analytics reporting</li>
          </ul>

          <h2>For Our Clients</h2>
          <p>We become an extension of your team, crafting, elevating, and protecting your message with precision and purpose. Whether for heads of state, intergovernmental missions, corporate leaders, or social causes, we handle the end-to-end visibility and communications process with confidentiality, credibility, and creativity.</p>

          <h2>For Salmart Diplomatic (Internal)</h2>
          <p>Our department ensures that Salmart Diplomatic’s identity is not only seen, but felt, respected, and remembered. From digital presence and media relations to internal newsletters and milestone documentation, we serve as the voice and memory of the organization.</p>

          <div class="callout" aria-label="Next step">
            <strong>Work with this department</strong>
            <span>Share your objectives and desired visibility outcomes, and we’ll propose a communications plan, production pathway, and timeline.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
