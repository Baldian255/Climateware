@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('title', 'Create Post') <!-- Mengatur judul halaman -->

@section('content') <!-- Bagian konten utama -->
    <div class="container mt-5">
        <h1 class="mb-4">Create New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter post content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
