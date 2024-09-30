@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="overflow-x-hidden">
        @include('layouts.partials.developro-header', ['title' => ($page->meta_title) ? $page->meta_title : $page->title])

        <!-- ---------- -->
        <!-- Hero  ||  Udogodnienia  -->
        <!-- ---------- -->
        <section class="margin-below-breadcrumb">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div
                                    class="offset-1 offset-sm-0 col-11 col-lg-12 col-xxl-8 pe-3"
                            >
                                <!-- TITLE -->
                                <h1 class="header-1 mb-30px" data-aos="fade-up">
                                    Udogodnienia
                                </h1>

                                <!-- PARAGRAPH -->
                                <p
                                        class="paragraph text-pretty mb-4 text fw-bold"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Nowa inwestycja w Łasku – Osiedle Targowe – oferuje szereg
                                    udogodnień, które zostały zaprojektowane z myślą o komforcie
                                    i wygodzie mieszkańców. Oto, na co możesz liczyć, wybierając
                                    mieszkanie na tym osiedlu:
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Mieszkania na parterze posiadają prywatne ogródki, idealne
                                    do relaksu na świeżym powietrzu. Lokale na wyższych piętrach
                                    są wyposażone w przestronne balkony, które pozwalają cieszyć
                                    się widokami i spędzać czas na zewnątrz.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Każde mieszkanie ma przypisane miejsce parkingowe – zarówno
                                    na zewnętrznym parkingu, jak i w garażu podziemnym. To duże
                                    ułatwienie, które pozwala na wygodne i bezpieczne parkowanie
                                    samochodu.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Na osiedlu dostępne są specjalne pomieszczenia do
                                    przechowywania wózków i rowerów. Dzięki temu mieszkańcy mogą
                                    wygodnie korzystać z tych środków transportu, nie martwiąc
                                    się o ich bezpieczne przechowywanie.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Dodatkowe miejsce do przechowywania rzeczy, które nie są
                                    potrzebne na co dzień, zapewnią komórki lokatorskie. Są one
                                    dostępne na poziomie półpiętra klatek schodowych lub w
                                    garażu podziemnym.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Klatki schodowe są wyposażone w windy, co ułatwia codzienne
                                    funkcjonowanie, szczególnie dla osób starszych, rodzin z
                                    małymi dziećmi czy osób z ograniczoną mobilnością.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Osiedle Targowe oferuje wspólny teren rekreacyjny, który
                                    jest doskonałym miejscem na odpoczynek, zabawę z dziećmi czy
                                    spotkania z sąsiadami. To idealna przestrzeń do spędzania
                                    wolnego czasu na świeżym powietrzu.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Osiedle zaprojektowano z myślą o bezpieczeństwie
                                    mieszkańców. Dobrze oświetlone alejki oraz ogrodzony teren
                                    zapewniają spokój i bezpieczeństwo na co dzień.
                                </p>
                                <p
                                        class="paragraph text-pretty fw-bold text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Te udogodnienia sprawiają, że życie na Osiedlu Targowym
                                    będzie komfortowe, funkcjonalne i przyjazne zarówno dla
                                    singli, par, rodzin z dziećmi, jak i seniorów.
                                </p>

                                <!-- BUTTON -->
                                <a
                                        class="btn btn-primary mt-3 mt-lg-5 mb-3 mb-lg-4"
                                        href="mieszkania.html"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                >
                                    Sprawdź mieszkania
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
                            <div class="offset-1 offset-sm-0 col-11 col-sm-12 mt-3 mt-lg-5">
                                <div class="row row-gap-3">
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div
                                                class="icon-box"
                                                data-aos="fade"
                                                data-aos-delay="800"
                                        >
                                            <div class="icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="65.207"
                                                        height="61"
                                                        viewBox="0 0 65.207 61"
                                                >
                                                    <g
                                                            id="Layer_32"
                                                            data-name="Layer 32"
                                                            transform="translate(-1 -3)"
                                                    >
                                                        <path
                                                                id="Path_15055"
                                                                data-name="Path 15055"
                                                                d="M26.241,62.948v-6.31a1.052,1.052,0,0,0-1.052-1.052H7.31V51.379H19.931a1.052,1.052,0,0,0,1.052-1.052V49.276a4.207,4.207,0,0,0-4.207-4.207H12.483l-.818-9.545a3.323,3.323,0,0,0-3.3-3.075,3.119,3.119,0,0,0-1.052.194V15.621h4.207v2.1H10.466a1.052,1.052,0,0,0-1.052,1.052v4.207a1.052,1.052,0,0,0,1.052,1.052H23.086a1.052,1.052,0,0,0,1.052-1.052V18.776a1.052,1.052,0,0,0-1.052-1.052H22.034v-2.1h5.259a1.052,1.052,0,0,0,1.052-1.052V10.362A7.369,7.369,0,0,0,20.983,3H2.052A1.052,1.052,0,0,0,1,4.052v58.9A1.052,1.052,0,0,0,2.052,64H25.19A1.052,1.052,0,0,0,26.241,62.948ZM8.362,34.552a1.216,1.216,0,0,1,1.205,1.136l.9,10.522a1.052,1.052,0,0,0,1.052.962h5.259a2.1,2.1,0,0,1,2.1,2.1H7.31V35.6A1.052,1.052,0,0,1,8.362,34.552ZM5.207,55.586H3.1V15.621h2.1ZM22.034,21.931H11.517v-2.1H22.034Zm-2.1-4.207h-6.31v-2.1h6.31Zm6.31-4.207H3.1v-2.1H26.241ZM20.983,5.1A5.266,5.266,0,0,1,26.136,9.31H3.1V5.1ZM24.138,61.9H3.1V57.69H24.138Z"
                                                                transform="translate(0 0)"
                                                                fill="#fffbf5"
                                                        />
                                                        <path
                                                                id="Path_15056"
                                                                data-name="Path 15056"
                                                                d="M32.052,41.828H55.19a1.052,1.052,0,0,0,1.052-1.052V26.052A1.052,1.052,0,0,0,55.19,25H32.052A1.052,1.052,0,0,0,31,26.052V40.776A1.052,1.052,0,0,0,32.052,41.828Zm12.814-2.1a3.136,3.136,0,0,1,5.923,0ZM33.1,27.1H54.138V39.724H52.981a5.259,5.259,0,0,0-10.307,0H33.1Z"
                                                                transform="translate(1.552 1.138)"
                                                                fill="#fffbf5"
                                                        />
                                                        <path
                                                                id="Path_15057"
                                                                data-name="Path 15057"
                                                                d="M61.914,26.466H60.862v-2.1A5.265,5.265,0,0,0,55.6,19.1H54.358A3.155,3.155,0,0,0,51.4,17H36.672a3.155,3.155,0,0,0-2.962,2.1H32.466a5.265,5.265,0,0,0-5.259,5.259v2.1H26.155A3.155,3.155,0,0,0,23,29.621v5.259a5.268,5.268,0,0,0,4.207,5.153V53.81a5.208,5.208,0,0,0,1.052,3.123v3.188a3.155,3.155,0,0,0,3.155,3.155h2.1a3.155,3.155,0,0,0,3.155-3.155V59.069H51.4v1.052a3.155,3.155,0,0,0,3.155,3.155h2.1a3.155,3.155,0,0,0,3.155-3.155V56.934a5.211,5.211,0,0,0,1.052-3.124V40.033a5.268,5.268,0,0,0,4.207-5.153V29.621A3.155,3.155,0,0,0,61.914,26.466ZM36.672,19.1H51.4a1.052,1.052,0,0,1,0,2.1H36.672a1.052,1.052,0,1,1,0-2.1ZM29.31,24.362a3.155,3.155,0,0,1,3.155-3.155h1.245a3.155,3.155,0,0,0,2.962,2.1H51.4a3.155,3.155,0,0,0,2.962-2.1H55.6a3.155,3.155,0,0,1,3.155,3.155V53.81A3.155,3.155,0,0,1,55.6,56.966H32.466A3.155,3.155,0,0,1,29.31,53.81ZM25.1,34.879V29.621a1.052,1.052,0,0,1,1.052-1.052h1.052v9.272a3.155,3.155,0,0,1-2.1-2.962Zm9.466,25.241a1.052,1.052,0,0,1-1.052,1.052h-2.1a1.052,1.052,0,0,1-1.052-1.052v-1.5a5.206,5.206,0,0,0,2.1.446h2.1Zm22.086,1.052h-2.1A1.052,1.052,0,0,1,53.5,60.121V59.069h2.1a5.206,5.206,0,0,0,2.1-.446v1.5A1.052,1.052,0,0,1,56.655,61.172Zm6.31-26.293a3.155,3.155,0,0,1-2.1,2.962V28.569h1.052a1.052,1.052,0,0,1,1.052,1.052Z"
                                                                transform="translate(1.138 0.724)"
                                                                fill="#fffbf5"
                                                        />
                                                        <path
                                                                id="Path_15058"
                                                                data-name="Path 15058"
                                                                d="M32.052,53.31h6.31a1.052,1.052,0,0,0,1.052-1.052V48.052A1.052,1.052,0,0,0,38.362,47h-6.31A1.052,1.052,0,0,0,31,48.052v4.207A1.052,1.052,0,0,0,32.052,53.31ZM33.1,49.1H37.31v2.1H33.1Z"
                                                                transform="translate(1.552 2.276)"
                                                                fill="#fffbf5"
                                                        />
                                                        <path
                                                                id="Path_15059"
                                                                data-name="Path 15059"
                                                                d="M54.362,47h-6.31A1.052,1.052,0,0,0,47,48.052v4.207a1.052,1.052,0,0,0,1.052,1.052h6.31a1.052,1.052,0,0,0,1.052-1.052V48.052A1.052,1.052,0,0,0,54.362,47ZM53.31,51.207H49.1V49.1H53.31Z"
                                                                transform="translate(2.379 2.276)"
                                                                fill="#fffbf5"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <div class="title">KOMUNIKACJA</div>
                                                <p class="text">
                                                    Dostępność miejsc parkingowych i dobre
                                                    skomunikowanie z resztą miasta czynią osiedle bardzo
                                                    atrakcyjnym.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div
                                                class="icon-box"
                                                data-aos="fade"
                                                data-aos-delay="800"
                                        >
                                            <div class="icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="72.228"
                                                        height="44.772"
                                                        viewBox="0 0 72.228 44.772"
                                                >
                                                    <g
                                                            id="bicycle_1_"
                                                            data-name="bicycle (1)"
                                                            transform="translate(0 -97.314)"
                                                    >
                                                        <g
                                                                id="Group_1268"
                                                                data-name="Group 1268"
                                                                transform="translate(0 97.314)"
                                                        >
                                                            <g id="Group_1267" data-name="Group 1267">
                                                                <path
                                                                        id="Path_15053"
                                                                        data-name="Path 15053"
                                                                        d="M57.33,112.29a14.836,14.836,0,0,0-4.685.756l-3.536-8.4h.734a3.666,3.666,0,1,0,0-7.332H44.85a1.17,1.17,0,1,0,0,2.34h4.992a1.326,1.326,0,1,1,0,2.652h-2.5a1.17,1.17,0,0,0-1.078,1.624l1.418,3.368H27.991l-1.259-2.652h1.894a1.17,1.17,0,1,0,0-2.34H23.42a1.317,1.317,0,0,1-.938-.388l-.517-.517a1.17,1.17,0,0,0-1.655,1.654l.517.517a3.642,3.642,0,0,0,2.592,1.074h.722l1.82,3.836-3.8,5.7a14.9,14.9,0,1,0,7.589,14.173h2.89a3.665,3.665,0,1,0,6.373-3.41l9.87-14.805,1.606,3.813a14.893,14.893,0,1,0,6.841-1.666ZM22.8,117.439a12.546,12.546,0,0,1,4.6,8.578H17.084Zm-8.936,10.3a1.17,1.17,0,0,0,1.031.618h3.638a3.824,3.824,0,1,1-2.594-4.846l-2.018,3.027A1.169,1.169,0,0,0,13.866,127.74ZM14.9,139.746a12.558,12.558,0,1,1,5.961-23.608l-3.578,5.368a6.162,6.162,0,1,0,3.667,6.853H27.4A12.574,12.574,0,0,1,14.9,139.746Zm21.216-11.232a1.326,1.326,0,1,1,1.326-1.326A1.328,1.328,0,0,1,36.114,128.514Zm.953-4.865a3.634,3.634,0,0,0-1.366-.1L30.932,113.5a1.17,1.17,0,1,0-2.114,1l4.764,10.04a3.673,3.673,0,0,0-.942,1.478H29.75a14.89,14.89,0,0,0-5.644-10.533l3.9-5.846h18.4Zm20.262,16.1a12.558,12.558,0,1,1,12.558-12.558A12.572,12.572,0,0,1,57.33,139.746Z"
                                                                        transform="translate(0 -97.314)"
                                                                        fill="#fffbf5"
                                                                />
                                                            </g>
                                                        </g>
                                                        <g
                                                                id="Group_1270"
                                                                data-name="Group 1270"
                                                                transform="translate(52.795 118.026)"
                                                        >
                                                            <g id="Group_1269" data-name="Group 1269">
                                                                <path
                                                                        id="Path_15054"
                                                                        data-name="Path 15054"
                                                                        d="M379.86,252.844l-3.365-7.991a1.17,1.17,0,0,0-2.157.908l3.365,7.991a1.17,1.17,0,1,0,2.157-.908Z"
                                                                        transform="translate(-374.246 -244.136)"
                                                                        fill="#fffbf5"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <div class="title">REKREACJA</div>
                                                <p class="text">
                                                    Tereny zielone oraz plac zabaw podnoszą atrakcyjność
                                                    inwestycji, zwłaszcza dla rodzin z dziećmi i osób
                                                    ceniących aktywny tryb życia.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                            class="col-12 col-md-6 offset-md-3 col-xl-4 offset-xl-0"
                                    >
                                        <div
                                                class="icon-box"
                                                data-aos="fade"
                                                data-aos-delay="800"
                                        >
                                            <div class="icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="63"
                                                        height="60.843"
                                                        viewBox="0 0 63 60.843"
                                                >
                                                    <path
                                                            id="graduation"
                                                            d="M75.394,32.153,44.8,21.372a.908.908,0,0,0-.6,0L13.606,32.153a.907.907,0,0,0,0,1.712l11.958,4.214V50.246a.907.907,0,0,0,.445.781c6.45,3.819,12.495,5.721,18.479,5.815h.029c5.982-.094,12.025-2,18.475-5.815a.908.908,0,0,0,.445-.781V38.079l4.171-1.47v8.679a3.042,3.042,0,0,0-1.55,4.7l-1.484,4.366a2.118,2.118,0,0,0,.074,1.528l.006.013a1.523,1.523,0,0,0,1.377.943H71a1.525,1.525,0,0,0,1.379-.947,2.1,2.1,0,0,0,.075-1.545l-1.481-4.357a3.043,3.043,0,0,0-1.546-4.7V35.969l5.972-2.1a.907.907,0,0,0,0-1.712ZM66.281,55.027a.305.305,0,0,1,.014-.094L67.6,51.1a3.047,3.047,0,0,0,1.829,0l1.3,3.827a.357.357,0,0,1,.018.1H66.28Zm2.235-5.6A1.229,1.229,0,1,1,69.743,48.2,1.231,1.231,0,0,1,68.515,49.423ZM44.5,55.027c-5.519-.089-11.126-1.824-17.124-5.3V46.979c5.943,3.3,11.554,4.947,17.109,5.034h.029c5.553-.087,11.163-1.737,17.106-5.034v2.747c-6,3.476-11.6,5.211-17.12,5.3Zm17.12-10.134c-6,3.479-11.607,5.216-17.12,5.305-5.515-.089-11.122-1.826-17.124-5.305V38.718L44.2,44.646a.908.908,0,0,0,.6,0l16.818-5.927v6.175ZM44.5,42.828,16.638,33.009,44.5,23.19l27.861,9.819L44.5,42.828ZM66.777,59.965a.911.911,0,0,0-.131.01,153.795,153.795,0,0,1-18.9,1.589c-.03-.1-.061-.189-.092-.279a.907.907,0,0,0-1.067-.586,7.152,7.152,0,0,1-3.61-.07.907.907,0,0,0-1.141.951A153.909,153.909,0,0,1,23.04,60.087a3.58,3.58,0,0,0-.92-.122c-3.167,0-5.648,4.167-5.648,9.487s2.481,9.484,5.648,9.484a3.583,3.583,0,0,0,.9-.117c4.705-.663,9.535-1.109,14.394-1.326l-.58,1a.907.907,0,0,0,.891,1.355l2.184-.256.871,2.018a.907.907,0,0,0,.78.546l.053,0a.907.907,0,0,0,.786-.454l2.132-3.691a7.084,7.084,0,0,1,2.045.184.885.885,0,0,0,.519-.031l2.044,3.538a.907.907,0,0,0,.786.454l.053,0a.908.908,0,0,0,.78-.546l.871-2.018,2.184.256a.907.907,0,0,0,.891-1.355l-.5-.862c4.212.265,8.387.7,12.434,1.291a.908.908,0,0,0,.131.01c3.165,0,5.644-4.166,5.644-9.484s-2.479-9.487-5.644-9.487ZM49.089,70.335a3.434,3.434,0,1,1-.343-2.606,3.415,3.415,0,0,1,.343,2.606Zm-2.928-7.712c.134.492.252,1.04.354,1.629a5.219,5.219,0,0,0-2.166.147c-.095-.618-.206-1.2-.334-1.736a8.933,8.933,0,0,0,2.146-.04Zm-21.487,1.2a11.88,11.88,0,0,1,1.274,5.629c0,.148,0,.295-.007.441a20.727,20.727,0,0,0-2.616.148,9.244,9.244,0,0,0,.171-1.791,7.286,7.286,0,0,0-1.543-4.862,2.749,2.749,0,0,0-1.474-.813,2.415,2.415,0,0,1,1.592-.793l.581.083a3.889,3.889,0,0,1,2.022,1.959ZM19.563,75.078a11.858,11.858,0,0,1-1.276-5.625,13.032,13.032,0,0,1,.7-4.335,1.263,1.263,0,0,1,.874-.76.849.849,0,0,1,.787.29,5.668,5.668,0,0,1,1.035,3.6,6.739,6.739,0,0,1-.463,2.531.908.908,0,0,0,.977,1.246,22.64,22.64,0,0,1,3.576-.32,10.417,10.417,0,0,1-1.1,3.37,3.892,3.892,0,0,1-2.02,1.958l-.582.083a3.347,3.347,0,0,1-2.509-2.041Zm6.29,1.54a12.935,12.935,0,0,0,1.911-7.166,12.946,12.946,0,0,0-1.908-7.165A155.5,155.5,0,0,0,42.323,63.4c.122.563.228,1.181.314,1.844a5.237,5.237,0,0,0-1.722,6.189l-2.423,4.2c-4.249.159-8.483.49-12.639.987Zm15.882,2.62-.424-.981a.909.909,0,0,0-.939-.542l-1.06.124,2.719-4.709a5.216,5.216,0,0,0,2.382,1.387l.042.01-2.721,4.71Zm3.842-3.023.2-.34.221.382c-.139-.017-.278-.031-.417-.042Zm5.6,1.5a.908.908,0,0,0-.939.542l-.423.981-2.72-4.708a5.277,5.277,0,0,0,2.422-1.4l2.72,4.71-1.06-.124Zm18.158-2.637a3.358,3.358,0,0,1-2.5,2.042c-4.457-.65-9.067-1.108-13.71-1.365l-2.5-4.322a5.32,5.32,0,0,0,.212-.628,5.252,5.252,0,0,0-2.388-5.872c-.072-.546-.158-1.069-.257-1.563a155.7,155.7,0,0,0,18.638-1.589,3.358,3.358,0,0,1,2.5,2.043,13.064,13.064,0,0,1,0,11.255ZM47.07,69.794a1.343,1.343,0,1,1-.948-1.646,1.346,1.346,0,0,1,.948,1.646Z"
                                                            transform="translate(-13 -21.32)"
                                                            fill="#fffbf5"
                                                            fill-rule="evenodd"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <div class="title">EDUKACJA</div>
                                                <p class="text">
                                                    Bliskość szkół, przedszkoli i żłobków sprawia, że
                                                    tworzymy osiedle przyjazne dla rodzin i zróżnicowane
                                                    pod względem oferty edukacyjnej.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                            class="offset-lg-1 col-12 col-lg-5 mt-5 mt-lg-0"
                            data-aos="fade"
                    >
                        <picture>
                            <source
                                    srcset="{{ asset('images/facilities/hero.webp') }}"
                                    media="(max-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/facilities/hero@2x.webp') }}"
                                    media="(min-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/facilities/hero.png') }}"
                                    media="(max-width: 992px)"
                                    type="image/png"
                            />
                            <source
                                    srcset="{{ asset('images/facilities/hero@2x.png') }}"
                                    media="(min-width: 992px)"
                                    type="image/png"
                            />
                            <img
                                    src="{{ asset('images/facilities/hero@2x.png') }}"
                                    width="986"
                                    height="1348"
                                    class="img-fluid hero-img"
                                    alt="Osiedle Targowe - Udogodnienia"
                            />
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- WHY US  ||  OSIEDLE TARGOWE -->
        <!-- ---------- -->
        <section class="margin-xxs why-us section-max-width">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-content-center">
                    <div class="col-lg-10">
                        <div class="text text-pretty">
                <span class="title" data-aos="fade" data-aos-delay="200"
                >OSIEDLE TARGOWE</span
                >
                            <span data-aos="fade-right" data-aos-delay="300">
                  to nie tylko inwestycja <br/>
                  w nieruchomość,
                </span>
                            <span
                                    class="text-primary fw-semibold"
                                    data-aos="fade"
                                    data-aos-delay="400"
                            >to inwestycja w jakość życia</span
                            >
                            <br/>
                            <span data-aos="fade-right" data-aos-delay="600">
                  i najwyższy standard w mieście.
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- SLIDER  ||  Nasza okolica -->
        <!-- ---------- -->
        <section class="margin-sm">
            <div class="container">
                <div class="row row-gap-4 row-gap-lg-5 position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4">
                        <!-- TITLE -->
                        <h2 class="header-1 mb-30px" data-aos="fade-up">Nasza okolica</h2>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty fw-bold mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Osiedle Batorego w Łasku to jedna z bardziej cenionych
                            lokalizacji w tej miejscowości.
                        </p>
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Osiedle jest bardzo dobrze skomunikowane z resztą miasta, co
                            ułatwia dostęp do najważniejszych punktów Łasku, takich jak
                            szkoły, przedszkola, sklepy, a także obiekty sportowe i
                            rekreacyjne. W pobliżu znajdują się zarówno mniejsze sklepy, jak
                            i większe sieci handlowe, takie jak LIDL czy VENDO PARK, które
                            zaspokajają potrzeby mieszkańców w zakresie codziennych zakupów.
                        </p>
                        <p
                                class="paragraph text-pretty mb-30px text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Osiedle Batorego to również miejsce bezpieczne, z rozwiniętą
                            infrastrukturą, co sprawia, że jest idealne zarówno dla rodzin z
                            dziećmi, jak i osób starszych. Cicha i spokojna okolica, w
                            połączeniu z dobrym dostępem do usług i atrakcji, czyni je
                            doskonałym miejscem do życia.
                        </p>
                        <!-- BUTTON -->
                        <a
                                class="btn btn-primary"
                                href="mieszkania.html"
                                data-aos="fade-up"
                                data-aos-delay="300"
                        >
                            Sprawdź mieszkania
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
                    <!-- SLIDER -->
                    <div class="col-12 col-lg-8 position-relative">
                        <div class="slider-simple">
                            <!-- SLIDES -->
                            <div class="slick-slider-asset">
                                <!-- 1 - PLACE ZABAW-->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/facilities/area-1.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-1@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-1.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-1@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
                                            />
                                            <img
                                                    src="{{ asset('images/facilities/area-1@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title title-2lh mb-3">PLAC ZABAW</div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Dostępność placów zabaw i bezpiecznych miejsc do zabawy
                                        jest bardzo ważna dla rodzin z dziećmi. Wychodząc
                                        naprzeciw tym potrzebom, projektujemy osiedle z
                                        przestrzeniami dostosowanymi do różnych grup wiekowych, co
                                        sprawia, że mieszkania stają się bardziej atrakcyjne dla
                                        młodych rodzin.
                                    </p>
                                </div>
                                <!-- 2 - SZKOŁY-->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/facilities/area-2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
                                            />
                                            <img
                                                    src="{{ asset('images/facilities/area-2@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title title-2lh mb-3">EDUKACJA</div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Do najbliższej szkoły lub przedszkola dzieli nas jedynie
                                        przejście na drugą stronę ulicy. Lokalizacja w centrum
                                        miasta sprawia, że mieszkańcy mają szeroki wybór oferty
                                        edukacyjnej.
                                    </p>
                                </div>
                                <!-- 3 - MIEJSCA POSTOJOWE -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/facilities/area-3.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-3@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-3.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-3@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
                                            />
                                            <img
                                                    src="{{ asset('images/facilities/area-3@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title title-2lh mb-3">
                                        REKREACJA I TERENY ZIELONE
                                    </div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Jedynie 1 km dzieli nowe osiedle od największej atrakcji
                                        przyrodniczej i turystycznej gminy Łask, jaką jest dolina
                                        rzeki Grabi.
                                    </p>
                                </div>
                                <!-- 4 - Lorem-->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/facilities/area-4.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-4@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-4.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/facilities/area-4@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
                                            />
                                            <img
                                                    src="{{ asset('images/facilities/area-4@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title title-2lh mb-3">
                                        INFRASTRUKTURA HANDLOWO-USŁUGOWA
                                    </div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Obecność mniejszych sklepów, dużych sieci handlowych oraz
                                        lokalnych targów stanowi dodatkowy atut. Sklep
                                        wielkopowierzchniowy LIDL oraz centrum handlowe VENDO PARK
                                        są oddalone zaledwie o 5 minut od nowobudowanego osiedla.
                                    </p>
                                </div>
                            </div>
                            <!-- BUTTONS -->
                            <div class="slick-slider-asset-btns">
                                <button
                                        type="button"
                                        class="slick-slider-asset-prev slick-prev"
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
                                        class="slick-slider-asset-next slick-next"
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

        <!-- ---------- -->
        <!-- MAP || Lokalizacja -->
        <!-- ---------- -->
        <section class="margin-xs" data-map="true">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4 pe-3">
                        <!-- TITLE -->
                        <h3 class="header-1 mb-30px" data-aos="fade-up">Lokalizacja</h3>

                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Nasze nowe osiedle w Łasku, zlokalizowane przy ul. Stefana
                            Batorego oraz Inki Siedzikówny, na terenie dawnego Targowiska,
                            oferuje wyjątkową lokalizację w sercu miasta. Dzięki bliskości
                            kluczowych punktów miejskich oraz otaczających terenów
                            zielonych, jest to idealne miejsce do zamieszkania. Projekt
                            osiedla uwzględnia przestronne, nowoczesne mieszkania oraz
                            starannie zagospodarowane strefy rekreacyjne, zapewniając
                            mieszkańcom komfort, wygodę oraz możliwość codziennego
                            odpoczynku w przyjaznym otoczeniu.
                        </p>
                    </div>

                    <div class="offset-lg-2 col-lg-6">
                        <div class="map-container">
                            <div id="map-location"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- CONTACT FORM -->
        <!-- ---------- -->
        <section class="margin-sm" id="contact">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag row-tag-contact">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4 mb-3 mb-lg-0">
                        <!-- TITLE -->
                        <h4 class="header-1 mb-30px contact-title" data-aos="fade-up">
                            Skontaktuj <br/>
                            się z nami!
                        </h4>
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
                                    @include('front.contact.form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/leaflet.min.js') }}" charset="utf-8"></script>
@endpush