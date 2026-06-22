@extends('layouts.app')

@section('title', 'Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endpush

@section('content')
<section class="hero" id="home" aria-label="Homepage hero">
  <div class="hero-content">
    <div class="hero-video">
      <button class="hero-video-btn" id="heroVideoBtn" type="button" aria-label="Play our approach video">
        <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8 5v14l12-7L8 5z"/></svg>
      </button>
      <div class="hero-video-label">Our Approach</div>
    </div>
    <h1>Where Diplomacy Meets Experience</h1>
    <p class="hero-lead"><span class="hero-lead-bg">Delivering protocol excellence, world-class events, and seamless destination management for governments, diplomatic missions, and global organizations.</span></p>

    <form class="search-box" role="search" action="/services" method="get" aria-label="Search services">
      <div class="search-field">
        <svg class="search-ico" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z" stroke="currentColor" stroke-width="2"/><path d="M20 20l-4.2-4.2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        <input type="search" name="q" placeholder="Search services, departments, or portfolio" aria-label="Search" />
      </div>
      <button type="submit">Search</button>
    </form>
  </div>
</section>

<section class="ceo-section" aria-label="Message from the CEO">
    <div class="ceo-inner">
      <div class="ceo-image-wrap">
        <div class="ceo-image">
          <img src="{{ asset('img/salmart/ceo.jpeg') }}" alt="Chief Executive Officer portrait" loading="lazy" />
        </div>
        <div class="ceo-quote">
          <div class="ceo-quote-icon flaticon flaticon-quotation" aria-hidden="true"></div>
          <div class="ceo-quote-text">Diplomacy is experienced through people, culture, protocol, and precision.</div>
        </div>
      </div>

      <div class="ceo-content">
        <span class="ceo-kicker">MESSAGE FROM THE CEO</span>
        <h2 class="ceo-title">Jakqline Alkarim Kurji</h2>
        <div class="ceo-subtitle">Chief Executive Officer</div>
        
        <p class="ceo-text"><strong>Welcome to Salmart Diplomatic Hospitality.</strong></p>

        <p class="ceo-text">At SDH, we believe that diplomacy is not only conducted in meeting rooms. It is experienced through people, culture, protocol, and the precision with which moments are delivered.</p>

        <p class="ceo-text">Our journey began with a clear purpose: to elevate Africa’s diplomatic engagements by offering world-class services rooted in professionalism, cultural intelligence, and integrity. Today, Salmart Diplomatic stands as a trusted partner to governments, diplomatic missions, multilateral institutions, corporates, and development partners across Africa and beyond.</p>

        <p class="ceo-text">What sets us apart is our commitment to excellence with discretion. Every engagement we undertake, whether a high-level summit, a diplomatic mission, or a destination experience, is managed with respect for protocol, attention to detail, and deep understanding of the environments in which we operate.</p>
        
        <div class="ceo-points">
          <div class="ceo-point">
            <div class="ceo-point-icon">✓</div>
            <div class="ceo-point-text">Excellence with discretion, guided by protocol</div>
          </div>
          <div class="ceo-point">
            <div class="ceo-point-icon">✓</div>
            <div class="ceo-point-text">Professionalism rooted in cultural intelligence and integrity</div>
          </div>
          <div class="ceo-point">
            <div class="ceo-point-icon">✓</div>
            <div class="ceo-point-text">Seamless end-to-end solutions to international standards</div>
          </div>
        </div>

        <p class="ceo-text">Our strength lies in our people: a dedicated team of professionals who bring passion, discipline, and accountability to every assignment. Together, we work as one unit to deliver seamless, end-to-end solutions that meet international standards while honoring local context.</p>

        <p class="ceo-text">As we continue to grow, our focus remains unchanged: to serve with integrity, to build meaningful partnerships, and to position Africa as a premier destination for diplomacy, dialogue, and global engagement.</p>

        <p class="ceo-text">Thank you for visiting Salmart Diplomatic Hospitality. We look forward to working with you and to delivering experiences where diplomacy truly meets excellence.</p>
        
        <div class="ceo-signature">
          <div class="ceo-signature-photo">
            <img src="{{ asset('img/salmart/ceo.jpeg') }}" alt="Chief Executive Officer" loading="lazy" />
          </div>
          <div class="ceo-signature-sign">
            <svg viewBox="0 0 200 60" xmlns="http://www.w3.org/2000/svg">
              <path d="M 10 40 Q 20 20, 40 35 T 70 40" stroke="var(--brand-dark)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
              <path d="M 75 35 Q 85 25, 95 35 Q 105 45, 115 35" stroke="var(--brand-dark)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
              <path d="M 120 30 L 125 45 L 135 25" stroke="var(--brand-dark)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M 140 35 Q 150 25, 160 35 T 180 35" stroke="var(--brand-dark)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            </svg>
            <span class="ceo-signature-logo-wrap" aria-hidden="false">
              <img class="ceo-signature-logo" src="{{ asset('img/salmart-diplomatic-hospitality-logo.png') }}" alt="Salmart Diplomatic Hospitality logo" loading="lazy" />
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="directory-section" id="services" aria-label="Our services">
  <div class="directory-inner">
    <div class="directory-head">
      <div class="topline" aria-hidden="true"></div>
      <div class="directory-kicker">OUR SERVICES</div>
      <h2>End-to-End Diplomatic Hospitality &amp; Event Delivery</h2>

      <p>Intro-level overview of what we do. Visit the services page for full scope, formats, and detailed capability coverage.</p>

      <div class="directory-tabs" role="tablist" aria-label="Directory filters" data-directory-tabs>
        <button class="directory-tab" type="button" role="tab" aria-selected="true" data-filter="all">All</button>
        <button class="directory-tab" type="button" role="tab" aria-selected="false" data-filter="events">Events</button>
        <button class="directory-tab" type="button" role="tab" aria-selected="false" data-filter="hospitality">Hospitality &amp; Logistics</button>
        <button class="directory-tab" type="button" role="tab" aria-selected="false" data-filter="protocol">Protocol &amp; DMC</button>
        <button class="directory-tab" type="button" role="tab" aria-selected="false" data-filter="media">Media &amp; Storytelling</button>
      </div>
    </div>

    <div class="directory-grid" data-directory-grid>
      <a class="directory-card" href="/service-event-management-production" data-category="events" aria-label="Event Management Services">
        <div class="directory-media">
          <img src="{{ asset('img/conference1.jpg') }}" alt="Conference stage and audience" loading="lazy" />
        </div>
        <div class="directory-body">
          <span class="directory-badge">Events</span>
          <h3 class="directory-title">Event Management Services</h3>
          <p class="directory-desc">End-to-end planning and delivery for high-profile engagements across live, hybrid, and online formats.</p>
          <div class="directory-meta">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5l4 2-1 2-5-3V7h2z"/></svg>
            <span>International conferences • executive summits • brand activations</span>
          </div>
        </div>
      </a>

      <a class="directory-card" href="/service-destination-management-hospitality" data-category="hospitality" aria-label="Destination Management and Hospitality">
        <div class="directory-media">
          <img src="{{ asset('img/events/miss universe (6).jpg') }}" alt="Destination landscape" loading="lazy" />
        </div>
        <div class="directory-body">
          <span class="directory-badge">Hospitality</span>
          <h3 class="directory-title">Destination Management &amp; Hospitality</h3>
          <p class="directory-desc">End-to-end destination support: itineraries, hospitality coordination, stakeholder liaison, and on-ground delivery.</p>
          <div class="directory-meta">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16v12H4V6zm3 3v6h2V9H7zm4 0v6h2V9h-2zm4 0v6h2V9h-2z"/></svg>
            <span>Itineraries • guest experience • local coordination</span>
          </div>
        </div>
      </a>

      <a class="directory-card" href="/service-media-management-strategic-storytelling" data-category="media" aria-label="Media Management Services">
        <div class="directory-media">
          <img src="{{ asset('img/mediacover.jpg') }}" alt="Media and communications" loading="lazy" />
        </div>
        <div class="directory-body">
          <span class="directory-badge">Media</span>
          <h3 class="directory-title">Media Management Services</h3>
          <p class="directory-desc">Strategic communications and media operations: content planning, coverage, messaging discipline, and post-event storytelling.</p>
          <div class="directory-meta">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M4 7h10v10H4V7zm12 2 4-2v10l-4-2V9z"/></svg>
            <span>Coverage • narratives • brand positioning</span>
          </div>
        </div>
      </a>

      <a class="directory-card" href="/service-mice-delivery" data-category="events" aria-label="MICE Services">
        <div class="directory-media">
          <img src="{{ asset('img/services/mice5.jpg') }}" alt="Conference planning session" loading="lazy" />
        </div>
        <div class="directory-body">
          <span class="directory-badge">Events</span>
          <h3 class="directory-title">MICE Services</h3>
          <p class="directory-desc">Operational excellence across meetings, incentives, conferences, and exhibitions, covering registration, speakers, delegates, and on-site ops.</p>
          <div class="directory-meta">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16v4H4V4zm0 6h16v10H4V10z"/></svg>
            <span>Meetings • incentives • conferences • exhibitions</span>
          </div>
        </div>
      </a>

      <a class="directory-card" href="/service-protocol-diplomatic" data-category="protocol" aria-label="Protocol and Diplomatic Services">
        <div class="directory-media">
          <img src="{{ asset('img/events/ROW25 (6).jpg') }}" alt="Formal venue prepared for VIP reception" loading="lazy" />
        </div>
        <div class="directory-body">
          <span class="directory-badge">Protocol</span>
          <h3 class="directory-title">Protocol &amp; Diplomatic Services</h3>
          <p class="directory-desc">Protocol advisory and VIP handling for official engagements, including liaison officers, coordination, and on-ground support.</p>
          <div class="directory-meta">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l8 4v6c0 5-3 9-8 10-5-1-8-5-8-10V6l8-4z"/></svg>
            <span>State visits • receptions • dignitary management</span>
          </div>
        </div>
      </a>

      <a class="directory-card" href="/service-maritime-services" data-category="hospitality" aria-label="Maritime Services">
        <div class="directory-media">
          <img src="{{ asset('img/events/beach-cleaning (3).jpg') }}" alt="Maritime operations" loading="lazy" />
        </div>
        <div class="directory-body">
          <span class="directory-badge">Hospitality</span>
          <h3 class="directory-title">Maritime Services</h3>
          <p class="directory-desc">Port-call support and maritime-focused destination coordination for delegations, official guests, and hosted programs.</p>
          <div class="directory-meta">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
            <span>Port liaison • guest movements • on-ground readiness</span>
          </div>
        </div>
      </a>
    </div>

    <div class="directory-actions">
      <a class="btn-solid" href="/services">View all services</a>
    </div>
  </div>
</section>

  <section class="dept-section" id="departments" aria-label="Departments overview">
    <div class="dept-inner">
      <div class="dept-head">
        <div class="dept-kicker">OUR DEPARTMENTS</div>
        <h2>Our Departments at a Glance</h2>
        <p class="dept-intro">Our departments work together to deliver seamless destination management, protocol-ready hospitality, event excellence, and strategic communications. Explore four core teams below.</p>
      </div>

      <div class="dept-grid">
        <a class="dept-card" href="/department-business-development-partnerships" aria-label="Business Development and Partnerships department">
          <div class="dept-num">1</div>
          <div class="dept-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2c-2.8 2.8-5.5 4.2-9 5 1.5 7.5 5.6 13.5 9 15 3.4-1.5 7.5-7.5 9-15-3.5-.8-6.2-2.2-9-5zm0 3.3c2.2 1.8 4.7 3 7.5 3.7-1.3 5.6-4.3 10.6-7.5 12-3.2-1.4-6.2-6.4-7.5-12C7.3 8.3 9.8 7.1 12 5.3z"/>
              <path d="M12 7.5l1.4 2.9 3.2.5-2.3 2.2.6 3.2L12 15l-2.9 1.5.6-3.2-2.3-2.2 3.2-.5L12 7.5z"/>
            </svg>
          </div>
          <h3>Business Development &amp; Partnerships</h3>
        </a>

        <a class="dept-card" href="/department-tours-experiences" aria-label="Tours and Experiences department">
          <div class="dept-num">2</div>
          <div class="dept-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 21s-7-4.7-9.5-9.5C.5 7.7 3.1 5 6.2 5c1.7 0 3.2.9 3.8 2.2C10.6 5.9 12.1 5 13.8 5 16.9 5 19.5 7.7 21.5 11.5 19 16.3 12 21 12 21z"/>
              <path d="M11 10h2v2h2v2h-2v2h-2v-2H9v-2h2v-2z" fill="#ffffff"/>
            </svg>
          </div>
          <h3>Tours &amp; Experiences</h3>
        </a>

        <a class="dept-card" href="/department-destination-management-hospitality" aria-label="Destination Management and Hospitality department">
          <div class="dept-num">3</div>
          <div class="dept-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2a7 7 0 017 7v4a7 7 0 01-14 0V9a7 7 0 017-7zm-4 7h8v4a4 4 0 11-8 0V9z"/>
              <path d="M9 20h6v2H9v-2z"/>
            </svg>
          </div>
          <h3>Destination Management &amp; Hospitality</h3>
        </a>

        <a class="dept-card" href="/department-event-conference-management" aria-label="Event and Conference Management department">
          <div class="dept-num">4</div>
          <div class="dept-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 4h4a2 2 0 012 2v1h4a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V9a2 2 0 012-2h4V6a2 2 0 012-2zm0 3h4V6h-4v1z"/>
              <path d="M2 12h20v2H2v-2z"/>
            </svg>
          </div>
          <h3>Event &amp; Conference Management</h3>
        </a>
      </div>

      <div class="directory-actions">
        <a class="btn-solid" href="/departments">View all departments</a>
      </div>

      <div class="dept-slider-area" aria-label="Portfolio highlights">
        <div class="dept-carousel" role="region" aria-label="Portfolio highlights carousel">
          <div class="dept-track" data-dept-track tabindex="0">
            <a class="dept-slide" href="/portfolio-detail-alc-2024-fft" aria-label="Open portfolio detail: ALC 2025 and 10th FFT Anniversary" style="--dept-bg:url('{{ asset('img/events/alc (1).jpeg') }}')">
              <div class="dept-place-meta">
                <span class="dept-place-kicker">Event • 2024</span>
                <div class="dept-place-title">ALC 2025 &amp; 10th FFT Anniversary</div>
              </div>
              <span class="dept-place-action" aria-hidden="true">↗</span>
            </a>

            <a class="dept-slide" href="/portfolio-detail-far4vibe-2024" aria-label="Open portfolio detail: 3rd FAR4ViBE Conference 2024" style="--dept-bg:url('{{ asset('img/events/FAR4VIBE (2).jpeg') }}')">
              <div class="dept-place-meta">
                <span class="dept-place-kicker">Event • 2024</span>
                <div class="dept-place-title">3rd FAR4ViBE Conference 2024</div>
              </div>
              <span class="dept-place-action" aria-hidden="true">↗</span>
            </a>

            <a class="dept-slide" href="/portfolio-detail-ijuka-omuka-2024" aria-label="Open portfolio detail: Ijuka Omuka Festival 2024" style="--dept-bg:url('{{ asset('img/events/ijuka (1).jpeg') }}')">
              <div class="dept-place-meta">
                <span class="dept-place-kicker">Event • 2024</span>
                <div class="dept-place-title">Ijuka Omuka Festival 2024</div>
              </div>
              <span class="dept-place-action" aria-hidden="true">↗</span>
            </a>

            <a class="dept-slide" href="/portfolio-detail-kiost-delegation" aria-label="Open portfolio detail: Korean Delegation Visit to Tanzania" style="--dept-bg:url('{{ asset('img/events/korea-1.jpeg') }}')">
              <div class="dept-place-meta">
                <span class="dept-place-kicker">Event • 2024</span>
                <div class="dept-place-title">Korean Delegation Visit to Tanzania</div>
              </div>
              <span class="dept-place-action" aria-hidden="true">↗</span>
            </a>

            <a class="dept-slide" href="/portfolio-detail-marcosio-2025" aria-label="Open portfolio detail: MarCOSIO Fisheries Exchange Workshop 2025" style="--dept-bg:url('{{ asset('img/salmart/img-11.jpg') }}')">
              <div class="dept-place-meta">
                <span class="dept-place-kicker">Event • 2025</span>
                <div class="dept-place-title">MarCOSIO Workshop 2025</div>
              </div>
              <span class="dept-place-action" aria-hidden="true">↗</span>
            </a>

            <a class="dept-slide" href="/portfolio-detail-row-2025" aria-label="Open portfolio detail: Regenerative Ocean Week (ROW) 2025" style="--dept-bg:url('{{ asset('img/events/ROW25 (15).jpg') }}')">
              <div class="dept-place-meta">
                <span class="dept-place-kicker">Event • 2025</span>
                <div class="dept-place-title">Regenerative Ocean Week (ROW) 2025</div>
              </div>
              <span class="dept-place-action" aria-hidden="true">↗</span>
            </a>
          </div>
        </div>

        <div class="dept-dots" aria-label="Carousel pagination" data-dept-dots></div>
      </div>
    </div>
  </section>

 


<section class="guide-section" id="how-we-work" aria-label="How we work">
  <div class="guide-inner">
    <div class="guide-head">
      <div>
        <div class="guide-kicker">HOW WE WORK</div>
        <h2>Strategy to Delivery, End to End</h2>
        <p class="guide-intro">A consultative, detail-driven methodology designed for high-level stakeholders, complex logistics, and measurable outcomes.</p>
      </div>
    </div>

    <div class="guide-grid">
      <article class="guide-card">
        <div class="guide-media">
          <span class="guide-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z" stroke="currentColor" stroke-width="2"/>
              <path d="M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="currentColor" stroke-width="2"/>
              <path d="M12 2v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M22 12h-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M12 22v-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M2 12h3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </div>
        <h3>Discovery &amp; Strategy</h3>
        <p>We define objectives, audiences, protocol requirements, budgets, and risks to build a clear roadmap for delivery.</p>
      </article>

      <article class="guide-card">
        <div class="guide-media">
          <span class="guide-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M14 3H7a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h10a2 2 0 0 0 2-2V8l-5-5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              <path d="M14 3v5h5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              <path d="M8 13h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M8 17h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M9 11l6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </div>
        <h3>Creative Design &amp; Planning</h3>
        <p>We develop the creative ecosystem: branding, themes, content flow, stage concepts, delegate journeys, and communications.</p>
      </article>

      <article class="guide-card">
        <div class="guide-media">
          <span class="guide-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z" stroke="currentColor" stroke-width="2"/>
              <path d="M19.4 15a7.9 7.9 0 0 0 .1-2l2-1.2-2-3.4-2.3.8a8.4 8.4 0 0 0-1.7-1L15.2 6h-4l-.3 2.2a8.4 8.4 0 0 0-1.7 1L6.9 8.4l-2 3.4L7 13a7.9 7.9 0 0 0 .1 2l-2.1 1.2 2 3.4 2.3-.8a8.4 8.4 0 0 0 1.7 1l.3 2.2h4l.3-2.2a8.4 8.4 0 0 0 1.7-1l2.3.8 2-3.4-2.1-1.2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>
        <h3>Production &amp; Delivery</h3>
        <p>From venue transformation and technical production to delegate logistics and media coordination, we manage every moving part with precision.</p>
      </article>

      <article class="guide-card">
        <div class="guide-media">
          <span class="guide-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M14 2H7a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h10a2 2 0 0 0 2-2V8l-5-6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              <path d="M14 2v6h6" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              <path d="M8 14v4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M12 12v6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M16 15v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </div>
        <h3>Post-Event Value</h3>
        <p>We deliver reports, media assets, conference summaries, and performance insights to extend impact beyond the final day.</p>
      </article>
    </div>
  </div>
</section>

<!-- <section class="events-section" id="standards" aria-label="Destination management and standards">
  <div class="events-inner">
    <div class="events-head">
      <div class="topline" aria-hidden="true"></div>
      <div class="events-kicker">DMC ADVANTAGE</div>
      <h2>Destination Expertise, Responsibility, and Risk Management</h2>
      <div class="events-actions">
        <a class="btn-solid" href="/standards">Read the full standards</a>
      </div>
    </div>

    <div class="events-list">
      <article class="event-card">
        <div class="event-left">
          <div class="event-date" aria-label="Pillar one">
            <div class="d">01</div>
            <div class="m">PILLAR</div>
          </div>
          <div class="event-thumb" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=400&auto=format&fit=crop" alt="" loading="lazy" />
          </div>
        </div>

        <div class="event-main">
          <div class="event-time">
            <span class="dot" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 7a1 1 0 011 1v3.6l2.2 1.3a1 1 0 11-1 1.7l-2.7-1.6A1 1 0 0111 12V8a1 1 0 011-1z"/></svg>
            </span>
            <span>Local intelligence with international standards</span>
          </div>
          <a class="event-title" href="/standards">Destination Management Expertise (DMC Advantage)</a>
          <div class="event-loc">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a7 7 0 00-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 00-7-7zm0 9.5A2.5 2.5 0 1112 6.5a2.5 2.5 0 010 5z"/></svg>
            <span>Venue sourcing • supplier management • government &amp; protocol coordination • quality control</span>
          </div>
        </div>

        <div class="event-note">We act as your on-the-ground partner to coordinate venues, suppliers, authorities, and cultural stakeholders, ensuring smooth execution across borders.</div>

        <div class="event-action">
          <a href="/standards" aria-label="Open standards page">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 17L17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 7h7v7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </article>

      <article class="event-card">
        <div class="event-left">
          <div class="event-date" aria-label="Pillar two">
            <div class="d">02</div>
            <div class="m">PILLAR</div>
          </div>
          <div class="event-thumb" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=400&auto=format&fit=crop" alt="" loading="lazy" />
          </div>
        </div>

        <div class="event-main">
          <div class="event-time">
            <span class="dot" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 7a1 1 0 011 1v3.6l2.2 1.3a1 1 0 11-1 1.7l-2.7-1.6A1 1 0 0111 12V8a1 1 0 011-1z"/></svg>
            </span>
            <span>Responsible destination management</span>
          </div>
          <a class="event-title" href="/standards">Sustainability &amp; Responsible Events</a>
          <div class="event-loc">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a7 7 0 00-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 00-7-7zm0 9.5A2.5 2.5 0 1112 6.5a2.5 2.5 0 010 5z"/></svg>
            <span>Eco-conscious sourcing • digital-first communication • local supplier engagement • cultural preservation</span>
          </div>
        </div>

        <div class="event-note">We balance excellence with environmental and social responsibility to create value for communities, clients, and long-term outcomes.</div>

        <div class="event-action">
          <a href="/standards" aria-label="Open standards page">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 17L17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 7h7v7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </article>

      <article class="event-card">
        <div class="event-left">
          <div class="event-date" aria-label="Pillar three">
            <div class="d">03</div>
            <div class="m">PILLAR</div>
          </div>
          <div class="event-thumb" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=400&auto=format&fit=crop" alt="" loading="lazy" />
          </div>
        </div>

        <div class="event-main">
          <div class="event-time">
            <span class="dot" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 7a1 1 0 011 1v3.6l2.2 1.3a1 1 0 11-1 1.7l-2.7-1.6A1 1 0 0111 12V8a1 1 0 011-1z"/></svg>
            </span>
            <span>Security coordination, confidentiality, and compliance</span>
          </div>
          <a class="event-title" href="/standards">Safety, Security &amp; Risk Management</a>
          <div class="event-loc">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a7 7 0 00-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 00-7-7zm0 9.5A2.5 2.5 0 1112 6.5a2.5 2.5 0 010 5z"/></svg>
            <span>Emergency response planning • health &amp; safety • access control • data protection</span>
          </div>
        </div>

        <div class="event-note">For diplomatic and high-level corporate engagements, we integrate risk protocols from the outset and coordinate with authorities where required.</div>

        <div class="event-action">
          <a href="/standards" aria-label="Open standards page">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 17L17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 7h7v7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section> -->

<!-- <section class="blog-section" id="storytelling" aria-label="Media and strategic storytelling">
  <div class="blog-inner">
    <div class="blog-head">
      <div>
        <div class="blog-kicker">STORYTELLING</div>
        <h2>Media Management Services</h2>
      </div>
      <a class="btn-solid" href="/storytelling">Explore storytelling</a>
    </div>

    <div class="blog-grid">
      <article class="blog-card blog-feature">
        <div class="media">
          <img src="https://images.unsplash.com/photo-1526401485004-2aa7f3c59c75?q=80&w=1400&auto=format&fit=crop" alt="" loading="lazy" />
        </div>
        <div class="content">
          <div class="post-meta">
            <span class="item">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 12a4.5 4.5 0 10-4.5-4.5A4.5 4.5 0 0012 12zm0 2c-4.7 0-8.5 2.4-8.5 5.3V21h17v-1.7c0-2.9-3.8-5.3-8.5-5.3z"/></svg>
              <span>Salmart Diplomatic Media Desk</span>
            </span>
            <span class="item">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M21 6a3 3 0 00-3-3H6A3 3 0 003 6v8a3 3 0 003 3h9l4.5 3v-3H18a3 3 0 003-3V6z"/></svg>
              <span>Impactful storytelling</span>
            </span>
          </div>
          <a class="post-title" href="/storytelling">Purpose-Driven Media &amp; Reputation</a>
          <div class="post-excerpt">We craft narratives that improve visibility, credibility, and outcomes before, during, and long after the event.</div>
          <a class="post-link" href="/storytelling">Explore media services <span class="arr">→</span></a>
        </div>
      </article>

      <div style="display:flex;flex-direction:column;gap:26px">
        <article class="blog-card blog-compact">
          <div class="media">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=900&auto=format&fit=crop" alt="" loading="lazy" />
          </div>
          <div class="content">
            <div class="post-meta">
              <span class="item">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 12a4.5 4.5 0 10-4.5-4.5A4.5 4.5 0 0012 12zm0 2c-4.7 0-8.5 2.4-8.5 5.3V21h17v-1.7c0-2.9-3.8-5.3-8.5-5.3z"/></svg>
                <span>Conference Support</span>
              </span>
              <span class="item">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M21 6a3 3 0 00-3-3H6A3 3 0 003 6v8a3 3 0 003 3h9l4.5 3v-3H18a3 3 0 003-3V6z"/></svg>
                <span>Moderation &amp; rapporteurs</span>
              </span>
            </div>
            <a class="post-title" href="/services" style="font-size:20px">Real-Time Conference Communications</a>
            <div class="post-excerpt">Live social updates, behind-the-scenes content, accurate summaries and key outcomes, plus post-event documentation that extends your engagement’s value.</div>
            <a class="post-link" href="/services">Explore support services <span class="arr">→</span></a>
          </div>
        </article>

        <article class="blog-card blog-compact">
          <div class="media">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=900&auto=format&fit=crop" alt="" loading="lazy" />
          </div>
          <div class="content">
            <div class="post-meta">
              <span class="item">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 12a4.5 4.5 0 10-4.5-4.5A4.5 4.5 0 0012 12zm0 2c-4.7 0-8.5 2.4-8.5 5.3V21h17v-1.7c0-2.9-3.8-5.3-8.5-5.3z"/></svg>
                <span>Strategic Communications</span>
              </span>
              <span class="item">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M21 6a3 3 0 00-3-3H6A3 3 0 003 6v8a3 3 0 003 3h9l4.5 3v-3H18a3 3 0 003-3V6z"/></svg>
                <span>Visibility &amp; influence</span>
              </span>
            </div>
            <a class="post-title" href="/storytelling" style="font-size:20px">Amplify Impact Beyond the Event</a>
            <div class="post-excerpt">Organizations across the continent trust Salmart Diplomatic to deliver their stories to the right audience, at the right time, with credibility and impact.</div>
            <a class="post-link" href="/contact">Contact us <span class="arr">→</span></a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section> -->

<section class="logo-strip" aria-label="Partner logos">
  <div class="logo-strip-inner">
    <div class="logo-marquee" role="region" aria-label="Partner logo slider">
      <div class="logo-marquee-track">
        <div class="logo-row">
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="Salmart Diplomatic Hospitality" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="Salmart Diplomatic Hospitality" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="Salmart Diplomatic Hospitality" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="Salmart Diplomatic Hospitality" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="Salmart Diplomatic Hospitality" loading="lazy" decoding="async" />
          </div>
        </div>

        <div class="logo-row" aria-hidden="true">
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="" aria-hidden="true" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="" aria-hidden="true" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="" aria-hidden="true" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="" aria-hidden="true" loading="lazy" decoding="async" />
          </div>
          <div class="logo-item">
            <img src="{{ asset('img/salmart-logo.png') }}" alt="" aria-hidden="true" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  (function(){
    const tabsWrap = document.querySelector('[data-directory-tabs]');
    const grid = document.querySelector('[data-directory-grid]');
    if(!tabsWrap || !grid) return;

    const tabs = Array.from(tabsWrap.querySelectorAll('[data-filter]'));
    const cards = () => Array.from(grid.querySelectorAll('[data-category]'));

    const setActive = (activeValue) => {
      tabs.forEach((t) => t.setAttribute('aria-selected', t.getAttribute('data-filter') === activeValue ? 'true' : 'false'));

      const allCards = cards();
      allCards.forEach((card) => {
        const cat = (card.getAttribute('data-category') || '').trim();
        const show = activeValue === 'all' || cat === activeValue;
        card.style.display = show ? '' : 'none';
      });
    };

    tabsWrap.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-filter]');
      if(!btn) return;
      setActive(btn.getAttribute('data-filter'));
    });

    // keyboard: left/right to move selection
    tabsWrap.addEventListener('keydown', (e) => {
      if(e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
      const focused = document.activeElement;
      const idx = tabs.indexOf(focused);
      if(idx === -1) return;
      e.preventDefault();
      const next = e.key === 'ArrowRight' ? (idx + 1) % tabs.length : (idx - 1 + tabs.length) % tabs.length;
      tabs[next].focus();
      setActive(tabs[next].getAttribute('data-filter'));
    });

    setActive('all');
  })();

  (function(){
    const section = document.querySelector('.dept-section');
    if(!section) return;

    const track = section.querySelector('[data-dept-track]');
    const dotsWrap = section.querySelector('[data-dept-dots]');
    const prevBtn = section.querySelector('[data-dept-arrow="prev"]');
    const nextBtn = section.querySelector('[data-dept-arrow="next"]');
    if(!track || !dotsWrap) return;

    const slides = Array.from(track.querySelectorAll('.dept-slide'));
    if(!slides.length) return;

    const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const clamp = (n, min, max) => Math.max(min, Math.min(max, n));
    const getStep = () => {
      const first = slides[0];
      const style = window.getComputedStyle(track);
      const gap = parseFloat(style.columnGap || style.gap || '0') || 0;
      return first.getBoundingClientRect().width + gap;
    };

    const visibleCount = () => {
      const step = getStep();
      return clamp(Math.round(track.getBoundingClientRect().width / step) || 1, 1, slides.length);
    };

    const pageCount = () => {
      const visible = visibleCount();
      return Math.max(1, Math.ceil(slides.length / visible));
    };

    const setButtons = () => {
      const maxScroll = track.scrollWidth - track.clientWidth - 2;
      if(prevBtn) prevBtn.disabled = track.scrollLeft <= 2;
      if(nextBtn) nextBtn.disabled = track.scrollLeft >= maxScroll;
    };

    const scrollToPage = (i) => {
      const step = getStep();
      const visible = visibleCount();
      const maxIndex = pageCount() - 1;
      const idx = clamp(i, 0, maxIndex);
      track.scrollTo({ left: idx * step * visible, behavior: 'smooth' });
    };

    const activeIndex = () => {
      const step = getStep();
      const visible = visibleCount();
      const denom = Math.max(1, step * visible);
      return clamp(Math.round(track.scrollLeft / denom), 0, pageCount() - 1);
    };

    const renderDots = () => {
      const count = pageCount();
      dotsWrap.innerHTML = '';
      for(let i=0;i<count;i++){
        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'dept-dot';
        b.setAttribute('aria-label', `Go to page ${i+1}`);
        b.addEventListener('click', () => {
          stopAutoplay();
          scrollToPage(i);
          scheduleResume();
        });
        dotsWrap.appendChild(b);
      }
      updateDots();
    };

    const updateDots = () => {
      const idx = activeIndex();
      const dots = Array.from(dotsWrap.querySelectorAll('.dept-dot'));
      dots.forEach((d, i) => d.setAttribute('aria-current', i === idx ? 'true' : 'false'));
      setButtons();
    };

    let autoplayId = null;
    let resumeTimer = null;
    let paused = false;

    const stopAutoplay = () => {
      if(autoplayId) window.clearInterval(autoplayId);
      autoplayId = null;
    };

    const startAutoplay = () => {
      if(prefersReduced || paused) return;
      stopAutoplay();
      autoplayId = window.setInterval(() => {
        const next = (activeIndex() + 1) % pageCount();
        scrollToPage(next);
      }, 4200);
    };

    const scheduleResume = () => {
      if(prefersReduced) return;
      if(resumeTimer) window.clearTimeout(resumeTimer);
      resumeTimer = window.setTimeout(() => startAutoplay(), 6500);
    };

    const pause = () => {
      paused = true;
      stopAutoplay();
    };

    const resume = () => {
      paused = false;
      startAutoplay();
    };

    if(prevBtn) prevBtn.addEventListener('click', () => {
      stopAutoplay();
      scrollToPage(activeIndex() - 1);
      scheduleResume();
    });
    if(nextBtn) nextBtn.addEventListener('click', () => {
      stopAutoplay();
      scrollToPage(activeIndex() + 1);
      scheduleResume();
    });

    track.addEventListener('mouseenter', pause);
    track.addEventListener('mouseleave', resume);
    track.addEventListener('focusin', pause);
    track.addEventListener('focusout', resume);
    track.addEventListener('pointerdown', () => { stopAutoplay(); scheduleResume(); }, {passive:true});
    track.addEventListener('wheel', () => { stopAutoplay(); scheduleResume(); }, {passive:true});

    track.addEventListener('scroll', () => {
      window.requestAnimationFrame(updateDots);
      scheduleResume();
    }, {passive:true});

    window.addEventListener('resize', () => {
      renderDots();
      scheduleResume();
    }, {passive:true});

    document.addEventListener('visibilitychange', () => {
      if(document.hidden) stopAutoplay();
      else startAutoplay();
    });

    renderDots();
    setButtons();
    startAutoplay();
  })();
