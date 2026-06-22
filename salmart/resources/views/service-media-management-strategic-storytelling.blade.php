@extends('layouts.app')

@section('title', 'Media Management & Strategic Storytelling • Salmart Diplomatic Hospitality')
@section('meta_description', 'Strategic media management and storytelling by Salmart — content creation, media relations, and narrative strategy for diplomatic and corporate communications in East Africa.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/mediacover.jpg') }}');--hero-bg-position:center 32%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Media Management Services</span>
    </nav>

    <h1 class="inner-hero-title">Media Management Services</h1>
  </div>
</section>

<section class="page-wrap" aria-label="Service content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Service article">
      <div class="feature-media">
        <img src="{{ asset('img/media (6).jpeg') }}" alt="Media and communications" loading="lazy" />
      </div>

      <div class="feature-body">
        <h2 style="margin-top:0">Capturing Moments. Amplifying Impact. Protecting Reputation.</h2>

        <p style="color:#6b7280;line-height:1.8;margin:0">At Salmart Diplomatic Hospitality, Media Management ensures that high-level events, conferences, forums, and diplomatic engagements are not only professionally documented but strategically positioned for visibility, credibility, and long-term value.</p>

        <p style="color:#6b7280;line-height:1.8;margin:18px 0 0">We go beyond cameras and captions. We manage what is seen, how it is seen, and who sees it while fully respecting protocol, confidentiality, and institutional sensitivities.</p>

        <h2>What We Deliver</h2>

        <h3>Professional Media Coverage</h3>
        <ul>
          <li>High-quality photography and videography for conferences, summits, and official ceremonies</li>
          <li>Executive portraits, delegation coverage, and speaker documentation</li>
          <li>Behind-the-scenes and protocol-approved storytelling</li>
        </ul>

        <h3>Video Production &amp; Event Highlights</h3>
        <ul>
          <li>Event recap and highlight films</li>
          <li>Leadership interviews, testimonials, and soundbites</li>
          <li>Documentary-style coverage for institutional archives and communications</li>
        </ul>

        <h3>Media &amp; Press Coordination</h3>
        <ul>
          <li>Accreditation and coordination of media attendance</li>
          <li>Preparation of press kits, media briefs, and interview arrangements</li>
          <li>Liaison with national, regional, and international media outlets</li>
        </ul>

        <h3>Digital Visibility &amp; Live Updates</h3>
        <ul>
          <li>Real-time social media coverage during events</li>
          <li>Live posts, reels, stories, and professional updates</li>
          <li>Post-event content scheduling and audience engagement</li>
        </ul>

        <h3>Visibility Strategy &amp; Message Control</h3>
        <ul>
          <li>Visibility planning aligned with event objectives</li>
          <li>Message consistency across platforms and audiences</li>
          <li>Content clearance workflows for sensitive or high-level engagements</li>
        </ul>

        <h3>Post-Event Reporting &amp; Analytics</h3>
        <ul>
          <li>Media coverage summaries and visibility reports</li>
          <li>Digital reach and engagement analytics</li>
          <li>Organized archival content for future institutional use</li>
        </ul>

        <h2>Conference Human Capital</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">We provide experienced professionals who enhance the structure, flow, and intellectual value of conferences and forums.</p>
        <ul>
          <li><strong style="color:var(--ink)">Event Moderators</strong> – Professional facilitation of high-level panels, roundtables, and discussions with diplomacy and neutrality.</li>
          <li><strong style="color:var(--ink)">Masters of Ceremony (MCs)</strong> – Skilled hosts who manage program flow, transitions, and audience engagement while maintaining protocol and time discipline.</li>
          <li><strong style="color:var(--ink)">Rapporteurs &amp; Documentation Specialists</strong> – Accurate capture of proceedings, key messages, resolutions, and outcomes through professional reports and summaries.</li>
        </ul>

        <h2>Protocol-Sensitive Coverage</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">For diplomatic and high-level engagements, we ensure:</p>
        <ul>
          <li>Content approval and clearance procedures</li>
          <li>Management of restricted or controlled coverage areas</li>
          <li>Full respect for confidentiality, hierarchy, and cultural protocols</li>
        </ul>

        <h2>Who This Service Is For</h2>
        <ul>
          <li>Government institutions and diplomatic missions</li>
          <li>International organizations and development partners</li>
          <li>Corporate leadership forums and executive summits</li>
          <li>Conferences, exhibitions, and investment platforms</li>
        </ul>

        <h2>Why Salmart Diplomatic</h2>
        <p style="color:#6b7280;line-height:1.8;margin:0">By combining media expertise, conference human capital, and diplomatic awareness, Salmart Diplomatic Hospitality ensures every event is not only well executed but well documented, well remembered, and strategically positioned for lasting impact.</p>
      </div>
    </article>

    <aside class="info-panel" aria-label="Quick facts">
      <div class="info-title">Quick Facts</div>
      <div class="info-list">
        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Delivery</strong><br/>Coverage + visibility strategy</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Includes</strong><br/>Photo • video • press • live updates</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Protocol-ready</strong><br/>Clearance + controlled coverage</div>
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
        <strong>Plan your visibility</strong>
        <span>Share your event type, agenda, audience, and sensitivity level. Salmart Diplomatic will propose a coverage and clearance workflow.</span>
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
      <img src="{{ asset('img/media (4).jpg') }}" alt="Camera crew" loading="lazy" />
      <img src="{{ asset('img/media (2).jpg') }}" alt="Digital publishing" loading="lazy" style="object-position: center 30%;" />
      <img src="{{ asset('img/media (5).jpeg') }}" alt="Interview setup" loading="lazy" />
      <img src="{{ asset('img/mediaimg.jpg') }}" alt="Team coordination" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
