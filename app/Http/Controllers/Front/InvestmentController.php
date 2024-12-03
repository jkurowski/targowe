<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Investment;
use App\Models\Property;
use Illuminate\Http\Request;

// CMS
use App\Repositories\InvestmentRepository;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class InvestmentController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 8;
    }

    public function index($lang, Request $request)
    {
        $investment = Investment::find(1);
        $page = Page::find(1);

        $query = Property::orderBy('status', 'ASC')->where('type', '!=', 2)->where('type', '!=', 3)->with('investment');

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

        if ($request->has('floor')) {
            $floorNumber = $request->input('floor');

            if ($floorNumber === '0' || !empty($floorNumber)) {
                $floorIds = Floor::where('number', (int)$floorNumber)->pluck('id')->toArray();
                $query->whereIn('floor_id', $floorIds);
            }
        }

        if ($request->input('area')) {
            $area_param = explode('-', $request->input('area'));
            $min = $area_param[0];
            $max = $area_param[1];
            $query->whereBetween('area', [$min, $max]);
        }

        $query->whereActive(1);

        return view('front.investment.index', [
            'page' => $page,
            'investment' => $investment,
            'properties' => $query->get(),
        ]);
    }

    public function show($lang, $slug, Request $request)
    {
        $investment = Investment::whereSlug($slug)->first();

        $query = Property::orderBy('status', 'ASC')->where('type', '!=', 2)->where('type', '!=', 3)->where('investment_id', '=', $investment->id)->with('floor');

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

        if ($request->has('floor')) {
            $floorNumber = $request->input('floor');

            if ($floorNumber === '0' || !empty($floorNumber)) {
                $floorIds = Floor::where('number', (int)$floorNumber)->pluck('id')->toArray();
                $query->whereIn('floor_id', $floorIds);
            }
        }

        if ($request->input('area')) {
            $area_param = explode('-', $request->input('area'));
            $min = $area_param[0];
            $max = $area_param[1];
            $query->whereBetween('area', [$min, $max]);
        }

        $query->whereActive(1);

        $page = Page::where('id', $this->pageId)->first();
        $floors = Floor::orderBy('position')->where('investment_id', '=', $investment->id)->get();

        return view('front.investment.show', [
            'investment' => $investment,
            'properties' => $query->get(),
            'floors' => $floors,
            'page' => $page
        ]);
    }

    public function json(Request $request)
    {

        $investment = $this->repository->find(1);
        $investment_room = $investment->load(array(
            'floorRooms' => function ($query) use ($request) {
                $query->orderBy('status', 'ASC');
                if ($request->input('rooms')) {
                    $query->whereIn('rooms', explode(',', $request->input('rooms')));
                }
                if ($request->input('status')) {
                    $query->where('status', $request->input('status'));
                }
            }
        ));

        return $investment_room->floorRooms;
    }
}
