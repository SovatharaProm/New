<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('head')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('assets/scripts/bootstrap.min.js') }}" defer></script>
    <style>main{min-height: 50vh;}</style>
</head>

<body>
    <header>
        @include('Frontend.layout.header')
    </header>
    <main class="py-4 my-4">
        @yield('content')
    </main>
    <footer>
        @include('Frontend.layout.footer')
    </footer>
</body>

</html>
