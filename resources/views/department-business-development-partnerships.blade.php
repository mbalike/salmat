@extends('layouts.app')

@section('title', 'Business Development &amp; Partnerships • Departments • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/korea-1 (4).jpeg') }}');--hero-bg-position:center 10%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Business Development &amp; Partnerships</span>
    </nav>

    <h1 class="inner-hero-title">Business Development &amp; Partnerships</h1>
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
              <li><a href="/department-business-development-partnerships" aria-current="page">Business Development &amp; Partnerships <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-media-communications">Media &amp; Communications <span class="plus" aria-hidden="true">+</span></a></li>
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

        <section class="download-card" aria-label="Download">
          <a class="dl" href="{{ asset('docs/business-development-partnerships-profile.pdf') }}" download aria-label="Download department profile">
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
        <div class="feature-media" aria-label="Department featured image" style="--feature-media-x:50%;--feature-media-y:9%;">
          <img
            src="{{ asset('img/events/korea-1 (13).jpeg') }}"
            alt="Business partners collaborating"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Business Development &amp; Partnerships Department</h2>
          <div class="tagline">“Where Diplomacy Meets Opportunity, Influence, and Growth”</div>

          <p class="lead">At Salmart Diplomatic Hospitality, the Business Development &amp; Partnerships Department serves as the strategic engine driving impactful collaborations, unlocking new markets, and fostering sustainable diplomatic ventures.</p>

          <p>We identify synergies, nurture relationships, and design value-driven partnerships that serve global institutions, corporate entities, and high-level missions while also steering Salmart Diplomatic’s internal growth, visibility, and cross-border relevance.</p>

          <p>We are not just connectors. We are architects of alliances, growth strategists, and trusted stewards of influence.</p>

          <h2>Mission</h2>
          <p>To cultivate strategic partnerships, unlock regional and global opportunities, and build a resilient network of collaborators advancing Salmart Diplomatic’s mandate and our clients’ success.</p>

          <h2>Vision</h2>
          <p>To be Africa’s premier diplomatic growth partner where trust, innovation, and global influence converge to build transformative collaborations.</p>

          <h2>Core Functions</h2>

          <h3>1. Strategic Partner Identification &amp; Mapping</h3>
          <ul>
            <li>Sourcing and mapping potential partners across government, development, and private sectors</li>
            <li>Evaluation of mutual value propositions and engagement strategies</li>
            <li>Curation of partnership concepts aligned to vision and mission objectives</li>
          </ul>

          <h3>2. Client Acquisition &amp; Relationship Management</h3>
          <ul>
            <li>Prospecting and onboarding new institutional clients, missions, and agencies</li>
            <li>Contract negotiation, onboarding support, and relationship sustainability plans</li>
            <li>Creation of customized proposals and client retention frameworks</li>
          </ul>

          <h3>3. National &amp; International Market Expansion</h3>
          <ul>
            <li>Market intelligence, competitive landscape analysis, and risk insights</li>
            <li>Entry strategies and diplomatic engagement pathways for clients in new regions</li>
            <li>Investor matchmaking and support for cross-border business missions</li>
          </ul>

          <h3>4. Partnership Development &amp; Ecosystem Building</h3>
          <ul>
            <li>Design and implementation of Memoranda of Understanding (MoUs), JV models, and strategic alliances</li>
            <li>Collaborations with embassies, UN agencies, research institutions, and multilaterals</li>
            <li>Coordination of public-private dialogue forums and investor roundtables</li>
          </ul>

          <h3>5. Client Growth Strategy Advisory</h3>
          <ul>
            <li>Tailored strategic planning for diplomatic, corporate, and development clients</li>
            <li>Positioning advisory for visibility, credibility, and partnership readiness</li>
            <li>Business modeling, pitch development, and funding facilitation</li>
          </ul>

          <h3>6. Revenue Generation &amp; Sponsorship Mobilization</h3>
          <ul>
            <li>Design of sponsorship decks and resource mobilization strategies</li>
            <li>Negotiation with partners and sponsors for events, initiatives, and campaigns</li>
            <li>Revenue forecasting and tracking performance metrics</li>
          </ul>

          <h2>For Our Clients</h2>
          <p>We provide growth and opportunity navigation that helps you position, partner, and prosper. From investor matchmaking and diplomatic entry strategies to full-cycle partnership management, we are your dedicated team for expansion across Africa and global frontiers.</p>

          <p>Whether you’re a government agency, intergovernmental body, development partner, or private sector player, we connect your mission with the right ecosystem to drive shared value.</p>

          <h2>For Salmart Diplomatic </h2>
          <p>We fuel Salmart Diplomatic’s strategic growth by:</p>
          <ul>
            <li>Identifying expansion markets and growth levers</li>
            <li>Forging high-impact alliances that elevate Salmart Diplomatic’s brand and value</li>
            <li>Advising management on investment partnerships, consortium opportunities, and regional influence strategies</li>
          </ul>

          <p>We are the internal compass that aligns our institutional goals with real-world market trends and future-ready partnerships.</p>

          <div class="callout" aria-label="Next step">
            <strong>Work with this department</strong>
            <span>Share your objectives and target stakeholders, and we’ll propose a partnership pathway, engagement plan, and timeline.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
