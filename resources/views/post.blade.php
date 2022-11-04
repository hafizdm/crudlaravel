@extends('layouts.main')

@section('container')

  <h1 class="mb-5">Project Rapid Infrastruktur Indonesia</h1>

  @foreach ($post as $pos)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/post/{{ $pos["slug"] }}" class="text-decoration-none">{{ $pos->title }}</a>
        </h2>

        <p>By <a href="/authors/{{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a> <a href="/categories/{{ $pos->category->slug }}"class="text-decoration-none">{{ $pos->category->name }}</a></p>
        <h5>{{ $pos->excerpt }}</h5>   
        
        <a href="/post/{{ $pos["slug"] }}"class="text-decoration-none">Read More</a>
        
    </article>
    

  @endforeach

@endsection
