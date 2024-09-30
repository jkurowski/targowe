<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Article;
use Illuminate\Support\Facades\Cookie;

// CMS
use App\Models\Floor;
use App\Models\Gallery;
use App\Models\Investment;
use App\Models\Map;
use App\Models\RodoRules;

class IndexController extends Controller
{
    public function index()
    {
        $investment = Investment::with('plan')->find(9);
        $floors = Floor::orderBy('position')->with('propertiesForSale')->get();
        $galleries = Gallery::where('status', '=', 1)->with('photos')->get();
        $articles = Article::limit(3)->get();

        $popup = 0;

        if(settings()->get("popup_status") == "1") {
            if(settings()->get("popup_mode") == "1") {
                Cookie::queue('popup', null);
                $popup = 1;
            } else {
                if(Cookie::get('popup') == null){
                    $popup = 1;
                    Cookie::queue('popup', true);
                }
            }
        } else {
            Cookie::queue('popup', null);
        }


        return view('front.homepage.index', [
            'galleries' => $galleries,
            'popup' => $popup,
            'articles' => $articles,
            'rules' => RodoRules::orderBy('sort')->whereActive(1)->get()
        ]);
    }

}
