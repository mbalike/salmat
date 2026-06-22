<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Salmart Diplomatic Hospitality')</title>
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
