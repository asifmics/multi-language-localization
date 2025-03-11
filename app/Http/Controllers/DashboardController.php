<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->id())->with('posts')->first();
        return view('dashboard', [
            'user' => $user
        ]);
    }
}
