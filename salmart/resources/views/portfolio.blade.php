@extends('layouts.app')

@section('title', 'Our Events & Portfolio • Salmart Diplomatic Hospitality')
@section('meta_description', 'Browse Salmart Diplomatic Hospitality\'s portfolio of events — conferences, diplomatic gatherings, cultural festivals, gala dinners, and international delegation visits across Tanzania and Africa.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/portfolio-shell.css') }}" />
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/events/alc (1).jpeg') }}');--hero-bg-position:center 35%">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Our Events</span>
    </nav>
    <h1 class="inner-hero-title">Our Events</h1>
  </div>
</section>

<section class="portfolio-wrap" aria-label="Portfolio overview">
    <div class="portfolio-head">
      <span class="portfolio-kicker">EVENTS</span>
      <h2>Work highlights across categories</h2>
      <p>Filter by category, then load more cards without a page refresh.</p>

      <div class="portfolio-tabs" role="tablist" aria-label="Portfolio filters">
        <button class="portfolio-tab is-active" type="button" role="tab" aria-selected="true" tabindex="0" data-portfolio-filter="All">All</button>
        <button class="portfolio-tab" type="button" role="tab" aria-selected="false" tabindex="-1" data-portfolio-filter="Conference">Conference</button>
        <button class="portfolio-tab" type="button" role="tab" aria-selected="false" tabindex="-1" data-portfolio-filter="Culture">Culture</button>
        <button class="portfolio-tab" type="button" role="tab" aria-selected="false" tabindex="-1" data-portfolio-filter="Events">Events</button>
        <button class="portfolio-tab" type="button" role="tab" aria-selected="false" tabindex="-1" data-portfolio-filter="Government">Government</button>
      </div>
    </div>

    <div id="portfolioGrid" class="portfolio-grid" aria-live="polite"></div>

    <div class="loadmore-wrap">
      <button id="loadMoreBtn" class="load-more" type="button">Load More</button>
    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/portfolio.js') }}"></script>
@endpush
