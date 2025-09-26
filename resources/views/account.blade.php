@extends('layouts.default')

@section('main')
<div class="account">
    <form action="{{ route('logout') }}" method="POST" class="createAccountForm" style="margin: 0;">
        @csrf
        <button type="submit" style="padding: 0.4rem 0.8rem; background-color: #A09CC2; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Logout
        </button>

        <h1>Hello, {{ $user->username ?? 'Guest' }}!</h1>
        <h4>Welcome to your account page. You’re now sipping The Tea in style.</h4>

        <h2>Your Posts</h2>

        @if ($userPosts->isEmpty())
        <p>You haven’t posted anything yet. Time to spill some tea!</p>
        @else
        <div class="user-posts">
            @foreach ($userPosts as $post)
            <div class="post-summary">
                <h3>{{ $post->title }}</h3>

                @if ($post->coverImage)
                <img src="{{ asset('storage/uploads/' . $post->coverImage) }}" alt="Cover Image" style="max-width: 30%; object-fit: cover;">
                @endif

                <p>{{ Str::limit(strip_tags($post->content), 200) }}...</p>

                <small>Posted on {{ $post->created_at->format('F j, Y, g:i a') }}</small><br>

                <a href="{{ route('posts.show', $post->postID) }}">
                    <div class="readMore">Read More</div>
                </a>

                <form action="{{ route('posts.destroy', $post->postID) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');" style="margin-top: 0.5rem;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
        @endif
    </form>
</div>
@endsection