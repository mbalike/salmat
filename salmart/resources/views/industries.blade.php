@extends('layouts.app')

@section('title', 'Industries We Serve • Salmart Diplomatic Hospitality')
@section('meta_description', 'Salmart Diplomatic Hospitality serves governments, NGOs, diplomatic missions, maritime industries, sports tourism, cruise lines, and global organizations across East Africa and beyond.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/industries.css') }}" />
@endpush

@section('content')
<section class="inner-hero" aria-label="Page header" style="--hero-bg-image:url('{{ asset('img/salmart/img-8.jpg') }}');">
  <div class="inner-hero-inner">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="crumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Industries</span>
    </nav>
    <h1 class="inner-hero-title">Industries</h1>
  </div>
</section>

<main id="main" class="page">
    <h2>Industries We Serve</h2>
    <p class="lead">Salmart Diplomatic supports institutions and organizations where stakes are high, visibility is global, and experience quality matters.</p>

    <section class="card" aria-label="Industry list">
      <ul>
        <li>Government &amp; Diplomatic Institutions</li>
        <li>Multinational Corporations</li>
        <li>Development Partners &amp; NGOs</li>
        <li>Trade Associations &amp; Industry Bodies</li>
        <li>Healthcare, Education &amp; Research Institutions</li>
        <li>Luxury, Hospitality &amp; Tourism Brands</li>
      </ul>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('js/service-detail.js') }}"></script>
@endpush
