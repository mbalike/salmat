@extends('layouts.app')

@section('title', 'How We Work • Salmart Diplomatic Hospitality')
@section('meta_description', 'Learn how Salmart Diplomatic Hospitality operates — from initial brief to flawless delivery. Our methodology ensures protocol precision, seamless logistics, and world-class event experiences.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/how-we-work.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/salmart/img-2.jpg') }}');">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">How We Work</span>
    </nav>
    <h1 class="inner-hero-title">How We Work</h1>
  </div>
</section>

<main id="main" class="page">
    <h2>Consultative. Strategic. Detail-Driven.</h2>
    <p class="lead">At Salmart Diplomatic Hospitality, our approach is consultative, strategic, and detail-driven. We believe exceptional events are built through collaboration, trust, and precision execution.</p>

    <div class="cta">
      <a class="btn-solid" href="/contact">Start a project</a>
      <a class="btn-outline" href="/services">Explore services</a>
    </div>

    <section class="steps" aria-label="Delivery methodology">
      <article class="card">
        <div class="num">01</div>
        <h2>Discovery &amp; Strategy</h2>
        <p>We begin by understanding your objectives, audience, protocol requirements, and desired impact. This phase includes concept development, destination advisory, budget alignment, and risk assessment.</p>
      </article>

      <article class="card">
        <div class="num">02</div>
        <h2>Creative Design &amp; Planning</h2>
        <p>We develop the full creative ecosystem of your event, including branding, themes, content flow, stage concepts, delegate journeys, and communication strategy.</p>
      </article>

      <article class="card">
        <div class="num">03</div>
        <h2>Production &amp; Delivery</h2>
        <p>From venue transformation and technical production to delegate logistics and media coordination, we manage every moving part with precision and professionalism.</p>
      </article>

      <article class="card">
        <div class="num">04</div>
        <h2>Post-Event Value</h2>
        <p>We deliver detailed reports, media assets, conference summaries, and performance insights to extend the value of your event beyond the final day.</p>
      </article>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
