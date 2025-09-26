@extends('../layouts.default')

@section('header')
@endsection
@section('main')
<section class="blogPostSection">

    <h1>FRESH GOSSIP 🍃</h1>
    <form method="POST" action="{{ route('posts.store') }}" id="blogPostForm" class="blogForm">
        @csrf <!-- to prevent Cross-Site Request Forgery (CSRF) attacks-->

        <label>Title: </label> <br>
        <input type="text" name="title" value="{{ old('title') }}" /> <br>
        <label>
            <h4>Dearest Reader,</h4>
        </label> <br>
        <textarea name="body" id="postContent" placeholder="It has come to this author’s attention …"> {{ old('body') }}</textarea> <br>
        <div class="formButtons">
            <button type="submit" name="submit">Publish</button>
        </div>
    </form>
    <!-- Error msgs -->
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
    @endif
</section>

@endsection
@section('footer')
@endsection