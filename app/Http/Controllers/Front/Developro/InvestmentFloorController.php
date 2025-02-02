<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CMS
use App\Repositories\FloorRepository;
use App\Models\Floor;
use App\Models\Investment;
use App\Models\Page;

class InvestmentFloorController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(FloorRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 2;
    }

    public function index($lang, $slug, Floor $floor, $floor_slug, Request $request)
    {
        $investment = Investment::whereSlug($slug)->first();

        $investment_room = $investment->load(array(
            'floorRooms' => function ($query) use ($floor, $request) {
                $query->where('floor_id', $floor->id);
                $query->orderBy('status', 'ASC');

                if ($request->input('rooms')) {
                    $query->where('rooms', $request->input('rooms'));
                }
                if ($request->input('status')) {
                    $query->where('status', $request->input('status'));
                }

                if ($request->input('type')) {
                    $query->where('apartment_type', $request->input('type'));
                }

                if ($request->input('garden')) {
                    $query->whereNotNull('garden_area');
                }

                if ($request->input('balcony')) {
                    $query->whereNotNull('balcony_area');
                }

                if ($request->input('area')) {
                    $area_param = explode('-', $request->input('area'));
                    $min = $area_param[0];
                    $max = $area_param[1];
                    $query->whereBetween('area', [$min, $max]);
                }
                if ($request->input('sort')) {
                    $order_param = explode(':', $request->input('sort'));
                    $column = $order_param[0];
                    $direction = $order_param[1];
                    $query->orderBy($column, $direction);
                }

                //$query->where('properties.active', '=', 1);
            }
        ));

        $page = Page::where('id', $this->pageId)->first();

        return view('front.investment_floor.index', [
            'investment' => $investment,
            'floor' => $floor,
            'next_floor' => $floor->findNext($investment->id, null, $floor->position),
            'prev_floor' => $floor->findPrev($investment->id, null, $floor->position),
            'properties' => $investment_room->floorRooms,
            'uniqueRooms' => $this->repository->getUniqueRooms($floor->properties()),
            'page' => $page
        ]);
    }
}
