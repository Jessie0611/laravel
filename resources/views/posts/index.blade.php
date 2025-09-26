@extends('layouts.default')

@section('header')
@endsection
@section('main')
<section class="blogPostSection">

    <nav class="navLinks"><a href="{{ route('posts.create') }}">Create New Post</a></nav> <!--reference to method in PostController::Class, not the folder then the page-->
    @foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>

        <a class="edit" href="{{ route('posts.edit', $post->id) }}">Edit</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form>
    </div>
    @endforeach
</section>
@endsection
@section('footer')
@endsection