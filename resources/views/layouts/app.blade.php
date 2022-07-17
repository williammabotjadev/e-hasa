<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('/images/icon.png') }}" type="image/png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar" role="navigation" aria-label="main navigation" class="is-responsive">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="{{ asset('/images/logo.png') }}">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        How it works?
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            For Instructors
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
    @if (Route::has('login'))
      <div class="navbar-item">
        <div class="buttons">
        @auth
        <a href="{{ url('/home') }}" class="button" style="background: #808000; color: white">
            <strong>Home</strong>
        </a>
        @else
          <a href="{{ route('login') }}" class="button is-light">
            Log in
          </a>
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="button" style="background: #808000; color: white">
            <strong>Sign up</strong>
          </a>
          @endif
        @endauth
        </div>
    @endif
      </div>
    </div>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="is-footer" style="display: flex: justify-content: center; text-align: center; background: #808000; color: white; height: 10%; width: 100%; padding: 20px; bottom: 0px; position: fixed;">
            Copyright &copy; 2022
        </footer>
    </div>
</body>
</html>
