<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get(); // Mengambil semua post terbaru
        return view('home', compact('posts')); // Mengirim data ke view home.blade.php
    }
}
