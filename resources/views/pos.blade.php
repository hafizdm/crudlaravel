@extends('layouts.main')

@section('container')

    <article>
        <h2> {{ $post->title }}</h2>
        <p>By <a href="#" class="text-decoration-none"> {{$post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>
        <h5> {{ $post->excerpt }} </h5>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="d-block mt-4">Back To Post</a>
   

@endsection