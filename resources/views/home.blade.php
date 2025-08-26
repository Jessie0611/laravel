<?php
//RESOURCES === TESTING VERSION -  Blade templating (clean HTML + PHP views)
//@csrf LARAVEL SECURITY

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Home</h1>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('formsubmitted')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        <br> <br>
        <label for="email">E-Mail:</label>
        <input type="text" id="email" name="email" placeholder="E-Mail@E-mail.com" required>
        <br> <br> <br>
        <button type="submit">Submit</button>

    </form>
</body>

</html>