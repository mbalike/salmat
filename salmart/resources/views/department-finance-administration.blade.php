@extends('layouts.app')

@section('title', 'Finance & Administration Department • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's Finance & Administration department ensures financial governance, operational efficiency, and administrative excellence supporting all divisions of Salmart Diplomatic Hospitality.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/finance.jpg') }}');--hero-bg-position:center 40%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Finance &amp; Administration</span>
    </nav>

    <h1 class="inner-hero-title">Finance &amp; Administration</h1>
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
              <li><a href="/department-destination-management-hospitality">Destination Management &amp; Hospitality <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-tours-experiences">Tours &amp; Experiences <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-strategic-affairs-scientific-engagement">Strategic Affairs &amp; Government Engagement <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-training-capacity-building">Training &amp; Capacity Building <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-finance-administration" aria-current="page">Finance &amp; Administration <span class="plus" aria-hidden="true">+</span></a></li>
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
            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2400&auto=format&fit=crop"
            alt="Financial planning and administration"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Finance &amp; Administration Department</h2>
          <div class="tagline">Driving Operational Excellence with Financial Integrity</div>

          <p class="lead">The Finance &amp; Administration Department at Salmart Diplomatic Hospitality serves as the backbone of our organizational performance.</p>

          <p>It ensures that our operations are financially sound, administratively compliant, and structurally efficient. By overseeing financial planning, procurement, HR, and legal frameworks, this department provides the support systems required for the successful delivery of our diplomatic and hospitality services.</p>

          <h2>Vision</h2>
          <p>To be a trusted pillar of accountability, efficiency, and strategic resource management in support of Salmart Diplomatic’s continental and global operations.</p>

          <h2>Mission</h2>
          <p>To provide robust financial and administrative systems that enable the organization to perform with transparency, compliance, and operational agility.</p>

          <h2>Objectives</h2>
          <ul>
            <li>Ensure sound financial planning and reporting aligned with strategic priorities</li>
            <li>Promote cost-effectiveness and value-for-money procurement</li>
            <li>Attract, retain, and develop a professional and diverse workforce</li>
            <li>Maintain legal and regulatory compliance across operations</li>
            <li>Foster organizational resilience through strong internal systems</li>
            <li>Enable seamless interdepartmental coordination and logistical support</li>
          </ul>

          
          <h2>Core Functions</h2>

          <h3>Financial Management &amp; Budgeting</h3>
          <p>Developing and monitoring budgets, financial forecasts, expenditure controls, and audit processes to ensure fiscal responsibility.</p>

          <h3>Procurement &amp; Vendor Management</h3>
          <p>Managing acquisition of goods and services through transparent and efficient procurement procedures aligned with policy and compliance standards.</p>

          <h3>Human Resources (HR)</h3>
          <p>Overseeing recruitment, contracts, onboarding, employee well-being, and performance evaluation, while fostering a dynamic and professional workforce.</p>

          <h3>Legal &amp; Compliance</h3>
          <p>Ensuring all organizational operations meet legal obligations, contracts are sound, and risk is minimized through adherence to statutory and regulatory requirements.</p>

          <h3>Administrative Support</h3>
          <p>Managing internal operations including facilities, scheduling, travel arrangements, recordkeeping, and coordination between departments.</p>

          <h3>Monitoring &amp; Evaluation (M&amp;E)</h3>
          <p>Tracking financial and administrative performance indicators to improve decision-making, transparency, and strategic alignment.</p>


          <div class="callout" aria-label="Next step">
            <strong>Work with this department</strong>
            <span>For procurement, compliance, budgeting, or administrative support, share your needs and timelines and we’ll advise the best pathway.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
