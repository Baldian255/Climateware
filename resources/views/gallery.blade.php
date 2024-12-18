@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Video Gallery</h1>
        <p class="lead">Welcome to the Video Gallery, a curated collection of videos that highlight the critical issue of global warming.
             Explore thought-provoking documentaries, educational clips, and expert talks that bring awareness to the causes, impacts, and solutions to climate change.
              Each video is carefully selected to inspire action and provide deeper insights into how we can work together to protect our planet.
        </p>

        <!-- Grid untuk Menampilkan Kartu -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($videos as $video)
                <div class="col">
                    <!-- Card untuk setiap video -->
                    <div class="card h-100 shadow-sm">
                        <!-- Thumbnail -->
                        <img src="{{ $video->thumbnail }}" class="card-img-top" alt="Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ Str::limit($video->description, 100) }}</p>
                        </div>
                        <!-- Tombol untuk membuka video -->
                        <div class="card-footer text-center">
                            <a href="{{ $video->url }}" class="btn btn-primary" target="_blank">Watch Video</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
