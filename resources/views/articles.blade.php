@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Global Warming Articles</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Article</a>

        <!-- Menampilkan grid artikel -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($posts as $post)
                <div class="col">
                    <!-- Card untuk setiap artikel -->
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <!-- Batasi konten menggunakan Str::limit -->
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <!-- Tombol Read More -->
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                        <div class="card-footer d-flex justify-content-start">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
