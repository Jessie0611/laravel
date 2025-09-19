@extends('layouts.default')

@section('header')
<h2>This is the header</h2>
@include('sidemenu')
@endsection

@section('main')
<h1>Home</h1>

<form action="{{ route('formsubmitted') }}" method="POST">
    @csrf
    <label for="fullname">Name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
    <br><br>

    <label for="email">E-Mail:</label>
    <input type="email" id="email" name="email" placeholder="E-Mail@example.com" required>
    <br><br><br>

    <button type="submit">Submit</button>
</form>
@endsection

@section('footer')
<h2>This is the footer</h2>
@endsection