@extends('layouts.app')

@section('title', 'Services • Salmart Diplomatic Hospitality')
@section('meta_description', 'Explore Salmart\'s full range of services: event management, MICE delivery, protocol & diplomatic services, maritime services, destination management, tours & experiences, and strategic storytelling.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/services.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/MarCOSIO (7).jpg') }}');--hero-bg-position:center 20%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Our Services</span>
    </nav>

    <h1 class="inner-hero-title">Our Services</h1>
  </div>
</section>

<section class="services-wrap" aria-label="Explore more with us">
    <div class="services-explore-head">
      <div class="services-explore-kicker">
        <div class="topline" aria-hidden="true"></div>
        <div class="label">EXPLORE MORE WITH US</div>
        <h2 class="services-explore-title">Protocol-Ready Services</h2>
        <p class="services-explore-intro">From destination management and VIP protocol to event production and strategic storytelling, we design and deliver high-level engagements with precision, discretion, and cultural intelligence.</p>
      </div>

     
    </div>

    <div class="services-explore-grid" aria-label="Service highlights">
      <a class="service-tile" href="/service-event-management-production" aria-label="Event Management Services">
        <img src="{{ asset('img/conference1.jpg') }}" alt="Event Management Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-calendar-event" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Event Management Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-protocol-diplomatic" aria-label="Protocol &amp; Diplomatic Services">
        <img src="{{ asset('img/events/ROW25 (6).jpg') }}" alt="Protocol &amp; Diplomatic Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-shield-check" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Protocol &amp; Diplomatic Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-media-management-strategic-storytelling" aria-label="Media Management Services">
        <img src="{{ asset('img/mediacover.jpg') }}" alt="Media Management Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-megaphone" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Media Management Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-mice-delivery" aria-label="MICE Services">
        <img src="{{ asset('img/services/mice5.jpg') }}" alt="MICE Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-briefcase" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>MICE Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-cruise-line-services" aria-label="Cruise Line Services">
        <img src="{{ asset('img/yatch.jpg') }}" alt="Cruise Line Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-water" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Cruise Line Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-sports-tourism-services" aria-label="Sports Tourism Services">
        <img src="{{ asset('img/mkapastadium.jpg') }}" alt="Sports Tourism Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-trophy" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Sports Tourism Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-tours-experiences" aria-label="Tours &amp; Experiences Services">
        <img src="{{ asset('img/services/TOURS5.webp') }}" alt="Tours &amp; Experiences" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-map" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Tours &amp; Experiences</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-maritime-services" aria-label="Maritime Services">
        <img src="{{ asset('img/ports1.jpg') }}" alt="Maritime Services" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-life-preserver" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Maritime Services</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>

      <a class="service-tile" href="/service-destination-management-hospitality" aria-label="Destination Management &amp; Hospitality">
        <img src="{{ asset('img/events/miss universe (6).jpg') }}" alt="Destination Management &amp; Hospitality" loading="lazy" decoding="async" />
        <div class="badge" aria-hidden="true">
          <i class="bi bi-compass" aria-hidden="true"></i>
        </div>
        <div class="tile-panel">
          <h3>Destination Management &amp; Hospitality</h3>
          <div class="tile-cta"><span>View details</span><span aria-hidden="true">→</span></div>
        </div>
      </a>
    </div>
  </section>

  <section class="stats-wrap" aria-label="Service snapshot">
    <div class="stats-grid">
      <div class="stat">
        <div class="icon" aria-hidden="true">
          <i class="bi bi-grid-fill" aria-hidden="true"></i>
        </div>
        <div class="value" data-count="9" data-suffix="">0</div>
        <div class="label">Service Lines</div>
      </div>
      <div class="stat">
        <div class="icon" aria-hidden="true">
          <i class="bi bi-diagram-3-fill" aria-hidden="true"></i>
        </div>
        <div class="value" data-count="7" data-suffix="">0</div>
        <div class="label">Our Departments</div>
      </div>
      <div class="stat">
        <div class="icon" aria-hidden="true">
          <i class="bi bi-award-fill" aria-hidden="true"></i>
        </div>
        <div class="value" data-count="5" data-suffix="">0</div>
        <div class="label">Capability Areas</div>
      </div>
      <div class="stat">
        <div class="icon" aria-hidden="true">
          <i class="bi bi-layers-fill" aria-hidden="true"></i>
        </div>
        <div class="value" data-count="3" data-suffix="">0</div>
        <div class="label">Delivery Phases</div>
      </div>
    </div>
  </section>

  <section class="testimonials-wrap" aria-label="Testimonials">
    <div class="testimonials-head">
      <div class="testimonials-kicker">
        <div class="topline" aria-hidden="true"></div>
        <div class="label">OUR TESTIMONIALS</div>
      </div>
      <h2>What they’re talking about us?</h2>
    </div>

    <div class="testimonials-carousel" aria-label="Customer reviews carousel">
      <button class="t-carousel-btn" type="button" aria-label="Previous review" data-carousel-prev>‹</button>

      <div class="testimonials-cards" aria-label="Customer reviews" data-carousel-track>
      <article class="t-card" aria-label="Review from Sarah Albert">
        <div class="t-card-header" aria-hidden="true"></div>
        <div class="t-card-body">
          <div class="t-user">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Albert" loading="lazy" decoding="async" />
            <div>
              <div class="t-user-label">CUSTOMER</div>
              <h3 class="t-user-name">Sarah Albert</h3>
              <div class="t-stars" aria-label="5 star rating">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
              </div>
            </div>
          </div>
          <p class="t-card-text">This is due to their excellent service, competitive pricing and customer support. It’s thoroughly refreshing to get such a personal touch.</p>
        </div>
      </article>

      <article class="t-card" aria-label="Review from Mike Ronobs">
        <div class="t-card-header" aria-hidden="true"></div>
        <div class="t-card-body">
          <div class="t-user">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Mike Ronobs" loading="lazy" decoding="async" />
            <div>
              <div class="t-user-label">CUSTOMER</div>
              <h3 class="t-user-name">Mike Ronobs</h3>
              <div class="t-stars" aria-label="5 star rating">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
              </div>
            </div>
          </div>
          <p class="t-card-text">The team handled everything with precision and calm. Clear communication, thoughtful planning, and an executive-level finish across the entire program.</p>
        </div>
      </article>

      <article class="t-card" aria-label="Review from Aleesha Brown">
        <div class="t-card-header" aria-hidden="true"></div>
        <div class="t-card-body">
          <div class="t-user">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Aleesha Brown" loading="lazy" decoding="async" />
            <div>
              <div class="t-user-label">CUSTOMER</div>
              <h3 class="t-user-name">Aleesha Brown</h3>
              <div class="t-stars" aria-label="5 star rating">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
              </div>
            </div>
          </div>
          <p class="t-card-text">From arrival to closeout, everything felt seamless. The quality of stakeholder care and delivery standards stood out immediately.</p>
        </div>
      </article>

      <article class="t-card" aria-label="Review from Daniel Okello">
        <div class="t-card-header" aria-hidden="true"></div>
        <div class="t-card-body">
          <div class="t-user">
            <img src="https://randomuser.me/api/portraits/men/71.jpg" alt="Daniel Okello" loading="lazy" decoding="async" />
            <div>
              <div class="t-user-label">CUSTOMER</div>
              <h3 class="t-user-name">Daniel Okello</h3>
              <div class="t-stars" aria-label="5 star rating">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
              </div>
            </div>
          </div>
          <p class="t-card-text">Impressive attention to protocol details. Their team anticipated needs before they became issues and delivered with real executive polish.</p>
        </div>
      </article>

      <article class="t-card" aria-label="Review from Neema Hassan">
        <div class="t-card-header" aria-hidden="true"></div>
        <div class="t-card-body">
          <div class="t-user">
            <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Neema Hassan" loading="lazy" decoding="async" />
            <div>
              <div class="t-user-label">CUSTOMER</div>
              <h3 class="t-user-name">Neema Hassan</h3>
              <div class="t-stars" aria-label="5 star rating">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
              </div>
            </div>
          </div>
          <p class="t-card-text">We felt fully supported throughout. The guest experience was smooth, dignified, and thoughtfully designed from arrival to farewell.</p>
        </div>
      </article>

      <article class="t-card" aria-label="Review from Grace Mushi">
        <div class="t-card-header" aria-hidden="true"></div>
        <div class="t-card-body">
          <div class="t-user">
            <img src="https://randomuser.me/api/portraits/women/9.jpg" alt="Grace Mushi" loading="lazy" decoding="async" />
            <div>
              <div class="t-user-label">CUSTOMER</div>
              <h3 class="t-user-name">Grace Mushi</h3>
              <div class="t-stars" aria-label="5 star rating">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.8 6.1 20l1.2-6.5L2.5 8.9 9.1 8 12 2Z"/></svg>
              </div>
            </div>
          </div>
          <p class="t-card-text">Strong coordination, excellent vendor management, and a calm on-ground presence. Everything stayed on schedule and on standard.</p>
        </div>
      </article>
      </div>

      <button class="t-carousel-btn" type="button" aria-label="Next review" data-carousel-next>›</button>
      <div class="t-carousel-dots" aria-label="Carousel pagination" data-carousel-dots></div>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
