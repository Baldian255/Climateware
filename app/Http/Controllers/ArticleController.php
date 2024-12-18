<?php

namespace App\Http\Controllers;

use App\Models\Post; // Menggunakan model Post
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Mengambil semua postingan
        return view('articles', compact('posts')); // Mengirim data ke view
    }
}
