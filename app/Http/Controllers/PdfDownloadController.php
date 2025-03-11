<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfDownloadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $posts =  Post::with('user')->get()->toArray();
        $pdf = Pdf::setOption([
            'fontDir' => public_path('/fonts'),
            'fontCache' => public_path('/fonts'),
            'defaultFont' => "SolaimanLipi",
            'fontHeightRatio' => '1'])->loadView('posts.pdf.download', compact('posts'));

        return $pdf->download('download.pdf');
    }
}
