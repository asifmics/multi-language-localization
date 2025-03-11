<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): view
    {
        return view('posts.index', [
            'posts' => Post::with('user')->paginate(20),
        ]);
    }
}
