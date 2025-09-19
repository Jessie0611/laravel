@extends('layouts.default')

@section('header')
<h2>This is the header</h2>
@endsection

@section('main')
<h1>Contact</h1>

<form action="{{ route('formsubmitted')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
    <br> <br>
    <label for="msg">Message:</label>
    <input type="text" id="msg" name="msg" placeholder="Message here ..." required>
    <br> <br> <br>
    <button type="send">Send</button>

</form>
@endsection

@section('footer')
<h2> This is the footer</h2>
@endsection
</body>

</html>