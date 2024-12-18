@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('title', 'Edit Post') <!-- Mengatur judul halaman -->

@section('content') <!-- Bagian konten utama -->
    <div class="container mt-5">
        <!-- Flash Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Header -->
        <h1 class="mb-4">Edit Post</h1>

        <!-- Form Edit -->
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" placeholder="Enter post title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter post content">{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>

        <!-- Form Delete -->
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
