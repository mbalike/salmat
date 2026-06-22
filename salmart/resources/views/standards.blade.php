@extends('layouts.app')

@section('title', 'Our Standards • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart Diplomatic Hospitality upholds the highest standards in diplomatic protocol, event management excellence, quality assurance, and world-class hospitality service delivery.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/standards.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/salmart/img-9.jpg') }}');">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Standards</span>
    </nav>
    <h1 class="inner-hero-title">Standards</h1>
  </div>
</section>

<main id="main" class="page">
    <h2>DMC Advantage, Sustainability &amp; Risk Management</h2>
    <p class="lead">For diplomatic, governmental, and high-level corporate engagements, precision and responsibility are non-negotiable. Salmart Diplomatic integrates comprehensive standards across destination management, sustainability, and safety planning.</p>

    <div class="cta">
      <a class="btn-solid" href="/contact">Request a consultation</a>
      <a class="btn-outline" href="/services">Explore services</a>
    </div>

    <section class="grid" aria-label="Standards">
      <article class="card">
        <h2>Destination Management Expertise (DMC Advantage)</h2>
        <p>Local intelligence with international standards. We act as your on-the-ground partner, coordinating across venues, suppliers, authorities, and cultural stakeholders.</p>
        <ul>
          <li>Destination research and feasibility studies</li>
          <li>Venue sourcing and contracting</li>
          <li>Government and protocol coordination</li>
          <li>Supplier management and quality control</li>
          <li>Risk management and contingency planning</li>
          <li>Delegate hospitality and VIP handling</li>
        </ul>
      </article>

      <article class="card">
        <h2>Sustainability &amp; Responsible Events</h2>
        <p>We balance excellence with environmental and social responsibility to create value for communities, clients, and long-term outcomes.</p>
        <ul>
          <li>Eco-conscious sourcing and materials</li>
          <li>Digital-first communication to reduce waste</li>
          <li>Local supplier engagement to support communities</li>
          <li>Sustainable transport and accommodation options</li>
          <li>Cultural preservation through authentic experiences</li>
        </ul>
      </article>

      <article class="card" style="grid-column:1/-1">
        <h2>Safety, Security &amp; Risk Management</h2>
        <p>For diplomatic and high-level corporate events, safety is non-negotiable. Salmart Diplomatic integrates risk protocols from the outset and coordinates with authorities where required.</p>
        <ul>
          <li>Security coordination with local authorities</li>
          <li>Emergency response planning</li>
          <li>Health and safety compliance</li>
          <li>Crowd management and access control</li>
          <li>Confidentiality and data protection</li>
        </ul>
      </article>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
