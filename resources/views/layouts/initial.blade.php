<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/initial.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
      <center>
        <div></div>
        <div>
        <div class="title" >@yield('page-title')</div>
        <div class="subtitle" >@yield('page-subtitle')</div>
        </div>
        @if(Auth::check())
        <a class="logout-btn" href="/logout">Fazer Logout</a>
        @else
        <span></span>
        @endif
      </center>
      @yield('content')

      <footer>
       Powered by Cliff | Elias Garrido
      </footer>
    </body>
</html>
