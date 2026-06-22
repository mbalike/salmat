@extends('layouts.app')

@section('title', 'City Visitor Guide • Salmart Diplomatic Hospitality')
@section('meta_description', 'Discover Tanzania through Salmart\'s City Visitor Guide — curated experiences, cultural insights, and hospitality services for diplomats, delegates, and international visitors.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/city-visitors-guide.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <a href="/services">Our Services</a>
      <span class="crumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">City Visitor Guide</span>
    </nav>

    <h1 class="inner-hero-title">City Visitor Guide</h1>
  </div>
</section>

<section class="page-wrap" id="guide" aria-label="Guide content">
  <div class="page-grid">

    <article class="feature-card article" aria-label="Guide article">
      <div class="feature-media">
        <img src="https://images.unsplash.com/photo-1533106418989-88406c7cc8ca?q=80&w=1600&auto=format&fit=crop" alt="City skyline" loading="lazy" />
      </div>

      <div class="feature-body">
        <p style="color:#6b7280;line-height:1.8;margin:0">This page is intentionally written as placeholder content. When you’re ready, tell me the city + key points and I’ll replace everything with real copy.</p>

        <h2>Overview</h2>
        <p>Use this section to summarize the destination context, event venues, and what visitors should expect (culture, climate, transportation, and on-ground protocol considerations).</p>

        <h2>Arrival &amp; Airport Support</h2>
        <p>Outline airport protocol (meet-and-greet, VIP fast-track, luggage handling, vehicle staging) and the preferred movement plan for delegates and principals.</p>

        <h3>Recommended flow</h3>
        <ul>
          <li>Arrival hall meeting point + credential checks</li>
          <li>Transport assignment + route planning</li>
          <li>Hotel check-in support and rooming list coordination</li>
        </ul>

        <h2>Getting Around</h2>
        <p>Describe ground transport options and any security considerations. If the engagement includes official meetings, keep movement times conservative and build in buffer for convoy coordination.</p>

        <div class="callout" aria-label="Operational note">
          <strong>Operational note</strong>
          <span>For high-level delegations, Salmart Diplomatic can coordinate protocol, security liaison, and schedule protection to keep movements on time and discreet.</span>
        </div>

        <h2>Recommended Experiences</h2>
        <p>Use this space for curated activities, cultural experiences, and hospitality recommendations that align with the tone of the engagement.</p>

        <div class="benefits" aria-label="Guide highlights">
          <div class="benefit-card">
            <h3>Culture &amp; Etiquette</h3>
            <p>Key greetings, gift protocol, and cultural notes for executive and diplomatic audiences.</p>
          </div>
          <div class="benefit-card">
            <h3>Dining &amp; Hosting</h3>
            <p>Suggested restaurants and hosting formats, including VIP private dining and secure venues.</p>
          </div>
          <div class="benefit-card">
            <h3>Venue Notes</h3>
            <p>Capacity considerations, branding opportunities, and production constraints for conference setups.</p>
          </div>
          <div class="benefit-card">
            <h3>On-Ground Support</h3>
            <p>Liaison officers, multilingual support, drivers, and 24/7 concierge coverage options.</p>
          </div>
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
          <div><strong style="color:var(--ink)">Timezone</strong><br/>Add local time + offsets</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Primary venues</strong><br/>Add venue list + addresses</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Recommended hotels</strong><br/>Add 3 to 5 hotel options</div>
        </div>

        <div class="info-item">
          <div class="info-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.5 15.5 0 006.6 6.6l2.2-2.2a1 1 0 011-.24c1.1.36 2.3.56 3.5.56a1 1 0 011 1V20a1 1 0 01-1 1C10.4 21 3 13.6 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.4.56 3.5a1 1 0 01-.25 1L6.6 10.8z"/></svg>
          </div>
          <div><strong style="color:var(--ink)">Support line</strong><br/>Consultation by appointment</div>
        </div>
      </div>

      <a class="btn-solid" href="/contact" style="width:100%">Request support</a>
      <div class="callout" style="margin-top:14px">
        <strong>Make this page real</strong>
        <span>Send the city name, event dates, hotel preferences, and any protocol notes. I'll fill this out in your tone.</span>
      </div>

      <nav class="side-nav" aria-label="Services navigation">
        <div class="side-nav-title">Explore Services</div>
        <ul>
          <li><a href="/service-event-management-production">Event Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-mice-delivery">MICE Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-cruise-line-services">Cruise Line Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-maritime-services">Maritime Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-sports-tourism-services">Sports Tourism Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-tours-experiences">Tours &amp; Experiences Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-destination-management-hospitality">Destination Management &amp; Hospitality <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-media-management-strategic-storytelling">Media Management Services <span class="arr" aria-hidden="true">↗</span></a></li>
          <li><a href="/service-protocol-diplomatic">Protocol &amp; Diplomatic Services <span class="arr" aria-hidden="true">↗</span></a></li>
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
      <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=800&auto=format&fit=crop" alt="Team coordination" loading="lazy" />
      <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=800&auto=format&fit=crop" alt="Conference production" loading="lazy" />
      <img src="https://images.unsplash.com/photo-1526401485004-2aa7f3c59c75?q=80&w=800&auto=format&fit=crop" alt="Event coverage" loading="lazy" />
      <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?q=80&w=800&auto=format&fit=crop" alt="VIP venue setup" loading="lazy" />
    </div>
  </section>
</section>
@endsection

@push('scripts')
<script>
  (function(){
    const btn = document.querySelector('.back-to-top');
    const toggle = () => {
      if(!btn) return;
      const show = window.scrollY > 450;
      btn.classList.toggle('show', show);
    };
    window.addEventListener('scroll', toggle, {passive:true});
    toggle();
  })();

  (function(){
    const title = document.querySelector('.inner-hero-title');
    const lead = document.querySelector('.inner-hero-lead');
    if(!title || !lead) return;

    const sync = () => {
      // Reset first so we measure the natural width accurately
      lead.style.width = 'auto';
      const w = Math.ceil(title.getBoundingClientRect().width);
      const extra = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--hero-lead-extra')) || 0;
      // Guard: never exceed the container width
      const containerW = title.parentElement?.getBoundingClientRect().width || w;
      lead.style.width = Math.min(w + extra, containerW) + 'px';
    };

    let raf = null;
    const schedule = () => {
      if(raf) cancelAnimationFrame(raf);
      raf = requestAnimationFrame(sync);
    };

    // Initial
    schedule();

    // Re-sync after fonts load (important for precise width)
    if(document.fonts && document.fonts.ready){
      document.fonts.ready.then(schedule).catch(() => {});
    }

    // Re-sync on resize
    window.addEventListener('resize', schedule, {passive:true});
  })();
</script>
@endpush
