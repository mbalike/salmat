@extends('layouts.app')

@section('title', 'Departments • Salmart Diplomatic Hospitality')
@section('meta_description', 'Explore Salmart\'s specialized departments: Protocol & Diplomatic Services, Event & Conference Management, Destination Management, Tours & Experiences, Media & Communications, and more.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/departments.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/salmart/salmart-team.jpeg') }}');--hero-bg-position:center 40%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Our Departments</span>
    </nav>

    <h1 class="inner-hero-title">Our Departments</h1>
  </div>
</section>

<section class="dept-page-wrap" aria-label="Departments overview">
    <div class="dept-page-head">
      <div>
        <h2>Our Departments</h2>
        <p>Each department supports high-visibility engagements with discipline, discretion, and clear delivery standards.</p>
      </div>
    </div>

    <div class="dept-grid">
      <a class="dept-card" href="/department-strategic-affairs-scientific-engagement" aria-label="Strategic Affairs &amp; Government Engagement Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M8 10c1.2 1.2 2.6 1.8 4 1.8s2.8-.6 4-1.8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M5 21h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M7 21v-4.5c0-1.7 1.3-3 3-3h4c1.7 0 3 1.3 3 3V21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Strategic Affairs &amp; Government Engagement</h3>
          <p class="dept-card-intro">Bridges Salmart operations with government, diplomatic, and institutional ecosystems, ensuring engagements are strategically aligned, compliant, and credible.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/events/MarCOSIO (16).jpeg') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-protocol-diplomatic-services" aria-label="Protocol &amp; Diplomatic Services Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3l7 4v6c0 5-3.6 8.5-7 8.5S5 18 5 13V7l7-4Z" stroke="currentColor" stroke-width="2"/>
              <path d="M9 12l2 2 4-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Protocol &amp; Diplomatic Services</h3>
          <p class="dept-card-intro">Ensures dignified handling of diplomatic guests and compliance with international protocol standards.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/protocal-service.jpg') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-event-conference-management" aria-label="Event &amp; Conference Management Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M7 3v3M17 3v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M4 8h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M6 5h12a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="2"/>
              <path d="M8 12h8M8 16h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Event &amp; Conference Management</h3>
          <p class="dept-card-intro">Designs and delivers high-profile conferences, summits, forums, and official engagements.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/conference1.jpg') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-destination-management-hospitality" aria-label="Destination Management &amp; Hospitality Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z" stroke="currentColor" stroke-width="2"/>
              <path d="M12 11.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill="currentColor" opacity=".85"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Destination Management &amp; Hospitality</h3>
          <p class="dept-card-intro">Delivers seamless travel, hospitality, and on-ground logistics for delegations and VIP guests.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/events/miss universe (6).jpg') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-tours-experiences" aria-label="Tours &amp; Experiences Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M9 18 3 21V6l6-3 6 3 6-3v15l-6 3-6-3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              <path d="M9 3v15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M15 6v15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Tours &amp; Experiences</h3>
          <p class="dept-card-intro">Curates immersive tours and cultural experiences tailored for VIP guests, delegations, and visiting groups.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/tourism.jpg') }}" alt="" loading="lazy" />   
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-media-communications" aria-label="Media &amp; Communications Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M4 7a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7Z" stroke="currentColor" stroke-width="2"/>
              <path d="M16 9l4-2v10l-4-2V9Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Media &amp; Communications</h3>
          <p class="dept-card-intro">Manages visibility, storytelling, and strategic communications for Salmart Diplomatic and its clients.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/events/MarCOSIO (3).jpeg?q=80&w=2400&auto=format&fit=crop') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-business-development-partnerships" aria-label="Business Development &amp; Partnerships Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M8 12a4 4 0 1 1 8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M3 21c.8-3 3.4-5 6.3-5h5.4c2.9 0 5.5 2 6.3 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M16.5 6.5 21 2m0 0v4m0-4h-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Business Development &amp; Partnerships</h3>
          <p class="dept-card-intro">Drives growth, strategic alliances, and market expansion through partnerships and client development.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/events/korea-1 (13).jpeg') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-training-capacity-building" aria-label="Training &amp; Capacity Building Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M4 19V6a2 2 0 0 1 2-2h12v15" stroke="currentColor" stroke-width="2"/>
              <path d="M6 22h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M8 8h6M8 12h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Training &amp; Capacity Building</h3>
          <p class="dept-card-intro">Builds skills, knowledge, and institutional capacity through trainings, workshops, and masterclasses.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="{{ asset('img/events/ROW.jpg') }}" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>

      <a class="dept-card" href="/department-finance-administration" aria-label="Finance &amp; Administration Department">
        <div class="dept-card-copy">
          <div class="dept-card-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M7 7h10v14H7V7Z" stroke="currentColor" stroke-width="2"/>
              <path d="M9 3h6v4H9V3Z" stroke="currentColor" stroke-width="2"/>
              <path d="M9.5 11h5M9.5 15h5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="dept-card-title">Finance &amp; Administration</h3>
          <p class="dept-card-intro">Ensures institutional stability and operational excellence through finance, compliance, HR, and governance.</p>
        </div>
        <div class="dept-card-media" aria-hidden="true">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2400&auto=format&fit=crop" alt="" loading="lazy" />
          <div class="dept-card-cta"><span class="pill">Read more →</span></div>
        </div>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
