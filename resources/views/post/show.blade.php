@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="container mt-5">
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">{{ $post->created_at->format('d M Y') }}</p>
        <p>{{ $post->content }}</p>
    </div>
@endsection
