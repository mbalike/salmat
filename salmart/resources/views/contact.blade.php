@extends('layouts.app')

@section('title', 'Contact • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Contact banner" style="--hero-bg-image:url('{{ asset('img/salmart-logo.png') }}');--hero-bg-position:center 90%;--hero-bg-size:contain;--hero-bg-scale:1;">
      <div class="inner-hero-inner">
        <div class="breadcrumbs" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span class="crumb-sep">›</span>
          <span>Contact</span>
        </div>
        <h1>Contact</h1>
      </div>
    </section>

    <div class="contact-container">
      <section class="c-grid" aria-label="Contact content">
        <div class="c-left">
          <h2>Get In Touch With Us To Get Better Information</h2>
          <p>Tell us what you’re planning and we’ll get back with next steps. Visit us at <a href="https://maps.app.goo.gl/ujfckgu73GVmVyuDA" target="_blank" rel="noreferrer">2115 Samora Avenue, Dar Es Salaam</a>.</p>

          <div class="c-tiles c-tiles-plain" aria-label="Key contact information">
            <div class="c-tile">
              <div>
                <div class="c-tile-title">Call Us</div>
                <div class="c-tile-text" aria-label="Phone numbers">
                  <div><a href="tel:+255742398600">+255 742 398 600</a></div>
                  <div><a href="tel:+255683010907">+255 683 010 907</a></div>
                </div>
              </div>
            </div>

            <div class="c-tile">
              <div>
                <div class="c-tile-title">Business Hours</div>
                <ul class="c-hours" aria-label="Business hours">
                  <li><span class="day">Mon – Fri</span><span class="leader" aria-hidden="true"></span><span class="time">08:00 – 17:00</span></li>
                  <li><span class="day">Sat</span><span class="leader" aria-hidden="true"></span><span class="time">08:00 – 14:00</span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="c-social" aria-label="Official social media">
            <h3>Official Social Media</h3>
            <p>Follow us for updates, stories, and announcements. For quick responses, WhatsApp is the fastest channel.</p>

            <div class="c-social-links">
              <a href="https://www.tiktok.com/@salmart.diplomatic?_r=1&amp;_t=ZS-94euOxpJkTU" aria-label="TikTok" target="_blank" rel="noreferrer">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.18 8.18 0 0 0 4.78 1.52V6.77a4.85 4.85 0 0 1-1.01-.08z"/></svg>
              </a>
              <a href="#" aria-label="Twitter">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.9 7.6c0 .2 0 .4-.1.6-.5 6.2-4.7 10.7-10.6 10.7-2.1 0-4-.6-5.7-1.6h.8c1.7 0 3.3-.6 4.6-1.6-1.6 0-3-1.1-3.5-2.6.2.1.5.1.8.1.3 0 .6 0 .9-.1-1.7-.3-3-1.8-3-3.6v-.1c.5.3 1.1.5 1.8.6-1-.7-1.6-1.8-1.6-3.1 0-.7.2-1.3.5-1.9 1.8 2.2 4.6 3.7 7.7 3.8-.1-.3-.1-.6-.1-1 0-2 1.6-3.6 3.6-3.6 1 0 2 .4 2.6 1.1.8-.2 1.5-.4 2.2-.8-.3.8-.8 1.4-1.5 1.8.7-.1 1.4-.3 2-.5-.5.7-1 1.3-1.7 1.8z"/></svg>
              </a>
              <a href="#" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm4.5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm6.2-2.3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/></svg>
              </a>
              <a href="https://tz.linkedin.com/in/salmart-diplomatic-b949a2355" aria-label="LinkedIn" target="_blank" rel="noreferrer">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.5 9H3.8v12h2.7V9zM5.2 3.6a1.6 1.6 0 10.1 3.2 1.6 1.6 0 000-3.2zM20.5 14.2c0-3.2-1.7-5.2-4.5-5.2-2 0-3 1.1-3.5 1.9V9H9.9v12h2.7v-6.3c0-1.7.3-3.4 2.4-3.4s2.1 2 2.1 3.5V21h2.7v-6.8z"/></svg>
              </a>
              <a href="https://wa.me/255742398600" aria-label="WhatsApp" target="_blank" rel="noreferrer">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg>
              </a>
            </div>

          </div>
        </div>

        <aside class="c-right" aria-label="Contact form">
          <div class="c-form-card">
            <form class="c-form" action="#" method="post">
              <div>
                <label class="sr-only" for="name">Your Name</label>
                <input id="name" name="name" type="text" autocomplete="name" placeholder="Your Name" required />
              </div>
              <div>
                <label class="sr-only" for="email">Your Email</label>
                <input id="email" name="email" type="email" autocomplete="email" placeholder="Your Email" required />
              </div>

              <div class="row">
                <div>
                  <label class="sr-only" for="phone">Phone</label>
                  <input id="phone" name="phone" type="tel" autocomplete="tel" placeholder="Phone Number" />
                </div>
                <div>
                  <label class="sr-only" for="company">Company</label>
                  <input id="company" name="company" type="text" autocomplete="organization" placeholder="Company / Organization" />
                </div>
              </div>

              <div class="row">
                <div>
                  <label class="sr-only" for="interest">Service interested in</label>
                  <select id="interest" name="interest">
                    <option value="" selected>Service interested in</option>
                    <option>Event Management Services</option>
                    <option>Branding &amp; Venue Transformation</option>
                    <option>Conference Support &amp; Coverage</option>
                    <option>MICE Services</option>
                    <option>Cruise Line Services</option>
                    <option>Other</option>
                  </select>
                </div>
                <div>
                  <label class="sr-only" for="date">Preferred date</label>
                  <input id="date" name="date" type="date" placeholder="Preferred date" />
                </div>
              </div>

              <div>
                <label class="sr-only" for="subject">Your Subject</label>
                <input id="subject" name="subject" type="text" placeholder="Your Subject" />
              </div>

              <div>
                <label class="sr-only" for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
              </div>
              <button type="submit">Send Message</button>
            </form>
          </div>
        </aside>
      </section>
    </div>

    <section class="c-map" aria-label="Find us">
      <div class="map-frame" aria-label="Map">
        
        <iframe
          title="Google Map"
          loading="lazy"
          allowfullscreen=""
          referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d495.2042507291215!2d39.292248!3d-6.8142929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b110f000001%3A0xdb939df3b352a604!2sNIC%20Investment%20House!5e0!3m2!1sen!2stz!4v1770744300118!5m2!1sen!2stz">
        </iframe>
      </div>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
