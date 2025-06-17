<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::where('published', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $featuredProjects = Project::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('featuredPosts', 'featuredProjects'));
    }
}
