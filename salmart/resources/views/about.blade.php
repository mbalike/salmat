@extends('layouts.app')

@section('title', 'About Us • Salmart Diplomatic Hospitality')
@section('meta_description', 'Learn about Salmart Diplomatic Hospitality — a Tanzania-based firm specializing in diplomatic protocol, event management, destination management, and hospitality for governments and global organizations.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/salmart/img-1.jpg') }}');">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">About Us</span>
    </nav>

    <h1 class="inner-hero-title">About Us</h1>
  </div>
</section>

<main class="page" id="main">
    <section class="about-showcase" aria-label="Salmart overview">
      <div class="showcase-inner">
        <div class="showcase-visual">
          <div class="showcase-frame" aria-hidden="true"></div>
          <img src="{{ asset('img/salmart/img-2.jpg') }}" alt="Professional delegates in discussion during a high-level engagement" loading="lazy" decoding="async">
          <div class="showcase-badge" aria-label="Regional reach">
            <strong>Africa</strong>
            <span>&amp; Beyond</span>
          </div>
        </div>

        <div class="showcase-copy">
          <span class="eyebrow">Salmart DIPLOMATIC HOSPITALITY</span>
          <h2>Where Diplomacy Meets Experience</h2>
          <div class="subhead">Trusted Diplomatic, Event &amp; Destination Partner for Africa and Beyond</div>
          <p>Salmart Diplomatic Hospitality is a premier African diplomatic services, destination management, and strategic engagement firm delivering high-level protocol, global events, and bespoke hospitality experiences.</p>
          <p>We operate at the intersection of diplomacy, strategy, logistics, and storytelling, supporting governments, diplomatic missions, multilateral institutions, corporates, and development partners with precision, discretion, and excellence.</p>
          <p>From high-level summits and state engagements to global conferences and diplomatic missions, Salmart Diplomatic delivers end-to-end solutions aligned with international standards and cultural intelligence.</p>
        </div>

        <div class="showcase-vm" aria-label="Vision and mission">
          <article class="showcase-mini">
            <h3>
              <span class="mini-ico mini-ico--vision" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.2 12s3.5-7 9.8-7 9.8 7 9.8 7-3.5 7-9.8 7S2.2 12 2.2 12Z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"/>
                  <path d="M12 15.2a3.2 3.2 0 1 0 0-6.4 3.2 3.2 0 0 0 0 6.4Z" stroke="currentColor" stroke-width="2.2"/>
                </svg>
              </span>
              Vision
            </h3>
            <p>To be Africa’s leading diplomatic event and destination partner, trusted for precision, discretion, and excellence.</p>
          </article>
          <article class="showcase-mini">
            <h3>
              <span class="mini-ico mini-ico--mission" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z" stroke="currentColor" stroke-width="2.2"/>
                  <path d="M12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" stroke="currentColor" stroke-width="2.2"/>
                  <path d="M12 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" fill="currentColor"/>
                </svg>
              </span>
              Mission
            </h3>
            <p>To deliver world-class diplomatic experiences by combining local expertise, international standards, and customized protocol-driven solutions.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section" aria-label="About us">
      <div class="section-head">
        <span class="kicker">ABOUT</span>
        <h2>Who We Are</h2>
        <p class="section-lead">Salmart Diplomatic Hospitality was established to professionalize and elevate Africa’s diplomatic engagements, global forums, and destination experiences. We combine deep regional knowledge with international best practices to deliver seamless, protocol-driven services across borders.</p>
      </div>

      <div class="about-grid">
        <article class="panel about-panel" aria-label="Our philosophy">
          <h3>Our Philosophy</h3>
          <p>We are guided by a disciplined culture of service that protects reputation, enhances outcomes, and respects every protocol requirement.</p>
          <ul class="ticklist">
            <li>
              <span class="tick" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M3 7h18v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                  <path d="M3 12h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                </svg>
              </span>
              <span>Professionalism</span>
            </li>
            <li>
              <span class="tick" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" stroke="currentColor" stroke-width="2"/>
                  <path d="M3 12h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                  <path d="M12 3c3 3.5 3 14.5 0 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                  <path d="M12 3c-3 3.5-3 14.5 0 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                </svg>
              </span>
              <span>Cultural Intelligence</span>
            </li>
            <li>
              <span class="tick" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 11V8a4 4 0 0 1 8 0v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M6 11h12a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                  <path d="M12 15v3" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                </svg>
              </span>
              <span>Discretion</span>
            </li>
            <li>
              <span class="tick" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 3l2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8L12 3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                </svg>
              </span>
              <span>Excellence</span>
            </li>
            <li>
              <span class="tick" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 3l7 4v6c0 5-3 8-7 9-4-1-7-4-7-9V7l7-4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                  <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              <span>Integrity</span>
            </li>
          </ul>
        </article>

        <article class="panel about-panel" aria-label="Our reach">
          <h3>Our Reach</h3>
          <div class="about-reach-media" aria-hidden="true">
            <img src="{{ asset('img/reach.jpg') }}" alt="" loading="lazy" decoding="async">
          </div>
          <p>We operate across Africa with growing global partnerships, supporting international delegations, multilateral platforms, and cross-border initiatives.</p>
        </article>
      </div>
    </section>

   

    <section class="section" aria-label="Our approach">
      <div class="section-head">
        <span class="kicker">APPROACH</span>
        <h2>Protocol-first. Client-centric. Flawlessly executed.</h2>
        <p class="section-lead">We apply a protocol-first, client-centric approach grounded in strategic planning, cultural awareness, and flawless execution. From concept design to on-ground delivery and post-event reporting, we manage every detail with diplomatic discipline and operational clarity.</p>
      </div>
      <div class="steps" aria-label="Approach steps">
        <div class="step">
          <div class="num" aria-hidden="true">1</div>
          <strong>Strategic Planning</strong>
          <p>We clarify objectives, stakeholders, sensitivities, and timelines, then build an execution-ready plan.</p>
        </div>
        <div class="step">
          <div class="num" aria-hidden="true">2</div>
          <strong>On-ground Delivery</strong>
          <p>Logistics, guest handling, protocol compliance, and production delivered with calm precision.</p>
        </div>
        <div class="step">
          <div class="num" aria-hidden="true">3</div>
          <strong>Reporting &amp; Continuity</strong>
          <p>We document outcomes, capture learnings, and support follow-through for sustainable engagement.</p>
        </div>
      </div>
    </section>

    <section class="section impact-feature" aria-label="Our impact">
      <div class="impact-shell" aria-label="Impact highlight">
        <div class="section-head impact-head">
          <span class="kicker">IMPACT</span>
          <h2>Our Impact</h2>
          <p class="section-lead">We measure success through stronger relationships, protected reputations, and outcomes that last beyond the event.</p>
        </div>

        <div class="impact-left">
          <ul class="impact-list" aria-label="Impact list">
            <li>
              <span class="impact-ico" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 12.5l2 2c.6.6 1.6.6 2.2 0l4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3.5 12l3-3a2.2 2.2 0 0 1 3.1 0l1.1 1.1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M20.5 12l-3-3a2.2 2.2 0 0 0-3.1 0l-1.1 1.1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              <span class="impact-text">Strengthened diplomatic and institutional engagements</span>
            </li>
            <li>
              <span class="impact-ico" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 21h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M9 21V11h6v10" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                  <path d="M6 11h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M8 11l4-6 4 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              <span class="impact-text">Delivered high-level national and international forums</span>
            </li>
            <li>
              <span class="impact-ico" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 12a8 8 0 0 1 16 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M4 12v5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M20 12v5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M7 17h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </span>
              <span class="impact-text">Elevated visibility for strategic initiatives and leaders</span>
            </li>
            <li>
              <span class="impact-ico" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z" stroke="currentColor" stroke-width="2"/>
                  <path d="M2 12h20" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                  <path d="M12 2c3 3.6 3 16.4 0 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                  <path d="M12 2c-3 3.6-3 16.4 0 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".9"/>
                </svg>
              </span>
              <span class="impact-text">Enabled seamless cross-border missions and delegations</span>
            </li>
            <li>
              <span class="impact-ico" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 11a4 4 0 1 0-8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M5 21v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </span>
              <span class="impact-text">Built sustainable partnerships across public and private sectors</span>
            </li>
          </ul>
        </div>

        <div class="impact-visuals" aria-label="Impact visuals">
          <figure class="impact-photo impact-photo--top" aria-label="Diplomatic partnership">
            <img src="{{ asset('img/salmart/img-5.jpg') }}" alt="Handshake symbolizing a diplomatic partnership" loading="lazy" decoding="async">
          </figure>
          <figure class="impact-photo impact-photo--bottom" aria-label="High-level forum">
            <img src="{{ asset('img/salmart/img-6.jpg') }}" alt="Audience at a high-level international forum" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>
    </section>
@endsection

@push('scripts')
<script>
  // Mobile drawer behavior is handled globally in assets/js/site.js
</script>
@endpush
