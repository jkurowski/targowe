<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Floor;
use App\Models\Page;
use App\Models\Property;
use App\Models\RodoRules;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InvestmentPropertyController extends Controller
{
    private $pageId;

    public function __construct()
    {
        $this->pageId = 2;
    }

    public function index($lang, $slug, Floor $floor, $floor_slug, Property $property, Request $request)
    {
        $investment = Investment::whereSlug($slug)->first();

        $page = Page::where('id', $this->pageId)->first();

        $property->timestamps = false;
        $property->increment('views');

        $next = $property->findNext($floor->id, 1, $investment->id, $property->number_order);
        $prev = $property->findPrev($floor->id, 1, $investment->id, $property->number_order);

        $similar = Property::select('properties.*', 'floors.number as floor_number')
            ->where('properties.type', $property->type)
            ->where('properties.id', '<>', $property->id)
            //->where('properties.investment_id', '!=', 7)
            ->join('floors', 'properties.floor_id', '=', 'floors.id')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('front.investment_property.index', [
            'investment' => $investment,
            'floor' => $floor,
            'property' => $property,
            'next' => $next,
            'prev' => $prev,
            'page' => $page,
            'similar' => $similar
        ]);
    }
}
