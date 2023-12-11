<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Titolo generico')</title>
  {{-- link al css --}}
  @vite('resources/js/app.js')
  @yield('head')

  <style>
    .active {
      font-weight: bold;
    }
  </style>

</head>
<body>

  @include('partials.header')

  <main>
    @yield('content')
  </main>

  
  @include('partials.footer')
  
  {{-- link al js --}}
  @yield('end-body')
</body>
</html>