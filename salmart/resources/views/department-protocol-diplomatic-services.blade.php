@extends('layouts.app')

@section('title', 'Protocol &amp; Diplomatic Services • Departments • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/protocal-service.jpg') }}');--hero-bg-position:center 25%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Protocol &amp; Diplomatic Services</span>
    </nav>

    <h1 class="inner-hero-title">Protocol &amp; Diplomatic Services</h1>
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
              <li><a href="/department-protocol-diplomatic-services" aria-current="page">Protocol &amp; Diplomatic Services <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-destination-management-hospitality">Destination Management &amp; Hospitality <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-tours-experiences">Tours &amp; Experiences <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-strategic-affairs-scientific-engagement">Strategic Affairs &amp; Government Engagement <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-training-capacity-building">Training &amp; Capacity Building <span class="plus" aria-hidden="true">+</span></a></li>
              <li><a href="/department-finance-administration">Finance &amp; Administration <span class="plus" aria-hidden="true">+</span></a></li>
            </ul>
          </div>
        </section>

        <section class="download-card" aria-label="Download">
          <a class="dl" href="{{ asset('docs/protocol-diplomatic-services-profile.pdf') }}" download aria-label="Download department profile">
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
            src="{{ asset('img/protocal-service2.jpg') }}"
            alt="Protocol and diplomatic coordination"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Protocol &amp; Diplomatic Department</h2>
          <div class="tagline">Coordination. Discretion. Dignity in Every Detail.</div>

          <p class="lead">At Salmart Diplomatic Hospitality, our Protocol &amp; Diplomatic Services Department provides comprehensive end-to-end support for official visits, diplomatic missions, and high-level engagements.</p>

          <p>From pre-arrival clearances to departure coordination, we manage every protocol detail to ensure smooth facilitation, respect for hierarchy, and seamless interaction between guests, host institutions, and relevant stakeholders.</p>

          <p>We are a trusted partner to embassies, government institutions, international organizations, and investment missions where precision, confidentiality, and professionalism are essential.</p>

          <p><em>We do not conduct diplomacy &mdash; we enable it, ensuring every engagement reflects order, respect, and institutional excellence.</em></p>

          <h2>Vision</h2>
          <p>To position Salmart Diplomatic Hospitality as a trusted provider of professional protocol and diplomatic support for high-level national and international engagements.</p>

          <h2>Mission</h2>
          <p>To facilitate official visits and diplomatic activities with precision, discretion, and full adherence to international protocol standards.</p>

          <h2>Our End-to-End Protocol Scope</h2>

          <h3>Pre-Arrival Planning &amp; Coordination</h3>
          <ul>
            <li>Official visit planning and protocol mapping</li>
            <li>Coordination with embassies, high commissions, and consulates</li>
            <li>Preparation of official correspondence and diplomatic notes</li>
            <li>Development of detailed visit programs and movement schedules</li>
            <li>Stakeholder alignment and logistical planning</li>
          </ul>

          <h3>Visa, Immigration &amp; Clearance Facilitation</h3>
          <ul>
            <li>Visa advisory and processing support for official delegations</li>
            <li>Diplomatic and special entry clearance coordination</li>
            <li>Fast-track immigration facilitation (where applicable)</li>
            <li>Liaison with immigration, customs, and border authorities</li>
            <li>Clearance for official equipment, materials, and cargo</li>
          </ul>

          <h3>VIP Reception &amp; Movement Management</h3>
          <ul>
            <li>Airport meet-and-greet for dignitaries and delegations</li>
            <li>Arrival and departure protocol handling</li>
            <li>Motorcade planning and movement coordination</li>
            <li>Route planning and timing control</li>
            <li>Real-time movement monitoring and schedule protection</li>
          </ul>

          <h3>Diplomatic Mission &amp; Institutional Coordination</h3>
          <ul>
            <li>Engagement with embassies, high commissions, and consulates</li>
            <li>Coordination with international organizations and diplomatic missions</li>
            <li>Facilitation of bilateral and multilateral meetings</li>
            <li>Institutional coordination for official visits, courtesy calls, and high-level engagements</li>
          </ul>

          <h3>Investor &amp; Institutional Engagement Facilitation</h3>
          <p>We support investment missions and economic delegations by ensuring structured, productive, and well-coordinated engagements aligned with their strategic objectives.</p>
          <p>Scope of support:</p>
          <ul>
            <li>Facilitation of investor and economic delegation visits</li>
            <li>Coordination of meetings with public and private sector institutions</li>
            <li>Scheduling of courtesy calls, briefings, and official presentations</li>
            <li>Site visit planning and on-ground coordination for project locations, industrial zones, and strategic facilities</li>
            <li>Program alignment to ensure efficient movement and meaningful engagement</li>
          </ul>
          <p>This service enables effective investment diplomacy by providing structured access, coordination, and institutional engagement.</p>

          <h3>Diplomatic Events &amp; Official Functions</h3>
          <p>Support for formal diplomatic engagements, including:</p>
          <ul>
            <li>National Day receptions and diplomatic celebrations</li>
            <li>Ambassadorial welcome and farewell events</li>
            <li>Embassy and consulate official functions</li>
            <li>Bilateral receptions and high-level networking engagements</li>
            <li>Protocol advisory on guest hierarchy, invitations, and reception flow</li>
          </ul>

          <h3>Ceremonial &amp; Protocol Advisory</h3>
          <ul>
            <li>Order of precedence and official seating arrangements</li>
            <li>Flag protocol and national symbol placement</li>
            <li>Anthem coordination and ceremonial procedures</li>
            <li>Reception lines and formal courtesies</li>
            <li>Dress code and diplomatic etiquette guidance</li>
          </ul>

          <h3>Security &amp; Access Coordination</h3>
          <ul>
            <li>Liaison with security and protective services</li>
            <li>Controlled access planning for high-level venues and meetings</li>
            <li>Coordination of security requirements for VIP guests</li>
            <li>Discreet handling of sensitive or high-profile engagements</li>
          </ul>

          <h3>On-Site Protocol Management</h3>
          <ul>
            <li>Deployment of protocol and liaison officers at airports, hotels, and venues</li>
            <li>Real-time coordination and issue resolution</li>
            <li>Guest escort and high-level assistance</li>
            <li>Schedule monitoring and adjustment</li>
          </ul>

          <h3>Day-of Engagement Support</h3>
          <p>We manage critical operational details to ensure engagements run smoothly, respectfully, and on schedule:</p>
          <ul>
            <li>Arrival flow management and controlled access coordination</li>
            <li>Stakeholder alignment across protocol, security, and event teams</li>
            <li>Implementation of seating plans and order of precedence</li>
            <li>Movement choreography for arrivals, transitions, and departures</li>
            <li>Briefings for hosts, principals, and support teams</li>
            <li>Real-time contingency management to protect schedule, dignity, and protocol integrity</li>
          </ul>

          <h3>Departure &amp; Post-Visit Support</h3>
          <ul>
            <li>Departure coordination and airport protocol</li>
            <li>Final movement and logistics oversight</li>
            <li>Post-visit reporting and documentation (if required)</li>
          </ul>

          <h2>High-Level Engagement Support</h2>
          <p>We provide protocol management for:</p>
          <ul>
            <li>Heads of State delegations and government officials</li>
            <li>Ministers and senior public officials</li>
            <li>Ambassadors and diplomatic missions (embassies, high commissions, and consulates)</li>
            <li>National Day and official diplomatic celebrations</li>
            <li>Ambassadorial welcome and farewell functions</li>
            <li>International organizations and special envoys</li>
            <li>Investment delegations and economic missions</li>
            <li>Corporate executives and distinguished VIP guests</li>
          </ul>

          <h2>Our Approach</h2>
          <ul>
            <li>Advance planning and stakeholder coordination</li>
            <li>Strict adherence to international diplomatic standards</li>
            <li>Real-time operational control and communication</li>
            <li>Full respect for confidentiality, hierarchy, and cultural norms</li>
          </ul>

          <h2>Role Within Salmart Diplomatic Hospitality</h2>
          <p>The Protocol &amp; Diplomatic Services Department serves as the institutional interface between Salmart Diplomatic Hospitality, diplomatic missions, international partners, and official stakeholders &mdash; ensuring that all high-level engagements are managed with professionalism, precision, and diplomatic integrity.</p>

          <div class="callout" aria-label="Next step">
            <strong>Plan a protocol-sensitive engagement</strong>
            <span>Share your delegation profile, dates, venues, and required clearances. We&rsquo;ll propose a protocol plan and coordination structure.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
