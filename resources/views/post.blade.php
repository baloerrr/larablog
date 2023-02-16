@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="py-3">{{ $post->title }}</h3>
                <p class="card-text">
                    <small class="text-muted">By: <a class="text-decoration-none"
                            href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                            class="text-decoration-none"
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}</small>
                </p>
                <img src="https://source.unsplash.com/1200x500/?{{ $post->category->name }}" class="img-fluid"
                    alt="">
                <article>
                    <p>{!! $post->body !!}</p>
                </article>
                <a href="/posts">back gann</a>
            </div>
        </div>
    </div>
@endsection
