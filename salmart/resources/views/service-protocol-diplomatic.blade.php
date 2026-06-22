@extends('layouts.app')

@section('title', 'Protocol & Diplomatic Services • Salmart Diplomatic Hospitality')
@section('meta_description', 'Expert protocol and diplomatic services by Salmart — state visit coordination, diplomatic reception management, VIP handling, and ceremonial protocol for governments and missions.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/ROW25 (6).jpg') }}');--hero-bg-position:center 10%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Protocol &amp; Diplomatic Services</span>
    </nav>

    <h1 class="inner-hero-title">Protocol &amp; Diplomatic Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/services/PROTOCOL.jpg') }}" alt="Official meeting" loading="lazy" />
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0"><strong style="color:var(--ink)">Coordination. Discretion. Dignity in Every Detail.</strong></p>

        <p style="color:#6b7280;line-height:1.8;margin:12px 0 0">At Salmart Diplomatic Hospitality, we support diplomatic activities through comprehensive Protocol &amp; Diplomatic Services designed to facilitate high-level visits, official missions, and formal engagements.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">Our services provide end-to-end support for embassies, government institutions, international organizations, and distinguished delegations—ensuring that every engagement is conducted with precision, professionalism, and full respect for international protocol standards.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">From pre-arrival clearances to departure coordination, we manage every protocol detail to ensure smooth facilitation, respect for hierarchy, and seamless interaction between guests, host institutions, and government authorities.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">We do not conduct diplomacy—we enable it, ensuring every engagement reflects order, respect, and institutional excellence.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">We are a trusted partner for protocol-sensitive engagements where confidentiality, coordination, and institutional professionalism are essential.</p>

        <h2>Our End-to-End Protocol Scope</h2>

        <h3>Pre-Arrival Planning &amp; Coordination</h3>
        <ul>
          <li>Official visit planning and protocol mapping</li>
          <li>Liaison with Ministries, Protocol Units, and relevant authorities</li>
          <li>Coordination with embassies, high commissions, and consulates</li>
          <li>Preparation of official correspondence and diplomatic notes</li>
          <li>Development of detailed visit programs and movement schedules</li>
        </ul>

        <h3>Visa, Immigration &amp; Clearance Facilitation</h3>
        <ul>
          <li>Visa advisory and processing support for official delegations</li>
          <li>Diplomatic and special entry clearance coordination</li>
          <li>Fast-track immigration support (where applicable)</li>
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

        <h3>Official Documentation &amp; Accreditation</h3>
        <ul>
          <li>Preparation of clearance letters and official access documentation</li>
          <li>Accreditation for events, meetings, and restricted areas</li>
          <li>Credential management and controlled access coordination</li>
        </ul>

        <h3>Government &amp; Diplomatic Liaison</h3>
        <ul>
          <li>Coordination with government ministries and state protocol offices</li>
          <li>Engagement with embassies, consulates, and international missions</li>
          <li>Facilitation of bilateral and multilateral engagements</li>
          <li>Institutional coordination for official visits and high-level meetings</li>
        </ul>

        <h3>Diplomatic Events &amp; Official Functions</h3>
        <p style="color:#6b7280;line-height:1.8;margin:0">Support for formal diplomatic engagements, including:</p>
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
          <li>Controlled access planning for high-level venues</li>
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

        <h2>Day-of Engagement Support</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We manage critical operational details to ensure the day runs smoothly, respectfully, and on schedule.</p>
        <ul>
          <li>Arrival flow management and controlled access coordination</li>
          <li>Stakeholder alignment across protocol, security, and event teams</li>
          <li>Implementation of seating plans and order of precedence</li>
          <li>Movement choreography for arrivals, transitions, and departures</li>
          <li>Briefings for hosts, principals, staff, and support teams</li>
          <li>Real-time contingency management to protect schedule, dignity, and protocol integrity</li>
        </ul>

        <h3>Departure &amp; Post-Visit Support</h3>
        <ul>
          <li>Departure coordination and airport protocol</li>
          <li>Final movement and logistics oversight</li>
          <li>Post-visit reporting and documentation (if required)</li>
        </ul>

        <h2>High-Level Engagement Support</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We provide protocol management for:</p>
        <ul>
          <li>Heads of State delegations and government officials</li>
          <li>Ministers and senior public officials</li>
          <li>Ambassadors and diplomatic missions (embassies, high commissions, and consulates)</li>
          <li>National Day and official diplomatic celebrations</li>
          <li>Ambassadorial welcome and farewell functions</li>
          <li>International organizations and special envoys</li>
          <li>Corporate executives and distinguished VIP guests</li>
        </ul>

        <h2>Our Approach</h2>
        <ul>
          <li>Advance planning and stakeholder coordination</li>
          <li>Strict adherence to international diplomatic standards</li>
          <li>Real-time operational control and communication</li>
          <li>Full respect for confidentiality, hierarchy, and cultural norms</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">With strong institutional relationships, diplomatic awareness, and disciplined coordination, Salmart Diplomatic Hospitality delivers protocol services that safeguard dignity, protect schedules, and ensure every official engagement reflects the highest standards of professionalism.</p>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Best for</strong><br/>High-level visits • official missions • formal engagements</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Scope</strong><br/>End-to-end protocol coordination</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Coverage</strong><br/>Pre-arrival • clearance • movement • day-of</div>
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
        <strong>Need a protocol plan?</strong>
        <span>Share the engagement type, guest list level, venue, and schedule. Salmart Diplomatic will propose a protocol flow and coordination approach.</span>
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
      <img src="{{ asset('img/events/NaneNane (12).jpg') }}" alt="Formal discussion" loading="lazy" />
      <img src="{{ asset('img/services/PROTOCOL (2).jpg') }}" alt="Team coordination" loading="lazy" />
      <img src="{{ asset('img/services/PROTOCOL (3).jpg') }}" alt="Handshake" loading="lazy" />
      <img src="{{ asset('img/services/PROTOCOL (1).jpg') }}" alt="Meeting table" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
