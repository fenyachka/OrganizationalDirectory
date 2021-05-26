<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Organizational Directory</title>
  </head>
  <body>
        @include('inc.navbar')
        @include('inc.messages')
        <main>
            @yield('content')
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
