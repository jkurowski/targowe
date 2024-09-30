@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => ($page->meta_title) ? $page->meta_title : $page->title,
    'header_file' => 'rooms.jpg',
    'items' => []
    ])
@stop

@section('content')
    <section class="margin-below-breadcrumb">
        <div class="container">
            <!-- TEXT -->
            <div class="row mb-3 mb-lg-4">
                <!-- TITLE -->
                <div class="col-lg-5 align-self-center">
                    <div class="d-flex flex-column">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag" data-aos="fade-up">LOKALIZACJA</div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            Osiedla Versus
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="200">
                            <p class="paragraph text-pretty mb-4">
                                Osiedle Versus znajduje się w dzielnicy Skotniki, która
                                posiada wyjątkowo dobrze rozwiniętą infrastrukturę, oferuje
                                szeroką bazę usługowo handlową w najbliższej okolicy oraz
                                doskonałą komunikację z centrum Krakowa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURES -->
            <div class="row location-features gy-2 gy-sm-4">
                <!-- 1 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="40.333"
                                    height="34.581"
                                    viewBox="0 0 40.333 34.581"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="-0.824"
                                            y1="1.136"
                                            x2="3.564"
                                            y2="-0.969"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-2.806"
                                            y1="2.081"
                                            x2="1.583"
                                            y2="-0.019"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-1.854"
                                            y1="4.667"
                                            x2="2.407"
                                            y2="-2.875"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-1.748"
                                            y1="4.479"
                                            x2="2.512"
                                            y2="-3.062"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-1.641"
                                            y1="4.292"
                                            x2="2.62"
                                            y2="-3.25"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-6"
                                            x1="-0.003"
                                            y1="0.991"
                                            x2="0.907"
                                            y2="0.1"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="bus-stop" transform="translate(0 0.1)">
                                    <path
                                            id="Path_314"
                                            data-name="Path 314"
                                            d="M228.743,299.4h-1.872a.569.569,0,0,0-.571.571v1.23a2.294,2.294,0,0,0,2.293,2.293h1.872a.569.569,0,0,0,.571-.571v-1.23A2.294,2.294,0,0,0,228.743,299.4Zm1.15,2.951h-1.3a1.151,1.151,0,0,1-1.15-1.15v-.658h1.3a1.151,1.151,0,0,1,1.15,1.15Z"
                                            transform="translate(-208.347 -275.74)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_315"
                                            data-name="Path 315"
                                            d="M367.193,299.4a2.294,2.294,0,0,0-2.293,2.293v1.238a.569.569,0,0,0,.571.571h1.872a2.294,2.294,0,0,0,2.293-2.293v-1.23a.569.569,0,0,0-.571-.571h-1.872Zm1.3,1.809a1.151,1.151,0,0,1-1.15,1.15h-1.3V301.7a1.151,1.151,0,0,1,1.15-1.15h1.3Z"
                                            transform="translate(-335.951 -275.74)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_316"
                                            data-name="Path 316"
                                            d="M299.008,299.4h-3.737a.571.571,0,1,0,0,1.142h3.737a.571.571,0,1,0,0-1.142Z"
                                            transform="translate(-271.32 -275.74)"
                                            fill="url(#linear-gradient-3)"
                                    />
                                    <path
                                            id="Path_317"
                                            data-name="Path 317"
                                            d="M299.008,318h-3.737a.571.571,0,1,0,0,1.142h3.737a.571.571,0,1,0,0-1.142Z"
                                            transform="translate(-271.32 -292.864)"
                                            fill="url(#linear-gradient-4)"
                                    />
                                    <path
                                            id="Path_318"
                                            data-name="Path 318"
                                            d="M299.008,336.6h-3.737a.571.571,0,0,0,0,1.142h3.737a.571.571,0,0,0,0-1.142Z"
                                            transform="translate(-271.32 -309.988)"
                                            fill="url(#linear-gradient-5)"
                                    />
                                    <path
                                            id="Path_319"
                                            data-name="Path 319"
                                            d="M37.58,13.49a.569.569,0,0,0-.571.571v3.633a.569.569,0,0,0,.571.571h2.182a.569.569,0,0,0,.571-.571V14.061a.569.569,0,0,0-.571-.571h-.516V12.458a.565.565,0,0,0-.381-.539l-2.951-1.031V9.4A2.37,2.37,0,0,0,33.55,7.04H18.088A2.365,2.365,0,0,0,15.724,9.4v1.484l-2.951,1.031a.565.565,0,0,0-.381.539V13.49h-.516a.569.569,0,0,0-.571.571h0v3.633a.569.569,0,0,0,.571.571h2.182a.569.569,0,0,0,.571-.571h0V14.061a.569.569,0,0,0-.571-.571h-.516v-.627l2.19-.762V28.627a2.362,2.362,0,0,0,2.15,2.348v1.642a1.821,1.821,0,0,0,.143.714H11.067V28.3h.809a.569.569,0,0,0,.571-.571v-.42a2.135,2.135,0,0,0-2.134-2.134h-5.2V4.684H28.251a.569.569,0,0,0,.571-.571V2.4a2.5,2.5,0,0,0-2.5-2.5H.571A.581.581,0,0,0,0,.479V2.193A2.492,2.492,0,0,0,1.777,4.581V30.126H.571A.569.569,0,0,0,0,30.7V33.91a.569.569,0,0,0,.571.571h39.1a.571.571,0,1,0,0-1.142H33.613a1.85,1.85,0,0,0,.143-.714V30.983a2.362,2.362,0,0,0,2.15-2.348V12.117l2.19.762v.627H37.58Zm-24.1,3.633H12.439V14.632h1.039ZM5.1,26.326h5.2a1,1,0,0,1,.984.833H5.1v-.833ZM1.142,2.193V1.05H26.315A1.348,1.348,0,0,1,27.663,2.4V3.541H2.5A1.348,1.348,0,0,1,1.15,2.193ZM3.959,4.684V30.118H2.927V4.684ZM5.744,33.339h-4.6V31.268H5.736v2.071Zm2.388,0H6.878V30.7a.569.569,0,0,0-.571-.571H5.093V28.309H8.124v5.03Zm1.785,0H9.282v-5.03h.635Zm6.95-23.927A1.227,1.227,0,0,1,18.088,8.19H33.55a1.216,1.216,0,0,1,1.214,1.222v1.317h-17.9V9.412Zm5.783,8.949a.575.575,0,0,0-.809-.016l-.016.016L19.587,20.6H18.27a1.4,1.4,0,0,1-1.4-1.4v-7.33h8.378V20.6H21.206l1.436-1.436a.575.575,0,0,0,.016-.809ZM21.618,32.617a.711.711,0,0,1-.714.714H19.738a.711.711,0,0,1-.714-.714h0V30.983h2.6v1.634Zm1,.722a1.85,1.85,0,0,0,.143-.714V30.991h6.117v1.634a1.821,1.821,0,0,0,.143.714h-6.4Zm10-.714a.711.711,0,0,1-.714.714H30.734a.711.711,0,0,1-.714-.714V30.991h2.6v1.634Zm2.15-4a1.226,1.226,0,0,1-1.214,1.222H18.088a1.222,1.222,0,0,1-1.222-1.222V21.32a2.523,2.523,0,0,0,1.4.428H33.36a2.523,2.523,0,0,0,1.4-.428Zm0-9.425a1.4,1.4,0,0,1-1.4,1.4H30.781l1.436-1.436a.575.575,0,0,0,0-.809h0a.575.575,0,0,0-.809,0L29.171,20.6H26.394V11.863h8.378v7.33Zm3.388-4.57h1.039v2.491H38.151Z"
                                            fill="url(#linear-gradient-6)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            przystanek <br />
                            autobusowy Bunscha
                        </div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="44.038"
                                    height="40.156"
                                    viewBox="0 0 44.038 40.156"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.109"
                                            y1="1.148"
                                            x2="1.091"
                                            y2="0.071"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                </defs>
                                <path
                                        id="dinner-table"
                                        d="M43.964,57.625,43.19,49.2a3.2,3.2,0,0,0-3.2-2.916H38.683a3.3,3.3,0,0,0-2.615-2.615V41.489a2.474,2.474,0,0,0,1.557-.834,2.426,2.426,0,0,0,.559-1.961l-.568-3.733a1.018,1.018,0,0,0-1.006-.869H34.244a1.01,1.01,0,0,0-1.006.869l-.568,3.733a2.426,2.426,0,0,0,.559,1.961,2.453,2.453,0,0,0,1.557.834v2.185a3.3,3.3,0,0,0-2.615,2.615H30.795V38.754a.645.645,0,0,0-1.29,0v1.617l-3.518,1.239a.147.147,0,0,1-.086,0l-3.5-1.239V34.548h7.1v1.2a.645.645,0,1,0,1.29,0V34.616a4.626,4.626,0,0,0-.069-.774.366.366,0,0,0-.017-.095,4.716,4.716,0,0,0-1.849-2.933l-.516-.378c-.009,0-.017-.026-.017-.034V23.735A1.134,1.134,0,0,0,27.191,22.6H24.705a1.134,1.134,0,0,0-1.135,1.135v6.658c0,.017,0,.026-.017.034l-.516.378a4.876,4.876,0,0,0-1.849,2.933.444.444,0,0,1-.017.095,4.708,4.708,0,0,0-.069.774v8.808h-1.54V38.384a.909.909,0,0,0-1.2-.86V32.148A.874.874,0,0,0,17.7,31.3a.892.892,0,0,0-1.006.421q-.464.826-.9,1.651a10.894,10.894,0,0,0-.7-1.686A1.227,1.227,0,0,0,14,31.047h0a1.226,1.226,0,0,0-1.092.654c-1.342,2.58-2.056,7.458-1.729,11.724H6.169a1,1,0,0,0-.6,1.8l1.411,1.067H3.915A3.2,3.2,0,0,0,.715,49.2l-.069.766a.648.648,0,1,0,1.29.12l.069-.766a1.911,1.911,0,0,1,1.91-1.746H40.007a1.9,1.9,0,0,1,1.91,1.746l.774,8.421a.223.223,0,0,1-.095.2,9.529,9.529,0,0,1-6.881,1.247V54.959a.645.645,0,1,0-1.29,0v4.4a13.4,13.4,0,0,1-11.819,1.273V54.52a.645.645,0,1,0-1.29,0v6.116A13.435,13.435,0,0,1,9.5,59.363v-4.4a.645.645,0,1,0-1.29,0v4.232a9.529,9.529,0,0,1-6.881-1.247.205.205,0,0,1-.095-.2L1.653,53.1a.648.648,0,1,0-1.29-.12l-.43,4.645a1.519,1.519,0,0,0,.68,1.4A10.846,10.846,0,0,0,8.706,60.4a14.65,14.65,0,0,0,13.238,1.368A14.65,14.65,0,0,0,35.182,60.4a10.886,10.886,0,0,0,8.094-1.368,1.493,1.493,0,0,0,.68-1.4h.009ZM34.21,39.812a1.143,1.143,0,0,1-.267-.929l.533-3.5h1.9l.533,3.5a1.143,1.143,0,0,1-.267.929,1.159,1.159,0,0,1-.877.4h-.688a1.159,1.159,0,0,1-.877-.4h.009ZM35.431,44.9a2.015,2.015,0,0,1,1.927,1.385H33.5A2.015,2.015,0,0,1,35.431,44.9Zm-10.571-21h2.176v2.641H24.86Zm-.55,7.578a1.328,1.328,0,0,0,.542-1.075v-2.58h2.176v2.572a1.352,1.352,0,0,0,.542,1.075A4.19,4.19,0,0,1,29.2,33.24H22.658a4.132,4.132,0,0,1,1.634-1.781h0Zm-1.918,10.27,3.071,1.084a1.428,1.428,0,0,0,.946,0L29.5,41.738v4.55H22.925l1.411-1.067a1,1,0,0,0-.6-1.8h-1.35V41.738ZM13,43.416a36.529,36.529,0,0,1,5.273-4.309v4.309ZM17.075,33.7v4.671q-1.69,1.2-3.028,2.322A46.347,46.347,0,0,1,17.075,33.7ZM14,32.389a14.237,14.237,0,0,1,.938,2.666,44.122,44.122,0,0,0-2.555,6.606A22.169,22.169,0,0,1,14,32.389ZM9.257,46.28A.464.464,0,0,1,9,46.194l-1.97-1.488H22.873L20.9,46.194a.442.442,0,0,1-.258.086Z"
                                        transform="translate(0.074 -22.6)"
                                        fill="url(#linear-gradient)"
                                />
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            Restauracja <br />
                            Trzy Kaczki
                        </div>
                        <div class="location-feature-distance">500 m</div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    id="hospital"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="35.241"
                                    height="35.241"
                                    viewBox="0 0 35.241 35.241"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.071"
                                            y1="1.122"
                                            x2="0.902"
                                            y2="0.249"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-22.853"
                                            y1="17.404"
                                            x2="5.48"
                                            y2="-3.101"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-23.613"
                                            y1="17.954"
                                            x2="4.72"
                                            y2="-2.55"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-21.847"
                                            y1="16.679"
                                            x2="6.487"
                                            y2="-3.826"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-22.607"
                                            y1="17.225"
                                            x2="5.727"
                                            y2="-3.28"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-6"
                                            x1="-13.32"
                                            y1="10.5"
                                            x2="15.013"
                                            y2="-10.005"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-7"
                                            x1="-14.08"
                                            y1="11.046"
                                            x2="14.253"
                                            y2="-9.459"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-8"
                                            x1="-12.307"
                                            y1="9.766"
                                            x2="16.027"
                                            y2="-10.739"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-9"
                                            x1="-13.067"
                                            y1="10.317"
                                            x2="15.267"
                                            y2="-10.188"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-10"
                                            x1="-1.093"
                                            y1="3.648"
                                            x2="4.18"
                                            y2="-6.772"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-11"
                                            x1="-0.764"
                                            y1="2.995"
                                            x2="4.509"
                                            y2="-7.424"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-12"
                                            x1="-3.113"
                                            y1="7.641"
                                            x2="2.16"
                                            y2="-2.779"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-13"
                                            x1="-2.784"
                                            y1="6.988"
                                            x2="2.489"
                                            y2="-3.431"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-14"
                                            x1="-2.782"
                                            y1="3.952"
                                            x2="1.25"
                                            y2="-0.289"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-15"
                                            x1="-1.269"
                                            y1="5.837"
                                            x2="1.903"
                                            y2="-3.734"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-16"
                                            x1="-1.543"
                                            y1="4.571"
                                            x2="1.629"
                                            y2="-1.751"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <path
                                        id="Path_340"
                                        data-name="Path 340"
                                        d="M34.057,19.094H31.752V12.685a1.186,1.186,0,0,0,.5-.957V10.641a1.184,1.184,0,0,0-1.184-1.184H29.638a.516.516,0,1,0,0,1.032h1.425a.153.153,0,0,1,.151.151v1.088a.153.153,0,0,1-.151.151H25.756V10.5h1.335a.516.516,0,0,0,0-1.032H25.756V6.911a1.21,1.21,0,0,0-1.2-1.2h-.743A6.212,6.212,0,0,0,11.426,5.7h-.743a1.21,1.21,0,0,0-1.2,1.2V9.457h-5.3a1.184,1.184,0,0,0-1.184,1.184v1.088a1.167,1.167,0,0,0,.5.957v6.408H1.184A1.184,1.184,0,0,0,0,20.277v1.088a1.173,1.173,0,0,0,.909,1.143V34.725a.52.52,0,0,0,.516.516H33.816a.52.52,0,0,0,.516-.516V22.508a1.188,1.188,0,0,0,.909-1.149V20.271a1.184,1.184,0,0,0-1.184-1.184Zm.151,1.184v1.088a.153.153,0,0,1-.151.151h-8.3V20.133h8.3a.153.153,0,0,1,.151.151Zm-3.49-7.372v6.188H25.756V12.906ZM17.621,1.032a5.183,5.183,0,1,1-5.183,5.183A5.191,5.191,0,0,1,17.621,1.032ZM4.027,10.641a.153.153,0,0,1,.151-.151H9.485v1.383H4.178a.153.153,0,0,1-.151-.151V10.634Zm.5,2.265H9.485v6.188H4.522ZM1.941,22.542H4.446a.516.516,0,1,0,0-1.032H1.184a.153.153,0,0,1-.151-.151V20.271a.153.153,0,0,1,.151-.151h8.3V21.5H7a.516.516,0,1,0,0,1.032H9.485V34.2H1.941V22.542ZM21.2,25.688v8.521H18.137V25.688Zm-4.1,8.521H14.041V25.688H17.1Zm8.659,0V28.393a.516.516,0,1,0-1.032,0v5.816h-2.5V25.515a.861.861,0,0,0-.86-.86h-7.5a.861.861,0,0,0-.86.86v8.693h-2.5V6.9a.17.17,0,0,1,.172-.172h.743a6.216,6.216,0,0,0,12.389,0h.743a.17.17,0,0,1,.172.172V25.846a.516.516,0,0,0,1.032,0v-3.3H33.3V34.209Z"
                                        fill="url(#linear-gradient)"
                                />
                                <path
                                        id="Path_341"
                                        data-name="Path 341"
                                        d="M387.716,203.8a.52.52,0,0,0,.516-.516v-.468a.516.516,0,0,0-1.032,0v.468A.52.52,0,0,0,387.716,203.8Z"
                                        transform="translate(-360.549 -188.376)"
                                        fill="url(#linear-gradient-2)"
                                />
                                <path
                                        id="Path_342"
                                        data-name="Path 342"
                                        d="M411.716,203.8a.52.52,0,0,0,.516-.516v-.468a.516.516,0,0,0-1.032,0v.468A.52.52,0,0,0,411.716,203.8Z"
                                        transform="translate(-382.897 -188.376)"
                                        fill="url(#linear-gradient-3)"
                                />
                                <path
                                        id="Path_343"
                                        data-name="Path 343"
                                        d="M387.716,234a.52.52,0,0,0,.516-.516v-.468a.516.516,0,0,0-1.032,0v.468A.52.52,0,0,0,387.716,234Z"
                                        transform="translate(-360.549 -216.497)"
                                        fill="url(#linear-gradient-4)"
                                />
                                <path
                                        id="Path_344"
                                        data-name="Path 344"
                                        d="M411.716,234a.52.52,0,0,0,.516-.516v-.468a.516.516,0,0,0-1.032,0v.468A.52.52,0,0,0,411.716,234Z"
                                        transform="translate(-382.897 -216.497)"
                                        fill="url(#linear-gradient-5)"
                                />
                                <path
                                        id="Path_345"
                                        data-name="Path 345"
                                        d="M86.316,202.3a.52.52,0,0,0-.516.516v.468a.516.516,0,1,0,1.032,0v-.468A.52.52,0,0,0,86.316,202.3Z"
                                        transform="translate(-79.894 -188.376)"
                                        fill="url(#linear-gradient-6)"
                                />
                                <path
                                        id="Path_346"
                                        data-name="Path 346"
                                        d="M110.316,202.3a.52.52,0,0,0-.516.516v.468a.516.516,0,1,0,1.032,0v-.468A.52.52,0,0,0,110.316,202.3Z"
                                        transform="translate(-102.242 -188.376)"
                                        fill="url(#linear-gradient-7)"
                                />
                                <path
                                        id="Path_347"
                                        data-name="Path 347"
                                        d="M86.316,232.6a.52.52,0,0,0-.516.516v.468a.516.516,0,1,0,1.032,0v-.468A.52.52,0,0,0,86.316,232.6Z"
                                        transform="translate(-79.894 -216.59)"
                                        fill="url(#linear-gradient-8)"
                                />
                                <path
                                        id="Path_348"
                                        data-name="Path 348"
                                        d="M110.316,232.6a.52.52,0,0,0-.516.516v.468a.516.516,0,1,0,1.032,0v-.468A.52.52,0,0,0,110.316,232.6Z"
                                        transform="translate(-102.242 -216.59)"
                                        fill="url(#linear-gradient-9)"
                                />
                                <path
                                        id="Path_349"
                                        data-name="Path 349"
                                        d="M48.887,341.3H45.06a.861.861,0,0,0-.86.86v1.232a.861.861,0,0,0,.86.86h3.827a.861.861,0,0,0,.86-.86V342.16A.861.861,0,0,0,48.887,341.3Zm-.172,1.92H45.232v-.888h3.483Z"
                                        transform="translate(-41.158 -317.808)"
                                        fill="url(#linear-gradient-10)"
                                />
                                <path
                                        id="Path_350"
                                        data-name="Path 350"
                                        d="M48.887,394.5H45.06a.861.861,0,0,0-.86.86v1.232a.861.861,0,0,0,.86.86h3.827a.861.861,0,0,0,.86-.86V395.36A.861.861,0,0,0,48.887,394.5Zm-.172,1.914H45.232v-.888h3.483Z"
                                        transform="translate(-41.158 -367.346)"
                                        fill="url(#linear-gradient-11)"
                                />
                                <path
                                        id="Path_351"
                                        data-name="Path 351"
                                        d="M391.887,341.3H388.06a.861.861,0,0,0-.86.86v1.232a.861.861,0,0,0,.86.86h3.827a.861.861,0,0,0,.86-.86V342.16A.861.861,0,0,0,391.887,341.3Zm-.172,1.92h-3.483v-.888h3.483Z"
                                        transform="translate(-360.549 -317.808)"
                                        fill="url(#linear-gradient-12)"
                                />
                                <path
                                        id="Path_352"
                                        data-name="Path 352"
                                        d="M391.887,394.5H388.06a.861.861,0,0,0-.86.86v1.232a.861.861,0,0,0,.86.86h3.827a.861.861,0,0,0,.86-.86V395.36A.861.861,0,0,0,391.887,394.5Zm-.172,1.914h-3.483v-.888h3.483Z"
                                        transform="translate(-360.549 -367.346)"
                                        fill="url(#linear-gradient-13)"
                                />
                                <path
                                        id="Path_353"
                                        data-name="Path 353"
                                        d="M204.277,43.113h.764v.764a.981.981,0,0,0,.977.977h1.817a.981.981,0,0,0,.977-.977v-.764h.764a.981.981,0,0,0,.977-.977V40.319a.981.981,0,0,0-.977-.977h-.764v-.764a.981.981,0,0,0-.977-.977h-1.817a.981.981,0,0,0-.977.977v.764h-.764a.981.981,0,0,0-.977.977v1.817a.981.981,0,0,0,.977.977Zm.055-2.739h1.225a.52.52,0,0,0,.516-.516V38.632h1.707v1.225a.52.52,0,0,0,.516.516h1.225v1.707H208.3a.52.52,0,0,0-.516.516v1.225h-1.707V42.6a.52.52,0,0,0-.516-.516h-1.225Z"
                                        transform="translate(-189.307 -35.012)"
                                        fill="url(#linear-gradient-14)"
                                />
                                <path
                                        id="Path_354"
                                        data-name="Path 354"
                                        d="M197.363,285h-7.5a.861.861,0,0,0-.86.86v1.494a.861.861,0,0,0,.86.86h7.5a.861.861,0,0,0,.86-.86V285.86A.861.861,0,0,0,197.363,285Zm-.172,2.175h-7.158v-1.149h7.158Z"
                                        transform="translate(-175.991 -265.383)"
                                        fill="url(#linear-gradient-15)"
                                />
                                <path
                                        id="Path_355"
                                        data-name="Path 355"
                                        d="M197.363,199.5h-7.5a.861.861,0,0,0-.86.86v3.146a.861.861,0,0,0,.86.86h7.5a.861.861,0,0,0,.86-.86V200.36A.861.861,0,0,0,197.363,199.5Zm-.172,3.834h-7.158v-2.8h7.158Z"
                                        transform="translate(-175.991 -185.768)"
                                        fill="url(#linear-gradient-16)"
                                />
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            centrum Medicover <br />
                            Czerwone Maki
                        </div>
                        <div class="location-feature-distance">1.3 km</div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="40.488"
                                    height="35.461"
                                    viewBox="0 0 40.488 35.461"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="-1.066"
                                            y1="8.58"
                                            x2="3.302"
                                            y2="-13.953"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-0.586"
                                            y1="6.338"
                                            x2="1.037"
                                            y2="-1.977"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="0.042"
                                            y1="3.141"
                                            x2="1.663"
                                            y2="-5.215"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="0.07"
                                            y1="1.797"
                                            x2="0.85"
                                            y2="0.199"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-3.066"
                                            y1="3.505"
                                            x2="2.128"
                                            y2="-0.873"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-6"
                                            x1="-20.147"
                                            y1="9.059"
                                            x2="6.587"
                                            y2="-2.023"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-7"
                                            x1="-15.553"
                                            y1="7.154"
                                            x2="11.18"
                                            y2="-3.928"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-8"
                                            x1="-9.921"
                                            y1="9.371"
                                            x2="5.509"
                                            y2="-3.762"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-9"
                                            x1="-10.222"
                                            y1="9.577"
                                            x2="5.14"
                                            y2="-3.43"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-10"
                                            x1="-7.187"
                                            y1="13.673"
                                            x2="5.961"
                                            y2="-8.86"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-11"
                                            x1="-9.862"
                                            y1="18.267"
                                            x2="3.285"
                                            y2="-4.267"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-12"
                                            x1="-8.032"
                                            y1="7.78"
                                            x2="7.375"
                                            y2="-5.357"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-13"
                                            x1="-12.14"
                                            y1="11.2"
                                            x2="3.291"
                                            y2="-1.859"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g
                                        id="swimming-pool_1_"
                                        data-name="swimming-pool (1)"
                                        transform="translate(0.235 -31.1)"
                                >
                                    <g
                                            id="Group_304"
                                            data-name="Group 304"
                                            transform="translate(-0.235 45.792)"
                                    >
                                        <path
                                                id="Path_361"
                                                data-name="Path 361"
                                                d="M.591,311.682H6.645a.591.591,0,0,0,0-1.182H.591a.591.591,0,0,0,0,1.182Z"
                                                transform="translate(0.018 -303.17)"
                                                fill="url(#linear-gradient)"
                                        />
                                        <path
                                                id="Path_362"
                                                data-name="Path 362"
                                                d="M283.865,442.364a2.863,2.863,0,0,1-2.034-.843,4.092,4.092,0,0,0-5.73,0,2.9,2.9,0,0,1-4.059,0,4.092,4.092,0,0,0-5.73,0,2.835,2.835,0,0,1-.954.631.594.594,0,1,0,.441,1.1,4.06,4.06,0,0,0,1.348-.891,2.888,2.888,0,0,1,4.059,0,4.092,4.092,0,0,0,5.73,0,2.888,2.888,0,0,1,4.059,0,4.044,4.044,0,0,0,2.869,1.19.591.591,0,1,0,0-1.182Z"
                                                transform="translate(-244.081 -422.785)"
                                                fill="url(#linear-gradient-2)"
                                        />
                                        <path
                                                id="Path_363"
                                                data-name="Path 363"
                                                d="M18.9,442.259a2.846,2.846,0,0,1-.969-.638,4.092,4.092,0,0,0-5.73,0,2.9,2.9,0,0,1-4.059,0,4.092,4.092,0,0,0-5.73,0,2.849,2.849,0,0,1-2.034.843c-.772,0-.591.26-.591.583a.6.6,0,0,0,.591.591,4.044,4.044,0,0,0,2.869-1.19,2.888,2.888,0,0,1,4.059,0,4.092,4.092,0,0,0,5.73,0,2.888,2.888,0,0,1,4.059,0,3.985,3.985,0,0,0,1.371.9.589.589,0,0,0,.434-1.1h0Z"
                                                transform="translate(0.235 -422.877)"
                                                fill="url(#linear-gradient-3)"
                                        />
                                        <path
                                                id="Path_364"
                                                data-name="Path 364"
                                                d="M26.912,232.972a4.07,4.07,0,0,0,5.73,0,2.873,2.873,0,0,1,4.059,0,4.03,4.03,0,0,0,2.869,1.19c1.088,0,.591-.268.591-.591a.6.6,0,0,0-.591-.591,2.863,2.863,0,0,1-2.034-.843,4.056,4.056,0,0,0-5.73,0,2.888,2.888,0,0,1-4.059,0,4.124,4.124,0,0,0-1.025-.749V226H39.57a.591.591,0,0,0,0-1.182h-5.5v-1.837a5.468,5.468,0,0,0-2.1-4.319.589.589,0,0,0-.733.922,4.3,4.3,0,0,1,1.647,3.389v1.837H31.6v-1.837a3.031,3.031,0,0,0-6.061,0v8.016a3.9,3.9,0,0,0-1.285,0v-8.008a4.369,4.369,0,0,1,4.895-4.272.589.589,0,1,0,.158-1.167,5.624,5.624,0,0,0-5.644,2.972,5.492,5.492,0,0,0-10.4,2.475v1.837H9.035a.591.591,0,1,0,0,1.182h4.233v5.376a3.992,3.992,0,0,0-1.04.757,2.873,2.873,0,0,1-4.059,0,4.048,4.048,0,0,0-5.73,0,2.849,2.849,0,0,1-2.034.843c-.772,0-.6.252-.6.583a.59.59,0,0,0,.591.591,4.044,4.044,0,0,0,2.869-1.19,2.873,2.873,0,0,1,4.059,0,4.048,4.048,0,0,0,5.73,0,2.917,2.917,0,0,1,4.059,0,4.027,4.027,0,0,0,5.73,0,2.881,2.881,0,0,1,4.059,0h.008Zm1.663-11.831a1.847,1.847,0,0,1,1.844,1.844v1.837h-3.7v-1.837a1.848,1.848,0,0,1,1.852-1.844Zm-7.969,3.689h-3.7v-1.837a1.844,1.844,0,1,1,3.689,0v1.837h.008Zm-3.7,1.182h6.164v1.269H16.909Zm0,2.451h6.164v1.269H16.909ZM14.442,231v-8.008a4.311,4.311,0,1,1,8.623,0v1.837H21.781v-1.837a3.027,3.027,0,1,0-6.053,0V231a3.906,3.906,0,0,0-1.285,0h0Zm3.507,1.135a3.993,3.993,0,0,0-1.04-.757v-.473h6.164v.465a4.191,4.191,0,0,0-1.064.765,2.873,2.873,0,0,1-4.059,0Z"
                                                transform="translate(0.213 -217.5)"
                                                fill="url(#linear-gradient-4)"
                                        />
                                    </g>
                                    <path
                                            id="Path_365"
                                            data-name="Path 365"
                                            d="M65.142,83.685a3.042,3.042,0,1,1,3.042-3.042A3.044,3.044,0,0,1,65.142,83.685Zm0-4.895A1.86,1.86,0,1,0,67,80.65,1.864,1.864,0,0,0,65.142,78.79Z"
                                            transform="translate(-57.421 -42.835)"
                                            fill="url(#linear-gradient-5)"
                                    />
                                    <g
                                            id="Group_305"
                                            data-name="Group 305"
                                            transform="translate(7.13 31.1)"
                                    >
                                        <path
                                                id="Path_366"
                                                data-name="Path 366"
                                                d="M93.791,33.5a.6.6,0,0,1-.591-.591V31.691a.591.591,0,1,1,1.182,0v1.222A.6.6,0,0,1,93.791,33.5Z"
                                                transform="translate(-93.2 -31.1)"
                                                fill="url(#linear-gradient-6)"
                                        />
                                        <path
                                                id="Path_367"
                                                data-name="Path 367"
                                                d="M93.791,173.3a.6.6,0,0,1-.591-.591v-1.222a.591.591,0,1,1,1.182,0v1.222A.6.6,0,0,1,93.791,173.3Z"
                                                transform="translate(-93.2 -159.881)"
                                                fill="url(#linear-gradient-7)"
                                        />
                                    </g>
                                    <g
                                            id="Group_306"
                                            data-name="Group 306"
                                            transform="translate(2.805 32.891)"
                                    >
                                        <path
                                                id="Path_368"
                                                data-name="Path 368"
                                                d="M39.363,55.7l-.867-.867A.591.591,0,1,1,39.332,54l.867.867a.588.588,0,0,1,0,.835A.643.643,0,0,1,39.363,55.7Z"
                                                transform="translate(-38.325 -53.825)"
                                                fill="url(#linear-gradient-8)"
                                        />
                                        <path
                                                id="Path_369"
                                                data-name="Path 369"
                                                d="M138.163,154.5l-.867-.867a.591.591,0,0,1,.835-.835l.867.867a.568.568,0,0,1,0,.835A.587.587,0,0,1,138.163,154.5Z"
                                                transform="translate(-129.338 -144.838)"
                                                fill="url(#linear-gradient-9)"
                                        />
                                    </g>
                                    <g
                                            id="Group_307"
                                            data-name="Group 307"
                                            transform="translate(1.013 37.216)"
                                    >
                                        <path
                                                id="Path_370"
                                                data-name="Path 370"
                                                d="M17.413,109.882H16.191a.591.591,0,0,1,0-1.182h1.222a.591.591,0,1,1,0,1.182Z"
                                                transform="translate(-15.6 -108.7)"
                                                fill="url(#linear-gradient-10)"
                                        />
                                        <path
                                                id="Path_371"
                                                data-name="Path 371"
                                                d="M157.113,109.882h-1.222a.591.591,0,0,1,0-1.182h1.222a.591.591,0,0,1,0,1.182Z"
                                                transform="translate(-144.289 -108.7)"
                                                fill="url(#linear-gradient-11)"
                                        />
                                    </g>
                                    <g
                                            id="Group_308"
                                            data-name="Group 308"
                                            transform="translate(2.799 32.891)"
                                    >
                                        <path
                                                id="Path_372"
                                                data-name="Path 372"
                                                d="M38.427,154.5a.581.581,0,0,1,0-.835l.867-.867a.591.591,0,0,1,.835.835l-.867.867A.645.645,0,0,1,38.427,154.5Z"
                                                transform="translate(-38.249 -144.838)"
                                                fill="url(#linear-gradient-12)"
                                        />
                                        <path
                                                id="Path_373"
                                                data-name="Path 373"
                                                d="M137.262,55.7a.588.588,0,0,1,0-.835l.867-.867a.591.591,0,1,1,.836.835l-.867.867A.608.608,0,0,1,137.262,55.7Z"
                                                transform="translate(-129.297 -53.825)"
                                                fill="url(#linear-gradient-13)"
                                        />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            kąpielisko <br />
                            Zakrzówek
                        </div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="37.146"
                                    height="37.146"
                                    viewBox="0 0 37.146 37.146"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="-4.842"
                                            y1="5.092"
                                            x2="6.435"
                                            y2="-4.602"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-3.013"
                                            y1="4.525"
                                            x2="5.447"
                                            y2="-5.169"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-0.065"
                                            y1="1.055"
                                            x2="1.063"
                                            y2="0.086"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-2.816"
                                            y1="6.2"
                                            x2="14.1"
                                            y2="-22.881"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="Outline" transform="translate(-16 -16)">
                                    <path
                                            id="Path_320"
                                            data-name="Path 320"
                                            d="M89.857,131.715A1.857,1.857,0,1,0,88,129.857,1.853,1.853,0,0,0,89.857,131.715Zm0-2.476a.619.619,0,1,1-.619.619A.621.621,0,0,1,89.857,129.238Z"
                                            transform="translate(-66.428 -103.333)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_321"
                                            data-name="Path 321"
                                            d="M84.334,192H80.619a.621.621,0,0,0-.619.619V195.1a.621.621,0,0,0,.619.619h3.715a.621.621,0,0,0,.619-.619v-2.476A.621.621,0,0,0,84.334,192Zm-.619,2.476H81.238v-1.238h2.476Z"
                                            transform="translate(-59.047 -162.38)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_322"
                                            data-name="Path 322"
                                            d="M52.526,23.429a.621.621,0,0,0,.619-.619,3.1,3.1,0,0,0-3.1-3.1h-.619V19.1a3.1,3.1,0,0,0-3.1-3.1H45.1a.619.619,0,0,0,0,1.238h1.238A1.853,1.853,0,0,1,48.193,19.1v.619H37.049V19.1a1.853,1.853,0,0,1,1.857-1.857h3.715a.619.619,0,1,0,0-1.238H38.906a3.1,3.1,0,0,0-3.1,3.1v.619h-.619a3.1,3.1,0,0,0-3.1,3.1c0,1.71.279.619.619.619h.619V32.1H30.858V29a3.1,3.1,0,0,0-2.476-3.034v-.062A4.946,4.946,0,0,0,24.048,21V19.715h3.1a.621.621,0,0,0,.619-.619V16.619A.621.621,0,0,0,27.144,16H23.429a.621.621,0,0,0-.619.619V21a4.946,4.946,0,0,0-4.334,4.906v.062A3.1,3.1,0,0,0,16,29V48.193a.619.619,0,1,0,1.238,0V35.811h1.238v16.1H17.238V50.669a.619.619,0,0,0-1.238,0v1.857a.621.621,0,0,0,.619.619h13.62a.621.621,0,0,0,.619-.619V35.811h1.331l1.145,1.733V50.05a.621.621,0,0,0,.619.619H36.43a.621.621,0,0,0,.619-.619V43.178L43.07,52.31a1.852,1.852,0,0,0,1.548.836h2.956a.619.619,0,1,0,0-1.238H44.618a.608.608,0,0,1-.511-.279L36.678,40.354l-2.213-3.3L33.033,34.89a.629.629,0,0,0-.511-.279h-4.14V33.335H33.2a.594.594,0,0,1,.387.139.563.563,0,0,1,.132.139l2.213,3.343,8.861,13.434a.629.629,0,0,0,.511.279h6a.619.619,0,1,1,0,1.238H50.058a.619.619,0,1,0,0,1.238H51.3a1.859,1.859,0,0,0,.619-3.606V23.429h.619ZM35.811,41.305v8.126H34.573V39.425l.727,1.1.511.774ZM26.525,18.476H24.048V17.238h2.476ZM24.667,35.811v1.238H22.191V35.811Zm2.476,0V46.955H25.905V35.811ZM22.191,46.955V45.716h2.476v1.238ZM24.667,42H22.191V40.764h2.476ZM22.191,43.24h2.476v1.238H22.191Zm2.476-3.715H22.191V38.287h2.476Zm-3.715,7.429H19.715V35.811h1.238ZM17.238,29a1.852,1.852,0,0,1,1.238-1.749V32.1H17.238Zm0,5.572V33.335h1.238v1.238Zm2.476,13.62h7.429v3.715H19.715ZM29.62,35.811v16.1H28.382v-16.1ZM28.382,32.1V30.858a.619.619,0,0,0-1.238,0v3.715H19.715V25.905a3.715,3.715,0,1,1,7.429,0v2.476a.619.619,0,1,0,1.238,0v-1.13A1.859,1.859,0,0,1,29.62,29v3.1Zm6.81-11.144H50.05A1.852,1.852,0,0,1,51.8,22.191H33.435a1.859,1.859,0,0,1,1.749-1.238Zm4.334,2.476V40.183L37.049,36.43v-13ZM40.725,42h4.991V43.24H41.545Zm.039-1.238V23.429h3.715V40.764ZM35.811,23.429V34.573l-1.068-1.625a1,1,0,0,0-.17-.232V23.429Zm6.547,21.049h3.978a.621.621,0,0,0,.619-.619V41.383a.621.621,0,0,0-.619-.619h-.619V23.429h2.476v26H45.624Zm8.311,4.953H49.431v-26h1.238Z"
                                            fill="url(#linear-gradient-3)"
                                    />
                                    <path
                                            id="Path_323"
                                            data-name="Path 323"
                                            d="M97.857,448H96.619a.619.619,0,1,0,0,1.238h1.238a.619.619,0,1,0,0-1.238Z"
                                            transform="translate(-73.809 -398.569)"
                                            fill="url(#linear-gradient-4)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">przedszkole</div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="44.038"
                                    height="37.803"
                                    viewBox="0 0 44.038 37.803"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.024"
                                            y1="1.049"
                                            x2="1.034"
                                            y2="0.01"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-10.271"
                                            y1="6.036"
                                            x2="5.637"
                                            y2="-2.14"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="sport" transform="translate(0 -36.1)">
                                    <path
                                            id="Path_330"
                                            data-name="Path 330"
                                            d="M44.029,49.541V46.48a1.5,1.5,0,0,0-1.5-1.5,1.567,1.567,0,0,1-1.4-.576,1.958,1.958,0,0,1-.585-1.4V37.622A1.519,1.519,0,0,0,39.025,36.1H37.193a1.519,1.519,0,0,0-1.522,1.522v3.156a3.588,3.588,0,0,1-3.474,3.6A3.538,3.538,0,0,1,28.6,40.847V37.622A1.519,1.519,0,0,0,27.08,36.1H25.248a1.519,1.519,0,0,0-1.522,1.522v1.943a.645.645,0,0,0,1.29,0V37.622a.231.231,0,0,1,.232-.232H27.08a.231.231,0,0,1,.232.232v3.225a4.831,4.831,0,0,0,4.91,4.824,4.889,4.889,0,0,0,4.747-4.893V37.622a.231.231,0,0,1,.232-.232h1.832a.231.231,0,0,1,.232.232v5.383a3.274,3.274,0,0,0,.955,2.313,3.238,3.238,0,0,0,2.313.955c.877,0,.206.095.206.206v2.666l-10.6,5.091-10.6-5.091V46.48a.211.211,0,0,1,.06-.146.194.194,0,0,1,.146-.06,3.272,3.272,0,0,0,3.268-3.268v-.86a.645.645,0,0,0-1.29,0v.86a1.978,1.978,0,0,1-1.978,1.978c-1.092,0-.783.155-1.058.439a1.49,1.49,0,0,0-.439,1.058V60.29l-3.319,1.986a3.134,3.134,0,0,0-1.548-.413H11.523V50.719h3.853a3.1,3.1,0,1,0,0-6.209H14.7v-.705a2.532,2.532,0,0,0-2.528-2.528h-.645V40.013A1.34,1.34,0,0,0,10.19,38.68H8.273A1.34,1.34,0,0,0,6.94,40.013v1.264H6.295a2.532,2.532,0,0,0-2.528,2.528v.705H3.087a3,3,0,0,0-.834.112A.643.643,0,1,0,2.6,45.86a1.824,1.824,0,0,1,.49-.069h12.28a1.81,1.81,0,1,1,0,3.62H3.1A1.813,1.813,0,0,1,1.29,47.606c0-1,.009-.206.026-.31a.641.641,0,0,0-1.264-.215A2.959,2.959,0,0,0,0,47.623a3.1,3.1,0,0,0,3.1,3.1H6.957V61.864H3.1a3.109,3.109,0,0,0-3.1,3.1c0,1.711.318,1.608.912,2.193a3.091,3.091,0,0,0,2.193.912h.679v.705a2.532,2.532,0,0,0,2.528,2.528h.645v1.264A1.34,1.34,0,0,0,8.29,73.9h1.918a1.34,1.34,0,0,0,1.333-1.333V71.306h.026a6.061,6.061,0,0,0,.439.5,4.474,4.474,0,0,0,3.139,1.273H38.4a2.459,2.459,0,0,0,2.459-2.459V66.8H41.2a2.841,2.841,0,0,0,2.838-2.838V49.55ZM8.238,40.021a.041.041,0,0,1,.043-.043H10.2a.041.041,0,0,1,.043.043v1.264h-2Zm-3.173,4.5v-.705A1.239,1.239,0,0,1,6.3,42.575h5.865a1.239,1.239,0,0,1,1.238,1.238v.705Zm21.98,14.31a.677.677,0,0,1,.645.456,5.241,5.241,0,0,0,9.889-.095.519.519,0,0,1,.5-.353h.4a1.09,1.09,0,0,1,1.084,1.084v8.127H30.64L28.525,65.02a.643.643,0,1,0-1.058.731l1.6,2.3H27.518l-3.982-5.71,1.092-.654L26,63.636a.649.649,0,0,0,.533.275.469.469,0,0,0,.37-.12.647.647,0,0,0,.163-.894l-1.376-1.969a2.3,2.3,0,0,0,.576-1.514v-.585h.783Zm-2.614,9.21-3.079-4.412,1.058-.636,3.517,5.048h-1.5Zm-3.122,0-2.158-3.087,1.092-.654,2.614,3.741H21.31Zm-5.968-3.311a1.181,1.181,0,0,0,.112.172,2.2,2.2,0,0,0,1.746.86c.662,0,.568-.052.834-.163l1.7,2.442H11.979a3.222,3.222,0,0,1,1.5-2.2l1.849-1.109Zm9.614-5.762v.447a1,1,0,0,1-.464.834c-.009,0-.026.017-.034.017l-2.167,1.3c-.009,0-.026.017-.034.017l-2.15,1.29H20.1l-2.434,1.462a.909.909,0,0,1-1.187-.224.043.043,0,0,1-.009-.043c0-.017.017-.026.017-.034l.74-.439a.124.124,0,0,0,.026-.017l7.671-4.6c.009,0,.017-.009.026-.017ZM8.238,50.719h2V61.864h-2ZM5.065,68.77v-.705H8.711a.645.645,0,1,0,0-1.29H3.1a1.814,1.814,0,0,1,0-3.629H15.462L12.83,64.728a4.523,4.523,0,0,0-2.184,3.853c0,1.574.06.843.172,1.238v.017h0c.017.069.034.12.052.172H6.3A1.239,1.239,0,0,1,5.065,68.77Zm5.177,3.792a.041.041,0,0,1-.043.043H8.281a.041.041,0,0,1-.043-.043V71.3h2v1.264ZM39.558,70.61a1.171,1.171,0,0,1-1.17,1.17H15.049a3.2,3.2,0,0,1-3.027-2.451H39.558V70.61ZM41.192,65.5h-.344v-5.59a2.378,2.378,0,0,0-2.373-2.373h-.4a1.813,1.813,0,0,0-1.72,1.23,3.952,3.952,0,0,1-7.456.069,1.985,1.985,0,0,0-1.857-1.307c-1.436.034-1.986-.138-2.786.335L21.525,59.5V50.556l10.328,4.953a.659.659,0,0,0,.55,0l10.328-4.953V63.937a1.552,1.552,0,0,1-1.548,1.548Z"
                                            transform="translate(0)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_331"
                                            data-name="Path 331"
                                            d="M354.475,168.1h-.43a.645.645,0,1,0,0,1.29h.138v2.227h-.077a.645.645,0,1,0,0,1.29h1.445a.645.645,0,1,0,0-1.29h-.077v-2.528a.989.989,0,0,0-.989-.989Z"
                                            transform="translate(-323.009 -120.649)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">My Fitness Place</div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="37.929"
                                    height="37.017"
                                    viewBox="0 0 37.929 37.017"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.177"
                                            y1="5.414"
                                            x2="1.184"
                                            y2="-9.271"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="0.226"
                                            y1="7.48"
                                            x2="1.234"
                                            y2="-18.22"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-0.037"
                                            y1="1.221"
                                            x2="0.971"
                                            y2="-0.048"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-8.597"
                                            y1="9.574"
                                            x2="17.167"
                                            y2="-16.108"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-1.752"
                                            y1="7.88"
                                            x2="6.09"
                                            y2="-17.82"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="swimming-pool" transform="translate(0 -6)">
                                    <path
                                            id="Path_356"
                                            data-name="Path 356"
                                            d="M37.165,422.111a1.643,1.643,0,0,1-1.088-.422A3.048,3.048,0,0,0,34.129,421a3.09,3.09,0,0,0-1.947.688,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,28.059,421a3.09,3.09,0,0,0-1.947.688,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,21.988,421a3.09,3.09,0,0,0-1.947.688,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,15.917,421a3.09,3.09,0,0,0-1.947.688,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,9.846,421a3.09,3.09,0,0,0-1.947.688,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,3.776,421a3.09,3.09,0,0,0-1.947.688,1.643,1.643,0,0,1-1.088.422.691.691,0,0,0-.74.74.743.743,0,0,0,.74.74,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689A3.09,3.09,0,0,0,20.9,422.9a1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689c.97,0,.74-.333.74-.74a.743.743,0,0,0-.74-.74Z"
                                            transform="translate(0 -384.276)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_357"
                                            data-name="Path 357"
                                            d="M37.165,486H.74a.74.74,0,0,0,0,1.481H37.165a.74.74,0,0,0,0-1.481Z"
                                            transform="translate(0 -444.464)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_358"
                                            data-name="Path 358"
                                            d="M35.684,16.365a2.228,2.228,0,0,0-2.221,2.221v2.221H26.652V18.586a2.221,2.221,0,1,0-4.442,0v2.221h-4.4V19.185a2.232,2.232,0,0,0,1.436-2.08,4.076,4.076,0,0,0-1.436-2.924V8.961A2.961,2.961,0,0,0,14.851,6H4.4A2.961,2.961,0,0,0,1.436,8.961v5.219A3.683,3.683,0,0,0,0,17.1a2.013,2.013,0,0,0,1.436,2.08v1.621H.74a.74.74,0,0,0,0,1.481H22.21v1.481H10.794a.74.74,0,0,0,0,1.481H22.21V33.4h-.222a3.09,3.09,0,0,0-1.947.689,1.614,1.614,0,0,1-2.177,0,3.048,3.048,0,0,0-1.947-.689,3.09,3.09,0,0,0-1.947.689,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,9.846,33.4a3.09,3.09,0,0,0-1.947.689,1.614,1.614,0,0,1-2.177,0A3.048,3.048,0,0,0,3.776,33.4a3.09,3.09,0,0,0-1.947.689A1.643,1.643,0,0,1,.74,34.51a.686.686,0,0,0-.74.733.743.743,0,0,0,.74.74,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689,3.09,3.09,0,0,0,1.947-.689,1.614,1.614,0,0,1,2.177,0,3.048,3.048,0,0,0,1.947.689c.97,0,.74-.333.74-.74V18.586a2.228,2.228,0,0,0-2.221-2.221ZM2.221,17.845a.743.743,0,0,1-.74-.74A2.228,2.228,0,0,1,3.7,14.884H15.547A2.228,2.228,0,0,1,17.768,17.1c0,1.222-.333.74-.74.74ZM13.37,19.326v1.481H5.878V19.326Zm1.481,0h1.481v1.481H14.851ZM2.917,8.961A1.485,1.485,0,0,1,4.4,7.481H14.851a1.485,1.485,0,0,1,1.481,1.481v4.523a3.919,3.919,0,0,0-.785-.081H3.7a3.919,3.919,0,0,0-.785.081Zm0,10.365H4.4v1.481H2.917ZM33.463,27.47H26.652V25.249h6.811ZM26.652,28.95h6.811v1.481H26.652Zm6.811-6.663v1.481H26.652V22.287ZM23.935,34.081c-.074-.052-.155-.111-.244-.17V18.578a.74.74,0,0,1,1.481,0v15.91h-.148a1.643,1.643,0,0,1-1.088-.422h0Zm8.247,0a1.614,1.614,0,0,1-2.177,0,3.048,3.048,0,0,0-1.947-.689,2.046,2.046,0,0,0-1.407.341V31.912h6.811v1.547a3.389,3.389,0,0,0-1.281.622Zm4.242.237c-.111-.067-.222-.141-.348-.23a3.445,3.445,0,0,0-1.133-.585V18.593a.74.74,0,0,1,1.481,0V34.318Z"
                                            fill="url(#linear-gradient-3)"
                                    />
                                    <path
                                            id="Path_359"
                                            data-name="Path 359"
                                            d="M91.054,247.3a.718.718,0,0,0,.474.17.8.8,0,0,0,.57-.267.741.741,0,0,0-.1-1.044h0a.741.741,0,0,0-.948,1.14Z"
                                            transform="translate(-84.065 -222.219)"
                                            fill="url(#linear-gradient-4)"
                                    />
                                    <path
                                            id="Path_360"
                                            data-name="Path 360"
                                            d="M.74,247.481H4.131a.74.74,0,0,0,0-1.481H.74a.74.74,0,0,0,0,1.481Z"
                                            transform="translate(0 -222.232)"
                                            fill="url(#linear-gradient-5)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            siłownia i basen <br />
                            J&J Sport
                        </div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="40.487"
                                    height="40.412"
                                    viewBox="0 0 40.487 40.412"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.005"
                                            y1="1.039"
                                            x2="1.03"
                                            y2="0.045"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-3.595"
                                            y1="2.492"
                                            x2="6.367"
                                            y2="-2.355"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-2.932"
                                            y1="2.17"
                                            x2="7.03"
                                            y2="-2.678"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-3.203"
                                            y1="2.68"
                                            x2="6.759"
                                            y2="-3.184"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-4.449"
                                            y1="3.414"
                                            x2="5.513"
                                            y2="-2.45"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-6"
                                            x1="-2.54"
                                            y1="2.289"
                                            x2="7.422"
                                            y2="-3.575"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-7"
                                            x1="-3.786"
                                            y1="3.023"
                                            x2="6.176"
                                            y2="-2.841"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-8"
                                            x1="-6.158"
                                            y1="6.944"
                                            x2="5.531"
                                            y2="-4.367"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-9"
                                            x1="-2.458"
                                            y1="1.94"
                                            x2="7.504"
                                            y2="-2.908"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-10"
                                            x1="-1.795"
                                            y1="1.617"
                                            x2="8.167"
                                            y2="-3.23"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-11"
                                            x1="-7.261"
                                            y1="4.277"
                                            x2="2.701"
                                            y2="-0.57"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-12"
                                            x1="-6.597"
                                            y1="3.954"
                                            x2="3.366"
                                            y2="-0.893"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-13"
                                            x1="-5.485"
                                            y1="3.412"
                                            x2="4.477"
                                            y2="-1.435"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-14"
                                            x1="-4.82"
                                            y1="3.09"
                                            x2="5.142"
                                            y2="-1.758"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-15"
                                            x1="-4.145"
                                            y1="4.993"
                                            x2="4.535"
                                            y2="-3.406"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-16"
                                            x1="-5.71"
                                            y1="6.509"
                                            x2="4.252"
                                            y2="-3.131"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-17"
                                            x1="-6.373"
                                            y1="7.152"
                                            x2="3.589"
                                            y2="-2.489"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="buildings" transform="translate(0.955)">
                                    <path
                                            id="Path_374"
                                            data-name="Path 374"
                                            d="M38.94,8.288a1.779,1.779,0,0,1-1.776-1.776V4.144a.6.6,0,0,0-.592-.592H34.8V2.392a2.392,2.392,0,0,0-4.783,0v1.16H28.237a.6.6,0,0,0-.592.592V6.512A1.779,1.779,0,0,1,25.87,8.288c-.979,0-.592.268-.592.592v4.815H23.8L21.1,9.969V7.8a.6.6,0,0,0-.592-.592H18.142a.6.6,0,0,0-.592.592V9.969l-2.7,3.725H13.375V8.88a.6.6,0,0,0-.592-.592,1.779,1.779,0,0,1-1.776-1.776V4.759a4.759,4.759,0,1,0-9.519,0V6.512A1.779,1.779,0,0,1-.288,8.288c-.979,0-.592.268-.592.592V30.861a.6.6,0,0,0,.592.592A.6.6,0,0,0,.3,30.861V12.51H12.2V32.637H-.288a.6.6,0,0,0-.592.592V39.82a.6.6,0,0,0,.592.592H38.94a.6.6,0,0,0,.592-.592V8.88A.6.6,0,0,0,38.94,8.288ZM28.822,6.512V4.736H30.6a.6.6,0,0,0,.592-.592V2.392a1.208,1.208,0,0,1,2.415,0V4.144a.6.6,0,0,0,.592.592h1.776V6.512a2.956,2.956,0,0,0,2.368,2.9V36.86H26.446V9.408a2.962,2.962,0,0,0,2.368-2.9Zm-15.439,13.1H25.278v9.219H13.383V19.614Zm1.776-4.736a.606.606,0,0,0,.481-.245l2.984-4.128a.605.605,0,0,0,.111-.347V8.39h1.184v1.768a.605.605,0,0,0,.111.347l2.984,4.128a.606.606,0,0,0,.481.245H25.27V18.43H13.375V14.878h1.784ZM2.672,4.759a3.575,3.575,0,0,1,7.151,0v6.567H2.672ZM.3,9.408a2.94,2.94,0,0,0,1.184-.537v2.447H.3V9.408Zm10.711,1.918V8.88a3.05,3.05,0,0,0,1.184.537v1.918H11.015ZM.3,33.821H12.2v5.407H.3Zm13.079,5.407V30.009H25.278v9.219Zm13.071,0V38.044H38.348v1.184Z"
                                            transform="translate(0 0)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_375"
                                            data-name="Path 375"
                                            d="M98.392,181.788h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592H98.392a.6.6,0,0,0-.592.592v7.1A.6.6,0,0,0,98.392,181.788Zm.592-1.184V179.42h1.8V180.6Zm1.807-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-90.96 -159.806)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_376"
                                            data-name="Path 376"
                                            d="M30.592,181.788h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592H30.592a.6.6,0,0,0-.592.592v7.1a.6.6,0,0,0,.592.592Zm.592-1.184V179.42h1.8V180.6h-1.8Zm1.8-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-28.512 -159.806)"
                                            fill="url(#linear-gradient-3)"
                                    />
                                    <path
                                            id="Path_377"
                                            data-name="Path 377"
                                            d="M267.075,395.2h-2.984a.6.6,0,0,0-.592.592v5.667a.6.6,0,0,0,.592.592h2.984a.6.6,0,0,0,.592-.592v-5.667A.6.6,0,0,0,267.075,395.2Zm-.592,5.667h-1.8v-4.483h1.8Z"
                                            transform="translate(-243.582 -364.007)"
                                            fill="url(#linear-gradient-4)"
                                    />
                                    <path
                                            id="Path_378"
                                            data-name="Path 378"
                                            d="M267.075,263.5h-2.984a.6.6,0,0,0-.592.592v5.667a.6.6,0,0,0,.592.592h2.984a.6.6,0,0,0,.592-.592v-5.667A.6.6,0,0,0,267.075,263.5Zm-.592,5.659h-1.8v-4.483h1.8Z"
                                            transform="translate(-243.582 -242.702)"
                                            fill="url(#linear-gradient-5)"
                                    />
                                    <path
                                            id="Path_379"
                                            data-name="Path 379"
                                            d="M199.275,395.2h-2.984a.6.6,0,0,0-.592.592v5.667a.6.6,0,0,0,.592.592h2.984a.6.6,0,0,0,.592-.592v-5.667A.6.6,0,0,0,199.275,395.2Zm-.592,5.667h-1.8v-4.483h1.8Z"
                                            transform="translate(-181.133 -364.007)"
                                            fill="url(#linear-gradient-6)"
                                    />
                                    <path
                                            id="Path_380"
                                            data-name="Path 380"
                                            d="M199.275,263.5h-2.984a.6.6,0,0,0-.592.592v5.667a.6.6,0,0,0,.592.592h2.984a.6.6,0,0,0,.592-.592v-5.667A.6.6,0,0,0,199.275,263.5Zm-.592,5.659h-1.8v-4.483h1.8Z"
                                            transform="translate(-181.133 -242.702)"
                                            fill="url(#linear-gradient-7)"
                                    />
                                    <path
                                            id="Path_381"
                                            data-name="Path 381"
                                            d="M234.092,176.252h2.368a.6.6,0,0,0,.592-.592v-2.368a.6.6,0,0,0-.592-.592h-2.368a.6.6,0,0,0-.592.592v2.368A.6.6,0,0,0,234.092,176.252Zm.592-2.368h1.184v1.184h-1.184Z"
                                            transform="translate(-215.95 -159.069)"
                                            fill="url(#linear-gradient-8)"
                                    />
                                    <path
                                            id="Path_382"
                                            data-name="Path 382"
                                            d="M97.8,301.2a.6.6,0,0,0,.592.592h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592H98.392a.6.6,0,0,0-.592.592Zm1.184-.592V299.42h1.8V300.6Zm1.807-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-90.96 -270.334)"
                                            fill="url(#linear-gradient-9)"
                                    />
                                    <path
                                            id="Path_383"
                                            data-name="Path 383"
                                            d="M30,301.2a.6.6,0,0,0,.592.592h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592H30.592a.6.6,0,0,0-.592.592Zm1.184-.592V299.42h1.8V300.6Zm1.8-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-28.512 -270.334)"
                                            fill="url(#linear-gradient-10)"
                                    />
                                    <path
                                            id="Path_384"
                                            data-name="Path 384"
                                            d="M429.792,136.788h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592h-2.984a.6.6,0,0,0-.592.592v7.1A.6.6,0,0,0,429.792,136.788Zm.592-1.184V134.42h1.8V135.6Zm1.8-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-396.203 -118.358)"
                                            fill="url(#linear-gradient-11)"
                                    />
                                    <path
                                            id="Path_385"
                                            data-name="Path 385"
                                            d="M361.892,136.788h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592h-2.984a.6.6,0,0,0-.592.592v7.1A.6.6,0,0,0,361.892,136.788Zm.592-1.184V134.42h1.8V135.6Zm1.807-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-333.662 -118.358)"
                                            fill="url(#linear-gradient-12)"
                                    />
                                    <path
                                            id="Path_386"
                                            data-name="Path 386"
                                            d="M429.792,324.588h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592h-2.984a.6.6,0,0,0-.592.592V324A.6.6,0,0,0,429.792,324.588Zm.592-1.184V322.22h1.8V323.4Zm1.8-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-396.203 -291.335)"
                                            fill="url(#linear-gradient-13)"
                                    />
                                    <path
                                            id="Path_387"
                                            data-name="Path 387"
                                            d="M361.892,324.588h2.984a.6.6,0,0,0,.592-.592v-7.1a.6.6,0,0,0-.592-.592h-2.984a.6.6,0,0,0-.592.592V324A.6.6,0,0,0,361.892,324.588Zm.592-1.184V322.22h1.8V323.4Zm1.807-5.92v3.552h-1.8v-3.552Z"
                                            transform="translate(-333.662 -291.335)"
                                            fill="url(#linear-gradient-14)"
                                    />
                                    <path
                                            id="Path_388"
                                            data-name="Path 388"
                                            d="M62.392,34.883A2.392,2.392,0,1,0,60,32.492,2.4,2.4,0,0,0,62.392,34.883Zm0-3.607a1.208,1.208,0,1,1-1.208,1.208A1.208,1.208,0,0,1,62.392,31.276Z"
                                            transform="translate(-56.144 -27.724)"
                                            fill="url(#linear-gradient-15)"
                                    />
                                    <path
                                            id="Path_389"
                                            data-name="Path 389"
                                            d="M363.484,252.667a2.084,2.084,0,1,0-2.084-2.084A2.087,2.087,0,0,0,363.484,252.667Zm0-2.984a.9.9,0,1,1-.9.9A.9.9,0,0,1,363.484,249.684Z"
                                            transform="translate(-333.755 -228.886)"
                                            fill="url(#linear-gradient-16)"
                                    />
                                    <path
                                            id="Path_390"
                                            data-name="Path 390"
                                            d="M431.284,252.667a2.084,2.084,0,1,0-2.084-2.084A2.087,2.087,0,0,0,431.284,252.667Zm0-2.984a.9.9,0,1,1-.9.9A.9.9,0,0,1,431.284,249.684Z"
                                            transform="translate(-396.203 -228.886)"
                                            fill="url(#linear-gradient-17)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">Rynek Główny</div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 9 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="37.146"
                                    height="34.679"
                                    viewBox="0 0 37.146 34.679"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="-1.204"
                                            y1="2.019"
                                            x2="7.269"
                                            y2="-5.535"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-4.081"
                                            y1="4.585"
                                            x2="4.39"
                                            y2="-2.969"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="0.072"
                                            y1="0.889"
                                            x2="0.92"
                                            y2="0.079"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="shopping-cart" transform="translate(-16 -32)">
                                    <path
                                            id="Path_324"
                                            data-name="Path 324"
                                            d="M169.857,403.715A1.857,1.857,0,1,0,168,401.857,1.853,1.853,0,0,0,169.857,403.715Zm0-2.477a.619.619,0,1,1-.619.619A.621.621,0,0,1,169.857,401.238Z"
                                            transform="translate(-140.236 -339.519)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_325"
                                            data-name="Path 325"
                                            d="M417.857,400a1.857,1.857,0,1,0,1.857,1.857A1.853,1.853,0,0,0,417.857,400Zm0,2.477a.619.619,0,1,1,.619-.619A.621.621,0,0,1,417.857,402.477Z"
                                            transform="translate(-369.042 -339.519)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_326"
                                            data-name="Path 326"
                                            d="M17.857,35.715h4.636a.622.622,0,0,1,.6.449l4.675,16.353v5.905a4.336,4.336,0,1,0,5.774,2.066,4.172,4.172,0,0,0-.89-1.246H45.781a4.335,4.335,0,1,0,6.13.07l-.139-.139a1.855,1.855,0,0,0-.488-3.645H31.479V53.013l17.994-1.2a.617.617,0,0,0,.565-.5l2.477-12.383a.616.616,0,0,0-.488-.728.6.6,0,0,0-.124-.015H27.5l-1.362-4.837A1.864,1.864,0,0,0,24.351,32H17.857a1.857,1.857,0,1,0,0,3.715Zm14.86,26.624a3.1,3.1,0,1,1-3.1-3.1A3.095,3.095,0,0,1,32.717,62.339Zm19.194,0a3.1,3.1,0,1,1-3.1-3.1A3.095,3.095,0,0,1,51.911,62.339Zm-13.854-13h2.895l-.178,1.8h.116c0,.008-2.639.186-2.639.186l-.186-1.981ZM37.013,51.4l-2.469.163-.426-2.229h2.7l.193,2.066Zm.929-3.3-.356-3.715h3.862L41.076,48.1Zm4.249,1.238h2.647l-.31,1.563-2.508.17.17-1.734Zm.124-1.238.371-3.715h3.142L45.085,48.1Zm.5-4.953.371-3.715h3.638l-.743,3.715H42.809Zm-1.238,0h-4.1l-.356-3.715h4.829Zm-5.348,0H32.934l-.7-3.715h3.645l.356,3.715Zm.116,1.238L36.7,48.1H33.878l-.7-3.715h3.165ZM32.617,48.1H30.279l-1.045-3.715H31.9l.7,3.715Zm.24,1.238L33.3,51.65l-1.974.132-.689-2.446ZM45.8,50.815l.294-1.478h3.073l-.255,1.269ZM49.419,48.1H46.346l.743-3.715h3.073Zm.991-4.953H47.337l.743-3.715h3.073ZM30.968,39.43l.7,3.715H28.886L27.841,39.43H30.96Zm-6.021-5.743,5.294,18.83v3.63a.621.621,0,0,0,.619.619H51.292a.619.619,0,0,1,0,1.238H29V52.432a.645.645,0,0,0-.023-.17l-4.7-16.439a1.864,1.864,0,0,0-1.788-1.347h-.3V33.238h2.159A.622.622,0,0,1,24.947,33.687Zm-7.089-.449h3.1v1.238h-3.1a.619.619,0,1,1,0-1.238Z"
                                            fill="url(#linear-gradient-3)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">Sklep Lidl</div>
                        <div class="location-feature-distance">500 m</div>
                    </div>
                </div>
                <!-- 10 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="48.142"
                                    height="28.547"
                                    viewBox="0 0 48.142 28.547"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            y1="0.5"
                                            x2="1"
                                            y2="0.5"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            y1="0.5"
                                            y2="0.5"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="tram" transform="translate(0 -104.2)">
                                    <path
                                            id="Path_332"
                                            data-name="Path 332"
                                            d="M47.436,131.608h-7.87a2.611,2.611,0,0,0,.282-1.175c0-.423-.009-.291-.038-.423h4.88a2.224,2.224,0,0,0,2.172-1.777l1.091-5.435a5.369,5.369,0,0,0,0-2.05l-1.091-5.435a2.056,2.056,0,0,0-.348-.818,2.208,2.208,0,0,0-1.335-3.968H41.955l1.373-.978a.7.7,0,0,0,.291-.574.721.721,0,0,0-.291-.574l-3.488-2.492h7.6a.705.705,0,1,0,0-1.41H32.364a.705.705,0,0,0,0,1.41h3.075L31.95,108.4a.7.7,0,0,0-.291.574.721.721,0,0,0,.291.574l1.373.978H2.962a2.213,2.213,0,0,0-2.21,2.21,1.658,1.658,0,0,0,.874,1.758,2.115,2.115,0,0,0-.348.818L.188,120.748a5.369,5.369,0,0,0,0,2.05l1.091,5.435a2.215,2.215,0,0,0,2.172,1.777h4.88a3.215,3.215,0,0,0-.038.423,2.581,2.581,0,0,0,.282,1.175H.705a.705.705,0,1,0,0,1.41H47.436a.705.705,0,1,0,0-1.41Zm-5.228-6.027H37.592v-7.635h4.617Zm3.272,2.369a.806.806,0,0,1-.79.649H43.619V123.23h2.8l-.95,4.73Zm1.091-6.939a3.776,3.776,0,0,1,.075.8H43.628v-3.864H45.96Zm-8.933-14.969,4.062,2.905L39.519,110.5h-3.77l-2.181-1.551,4.062-2.905ZM2.962,111.909H45.17a.8.8,0,0,1,0,1.6H42.914a.705.705,0,1,0,0,1.41h1.777a.806.806,0,0,1,.79.649l.188.959H2.473l.188-.959a.806.806,0,0,1,.79-.649H39.9a.705.705,0,1,0,0-1.41H2.962a.8.8,0,0,1,0-1.6Zm33.22,6.037h0v3.864H29.3v-3.864Zm-8.293,0h0v3.864H20.253v-3.864Zm-17.338,0v7.635H5.933v-7.635Zm-8.98,3.065.611-3.065H4.513v3.864H1.5a3.835,3.835,0,0,1,.075-.8Zm2.952,7.579H3.451a.806.806,0,0,1-.79-.649l-.95-4.73h2.8v5.369Zm1.41,0v-1.608H10.55v.874a2.568,2.568,0,0,0-1.5.733Zm4.946,3.018a1.175,1.175,0,1,1,1.175-1.175A1.176,1.176,0,0,1,10.879,131.608Zm4.485,0H13.192a2.611,2.611,0,0,0,.282-1.175,2.581,2.581,0,0,0-.282-1.175h2.172a2.61,2.61,0,0,0-.282,1.175A2.581,2.581,0,0,0,15.364,131.608Zm2.3,0a1.175,1.175,0,1,1,1.175-1.175A1.176,1.176,0,0,1,17.668,131.608Zm2.3,0a2.611,2.611,0,0,0,.282-1.175c0-.423-.009-.291-.038-.423h7.7a3.214,3.214,0,0,0-.038.423,2.581,2.581,0,0,0,.282,1.175h-8.19Zm-.48-3.018a2.557,2.557,0,0,0-1.824-.752h-5.7v-4.617h.8a.705.705,0,0,0,0-1.41h-.8v-3.864h6.883v3.864H15.787a.705.705,0,0,0,0,1.41H36.181v4.617h-5.7a2.6,2.6,0,0,0-1.824.752H19.492Zm10.982,3.018a1.175,1.175,0,1,1,1.175-1.175A1.176,1.176,0,0,1,30.474,131.608Zm4.485,0H32.787a2.611,2.611,0,0,0,.282-1.175,2.581,2.581,0,0,0-.282-1.175h2.172a2.61,2.61,0,0,0-.282,1.175A2.581,2.581,0,0,0,34.959,131.608Zm2.3,0a1.175,1.175,0,1,1,1.175-1.175A1.176,1.176,0,0,1,37.263,131.608Zm.329-3.752v-.874h4.617v1.608H39.087A2.568,2.568,0,0,0,37.592,127.856Z"
                                            transform="translate(0 -0.272)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_333"
                                            data-name="Path 333"
                                            d="M29.346,104.2H.705a.705.705,0,1,0,0,1.41h28.64a.705.705,0,1,0,0-1.41Z"
                                            transform="translate(0 0)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            pętla <br />
                            Czerwone Maki
                        </div>
                        <div class="location-feature-distance">200 m</div>
                    </div>
                </div>
                <!-- 11 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="48.142"
                                    height="34.292"
                                    viewBox="0 0 48.142 34.292"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            y1="0.5"
                                            x2="1"
                                            y2="0.5"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                </defs>
                                <g id="graduation-hat" transform="translate(0 -98.2)">
                                    <path
                                            id="Path_334"
                                            data-name="Path 334"
                                            d="M120.1,444.907h0v0Z"
                                            transform="translate(-111.631 -322.252)"
                                            fill="#fff"
                                    />
                                    <path
                                            id="Path_335"
                                            data-name="Path 335"
                                            d="M164.8,566.7Z"
                                            transform="translate(-153.179 -435.463)"
                                            fill="#fff"
                                    />
                                    <path
                                            id="Path_336"
                                            data-name="Path 336"
                                            d="M225.8,566.7Z"
                                            transform="translate(-209.877 -435.463)"
                                            fill="#fff"
                                    />
                                    <path
                                            id="Path_337"
                                            data-name="Path 337"
                                            d="M152.3,550.5Z"
                                            transform="translate(-141.56 -420.405)"
                                            fill="#fff"
                                    />
                                    <path
                                            id="Path_338"
                                            data-name="Path 338"
                                            d="M47.239,118.375a4.438,4.438,0,0,0-1.107-1.248,3.028,3.028,0,0,0-.67-.381,2.113,2.113,0,0,0-.755-.148,1.8,1.8,0,0,0-.606.106l-4.6,1.671a64.5,64.5,0,0,0-.832-6.8l8.321-2.75a1.65,1.65,0,0,0,.494-.261,1.621,1.621,0,0,0,.494-.606,1.756,1.756,0,0,0,.162-.726,1.671,1.671,0,0,0-.289-.945,1.676,1.676,0,0,0-.86-.649L24.9,98.334a2.571,2.571,0,0,0-.832-.134,2.6,2.6,0,0,0-.832.134l-22.086,7.32a1.65,1.65,0,0,0-.494.261,1.621,1.621,0,0,0-.494.606A1.6,1.6,0,0,0,0,107.24a1.671,1.671,0,0,0,.289.945,1.676,1.676,0,0,0,.86.649l8.321,2.75c-.183,1.03-.374,2.249-.536,3.646a.706.706,0,0,0,1.4.162c.148-1.276.324-2.4.494-3.364l2.242.74v1.756a2.616,2.616,0,0,0-.331.113,2.7,2.7,0,0,0-1.171.966,2.634,2.634,0,0,0-.458,1.488,2.666,2.666,0,0,0,.79,1.89,30.512,30.512,0,0,0-.825,4.584A11.391,11.391,0,0,1,10,122.881a.261.261,0,0,1-.113-.219h0c.014-1.488.071-2.9.162-4.2a.707.707,0,0,0-1.41-.1h0c-.092,1.34-.155,2.771-.169,4.294v.014a1.669,1.669,0,0,0,.705,1.368A15.953,15.953,0,0,0,10.93,125.1c-.113,1.446-.183,3.1-.19,5h0a1.173,1.173,0,0,0,.247.726,1.186,1.186,0,0,0,.635.416,9,9,0,0,0,4.3,0,1.172,1.172,0,0,0,.881-1.135h0c0-1.015-.028-1.953-.063-2.828.9.226,1.89.437,2.962.606a5.942,5.942,0,0,0,.353,1.714h0a6.516,6.516,0,0,0,.536,1.114,4.438,4.438,0,0,0,1.107,1.248,3.028,3.028,0,0,0,.67.381,2.114,2.114,0,0,0,.755.148,1.8,1.8,0,0,0,.606-.106h0l10.9-3.97h0a1.763,1.763,0,0,1,.6-.12,1.034,1.034,0,0,1,.338.049,1.4,1.4,0,0,1,.522.282,1.942,1.942,0,0,1,.353.367,3.6,3.6,0,0,1,.43.684,4.994,4.994,0,0,1,.275.642h0a1.19,1.19,0,0,0,.437.571,1.174,1.174,0,0,0,.67.2,1.15,1.15,0,0,0,.4-.071h0l3.237-1.178a1.19,1.19,0,0,0,.571-.437,1.168,1.168,0,0,0,.2-.663,1.146,1.146,0,0,0-.134-.543h0a4.1,4.1,0,0,0-1.008-1.255,4.38,4.38,0,0,0-.91-.578,1.613,1.613,0,0,0-.162-.071l1.128-.409a.7.7,0,0,0-.48-1.326l-1.925.7a4.844,4.844,0,0,0,.035-.564,5.762,5.762,0,0,0-.36-1.946,6.515,6.515,0,0,0-.536-1.114,4.94,4.94,0,0,0-.825-1.015l7.073-2.574a.342.342,0,0,1,.127-.021.394.394,0,0,1,.148.021,1.2,1.2,0,0,1,.374.183,2.886,2.886,0,0,1,.663.677A4.62,4.62,0,0,1,46.442,120a4.344,4.344,0,0,1,.275,1.467,2.386,2.386,0,0,1-.049.522,1.366,1.366,0,0,1-.2.522.512.512,0,0,1-.113.127.259.259,0,0,1-.106.056l-2.207.8a.7.7,0,1,0,.48,1.326h0l2.207-.8a1.861,1.861,0,0,0,.656-.416,2.1,2.1,0,0,0,.338-.451,2.85,2.85,0,0,0,.3-.8,4.039,4.039,0,0,0,.092-.889,5.762,5.762,0,0,0-.36-1.946,6.515,6.515,0,0,0-.536-1.114ZM12.615,116.6a1.2,1.2,0,0,1,.458-.55,1.254,1.254,0,0,1,.7-.212,1.224,1.224,0,0,1,.487.1,1.2,1.2,0,0,1,.55.458,1.254,1.254,0,0,1,.212.7,1.224,1.224,0,0,1-.1.487,1.2,1.2,0,0,1-.458.55,1.253,1.253,0,0,1-.7.212,1.224,1.224,0,0,1-.487-.1,1.2,1.2,0,0,1-.55-.458,1.254,1.254,0,0,1-.212-.7A1.224,1.224,0,0,1,12.615,116.6Zm-.465,13.306a43.619,43.619,0,0,1,1.022-10.225,2.842,2.842,0,0,0,.6.071,2.4,2.4,0,0,0,.6-.071,44.015,44.015,0,0,1,1.022,10.225,7.548,7.548,0,0,1-3.244,0Zm3.5-10.923a2.286,2.286,0,0,0,.331-.4,2.634,2.634,0,0,0,.458-1.488,2.669,2.669,0,0,0-.212-1.037,2.7,2.7,0,0,0-.966-1.171,2.634,2.634,0,0,0-.783-.36v-1.29l8.765,2.9a2.651,2.651,0,0,0,1.664,0l5.712-1.89a.7.7,0,0,0-.437-1.34l-5.712,1.89a1.217,1.217,0,0,1-.776,0l-8.307-2.75,6.544-4.33a2.994,2.994,0,0,0,.346.148,4.144,4.144,0,0,0,.86.2,6.755,6.755,0,0,0,.938.063,6.625,6.625,0,0,0,1.079-.085,4.066,4.066,0,0,0,.74-.19,2.812,2.812,0,0,0,.508-.247,2.406,2.406,0,0,0,.338-.261,1.711,1.711,0,0,0,.522-1.234,1.981,1.981,0,0,0-.078-.543,2.172,2.172,0,0,0-.458-.8,3.086,3.086,0,0,0-1.156-.783,4.115,4.115,0,0,0-1.495-.275,4.179,4.179,0,0,0-1.164.162,3.332,3.332,0,0,0-.762.317,2.711,2.711,0,0,0-.889.783,2.261,2.261,0,0,0-.275.536,1.918,1.918,0,0,0-.1.606,1.782,1.782,0,0,0,.085.543l-7.291,4.823L1.594,107.494a.31.31,0,0,1-.085-.042.282.282,0,0,1-.071-.085.332.332,0,0,1-.028-.12.361.361,0,0,1,.042-.155.165.165,0,0,1,.049-.049A.468.468,0,0,1,1.587,107l22.093-7.306a1.217,1.217,0,0,1,.776,0L46.548,107a.31.31,0,0,1,.085.042.282.282,0,0,1,.071.085.332.332,0,0,1,.028.12.361.361,0,0,1-.042.155.165.165,0,0,1-.049.049.469.469,0,0,1-.085.042L33.15,111.93a.7.7,0,1,0,.437,1.34h0l3.73-1.234a64.766,64.766,0,0,1,.811,6.847l-2.933,1.065h0l-3.2,1.164h0l-10.9,3.97h0a1.832,1.832,0,0,0-.649.416,2.1,2.1,0,0,0-.338.451,2.783,2.783,0,0,0-.226.515c-1.171-.19-2.242-.423-3.2-.677a35.131,35.131,0,0,0-1.015-6.8Zm6.84-12.573a.345.345,0,0,1-.106-.085.275.275,0,0,1-.092-.219.328.328,0,0,1,.021-.141.582.582,0,0,1,.162-.268,1.525,1.525,0,0,1,.621-.4,2.752,2.752,0,0,1,.973-.176,2.665,2.665,0,0,1,.769.106,1.829,1.829,0,0,1,.458.19,1.355,1.355,0,0,1,.43.367,1.034,1.034,0,0,1,.092.169.426.426,0,0,1,.028.155.225.225,0,0,1-.014.106.251.251,0,0,1-.028.063.636.636,0,0,1-.155.141,1.442,1.442,0,0,1-.254.12,2.7,2.7,0,0,1-.578.134,5.924,5.924,0,0,1-.74.049,5.108,5.108,0,0,1-.846-.063,2.452,2.452,0,0,1-.487-.12,1.288,1.288,0,0,1-.24-.113Zm10.105,16.007a.4.4,0,0,1,.148.021,1.2,1.2,0,0,1,.374.183,2.886,2.886,0,0,1,.663.677,4.62,4.62,0,0,1,.564,1.086h0a4.344,4.344,0,0,1,.275,1.467,2.386,2.386,0,0,1-.049.522,1.366,1.366,0,0,1-.2.522.512.512,0,0,1-.113.127.259.259,0,0,1-.106.056h0l-9.068,3.3a4.845,4.845,0,0,0,.035-.564,5.762,5.762,0,0,0-.36-1.946h0a6.515,6.515,0,0,0-.536-1.114,4.94,4.94,0,0,0-.825-1.015l9.068-3.3a.342.342,0,0,1,.127-.021Zm-10.648,7.764a4.619,4.619,0,0,1-.564-1.086h0a4.344,4.344,0,0,1-.275-1.467,2.386,2.386,0,0,1,.049-.522,1.366,1.366,0,0,1,.2-.522.512.512,0,0,1,.113-.127.259.259,0,0,1,.106-.056h0a.342.342,0,0,1,.127-.021.4.4,0,0,1,.148.021,1.2,1.2,0,0,1,.374.183,2.886,2.886,0,0,1,.663.677,4.62,4.62,0,0,1,.564,1.086l.663-.24-.663.24a4.344,4.344,0,0,1,.275,1.467,2.386,2.386,0,0,1-.049.522,1.366,1.366,0,0,1-.2.522.512.512,0,0,1-.113.127.259.259,0,0,1-.106.056h0a.341.341,0,0,1-.127.021.394.394,0,0,1-.148-.021,1.2,1.2,0,0,1-.374-.183,2.886,2.886,0,0,1-.663-.677Zm16.247-.508Zm2.63-1.495a2.893,2.893,0,0,1,.338.416l-2.75,1c-.071-.183-.162-.381-.268-.592a6.427,6.427,0,0,0-.423-.705,3.928,3.928,0,0,0-.7-.762l.747-.275c.078-.007.226-.021.416-.021a5.15,5.15,0,0,1,.755.056,3.754,3.754,0,0,1,1.3.437,3.128,3.128,0,0,1,.585.444Zm-5.028-6.932a.394.394,0,0,1,.148.021,1.2,1.2,0,0,1,.374.183,2.886,2.886,0,0,1,.663.677,4.619,4.619,0,0,1,.564,1.086,4.344,4.344,0,0,1,.275,1.467,2.385,2.385,0,0,1-.049.522,1.366,1.366,0,0,1-.2.522.512.512,0,0,1-.113.127.259.259,0,0,1-.106.056l-1.368.5a4.845,4.845,0,0,0,.035-.564,5.762,5.762,0,0,0-.36-1.946h0a6.515,6.515,0,0,0-.536-1.114,4.94,4.94,0,0,0-.825-1.015l1.368-.5a.342.342,0,0,1,.127-.021Z"
                                            transform="translate(0)"
                                            fill="url(#linear-gradient)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            Uniwersytet <br />
                            Jagielloński
                        </div>
                        <div class="location-feature-distance">2.3 km</div>
                    </div>
                </div>
                <!-- 12 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="40.487"
                                    height="32.975"
                                    viewBox="0 0 40.487 32.975"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="-0.035"
                                            y1="0.971"
                                            x2="0.979"
                                            y2="0.204"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-16.1"
                                            y1="10.733"
                                            x2="18.5"
                                            y2="-10.6"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-14.86"
                                            y1="9.973"
                                            x2="19.74"
                                            y2="-11.36"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-13.56"
                                            y1="9.167"
                                            x2="21.04"
                                            y2="-12.167"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-0.576"
                                            y1="2.162"
                                            x2="0.988"
                                            y2="-0.535"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-6"
                                            x1="-26.779"
                                            y1="17.31"
                                            x2="7.939"
                                            y2="-4.096"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-7"
                                            x1="-25.394"
                                            y1="16.467"
                                            x2="9.31"
                                            y2="-4.938"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-8"
                                            x1="-24.01"
                                            y1="15.615"
                                            x2="10.694"
                                            y2="-5.782"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-9"
                                            x1="-22.626"
                                            y1="14.759"
                                            x2="12.078"
                                            y2="-6.638"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-10"
                                            x1="-21.248"
                                            y1="13.91"
                                            x2="13.455"
                                            y2="-7.487"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-11"
                                            x1="-19.864"
                                            y1="13.061"
                                            x2="14.839"
                                            y2="-8.336"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-12"
                                            x1="-4.901"
                                            y1="5.427"
                                            x2="18.477"
                                            y2="-15.907"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-13"
                                            x1="-5.82"
                                            y1="6.267"
                                            x2="17.559"
                                            y2="-15.067"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-14"
                                            x1="-6.748"
                                            y1="7.113"
                                            x2="16.631"
                                            y2="-14.22"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-15"
                                            x1="-7.671"
                                            y1="7.96"
                                            x2="15.707"
                                            y2="-13.373"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-16"
                                            x1="-4.428"
                                            y1="4.993"
                                            x2="18.95"
                                            y2="-16.34"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-17"
                                            x1="-3.419"
                                            y1="4.073"
                                            x2="19.959"
                                            y2="-17.26"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-18"
                                            x1="-8.23"
                                            y1="8.467"
                                            x2="15.149"
                                            y2="-12.867"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-19"
                                            x1="-5.351"
                                            y1="5.833"
                                            x2="18.027"
                                            y2="-15.5"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-20"
                                            x1="-6.275"
                                            y1="6.68"
                                            x2="17.104"
                                            y2="-14.653"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-21"
                                            x1="-7.198"
                                            y1="7.527"
                                            x2="16.18"
                                            y2="-13.807"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="airport" transform="translate(-0.2 -48.2)">
                                    <path
                                            id="Path_414"
                                            data-name="Path 414"
                                            d="M40.079,79.973H24.326l-2.111-1.9a.594.594,0,0,0-.791.886l1.131,1.02H4.209l3.978-4.065a1.454,1.454,0,0,1,1.036-.435H17a1.478,1.478,0,0,1,.973.372l1.3,1.178a.594.594,0,0,0,.791-.886l-1.3-1.178A2.622,2.622,0,0,0,17,74.3H14.07v-.024a4.743,4.743,0,0,0-3.835-3.385V59.919h.7a1.168,1.168,0,0,0,1.17-1.17V57.626a1.239,1.239,0,0,0,1.131-1.234V53.775A1.244,1.244,0,0,0,12,52.533h-.957l.324-1.8A1.414,1.414,0,0,0,9.974,49.07H8.962v-.277a.593.593,0,0,0-1.186,0v.277H6.763a1.4,1.4,0,0,0-1.083.506,1.422,1.422,0,0,0-.308,1.155l.316,1.811H4.739A1.244,1.244,0,0,0,3.5,53.783V56.4a1.239,1.239,0,0,0,1.131,1.234v1.123a1.168,1.168,0,0,0,1.17,1.17h.7v2.878a.593.593,0,0,0,1.186,0V59.927H9.065V70.84H7.689V65.55a.593.593,0,1,0-1.186,0v5.29H5.641a4.657,4.657,0,0,0-4.65,4.65v4.5h-.2a.593.593,0,1,0,0,1.186h39.3a.593.593,0,1,0,0-1.186ZM6.526,50.509a.239.239,0,0,1,.047-.19.212.212,0,0,1,.174-.079H9.966a.238.238,0,0,1,.174.079.229.229,0,0,1,.047.19l-.356,2.009H6.874l-.356-2.009Zm-1.858,3.25a.054.054,0,0,1,.055-.055H12a.054.054,0,0,1,.055.055v2.617a.054.054,0,0,1-.055.055H4.723a.054.054,0,0,1-.055-.055ZM5.8,57.626h5.132v1.1H5.8v-1.1ZM2.161,75.474A3.468,3.468,0,0,1,5.625,72.01H9.531a3.551,3.551,0,0,1,3.3,2.27h-3.6a2.665,2.665,0,0,0-1.882.791L2.564,79.965H2.177v-4.5Z"
                                            transform="translate(0 0)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_415"
                                            data-name="Path 415"
                                            d="M123.386,128.193a.593.593,0,1,1-.593-.593A.6.6,0,0,1,123.386,128.193Z"
                                            transform="translate(-112.353 -73.121)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_416"
                                            data-name="Path 416"
                                            d="M97.686,128.193a.593.593,0,1,1-.593-.593A.6.6,0,0,1,97.686,128.193Z"
                                            transform="translate(-88.685 -73.121)"
                                            fill="url(#linear-gradient-3)"
                                    />
                                    <path
                                            id="Path_417"
                                            data-name="Path 417"
                                            d="M70.786,128.193a.593.593,0,1,1-.593-.593A.6.6,0,0,1,70.786,128.193Z"
                                            transform="translate(-63.912 -73.121)"
                                            fill="url(#linear-gradient-4)"
                                    />
                                    <path
                                            id="Path_418"
                                            data-name="Path 418"
                                            d="M173.088,198.572l-.822.285a1.48,1.48,0,0,0-1,1.4c0,.633.016.269.055.4a1.49,1.49,0,0,0,1.423,1.075h.008l5.923-.055a2.713,2.713,0,0,0,.8-.119l3.985-1.123.111.387a1.2,1.2,0,0,0,.569.72,1.173,1.173,0,0,0,.585.15.814.814,0,0,0,.332-.047l2.562-.735a1.2,1.2,0,0,0,.822-1.487l-.1-.364,7.3-2.056a1.825,1.825,0,0,0,.237-3.424l-1.621-.72a5.857,5.857,0,0,0-4.254-.206h0l-3.8,1.321a.6.6,0,1,0,.4,1.123l3.788-1.321a4.718,4.718,0,0,1,2.728-.071l-.546.15a.592.592,0,0,0,.158,1.162c.261,0,.1,0,.158-.024l2.024-.561.5.221a.619.619,0,0,1,.38.625.612.612,0,0,1-.459.569l-7.386,2.08a1.222,1.222,0,0,0-1.281-.419l-2.562.735a1.2,1.2,0,0,0-.72.569,1.085,1.085,0,0,0-.142.435l-4.08,1.147a1.711,1.711,0,0,1-.49.071l-5.923.055h0a.287.287,0,0,1-.277-.214c0-.024-.008-.055-.008-.079a.29.29,0,0,1,.2-.277c.119-.04,0,0,.008,0l11.118-3.883a.6.6,0,0,0-.4-1.123l-5.907,2.064-3.416-3a2,2,0,0,0-1.89-.427l-.941.269a.718.718,0,0,0-.467.427.7.7,0,0,0,.063.625l2.27,3.63Zm11.324.846.008-.008,2.562-.735h0a.015.015,0,0,1,.016.016l.308,1.075a.029.029,0,0,1-.008.024l-2.562.735h-.016l-.008-.008-.308-1.075v-.016Zm-11.925-4.65a.818.818,0,0,1,.775.174l2.91,2.554-1.945.68-2.072-3.313.324-.095Z"
                                            transform="translate(-157.033 -132.753)"
                                            fill="url(#linear-gradient-5)"
                                    />
                                    <path
                                            id="Path_419"
                                            data-name="Path 419"
                                            d="M402.3,226.478a.59.59,0,1,0-.743-.38A.591.591,0,0,0,402.3,226.478Z"
                                            transform="translate(-369.59 -163.119)"
                                            fill="url(#linear-gradient-6)"
                                    />
                                    <path
                                            id="Path_420"
                                            data-name="Path 420"
                                            d="M378.642,234.078a.6.6,0,0,0,.388-.743.591.591,0,0,0-.743-.38.6.6,0,0,0-.387.743A.588.588,0,0,0,378.642,234.078Z"
                                            transform="translate(-347.807 -170.118)"
                                            fill="url(#linear-gradient-7)"
                                    />
                                    <path
                                            id="Path_421"
                                            data-name="Path 421"
                                            d="M354.842,241.629a.593.593,0,1,0-.743-.388A.6.6,0,0,0,354.842,241.629Z"
                                            transform="translate(-325.889 -177.068)"
                                            fill="url(#linear-gradient-8)"
                                    />
                                    <path
                                            id="Path_422"
                                            data-name="Path 422"
                                            d="M330.586,248.2a.593.593,0,1,0,.743.387A.6.6,0,0,0,330.586,248.2Z"
                                            transform="translate(-303.879 -184.159)"
                                            fill="url(#linear-gradient-9)"
                                    />
                                    <path
                                            id="Path_423"
                                            data-name="Path 423"
                                            d="M306.886,255.8a.593.593,0,1,0,.743.387A.6.6,0,0,0,306.886,255.8Z"
                                            transform="translate(-282.053 -191.158)"
                                            fill="url(#linear-gradient-10)"
                                    />
                                    <path
                                            id="Path_424"
                                            data-name="Path 424"
                                            d="M283.086,263.4a.593.593,0,1,0,.743.387A.6.6,0,0,0,283.086,263.4Z"
                                            transform="translate(-260.135 -198.157)"
                                            fill="url(#linear-gradient-11)"
                                    />
                                    <path
                                            id="Path_425"
                                            data-name="Path 425"
                                            d="M111.662,403.6h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-101.578 -327.296)"
                                            fill="url(#linear-gradient-12)"
                                    />
                                    <path
                                            id="Path_426"
                                            data-name="Path 426"
                                            d="M139.962,403.6h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-127.64 -327.296)"
                                            fill="url(#linear-gradient-13)"
                                    />
                                    <path
                                            id="Path_427"
                                            data-name="Path 427"
                                            d="M168.362,403.6h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-153.794 -327.296)"
                                            fill="url(#linear-gradient-14)"
                                    />
                                    <path
                                            id="Path_428"
                                            data-name="Path 428"
                                            d="M196.662,403.6h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-179.856 -327.296)"
                                            fill="url(#linear-gradient-15)"
                                    />
                                    <path
                                            id="Path_429"
                                            data-name="Path 429"
                                            d="M111.662,427.1h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-101.578 -348.938)"
                                            fill="url(#linear-gradient-16)"
                                    />
                                    <path
                                            id="Path_430"
                                            data-name="Path 430"
                                            d="M80.862,427.1h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,1,0,0-1.186Z"
                                            transform="translate(-73.213 -348.938)"
                                            fill="url(#linear-gradient-17)"
                                    />
                                    <path
                                            id="Path_431"
                                            data-name="Path 431"
                                            d="M227.693,427.1a.593.593,0,1,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-208.957 -348.938)"
                                            fill="url(#linear-gradient-18)"
                                    />
                                    <path
                                            id="Path_432"
                                            data-name="Path 432"
                                            d="M139.962,427.1h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-127.64 -348.938)"
                                            fill="url(#linear-gradient-19)"
                                    />
                                    <path
                                            id="Path_433"
                                            data-name="Path 433"
                                            d="M168.362,427.1h-.569a.593.593,0,1,0,0,1.186h.569a.593.593,0,0,0,0-1.186Z"
                                            transform="translate(-153.794 -348.938)"
                                            fill="url(#linear-gradient-20)"
                                    />
                                    <path
                                            id="Path_434"
                                            data-name="Path 434"
                                            d="M196.662,427.1h-.569a.593.593,0,0,0,0,1.186h.569a.593.593,0,1,0,0-1.186Z"
                                            transform="translate(-179.856 -348.938)"
                                            fill="url(#linear-gradient-21)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            lotnisko <br />
                            Kraków-Balice
                        </div>
                        <div class="location-feature-distance">13 km</div>
                    </div>
                </div>
                <!-- 13 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="37.524"
                                    height="37.602"
                                    viewBox="0 0 37.524 37.602"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.075"
                                            y1="1.1"
                                            x2="1.098"
                                            y2="0.069"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-2.51"
                                            y1="3.033"
                                            x2="3.63"
                                            y2="-2.133"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-0.75"
                                            y1="1.247"
                                            x2="5.38"
                                            y2="-2.4"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="shopping-center" transform="translate(-1.9 -1.975)">
                                    <path
                                            id="Path_327"
                                            data-name="Path 327"
                                            d="M38.236,30.884a3.361,3.361,0,0,0-2.314-3.19l-.813-.25V22.254l1.376-1.376a5.139,5.139,0,0,0,.5-6.692,3.007,3.007,0,0,0-1.5-1.126,3.067,3.067,0,0,0-3.44,1,5.149,5.149,0,0,0,.438,6.754l1.376,1.376v4.816l-5.629-1.751V3.992a.547.547,0,0,0-.375-.563,18.206,18.206,0,0,0-14.259,0,.6.6,0,0,0-.375.563v16.26L6.278,16.125A1.9,1.9,0,0,0,4.214,16a1.957,1.957,0,0,0-1.063,1.689V38.326H2.525a.625.625,0,1,0,0,1.251H38.8a.625.625,0,0,0,0-1.251h-.625v-7.38ZM33.357,20a3.82,3.82,0,0,1-.375-5,1.772,1.772,0,0,1,1.063-.688,1.858,1.858,0,0,1,1.939.625A3.822,3.822,0,0,1,35.671,20l-.5.5V17.626a.625.625,0,1,0-1.251,0V20.5l-.5-.5Zm2.189,8.881a2.028,2.028,0,0,1,1.438,2v7.38H28.229V26.631Zm-14.2.625h2.5v8.756h-2.5ZM20.1,38.264H17.6V29.508h2.5Zm4.378-10.006h-7.5a.673.673,0,0,0-.625.625v9.381H14.47V26.881l3.815-.688a12.8,12.8,0,0,1,4.878,0l3.815.688V38.264H25.1V28.883a.673.673,0,0,0-.625-.625ZM14.47,9.37,17.6,8.807v4.378l-3.127.563Zm0,11.883L17.6,20.69v4.378l-3.127.563V21.253ZM26.978,20l-3.127-.563v-5L26.978,15Zm-4.378-.75a12.578,12.578,0,0,0-3.752,0v-5a12.578,12.578,0,0,1,3.752,0ZM18.848,20.5a12.578,12.578,0,0,1,3.752,0V24.88a12.578,12.578,0,0,0-3.752,0V20.5Zm5,.188,3.127.563v4.378l-3.127-.563Zm3.127-6.942-3.127-.563V8.807l3.127.563ZM22.6,13a18.809,18.809,0,0,0-3.752,0V8.62a12.578,12.578,0,0,1,3.752,0Zm-8.13,2,3.127-.563v5L14.47,20ZM26.978,8.12l-3.127-.563v-4a17.831,17.831,0,0,1,3.127.876ZM22.6,3.367v4a18.809,18.809,0,0,0-3.752,0v-4a18.809,18.809,0,0,1,3.752,0h0Zm-5,.188v4L14.47,8.12V4.43A18.009,18.009,0,0,1,17.6,3.492h0ZM4.464,25.13h5a.625.625,0,1,0,0-1.251h-5V22.629h2.5a.625.625,0,0,0,0-1.251h-2.5V17.626a.581.581,0,0,1,.375-.563.665.665,0,0,1,.75.063l7.63,4.565V38.2H4.464V25.068h0Z"
                                            transform="translate(0 0)"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_328"
                                            data-name="Path 328"
                                            d="M46.625,53.5h5a.673.673,0,0,0,.625-.625V46.625A.673.673,0,0,0,51.629,46h-5a.673.673,0,0,0-.625.625v6.254A.673.673,0,0,0,46.625,53.5Zm.625-1.251V50.378H51v1.876Zm3.752-5v1.876H47.251V47.251Z"
                                            transform="translate(-16.52 -16.492)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_329"
                                            data-name="Path 329"
                                            d="M13.629,41h-5A.627.627,0,0,0,8,41.625v9.381a.627.627,0,0,0,.625.625h5a.673.673,0,0,0,.625-.625V41.625A.673.673,0,0,0,13.629,41ZM13,42.251v1.876H9.251V42.251Zm0,3.127v1.876H9.251V45.378Zm-3.752,5V48.5H13v1.876Z"
                                            transform="translate(-2.285 -14.619)"
                                            fill="url(#linear-gradient-3)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            Centrum handlowe <br />
                            ATUT Czerwone Maki
                        </div>
                        <div class="location-feature-distance">500 m</div>
                    </div>
                </div>
                <!-- 14 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="37.955"
                                    height="42.308"
                                    viewBox="0 0 37.955 42.308"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="-0.076"
                                            y1="1.037"
                                            x2="1.024"
                                            y2="0.037"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                </defs>
                                <g id="Icon" transform="translate(-47.849 -24.024)">
                                    <path
                                            id="Path_339"
                                            data-name="Path 339"
                                            d="M80.142,43.28l4.331-4.65a.8.8,0,0,0,.173-.31l1.131-4.167a.726.726,0,0,0-.21-.729.746.746,0,0,0-.748-.146L80.7,34.791a.652.652,0,0,0-.283.191l-.976,1.049,3.137-8.571a.734.734,0,0,0-.438-.939l-4.55-1.66a.733.733,0,0,0-.866.292l-8.854-1.122a.717.717,0,0,0-.538.146l-3.109,2.407-.155-.292a4.286,4.286,0,0,0-5.8-1.76c-3.894,2.079-10.03,5.362-10.03,5.362a.726.726,0,0,0-.3.985l.976,1.824a.731.731,0,0,0,.693,1.286l.483.9a.731.731,0,0,0,.693,1.286l.483.9a.731.731,0,0,0,.693,1.286l.429.8a10.851,10.851,0,0,0-.109,1.541h0V51h-.957a2.722,2.722,0,0,0-1.906.784,2.653,2.653,0,0,0-.784,1.906V60.56a2.693,2.693,0,0,0,2.69,2.7h.957a3.114,3.114,0,0,0,3.1,3.073H78.364a2.845,2.845,0,0,0,3.1-2.745h.957a2.722,2.722,0,0,0,1.906-.784,2.653,2.653,0,0,0,.784-1.906V53.712a2.722,2.722,0,0,0-.784-1.906,2.653,2.653,0,0,0-1.906-.784h-.957v-6.93a.733.733,0,0,0-.666-.729c-.21-.018-.41-.046-.611-.082h-.046ZM77.771,64.873h.547a1.64,1.64,0,0,0,1.641-1.641V46.545c0-.957-.137-1.614-.565-1.924-.246-.055-.492-.119-.729-.191a2.924,2.924,0,0,0-.739.128,5.642,5.642,0,0,0-.884.328v1.021a2.942,2.942,0,0,1-2.964,2.918H59.571a2.942,2.942,0,0,1-2.964-2.918V37.882a2.942,2.942,0,0,1,2.964-2.918h6.137a13.611,13.611,0,0,0-.319-3.228,3.3,3.3,0,0,0-.155-.429c-.647,0-1.322.018-1.933,0a9.4,9.4,0,0,0-9.6,9.4V63.222c0,4.641.173.848.483,1.158a1.628,1.628,0,0,0,1.158.483h.547a3.629,3.629,0,0,1-.729-2.188V53.921A3.643,3.643,0,0,1,58.8,50.274H74.854A3.643,3.643,0,0,1,78.5,53.921v8.754a3.629,3.629,0,0,1-.729,2.188h0ZM77.042,54.66H74.781l1.368,4.112a.735.735,0,0,1-.1.657.722.722,0,0,1-.593.3H72.072a.722.722,0,0,1-.593-.3.735.735,0,0,1-.1-.657l1.368-4.112H56.607v8.024A2.179,2.179,0,0,0,58.8,64.873H74.844a2.179,2.179,0,0,0,2.188-2.188V54.66Zm6.565,1.459v4.769a1.245,1.245,0,0,1-1.24,1.24H81.41V56.119h2.2Zm-31.368,0v5.69h-.957a1.245,1.245,0,0,1-1.24-1.24v-4.45h2.188Zm21.529.119.675,2.033H73.085l.675-2.033ZM52.24,54.66H50.051V53.7a1.245,1.245,0,0,1,1.24-1.24h.957v2.188Zm31.368,0H81.419V52.472h.957a1.245,1.245,0,0,1,1.24,1.24v.957ZM76.914,53.2H56.744a2.242,2.242,0,0,1,.52-.821,2.187,2.187,0,0,1,1.55-.638H74.863a2.193,2.193,0,0,1,2.07,1.459h-.018ZM65.3,40.07H58.076v5.836a1.479,1.479,0,0,0,1.5,1.459H74.088a1.479,1.479,0,0,0,1.5-1.459v-.228c-.119.073-.237.155-.365.237a6.129,6.129,0,0,1-7.9-.967,8.489,8.489,0,0,1-2.015-4.869h0Zm1.641-8.033a22.7,22.7,0,0,1-.155,7.3,6.32,6.32,0,0,0,1.6,4.6,4.67,4.67,0,0,0,6.027.739,15.141,15.141,0,0,1,2.152-1.195,15.273,15.273,0,0,1-4.878-4.851,59.342,59.342,0,0,0-4.012-5.845,8.518,8.518,0,0,0-.739-.766h0ZM82.294,38.01l-4.277,4.6c.173.082.356.155.529.228L82.7,38.383a2.277,2.277,0,0,1-.219-.164,1.456,1.456,0,0,1-.191-.21ZM81.2,37.052a2.218,2.218,0,0,1-.228-.182c-.055-.055-.109-.119-.164-.173l-4.532,4.86c.146.109.292.219.438.319Zm-4.577,2L76.495,39a.738.738,0,0,1-.438-.939A.73.73,0,0,1,77,37.627l.274.1.2-.538-1.4-.511a.73.73,0,0,1-.438-.939.738.738,0,0,1,.939-.438l1.4.511.2-.538-.274-.1a.733.733,0,0,1,.5-1.377l.274.1.137-.365-.3-.109a.738.738,0,0,1-.438-.939.73.73,0,0,1,.939-.438l.292.109.246-.666-1.3-.474a.733.733,0,1,1,.5-1.377l1.3.474.21-.584-.274-.1a.733.733,0,1,1,.5-1.377l.274.1.2-.538-3.182-1.167-4.4,12.018a16.191,16.191,0,0,0,1.8,2.1l.173-.182a.749.749,0,0,1,.018-.447.726.726,0,0,1,.83-.465L76.632,39Zm-11.2-.438c.109-.757.191-1.5.237-2.188H59.58a1.479,1.479,0,0,0-1.5,1.459v.729Zm16.614-2.754a1.126,1.126,0,0,0,.483.2.72.72,0,0,1,.565.438,2.123,2.123,0,0,0,.374.629L84,35.137l-1.96.72ZM70.878,34.709c.474.711.93,1.441,1.4,2.161l.091.146.739-2.024ZM63.6,28.563l-.839-1.577a2.829,2.829,0,0,0-3.83-1.158L49.55,30.842l.629,1.176a.731.731,0,0,1,.693,1.286l.483.9a.735.735,0,0,1,.967.31.727.727,0,0,1-.274.976l.483.9a.705.705,0,0,1,.62,0,10.785,10.785,0,0,1,1.906-2.954l-1.541.821a.728.728,0,1,1-.684-1.286l8.362-4.468a.728.728,0,0,1,.684,1.286l-.356.191a10.006,10.006,0,0,1,1.815-.109h.109l.164-1.295Zm10.523,3.611-5.708-.72c.119.128.237.255.356.392.328.374.666.8.994,1.249l3.839.492.511-1.4ZM52.7,32.32l8.362-4.468a.728.728,0,1,0-.684-1.286l-8.362,4.468A.728.728,0,1,0,52.7,32.32h0Zm23.48-5.763L68.4,25.572l-.274,2.17a.726.726,0,0,1-.812.629l-2.17-.274-.228,1.76h.629a3.406,3.406,0,0,1,1.705.611.729.729,0,0,1,.793-.529l6.611.839.511-1.4-5.681-.72a.726.726,0,0,1,.182-1.441l6.009.766.511-1.4Zm-9.365-.146-.474.374.429.055.055-.419Z"
                                            transform="translate(0 0)"
                                            fill-rule="evenodd"
                                            fill="url(#linear-gradient)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            Szkoła Podstawowa <br />
                            nr 66
                        </div>
                        <div class="location-feature-distance">1 km</div>
                    </div>
                </div>
                <!-- 15 -->
                <div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade">
                    <div class="location-feature">
                        <div class="location-feature-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="40.487"
                                    height="39.57"
                                    viewBox="0 0 40.487 39.57"
                            >
                                <defs>
                                    <linearGradient
                                            id="linear-gradient"
                                            x1="0.012"
                                            y1="1.024"
                                            x2="1.023"
                                            y2="0.02"
                                            gradientUnits="objectBoundingBox"
                                    >
                                        <stop offset="0" stop-color="#7a582a" />
                                        <stop offset="0.2" stop-color="#a07c47" />
                                        <stop offset="0.5" stop-color="#f7ebcf" />
                                        <stop offset="0.8" stop-color="#d0ad80" />
                                        <stop offset="1" stop-color="#b27e52" />
                                        <stop offset="1" stop-color="#ae774c" />
                                    </linearGradient>
                                    <linearGradient
                                            id="linear-gradient-2"
                                            x1="-25.309"
                                            y1="18.735"
                                            x2="8.056"
                                            y2="-4.83"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-3"
                                            x1="-14.028"
                                            y1="8.592"
                                            x2="19.094"
                                            y2="-9.864"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-4"
                                            x1="-15.537"
                                            y1="9.485"
                                            x2="17.409"
                                            y2="-8.97"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-5"
                                            x1="-17.122"
                                            y1="10.374"
                                            x2="15.817"
                                            y2="-8.08"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-6"
                                            x1="-18.714"
                                            y1="11.264"
                                            x2="14.225"
                                            y2="-7.19"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-7"
                                            x1="-23.49"
                                            y1="13.936"
                                            x2="9.456"
                                            y2="-4.518"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-8"
                                            x1="-12.686"
                                            y1="9.76"
                                            x2="20.866"
                                            y2="-13.806"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-9"
                                            x1="-20.428"
                                            y1="15.29"
                                            x2="12.909"
                                            y2="-8.269"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-10"
                                            x1="-8.15"
                                            y1="5.348"
                                            x2="24.763"
                                            y2="-13.102"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-11"
                                            x1="-9.88"
                                            y1="6.318"
                                            x2="23.033"
                                            y2="-12.132"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-12"
                                            x1="-11.611"
                                            y1="7.288"
                                            x2="21.308"
                                            y2="-11.162"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-13"
                                            x1="-13.341"
                                            y1="8.259"
                                            x2="19.571"
                                            y2="-10.191"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-14"
                                            x1="-18.533"
                                            y1="11.17"
                                            x2="14.38"
                                            y2="-7.28"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-15"
                                            x1="-6.611"
                                            y1="5.524"
                                            x2="26.726"
                                            y2="-18.035"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-16"
                                            x1="-8.451"
                                            y1="15.787"
                                            x2="11.144"
                                            y2="-17.68"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-17"
                                            x1="-2.897"
                                            y1="18.053"
                                            x2="3.577"
                                            y2="-15.413"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-18"
                                            x1="-7.917"
                                            y1="14.88"
                                            x2="11.678"
                                            y2="-18.587"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-19"
                                            x1="-2.721"
                                            y1="17.147"
                                            x2="3.753"
                                            y2="-16.32"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-20"
                                            x1="-11.848"
                                            y1="21.587"
                                            x2="7.746"
                                            y2="-11.88"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-21"
                                            x1="-4.02"
                                            y1="23.853"
                                            x2="2.454"
                                            y2="-9.613"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-22"
                                            x1="-11.314"
                                            y1="20.68"
                                            x2="8.28"
                                            y2="-12.787"
                                            xlink:href="#linear-gradient"
                                    />
                                    <linearGradient
                                            id="linear-gradient-23"
                                            x1="-3.844"
                                            y1="22.947"
                                            x2="2.632"
                                            y2="-10.52"
                                            xlink:href="#linear-gradient"
                                    />
                                </defs>
                                <g id="road" transform="translate(0 -5.9)">
                                    <path
                                            id="Path_391"
                                            data-name="Path 391"
                                            d="M39.91,29.593V26.642a1.165,1.165,0,0,0-1.163-1.163h-.04V21.112a2.171,2.171,0,0,0-2.168-2.168H36.31V17.062a1.553,1.553,0,0,0-1.551-1.551H33.02L32.26,6.944A1.135,1.135,0,0,0,31.137,5.9H27.482a.593.593,0,1,0,0,1.187h1.6l.514,8.425H23.147L23,7.087h1.709a.593.593,0,1,0,0-1.187H9.366A1.124,1.124,0,0,0,8.243,6.944l-.759,8.567H5.743a1.553,1.553,0,0,0-1.551,1.551v1.883H3.963A2.171,2.171,0,0,0,1.8,21.112v4.367h-.04A1.165,1.165,0,0,0,.593,26.642v2.951A1.1,1.1,0,0,0,0,30.574v1.274a1.114,1.114,0,0,0,1.115,1.115H3.655A1.114,1.114,0,0,0,4.77,31.847V30.574a1.1,1.1,0,0,0-.593-.981V26.642a1.165,1.165,0,0,0-1.163-1.163h-.04V21.112a.986.986,0,0,1,.981-.981h.229v1.883a1.553,1.553,0,0,0,1.551,1.551H6.8L4.984,44.109A1.242,1.242,0,0,0,6.21,45.47H34.269A1.247,1.247,0,0,0,35.5,44.109l-.87-9.9a.592.592,0,0,0-1.179.1l.87,9.9a.123.123,0,0,1-.016.063c-.016.016-.024.016-.024.016H32.505L31.248,23.573h1.258l.7,7.982a.592.592,0,1,0,1.179-.1l-.7-7.879h1.06A1.553,1.553,0,0,0,36.3,22.022V20.139h.229a.986.986,0,0,1,.981.981v4.367h-.04A1.165,1.165,0,0,0,36.31,26.65V29.6a1.13,1.13,0,0,0-.593.981v1.274a1.114,1.114,0,0,0,1.115,1.115h2.539a1.114,1.114,0,0,0,1.115-1.115V30.582a1.1,1.1,0,0,0-.593-.981h0ZM3.591,31.784h-2.4V30.645h2.4ZM3,29.458H1.78V26.666H3ZM30.267,7.087h.815l.752,8.425H30.789l-.514-8.425ZM21.96,15.512H20.845V7.087h.973l.142,8.425Zm-2.3,0H18.543l.142-8.425h.973ZM11.423,7.087H17.5l-.142,8.425H10.909l.514-8.425Zm-2,0h.815l-.514,8.425H8.678L9.43,7.087ZM6.194,44.267a.059.059,0,0,1-.016-.055L8,23.565H9.256L8,44.283H6.226a.028.028,0,0,1-.024-.016Zm13.464-20.7V44.283h-1.59l.348-20.718ZM16.882,44.283h-7.7l1.258-20.718H17.23Zm3.963,0V23.565h1.242l.348,20.718h-1.59Zm10.474,0h-7.7l-.348-20.718h6.787Zm3.805-22.269a.368.368,0,0,1-.364.364H5.743a.368.368,0,0,1-.364-.364V17.062a.368.368,0,0,1,.364-.364H34.76a.368.368,0,0,1,.364.364ZM37.5,26.658h1.218V29.45H37.5Zm1.812,5.126h-2.4V30.645h2.4Z"
                                            fill="url(#linear-gradient)"
                                    />
                                    <path
                                            id="Path_392"
                                            data-name="Path 392"
                                            d="M322.023,41.183h.024a.607.607,0,0,0,.577-.625l-.024-.483a.6.6,0,1,0-1.2.047l.024.483A.6.6,0,0,0,322.023,41.183Z"
                                            transform="translate(-295.973 -30.94)"
                                            fill="url(#linear-gradient-2)"
                                    />
                                    <path
                                            id="Path_393"
                                            data-name="Path 393"
                                            d="M337.061,399.1a.6.6,0,0,0-.57.625l.04.949a.6.6,0,0,0,.6.578h.024a.6.6,0,0,0,.57-.625l-.04-.949a.6.6,0,0,0-.625-.57h0Z"
                                            transform="translate(-309.872 -362.095)"
                                            fill="url(#linear-gradient-3)"
                                    />
                                    <path
                                            id="Path_394"
                                            data-name="Path 394"
                                            d="M334.775,346.9a.607.607,0,0,0-.577.625l.039.949a.6.6,0,0,0,.6.577h.024a.607.607,0,0,0,.577-.625l-.04-.949A.607.607,0,0,0,334.775,346.9Z"
                                            transform="translate(-307.76 -314.022)"
                                            fill="url(#linear-gradient-4)"
                                    />
                                    <path
                                            id="Path_395"
                                            data-name="Path 395"
                                            d="M332.575,294.7a.607.607,0,0,0-.577.625l.04.949a.6.6,0,0,0,.6.577h.024a.607.607,0,0,0,.578-.625l-.04-.949A.607.607,0,0,0,332.575,294.7Z"
                                            transform="translate(-305.734 -265.952)"
                                            fill="url(#linear-gradient-5)"
                                    />
                                    <path
                                            id="Path_396"
                                            data-name="Path 396"
                                            d="M330.539,244.65h.024a.607.607,0,0,0,.578-.625l-.04-.949a.6.6,0,0,0-1.2.047l.04.949A.6.6,0,0,0,330.539,244.65Z"
                                            transform="translate(-303.8 -217.881)"
                                            fill="url(#linear-gradient-6)"
                                    />
                                    <path
                                            id="Path_397"
                                            data-name="Path 397"
                                            d="M323.975,85.9a.607.607,0,0,0-.578.625l.04.949a.6.6,0,0,0,.6.577h.024a.607.607,0,0,0,.578-.625l-.04-.949A.607.607,0,0,0,323.975,85.9Z"
                                            transform="translate(-297.814 -73.669)"
                                            fill="url(#linear-gradient-7)"
                                    />
                                    <path
                                            id="Path_398"
                                            data-name="Path 398"
                                            d="M339.161,451.3a.6.6,0,0,0-.57.625l.024.483a.6.6,0,0,0,.6.578h.024a.6.6,0,0,0,.57-.625l-.024-.483A.607.607,0,0,0,339.161,451.3Z"
                                            transform="translate(-311.806 -410.163)"
                                            fill="url(#linear-gradient-8)"
                                    />
                                    <path
                                            id="Path_399"
                                            data-name="Path 399"
                                            d="M175.641,39.692a.6.6,0,0,0-.625.577l-.024.483a.6.6,0,0,0,.577.625h.024a.607.607,0,0,0,.6-.577l.024-.483A.6.6,0,0,0,175.641,39.692Z"
                                            transform="translate(-161.148 -31.118)"
                                            fill="url(#linear-gradient-9)"
                                    />
                                    <path
                                            id="Path_400"
                                            data-name="Path 400"
                                            d="M160.47,401.244h.024a.607.607,0,0,0,.6-.577l.04-.949a.6.6,0,1,0-1.2-.047l-.04.949a.6.6,0,0,0,.577.625Z"
                                            transform="translate(-147.243 -362.087)"
                                            fill="url(#linear-gradient-10)"
                                    />
                                    <path
                                            id="Path_401"
                                            data-name="Path 401"
                                            d="M162.67,349.044h.024a.607.607,0,0,0,.6-.577l.04-.949a.6.6,0,1,0-1.2-.047l-.04.949A.6.6,0,0,0,162.67,349.044Z"
                                            transform="translate(-149.269 -314.016)"
                                            fill="url(#linear-gradient-11)"
                                    />
                                    <path
                                            id="Path_402"
                                            data-name="Path 402"
                                            d="M164.77,296.844h.024a.607.607,0,0,0,.6-.577l.04-.949a.6.6,0,0,0-1.2-.047l-.04.949A.6.6,0,0,0,164.77,296.844Z"
                                            transform="translate(-151.203 -265.946)"
                                            fill="url(#linear-gradient-12)"
                                    />
                                    <path
                                            id="Path_403"
                                            data-name="Path 403"
                                            d="M166.97,244.644h.024a.607.607,0,0,0,.6-.577l.04-.949a.6.6,0,1,0-1.2-.047l-.04.949A.6.6,0,0,0,166.97,244.644Z"
                                            transform="translate(-153.229 -217.875)"
                                            fill="url(#linear-gradient-13)"
                                    />
                                    <path
                                            id="Path_404"
                                            data-name="Path 404"
                                            d="M173.557,85.892a.6.6,0,0,0-.625.577l-.04.949a.6.6,0,0,0,.578.625h.024a.607.607,0,0,0,.6-.577l.04-.949A.6.6,0,0,0,173.557,85.892Z"
                                            transform="translate(-159.214 -73.663)"
                                            fill="url(#linear-gradient-14)"
                                    />
                                    <path
                                            id="Path_405"
                                            data-name="Path 405"
                                            d="M158.57,452.877h.024a.607.607,0,0,0,.6-.577l.024-.483a.6.6,0,0,0-1.2-.047l-.024.483A.6.6,0,0,0,158.57,452.877Z"
                                            transform="translate(-145.493 -410.065)"
                                            fill="url(#linear-gradient-15)"
                                    />
                                    <path
                                            id="Path_406"
                                            data-name="Path 406"
                                            d="M109.8,156.7h-.9a.593.593,0,1,0,0,1.187h.9a.593.593,0,1,0,0-1.187Z"
                                            transform="translate(-99.733 -138.871)"
                                            fill="url(#linear-gradient-16)"
                                    />
                                    <path
                                            id="Path_407"
                                            data-name="Path 407"
                                            d="M155.427,156.7h-5.134a.593.593,0,1,0,0,1.187h5.134a.593.593,0,1,0,0-1.187Z"
                                            transform="translate(-137.858 -138.871)"
                                            fill="url(#linear-gradient-17)"
                                    />
                                    <path
                                            id="Path_408"
                                            data-name="Path 408"
                                            d="M109.8,184.9h-.9a.593.593,0,1,0,0,1.187h.9a.593.593,0,1,0,0-1.187Z"
                                            transform="translate(-99.733 -164.84)"
                                            fill="url(#linear-gradient-18)"
                                    />
                                    <path
                                            id="Path_409"
                                            data-name="Path 409"
                                            d="M155.427,184.9h-5.134a.593.593,0,1,0,0,1.187h5.134a.593.593,0,1,0,0-1.187Z"
                                            transform="translate(-137.858 -164.84)"
                                            fill="url(#linear-gradient-19)"
                                    />
                                    <path
                                            id="Path_410"
                                            data-name="Path 410"
                                            d="M283.9,156.7h-.9a.593.593,0,0,0,0,1.187h.9a.593.593,0,0,0,0-1.187Z"
                                            transform="translate(-260.06 -138.871)"
                                            fill="url(#linear-gradient-20)"
                                    />
                                    <path
                                            id="Path_411"
                                            data-name="Path 411"
                                            d="M329.527,156.7h-5.134a.593.593,0,0,0,0,1.187h5.134a.593.593,0,1,0,0-1.187Z"
                                            transform="translate(-298.185 -138.871)"
                                            fill="url(#linear-gradient-21)"
                                    />
                                    <path
                                            id="Path_412"
                                            data-name="Path 412"
                                            d="M283.9,184.9h-.9a.593.593,0,0,0,0,1.187h.9a.593.593,0,0,0,0-1.187Z"
                                            transform="translate(-260.06 -164.84)"
                                            fill="url(#linear-gradient-22)"
                                    />
                                    <path
                                            id="Path_413"
                                            data-name="Path 413"
                                            d="M329.527,184.9h-5.134a.593.593,0,0,0,0,1.187h5.134a.593.593,0,1,0,0-1.187Z"
                                            transform="translate(-298.185 -164.84)"
                                            fill="url(#linear-gradient-23)"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="location-feature-title">
                            wjazd <br />
                            na autostradę A4
                        </div>
                        <div class="location-feature-distance">3 km</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- -->
    <!-- Iframe -->
    <!-- ---------- -->
    <section class="margin-xxs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe
                            src="https://dronesandengineering.com/deweloperzy/frax_bud/ul_federowicza_2023_10/"
                            class="iframe-map"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------- -->
    <!-- Apartments 3-col -->
    <!-- ---------- -->
    <section class="margin-xxs">
        <div class="container">
            <!-- TITLE -->
            <div class="row mb-5 mb-lg-90px">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-lg-center">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag" data-aos="fade-up">Nasze</div>
                        <div class="header-2" data-aos="fade" data-aos-delay="300">
                            mieszkania
                        </div>
                    </div>
                </div>
            </div>
            <!-- AP BOXES -->
            <div class="row gx-sm-30px gy-30px gy-lg-0">
                <!-- 1 -->
                <div
                        class="col-sm-6 col-lg-4 d-flex justify-content-center"
                        data-aos="fade-right"
                >
                    <div class="ap-box ap-box-m2" data-aos="fade-right">
                        <div class="ap-box-info">
                            <div class="ap-box-tag">mieszkania</div>
                            <div class="ap-box-title">2-pokojowe</div>
                        </div>
                        <a href="/pl/mieszkanie/" class="btn btn-primary">
                            <span>Sprawdź</span>
                        </a>
                        <a href="/pl/mieszkanie/" class="ap-box-link"></a>
                    </div>
                </div>
                <!-- 2 -->
                <div
                        class="col-sm-6 col-lg-4 d-flex justify-content-center"
                        data-aos="fade"
                >
                    <div class="ap-box ap-box-m3" data-aos="fade">
                        <div class="ap-box-info">
                            <div class="ap-box-tag">mieszkania</div>
                            <div class="ap-box-title">3-pokojowe</div>
                        </div>
                        <a href="/pl/mieszkanie/" class="btn btn-primary">
                            <span>Sprawdź</span>
                        </a>
                        <a href="/pl/mieszkanie/" class="ap-box-link"></a>
                    </div>
                </div>
                <!-- 3 -->
                <div
                        class="offset-sm-3 offset-lg-0 col-sm-6 col-lg-4 d-flex justify-content-center"
                        data-aos="fade-left"
                >
                    <div class="ap-box ap-box-garden" data-aos="fade-left">
                        <div class="ap-box-info">
                            <div class="ap-box-tag">mieszkania</div>
                            <div class="ap-box-title">z ogródkiem</div>
                        </div>
                        <a href="/pl/mieszkanie/" class="btn btn-primary">
                            <span>Sprawdź</span>
                        </a>
                        <a href="/pl/mieszkanie/" class="ap-box-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection