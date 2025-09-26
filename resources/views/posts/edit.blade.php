@extends('../layouts.default')

@section('header')
@endsection
@section('main')
<h1>EDIT GOSSIP 🍃</h1>
<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')


    <label>Title: </label> <br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" /> <br>
    <label>
        <h4>Dearest Reader,</h4>
    </label> <br>
    <textarea name="body" id="postContent" placeholder="It has come to this author’s attention …"> {{ old('body', $post->body) }}</textarea> <br>
    <div class="formButtons">
        <button type="submit" name="submit">Update</button>
</form>
@endsection
@section('footer')
@endsection