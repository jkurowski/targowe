<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    function index(){
        $page = Page::find(6);
        return view('front.about.index', ['page' => $page]);
    }
}
