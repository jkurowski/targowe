<?php

namespace App\Http\Controllers\Front\Garage;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Investment;
use App\Models\Page;
use App\Repositories\FloorRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private int $pageId;

    public function __construct()
    {
        $this->pageId = 2;
    }

    public function index($lang, Investment $investment, Floor $floor)
    {
        $page = Page::where('id', $this->pageId)->first();
        $investments = Investment::with('garages')->get();

        $floorWithProperties = Floor::with('properties')->findOrFail($floor->id);

        return view('front.garage.index', [
            'page' => $page,
            'floor' => $floorWithProperties,
            'investments' => $investments
        ]);
    }
}
