<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'LuxDB') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="/">{{ config('app.name', 'LuxDB') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Startseite</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/customers">Kundenverwaltung</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/customers/create">Neuen Kunden anlegen</a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container">
      <div class="jumbotron">
        @yield('content')
      </div>
    </main>
</body>
</html>
