@extends('layouts.app')

@section('title', 'Training & Capacity Building Department • Salmart Diplomatic Hospitality')
@section('meta_description', "Salmart's Training & Capacity Building department delivers professional development programs in diplomatic protocol, event management, hospitality, and leadership for individuals and organizations.")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/department-detail.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/ROW.jpg') }}');--hero-bg-position:center 40%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/departments">Our Departments</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Training &amp; Capacity Building</span>
    </nav>

    <h1 class="inner-hero-title">Training &amp; Capacity Building</h1>
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
              <li><a href="/department-training-capacity-building" aria-current="page">Training &amp; Capacity Building <span class="plus" aria-hidden="true">+</span></a></li>
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
            src="{{ asset('img/events/ROW2.jpg') }}"
            alt="A professional training session"
            loading="lazy"
            decoding="async"
          />
        </div>

        <div class="feature-body">
          <h2 style="margin-top:0">Training &amp; Capacity Building Department</h2>
          <div class="tagline">Shaping the Next Generation of Diplomatic Leaders</div>

          <p class="lead">At Salmart Diplomatic Hospitality, the Training &amp; Capacity Building Department is dedicated to developing competent professionals and strengthening institutional readiness for effective engagement in diplomatic, corporate, and international environments.</p>

          <p>We prepare individuals and institutions to operate confidently in high-level settings by combining practical experience, international standards, and real-world operational insight. Our programs are informed by Salmart Diplomatic Hospitality&rsquo;s work in protocol management, high-level event coordination, and diplomatic engagement.</p>

          <p>We do not only transfer knowledge &mdash; we build discipline, confidence, leadership, and professional readiness for today&rsquo;s global environment.</p>

          <h2>Vision</h2>
          <p>To become Africa&rsquo;s leading platform for developing globally competent professionals and institutions capable of advancing diplomacy, international cooperation, and leadership.</p>

          <h2>Mission</h2>
          <p>To strengthen institutional capacity and mentor future leaders through practical training, real-world exposure, and knowledge-sharing in diplomacy, protocol, leadership, and international engagement.</p>

          <h2>Department Objectives</h2>
          <ul>
            <li>Equip professionals and institutions with diplomatic, leadership, and protocol competencies for global engagement</li>
            <li>Standardize professional practices in official hosting, international etiquette, and cultural intelligence aligned with African institutional environments</li>
            <li>Bridge the gap between academic knowledge and real-world diplomatic practice</li>
            <li>Strengthen institutional readiness to operate effectively in regional and international spaces</li>
          </ul>

          <h2>Core Training Areas</h2>

          <h3>1. Protocol &amp; Diplomatic Training</h3>
          <ul>
            <li>International protocol standards and order of precedence</li>
            <li>Hosting high-level visits and official delegations</li>
            <li>National Day and diplomatic event management</li>
            <li>Flag protocol, ceremonial procedures, and official courtesies</li>
          </ul>

          <h3>2. Diplomatic Etiquette &amp; Protocol Workshops</h3>
          <p>Practical sessions covering:</p>
          <ul>
            <li>Protocol planning and operational management</li>
            <li>Order of precedence and seating arrangements</li>
            <li>Flag etiquette and national symbol handling</li>
            <li>Dress codes for official functions</li>
            <li>Diplomatic communication and correspondence</li>
          </ul>

          <h3>3. Event &amp; Conference Management Training</h3>
          <ul>
            <li>Planning and managing high-level meetings, forums, and summits</li>
            <li>Run-of-show development and operational planning</li>
            <li>Stakeholder and vendor coordination</li>
            <li>Risk management and contingency planning</li>
          </ul>

          <h3>4. Capacity Building for Event &amp; Protocol Teams</h3>
          <ul>
            <li>Skills development for teams managing VIP visits and government events</li>
            <li>Operational discipline and coordination frameworks</li>
            <li>Scenario planning and crisis preparedness</li>
            <li>Multicultural awareness and sensitivity</li>
          </ul>

          <h3>5. Professional Representation &amp; Executive Presence</h3>
          <ul>
            <li>Institutional image and professional conduct</li>
            <li>Cross-cultural communication and international etiquette</li>
            <li>Stakeholder engagement and relationship management</li>
          </ul>

          <h3>6. Speaker Engagements &amp; Thought Leadership</h3>
          <ul>
            <li>Sessions with experienced diplomats, international relations experts, and senior officials</li>
            <li>Policy dialogues, forums, and institutional conversations</li>
            <li>Fireside chats and experience-sharing sessions that connect theory with practice</li>
          </ul>

          <h3>7. Youth &amp; Emerging Leaders Engagement</h3>
          <p>Targeted programs for:</p>
          <ul>
            <li>University students and recent graduates</li>
            <li>Youth councils and young professionals</li>
            <li>Early-career practitioners interested in diplomacy and international careers</li>
          </ul>

          <p>Focus areas include:</p>
          <ul>
            <li>Foundations of diplomacy and international engagement</li>
            <li>Public speaking and leadership development</li>
            <li>Global citizenship and professional readiness</li>
          </ul>

          <h2>Career Diplomats Initiative</h2>
          <p><a href="/portfolio">The Career Diplomats Initiative</a> is Salmart Diplomatic Hospitality&rsquo;s structured mentorship platform designed to prepare young professionals for careers in diplomacy, international relations, protocol, and global engagement.</p>

          <p>Participants receive:</p>
          <ul>
            <li>Practical exposure to high-level events and diplomatic operations</li>
            <li>Hands-on experience in protocol and coordination environments</li>
            <li>Mentorship and career guidance from experienced professionals</li>
            <li>Networking opportunities with diplomats, government officials, and international stakeholders</li>
          </ul>

          <p>This initiative bridges the gap between academic learning and professional practice &mdash; developing the next generation of ethical, disciplined, and globally competitive leaders.</p>

          <h2>Delivery Formats</h2>
          <ul>
            <li>Executive workshops and institutional training programs</li>
            <li>Customized capacity development sessions</li>
            <li>On-site coaching and operational simulations</li>
            <li>Virtual and hybrid learning sessions</li>
          </ul>

          <h2>Our Approach</h2>
          <ul>
            <li>Practical, experience-based learning</li>
            <li>Real-world exposure to operational environments</li>
            <li>Continuous engagement and follow-up support</li>
            <li>Alignment with international standards and African institutional realities</li>
          </ul>

          <h2>Why Salmart Diplomatic Hospitality</h2>
          <p>With direct experience in diplomatic operations, protocol management, and high-level engagement support, Salmart Diplomatic Hospitality delivers training that is practical, relevant, and aligned with real institutional needs.</p>
          <p>We are not only building skills &mdash; we are shaping professionals, strengthening institutions, and preparing the future leaders of diplomacy.</p>

          <div class="callout" aria-label="Next step">
            <strong>Work with this department</strong>
            <span>Tell us your audience, objectives, and preferred delivery format, and we&rsquo;ll propose a program outline and schedule.</span>
          </div>
        </div>
      </article>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
