<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function udogodnienia()
    {
        $page = Page::find(2);
        return view('front.static.udogodnienia', compact('page'));
    }

    public function deweloper()
    {
        $page = Page::find(7);
        return view('front.static.deweloper', compact('page'));
    }
}
