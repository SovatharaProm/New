<!DOCTYPE html>
<html lang="en">

<head>
    @yield('head')
</head>

<body>
    <header>
        @include('Frontend.layout.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('Frontend.layout.footer')
    </footer>
</body>
</html>