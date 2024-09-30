@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $floor->name)
@section('seo_title', $floor->meta_title)
@section('seo_description', $floor->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => $investment->name.' - '.$floor->name,
    'header_file' => 'rooms.jpg',
    'items' => [
        ['uri'=> $current_locale.'/mieszkania', 'title' => 'Mieszkania']
        ]
    ])
@stop

@section('content')
    <div id="floor" class="container mb-5">
        <div class="row">
            <div class="col-12">
                @include('front.investment_shared.investment-filtr', ['area_range' => '25-45,45-65,65-85,85-110'])
            </div>
            <div id="sideMenu" class="col-12 col-lg-3 mt-3 mt-lg-5 pe-3 pe-lg-5">
                <div class="floor-nav">
                    @foreach($investments as $i)
                        <h3>{{$i->name}}</h3>
                        <ul class="list-unstyled">
                            @foreach($i->floors as $f)
                                @if($f->type == 1)
                                <li @if($floor->id == $f->id) class="active" @endif ><a href="{{route('front.investment.floor', [$i->id, $f->id])}}">{{$f->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-9 mt-0 mt-lg-5">
                <span onclick="toggleNav()" class="toggleSideMenu"><i class="las la-bars"></i> Zmień piętro</span>
                <div class="ps-0 ps-lg-5">
                    @if($floor->file)
                        <div id="plan-holder" style="margin:0 auto">
                            <div>
                                <img src="{{ asset('/investment/floor/webp/'.$floor->file_webp) }}" alt="{{$floor->name}}" id="invesmentplan" usemap="#invesmentplan">
                                <map name="invesmentplan">
                                    @if($properties)
                                        @foreach($properties as $r)
                                            @if($r->html)
                                                <area
                                                        shape="poly"
                                                        data-item="{{$r->id}}"
                                                        alt="{{$r->slug}}"
                                                        data-roomnumber="{{$r->number}}"
                                                        data-roomtype="{{$r->typ}}"
                                                        data-roomstatus="{{$r->status}}"
                                                        coords="{{cords($r->html)}}"
                                                        class="inline status-{{$r->status}}" href="@if($r->status <> 3) {{route('front.investment.property', ['investment_id' => $investment->id, 'floor' => $floor->id, 'property' => $r->id])}} @else # @endif" title="<h4 class='mb-2'>{{$r->name}}</h4><ul class='mb-0 list-unstyled mt-0'><li>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b></li><li>Pokoje: <b class=fr>{{$r->rooms}}</b></li><li><b>{{ roomStatus($r->status) }}</b></li></ul>">
                                            @endif
                                        @endforeach
                                    @endif
                                </map>
                            </div>
                        </div>
                    @endif
                        @include('front.investment_shared.filtr', ['area_range' => $floor->area_range])

                        @include('front.investment_shared.list', ['investment' => $investment])
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
        <script>
            function toggleNav() {
                const sideMenu = document.getElementById("sideMenu");
                const floor = document.getElementById("pagecontent");

                if(sideMenu.classList.contains('openMenu')){
                    sideMenu.style.width = "0";
                    sideMenu.classList.remove("openMenu");
                    floor.style.left = "0";
                    document.body.style.overflow = 'scroll';
                } else {
                    sideMenu.style.width = "250px";
                    sideMenu.classList.add("openMenu");
                    floor.style.left = "250px";
                    document.body.style.overflow = 'hidden';
                }
            }
        </script>
    @endpush
@endsection

