<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PostExcelExportController extends Controller
{
    public function __invoke(): BinaryFileResponse
    {
      return  Excel::download(new PostsExport(), 'posts.xlsx');
    }

}
