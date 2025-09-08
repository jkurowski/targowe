@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="apartments">
        <div class="margin-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('plan') }}">{{ $page->title }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('show', $investment->slug) }}">{{ $investment->name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $floor->name }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        @if($prev_floor)
                            <a href="{{route('floor', [$investment->slug, $prev_floor, 'floor_slug' => Str::slug($prev_floor->name)])}}" class="floor-link">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="33.142"
                                        height="33.142"
                                        viewBox="0 0 33.142 33.142"
                                >
                                    <g
                                            id="Group_979"
                                            data-name="Group 979"
                                            transform="translate(-741 -1177)"
                                    >
                                        <g
                                                id="Ellipse_19"
                                                data-name="Ellipse 19"
                                                transform="translate(741 1210.142) rotate(-90)"
                                                fill="none"
                                                stroke="#345e3e"
                                                stroke-width="1"
                                        >
                                            <circle
                                                    cx="16.571"
                                                    cy="16.571"
                                                    r="16.571"
                                                    stroke="none"
                                            />
                                            <circle cx="16.571" cy="16.571" r="16.071" fill="none" />
                                        </g>
                                        <g
                                                id="Icon_feather-arrow-up-right"
                                                data-name="Icon feather-arrow-up-right"
                                                transform="translate(757.558 1199.117) rotate(-135)"
                                        >
                                            <path
                                                    id="Path_14793"
                                                    data-name="Path 14793"
                                                    d="M10.5,18.361,18.361,10.5"
                                                    transform="translate(-10.5 -10.5)"
                                                    fill="none"
                                                    stroke="#345e3e"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1"
                                            />
                                            <path
                                                    id="Path_14794"
                                                    data-name="Path 14794"
                                                    d="M10.5,10.5h7.861v7.861"
                                                    transform="translate(-10.5 -10.5)"
                                                    fill="none"
                                                    stroke="#345e3e"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1"
                                            />
                                        </g>
                                    </g>
                                </svg>
                                <div class="floor-link-name">{{ $prev_floor->name }}</div>
                            </a>
                        @endif
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        @if($investment->id == 2)
                            <a href="{{ route('show', 'blok-1') }}" class="floor-link">
                        @else
                            <a href="{{ route('show', 'blok-2') }}" class="floor-link">
                        @endif
                                <svg xmlns="http://www.w3.org/2000/svg" width="33.142" height="33.142" viewBox="0 0 33.142 33.142">
                                    <g id="Group_979" data-name="Group 979" transform="translate(-741 -1177)">
                                        <g id="Ellipse_19" data-name="Ellipse 19" transform="translate(741 1210.142) rotate(-90)" fill="none" stroke="#345e3e" stroke-width="1">
                                            <circle cx="16.571" cy="16.571" r="16.571" stroke="none"></circle>
                                            <circle cx="16.571" cy="16.571" r="16.071" fill="none"></circle>
                                        </g>
                                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(757.558 1199.117) rotate(-135)">
                                            <path id="Path_14793" data-name="Path 14793" d="M10.5,18.361,18.361,10.5" transform="translate(-10.5 -10.5)" fill="none" stroke="#345e3e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                            <path id="Path_14794" data-name="Path 14794" d="M10.5,10.5h7.861v7.861" transform="translate(-10.5 -10.5)" fill="none" stroke="#345e3e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                        </g>
                                    </g>
                                </svg>
                                @if($investment->id == 2)
                                    <div class="floor-link-name">Wróć do planu Blok 1</div>
                                        @else
                                    <div class="floor-link-name">Wróć do planu Blok 2</div>
                                @endif
                            </a>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        @if($next_floor)
                            <a href="{{route('floor', [$investment->slug, $next_floor, 'floor_slug' => Str::slug($next_floor->name)])}}" class="floor-link">
                                <div class="floor-link-name">{{ $next_floor->name }}</div>
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="33.142"
                                        height="33.142"
                                        viewBox="0 0 33.142 33.142"
                                >
                                    <g
                                            id="Group_837"
                                            data-name="Group 837"
                                            transform="translate(804.071 5666.385) rotate(-180)"
                                    >
                                        <g
                                                id="Ellipse_19"
                                                data-name="Ellipse 19"
                                                transform="translate(770.929 5666.385) rotate(-90)"
                                                fill="none"
                                                stroke="#345e3e"
                                                stroke-width="1"
                                        >
                                            <circle
                                                    cx="16.571"
                                                    cy="16.571"
                                                    r="16.571"
                                                    stroke="none"
                                            />
                                            <circle cx="16.571" cy="16.571" r="16.071" fill="none" />
                                        </g>
                                        <g
                                                id="Icon_feather-arrow-up-right"
                                                data-name="Icon feather-arrow-up-right"
                                                transform="translate(787.487 5655.359) rotate(-135)"
                                        >
                                            <path
                                                    id="Path_14793"
                                                    data-name="Path 14793"
                                                    d="M10.5,18.361,18.361,10.5"
                                                    transform="translate(-10.5 -10.5)"
                                                    fill="none"
                                                    stroke="#345e3e"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1"
                                            />
                                            <path
                                                    id="Path_14794"
                                                    data-name="Path 14794"
                                                    d="M10.5,10.5h7.861v7.861"
                                                    transform="translate(-10.5 -10.5)"
                                                    fill="none"
                                                    stroke="#345e3e"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <!-- FORM -->
                        <div class="col-12 mb-3 mb-md-0">
                            <div class="apartments-box">
                                <div class="img-box">
                                    @if($floor->file)
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
                                                                class="inline status-{{$r->status}}"
                                                                href="@if($r->status <> 3) {{route('property', [$investment->slug, $floor, 'floor_slug' => Str::slug($floor->name), $r, 'property_slug' => Str::slug($r->name) ])}} @else # @endif" title="<h4 class='mb-2'>{{$r->name}}</h4><ul class='mb-0 list-unstyled mt-0'><li>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b></li><li>Pokoje: <b class=fr>{{$r->rooms}}</b></li><li><b>{{ roomStatus($r->status) }}</b></li></ul>">
                                                    @endif
                                                @endforeach
                                            @endif
                                        </map>
                                    @endif
                                </div>
                                <div class="title text-center fw-bold mt-3 mb-4">
                                    WYSZUKIWARKA
                                </div>
                                <form class="form" action="#roomlist" method="get">
                                    <div class="select-wrapper">
                                        <select name="type" id="" class="form-select form-input" aria-label="Pokoje">
                                            <option value="">Typ mieszkania</option>
                                            <option value="2" @if(request()->input('type') == 2) selected @endif>M2</option>
                                            <option value="3" @if(request()->input('type') == 3) selected @endif>M3</option>
                                            <option value="4" @if(request()->input('type') == 4) selected @endif>M4</option>
                                        </select>
                                    </div>
                                    <div class="select-wrapper">
                                        <select name="area" id="" class="form-select form-input" aria-label="Metraż">
                                            <option value="">Metraż</option>
                                            <option value="40-50" @if(request()->input('area') == "40-50") selected @endif>40-50 m2</option>
                                            <option value="51-60" @if(request()->input('area') == "51-60") selected @endif>51-60 m2</option>
                                            <option value="61-75" @if(request()->input('area') == "61-75") selected @endif>61-75 m2</option>
                                        </select>
                                    </div>
                                    <div class="select-wrapper">
                                        <div class="dropdown dropdown-checkbox">
                                            <button class="form-select form-input text-start" type="button" id="multiSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false">Udogodnienia</button>
                                            <ul class="dropdown-menu" aria-labelledby="multiSelectDropdown" style="">
                                                <li><label><input type="checkbox" name="balcony" value="1" data-title="Balkon" @if(request()->input('balcony')) checked @endif />Balkon</label></li>
                                                <li><label><input type="checkbox" name="garden" value="1" data-title="Ogród" @if(request()->input('garden')) checked @endif />Ogród</label></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">
                                        Szukaj
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="19.971"
                                                height="19.971"
                                                viewBox="0 0 19.971 19.971"
                                        >
                                            <g
                                                    id="Group_816"
                                                    data-name="Group 816"
                                                    transform="translate(-339 -1753.929)"
                                            >
                                                <g
                                                        id="Ellipse_20"
                                                        data-name="Ellipse 20"
                                                        transform="translate(358.971 1753.929) rotate(90)"
                                                        fill="#345e3e"
                                                        stroke="#345e3e"
                                                        stroke-width="1"
                                                >
                                                    <ellipse
                                                            cx="9.985"
                                                            cy="9.985"
                                                            rx="9.985"
                                                            ry="9.985"
                                                            stroke="none"
                                                    />
                                                    <ellipse
                                                            cx="9.985"
                                                            cy="9.985"
                                                            rx="9.485"
                                                            ry="9.485"
                                                            fill="none"
                                                    />
                                                </g>
                                                <g
                                                        id="Icon_feather-arrow-up-right"
                                                        data-name="Icon feather-arrow-up-right"
                                                        transform="translate(348.985 1759.839) rotate(45)"
                                                >
                                                    <path
                                                            id="Path_14793"
                                                            data-name="Path 14793"
                                                            d="M0,5.764,5.764,0"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="1"
                                                    />
                                                    <path
                                                            id="Path_14794"
                                                            data-name="Path 14794"
                                                            d="M0,0H5.764V5.764"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="1"
                                                    />
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="col-12 d-none d-md-flex justify-content-end">
                            <div class="apartment-title">
                                <div class="row apartment-row align-items-center">
                                    <div class="col-12">
                                        <div class="row-grid-btns">
                                            <div class="grid-btn">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="25"
                                                        height="21"
                                                        viewBox="0 0 25 21"
                                                >
                                                    <g
                                                            id="Group_1185"
                                                            data-name="Group 1185"
                                                            transform="translate(-1355 -1409)"
                                                    >
                                                        <rect
                                                                id="Rectangle_1429"
                                                                data-name="Rectangle 1429"
                                                                width="11"
                                                                height="9"
                                                                rx="1"
                                                                transform="translate(1369 1421)"
                                                                fill="#6e8373"
                                                        />
                                                        <rect
                                                                id="Rectangle_1496"
                                                                data-name="Rectangle 1496"
                                                                width="11"
                                                                height="9"
                                                                rx="1"
                                                                transform="translate(1369 1409)"
                                                                fill="#6e8373"
                                                        />
                                                        <rect
                                                                id="Rectangle_1494"
                                                                data-name="Rectangle 1494"
                                                                width="11"
                                                                height="9"
                                                                rx="1"
                                                                transform="translate(1355 1421)"
                                                                fill="#6e8373"
                                                        />
                                                        <rect
                                                                id="Rectangle_1495"
                                                                data-name="Rectangle 1495"
                                                                width="11"
                                                                height="9"
                                                                rx="1"
                                                                transform="translate(1355 1409)"
                                                                fill="#6e8373"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="row-btn active">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="21"
                                                        height="21"
                                                        viewBox="0 0 21 21"
                                                >
                                                    <g
                                                            id="Group_1184"
                                                            data-name="Group 1184"
                                                            transform="translate(-1388 -1409)"
                                                    >
                                                        <rect
                                                                id="Rectangle_1512"
                                                                data-name="Rectangle 1512"
                                                                width="9"
                                                                height="21"
                                                                rx="1"
                                                                transform="translate(1409 1421) rotate(90)"
                                                                fill="#6e8373"
                                                        />
                                                        <rect
                                                                id="Rectangle_1513"
                                                                data-name="Rectangle 1513"
                                                                width="9"
                                                                height="21"
                                                                rx="1"
                                                                transform="translate(1409 1409) rotate(90)"
                                                                fill="#6e8373"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MAIN APARTMENTS COLS -->
                        <div class="row g-4" id="main-ap-axis">
                            <!-- 1 Apartment -->
                            @forelse($properties as $p)
                                <div data-axis="row" class="col-12 d-flex justify-content-end main-ap-box-row">
                                    <!-- bg-success - dostępne -->
                                    <!-- bg-warning - rezerwacja -->
                                    <!-- bg-danger - sprzedane -->
                                    <div class="row"></div>

                                    @if($p->status == 1)
                                        <div class="apartment-tag bg-success">dostępne</div>
                                    @endif
                                    @if($p->status == 2)
                                        <div class="apartment-tag bg-warning">rezerwacja</div>
                                    @endif
                                    @if($p->status == 3)
                                        <div class="apartment-tag bg-danger">sprzedane</div>
                                    @endif
                                    <div class="apartment-box">
                                        <!-- INFO -->
                                        <div class="row apartment-row align-items-lg-center gy-3 gx-3">
                                            <!-- APARTMENT TITLE -->
                                            <div class="col-4 col-lg-2 d-flex justify-md-content-center title">
                                                {{ $p->name }}
                                            </div>
                                            <!-- IMAGE -->
                                            <div class="col-4 col-lg-2 d-flex justify-content-center info-img">
                                                @if($p->type == 1)
                                                <picture>
                                                    <source type="image/webp" srcset="/investment/property/list/webp/{{$p->file_webp}}">
                                                    <source type="image/jpeg" srcset="/investment/property/list/{{$p->file}}">
                                                    <img src="/investment/property/list/{{$p->file}}" alt="{{$p->name}}" class="img-fluid" loading="lazy" width="183" height="129">
                                                </picture>
                                                @endif
                                            </div>

                                            <!-- INFO -->
                                            <div class="col-12 col-lg-6 info-box">
                                                <!-- TYPE -->
                                                <div class="info-text">
                                                    <div class="info-text-name">Typy mieszkań</div>
                                                    <div class="info-text-svg">
                                                        <svg id="plan" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21.047" height="21.047" viewBox="0 0 21.047 21.047"><defs><clipPath id="clip-path"><path id="SVGID_1_" d="M0,0H21.047V21.047H0Z" fill="#345e3e"/></clipPath></defs><g id="Group_967" data-name="Group 967" clip-path="url(#clip-path)"><path id="Path_14843" data-name="Path 14843" d="M19.4,0a1.649,1.649,0,0,0-1.644,1.644v.987H3.321V1.644A1.661,1.661,0,0,0,0,1.644V19.4a1.636,1.636,0,0,0,1.677,1.644H19.4A1.628,1.628,0,0,0,21.047,19.4V1.644A1.649,1.649,0,0,0,19.4,0ZM.658,1.644A.989.989,0,0,1,1.644.658a1.018,1.018,0,0,1,1.019.987L2.631,18.087a1.691,1.691,0,0,0-.987-.329,1.772,1.772,0,0,0-.987.329ZM19.4,20.389H1.644A.989.989,0,0,1,.658,19.4a.9.9,0,0,1,.3-.691.946.946,0,0,1,.691-.3.989.989,0,0,1,.987.987h.658L3.321,3.289H17.758V19.37h.658V19.3a.977.977,0,0,1,.987-.921.9.9,0,0,1,.691.3,1.183,1.183,0,0,1,.3.723.989.989,0,0,1-.987.987Zm.987-2.3a1.552,1.552,0,0,0-.987-.329,1.691,1.691,0,0,0-.987.329V1.644A.969.969,0,0,1,19.4.658a.989.989,0,0,1,.987.987Z" transform="translate(0)" fill="#345e3e"/><path id="Path_14844" data-name="Path 14844" d="M23.214,16.758H24.5v5.558H19.925v.658H24.5v5.591H18.61v-1.94h-.658v1.94H12.658V22.973h5.295v2.3h.658V20.046h-.658v2.269H12.658V16.758h5.295V18.7h.658v-1.94h2.631V16.1H12V29.221H25.154V16.1h-1.94Z" transform="translate(-8.054 -10.805)" fill="#345e3e"/></g></svg>
                                                    </div>

                                                    <div class="info-text-text">{{ apartament_type($p->apartment_type) }}</div>
                                                </div>
                                                <!-- SQUARES -->
                                                <div class="info-text">
                                                    <div class="info-text-name">Metraż</div>
                                                    <div class="info-text-svg">
                                                        <svg id="crop" xmlns="http://www.w3.org/2000/svg" width="21.047" height="21.047" viewBox="0 0 21.047 21.047"><path id="Path_14845" data-name="Path 14845" d="M4.706,5.007H2.3a.3.3,0,0,1-.3-.3V2.3A.3.3,0,0,1,2.3,2H4.706a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,4.706,5.007Zm-2.1-.6h1.8V2.6H2.6Z" transform="translate(-2 -2)" fill="#345e3e"/><path id="Path_14846" data-name="Path 14846" d="M34.706,5.007H32.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,34.706,5.007Zm-2.1-.6h1.8V2.6H32.6Z" transform="translate(-22.98 -2)" fill="#345e3e"/><path id="Path_14847" data-name="Path 14847" d="M64.706,5.007H62.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,64.706,5.007Zm-2.1-.6h1.8V2.6H62.6Z" transform="translate(-43.96 -2)" fill="#345e3e"/><path id="Path_14848" data-name="Path 14848" d="M4.706,65.007H2.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,65.007Zm-2.1-.6h1.8V62.6H2.6Z" transform="translate(-2 -43.96)" fill="#345e3e"/><path id="Path_14849" data-name="Path 14849" d="M4.706,35.007H2.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,35.007Zm-2.1-.6h1.8V32.6H2.6Z" transform="translate(-2 -22.98)" fill="#345e3e"/><path id="Path_14850" data-name="Path 14850" d="M64.706,65.007H62.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,65.007Zm-2.1-.6h1.8V62.6H62.6Z" transform="translate(-43.96 -43.96)" fill="#345e3e"/><path id="Path_14851" data-name="Path 14851" d="M34.706,65.007H32.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,34.706,65.007Zm-2.1-.6h1.8V62.6H32.6Z" transform="translate(-22.98 -43.96)" fill="#345e3e"/><path id="Path_14852" data-name="Path 14852" d="M64.706,35.007H62.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,35.007Zm-2.1-.6h1.8V32.6H62.6Z" transform="translate(-43.96 -22.98)" fill="#345e3e"/><path id="Path_14853" data-name="Path 14853" d="M33.5,35.007a1.5,1.5,0,1,1,1.5-1.5,1.5,1.5,0,0,1-1.5,1.5Zm0-2.405a.9.9,0,1,0,.9.9A.9.9,0,0,0,33.5,32.6Z" transform="translate(-22.98 -22.98)" fill="#345e3e"/><path id="Path_14854" data-name="Path 14854" d="M11,6h6.615v.6H11Z" transform="translate(-8.294 -4.797)" fill="#345e3e"/><path id="Path_14855" data-name="Path 14855" d="M41,6h6.615v.6H41Z" transform="translate(-29.274 -4.797)" fill="#345e3e"/><path id="Path_14856" data-name="Path 14856" d="M6,41h.6v6.615H6Z" transform="translate(-4.797 -29.274)" fill="#345e3e"/><path id="Path_14857" data-name="Path 14857" d="M6,11h.6v6.615H6Z" transform="translate(-4.797 -8.294)" fill="#345e3e"/><path id="Path_14858" data-name="Path 14858" d="M41,66h6.615v.6H41Z" transform="translate(-29.274 -46.757)" fill="#345e3e"/><path id="Path_14859" data-name="Path 14859" d="M11,66h6.615v.6H11Z" transform="translate(-8.294 -46.757)" fill="#345e3e"/><path id="Path_14860" data-name="Path 14860" d="M66,11h.6v6.615H66Z" transform="translate(-46.757 -8.294)" fill="#345e3e"/><path id="Path_14861" data-name="Path 14861" d="M66,41h.6v6.615H66Z" transform="translate(-46.757 -29.274)" fill="#345e3e"/></svg>
                                                    </div>

                                                    <div class="info-text-text">{{ $p->area }} m<sup>2</sup></div>
                                                </div>
                                                <!-- FLOOR -->
                                                <div class="info-text">
                                                    <div class="info-text-name">Piętro</div>

                                                    <div class="info-text-svg">
                                                        <svg id="architecture-and-city" xmlns="http://www.w3.org/2000/svg" width="22.453" height="21.047" viewBox="0 0 22.453 21.047"><path id="Path_14862" data-name="Path 14862" d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0" transform="translate(0 -260.595)" fill="#345e3e"/><path id="Path_14863" data-name="Path 14863" d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0" transform="translate(-168.621 -306.579)" fill="#345e3e"/><path id="Path_14864" data-name="Path 14864" d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0" transform="translate(-329.575 -306.579)" fill="#345e3e"/><path id="Path_14865" data-name="Path 14865" d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0" transform="translate(-91.976 -337.239)" fill="#345e3e"/><path id="Path_14866" data-name="Path 14866" d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0" transform="translate(-15.332 -214.606)" fill="#345e3e"/><path id="Path_14867" data-name="Path 14867" d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0" transform="translate(-15.332 -168.618)" fill="#345e3e"/><path id="Path_14868" data-name="Path 14868" d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0" transform="translate(-15.332 -122.633)" fill="#345e3e"/><path id="Path_14869" data-name="Path 14869" d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0" transform="translate(-459.873 -214.606)" fill="#345e3e"/><path id="Path_14870" data-name="Path 14870" d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0" transform="translate(-459.873 -168.618)" fill="#345e3e"/><path id="Path_14871" data-name="Path 14871" d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0" transform="translate(-459.873 -122.633)" fill="#345e3e"/><path id="Path_14872" data-name="Path 14872" d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0" transform="translate(-144.868 -30.369)" fill="#345e3e"/><path id="Path_14873" data-name="Path 14873" d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0" transform="translate(-184.101 -15.183)" fill="#345e3e"/><path id="Path_14874" data-name="Path 14874" d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0" transform="translate(-223.334 0.001)" fill="#345e3e"/><path id="Path_14875" data-name="Path 14875" d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0" transform="translate(-27.167 -75.931)" fill="#345e3e"/><path id="Path_14876" data-name="Path 14876" d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0" transform="translate(0.001 -91.119)" fill="#345e3e"/><path id="Path_14877" data-name="Path 14877" d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0" transform="translate(-66.4 -60.745)" fill="#345e3e"/><path id="Path_14878" data-name="Path 14878" d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0" transform="translate(-105.635 -45.558)" fill="#345e3e"/><path id="Path_14879" data-name="Path 14879" d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0" transform="translate(-473 -91.121)" fill="#345e3e"/><path id="Path_14880" data-name="Path 14880" d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0" transform="translate(-394.533 -60.745)" fill="#345e3e"/><path id="Path_14881" data-name="Path 14881" d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0" transform="translate(-276.833 -15.185)" fill="#345e3e"/><path id="Path_14882" data-name="Path 14882" d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0" transform="translate(-316.065 -30.372)" fill="#345e3e"/><path id="Path_14883" data-name="Path 14883" d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0" transform="translate(-433.765 -75.933)" fill="#345e3e"/><path id="Path_14884" data-name="Path 14884" d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0" transform="translate(-355.301 -45.559)" fill="#345e3e"/><path id="Path_14885" data-name="Path 14885" d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0" transform="translate(-84.313 -153.29)" fill="#345e3e"/><path id="Path_14886" data-name="Path 14886" d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0" transform="translate(-191.614 -153.289)" fill="#345e3e"/><path id="Path_14887" data-name="Path 14887" d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0" transform="translate(-84.313 -122.633)" fill="#345e3e"/><path id="Path_14888" data-name="Path 14888" d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0" transform="translate(-130.297 -122.633)" fill="#345e3e"/><path id="Path_14889" data-name="Path 14889" d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0" transform="translate(-176.286 -122.633)" fill="#345e3e"/><path id="Path_14890" data-name="Path 14890" d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0" transform="translate(-84.313 -199.278)" fill="#345e3e"/><path id="Path_14891" data-name="Path 14891" d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0" transform="translate(-130.301 -199.278)" fill="#345e3e"/><path id="Path_14892" data-name="Path 14892" d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0" transform="translate(-176.286 -199.278)" fill="#345e3e"/><path id="Path_14893" data-name="Path 14893" d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0" transform="translate(-237.602 -153.29)" fill="#345e3e"/><path id="Path_14894" data-name="Path 14894" d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0" transform="translate(-390.892 -153.289)" fill="#345e3e"/><path id="Path_14895" data-name="Path 14895" d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0" transform="translate(-283.591 -122.633)" fill="#345e3e"/><path id="Path_14896" data-name="Path 14896" d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0" transform="translate(-237.602 -122.633)" fill="#345e3e"/><path id="Path_14897" data-name="Path 14897" d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0" transform="translate(-329.575 -122.633)" fill="#345e3e"/><path id="Path_14898" data-name="Path 14898" d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0" transform="translate(-375.563 -122.633)" fill="#345e3e"/><path id="Path_14899" data-name="Path 14899" d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0" transform="translate(-283.591 -199.278)" fill="#345e3e"/><path id="Path_14900" data-name="Path 14900" d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0" transform="translate(-237.602 -199.278)" fill="#345e3e"/><path id="Path_14901" data-name="Path 14901" d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0" transform="translate(-329.576 -199.278)" fill="#345e3e"/><path id="Path_14902" data-name="Path 14902" d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0" transform="translate(-375.563 -199.278)" fill="#345e3e"/></svg></div>

                                                    <div class="info-text-text">{{ $floor->number }}</div>
                                                </div>
                                                <!-- AMENITIES -->
                                                <div class="info-text">
                                                    <div class="info-text-name">Udogodnienia</div>
                                                    <div class="info-text-svg">
                                                        <svg id="patio" xmlns="http://www.w3.org/2000/svg" width="22.047" height="21.047" viewBox="0 0 22.047 21.047"><path id="Path_14903" data-name="Path 14903" d="M6.631,31.407H3.111V25.8a1,1,0,1,0-1.991,0V37.851a.3.3,0,0,0,.3.3H2.807a.3.3,0,0,0,.3-.3v-.432H6.676v.432a.3.3,0,0,0,.3.3H8.363a.3.3,0,0,0,.3-.3V33.436a2.038,2.038,0,0,0-2.036-2.029ZM3.111,36.814V33.395H6.631a.046.046,0,0,1,.045.045v3.374Zm4.947.736H7.281V33.436a.651.651,0,0,0-.65-.65H2.807a.3.3,0,0,0-.3.3v4.456H1.728V25.792a.391.391,0,0,1,.781,0V31.7a.3.3,0,0,0,.3.3H6.638a1.43,1.43,0,0,1,1.428,1.428V37.55Z" transform="translate(-1.12 -17.115)" fill="#345e3e"/><path id="Path_14904" data-name="Path 14904" d="M49.608,24.8a1,1,0,0,0-1,1v5.611H45.093A2.036,2.036,0,0,0,43.06,33.44v4.415a.3.3,0,0,0,.3.3h1.383a.3.3,0,0,0,.3-.3v-.436h3.564v.432a.3.3,0,0,0,.3.3H50.3a.3.3,0,0,0,.3-.3V25.8a1.006,1.006,0,0,0-1-1Zm-4.56,12.014V33.44a.046.046,0,0,1,.045-.045h3.519v3.419ZM50,37.55h-.778V33.09a.3.3,0,0,0-.3-.3h-3.82a.651.651,0,0,0-.65.65v4.111h-.778V33.436a1.43,1.43,0,0,1,1.428-1.428h3.824a.3.3,0,0,0,.3-.3V25.792a.391.391,0,1,1,.781,0V37.55Z" transform="translate(-28.56 -17.115)" fill="#345e3e"/><path id="Path_14905" data-name="Path 14905" d="M19.169,17a1,1,0,0,0,1-1v-.173H23.01a1.1,1.1,0,0,0,0-2.206H21.053v-.619l1.262-1.262a.3.3,0,0,0-.214-.515H19.4a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H17.893V9.389a1.876,1.876,0,0,0,1.265-.823,1.874,1.874,0,0,0,3.139,0,1.871,1.871,0,0,0,3.44-1.02V6.855a.305.305,0,0,0-.166-.27L17.723,2.606a.293.293,0,0,0-.273,0L9.606,6.585a.305.305,0,0,0-.166.27v.691a1.871,1.871,0,0,0,3.44,1.02,1.874,1.874,0,0,0,3.139,0,1.864,1.864,0,0,0,1.265.823v4.242H14.73v-.619l1.262-1.262a.3.3,0,0,0-.214-.515h-2.7a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H12.168a1.1,1.1,0,1,0,0,2.206h2.845v.173a1,1,0,0,0,1,1h.653v6.005H15.411a.3.3,0,0,0,0,.608h4.363a.3.3,0,1,0,0-.608H18.522V17Zm2.2-5.165-.619.619-.619-.619ZM16.32,7.547a.3.3,0,1,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0v-.5l7.544-3.827,7.54,3.824v.5a1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.264,1.264,0,0,1-2.527,0Zm-1.276,4.29-.619.619-.619-.619ZM11.67,14.731a.5.5,0,0,1,.5-.5H23.01a.5.5,0,0,1,0,1H12.164A.5.5,0,0,1,11.67,14.731Zm3.945,1.276v-.173h3.941v.173a.39.39,0,0,1-.391.391H16a.39.39,0,0,1-.387-.391Zm2.3,7h-.65V17h.65Z" transform="translate(-6.564 -2.573)" fill="#345e3e"/></svg>
                                                    </div>
                                                    <div class="info-text-text">
                                                    @if($p->balcony_area)
                                                        Balkon
                                                    @endif
                                                    @if($p->garden_area)
                                                        Ogródek
                                                    @endif
                                                    @if($p->terrace_area)
                                                        Taras
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- BUTTON -->
                                            <div class="col-12 col-lg-2 d-flex justify-content-center justify-content-lg-end" id="ap-btn">
                                                <a class="btn btn-primary z-1 position-relative" href="{{route('property', [$investment->slug, $floor, 'floor_slug' => Str::slug($floor->name), $p, 'property_slug' => Str::slug($p->name) ])}}">
                                                    Sprawdź
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.971" height="19.971" viewBox="0 0 19.971 19.971"><g id="Group_816" data-name="Group 816" transform="translate(-339 -1753.929)"><g id="Ellipse_20" data-name="Ellipse 20" transform="translate(358.971 1753.929) rotate(90)" fill="#345e3e" stroke="#345e3e" stroke-width="1"><ellipse cx="9.985" cy="9.985" rx="9.985" ry="9.985" stroke="none"/><ellipse cx="9.985" cy="9.985" rx="9.485" ry="9.485" fill="none"/></g><g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(348.985 1759.839) rotate(45)"><path id="Path_14793" data-name="Path 14793" d="M0,5.764,5.764,0" fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path id="Path_14794" data-name="Path 14794" d="M0,0H5.764V5.764" fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- MAJOR A TAG -->
                                        <a href="{{route('property', [$investment->slug, $floor, 'floor_slug' => Str::slug($floor->name), $p, 'property_slug' => Str::slug($p->name) ])}}" class="whole-box z-0"></a>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">Brak wyników. Zmień kryteria wyszukiwania i spróbuj ponownie.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
@endpush
