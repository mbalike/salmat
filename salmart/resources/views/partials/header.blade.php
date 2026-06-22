<header>
  <a class="logo" href="/" aria-label="Salmart Diplomatic Hospitality">
    <picture>
      <source media="(max-width: 980px)" srcset="{{ asset('img/salmart-diplomatic-hospitality-logo.png') }}" />
      <img src="{{ asset('img/salmart-logo.png') }}" alt="Salmart Diplomatic Hospitality" decoding="async" loading="eager" />
    </picture>
  </a>
  <nav id="primary-nav" aria-label="Primary">
    <button class="nav-close" type="button" aria-label="Close menu" data-nav-close>×</button>
    <ul>
      <li>
        <a href="/" @if(request()->path() === '/') aria-current="page" class="is-active" @endif>Home</a>
      </li>
      <li>
        <a href="/about" @if(request()->is('about')) aria-current="page" class="is-active" @endif>About Us</a>
      </li>
      <li class="has-submenu">
        <a href="/services" @if(request()->is('services') || request()->is('service-*')) aria-current="page" class="is-active" @endif>Our Services</a>
        <div class="nav-mega" role="menu" aria-label="Services menu">
          <div class="nav-mega-inner">
            <div class="nav-mega-grid">
              <div class="nav-col">
                <a href="/service-event-management-production">Event Management Services</a>
              </div>
              <div class="nav-col">
                <a href="/service-mice-delivery">MICE Services</a>
                <a href="/service-cruise-line-services">Cruise Line Services</a>
                <a href="/service-maritime-services">Maritime Services</a>
                <a href="/service-sports-tourism-services">Sports Tourism Services</a>
                <a href="/service-tours-experiences">Tours &amp; Experiences Services</a>
                <a href="/service-destination-management-hospitality">Destination Management &amp; Hospitality</a>
              </div>
              <div class="nav-col">
                <a href="/service-media-management-strategic-storytelling">Media Management Services</a>
                <a href="/service-protocol-diplomatic">Protocol &amp; Diplomatic Services</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="has-submenu">
        <a href="/departments" @if(request()->is('departments') || request()->is('department-*')) aria-current="page" class="is-active" @endif>Our Departments</a>
        <div class="nav-mega" role="menu" aria-label="Departments menu">
          <div class="nav-mega-inner">
            <div class="nav-mega-grid">
              <div class="nav-col">
                <a href="/department-business-development-partnerships">Business Development &amp; Partnerships</a>
                <a href="/department-tours-experiences">Tours &amp; Experiences</a>
                <a href="/department-destination-management-hospitality">Destination Management &amp; Hospitality</a>
                <a href="/department-event-conference-management">Event &amp; Conference Management</a>
              </div>
              <div class="nav-col">
                <a href="/department-finance-administration">Finance &amp; Administration</a>
                <a href="/department-media-communications">Media &amp; Communications</a>
                <a href="/department-training-capacity-building">Training &amp; Capacity Building</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <a href="/portfolio" @if(request()->is('portfolio') || request()->is('portfolio-*')) aria-current="page" class="is-active" @endif>Our Events</a>
      </li>
      <li>
        <a href="/bluediplomats" @if(request()->is('bluediplomats')) aria-current="page" class="is-active" @endif>Our Initiatives</a>
      </li>
      <li>
        <a href="/why" @if(request()->is('why')) aria-current="page" class="is-active" @endif>Why SDH</a>
      </li>
      <li>
        <a href="/contact" @if(request()->is('contact')) aria-current="page" class="is-active" @endif>Contact</a>
      </li>
    </ul>
  </nav>
  <div class="header-actions">
    <div class="contact" aria-label="Contact phone">
      <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M7.5 3.5h.9c.6 0 1.1.4 1.2 1l.6 3c.1.6-.2 1.2-.7 1.4l-1.4.6c1 2.2 2.8 4 5 5l.6-1.4c.2-.6.8-.8 1.4-.7l3 .6c.6.1 1 .6 1 1.2v.9c0 1.1-.9 2-2 2C11 18.5 5.5 13 5.5 6.5c0-1.1.9-2 2-2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
      </svg>
      <strong>Consultation by appointment</strong>
    </div>
    <a class="btn" href="#contact" style="text-decoration:none;display:inline-flex;align-items:center">Request a Proposal</a>
    <button class="menu-toggle" type="button" aria-label="Open menu" aria-controls="primary-nav" aria-expanded="false">
      <div class="bars"><span></span></div>
    </button>
  </div>
</header>

<a class="nav-backdrop" href="#" aria-label="Close menu" data-nav-backdrop></a>

<a class="skip-link" href="#main">Skip to content</a>
