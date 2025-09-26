<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheTea</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        @yield('header')
        <div class="content">
            <div class="header">
                <img class="heroImg" src="{{ asset('images/theTT.png') }}" alt="heroImg">

                </nav>
            </div>
            @yield('header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <footer class="footer">
            <h3>&copy; &nbsp; 2025 The Tea &nbsp;&nbsp;|&nbsp;&nbsp; All gossip served hot &nbsp; ☕ </h3>
        </footer>
        </div>
        @yield('footer')
    </footer>
</body>

</html>