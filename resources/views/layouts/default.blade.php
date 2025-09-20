<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <img src="{{ asset('images/tea.jpg') }}" alt="">
        @yield('header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>

</html>