<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): view
    {
        return view('dashboard', [
            'user' => User::where('id', auth()->id())
                ->with('posts', function ($q) {
                    $q->paginate(20);
                })->first(),
        ]);
    }
}
