@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div class="container mt-5">
        <h1>Articles</h1>

        @if(isset($message))
            <p>{{ $message }}</p>
        @else
            @foreach($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->created_at->format('d M Y') }}</p>
                        <a href="{{ route('post.show', ['title' => $post->title]) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
