@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', 'Mieszkania')
@section('seo_title', 'Mieszkania')
@section('seo_description', 'Mieszkania')

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => 'Mieszkania',
    'header_file' => 'rooms.jpg',
    'items' => []
    ])
@stop

@section('content')
    <div id="floor" class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <img src="{{ asset('/investment/plan/104851_budynek-a1.jpg') }}" alt="" id="invesmentplan" usemap="#invesmentplan">
                <map name="invesmentplan">
                    @foreach($floors as $int => $floor)
                        @if($floor->html)
                            <area
                                    shape="poly"
                                    href="{{route('front.investment.floor', [$floor->investment_id, $floor->id])}}"
                                    title="<div class='qtip-floor'><h4>{{$floor->name}}</h4>@if($floor->id > 1)Wolne mieszkania: {{$floor->propertiesForSale->count()}} @if($floor->propertiesReservation()->count() > 0) <br>Rezerwacje: {{$floor->propertiesReservation()->count()}} @endif</div>@endif"
                                    alt="floor-{{$int}}"
                                    data-item="{{$floor->id}}"
                                    data-slick="{{$int}}"
                                    data-floortype="{{$floor->type}}"
                                    coords="@if($floor->html) {{cords($floor->html)}} @endif">
                        @endif
                    @endforeach
                </map>
            </div>
            
            <div class="col-12">
                @include('front.investment_shared.investment-filtr', ['area_range' => '25-35,35-45,45-55,55-65,65-75'])
            </div>

            <div class="col-12">
                @include('front.investment_shared.list')
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
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