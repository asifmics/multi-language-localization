<?php

namespace App\Exports;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PostsExport implements FromView
{

    public function view(): View
    {
        return view('exports.posts', [
            'user' => User::where('id',auth()->id())->with('posts')->first()
        ]);
    }
}
