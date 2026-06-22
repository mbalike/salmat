<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Salmart Diplomatic Hospitality')</title>

  {{-- SEO --}}
  <meta name="description" content="@yield('meta_description', 'Salmart Diplomatic Hospitality delivers protocol excellence, world-class events, and seamless destination management for governments, diplomatic missions, and global organizations.')">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- Open Graph --}}
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:title" content="@yield('title', 'Salmart Diplomatic Hospitality')">
  <meta property="og:description" content="@yield('meta_description', 'Salmart Diplomatic Hospitality delivers protocol excellence, world-class events, and seamless destination management for governments, diplomatic missions, and global organizations.')">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="@yield('og_image', asset('img/salmart-diplomatic-hospitality-logo.png'))">
  <meta property="og:site_name" content="Salmart Diplomatic Hospitality">
  <meta property="og:locale" content="en_US">

  {{-- Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('title', 'Salmart Diplomatic Hospitality')">
  <meta name="twitter:description" content="@yield('meta_description', 'Salmart Diplomatic Hospitality delivers protocol excellence, world-class events, and seamless destination management for governments, diplomatic missions, and global organizations.')">
  <meta name="twitter:image" content="@yield('og_image', asset('img/salmart-diplomatic-hospitality-logo.png'))">

  {{-- JSON-LD Structured Data --}}
  @stack('schema')

  <link rel="shortcut icon" href="{{ asset('img/salmart-diplomatic-hospitality-logo.png') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/site-shell.css') }}" />
  @stack('styles')
</head>
<body>

@include('partials.topbar')
@include('partials.header')

<main id="main">
@yield('content')
</main>

@include('partials.footer')

<a class="back-to-top" href="#" aria-label="Back to top">↑</a>

<script src="{{ asset('js/site.js') }}"></script>
@stack('scripts')

</body>
</html>
