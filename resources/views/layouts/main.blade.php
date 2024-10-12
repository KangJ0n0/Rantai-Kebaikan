<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <title>Rantai Kebaikan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    @include('layouts.navigation')

 
        @yield('content')
   

    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>