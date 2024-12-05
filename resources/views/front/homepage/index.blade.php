@extends('layouts.homepage')

@section('content')
    <main class="overflow-x-hidden">
        <!-- ---------- -->
        <!-- HERO SECTION -->
        <!-- ---------- -->
        <section class="hero-bg section-max-width">
            <!-- ---------- -->
            <!-- VIDEO -->
            <!-- ---------- -->
            <video autoplay loop muted plays-inline class="hero-video" poster="{{ asset('images/reusable-imgs/poster.png') }}">
                <source src="{{ asset('images/videos/hero.mp4') }}" type="video/mp4" />
            </video>
            <div class="container hero-container">
                <div class="row position-relative align-content-center z-1">
                    <div class="row-tag row-tag-secondary row-tag-224">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 col-11 col-sm-7 offset-sm-0 z-1">
                        <!-- TITLE -->
                        <h1 class="header-1 mb-30px text-secondary" data-aos="fade-up">
                            Osiedle Targowe – <br />
                            Nowa Inwestycja w Łasku
                        </h1>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty text-secondary mb-30px fw-normal"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Jeśli szukasz mieszkania, które łączy nowoczesność, komfort i
                            doskonałą lokalizację,
                            <strong class="fw-bold">Osiedle Targowe</strong> w Łasku to
                            idealny wybór dla Ciebie! Ta nowa inwestycja, położona przy ul.
                            Stefana Batorego/Inki Siedzikówny, na terenie byłego targowiska,
                            oferuje wyjątkowe mieszkania zaprojektowane z myślą o Twojej
                            wygodzie i jakości życia.
                        </p>
                        <!-- BUTTON -->
                        <a
                                class="btn btn-primary btn-white btn-secondary-svg"
                                href="{{ route('plan') }}"
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
                </div>
            </div>
            <a href="#o-inwestycji" class="skip-to">
                <span>Przewiń w dół</span>
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="animation-bounce"
                        width="25.818"
                        height="25.818"
                        viewBox="0 0 25.818 25.818"
                >
                    <g
                            id="Group_878"
                            data-name="Group 878"
                            transform="translate(-2100.358 -1037.574)"
                    >
                        <g
                                id="Group_837"
                                data-name="Group 837"
                                transform="translate(2100.358 1063.392) rotate(-90)"
                        >
                            <g
                                    id="Ellipse_19"
                                    data-name="Ellipse 19"
                                    transform="translate(0 25.818) rotate(-90)"
                                    fill="none"
                                    stroke="#fff"
                                    stroke-width="1"
                            >
                                <circle cx="12.909" cy="12.909" r="12.909" stroke="none" />
                                <circle cx="12.909" cy="12.909" r="12.409" fill="none" />
                            </g>
                            <g
                                    id="Icon_feather-arrow-up-right"
                                    data-name="Icon feather-arrow-up-right"
                                    transform="translate(12.899 17.229) rotate(-135)"
                            >
                                <path
                                        id="Path_14793"
                                        data-name="Path 14793"
                                        d="M0,6.124,6.124,0"
                                        fill="none"
                                        stroke="#fff"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1"
                                />
                                <path
                                        id="Path_14794"
                                        data-name="Path 14794"
                                        d="M0,0H6.124V6.124"
                                        fill="none"
                                        stroke="#fff"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1"
                                />
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </section>

        <!-- ---------- -->
        <!-- SLIDER ||  O inwestycji -->
        <!-- ---------- -->
        <section class="margin-sm" id="o-inwestycji">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-11 col-xl-4 pe-3">
                        <!-- TITLE -->
                        <h2 class="header-1 mb-30px" data-aos="fade-up">O inwestycji</h2>

                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-4 text fw-bold"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Osiedle Targowe to nowoczesne osiedle składające się z dwóch
                            6-kondygnacyjnych budynków wielorodzinnych, zlokalizowane przy
                            ul. Stefana Batorego/Inki Siedzikówny w Łasku, na terenie byłego
                            targowiska. Inwestycja oferuje aż 120 mieszkań, które zostały
                            zaprojektowane z myślą o komforcie i potrzebach przyszłych
                            mieszkańców.
                        </p>
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Kluczowymi cechami inwestycji są: zróżnicowane mieszkania,
                            liczne udogodnienia dla mieszkańców oraz wspólny teren
                            rekreacyjny.
                        </p>
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Budynki zostały zaprojektowane z myślą o komforcie wszystkich
                            mieszkańców. Każda klatka schodowa jest wyposażona w windę, co
                            umożliwia łatwy dostęp do wszystkich kondygnacji, zarówno dla
                            osób starszych, rodzin z dziećmi, jak i osób z ograniczoną
                            mobilnością.
                        </p>
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Osiedle Targowe to inwestycja, która spełni oczekiwania różnych
                            grup mieszkańców: singli, par, rodzin z dziećmi oraz seniorów.
                            Dzięki zróżnicowanym układom mieszkań i licznych udogodnieniach,
                            każdy znajdzie tu przestrzeń idealnie dopasowaną do swoich
                            potrzeb.
                        </p>
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Osiedle Targowe to miejsce, gdzie nowoczesny styl życia spotyka
                            się z wygodą i funkcjonalnością, a wszystko to w otoczeniu
                            sprzyjającym relaksowi i aktywnemu wypoczynkowi.
                        </p>
                        <!-- BUTTON -->
                        <a
                                class="btn btn-primary"
                                href="{{ route('plan') }}"
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
                    <div class="col-12 col-xl-8 position-relative mt-3 mt-xl-0">
                        <div class="slider-investment">
                            <!-- SLIDES -->
                            <div class="slick-slider-investment">
                                <!-- IMAGE 1 -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/investment-1@2x.png') }}"
                                                    width="986"
                                                    height="1348"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - O investycji"
                                            />
                                        </picture>
                                    </div>
                                </div>
                                <!-- IMAGE 2 -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/investment-2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/investment-2@2x.png') }}"
                                                    width="876"
                                                    height="1562"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - O inwestycji"
                                            />
                                        </picture>
                                    </div>
                                </div>
                                <!-- IMAGE 1 -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/investment-1@2x.png') }}"
                                                    width="986"
                                                    height="1348"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - O investycji"
                                            />
                                        </picture>
                                    </div>
                                </div>
                                <!-- IMAGE 2 -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/investment-2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/investment-2@2x.png') }}"
                                                    width="876"
                                                    height="1562"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - O inwestycji"
                                            />
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <!-- BUTTONS -->
                            <div class="slick-slider-investment-btns">
                                <button
                                        type="button"
                                        class="slick-slider-investment-prev slick-prev"
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
                                        class="slick-slider-investment-next slick-next"
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
                  to nie tylko inwestycja <br />
                  w nieruchomość,
                </span>
                            <span
                                    class="text-primary fw-semibold"
                                    data-aos="fade"
                                    data-aos-delay="400"
                            >to inwestycja w jakość życia</span
                            >
                            <br />
                            <span data-aos="fade-right" data-aos-delay="600">
                  i najwyższy standard w mieście.
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- SLIDER  ||  Atuty osiedla -->
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
                        <h3 class="header-1 mb-30px" data-aos="fade-up">
                            Atuty <br />
                            osiedla
                        </h3>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-30px text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Dlaczego warto zainwestować w mieszkanie na Osiedlu Targowym?
                        </p>
                        <p
                                class="paragraph text-pretty mb-30px text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            <strong class="fw-bold">Osiedle Targowe</strong> to inwestycja,
                            która łączy nowoczesny styl życia z wygodą i funkcjonalnością.
                            Niezależnie od tego, czy szukasz swojego pierwszego mieszkania,
                            czy planujesz przenieść się do większego lokalu – to miejsce
                            spełni Twoje oczekiwania. Nie czekaj, zainwestuj w przyszłość
                            swoją i swojej rodziny, wybierając mieszkanie w najlepszej
                            lokalizacji w Łasku!
                        </p>
                        <!-- BUTTON -->
                        <a
                                class="btn btn-primary"
                                href="{{ route('plan') }}"
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
                                <!-- 1 - LOKALIZACJA-->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/asset-1.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-1@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-1.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-1@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/asset-1@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title mb-3">Lokalizacja</div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Bliskość sklepów, szkół, przedszkoli i innych udogodnień
                                        sprawi, że codzienne życie stanie się prostsze i
                                        przyjemniejsze.
                                    </p>
                                </div>
                                <!-- 2 - BALKONY I OGRÓDKI-->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/asset-2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/asset-2@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title mb-3">BALKONY I OGRÓDKI</div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Każde mieszkanie na piętrze posiada min. 1 przestronny
                                        balkon od 5,4 - 12,6m<sup>2</sup>, a mieszkanie na
                                        parterze posiada swój ogródek od 23,8 - 83,6m<sup>2</sup>.
                                    </p>
                                </div>
                                <!-- 3 - MIEJSCA POSTOJOWE -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/asset-3.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-3@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-3.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-3@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/asset-3@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title mb-3">MIEJSCA POSTOJOWE</div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Każde mieszkanie z przypisanym min. 1 miejscem
                                        parkingowym. Parkingi naziemne oraz dwa garaże podziemne
                                        dostępne samochodem z ramp zjazdowych zlokalizowanych na
                                        terenie osiedla oraz z wind na klatkach bloków.
                                    </p>
                                </div>
                                <!-- 4 - STAN DEWELOPERSKI-->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/asset-4.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-4@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-4.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/asset-4@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/asset-4@2x.png') }}"
                                                    width="566"
                                                    height="1154"
                                                    class="img-fluid"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Atuty osiedla"
                                            />
                                        </picture>
                                    </div>
                                    <div class="title mb-3">STAN DEWELOPERSKI</div>
                                    <p class="paragraph text-pretty fw-normal">
                                        Mieszkania gotowe do wykończenia według gustu każdego
                                        przyszłego lokatora. W zależności od potrzeb kupujących
                                        możliwe również wykończenie pod klucz.
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
        <!-- BIRDSEYE  ||  Osiedle, ul. S. Batorego etc.  -->
        <!-- ---------- -->
        <section class="margin-xxs birdseye-bg section-max-width">
            <div class="container birdseye-container">
                <div class="row position-relative align-content-center z-1">
                    <div class="row-tag row-tag-hero row-tag-secondary">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div
                            class="offset-1 col-10 col-lg-4 offset-sm-0 position-relative z-1"
                    >
                        <!-- TITLE -->
                        <h2 class="header-1 mb-30px text-secondary" data-aos="fade-up">
                            Usytuowanie
                        </h2>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-30px text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Blok 1 zlokalizowano od strony południowej, natomiast blok 2 od
                            strony północnej. Oba budynki posiadają po dwie otwarte klatki
                            schodowe z dostępem do wind oraz wejścia od strony północnej.
                            Klatki posiadają również dodatkowe wyjścia ewakuacyjne od strony
                            północnej. Plac zabaw dla dzieci znajduje się pomiędzy blokami,
                            zapewniając mieszkańcom bezpieczną przestrzeń rekreacyjną.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- Types of apartments  ||  Typy mieszkań  -->
        <!-- ---------- -->
        <section class="margin-xs ap-types">
            <div class="container">
                <div class="row position-relative mb-3 mb-lg-5">
                    <div class="row-tag row-tag-224">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4">
                        <!-- TITLE -->
                        <h3 class="header-1 mb-30px" data-aos="fade-up">
                            Typy <br />
                            mieszkań
                        </h3>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-30px"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            W każdym budynku powstanie 60 mieszkań w typach M2, M3 oraz M4,
                            których powierzchnie wahają się <br />
                            od 45,4m<sup>2</sup> – 73,0m<sup>2</sup>.
                        </p>
                    </div>
                </div>

                <!-- GRID -->
                <div class="row gy-4">
                    <!-- 1st Apartment -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-right" data-aos-delay="600">
                        <!-- A TAG MAKING BOX A LINK IS INSIDE -->
                        <div class="ap-box">
                            <picture>
                                  <img
                                        src="{{ asset('images/m1.png') }}"
                                        width="255"
                                        height="255"
                                        class="img-fluid"
                                        loading="lazy"
                                        alt="Rysunek architektoniczny mieszkania M2"
                                />
                            </picture>
                            <div class="title">Mieszkanie <span>M2</span></div>
                            <div class="mb-4">idealne dla singli i par, <br />o powierzchni - 45,4m<sup>2</sup></div>
                            <!-- BUTTON -->
                            <a class="btn btn-primary z-1" href="{{ route('plan') }}?type=2#roomlist">
                                Sprawdź mieszkanie
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.971 19.971"><g data-name="Group 816"><g fill="#345e3e" stroke="#345e3e" data-name="Ellipse 20" transform="rotate(90 9.986 9.985)"><circle cx="9.985" cy="9.985" r="9.985" stroke="none"/><circle cx="9.985" cy="9.985" r="9.485" fill="none"/></g><g fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" data-name="Icon feather-arrow-up-right"><path d="M5.91 9.986h8.151" data-name="Path 14793"/><path d="m9.985 5.91 4.076 4.076-4.076 4.076" data-name="Path 14794"/></g></g></svg>
                            </a>
                            <!-- MAJOR A TAG - TAKING WHOLE SPACE OF A BOX --->
                            <a href="{{ route('plan') }}?type=2#roomlist" class="whole-box" aria-label="Link do mieszkania"></a>
                        </div>
                    </div>
                    <!-- 2nd Apartment -->
                    <div class="col-md-6 col-xl-4" data-aos="fade" data-aos-delay="700">
                        <!-- A TAG MAKING BOX A LINK IS INSIDE -->

                        <div class="ap-box">
                            <picture>
                                <img
                                        src="{{ asset('images/m3.png') }}"
                                        width="255"
                                        height="255"
                                        class="img-fluid"
                                        loading="lazy"
                                        alt="Rysunek architektoniczny mieszkania M3"
                                />
                            </picture>
                            <div class="title">Mieszkanie <span>M3</span></div>
                            <div class="mb-4">
                                komfortowe mieszkania dla<br />
                                małych rodzin, <br />
                                o powierzchni – od 57,8m<sup>2</sup>
                            </div>
                            <!-- BUTTON -->
                            <a class="btn btn-primary z-1" href="{{ route('plan') }}?type=3#roomlist">
                                Sprawdź mieszkanie
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.971 19.971"><g data-name="Group 816"><g fill="#345e3e" stroke="#345e3e" data-name="Ellipse 20" transform="rotate(90 9.986 9.985)"><circle cx="9.985" cy="9.985" r="9.985" stroke="none"/><circle cx="9.985" cy="9.985" r="9.485" fill="none"/></g><g fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" data-name="Icon feather-arrow-up-right"><path d="M5.91 9.986h8.151" data-name="Path 14793"/><path d="m9.985 5.91 4.076 4.076-4.076 4.076" data-name="Path 14794"/></g></g></svg>
                            </a>
                            <!-- MAJOR A TAG - TAKING WHOLE SPACE OF A BOX -  -->
                            <a
                                    href="{{ route('plan') }}?type=3#roomlist"
                                    class="whole-box"
                                    aria-label="Link do mieszkania"
                            ></a>
                        </div>
                    </div>
                    <!-- 3rd Apartment -->
                    <div
                            class="col-md-6 offset-md-3 col-xl-4 offset-xl-0"
                            data-aos="fade-left"
                            data-aos-delay="600"
                    >
                        <!-- A TAG MAKING BOX A LINK IS INSIDE -->

                        <div class="ap-box">
                            <picture>
                                <img
                                        src="{{ asset('images/m4.png') }}"
                                        width="255"
                                        height="255"
                                        class="img-fluid"
                                        loading="lazy"
                                        alt="Rysunek architektoniczny mieszkania M4"
                                />
                            </picture>
                            <div class="title">Mieszkanie <span>M4</span></div>
                            <div class="mb-4">
                                przestronne mieszkania dla<br />
                                większych rodzin,<br />
                                o powierzchni - do 73,0m<sup>2</sup>
                            </div>
                            <!-- BUTTON -->
                            <a class="btn btn-primary z-1" href="{{ route('plan') }}?type=4#roomlist">
                                Sprawdź mieszkanie
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.971 19.971"><g data-name="Group 816"><g fill="#345e3e" stroke="#345e3e" data-name="Ellipse 20" transform="rotate(90 9.986 9.985)"><circle cx="9.985" cy="9.985" r="9.985" stroke="none"/><circle cx="9.985" cy="9.985" r="9.485" fill="none"/></g><g fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" data-name="Icon feather-arrow-up-right"><path d="M5.91 9.986h8.151" data-name="Path 14793"/><path d="m9.985 5.91 4.076 4.076-4.076 4.076" data-name="Path 14794"/></g></g></svg>
                            </a>
                            <!-- MAJOR A TAG - TAKING WHOLE SPACE OF A BOX -  -->
                            <a
                                    href="{{ route('plan') }}?type=4#roomlist"
                                    class="whole-box"
                                    aria-label="Link do mieszkania"
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- Gallery  ||  Galeria  -->
        <!-- ---------- -->
        <section class="margin-xs gallery">
            <div class="container">
                <div class="row mb-3 mb-lg-5 position-relative">
                    <div class="row-tag row-tag-224">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4">
                        <!-- TITLE -->
                        <h4 class="header-1 mb-30px" data-aos="fade-up">Galeria</h4>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-30px"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Przedstawione wizualizacje osiedla mają charakter poglądowy,
                            mogą różnić się od rzeczywistego wyglądu inwestycji i nie
                            stanowią oferty handlowej w rozumieniu przepisów Kodeksu
                            cywilnego.
                        </p>
                    </div>
                </div>
                <!-- GRID -->
                <div class="row row-gap-4">
                    <!-- FIRST COLUMN -->
                    <div class="col-6 col-lg-3" data-aos="fade-right">
                        <div class="gallery-box">
                            <a
                                    href="{{ asset('images/home/gallery-1@2x.png') }}"
                                    class="glightbox"
                                    data-gallery="gallery"
                            >
                                <picture>
                                    <source
                                            srcset="{{ asset('images/home/gallery-1.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-1@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-1.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-1@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png') }}"
                                    />
                                    <img
                                            src="{{ asset('images/home/gallery-1@2x.png') }}"
                                            width="566"
                                            height="1154"
                                            class="img-fluid gallery-img"
                                            loading="lazy"
                                            alt="Osiedle Targowe - Galeria"
                                    />
                                </picture>
                            </a>
                        </div>
                    </div>
                    <!-- SECOND COLUMN -->
                    <div class="col-lg-6 order-2 order-lg-0">
                        <div class="row row-gap-4 h-100">
                            <!-- FIRST ROW -->
                            <div class="col-12" data-aos="fade-down">
                                <div class="gallery-box">
                                    <a
                                            href="{{ asset('images/home/gallery-2@2x.png') }}"
                                            class="glightbox"
                                            data-gallery="gallery"
                                    >
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/gallery-2@2x.png') }}"
                                                    width="1268"
                                                    height="556"
                                                    class="img-fluid gallery-img gallery-row"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Galeria"
                                            />
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <!-- SECOND ROW -->
                            <div class="col-12" data-aos="fade-up">
                                <div class="gallery-box">
                                    <a
                                            href="{{ asset('images/home/gallery-3@2x.png') }}"
                                            class="glightbox"
                                            data-gallery="gallery"
                                    >
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png') }}"
                                            />
                                            <img
                                                    src="{{ asset('images/home/gallery-3@2x.png') }}"
                                                    width="1268"
                                                    height="462"
                                                    class="img-fluid gallery-img gallery-row"
                                                    loading="lazy"
                                                    alt="Osiedle Targowe - Galeria"
                                            />
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- THIRD COLUMN -->
                    <div class="col-6 col-lg-3" data-aos="fade-left">
                        <div class="gallery-box">
                            <a
                                    href="{{ asset('images/home/gallery-4@2x.png') }}"
                                    class="glightbox"
                                    data-gallery="gallery"
                            >
                                <picture>
                                    <source
                                            srcset="{{ asset('images/home/gallery-4.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-4@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-4.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-4@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png') }}"
                                    />
                                    <img
                                            src="{{ asset('images/home/gallery-4@2x.png') }}"
                                            width="566"
                                            height="1154"
                                            class="img-fluid gallery-img"
                                            loading="lazy"
                                            alt="Osiedle Targowe - Galeria"
                                    />
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- FEED || Aktualności -->
        <!-- ---------- -->
        <section class="margin-xs feed">
            <div class="container">
                <div class="row mb-3 mb-lg-5 position-relative">
                    <div class="row-tag row-tag-224">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4">
                        <!-- TITLE -->
                        <h5 class="header-1 mb-30px" data-aos="fade-up">Aktualności</h5>
                        <!-- PARAGRAPH -->
                        <p class="paragraph text-pretty mb-3" data-aos="fade-up" data-aos-delay="200">
                            Na bieżąco udostępniamy wszystkie informacje o aktualnych
                            pracach budowlanych. Każdy kolejny postęp przybliża nas do
                            upragnionego zakończenia, które dla przyszłych mieszkańców
                            oznacza nowy początek. Śledź naszą stronę, a już wkrótce
                            podzielimy się kolejnymi nowinkami z budowy Osiedla Targowego.
                        </p>
                    </div>
                </div>

                <!-- GRID -->
                <div class="row gy-4">
                    @foreach($articles as $index => $article)
                        @if($index % 3 == 0)
                            <div class="col-md-6 col-xl-4" data-aos="fade-right" data-aos-delay="600">
                                @elseif($index % 3 == 1)
                                    <div class="col-md-6 col-xl-4" data-aos="fade" data-aos-delay="700">
                                        @elseif($index % 3 == 2)
                                            <div class="col-md-6 offset-md-3 col-xl-4 offset-xl-0" data-aos="fade-left" data-aos-delay="600">
                                                @endif
                        <div class="feed-box">
                            <picture>
                                <source type="image/webp" srcset="{{asset('/uploads/articles/thumbs/webp/'.$article->file_webp) }}">
                                <source type="image/jpeg" srcset="{{asset('/uploads/articles/thumbs/'.$article->file) }}">
                                <img src="{{asset('/uploads/articles/thumbs/'.$article->file) }}" alt="{{ $article->file_alt }}" width="485" height="273" class="img-fluid" loading="lazy">
                            </picture>

                            <div class="content-box">
                                <!-- DATE -->
                                <div class="date mb-2">{{ $article->posted_at }}</div>
                                <span class="title mb-2">{{ $article->title }}</span>
                                <!-- BUTTON -->
                                <a class="btn btn-primary mb-2" href="{{ route('news.show', $article->slug) }}">
                                    Czytaj więcej
                                    <svg viewBox="0 0 19.971 19.971" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-339 -1753.9)" data-name="Group 816"><g transform="translate(358.97 1753.9) rotate(90)" fill="#345e3e" stroke="#345e3e" data-name="Ellipse 20"><ellipse cx="9.985" cy="9.985" rx="9.985" ry="9.985" stroke="none"/><ellipse cx="9.985" cy="9.985" rx="9.485" ry="9.485" fill="none"/></g><g transform="translate(348.98 1759.8) rotate(45)" fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" data-name="Icon feather-arrow-up-right"><path d="M0,5.764,5.764,0" data-name="Path 14793"/><path d="m0 0h5.764v5.764" data-name="Path 14794"/></g></g></svg>
                                </a>
                            </div>
                            <!-- MAJOR A TAG - TAKING WHOLE SPACE OF A BOX -  -->
                            <a href="{{ route('news.show', $article->slug) }}" class="whole-box" aria-label="Link do aktualności"></a>
                        </div>
                    </div>
                    @endforeach
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
                        <h6 class="header-1 mb-30px contact-title" data-aos="fade-up">
                            Skontaktuj <br />
                            się z nami!
                        </h6>
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