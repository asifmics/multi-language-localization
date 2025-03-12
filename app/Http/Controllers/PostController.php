<?php

namespace App\Http\Controllers;

use App\excel\PostExport;
use App\Exports\PostsExport;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Excel;

class PostController extends Controller
{
    public function index(): view
    {
        return view('posts.index', [
            'posts' => Post::with('user')->paginate(20),
        ]);
    }


}
