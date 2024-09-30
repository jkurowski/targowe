<?php

namespace App\Http\Controllers\Front\Location;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        $page = Page::find(2);
        return view('front.location.index', ['page' => $page]);
    }
}
