<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data posts, misalnya dari model atau database
        $post = Post::all();

        return count($post) > 0
            ? view('post.index', compact('post'))
            : view('post.index')->with('message', 'Data tidak ditemukan.');
    }

    public function show($title)
    {
        // Logika untuk mengambil berita berdasarkan judul
        $post = Post::where('title', $title)->first();

        // Kirim data berita ke tampilan show
        return view('post.show', compact('post'));
    }
}
