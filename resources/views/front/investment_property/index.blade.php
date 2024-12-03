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
                                <li class="breadcrumb-item">
                                    <a href="{{ route('show', $investment->slug) }}">{{ $floor->name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $property->name }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------- -->
        <!-- Hero  ||  Mieszkanie  -->
        <!-- ---------- -->
        <section class="margin-below-breadcrumb">
            <!-- ---------- -->
            <!-- Buttons preview / next  -->
            <!-- ---------- -->
            <div class="container mb-5">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="floor-link">
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
                            <div class="floor-link-name">poprzednie</div>
                        </a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="#" class="floor-link">
                            <div class="floor-link-name">następne</div>
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
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="col-10 offset-1 offset-sm-0 col-lg-5">
                        <!-- TITLE -->
                        <h1 class="header-1 mb-30px" data-aos="fade-up">{{ $property->name }}</h1>
                        <!-- TAG -->
                        @if($property->status == 1)
                            <div class="apartment-ap-tag mb-4 bg-success" data-aos="fade-up" data-aos-delay="200">{{ roomStatus($property->status) }}</div>
                        @endif
                        @if($property->status == 2)
                            <div class="apartment-ap-tag mb-4 bg-warning" data-aos="fade-up" data-aos-delay="200">{{ roomStatus($property->status) }}</div>
                        @endif
                        @if($property->status == 3)
                            <div class="apartment-ap-tag mb-4 bg-danger" data-aos="fade-up" data-aos-delay="200">{{ roomStatus($property->status) }}</div>
                        @endif

                        <!-- PARAGRAPH -->
                        <div class="mb-5 d-none">
                            <p
                                    class="paragraph text-pretty mb-4 text fw-bold"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                            >
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor.
                            </p>
                            <p
                                    class="paragraph text-pretty text"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                            >
                                At vero eos et accusam et justo duo dolores et ea rebum. Lorem
                                ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor.
                            </p>
                        </div>

                        <!-- INFO BOXES -->
                        <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-10">
                                <div class="row">
                                    <!-- TYPE -->
                                    <div class="col-3">
                                        <div class="ap-info">
                                            <div class="ap-info-svg">
                                                <svg
                                                        id="plan"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        width="21.047"
                                                        height="21.047"
                                                        viewBox="0 0 21.047 21.047"
                                                >
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <path
                                                                    id="SVGID_1_"
                                                                    d="M0,0H21.047V21.047H0Z"
                                                                    fill="#345e3e"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                    <g
                                                            id="Group_967"
                                                            data-name="Group 967"
                                                            clip-path="url(#clip-path)"
                                                    >
                                                        <path
                                                                id="Path_14843"
                                                                data-name="Path 14843"
                                                                d="M19.4,0a1.649,1.649,0,0,0-1.644,1.644v.987H3.321V1.644A1.661,1.661,0,0,0,0,1.644V19.4a1.636,1.636,0,0,0,1.677,1.644H19.4A1.628,1.628,0,0,0,21.047,19.4V1.644A1.649,1.649,0,0,0,19.4,0ZM.658,1.644A.989.989,0,0,1,1.644.658a1.018,1.018,0,0,1,1.019.987L2.631,18.087a1.691,1.691,0,0,0-.987-.329,1.772,1.772,0,0,0-.987.329ZM19.4,20.389H1.644A.989.989,0,0,1,.658,19.4a.9.9,0,0,1,.3-.691.946.946,0,0,1,.691-.3.989.989,0,0,1,.987.987h.658L3.321,3.289H17.758V19.37h.658V19.3a.977.977,0,0,1,.987-.921.9.9,0,0,1,.691.3,1.183,1.183,0,0,1,.3.723.989.989,0,0,1-.987.987Zm.987-2.3a1.552,1.552,0,0,0-.987-.329,1.691,1.691,0,0,0-.987.329V1.644A.969.969,0,0,1,19.4.658a.989.989,0,0,1,.987.987Z"
                                                                transform="translate(0)"
                                                                fill="#345e3e"
                                                        />
                                                        <path
                                                                id="Path_14844"
                                                                data-name="Path 14844"
                                                                d="M23.214,16.758H24.5v5.558H19.925v.658H24.5v5.591H18.61v-1.94h-.658v1.94H12.658V22.973h5.295v2.3h.658V20.046h-.658v2.269H12.658V16.758h5.295V18.7h.658v-1.94h2.631V16.1H12V29.221H25.154V16.1h-1.94Z"
                                                                transform="translate(-8.054 -10.805)"
                                                                fill="#345e3e"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="ap-info-text">{!! apartament_type($property->apartment_type) !!}</div>
                                        </div>
                                    </div>
                                    <!-- SQUARES -->
                                    <div class="col-3">
                                        <div class="ap-info">
                                            <div class="ap-info-svg">
                                                <svg
                                                        id="crop"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="21.047"
                                                        height="21.047"
                                                        viewBox="0 0 21.047 21.047"
                                                >
                                                    <path
                                                            id="Path_14845"
                                                            data-name="Path 14845"
                                                            d="M4.706,5.007H2.3a.3.3,0,0,1-.3-.3V2.3A.3.3,0,0,1,2.3,2H4.706a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,4.706,5.007Zm-2.1-.6h1.8V2.6H2.6Z"
                                                            transform="translate(-2 -2)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14846"
                                                            data-name="Path 14846"
                                                            d="M34.706,5.007H32.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,34.706,5.007Zm-2.1-.6h1.8V2.6H32.6Z"
                                                            transform="translate(-22.98 -2)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14847"
                                                            data-name="Path 14847"
                                                            d="M64.706,5.007H62.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,64.706,5.007Zm-2.1-.6h1.8V2.6H62.6Z"
                                                            transform="translate(-43.96 -2)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14848"
                                                            data-name="Path 14848"
                                                            d="M4.706,65.007H2.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,65.007Zm-2.1-.6h1.8V62.6H2.6Z"
                                                            transform="translate(-2 -43.96)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14849"
                                                            data-name="Path 14849"
                                                            d="M4.706,35.007H2.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,35.007Zm-2.1-.6h1.8V32.6H2.6Z"
                                                            transform="translate(-2 -22.98)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14850"
                                                            data-name="Path 14850"
                                                            d="M64.706,65.007H62.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,65.007Zm-2.1-.6h1.8V62.6H62.6Z"
                                                            transform="translate(-43.96 -43.96)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14851"
                                                            data-name="Path 14851"
                                                            d="M34.706,65.007H32.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,34.706,65.007Zm-2.1-.6h1.8V62.6H32.6Z"
                                                            transform="translate(-22.98 -43.96)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14852"
                                                            data-name="Path 14852"
                                                            d="M64.706,35.007H62.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,35.007Zm-2.1-.6h1.8V32.6H62.6Z"
                                                            transform="translate(-43.96 -22.98)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14853"
                                                            data-name="Path 14853"
                                                            d="M33.5,35.007a1.5,1.5,0,1,1,1.5-1.5,1.5,1.5,0,0,1-1.5,1.5Zm0-2.405a.9.9,0,1,0,.9.9A.9.9,0,0,0,33.5,32.6Z"
                                                            transform="translate(-22.98 -22.98)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14854"
                                                            data-name="Path 14854"
                                                            d="M11,6h6.615v.6H11Z"
                                                            transform="translate(-8.294 -4.797)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14855"
                                                            data-name="Path 14855"
                                                            d="M41,6h6.615v.6H41Z"
                                                            transform="translate(-29.274 -4.797)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14856"
                                                            data-name="Path 14856"
                                                            d="M6,41h.6v6.615H6Z"
                                                            transform="translate(-4.797 -29.274)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14857"
                                                            data-name="Path 14857"
                                                            d="M6,11h.6v6.615H6Z"
                                                            transform="translate(-4.797 -8.294)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14858"
                                                            data-name="Path 14858"
                                                            d="M41,66h6.615v.6H41Z"
                                                            transform="translate(-29.274 -46.757)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14859"
                                                            data-name="Path 14859"
                                                            d="M11,66h6.615v.6H11Z"
                                                            transform="translate(-8.294 -46.757)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14860"
                                                            data-name="Path 14860"
                                                            d="M66,11h.6v6.615H66Z"
                                                            transform="translate(-46.757 -8.294)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14861"
                                                            data-name="Path 14861"
                                                            d="M66,41h.6v6.615H66Z"
                                                            transform="translate(-46.757 -29.274)"
                                                            fill="#345e3e"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="ap-info-text">{{ $property->area }}<sup>2</sup></div>
                                        </div>
                                    </div>
                                    <!-- FLOOR -->
                                    <div class="col-3">
                                        <div class="ap-info">
                                            <div class="ap-info-svg">
                                                <svg
                                                        id="architecture-and-city"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="22.453"
                                                        height="21.047"
                                                        viewBox="0 0 22.453 21.047"
                                                >
                                                    <path
                                                            id="Path_14862"
                                                            data-name="Path 14862"
                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                            transform="translate(0 -260.595)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14863"
                                                            data-name="Path 14863"
                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                            transform="translate(-168.621 -306.579)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14864"
                                                            data-name="Path 14864"
                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                            transform="translate(-329.575 -306.579)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14865"
                                                            data-name="Path 14865"
                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                            transform="translate(-91.976 -337.239)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14866"
                                                            data-name="Path 14866"
                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                            transform="translate(-15.332 -214.606)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14867"
                                                            data-name="Path 14867"
                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                            transform="translate(-15.332 -168.618)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14868"
                                                            data-name="Path 14868"
                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                            transform="translate(-15.332 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14869"
                                                            data-name="Path 14869"
                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                            transform="translate(-459.873 -214.606)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14870"
                                                            data-name="Path 14870"
                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                            transform="translate(-459.873 -168.618)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14871"
                                                            data-name="Path 14871"
                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                            transform="translate(-459.873 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14872"
                                                            data-name="Path 14872"
                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                            transform="translate(-144.868 -30.369)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14873"
                                                            data-name="Path 14873"
                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                            transform="translate(-184.101 -15.183)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14874"
                                                            data-name="Path 14874"
                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                            transform="translate(-223.334 0.001)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14875"
                                                            data-name="Path 14875"
                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                            transform="translate(-27.167 -75.931)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14876"
                                                            data-name="Path 14876"
                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                            transform="translate(0.001 -91.119)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14877"
                                                            data-name="Path 14877"
                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                            transform="translate(-66.4 -60.745)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14878"
                                                            data-name="Path 14878"
                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                            transform="translate(-105.635 -45.558)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14879"
                                                            data-name="Path 14879"
                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                            transform="translate(-473 -91.121)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14880"
                                                            data-name="Path 14880"
                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                            transform="translate(-394.533 -60.745)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14881"
                                                            data-name="Path 14881"
                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                            transform="translate(-276.833 -15.185)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14882"
                                                            data-name="Path 14882"
                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                            transform="translate(-316.065 -30.372)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14883"
                                                            data-name="Path 14883"
                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                            transform="translate(-433.765 -75.933)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14884"
                                                            data-name="Path 14884"
                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                            transform="translate(-355.301 -45.559)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14885"
                                                            data-name="Path 14885"
                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                            transform="translate(-84.313 -153.29)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14886"
                                                            data-name="Path 14886"
                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                            transform="translate(-191.614 -153.289)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14887"
                                                            data-name="Path 14887"
                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                            transform="translate(-84.313 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14888"
                                                            data-name="Path 14888"
                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                            transform="translate(-130.297 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14889"
                                                            data-name="Path 14889"
                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                            transform="translate(-176.286 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14890"
                                                            data-name="Path 14890"
                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                            transform="translate(-84.313 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14891"
                                                            data-name="Path 14891"
                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                            transform="translate(-130.301 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14892"
                                                            data-name="Path 14892"
                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                            transform="translate(-176.286 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14893"
                                                            data-name="Path 14893"
                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                            transform="translate(-237.602 -153.29)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14894"
                                                            data-name="Path 14894"
                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                            transform="translate(-390.892 -153.289)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14895"
                                                            data-name="Path 14895"
                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                            transform="translate(-283.591 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14896"
                                                            data-name="Path 14896"
                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                            transform="translate(-237.602 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14897"
                                                            data-name="Path 14897"
                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                            transform="translate(-329.575 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14898"
                                                            data-name="Path 14898"
                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                            transform="translate(-375.563 -122.633)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14899"
                                                            data-name="Path 14899"
                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                            transform="translate(-283.591 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14900"
                                                            data-name="Path 14900"
                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                            transform="translate(-237.602 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14901"
                                                            data-name="Path 14901"
                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                            transform="translate(-329.576 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14902"
                                                            data-name="Path 14902"
                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                            transform="translate(-375.563 -199.278)"
                                                            fill="#345e3e"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="ap-info-text">{{ $property->rooms }}</div>
                                        </div>
                                    </div>
                                    <!-- AMENITIES -->
                                    <div class="col-3">
                                        <div class="ap-info">
                                            <div class="ap-info-svg">
                                                <svg
                                                        id="patio"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="22.047"
                                                        height="21.047"
                                                        viewBox="0 0 22.047 21.047"
                                                >
                                                    <path
                                                            id="Path_14903"
                                                            data-name="Path 14903"
                                                            d="M6.631,31.407H3.111V25.8a1,1,0,1,0-1.991,0V37.851a.3.3,0,0,0,.3.3H2.807a.3.3,0,0,0,.3-.3v-.432H6.676v.432a.3.3,0,0,0,.3.3H8.363a.3.3,0,0,0,.3-.3V33.436a2.038,2.038,0,0,0-2.036-2.029ZM3.111,36.814V33.395H6.631a.046.046,0,0,1,.045.045v3.374Zm4.947.736H7.281V33.436a.651.651,0,0,0-.65-.65H2.807a.3.3,0,0,0-.3.3v4.456H1.728V25.792a.391.391,0,0,1,.781,0V31.7a.3.3,0,0,0,.3.3H6.638a1.43,1.43,0,0,1,1.428,1.428V37.55Z"
                                                            transform="translate(-1.12 -17.115)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14904"
                                                            data-name="Path 14904"
                                                            d="M49.608,24.8a1,1,0,0,0-1,1v5.611H45.093A2.036,2.036,0,0,0,43.06,33.44v4.415a.3.3,0,0,0,.3.3h1.383a.3.3,0,0,0,.3-.3v-.436h3.564v.432a.3.3,0,0,0,.3.3H50.3a.3.3,0,0,0,.3-.3V25.8a1.006,1.006,0,0,0-1-1Zm-4.56,12.014V33.44a.046.046,0,0,1,.045-.045h3.519v3.419ZM50,37.55h-.778V33.09a.3.3,0,0,0-.3-.3h-3.82a.651.651,0,0,0-.65.65v4.111h-.778V33.436a1.43,1.43,0,0,1,1.428-1.428h3.824a.3.3,0,0,0,.3-.3V25.792a.391.391,0,1,1,.781,0V37.55Z"
                                                            transform="translate(-28.56 -17.115)"
                                                            fill="#345e3e"
                                                    />
                                                    <path
                                                            id="Path_14905"
                                                            data-name="Path 14905"
                                                            d="M19.169,17a1,1,0,0,0,1-1v-.173H23.01a1.1,1.1,0,0,0,0-2.206H21.053v-.619l1.262-1.262a.3.3,0,0,0-.214-.515H19.4a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H17.893V9.389a1.876,1.876,0,0,0,1.265-.823,1.874,1.874,0,0,0,3.139,0,1.871,1.871,0,0,0,3.44-1.02V6.855a.305.305,0,0,0-.166-.27L17.723,2.606a.293.293,0,0,0-.273,0L9.606,6.585a.305.305,0,0,0-.166.27v.691a1.871,1.871,0,0,0,3.44,1.02,1.874,1.874,0,0,0,3.139,0,1.864,1.864,0,0,0,1.265.823v4.242H14.73v-.619l1.262-1.262a.3.3,0,0,0-.214-.515h-2.7a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H12.168a1.1,1.1,0,1,0,0,2.206h2.845v.173a1,1,0,0,0,1,1h.653v6.005H15.411a.3.3,0,0,0,0,.608h4.363a.3.3,0,1,0,0-.608H18.522V17Zm2.2-5.165-.619.619-.619-.619ZM16.32,7.547a.3.3,0,1,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0v-.5l7.544-3.827,7.54,3.824v.5a1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.264,1.264,0,0,1-2.527,0Zm-1.276,4.29-.619.619-.619-.619ZM11.67,14.731a.5.5,0,0,1,.5-.5H23.01a.5.5,0,0,1,0,1H12.164A.5.5,0,0,1,11.67,14.731Zm3.945,1.276v-.173h3.941v.173a.39.39,0,0,1-.391.391H16a.39.39,0,0,1-.387-.391Zm2.3,7h-.65V17h.65Z"
                                                            transform="translate(-6.564 -2.573)"
                                                            fill="#345e3e"
                                                    />
                                                </svg>
                                            </div>
                                                <div class="ap-info-text">
                                                    @if($property->balcony_area)
                                                        Balkon
                                                    @endif
                                                    @if($property->garden_area)
                                                        Ogródek
                                                    @endif
                                                    @if($property->terrace_area)
                                                        Taras
                                                    @endif
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                                class="d-flex flex-column flex-sm-row gap-2 gap-sm-6"
                                data-aos="fade-up"
                                data-aos-delay="300"
                        >
                            <!-- BUTTON || Link-->
                            <a class="btn btn-primary" href="#kontakt">
                                Zapytaj o ofertę
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
                            </a>
                            <!-- BUTTON || PDF -->
                            @if($property->file_pdf)
                            <a class="btn btn-primary" href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank">
                                Pobierz kartę .pdf
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
                            </a>
                            @endif
                        </div>
                    </div>

                    <!-- IMAGE -->
                    <div class="col-12 offset-lg-1 col-lg-6 mt-5 mt-lg-0" data-aos="fade">
                        <div class="property-img">
                        @if($property->file)
                            <a href="{{ asset('/investment/property/'.$property->file) }}" class="swipebox">
                                <picture>
                                    <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                    <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                    <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}">
                                </picture>
                            </a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- FEATURES -->
        <!-- ---------- -->
        <section class="margin-xs">
            <div class="container">
                <div class="row gy-3 gy-md-0">
                    <div class="col-12 col-md-4" data-aos="fade" data-aos-delay="200">
                        <div class="features">
                            <div class="icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="72.065"
                                        height="76.569"
                                        viewBox="0 0 72.065 76.569"
                                >
                                    <g
                                            id="_x35_3_Kitchen_Table"
                                            transform="translate(-32.343 -18.363)"
                                    >
                                        <g
                                                id="Group_1255"
                                                data-name="Group 1255"
                                                transform="translate(32.343 18.363)"
                                        >
                                            <path
                                                    id="Path_15044"
                                                    data-name="Path 15044"
                                                    d="M101.827,209.3h-66.9a2.583,2.583,0,0,0-2.58,2.581v2.045a2.583,2.583,0,0,0,2.58,2.581H36.16v31.321a1.126,1.126,0,0,0,1.126,1.126H41.57l-.887,4.825a1.126,1.126,0,0,0,2.215.407l.962-5.232H60.429l.962,5.232a1.126,1.126,0,0,0,2.215-.407l-.888-4.825H74.033l-.888,4.825a1.126,1.126,0,0,0,2.215.407l.962-5.232H92.892l.962,5.232a1.126,1.126,0,0,0,2.215-.407l-.888-4.825h4.284a1.126,1.126,0,0,0,1.126-1.126V216.506h1.236a2.584,2.584,0,0,0,2.581-2.581V211.88a2.584,2.584,0,0,0-2.581-2.581ZM44.274,246.7l.692-3.762H59.322l.692,3.762Zm14.6-21.192.03,2.731-.918,0-.012,0H46.317a1.073,1.073,0,0,0-.164.029l-.736,0-.031-2.762H58.871Zm-11.616,4.984h9.779l1.875,10.195H45.38ZM76.736,246.7l.692-3.762H91.786l.692,3.762Zm14.6-21.192.03,2.731-.918,0-.012,0H78.78a1.074,1.074,0,0,0-.164.029l-.736,0-.031-2.762H91.334Zm-11.617,4.984H89.5l1.875,10.195H77.843ZM98.339,246.7H94.767l-2.989-16.25a2.222,2.222,0,0,0,1.807-2.179v-2.793a2.223,2.223,0,0,0-2.221-2.221H77.85a2.223,2.223,0,0,0-2.221,2.221v2.793a2.222,2.222,0,0,0,1.807,2.179L74.447,246.7H62.3l-2.989-16.25a2.222,2.222,0,0,0,1.807-2.179v-2.793a2.223,2.223,0,0,0-2.221-2.221H45.387a2.223,2.223,0,0,0-2.221,2.221v2.793a2.222,2.222,0,0,0,1.807,2.179L41.984,246.7H38.412V216.506H98.339Zm3.817-32.776a.329.329,0,0,1-.329.329h-66.9a.329.329,0,0,1-.328-.329V211.88a.329.329,0,0,1,.328-.329h66.9a.329.329,0,0,1,.329.329Z"
                                                    transform="translate(-32.343 -178.538)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_15045"
                                                    data-name="Path 15045"
                                                    d="M121.266,18.363a1.126,1.126,0,0,0-1.126,1.126v6.825a9.2,9.2,0,0,0-8.065,9.124,1.126,1.126,0,0,0,1.126,1.126h3.175a4.963,4.963,0,0,0,9.781,0h3.174a1.126,1.126,0,0,0,1.126-1.126,9.2,9.2,0,0,0-8.065-9.122V19.489a1.126,1.126,0,0,0-1.126-1.126Zm.008,20.069a2.721,2.721,0,0,1-2.58-1.868h5.159A2.725,2.725,0,0,1,121.274,38.432Zm6.841-4.12h-13.7a6.939,6.939,0,0,1,13.7,0Z"
                                                    transform="translate(-99.23 -18.363)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_15046"
                                                    data-name="Path 15046"
                                                    d="M295.012,18.363a1.126,1.126,0,0,0-1.126,1.126v6.825a9.2,9.2,0,0,0-8.065,9.124,1.126,1.126,0,0,0,1.126,1.126h3.175a4.962,4.962,0,0,0,9.781,0h3.174a1.126,1.126,0,0,0,1.126-1.126,9.2,9.2,0,0,0-8.065-9.122V19.489A1.126,1.126,0,0,0,295.012,18.363Zm.008,20.069a2.721,2.721,0,0,1-2.58-1.868H297.6A2.725,2.725,0,0,1,295.02,38.432Zm6.841-4.12h-13.7a6.939,6.939,0,0,1,13.7,0Z"
                                                    transform="translate(-244.984 -18.363)"
                                                    fill="#fffbf5"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="title">WYSOKI STANDARD WYKOŃCZENIA</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade" data-aos-delay="200">
                        <div class="features">
                            <div class="icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="72.065"
                                        height="64.388"
                                        viewBox="0 0 72.065 64.388"
                                >
                                    <g id="map" transform="translate(0 -27.272)">
                                        <g
                                                id="Group_1257"
                                                data-name="Group 1257"
                                                transform="translate(0 27.272)"
                                        >
                                            <g
                                                    id="Group_1256"
                                                    data-name="Group 1256"
                                                    transform="translate(0 0)"
                                            >
                                                <path
                                                        id="Path_15047"
                                                        data-name="Path 15047"
                                                        d="M72.05,90.414l-4.222-23.28a1.058,1.058,0,1,0-2.081.377l1.785,9.843L53.769,61.368,63.025,59.3l1.371.763.6,3.282a1.058,1.058,0,1,0,2.082-.377l-.685-3.774a1.057,1.057,0,0,0-.526-.735l-2.16-1.2h0l-6.825-3.8h0l-5.266-2.931h0a1.05,1.05,0,0,0-.125-.059l-.041-.013c-.03-.01-.06-.02-.09-.028l-.052-.01c-.027-.005-.054-.011-.082-.014l-.056,0c-.027,0-.053,0-.08,0l-.057,0c-.026,0-.052,0-.079.008l-.057.01-.076.018-.057.017c-.024.008-.049.018-.073.028l-.055.025-.024.011-2.416,1.26a20.569,20.569,0,0,0,2.706-9.7,14.8,14.8,0,1,0-29.592,0,20.633,20.633,0,0,0,2.758,9.8l-2.6-1.357-.025-.011-.054-.024c-.024-.01-.049-.02-.074-.028l-.056-.017-.076-.018-.057-.01c-.026,0-.052-.006-.078-.008l-.058,0c-.026,0-.052,0-.078,0l-.058,0c-.026,0-.052.008-.078.013s-.037.006-.055.011-.057.017-.085.027l-.045.015a1.066,1.066,0,0,0-.125.059h0L6.205,58.459a1.057,1.057,0,0,0-.526.735L1.665,81.326a1.058,1.058,0,0,0,2.082.377l1.2-6.639,13.69-7.237-1.1,14.215L2.457,88.815l.531-2.928A1.058,1.058,0,1,0,.907,85.51l-.889,4.9a1.058,1.058,0,0,0,1.474,1.154L18.546,83.91l17.048,7.654h0l.006,0,.029.011.047.018.047.016.03.009.04.01.066.013.032.006.022,0a1.04,1.04,0,0,0,.107.007h.02a1.054,1.054,0,0,0,.128-.009h.016l.024-.005a1.008,1.008,0,0,0,.1-.022l.027-.006h0l.009,0a1.048,1.048,0,0,0,.121-.045L53.521,83.91l17.055,7.658c.016.007.033.013.05.019l.05.019c.022.007.045.013.067.019l.042.011c.027.006.055.01.082.014l.029,0a1.044,1.044,0,0,0,.113.006h0a1.07,1.07,0,0,0,.154-.013l.035-.006a1.031,1.031,0,0,0,.15-.038l.009,0a.98.98,0,0,0,.1-.039l.026-.015c.027-.013.052-.029.078-.045s.051-.031.075-.049l.026-.017c.019-.014.035-.031.052-.047s.028-.024.042-.037a1.009,1.009,0,0,0,.089-.1l.016-.019a1.056,1.056,0,0,0,.084-.134c.007-.013.012-.027.019-.041a1.082,1.082,0,0,0,.044-.1c.006-.018.011-.036.017-.055s.018-.066.024-.1.007-.039.01-.059a1.077,1.077,0,0,0,.008-.109c0-.017,0-.034,0-.052A.983.983,0,0,0,72.05,90.414ZM53.458,53.976l-1.084.254-.069-.9ZM51.15,65.831l-4.417-3.449a1.058,1.058,0,0,0-1.073-.136L37.1,65.973V64.814A49.684,49.684,0,0,0,40.932,61.3l9.543-4.192Zm-.984-12.7.135,1.744L44.34,57.492q.888-1.1,1.656-2.189Zm-28.265,0,4.384,2.286q.974,1.37,2.136,2.758c.678.809,1.353,1.561,2,2.25l-8.988-1.286Zm-3.067,12.2-13.4,7.085.653-3.6.017-.093,13-6.852ZM19.3,59.38,6.58,66.081l1.091-6.016,12.092-6.731-.3,3.924Zm.363,22.71,1-12.931L33.154,88.15Zm15.318-4.077L28.46,67.744l6.516.78Zm0-11.62L26.5,65.379A1.058,1.058,0,0,0,25.48,67l9.5,14.966v5.108L20.926,65.716l.346-4.466,11.67,1.67c.88.817,1.594,1.423,2.033,1.785v1.688ZM36.1,62.887c-2.671-2.253-12.681-11.33-12.681-20.818a12.681,12.681,0,1,1,25.362,0C48.782,51.557,38.772,60.634,36.1,62.887Zm.99,26.081v-4.7l3.162,3.275ZM42.3,86.627l-5.213-5.4V68.281l8.835-3.845,5.444,4.251,1.038,13.4ZM52.538,56.363l3.667-.858,2.6,1.448,1.439.8-7.47,1.667Zm1.989,25.68L53.7,71.381,67.29,87.773ZM53.418,67.724l-.287-3.712-.012-.157L68.277,81.462l.972,5.359Z"
                                                        transform="translate(0 -27.272)"
                                                        fill="#fffbf5"
                                                />
                                            </g>
                                        </g>
                                        <g
                                                id="Group_1259"
                                                data-name="Group 1259"
                                                transform="translate(29.564 35.531)"
                                        >
                                            <g id="Group_1258" data-name="Group 1258">
                                                <path
                                                        id="Path_15048"
                                                        data-name="Path 15048"
                                                        d="M216.579,85.95a1.058,1.058,0,1,0,0,2.116,4.422,4.422,0,1,1-3.154,1.323,1.058,1.058,0,0,0-1.509-1.482,6.537,6.537,0,1,0,4.663-1.956Z"
                                                        transform="translate(-210.042 -85.95)"
                                                        fill="#fffbf5"
                                                />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="title">
                                DOGODNA <br />
                                LOKALIZACJA
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade" data-aos-delay="200">
                        <div class="features">
                            <div class="icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="56.251"
                                        height="64.388"
                                        viewBox="0 0 56.251 64.388"
                                >
                                    <path
                                            id="efficiency"
                                            d="M76.443,69.428H67.071v3.731a2.66,2.66,0,0,0,2.649,2.649H83.165a2.66,2.66,0,0,0,2.649-2.649V69.428Zm25.223-13.341a1.08,1.08,0,1,1-1.082,1.869l-3.016-1.741a1.08,1.08,0,1,1,1.082-1.869Zm1.317-21.443a1.081,1.081,0,1,1,.558,2.088l-3.364.9a1.081,1.081,0,1,1-.558-2.088ZM53.172,59.462a1.08,1.08,0,1,1-1.082-1.869L55.1,55.853a1.08,1.08,0,1,1,1.082,1.869ZM48.894,38.413a1.081,1.081,0,1,1,.558-2.088l3.364.9a1.081,1.081,0,0,1-.558,2.088ZM60.756,20.5a1.08,1.08,0,1,1,1.869-1.082l1.741,3.016A1.08,1.08,0,1,1,62.5,23.519Zm28-1.948a1.078,1.078,0,1,1,1.869,1.074l-1.741,3.016a1.078,1.078,0,0,1-1.869-1.074l1.741-3.016Zm-1.921,38.63a1.082,1.082,0,1,1,2.164,0v2.488c.293-.4.6-.809.9-1.219,2.452-3.275,5.217-6.967,5.217-14.681a18.675,18.675,0,1,0-37.35,0c0,13.6,8.6,14.724,9.263,23.488H74.7V59.577c-4.281-1.084-8.005-4.5-10.317-8.507a19.942,19.942,0,0,1-2.592-7.657,13.483,13.483,0,0,1,.981-7.152h0a1.078,1.078,0,0,1,1.072-.622,13.5,13.5,0,0,1,6.693,2.728,20.147,20.147,0,0,1,5.713,6.754l.162-.287h0a19.929,19.929,0,0,1,5.334-6.069,13.5,13.5,0,0,1,6.693-2.728,1.078,1.078,0,0,1,1.072.622h0a13.482,13.482,0,0,1,.981,7.152,20.628,20.628,0,0,1-7.927,13.731,14.042,14.042,0,0,1-5.7,2.592v7.131H86.9a1.082,1.082,0,0,1,1.082,1.082v4.813a4.825,4.825,0,0,1-4.814,4.814H81.8v1.821A2.613,2.613,0,0,1,79.192,82.4h-5.5a2.613,2.613,0,0,1-2.609-2.608V77.973H69.721a4.825,4.825,0,0,1-4.814-4.814V68.346c0-8.627-9.3-9.74-9.3-24.571a20.839,20.839,0,1,1,41.679,0c0,8.42-3,12.424-5.657,15.974-.446.6-.882,1.177-1.288,1.764l3.4-1.225a1.078,1.078,0,1,1,.727,2.029l-6.087,2.194a1.08,1.08,0,0,1-1.542-.98V57.186ZM80.058,50.48a1.078,1.078,0,1,1,1.869,1.074l-3.361,5.821c5.208-2.2,9.143-8.2,9.777-13.8a11.882,11.882,0,0,0-.5-5.282c-3.938.726-7.47,3.992-9.568,7.625h0c-1.962,3.4-2.98,7.626-2.072,11.24Zm-6.206,5.888-2.78-4.815a1.078,1.078,0,1,1,1.869-1.074l.927,1.606a19.216,19.216,0,0,1,1.187-4.454q-.182-.427-.4-.874A18.093,18.093,0,0,0,69.25,40.1a11.872,11.872,0,0,0-4.817-2.207c-1.338,3.767-.286,8.464,1.815,12.1a16.314,16.314,0,0,0,7.726,7.087q-.07-.353-.122-.716Zm5.785,23.427V77.973H73.249v1.822a.448.448,0,0,0,.444.444h5.5A.448.448,0,0,0,79.637,79.795Z"
                                            transform="translate(-48.092 -18.015)"
                                            fill="#fffbf5"
                                            fill-rule="evenodd"
                                    />
                                </svg>
                            </div>
                            <div class="title">ENERGOOSZCZĘDNOŚĆ</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- CONTACT FORM -->
        <!-- ---------- -->
        <section class="margin-sm" id="kontakt">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag row-tag-contact">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-10 col-lg-4 mb-3 mb-lg-0">
                        <!-- TITLE -->
                        <h2 class="header-1 mb-30px contact-title" data-aos="fade-up">
                            Zapytaj <br />
                            o mieszkanie
                        </h2>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-3"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Masz pytania lub potrzebujesz więcej informacji? Skorzystaj z
                            naszego formularza kontaktowego – to szybki i prosty sposób na
                            uzyskanie odpowiedzi! A jeśli wolisz bezpośrednią rozmowę,
                            zapraszamy do naszego biura sprzedaży. Nasi specjaliści są do
                            Twojej dyspozycji i chętnie pomogą w każdej sprawie.
                        </p>
                        <p
                                class="text-pretty paragraph mb-30px"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Wybierz formę kontaktu, która jest dla Ciebie najwygodniejsza!
                        </p>
                    </div>
                    <div class="col-12 col-lg-7 offset-lg-1">
                        <div class="contact-form-bg">
                            <!-- FORM ROW -->
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <!-- FORM TITLE -->
                                    <div
                                            class="subtitle text-center mb-3 mb-sm-6 mt-5 text-primary"
                                    >
                                        Formularz kontaktowy
                                    </div>
                                    <!-- FORM -->
                                    <form
                                            id="contact-form"
                                            autocomplete="off"
                                            class="p-0 p-lg-3"
                                    >
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                        id="form-errors"
                                                        class="alert-danger alert hide-empty"
                                                ></div>
                                                <div
                                                        id="form-success"
                                                        class="alert-success alert hide-empty"
                                                ></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input
                                                            type="text"
                                                            class="form-control"
                                                            id="user-name"
                                                            placeholder="Imię i nazwisko"
                                                            name="username"
                                                            required
                                                    />
                                                    <label for="user-name">Imię i nazwisko</label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input
                                                            type="email"
                                                            class="form-control"
                                                            id="user-email"
                                                            placeholder="Adres e-mail"
                                                            name="email"
                                                            required
                                                    />
                                                    <label for="user-email">Adres e-mail</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input
                                                            type="tel"
                                                            class="form-control"
                                                            id="user-tel"
                                                            placeholder="Telefon"
                                                            name="tel"
                                                    />
                                                    <label for="user-tel">Telefon</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating">
                            <textarea
                                    class="form-control"
                                    placeholder="Wiadomość"
                                    id="user-message"
                                    style="height: 150px"
                                    name="message"
                            ></textarea>
                                                    <label for="user-message">Wiadomość</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ACCORDION -->
                                        <div class="col-12 pt-3">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button
                                                                class="accordion-button accordion-button-contact"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#policy-check"
                                                                aria-expanded="true"
                                                                aria-controls="policy-check"
                                                        >
                                                            Klauzula informacyjna
                                                        </button>
                                                    </h2>
                                                    <div
                                                            id="policy-check"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample"
                                                    >
                                                        <div class="accordion-body">
                                                            <ol>
                                                                <li>
                                                                    Administrator danych osobowych: WGW
                                                                    DEVELOPMENT GROUP SP. z o.o. z siedzibą w
                                                                    Łasku przy ul. Warszawskiej 79.
                                                                    <br />
                                                                    Adres e-mail: mieszkania@wgwstalbet.eu.
                                                                </li>
                                                                <li>
                                                                    Podstawa prawna przetwarzania danych: Dane
                                                                    osobowe są przetwarzane na podstawie art. 6
                                                                    ust. 1 lit „a”, „b” rozporządzenia
                                                                    Parlamentu Europejskiego i Rady (UE)
                                                                    2016/679 (RODO).
                                                                </li>
                                                                <li>
                                                                    Dobrowolność zgody: Zgoda jest dobrowolna,
                                                                    ale brak jej udzielenia uniemożliwia kontakt
                                                                    oraz wykonanie umowy.
                                                                </li>
                                                                <li>
                                                                    Zakres przetwarzanych danych: Przetwarzane
                                                                    dane obejmują: imię, nazwisko, numer
                                                                    telefonu, adres e-mail.
                                                                </li>
                                                                <li>
                                                                    Cel przetwarzania danych: Celem
                                                                    przetwarzania danych jest nawiązanie
                                                                    kontaktu oraz realizacja obowiązków
                                                                    wynikających z przepisów obowiązującego
                                                                    prawa.
                                                                </li>
                                                                <li>
                                                                    Zakres wykorzystania danych: Dane nie będą
                                                                    przetwarzane w innym celu, chyba że wymagają
                                                                    tego przepisy prawa UE, Polski lub innego
                                                                    państwa członkowskiego, którego prawu
                                                                    podlega Administrator.
                                                                </li>
                                                                <li>
                                                                    Dostęp do danych osobowych: Do danych mają
                                                                    dostęp: Administrator, podmioty
                                                                    przetwarzające dane na zlecenie
                                                                    Administratora, osoby działające z
                                                                    upoważnienia Administratora lub podmiotu
                                                                    przetwarzającego, a także sądy i organy
                                                                    ochrony prawnej, jeśli istnieją ku temu
                                                                    podstawy prawne.
                                                                </li>
                                                                <li>
                                                                    Przekazywanie danych: Dane osobowe będą
                                                                    przekazywane stosownym organom ochrony
                                                                    prawnej, osobom działającym na podstawie
                                                                    umowy z Administratorem, bądź osobom
                                                                    upoważnionym.
                                                                </li>
                                                                <li>
                                                                    Usunięcie danych: Dane zostaną usunięte
                                                                    niezwłocznie po tym, jak staną się zbędne do
                                                                    celów, w jakich zostały zgromadzone, po
                                                                    otrzymaniu żądania ich usunięcia, lub po
                                                                    upływie terminów przedawnienia ewentualnych
                                                                    roszczeń.
                                                                </li>
                                                                <li>
                                                                    Brak zautomatyzowanego przetwarzania: Dane
                                                                    nie będą podlegać zautomatyzowanemu
                                                                    podejmowaniu decyzji, w tym profilowaniu.
                                                                </li>
                                                                <li>
                                                                    Prawa osób, których dane dotyczą: Masz prawo
                                                                    do: dostępu, sprostowania, uzupełnienia,
                                                                    przenoszenia, ograniczenia przetwarzania
                                                                    oraz usunięcia swoich danych osobowych.
                                                                </li>
                                                                <li>
                                                                    Cofnięcie zgody: Zgoda na przetwarzanie
                                                                    danych osobowych może zostać cofnięta w
                                                                    dowolnym momencie, bez wpływu na zgodność z
                                                                    prawem przetwarzania, którego dokonano na
                                                                    podstawie zgody przed jej cofnięciem.
                                                                </li>
                                                                <li>
                                                                    Prawo do sprzeciwu: Możesz wnieść sprzeciw
                                                                    wobec przetwarzania danych z powodów
                                                                    związanych z Twoją szczególną sytuacją,
                                                                    jeśli dane były przetwarzane na podstawie
                                                                    prawnie uzasadnionych interesów
                                                                    Administratora lub strony trzeciej, albo
                                                                    były profilowane. Masz również prawo do
                                                                    sprzeciwu wobec przetwarzania danych na
                                                                    potrzeby marketingu bezpośredniego.
                                                                </li>
                                                                <li>
                                                                    Prawo do skargi: Masz prawo złożyć skargę do
                                                                    organu nadzoru, którym jest Prezes Urzędu
                                                                    Ochrony Danych Osobowych.
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- POLICY -->
                                            <div class="form-check text-start pt-5 d-flex gap-3">
                                                <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        value=""
                                                        id="terms-check"
                                                        name="terms"
                                                />
                                                <label
                                                        class="form-check-label small fw-medium pt-1"
                                                        for="terms-check"
                                                >
                                                    Zapoznałem/łam się z
                                                    <a
                                                            href="polityka-prywatnosci.html"
                                                            target="_blank"
                                                            rel="noopener noreferrer"
                                                    >
                                                        polityką prywatności</a
                                                    >*
                                                </label>
                                            </div>
                                            <!-- DATA -->
                                            <div class="form-check text-start pt-2 d-flex gap-3">
                                                <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        value=""
                                                        id="terms-check-2"
                                                        name="terms"
                                                />
                                                <label
                                                        class="form-check-label small fw-medium pt-1"
                                                        for="terms-check-2"
                                                >
                                                    Zgadzam się na przetwarzanie moich danych osobowych
                                                    przez Administratora i osoby działające z jego
                                                    upoważnienia i podmioty przetwarzające dane na
                                                    podstawie umowy zawartej z Administratorem - w celu:
                                                    nawiązania kontaktu oraz wykonania obowiązków
                                                    wynikających z przepisów obowiązującego prawa.
                                                    Zgadzam się na przekazywanie moich danych osobowych
                                                    w postaci: imienia, nazwiska, adresu e-mail, numeru
                                                    telefonu organom ochrony prawnej, osobom
                                                    upoważnionym lub działającym na podstawie umowy z
                                                    Administratorem.*
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-start">
                                            <button
                                                    data-btn-submit=""
                                                    type="submit"
                                                    class="btn btn-primary mt-3 mt-lg-4 mb-4 btn-submit"
                                                    disabled
                                            >
                                                Wyślij
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
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- SLIDER  ||  Nasza okolica -->
        <!-- ---------- -->
        <section class="margin-sm d-none">
            <div class="container">
                <div class="row row-gap-4 row-gap-lg-5 position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-10 col-lg-4">
                        <!-- TITLE -->
                        <h3 class="header-1 mb-30px" data-aos="fade-up">
                            Podobne mieszkania
                        </h3>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-30px text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                        </p>
                    </div>
                    <!-- SLIDER -->
                    <div class="col-12 offset-lg-1 col-lg-7 position-relative">
                        <div class="slider-apartments">
                            <!-- SLIDES -->
                            <div class="slick-slider-apartments">
                                <!-- 1 -->
                                <div class="">
                                    <div class="similar-ap">
                                        <div class="main-ap-box-row main-ap-box-grid">
                                            <!-- bg-success - dostępne -->
                                            <!-- bg-warning - rezerwacja -->
                                            <!-- bg-danger - sprzedane -->
                                            <div class="row"></div>
                                            <div class="apartment-tag bg-success">dostępne</div>
                                            <div class="apartment-box">
                                                <!-- INFO -->
                                                <div
                                                        class="row apartment-row align-items-lg-center gy-3 gx-3"
                                                >
                                                    <!-- APARTMENT TITLE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-md-content-center title"
                                                    >
                                                        Mieszkanie 12
                                                    </div>
                                                    <!-- IMAGE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-content-center info-img"
                                                    >
                                                        <picture>
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.webp"
                                                                    media="(max-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.webp"
                                                                    media="(min-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.png"
                                                                    media="(max-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.png"
                                                                    media="(min-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <img
                                                                    src="/img/apartments/ap-draw@2x.png"
                                                                    width="566"
                                                                    height="1154"
                                                                    class="img-fluid"
                                                                    loading="lazy"
                                                                    alt="Osiedle Targowe - Galeria"
                                                            />
                                                        </picture>
                                                    </div>

                                                    <!-- INFO -->
                                                    <div class="col-12 col-lg-6 info-box">
                                                        <!-- TYPE -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Typy mieszkań</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">M3</div>
                                                        </div>
                                                        <!-- SQUARES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Metraż</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="crop"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="21.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 21.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14845"
                                                                            data-name="Path 14845"
                                                                            d="M4.706,5.007H2.3a.3.3,0,0,1-.3-.3V2.3A.3.3,0,0,1,2.3,2H4.706a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,4.706,5.007Zm-2.1-.6h1.8V2.6H2.6Z"
                                                                            transform="translate(-2 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14846"
                                                                            data-name="Path 14846"
                                                                            d="M34.706,5.007H32.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,34.706,5.007Zm-2.1-.6h1.8V2.6H32.6Z"
                                                                            transform="translate(-22.98 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14847"
                                                                            data-name="Path 14847"
                                                                            d="M64.706,5.007H62.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,64.706,5.007Zm-2.1-.6h1.8V2.6H62.6Z"
                                                                            transform="translate(-43.96 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14848"
                                                                            data-name="Path 14848"
                                                                            d="M4.706,65.007H2.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,65.007Zm-2.1-.6h1.8V62.6H2.6Z"
                                                                            transform="translate(-2 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14849"
                                                                            data-name="Path 14849"
                                                                            d="M4.706,35.007H2.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,35.007Zm-2.1-.6h1.8V32.6H2.6Z"
                                                                            transform="translate(-2 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14850"
                                                                            data-name="Path 14850"
                                                                            d="M64.706,65.007H62.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,65.007Zm-2.1-.6h1.8V62.6H62.6Z"
                                                                            transform="translate(-43.96 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14851"
                                                                            data-name="Path 14851"
                                                                            d="M34.706,65.007H32.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,34.706,65.007Zm-2.1-.6h1.8V62.6H32.6Z"
                                                                            transform="translate(-22.98 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14852"
                                                                            data-name="Path 14852"
                                                                            d="M64.706,35.007H62.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,35.007Zm-2.1-.6h1.8V32.6H62.6Z"
                                                                            transform="translate(-43.96 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14853"
                                                                            data-name="Path 14853"
                                                                            d="M33.5,35.007a1.5,1.5,0,1,1,1.5-1.5,1.5,1.5,0,0,1-1.5,1.5Zm0-2.405a.9.9,0,1,0,.9.9A.9.9,0,0,0,33.5,32.6Z"
                                                                            transform="translate(-22.98 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14854"
                                                                            data-name="Path 14854"
                                                                            d="M11,6h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14855"
                                                                            data-name="Path 14855"
                                                                            d="M41,6h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14856"
                                                                            data-name="Path 14856"
                                                                            d="M6,41h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14857"
                                                                            data-name="Path 14857"
                                                                            d="M6,11h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14858"
                                                                            data-name="Path 14858"
                                                                            d="M41,66h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14859"
                                                                            data-name="Path 14859"
                                                                            d="M11,66h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14860"
                                                                            data-name="Path 14860"
                                                                            d="M66,11h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14861"
                                                                            data-name="Path 14861"
                                                                            d="M66,41h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">
                                                                45,5m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <!-- FLOOR -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Piętro</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">3</div>
                                                        </div>
                                                        <!-- AMENITIES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Udogodnienia</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="patio"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14903"
                                                                            data-name="Path 14903"
                                                                            d="M6.631,31.407H3.111V25.8a1,1,0,1,0-1.991,0V37.851a.3.3,0,0,0,.3.3H2.807a.3.3,0,0,0,.3-.3v-.432H6.676v.432a.3.3,0,0,0,.3.3H8.363a.3.3,0,0,0,.3-.3V33.436a2.038,2.038,0,0,0-2.036-2.029ZM3.111,36.814V33.395H6.631a.046.046,0,0,1,.045.045v3.374Zm4.947.736H7.281V33.436a.651.651,0,0,0-.65-.65H2.807a.3.3,0,0,0-.3.3v4.456H1.728V25.792a.391.391,0,0,1,.781,0V31.7a.3.3,0,0,0,.3.3H6.638a1.43,1.43,0,0,1,1.428,1.428V37.55Z"
                                                                            transform="translate(-1.12 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14904"
                                                                            data-name="Path 14904"
                                                                            d="M49.608,24.8a1,1,0,0,0-1,1v5.611H45.093A2.036,2.036,0,0,0,43.06,33.44v4.415a.3.3,0,0,0,.3.3h1.383a.3.3,0,0,0,.3-.3v-.436h3.564v.432a.3.3,0,0,0,.3.3H50.3a.3.3,0,0,0,.3-.3V25.8a1.006,1.006,0,0,0-1-1Zm-4.56,12.014V33.44a.046.046,0,0,1,.045-.045h3.519v3.419ZM50,37.55h-.778V33.09a.3.3,0,0,0-.3-.3h-3.82a.651.651,0,0,0-.65.65v4.111h-.778V33.436a1.43,1.43,0,0,1,1.428-1.428h3.824a.3.3,0,0,0,.3-.3V25.792a.391.391,0,1,1,.781,0V37.55Z"
                                                                            transform="translate(-28.56 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14905"
                                                                            data-name="Path 14905"
                                                                            d="M19.169,17a1,1,0,0,0,1-1v-.173H23.01a1.1,1.1,0,0,0,0-2.206H21.053v-.619l1.262-1.262a.3.3,0,0,0-.214-.515H19.4a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H17.893V9.389a1.876,1.876,0,0,0,1.265-.823,1.874,1.874,0,0,0,3.139,0,1.871,1.871,0,0,0,3.44-1.02V6.855a.305.305,0,0,0-.166-.27L17.723,2.606a.293.293,0,0,0-.273,0L9.606,6.585a.305.305,0,0,0-.166.27v.691a1.871,1.871,0,0,0,3.44,1.02,1.874,1.874,0,0,0,3.139,0,1.864,1.864,0,0,0,1.265.823v4.242H14.73v-.619l1.262-1.262a.3.3,0,0,0-.214-.515h-2.7a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H12.168a1.1,1.1,0,1,0,0,2.206h2.845v.173a1,1,0,0,0,1,1h.653v6.005H15.411a.3.3,0,0,0,0,.608h4.363a.3.3,0,1,0,0-.608H18.522V17Zm2.2-5.165-.619.619-.619-.619ZM16.32,7.547a.3.3,0,1,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0v-.5l7.544-3.827,7.54,3.824v.5a1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.264,1.264,0,0,1-2.527,0Zm-1.276,4.29-.619.619-.619-.619ZM11.67,14.731a.5.5,0,0,1,.5-.5H23.01a.5.5,0,0,1,0,1H12.164A.5.5,0,0,1,11.67,14.731Zm3.945,1.276v-.173h3.941v.173a.39.39,0,0,1-.391.391H16a.39.39,0,0,1-.387-.391Zm2.3,7h-.65V17h.65Z"
                                                                            transform="translate(-6.564 -2.573)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">Ogródek</div>
                                                        </div>
                                                    </div>

                                                    <!-- BUTTON -->
                                                    <div
                                                            class="col-12 col-lg-2 d-flex justify-content-center justify-content-lg-end"
                                                            id="ap-btn"
                                                    >
                                                        <a
                                                                class="btn btn-primary z-1 position-relative"
                                                                href="/mieszkanie.html"
                                                        >
                                                            Sprawdź
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
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- MAJOR A TAG -->
                                                <a
                                                        href="mieszkanie.html"
                                                        class="whole-box z-0"
                                                        aria-label="Link do mieszkania"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="">
                                    <div class="similar-ap">
                                        <div class="main-ap-box-row main-ap-box-grid">
                                            <!-- bg-success - dostępne -->
                                            <!-- bg-warning - rezerwacja -->
                                            <!-- bg-danger - sprzedane -->
                                            <div class="row"></div>
                                            <div class="apartment-tag bg-success">dostępne</div>
                                            <div class="apartment-box">
                                                <!-- INFO -->
                                                <div
                                                        class="row apartment-row align-items-lg-center gy-3 gx-3"
                                                >
                                                    <!-- APARTMENT TITLE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-md-content-center title"
                                                    >
                                                        Mieszkanie 12
                                                    </div>
                                                    <!-- IMAGE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-content-center info-img"
                                                    >
                                                        <picture>
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.webp"
                                                                    media="(max-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.webp"
                                                                    media="(min-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.png"
                                                                    media="(max-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.png"
                                                                    media="(min-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <img
                                                                    src="/img/apartments/ap-draw@2x.png"
                                                                    width="566"
                                                                    height="1154"
                                                                    class="img-fluid"
                                                                    loading="lazy"
                                                                    alt="Osiedle Targowe - Galeria"
                                                            />
                                                        </picture>
                                                    </div>

                                                    <!-- INFO -->
                                                    <div class="col-12 col-lg-6 info-box">
                                                        <!-- TYPE -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Typy mieszkań</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">M3</div>
                                                        </div>
                                                        <!-- SQUARES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Metraż</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="crop"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="21.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 21.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14845"
                                                                            data-name="Path 14845"
                                                                            d="M4.706,5.007H2.3a.3.3,0,0,1-.3-.3V2.3A.3.3,0,0,1,2.3,2H4.706a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,4.706,5.007Zm-2.1-.6h1.8V2.6H2.6Z"
                                                                            transform="translate(-2 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14846"
                                                                            data-name="Path 14846"
                                                                            d="M34.706,5.007H32.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,34.706,5.007Zm-2.1-.6h1.8V2.6H32.6Z"
                                                                            transform="translate(-22.98 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14847"
                                                                            data-name="Path 14847"
                                                                            d="M64.706,5.007H62.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,64.706,5.007Zm-2.1-.6h1.8V2.6H62.6Z"
                                                                            transform="translate(-43.96 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14848"
                                                                            data-name="Path 14848"
                                                                            d="M4.706,65.007H2.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,65.007Zm-2.1-.6h1.8V62.6H2.6Z"
                                                                            transform="translate(-2 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14849"
                                                                            data-name="Path 14849"
                                                                            d="M4.706,35.007H2.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,35.007Zm-2.1-.6h1.8V32.6H2.6Z"
                                                                            transform="translate(-2 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14850"
                                                                            data-name="Path 14850"
                                                                            d="M64.706,65.007H62.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,65.007Zm-2.1-.6h1.8V62.6H62.6Z"
                                                                            transform="translate(-43.96 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14851"
                                                                            data-name="Path 14851"
                                                                            d="M34.706,65.007H32.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,34.706,65.007Zm-2.1-.6h1.8V62.6H32.6Z"
                                                                            transform="translate(-22.98 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14852"
                                                                            data-name="Path 14852"
                                                                            d="M64.706,35.007H62.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,35.007Zm-2.1-.6h1.8V32.6H62.6Z"
                                                                            transform="translate(-43.96 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14853"
                                                                            data-name="Path 14853"
                                                                            d="M33.5,35.007a1.5,1.5,0,1,1,1.5-1.5,1.5,1.5,0,0,1-1.5,1.5Zm0-2.405a.9.9,0,1,0,.9.9A.9.9,0,0,0,33.5,32.6Z"
                                                                            transform="translate(-22.98 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14854"
                                                                            data-name="Path 14854"
                                                                            d="M11,6h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14855"
                                                                            data-name="Path 14855"
                                                                            d="M41,6h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14856"
                                                                            data-name="Path 14856"
                                                                            d="M6,41h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14857"
                                                                            data-name="Path 14857"
                                                                            d="M6,11h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14858"
                                                                            data-name="Path 14858"
                                                                            d="M41,66h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14859"
                                                                            data-name="Path 14859"
                                                                            d="M11,66h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14860"
                                                                            data-name="Path 14860"
                                                                            d="M66,11h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14861"
                                                                            data-name="Path 14861"
                                                                            d="M66,41h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">
                                                                45,5m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <!-- FLOOR -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Piętro</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">3</div>
                                                        </div>
                                                        <!-- AMENITIES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Udogodnienia</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="patio"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14903"
                                                                            data-name="Path 14903"
                                                                            d="M6.631,31.407H3.111V25.8a1,1,0,1,0-1.991,0V37.851a.3.3,0,0,0,.3.3H2.807a.3.3,0,0,0,.3-.3v-.432H6.676v.432a.3.3,0,0,0,.3.3H8.363a.3.3,0,0,0,.3-.3V33.436a2.038,2.038,0,0,0-2.036-2.029ZM3.111,36.814V33.395H6.631a.046.046,0,0,1,.045.045v3.374Zm4.947.736H7.281V33.436a.651.651,0,0,0-.65-.65H2.807a.3.3,0,0,0-.3.3v4.456H1.728V25.792a.391.391,0,0,1,.781,0V31.7a.3.3,0,0,0,.3.3H6.638a1.43,1.43,0,0,1,1.428,1.428V37.55Z"
                                                                            transform="translate(-1.12 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14904"
                                                                            data-name="Path 14904"
                                                                            d="M49.608,24.8a1,1,0,0,0-1,1v5.611H45.093A2.036,2.036,0,0,0,43.06,33.44v4.415a.3.3,0,0,0,.3.3h1.383a.3.3,0,0,0,.3-.3v-.436h3.564v.432a.3.3,0,0,0,.3.3H50.3a.3.3,0,0,0,.3-.3V25.8a1.006,1.006,0,0,0-1-1Zm-4.56,12.014V33.44a.046.046,0,0,1,.045-.045h3.519v3.419ZM50,37.55h-.778V33.09a.3.3,0,0,0-.3-.3h-3.82a.651.651,0,0,0-.65.65v4.111h-.778V33.436a1.43,1.43,0,0,1,1.428-1.428h3.824a.3.3,0,0,0,.3-.3V25.792a.391.391,0,1,1,.781,0V37.55Z"
                                                                            transform="translate(-28.56 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14905"
                                                                            data-name="Path 14905"
                                                                            d="M19.169,17a1,1,0,0,0,1-1v-.173H23.01a1.1,1.1,0,0,0,0-2.206H21.053v-.619l1.262-1.262a.3.3,0,0,0-.214-.515H19.4a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H17.893V9.389a1.876,1.876,0,0,0,1.265-.823,1.874,1.874,0,0,0,3.139,0,1.871,1.871,0,0,0,3.44-1.02V6.855a.305.305,0,0,0-.166-.27L17.723,2.606a.293.293,0,0,0-.273,0L9.606,6.585a.305.305,0,0,0-.166.27v.691a1.871,1.871,0,0,0,3.44,1.02,1.874,1.874,0,0,0,3.139,0,1.864,1.864,0,0,0,1.265.823v4.242H14.73v-.619l1.262-1.262a.3.3,0,0,0-.214-.515h-2.7a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H12.168a1.1,1.1,0,1,0,0,2.206h2.845v.173a1,1,0,0,0,1,1h.653v6.005H15.411a.3.3,0,0,0,0,.608h4.363a.3.3,0,1,0,0-.608H18.522V17Zm2.2-5.165-.619.619-.619-.619ZM16.32,7.547a.3.3,0,1,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0v-.5l7.544-3.827,7.54,3.824v.5a1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.264,1.264,0,0,1-2.527,0Zm-1.276,4.29-.619.619-.619-.619ZM11.67,14.731a.5.5,0,0,1,.5-.5H23.01a.5.5,0,0,1,0,1H12.164A.5.5,0,0,1,11.67,14.731Zm3.945,1.276v-.173h3.941v.173a.39.39,0,0,1-.391.391H16a.39.39,0,0,1-.387-.391Zm2.3,7h-.65V17h.65Z"
                                                                            transform="translate(-6.564 -2.573)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">Ogródek</div>
                                                        </div>
                                                    </div>

                                                    <!-- BUTTON -->
                                                    <div
                                                            class="col-12 col-lg-2 d-flex justify-content-center justify-content-lg-end"
                                                            id="ap-btn"
                                                    >
                                                        <a
                                                                class="btn btn-primary z-1 position-relative"
                                                                href="/mieszkanie.html"
                                                        >
                                                            Sprawdź
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
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- MAJOR A TAG -->
                                                <a
                                                        href="mieszkanie.html"
                                                        class="whole-box z-0"
                                                        aria-label="Link do mieszkania"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="">
                                    <div class="similar-ap">
                                        <div class="main-ap-box-row main-ap-box-grid">
                                            <!-- bg-success - dostępne -->
                                            <!-- bg-warning - rezerwacja -->
                                            <!-- bg-danger - sprzedane -->
                                            <div class="row"></div>
                                            <div class="apartment-tag bg-success">dostępne</div>
                                            <div class="apartment-box">
                                                <!-- INFO -->
                                                <div
                                                        class="row apartment-row align-items-lg-center gy-3 gx-3"
                                                >
                                                    <!-- APARTMENT TITLE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-md-content-center title"
                                                    >
                                                        Mieszkanie 12
                                                    </div>
                                                    <!-- IMAGE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-content-center info-img"
                                                    >
                                                        <picture>
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.webp"
                                                                    media="(max-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.webp"
                                                                    media="(min-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.png"
                                                                    media="(max-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.png"
                                                                    media="(min-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <img
                                                                    src="/img/apartments/ap-draw@2x.png"
                                                                    width="566"
                                                                    height="1154"
                                                                    class="img-fluid"
                                                                    loading="lazy"
                                                                    alt="Osiedle Targowe - Galeria"
                                                            />
                                                        </picture>
                                                    </div>

                                                    <!-- INFO -->
                                                    <div class="col-12 col-lg-6 info-box">
                                                        <!-- TYPE -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Typy mieszkań</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">M3</div>
                                                        </div>
                                                        <!-- SQUARES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Metraż</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="crop"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="21.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 21.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14845"
                                                                            data-name="Path 14845"
                                                                            d="M4.706,5.007H2.3a.3.3,0,0,1-.3-.3V2.3A.3.3,0,0,1,2.3,2H4.706a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,4.706,5.007Zm-2.1-.6h1.8V2.6H2.6Z"
                                                                            transform="translate(-2 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14846"
                                                                            data-name="Path 14846"
                                                                            d="M34.706,5.007H32.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,34.706,5.007Zm-2.1-.6h1.8V2.6H32.6Z"
                                                                            transform="translate(-22.98 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14847"
                                                                            data-name="Path 14847"
                                                                            d="M64.706,5.007H62.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,64.706,5.007Zm-2.1-.6h1.8V2.6H62.6Z"
                                                                            transform="translate(-43.96 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14848"
                                                                            data-name="Path 14848"
                                                                            d="M4.706,65.007H2.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,65.007Zm-2.1-.6h1.8V62.6H2.6Z"
                                                                            transform="translate(-2 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14849"
                                                                            data-name="Path 14849"
                                                                            d="M4.706,35.007H2.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,35.007Zm-2.1-.6h1.8V32.6H2.6Z"
                                                                            transform="translate(-2 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14850"
                                                                            data-name="Path 14850"
                                                                            d="M64.706,65.007H62.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,65.007Zm-2.1-.6h1.8V62.6H62.6Z"
                                                                            transform="translate(-43.96 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14851"
                                                                            data-name="Path 14851"
                                                                            d="M34.706,65.007H32.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,34.706,65.007Zm-2.1-.6h1.8V62.6H32.6Z"
                                                                            transform="translate(-22.98 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14852"
                                                                            data-name="Path 14852"
                                                                            d="M64.706,35.007H62.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,35.007Zm-2.1-.6h1.8V32.6H62.6Z"
                                                                            transform="translate(-43.96 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14853"
                                                                            data-name="Path 14853"
                                                                            d="M33.5,35.007a1.5,1.5,0,1,1,1.5-1.5,1.5,1.5,0,0,1-1.5,1.5Zm0-2.405a.9.9,0,1,0,.9.9A.9.9,0,0,0,33.5,32.6Z"
                                                                            transform="translate(-22.98 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14854"
                                                                            data-name="Path 14854"
                                                                            d="M11,6h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14855"
                                                                            data-name="Path 14855"
                                                                            d="M41,6h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14856"
                                                                            data-name="Path 14856"
                                                                            d="M6,41h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14857"
                                                                            data-name="Path 14857"
                                                                            d="M6,11h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14858"
                                                                            data-name="Path 14858"
                                                                            d="M41,66h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14859"
                                                                            data-name="Path 14859"
                                                                            d="M11,66h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14860"
                                                                            data-name="Path 14860"
                                                                            d="M66,11h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14861"
                                                                            data-name="Path 14861"
                                                                            d="M66,41h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">
                                                                45,5m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <!-- FLOOR -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Piętro</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">3</div>
                                                        </div>
                                                        <!-- AMENITIES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Udogodnienia</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="patio"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14903"
                                                                            data-name="Path 14903"
                                                                            d="M6.631,31.407H3.111V25.8a1,1,0,1,0-1.991,0V37.851a.3.3,0,0,0,.3.3H2.807a.3.3,0,0,0,.3-.3v-.432H6.676v.432a.3.3,0,0,0,.3.3H8.363a.3.3,0,0,0,.3-.3V33.436a2.038,2.038,0,0,0-2.036-2.029ZM3.111,36.814V33.395H6.631a.046.046,0,0,1,.045.045v3.374Zm4.947.736H7.281V33.436a.651.651,0,0,0-.65-.65H2.807a.3.3,0,0,0-.3.3v4.456H1.728V25.792a.391.391,0,0,1,.781,0V31.7a.3.3,0,0,0,.3.3H6.638a1.43,1.43,0,0,1,1.428,1.428V37.55Z"
                                                                            transform="translate(-1.12 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14904"
                                                                            data-name="Path 14904"
                                                                            d="M49.608,24.8a1,1,0,0,0-1,1v5.611H45.093A2.036,2.036,0,0,0,43.06,33.44v4.415a.3.3,0,0,0,.3.3h1.383a.3.3,0,0,0,.3-.3v-.436h3.564v.432a.3.3,0,0,0,.3.3H50.3a.3.3,0,0,0,.3-.3V25.8a1.006,1.006,0,0,0-1-1Zm-4.56,12.014V33.44a.046.046,0,0,1,.045-.045h3.519v3.419ZM50,37.55h-.778V33.09a.3.3,0,0,0-.3-.3h-3.82a.651.651,0,0,0-.65.65v4.111h-.778V33.436a1.43,1.43,0,0,1,1.428-1.428h3.824a.3.3,0,0,0,.3-.3V25.792a.391.391,0,1,1,.781,0V37.55Z"
                                                                            transform="translate(-28.56 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14905"
                                                                            data-name="Path 14905"
                                                                            d="M19.169,17a1,1,0,0,0,1-1v-.173H23.01a1.1,1.1,0,0,0,0-2.206H21.053v-.619l1.262-1.262a.3.3,0,0,0-.214-.515H19.4a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H17.893V9.389a1.876,1.876,0,0,0,1.265-.823,1.874,1.874,0,0,0,3.139,0,1.871,1.871,0,0,0,3.44-1.02V6.855a.305.305,0,0,0-.166-.27L17.723,2.606a.293.293,0,0,0-.273,0L9.606,6.585a.305.305,0,0,0-.166.27v.691a1.871,1.871,0,0,0,3.44,1.02,1.874,1.874,0,0,0,3.139,0,1.864,1.864,0,0,0,1.265.823v4.242H14.73v-.619l1.262-1.262a.3.3,0,0,0-.214-.515h-2.7a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H12.168a1.1,1.1,0,1,0,0,2.206h2.845v.173a1,1,0,0,0,1,1h.653v6.005H15.411a.3.3,0,0,0,0,.608h4.363a.3.3,0,1,0,0-.608H18.522V17Zm2.2-5.165-.619.619-.619-.619ZM16.32,7.547a.3.3,0,1,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0v-.5l7.544-3.827,7.54,3.824v.5a1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.264,1.264,0,0,1-2.527,0Zm-1.276,4.29-.619.619-.619-.619ZM11.67,14.731a.5.5,0,0,1,.5-.5H23.01a.5.5,0,0,1,0,1H12.164A.5.5,0,0,1,11.67,14.731Zm3.945,1.276v-.173h3.941v.173a.39.39,0,0,1-.391.391H16a.39.39,0,0,1-.387-.391Zm2.3,7h-.65V17h.65Z"
                                                                            transform="translate(-6.564 -2.573)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">Ogródek</div>
                                                        </div>
                                                    </div>

                                                    <!-- BUTTON -->
                                                    <div
                                                            class="col-12 col-lg-2 d-flex justify-content-center justify-content-lg-end"
                                                            id="ap-btn"
                                                    >
                                                        <a
                                                                class="btn btn-primary z-1 position-relative"
                                                                href="/mieszkanie.html"
                                                        >
                                                            Sprawdź
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
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- MAJOR A TAG -->
                                                <a
                                                        href="mieszkanie.html"
                                                        class="whole-box z-0"
                                                        aria-label="Link do mieszkania"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="">
                                    <div class="similar-ap">
                                        <div class="main-ap-box-row main-ap-box-grid">
                                            <!-- bg-success - dostępne -->
                                            <!-- bg-warning - rezerwacja -->
                                            <!-- bg-danger - sprzedane -->
                                            <div class="row"></div>
                                            <div class="apartment-tag bg-success">dostępne</div>
                                            <div class="apartment-box">
                                                <!-- INFO -->
                                                <div
                                                        class="row apartment-row align-items-lg-center gy-3 gx-3"
                                                >
                                                    <!-- APARTMENT TITLE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-md-content-center title"
                                                    >
                                                        Mieszkanie 12
                                                    </div>
                                                    <!-- IMAGE -->
                                                    <div
                                                            class="col-4 col-lg-2 d-flex justify-content-center info-img"
                                                    >
                                                        <picture>
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.webp"
                                                                    media="(max-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.webp"
                                                                    media="(min-width: 992px)"
                                                                    type="image/webp"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw.png"
                                                                    media="(max-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <source
                                                                    srcset="/img/apartments/ap-draw@2x.png"
                                                                    media="(min-width: 992px)"
                                                                    type="image/png"
                                                            />
                                                            <img
                                                                    src="/img/apartments/ap-draw@2x.png"
                                                                    width="566"
                                                                    height="1154"
                                                                    class="img-fluid"
                                                                    loading="lazy"
                                                                    alt="Osiedle Targowe - Galeria"
                                                            />
                                                        </picture>
                                                    </div>

                                                    <!-- INFO -->
                                                    <div class="col-12 col-lg-6 info-box">
                                                        <!-- TYPE -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Typy mieszkań</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">M3</div>
                                                        </div>
                                                        <!-- SQUARES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Metraż</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="crop"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="21.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 21.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14845"
                                                                            data-name="Path 14845"
                                                                            d="M4.706,5.007H2.3a.3.3,0,0,1-.3-.3V2.3A.3.3,0,0,1,2.3,2H4.706a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,4.706,5.007Zm-2.1-.6h1.8V2.6H2.6Z"
                                                                            transform="translate(-2 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14846"
                                                                            data-name="Path 14846"
                                                                            d="M34.706,5.007H32.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,34.706,5.007Zm-2.1-.6h1.8V2.6H32.6Z"
                                                                            transform="translate(-22.98 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14847"
                                                                            data-name="Path 14847"
                                                                            d="M64.706,5.007H62.3a.3.3,0,0,1-.3-.3V2.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3V4.706A.3.3,0,0,1,64.706,5.007Zm-2.1-.6h1.8V2.6H62.6Z"
                                                                            transform="translate(-43.96 -2)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14848"
                                                                            data-name="Path 14848"
                                                                            d="M4.706,65.007H2.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,65.007Zm-2.1-.6h1.8V62.6H2.6Z"
                                                                            transform="translate(-2 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14849"
                                                                            data-name="Path 14849"
                                                                            d="M4.706,35.007H2.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3H4.706a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,4.706,35.007Zm-2.1-.6h1.8V32.6H2.6Z"
                                                                            transform="translate(-2 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14850"
                                                                            data-name="Path 14850"
                                                                            d="M64.706,65.007H62.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,65.007Zm-2.1-.6h1.8V62.6H62.6Z"
                                                                            transform="translate(-43.96 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14851"
                                                                            data-name="Path 14851"
                                                                            d="M34.706,65.007H32.3a.3.3,0,0,1-.3-.3V62.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,34.706,65.007Zm-2.1-.6h1.8V62.6H32.6Z"
                                                                            transform="translate(-22.98 -43.96)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14852"
                                                                            data-name="Path 14852"
                                                                            d="M64.706,35.007H62.3a.3.3,0,0,1-.3-.3V32.3a.3.3,0,0,1,.3-.3h2.405a.3.3,0,0,1,.3.3v2.405A.3.3,0,0,1,64.706,35.007Zm-2.1-.6h1.8V32.6H62.6Z"
                                                                            transform="translate(-43.96 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14853"
                                                                            data-name="Path 14853"
                                                                            d="M33.5,35.007a1.5,1.5,0,1,1,1.5-1.5,1.5,1.5,0,0,1-1.5,1.5Zm0-2.405a.9.9,0,1,0,.9.9A.9.9,0,0,0,33.5,32.6Z"
                                                                            transform="translate(-22.98 -22.98)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14854"
                                                                            data-name="Path 14854"
                                                                            d="M11,6h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14855"
                                                                            data-name="Path 14855"
                                                                            d="M41,6h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -4.797)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14856"
                                                                            data-name="Path 14856"
                                                                            d="M6,41h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14857"
                                                                            data-name="Path 14857"
                                                                            d="M6,11h.6v6.615H6Z"
                                                                            transform="translate(-4.797 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14858"
                                                                            data-name="Path 14858"
                                                                            d="M41,66h6.615v.6H41Z"
                                                                            transform="translate(-29.274 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14859"
                                                                            data-name="Path 14859"
                                                                            d="M11,66h6.615v.6H11Z"
                                                                            transform="translate(-8.294 -46.757)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14860"
                                                                            data-name="Path 14860"
                                                                            d="M66,11h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -8.294)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14861"
                                                                            data-name="Path 14861"
                                                                            d="M66,41h.6v6.615H66Z"
                                                                            transform="translate(-46.757 -29.274)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">
                                                                45,5m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <!-- FLOOR -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Piętro</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="architecture-and-city"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.453"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.453 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14862"
                                                                            data-name="Path 14862"
                                                                            d="M22.124,280.984H21.75v-8.108a.329.329,0,0,0-.329-.329H1.032a.329.329,0,0,0-.329.329v8.108H.329a.329.329,0,1,0,0,.658h21.8a.329.329,0,1,0,0-.658ZM1.361,273.2H21.092v7.779H6.282v-6a.329.329,0,0,0-.329-.329H3.141a.329.329,0,0,0-.329.329V277.8a.329.329,0,1,0,.658,0v-2.483H5.624v4.264H3.47V279.2a.329.329,0,1,0-.658,0v1.78H1.361Zm2.109,7.031H5.624v.748H3.47Zm0,0"
                                                                            transform="translate(0 -260.595)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14863"
                                                                            data-name="Path 14863"
                                                                            d="M176.684,324.814h5.273a.329.329,0,0,0,.329-.329V320.97a.329.329,0,0,0-.329-.329h-5.273a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,176.684,324.814Zm4.944-.658h-3.209V321.3h3.209Zm-4.615-2.858h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-168.621 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14864"
                                                                            data-name="Path 14864"
                                                                            d="M345.02,324.814h3.867a.329.329,0,0,0,.329-.329v-1.406a.329.329,0,1,0-.658,0v1.077h-1.8V321.3h1.8v.374a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.329-.329H345.02a.329.329,0,0,0-.329.329v3.516A.329.329,0,0,0,345.02,324.814Zm.329-3.516h.748v2.858h-.748Zm0,0"
                                                                            transform="translate(-329.575 -306.579)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14865"
                                                                            data-name="Path 14865"
                                                                            d="M96.524,354.068a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,96.524,354.068Zm0,0"
                                                                            transform="translate(-91.976 -337.239)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14866"
                                                                            data-name="Path 14866"
                                                                            d="M16.364,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,0,0,.658,0v-.7A.329.329,0,0,0,16.364,224.449Zm0,0"
                                                                            transform="translate(-15.332 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14867"
                                                                            data-name="Path 14867"
                                                                            d="M16.693,176.681a.329.329,0,0,0-.658,0v.7a.329.329,0,0,0,.658,0Zm0,0"
                                                                            transform="translate(-15.332 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14868"
                                                                            data-name="Path 14868"
                                                                            d="M16.035,129.29a.329.329,0,1,0,.658,0v-.7a.329.329,0,0,0-.658,0Zm0,0"
                                                                            transform="translate(-15.332 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14869"
                                                                            data-name="Path 14869"
                                                                            d="M481.294,224.449a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,481.294,224.449Zm0,0"
                                                                            transform="translate(-459.873 -214.606)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14870"
                                                                            data-name="Path 14870"
                                                                            d="M481.623,176.681a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-459.873 -168.618)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14871"
                                                                            data-name="Path 14871"
                                                                            d="M480.965,128.587v.7a.329.329,0,1,0,.658,0v-.7a.329.329,0,1,0-.658,0Zm0,0"
                                                                            transform="translate(-459.873 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14872"
                                                                            data-name="Path 14872"
                                                                            d="M151.841,32.673a.326.326,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.614l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-144.868 -30.369)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14873"
                                                                            data-name="Path 14873"
                                                                            d="M192.874,16.79a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,0,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-184.101 -15.183)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14874"
                                                                            data-name="Path 14874"
                                                                            d="M233.906.91a.328.328,0,0,0,.119-.022l.536-.207.535.207a.329.329,0,1,0,.238-.613l-.654-.253h0a.327.327,0,0,0-.237,0l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-223.334 0.001)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14875"
                                                                            data-name="Path 14875"
                                                                            d="M28.743,80.325a.33.33,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-27.167 -75.931)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14876"
                                                                            data-name="Path 14876"
                                                                            d="M.329,96a.33.33,0,0,0,.119-.022l.1-.039a.329.329,0,1,0-.237-.613l-.1.039A.329.329,0,0,0,.329,96Zm0,0"
                                                                            transform="translate(0.001 -91.119)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14877"
                                                                            data-name="Path 14877"
                                                                            d="M69.774,64.442a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.238-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-66.4 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14878"
                                                                            data-name="Path 14878"
                                                                            d="M110.809,48.559a.329.329,0,0,0,.119-.022l.654-.253a.329.329,0,1,0-.237-.613l-.654.253a.329.329,0,0,0,.119.636Zm0,0"
                                                                            transform="translate(-105.635 -45.558)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14879"
                                                                            data-name="Path 14879"
                                                                            d="M494.9,95.936l.1.039a.329.329,0,0,0,.238-.613l-.1-.039a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-473 -91.121)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14880"
                                                                            data-name="Path 14880"
                                                                            d="M412.839,64.167l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-394.533 -60.745)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14881"
                                                                            data-name="Path 14881"
                                                                            d="M289.741,16.517l.654.253a.325.325,0,0,0,.119.022.329.329,0,0,0,.119-.636l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-276.833 -15.185)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14882"
                                                                            data-name="Path 14882"
                                                                            d="M330.772,32.4l.654.253a.329.329,0,1,0,.237-.613l-.654-.253a.329.329,0,1,0-.238.613Zm0,0"
                                                                            transform="translate(-316.065 -30.372)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14883"
                                                                            data-name="Path 14883"
                                                                            d="M453.87,80.051l.654.253a.329.329,0,1,0,.238-.613l-.654-.253a.329.329,0,1,0-.237.613Zm0,0"
                                                                            transform="translate(-433.765 -75.933)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14884"
                                                                            data-name="Path 14884"
                                                                            d="M371.808,48.284l.654.253a.329.329,0,0,0,.237-.613l-.654-.253a.329.329,0,0,0-.237.613Zm0,0"
                                                                            transform="translate(-355.301 -45.559)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14885"
                                                                            data-name="Path 14885"
                                                                            d="M88.509,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,0,0-.658,0v.7A.329.329,0,0,0,88.509,161.682Zm0,0"
                                                                            transform="translate(-84.313 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14886"
                                                                            data-name="Path 14886"
                                                                            d="M200.731,160.32a.329.329,0,0,0-.329.329v.7a.329.329,0,1,0,.658,0v-.7A.329.329,0,0,0,200.731,160.32Zm0,0"
                                                                            transform="translate(-191.614 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14887"
                                                                            data-name="Path 14887"
                                                                            d="M89.212,128.258h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-84.313 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14888"
                                                                            data-name="Path 14888"
                                                                            d="M136.273,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,0,0,0-.658h-.7A.329.329,0,0,0,136.273,128.587Zm0,0"
                                                                            transform="translate(-130.297 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14889"
                                                                            data-name="Path 14889"
                                                                            d="M184.7,128.916h.7a.329.329,0,0,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14890"
                                                                            data-name="Path 14890"
                                                                            d="M88.509,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-84.313 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14891"
                                                                            data-name="Path 14891"
                                                                            d="M137.31,208.418h-.7a.329.329,0,1,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-130.301 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14892"
                                                                            data-name="Path 14892"
                                                                            d="M184.7,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,1,0,0,.658Zm0,0"
                                                                            transform="translate(-176.286 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14893"
                                                                            data-name="Path 14893"
                                                                            d="M248.829,161.682a.329.329,0,0,0,.329-.329v-.7a.329.329,0,1,0-.658,0v.7A.329.329,0,0,0,248.829,161.682Zm0,0"
                                                                            transform="translate(-237.602 -153.29)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14894"
                                                                            data-name="Path 14894"
                                                                            d="M409.478,160.649a.329.329,0,1,0-.658,0v.7a.329.329,0,1,0,.658,0Zm0,0"
                                                                            transform="translate(-390.892 -153.289)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14895"
                                                                            data-name="Path 14895"
                                                                            d="M296.6,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,296.6,128.587Zm0,0"
                                                                            transform="translate(-283.591 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14896"
                                                                            data-name="Path 14896"
                                                                            d="M249.532,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-237.602 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14897"
                                                                            data-name="Path 14897"
                                                                            d="M344.691,128.587a.329.329,0,0,0,.329.329h.7a.329.329,0,1,0,0-.658h-.7A.329.329,0,0,0,344.691,128.587Zm0,0"
                                                                            transform="translate(-329.575 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14898"
                                                                            data-name="Path 14898"
                                                                            d="M393.821,128.258h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -122.633)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14899"
                                                                            data-name="Path 14899"
                                                                            d="M297.63,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-283.591 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14900"
                                                                            data-name="Path 14900"
                                                                            d="M248.829,209.076h.7a.329.329,0,1,0,0-.658h-.7a.329.329,0,0,0,0,.658Zm0,0"
                                                                            transform="translate(-237.602 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14901"
                                                                            data-name="Path 14901"
                                                                            d="M345.724,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,0,0,0-.658Zm0,0"
                                                                            transform="translate(-329.576 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14902"
                                                                            data-name="Path 14902"
                                                                            d="M393.821,208.418h-.7a.329.329,0,0,0,0,.658h.7a.329.329,0,1,0,0-.658Zm0,0"
                                                                            transform="translate(-375.563 -199.278)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">3</div>
                                                        </div>
                                                        <!-- AMENITIES -->
                                                        <div class="info-text">
                                                            <div class="info-text-name">Udogodnienia</div>
                                                            <div class="info-text-svg">
                                                                <svg
                                                                        id="patio"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="22.047"
                                                                        height="21.047"
                                                                        viewBox="0 0 22.047 21.047"
                                                                >
                                                                    <path
                                                                            id="Path_14903"
                                                                            data-name="Path 14903"
                                                                            d="M6.631,31.407H3.111V25.8a1,1,0,1,0-1.991,0V37.851a.3.3,0,0,0,.3.3H2.807a.3.3,0,0,0,.3-.3v-.432H6.676v.432a.3.3,0,0,0,.3.3H8.363a.3.3,0,0,0,.3-.3V33.436a2.038,2.038,0,0,0-2.036-2.029ZM3.111,36.814V33.395H6.631a.046.046,0,0,1,.045.045v3.374Zm4.947.736H7.281V33.436a.651.651,0,0,0-.65-.65H2.807a.3.3,0,0,0-.3.3v4.456H1.728V25.792a.391.391,0,0,1,.781,0V31.7a.3.3,0,0,0,.3.3H6.638a1.43,1.43,0,0,1,1.428,1.428V37.55Z"
                                                                            transform="translate(-1.12 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14904"
                                                                            data-name="Path 14904"
                                                                            d="M49.608,24.8a1,1,0,0,0-1,1v5.611H45.093A2.036,2.036,0,0,0,43.06,33.44v4.415a.3.3,0,0,0,.3.3h1.383a.3.3,0,0,0,.3-.3v-.436h3.564v.432a.3.3,0,0,0,.3.3H50.3a.3.3,0,0,0,.3-.3V25.8a1.006,1.006,0,0,0-1-1Zm-4.56,12.014V33.44a.046.046,0,0,1,.045-.045h3.519v3.419ZM50,37.55h-.778V33.09a.3.3,0,0,0-.3-.3h-3.82a.651.651,0,0,0-.65.65v4.111h-.778V33.436a1.43,1.43,0,0,1,1.428-1.428h3.824a.3.3,0,0,0,.3-.3V25.792a.391.391,0,1,1,.781,0V37.55Z"
                                                                            transform="translate(-28.56 -17.115)"
                                                                            fill="#345e3e"
                                                                    />
                                                                    <path
                                                                            id="Path_14905"
                                                                            data-name="Path 14905"
                                                                            d="M19.169,17a1,1,0,0,0,1-1v-.173H23.01a1.1,1.1,0,0,0,0-2.206H21.053v-.619l1.262-1.262a.3.3,0,0,0-.214-.515H19.4a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H17.893V9.389a1.876,1.876,0,0,0,1.265-.823,1.874,1.874,0,0,0,3.139,0,1.871,1.871,0,0,0,3.44-1.02V6.855a.305.305,0,0,0-.166-.27L17.723,2.606a.293.293,0,0,0-.273,0L9.606,6.585a.305.305,0,0,0-.166.27v.691a1.871,1.871,0,0,0,3.44,1.02,1.874,1.874,0,0,0,3.139,0,1.864,1.864,0,0,0,1.265.823v4.242H14.73v-.619l1.262-1.262a.3.3,0,0,0-.214-.515h-2.7a.3.3,0,0,0-.28.187.3.3,0,0,0,.066.328l1.262,1.262v.619H12.168a1.1,1.1,0,1,0,0,2.206h2.845v.173a1,1,0,0,0,1,1h.653v6.005H15.411a.3.3,0,0,0,0,.608h4.363a.3.3,0,1,0,0-.608H18.522V17Zm2.2-5.165-.619.619-.619-.619ZM16.32,7.547a.3.3,0,1,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0v-.5l7.544-3.827,7.54,3.824v.5a1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.265,1.265,0,1,1-2.531,0,.3.3,0,0,0-.608,0,1.264,1.264,0,0,1-2.527,0Zm-1.276,4.29-.619.619-.619-.619ZM11.67,14.731a.5.5,0,0,1,.5-.5H23.01a.5.5,0,0,1,0,1H12.164A.5.5,0,0,1,11.67,14.731Zm3.945,1.276v-.173h3.941v.173a.39.39,0,0,1-.391.391H16a.39.39,0,0,1-.387-.391Zm2.3,7h-.65V17h.65Z"
                                                                            transform="translate(-6.564 -2.573)"
                                                                            fill="#345e3e"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="info-text-text">Ogródek</div>
                                                        </div>
                                                    </div>

                                                    <!-- BUTTON -->
                                                    <div
                                                            class="col-12 col-lg-2 d-flex justify-content-center justify-content-lg-end"
                                                            id="ap-btn"
                                                    >
                                                        <a
                                                                class="btn btn-primary z-1 position-relative"
                                                                href="/mieszkanie.html"
                                                        >
                                                            Sprawdź
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
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- MAJOR A TAG -->
                                                <a
                                                        href="mieszkanie.html"
                                                        class="whole-box z-0"
                                                        aria-label="Link do mieszkania"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BUTTONS -->
                            <div class="slick-slider-apartments-btns">
                                <button
                                        type="button"
                                        class="slick-slider-apartments-prev slick-prev"
                                        aria-label="Poprzedni slajd"
                                >
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
                                                <circle
                                                        cx="16.571"
                                                        cy="16.571"
                                                        r="16.071"
                                                        fill="none"
                                                />
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
                                </button>
                                <button
                                        type="button"
                                        class="slick-slider-apartments-next slick-next"
                                        aria-label="Następny slajd"
                                >
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
                                                <circle
                                                        cx="16.571"
                                                        cy="16.571"
                                                        r="16.071"
                                                        fill="none"
                                                />
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
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection