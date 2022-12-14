@extends('layouts.main')

@section('container')

  <h1 class="mb-5">Post Category : {{ $category }}</h1>

  @foreach ($posts as $post)
    <article class="mb-4">
        <h2>
            <a href="/post/{{ $post["slug"] }}">{{ $post->title }}</a>
        </h2>
        <h5>{{ $post->excerpt }}</h5>       
        
    </article>
    

  @endforeach

@endsection
