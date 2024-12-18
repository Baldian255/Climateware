@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('title', 'All Posts') <!-- Mengatur judul halaman -->

@section('content') <!-- Bagian konten utama -->
<div class="container mt-5">
    <h1 class="mb-4">Global Warming Articles</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($posts as $post)
            <div class="col">
                <!-- Card -->
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
