@extends('layouts.app')

@section('title', 'Strategic Affairs & Scientific Engagement Department • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's Strategic Affairs & Scientific Engagement department facilitates government relations, scientific diplomacy, and policy engagement connecting Tanzania with international partners.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/MarCOSIO (16).jpeg') }}');--hero-bg-position:center 46%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Strategic Affairs &amp; Government Engagement</span>
    </nav>

    <h1 class="inner-hero-title">Strategic Affairs &amp; Government Engagement</h1>
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
              <li><a href="/department-strategic-affairs-scientific-engagement" aria-current="page">Strategic Affairs &amp; Government Engagement <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-training-capacity-building">Training &amp; Capacity Building <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-finance-administration">Finance &amp; Administration <span class="plus" aria-hidden="true">+</span></a></li>
            </ul>
          </div>
        </section>

        <section class="download-card" aria-label="Download">
          <a class="dl" href="{{ asset('docs/strategic-affairs-scientific-engagement-profile.pdf') }}" download aria-label="Download department profile">
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
        <div class="feature-media" aria-label="Department featured image" style="--feature-media-x:50%;--feature-media-y:24%;">
          <img
            src="{{ asset('img/strategic-affairs.jpg') }}"
            alt="Scientific engagement and strategy"
            loading="lazy"
            decoding="async"
            style="object-position: center 63%;"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Strategic Affairs &amp; Government Engagement Department</h2>

          <h2>Vision</h2>
          <p>To make Salmart Diplomatic Hospitality a trusted bridge between destinations, governments, and global partners through strategic engagement and diplomatic alignment.</p>

          <h2>Overview</h2>
          <p class="lead">The Strategic Affairs &amp; Government Engagement Department anchors Salmart&#39;s operations within government, diplomatic, and institutional ecosystems. As a Destination Management Company operating at high levels of protocol and influence, this department ensures all Salmart engagements are well-aligned, compliant, credible, and strategically positioned.</p>

          <p>Rather than duplicating government roles, the department facilitates coordination, access, and alignment &#8212; enabling smooth execution of events, travel, investment visits, and destination promotion initiatives.</p>

          <h2>Core Functions</h2>

          <h3>Government &amp; Institutional Liaison</h3>
          <ul>
            <li>Engagement with ministries, local authorities, tourism boards, and public agencies</li>
            <li>Coordination of official approvals, permits, and institutional participation</li>
            <li>Alignment of Salmart projects with national tourism, culture, and investment priorities</li>
          </ul>

          <h3>Diplomatic Engagement &amp; Protocol Advisory</h3>
          <ul>
            <li>Advisory on diplomatic protocol, precedence, and ceremonial arrangements</li>
            <li>Structuring of official visits, courtesy calls, and state-level engagements</li>
            <li>Cultural and diplomatic briefings for international delegations</li>
          </ul>

          <h3>Strategic Positioning &amp; Destination Advocacy</h3>
          <ul>
            <li>Positioning cities and destinations within official and diplomatic platforms</li>
            <li>Integrating tourism, culture, and investment narratives into high-level engagements</li>
            <li>Supporting soft-power objectives through experiential diplomacy</li>
          </ul>

          <h3>Stakeholder Mapping &amp; Relationship Management</h3>
          <ul>
            <li>Identification of key government and institutional stakeholders</li>
            <li>Long-term relationship building for repeat engagements and partnerships</li>
          </ul>

          <h2>For Our Clients</h2>
          <p>Clients benefit from seamless navigation of government systems, reduced friction, and enhanced credibility when operating in official environments.</p>

          <h2>For Salmart Diplomatic</h2>
          <p>This department strengthens Salmart&#39;s authority, access, and trust across borders.</p>

          <div class="callout" aria-label="Department tagline">
            <strong>Diplomacy aligned. Engagement enabled.</strong>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
