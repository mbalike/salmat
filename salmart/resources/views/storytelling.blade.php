@extends('layouts.app')

@section('title', 'Strategic Storytelling • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart\'s strategic storytelling and media management services help organizations craft compelling narratives for diplomatic, cultural, and brand communications across East Africa.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/storytelling.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/salmart/img-3.jpg') }}');">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Storytelling</span>
    </nav>
    <h1 class="inner-hero-title">Storytelling</h1>
  </div>
</section>

<main id="main" class="page">
    <h2>Media Management Services</h2>
    <p class="lead">We are dedicated to improving lives through storytelling. Our media and communication services focus on creating emotive, intelligent, and purpose-driven narratives that improve credibility, visibility, and outcomes.</p>

    <div class="cta">
      <a class="btn-solid" href="/contact">Request media support</a>
      <a class="btn-outline" href="/services">Explore all services</a>
    </div>

    <section class="grid" aria-label="Storytelling services">
      <article class="card">
        <h2>Strategy &amp; Relations</h2>
        <ul>
          <li>Media strategy and message development</li>
          <li>Media relations with local and international outlets</li>
          <li>Interviews, press briefings, and media coordination</li>
          <li>Brand visibility and reputation management</li>
          <li>Crisis communication support</li>
        </ul>
      </article>

      <article class="card">
        <h2>Content &amp; Coverage</h2>
        <ul>
          <li>Documentary-style content and impact storytelling</li>
          <li>Professional photography and cinematic videography</li>
          <li>Highlight videos, post-event reels, and media assets</li>
          <li>Live event updates and behind-the-scenes storytelling</li>
        </ul>
      </article>

      <article class="card" style="grid-column:1/-1">
        <h2>Why It Matters</h2>
        <p>Organizations across the continent trust Salmart Diplomatic to deliver their stories to the right audience, at the right time, with credibility and impact.</p>
      </article>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
