@extends('layouts.app')

@section('title', 'MICE Delivery Services • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's MICE services cover Meetings, Incentives, Conferences, and Exhibitions — delivering world-class experiences for corporate and diplomatic clients across Tanzania and East Africa.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/services/mice5.jpg') }}')">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">MICE Services</span>
    </nav>

    <h1 class="inner-hero-title">MICE Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/services/MICE6.jpg') }}" alt="MICE conference delivery" loading="lazy" />
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0">Meetings. Incentives. Conferences. Exhibitions.</p>
        <p style="color:#6b7280;line-height:1.8;margin:12px 0 0"><strong style="color:var(--ink)">Delivered with Precision and Confidence.</strong></p>

        <p style="color:#6b7280;line-height:1.8;margin:12px 0 0">At Salmart Diplomatic Hospitality, our MICE Services deliver precision-driven, premium experiences for diplomatic, corporate, and institutional stakeholders. We manage complexity end-to-end, ensuring programs run seamlessly, respect protocol, and exceed expectations.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">By combining destination expertise, disciplined logistics, and high-touch hospitality, we create MICE programs that feel effortless to participants while remaining tightly controlled behind the scenes.</p>

        <h2>Our MICE Capability (End-to-End)</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We manage the full lifecycle—from initial brief to final reporting:</p>
        <ul>
          <li>Concept development and program design</li>
          <li>Budgeting, scheduling, and stakeholder coordination</li>
          <li>Vendor sourcing, contracting, and performance oversight</li>
          <li>Run-of-show planning and operational rehearsals</li>
          <li>On-site delivery, command control, and issue resolution</li>
          <li>Post-program evaluation, reporting, and closeout</li>
        </ul>

        <p style="color:#6b7280;line-height:1.8;margin:0">For high-level delegations, we integrate protocol coordination, security liaison, and schedule protection to ensure discretion, punctuality, and smooth movement.</p>

        <h2>MICE Components</h2>

        <h2>M: Meetings</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We deliver secure, well-structured environments that support decision-making, confidentiality, and efficiency.</p>
        <ul>
          <li>Corporate and diplomatic meetings</li>
          <li>Board sessions and executive briefings</li>
          <li>High-level negotiations and strategy sessions</li>
          <li>Technical workshops and closed-door forums</li>
        </ul>

        <h2>I: Incentives</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We design incentive programs that reward performance, strengthen teams, and showcase destinations with cultural depth and refinement.</p>
        <ul>
          <li>Incentive travel programs</li>
          <li>Executive retreats and reward experiences</li>
          <li>Team-building activities and leadership journeys</li>
          <li>Curated cultural and leisure experiences</li>
        </ul>

        <h2>C: Conferences</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We manage large-scale and high-profile conferences with precision and stakeholder alignment.</p>
        <ul>
          <li>End-to-end delegate and registration management</li>
          <li>Speaker coordination and content flow support</li>
          <li>Venue setup, branding, and technical integration</li>
          <li>On-site operations and participant experience management</li>
        </ul>

        <p style="color:#6b7280;line-height:1.8;margin:0">(Event production elements are delivered in coordination with our Event Management team.)</p>

        <h2>E: Exhibitions</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We create exhibition environments that are functional, visually compelling, and strategically positioned.</p>
        <ul>
          <li>Exhibition concept development and layout planning</li>
          <li>Booth branding, design, and fabrication</li>
          <li>Printing, installation, and dismantling</li>
          <li>Digital displays, screens, and interactive installations</li>
        </ul>

        <h2>Delivery Formats</h2>
        <ul>
          <li>Live (In-Person)</li>
          <li>Hybrid (Physical + Virtual)</li>
          <li>Fully Virtual / Online</li>
        </ul>

        <h2>How We Work</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">Our MICE delivery approach is structured and disciplined:</p>
        <ol>
          <li>Discovery and program design</li>
          <li>Budgeting, timelines, and stakeholder alignment</li>
          <li>Supplier coordination and contract management</li>
          <li>Operational planning, rehearsals, and readiness checks</li>
          <li>On-site execution and real-time issue management</li>
          <li>Post-event reporting and strategic closeout</li>
        </ol>

        <h2>Why Salmart for MICE</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We go beyond logistics. We safeguard reputation, manage pressure, and deliver confidence.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">Our MICE services are trusted for high-stakes engagements where precision, discretion, and professionalism are non-negotiable.</p>

        <h2>Ideal For</h2>
        <ul>
          <li>Government and diplomatic missions</li>
          <li>Corporate organizations and multinational companies</li>
          <li>International organizations and development partners</li>
          <li>Trade missions, investment forums, and industry associations</li>
        </ul>

        <div class="callout" aria-label="Operational note">
          <strong>Operational note</strong>
          <span>For multi-day programs, we implement clear operational rhythms, including daily briefings, venue walkthroughs, stakeholder updates, and contingency planning.</span>
        </div>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Delivery</strong><br/>DMC-led, end-to-end</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Protocol • security liaison • schedule protection</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Formats</strong><br/>Live • hybrid • virtual</div>
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
        <strong>Let’s scope your MICE program</strong>
        <span>Send your destination, dates, delegate volume, and objectives. Salmart Diplomatic will outline a delivery plan and timeline.</span>
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
      <img src="{{ asset('img/services/MICE1.jpeg') }}" alt="Delegate experience" loading="lazy" />
      <img src="{{ asset('img/services/MICE8.jpg') }}" alt="Operations team" loading="lazy" />
      <img src="{{ asset('img/services/MICE3.jpeg') }}" alt="Conference support" loading="lazy" />
      <img src="{{ asset('img/services/MICE2.jpeg') }}" alt="Exhibition environment" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
