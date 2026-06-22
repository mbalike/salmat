@extends('layouts.app')

@section('title', 'Why Salmart • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/why.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/why-salmart.jpg') }}');--hero-bg-position:center 30%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Why Salmart Diplomatic </span>
    </nav>

    <h1 class="inner-hero-title">Why Salmart Diplomatic</h1>
  </div>
</section>

<main id="main" class="why-page">
  <h2 style="max-width:1100px;margin:26px auto 0;padding:0 18px">Confidence, Clarity, Capability</h2>
  <section class="page-wrap" aria-label="Why Salmart content">
    <div class="page-grid">

      <article class="feature-card article" aria-label="Why Salmart">
        <div class="feature-media">
          <img src="{{ asset('img/salmart/img-10.jpg') }}" alt="High-level event delivery" loading="lazy" decoding="async" />
        </div>

        <div class="feature-body">
          <h2>Why Choose Salmart Diplomatic Hospitality</h2>
          <p class="why-lead">Choosing Salmart Diplomatic means choosing an integrated partner that combines diplomatic intelligence with world-class production, hospitality logistics, and storytelling, built for high-visibility engagements and complex stakeholder environments.</p>
          <ul>
            <li>End-to-end Destination Management expertise</li>
            <li>Deep understanding of diplomacy, protocol, and culture</li>
            <li>Integrated events, media, branding, and strategic storytelling</li>
            <li>Global outlook with strong local execution</li>
            <li>High standards of discretion, quality, and professionalism</li>
            <li>A human-centered approach that values meaning over mechanics</li>
          </ul>

          <h2>Our DMC Partner Advantage</h2>
          <p>As a full-service Destination Management Company, Salmart Diplomatic provides local intelligence with international standards. We act as your on-the-ground partner, coordinating across venues, suppliers, authorities, and cultural stakeholders.</p>
          <div class="callout" aria-label="Standards link">
            <strong>Standards, sustainability &amp; risk management</strong>
            <span><a class="why-link" href="/standards">Read our standards approach →</a></span>
          </div>

          <h2>Industries We Serve</h2>
          <ul>
            <li>Government &amp; Diplomatic Institutions</li>
            <li>Multinational Corporations</li>
            <li>Development Partners &amp; NGOs</li>
            <li>Trade Associations &amp; Industry Bodies</li>
            <li>Healthcare, Education &amp; Research Institutions</li>
            <li>Luxury, Hospitality &amp; Tourism Brands</li>
          </ul>
          <p><a class="why-link" href="/industries">View industries →</a></p>

          <h2>What Makes Delivery Different</h2>
          <div class="benefits" aria-label="Delivery strengths">
            <div class="benefit-card">
              <h3>
                <span class="benefit-ico" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 2 19 5v6c0 6-4.2 10-7 11-2.8-1-7-5-7-11V5l7-3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M9.5 12.2 11.2 14l3.6-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </span>
                <span>Protocol-ready execution</span>
              </h3>
              <p>We protect schedules, manage access, and align stakeholders, so high-level engagements remain calm, punctual, and respectful.</p>
            </div>
            <div class="benefit-card">
              <h3>
                <span class="benefit-ico" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M9 3h6l1 2h3v16H5V5h3l1-2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M9 12h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M9 16h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M9 8h3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
                <span>Disciplined operations</span>
              </h3>
              <p>Clear run-of-show planning, rehearsals, and command control keep delivery smooth even under pressure and tight timelines.</p>
            </div>
            <div class="benefit-card">
              <h3>
                <span class="benefit-ico" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 11.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill="currentColor" opacity=".95"/>
                  </svg>
                </span>
                <span>Premium hospitality</span>
              </h3>
              <p>Thoughtful guest experience design for arrival, movement, hosting, and care, delivered discreetly and consistently.</p>
            </div>
            <div class="benefit-card">
              <h3>
                <span class="benefit-ico" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 6h16v10H7l-3 3V6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M8 10h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M8 13h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
                <span>Strategic storytelling</span>
              </h3>
              <p>We help translate outcomes into narrative, capturing moments, key messages, and impact across channels.</p>
            </div>
          </div>
        </div>
      </article>

      <aside class="info-panel" aria-label="Why Salmart quick facts">
        <div class="info-title">At a Glance</div>
        <div class="info-list">
          <div class="info-item">
            <div class="info-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
            </div>
            <div><strong style="color:var(--ink)">End-to-end</strong><br/>Brief → delivery → reporting</div>
          </div>

          <div class="info-item">
            <div class="info-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
            </div>
            <div><strong style="color:var(--ink)">Protocol &amp; culture</strong><br/>Discretion • intelligence • care</div>
          </div>

          <div class="info-item">
            <div class="info-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16v12H4V6zm3 3v6h2V9H7zm4 0v6h2V9h-2zm4 0v6h2V9h-2z"/></svg>
            </div>
            <div><strong style="color:var(--ink)">Integrated</strong><br/>Events • branding • media</div>
          </div>

          <div class="info-item">
            <div class="info-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l8 4v6c0 5-3 9-8 10-5-1-8-5-8-10V6l8-4z"/></svg>
            </div>
            <div><strong style="color:var(--ink)">Risk-aware</strong><br/>Planning • readiness • protection</div>
          </div>
        </div>

        <a class="btn-solid" href="/contact" style="width:100%">Request a Proposal</a>
        <div class="callout" style="margin-top:14px">
          <strong>Tell us what you’re planning</strong>
          <span>Share destination, dates, stakeholders, and objectives, Salmart Diplomatic will outline a delivery approach and next steps.</span>
        </div>

        <div class="why-aside-media" aria-label="Supporting image">
          <img src="{{ asset('img/salmart/img-12.jpg') }}" alt="Premium hospitality logistics" loading="lazy" decoding="async" />
        </div>
      </aside>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
