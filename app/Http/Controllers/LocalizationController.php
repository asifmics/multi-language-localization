<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function __invoke($lang): RedirectResponse
    {
        if (in_array($lang, ['en', 'bn'])) {
            app()->setLocale($lang);
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
