@extends('layouts.main')

@section('container')
    <h2 class="mt-3 mb-3">Category: {{ $title }}</h2>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark text-white my-2">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img"
                                alt="...">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
                                <h5 class="card-title flex-fill text-center fs-4 p-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
