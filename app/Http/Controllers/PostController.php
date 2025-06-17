<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        if (!$post->published && !auth()->check()) {
            abort(404);
        }

        return view('posts.show', compact('post'));
    }
}