</script>



<!-- ===== VIDEO MODAL ===== -->
<div class="video-modal-overlay" id="videoModal" role="dialog" aria-modal="true" aria-label="Video player" hidden>
  <div class="video-modal-box">
    <button class="video-modal-close" id="videoModalClose" aria-label="Close video">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
    <!-- YouTube placeholder — replace VIDEO_ID with the real YouTube video ID -->
    <iframe
      id="videoModalIframe"
      src=""
      data-src="https://www.youtube.com/embed/VIDEO_ID?autoplay=1&rel=0&modestbranding=1"
      title="Salmart Diplomatic Hospitality — Our Approach"
      allow="autoplay; encrypted-media; picture-in-picture"
      allowfullscreen
    ></iframe>
  </div>
</div>

<script>
  (function(){
    const overlay  = document.getElementById('videoModal');
    const iframe   = document.getElementById('videoModalIframe');
    const openBtn  = document.getElementById('heroVideoBtn');
    const closeBtn = document.getElementById('videoModalClose');
    const dataSrc  = iframe.dataset.src;

    function openModal(){
      iframe.src = dataSrc;
      overlay.hidden = false;
      requestAnimationFrame(() => overlay.classList.add('is-open'));
      document.body.style.overflow = 'hidden';
      closeBtn.focus();
    }

    function closeModal(){
      overlay.classList.remove('is-open');
      iframe.src = '';          // stops the video
      document.body.style.overflow = '';
      overlay.addEventListener('transitionend', () => { overlay.hidden = true; }, {once:true});
      openBtn.focus();
    }

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', (e) => { if(e.target === overlay) closeModal(); });
    document.addEventListener('keydown', (e) => { if(e.key === 'Escape' && !overlay.hidden) closeModal(); });
  })();
</script>
@endpush
