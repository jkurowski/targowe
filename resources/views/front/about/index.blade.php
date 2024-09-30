@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="overflow-x-hidden">
        @include('layouts.partials.developro-header', ['title' => ($page->meta_title) ? $page->meta_title : $page->title])

        <section class="margin-below-breadcrumb" id="o-inwestycji">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-11 col-xl-4 pe-3">
                        <!-- TITLE -->
                        <h1 class="header-1 mb-30px" data-aos="fade-up">O inwestycji</h1>

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
                            <div class="slick-slider-investment2">
                                <!-- IMAGE 1 -->
                                <div class="">
                                    <div class="img mb-30px">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
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
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
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
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-1@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
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
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/investment-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
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
                                        class="slick-prev slick-slider-investment-prev2"
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
                                        class="slick-next slick-slider-investment-next2"
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
        <!-- FEATUERS || BOGATA INFRASTRUKTURA etc -->
        <!-- ---------- -->
        <section class="margin-sm">
            <div class="container">
                <div class="row gx-sm-5 gy-5 gy-lg-0">
                    <div class="col-6 col-lg-3">
                        <div class="feature-box">
                            <div class="feature-svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="99.108"
                                        height="99.108"
                                        viewBox="0 0 99.108 99.108"
                                >
                                    <g
                                            id="_OUTLINE"
                                            data-name=" OUTLINE"
                                            transform="translate(-16 -16)"
                                    >
                                        <path
                                                id="Path_14929"
                                                data-name="Path 14929"
                                                d="M67.3,21.781a2.478,2.478,0,0,1,4.955,0,5.781,5.781,0,1,0,11.563,0,2.478,2.478,0,0,1,4.955,0,5.781,5.781,0,1,0,11.563,0,2.478,2.478,0,0,1,4.955,0,5.788,5.788,0,0,0,5.781,5.781h4.13v-3.3h-4.13a2.481,2.481,0,0,1-2.478-2.478,5.781,5.781,0,1,0-11.563,0,2.478,2.478,0,1,1-4.955,0,5.781,5.781,0,1,0-11.563,0,2.478,2.478,0,0,1-4.955,0,5.781,5.781,0,0,0-11.563,0v5.781h3.3Z"
                                                transform="translate(-38.089 0)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14930"
                                                data-name="Path 14930"
                                                d="M56,264h3.3v13.214H56Z"
                                                transform="translate(-31.741 -196.794)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14931"
                                                data-name="Path 14931"
                                                d="M184,264h3.3v13.214H184Z"
                                                transform="translate(-133.312 -196.794)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14932"
                                                data-name="Path 14932"
                                                d="M336,280h3.3v9.911H336Z"
                                                transform="translate(-253.928 -209.49)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14933"
                                                data-name="Path 14933"
                                                d="M368,280h3.3v9.911H368Z"
                                                transform="translate(-279.321 -209.49)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14934"
                                                data-name="Path 14934"
                                                d="M400,280h3.3v9.911H400Z"
                                                transform="translate(-304.713 -209.49)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14935"
                                                data-name="Path 14935"
                                                d="M115.108,34.17v-3.3h-4.271L100.242,20.271V19.3a3.307,3.307,0,0,0-3.3-3.3h-3.3a3.307,3.307,0,0,0-3.3,3.3v.968L79.736,30.866H65.554v3.3H90.331v6.607H72.161v3.3h3.3V83.724h-3.3V66.061l-9.911-3.717V45.529L60.6,38.922V30.866H50.688v8.056l-1.652,6.607v11.86l-6.607-2.478v9.911l-4.955-1.858V45.529l-1.652-6.607V30.866H25.911v8.056l-1.652,6.607v12.48L16,54.912v60.2h99.108v-3.3H19.3V59.679l23.125,8.672V80.42h3.3V59.679l23.125,8.672V83.724H48.02A22.974,22.974,0,0,0,31.668,90.5l-7.208,7.208a6.324,6.324,0,0,0,4.472,10.8h86.177v-3.3h-79.3a18.415,18.415,0,0,0-3.586-10.586L34,92.833A19.692,19.692,0,0,1,48.02,87.028h67.088v-3.3h-3.3V44.081h3.3v-3.3H100.242V34.17Zm-14.866-9.227,5.923,5.923h-5.923ZM29.214,34.17h3.3v3.3h-3.3Zm-.362,6.607H32.88l.826,3.3h-5.68ZM34.17,61.725l-6.607-2.478V47.384H34.17ZM53.992,34.17h3.3v3.3h-3.3Zm-.362,6.607h4.028l.826,3.3H52.8Zm5.318,20.329L52.34,58.628V47.384h6.607ZM32.508,105.2H28.931a3.02,3.02,0,0,1-2.136-5.156l3.06-3.06a15.139,15.139,0,0,1,2.653,8.216ZM93.635,19.3h3.3V30.866h-3.3Zm0,14.866h3.3v6.607h-3.3Zm-9.227-3.3,5.923-5.923v5.923ZM108.5,83.724H78.769V67.206H108.5Zm0-39.643V63.9H78.769V44.081Z"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14936"
                                                data-name="Path 14936"
                                                d="M132.406,376a3.32,3.32,0,0,0-2.833,1.6l-2.973,4.955a3.3,3.3,0,0,0,2.833,5h8.645a3.307,3.307,0,0,0,3.3-3.3V379.3a3.307,3.307,0,0,0-3.3-3.3Zm5.672,8.259h-8.645l2.973-4.955h5.672Z"
                                                transform="translate(-87.39 -285.669)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14937"
                                                data-name="Path 14937"
                                                d="M464,408h6.607v3.3H464Z"
                                                transform="translate(-355.499 -311.062)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14938"
                                                data-name="Path 14938"
                                                d="M448,376h6.607v3.3H448Z"
                                                transform="translate(-342.803 -285.669)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14939"
                                                data-name="Path 14939"
                                                d="M227.3,376a3.307,3.307,0,0,0-3.3,3.3v4.955a3.307,3.307,0,0,0,3.3,3.3h3.3a3.307,3.307,0,0,0,3.3-3.3V379.3a3.307,3.307,0,0,0-3.3-3.3Zm3.3,8.259h-3.3V379.3h3.3l0,4.955Z"
                                                transform="translate(-165.053 -285.669)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14940"
                                                data-name="Path 14940"
                                                d="M299.3,376a3.307,3.307,0,0,0-3.3,3.3v4.955a3.307,3.307,0,0,0,3.3,3.3h3.3a3.307,3.307,0,0,0,3.3-3.3V379.3a3.307,3.307,0,0,0-3.3-3.3Zm3.3,8.259h-3.3V379.3h3.3l0,4.955Z"
                                                transform="translate(-222.187 -285.669)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14941"
                                                data-name="Path 14941"
                                                d="M371.3,376a3.307,3.307,0,0,0-3.3,3.3v4.955a3.307,3.307,0,0,0,3.3,3.3h3.3a3.307,3.307,0,0,0,3.3-3.3V379.3a3.307,3.307,0,0,0-3.3-3.3Zm3.3,8.259h-3.3V379.3h3.3l0,4.955Z"
                                                transform="translate(-279.321 -285.669)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14942"
                                                data-name="Path 14942"
                                                d="M336,168h3.3v13.214H336Z"
                                                transform="translate(-253.928 -120.616)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14943"
                                                data-name="Path 14943"
                                                d="M368,168h3.3v13.214H368Z"
                                                transform="translate(-279.321 -120.616)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14944"
                                                data-name="Path 14944"
                                                d="M400,168h3.3v13.214H400Z"
                                                transform="translate(-304.713 -120.616)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14945"
                                                data-name="Path 14945"
                                                d="M432,280h3.3v9.911H432Z"
                                                transform="translate(-330.106 -209.49)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14946"
                                                data-name="Path 14946"
                                                d="M432,168h3.3v13.214H432Z"
                                                transform="translate(-330.106 -120.616)"
                                                fill="#fffbf5"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="feature-title">BOGATA INFRASTRUKTURA</div>
                            <p class="text">
                                Doskonała lokalizacja, otoczona bogatą infrastrukturą, która
                                zapewnia wygodę codziennego życia.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="feature-box">
                            <div class="feature-svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="94.555"
                                        height="94.554"
                                        viewBox="0 0 94.555 94.554"
                                >
                                    <g id="house" transform="translate(0 0)">
                                        <path
                                                id="Path_14947"
                                                data-name="Path 14947"
                                                d="M54.548,20.684h5.1a1.477,1.477,0,0,0,2.955,0h5.1a1.477,1.477,0,0,0,1.469-1.317c.739-6.772-3.9-9.751-6.569-10.426V1.478a1.477,1.477,0,1,0-2.955,0V8.94c-2.674.676-7.308,3.654-6.569,10.426a1.477,1.477,0,0,0,1.469,1.317Zm5.761-8.864h1.635a6.036,6.036,0,0,1,4.348,5.91H55.959a6.012,6.012,0,0,1,4.351-5.91Z"
                                                transform="translate(-13.849 0)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14948"
                                                data-name="Path 14948"
                                                d="M6.852,24.31A1.455,1.455,0,0,0,6,25.63V80.183A1.477,1.477,0,0,0,6.812,81.5a1.5,1.5,0,0,0,1.543-.13l9.525-7.026a1.478,1.478,0,0,0,.6-1.189V33.426a1.478,1.478,0,0,0-.542-1.143l-9.525-7.8a1.453,1.453,0,0,0-1.562-.177Zm2.1,4.438,6.57,5.378V72.412l-6.57,4.846Z"
                                                transform="translate(-1.568 -6.313)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14949"
                                                data-name="Path 14949"
                                                d="M28.984,40.66a1.455,1.455,0,0,0-.849,1.32V72.636a1.477,1.477,0,0,0,2.347,1.194L35.9,69.881a1.476,1.476,0,0,0,.607-1.194v-22.3a1.479,1.479,0,0,0-.545-1.147l-5.421-4.406a1.453,1.453,0,0,0-1.561-.173Zm2.106,4.424,2.466,2V67.936l-2.466,1.8Z"
                                                transform="translate(-7.352 -10.585)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14950"
                                                data-name="Path 14950"
                                                d="M13.925,49.25a1.477,1.477,0,0,0-1.477,1.477v2.4a1.477,1.477,0,0,0,2.955,0v-2.4a1.477,1.477,0,0,0-1.477-1.477Z"
                                                transform="translate(-3.252 -12.869)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14951"
                                                data-name="Path 14951"
                                                d="M13.925,77.5a1.477,1.477,0,0,0-1.477,1.477v2.4a1.477,1.477,0,0,0,2.955,0v-2.4A1.477,1.477,0,0,0,13.925,77.5Z"
                                                transform="translate(-3.252 -20.25)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14952"
                                                data-name="Path 14952"
                                                d="M115.172,24.484l-9.525,7.8a1.478,1.478,0,0,0-.542,1.143V73.155a1.478,1.478,0,0,0,.6,1.189l9.525,7.026a1.538,1.538,0,0,0,1.543.13,1.477,1.477,0,0,0,.812-1.319V25.627a1.477,1.477,0,0,0-2.413-1.143Zm-.542,52.772-6.57-4.846V34.123l6.57-5.378Z"
                                                transform="translate(-27.463 -6.31)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14953"
                                                data-name="Path 14953"
                                                d="M94.493,40.831l-5.421,4.406a1.479,1.479,0,0,0-.545,1.147v22.3a1.476,1.476,0,0,0,.608,1.194l5.421,3.949a1.507,1.507,0,0,0,1.54.123,1.477,1.477,0,0,0,.807-1.317V41.978a1.478,1.478,0,0,0-2.409-1.147Zm-.545,28.9-2.466-1.8V47.087l2.466-2Z"
                                                transform="translate(-23.132 -10.582)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14954"
                                                data-name="Path 14954"
                                                d="M113.03,54.606a1.477,1.477,0,0,0,1.477-1.477v-2.4a1.477,1.477,0,0,0-2.955,0v2.4a1.477,1.477,0,0,0,1.477,1.477Z"
                                                transform="translate(-29.148 -12.869)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14955"
                                                data-name="Path 14955"
                                                d="M113.03,82.856a1.477,1.477,0,0,0,1.477-1.477v-2.4a1.477,1.477,0,0,0-2.955,0v2.4a1.477,1.477,0,0,0,1.477,1.477Z"
                                                transform="translate(-29.148 -20.25)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14956"
                                                data-name="Path 14956"
                                                d="M67.774,94.955a1.477,1.477,0,0,0,0-2.955h-13.3a1.477,1.477,0,0,0,0,2.955Z"
                                                transform="translate(-13.849 -24.039)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14957"
                                                data-name="Path 14957"
                                                d="M41,103.477a1.477,1.477,0,0,0,1.477,1.477H73.5a1.477,1.477,0,1,0,0-2.955H42.477A1.477,1.477,0,0,0,41,103.477Z"
                                                transform="translate(-10.713 -26.652)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14958"
                                                data-name="Path 14958"
                                                d="M77.322,112H34.477a1.477,1.477,0,0,0,0,2.955H77.322a1.477,1.477,0,0,0,0-2.955Z"
                                                transform="translate(-8.623 -29.265)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14959"
                                                data-name="Path 14959"
                                                d="M32.665,85.59.493,114.34a1.478,1.478,0,0,0,1.969,2.2l31.91-28.515a4.433,4.433,0,0,1-1.707-2.438Z"
                                                transform="translate(0 -22.364)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14960"
                                                data-name="Path 14960"
                                                d="M83.176,85.59a4.433,4.433,0,0,1-1.707,2.438l31.91,28.515a1.478,1.478,0,1,0,1.969-2.2Z"
                                                transform="translate(-21.288 -22.364)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14961"
                                                data-name="Path 14961"
                                                d="M32.665,31.329a4.433,4.433,0,0,1,1.707-2.438L2.462.376a1.478,1.478,0,0,0-1.969,2.2Z"
                                                transform="translate(0 0)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14962"
                                                data-name="Path 14962"
                                                d="M83.176,31.329l32.173-28.75a1.478,1.478,0,1,0-1.969-2.2L81.469,28.892a4.433,4.433,0,0,1,1.707,2.438Z"
                                                transform="translate(-21.288 0)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14963"
                                                data-name="Path 14963"
                                                d="M49.477,74.5H70.161a1.477,1.477,0,0,0,1.477-1.477V43.478A1.477,1.477,0,0,0,70.161,42H49.477A1.477,1.477,0,0,0,48,43.478V73.026A1.477,1.477,0,0,0,49.477,74.5Zm1.477-29.548H68.684V71.548H50.955Z"
                                                transform="translate(-12.542 -10.974)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14964"
                                                data-name="Path 14964"
                                                d="M68.955,62H67.477a1.477,1.477,0,0,0,0,2.955h1.477a1.477,1.477,0,1,0,0-2.955Z"
                                                transform="translate(-17.246 -16.2)"
                                                fill="#fffbf5"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="feature-title">FUNKCJONALNE MIESZKANIA</div>
                            <p class="text">
                                Przemyślane układy pomieszczeń optymalnie wykorzystują
                                dostępną przestrzeń, oferując przestronne salony, wygodne
                                sypialnie oraz nowoczesne kuchnie.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="feature-box">
                            <div class="feature-svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="94.547"
                                        height="94.554"
                                        viewBox="0 0 94.547 94.554"
                                >
                                    <g id="Outline" transform="translate(-2 -2)">
                                        <path
                                                id="Path_14965"
                                                data-name="Path 14965"
                                                d="M95.786,39.888l-.022-.036A7.466,7.466,0,0,0,86.136,37.3l-10.1,5.165a8.689,8.689,0,0,0-11.03-2.7L52.293,46.279a4.634,4.634,0,0,1-4.286-.027l-8.667-4.6a20.121,20.121,0,0,0-21.024,1.273l-.98-4.667a1.576,1.576,0,0,0-1.874-1.217L3.243,39.677a1.576,1.576,0,0,0-1.21,1.863l7.115,33.9A1.576,1.576,0,0,0,10.689,76.7a1.66,1.66,0,0,0,.331-.035l12.225-2.632a1.576,1.576,0,0,0,1.212-1.864l-.63-3.035,4.177-.9a10.84,10.84,0,0,1,3.7-.142l19.648,2.154a16.851,16.851,0,0,0,11.628-2.729L94.456,46.4a4.756,4.756,0,0,0,1.33-6.516ZM11.907,73.242,5.439,42.428l9.14-1.97,6.473,30.816ZM92.7,43.791,61.23,64.906a13.764,13.764,0,0,1-9.5,2.206L32.082,64.958a13.807,13.807,0,0,0-4.746.189l-4.163.9L19.019,46.279l1.076-.75A16.985,16.985,0,0,1,37.86,44.436l8.667,4.6a7.765,7.765,0,0,0,7.2.049L66.449,42.56a5.572,5.572,0,0,1,7.359,2.171A1.59,1.59,0,0,1,73.25,46.9L55.718,57.3a13.881,13.881,0,0,1-10.2,1.615L29.7,55.13,28.971,58.2,44.8,61.979a17.034,17.034,0,0,0,12.524-1.971l17.534-10.4a4.727,4.727,0,0,0,2.291-4.179L87.565,40.1a4.311,4.311,0,0,1,5.547,1.464l.017.028a1.617,1.617,0,0,1-.427,2.2Z"
                                                transform="translate(0 19.855)"
                                                fill="#fffbf5"
                                        />
                                        <rect
                                                id="Rectangle_1484"
                                                data-name="Rectangle 1484"
                                                width="3.152"
                                                height="3.148"
                                                transform="translate(9.117 64.703) rotate(-11.848)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14966"
                                                data-name="Path 14966"
                                                d="M21.576,28A1.576,1.576,0,0,0,20,29.576V39.03a1.576,1.576,0,0,0,1.576,1.576h6.3a1.576,1.576,0,0,0,1.576-1.576V29.576A1.576,1.576,0,0,0,27.879,28ZM26.3,37.455H23.152v-6.3H26.3Z"
                                                transform="translate(10.364 14.97)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14967"
                                                data-name="Path 14967"
                                                d="M30.576,21A1.576,1.576,0,0,0,29,22.576V43.061a1.576,1.576,0,0,0,1.576,1.576h6.3a1.576,1.576,0,0,0,1.576-1.576V22.576A1.576,1.576,0,0,0,36.879,21ZM35.3,41.485H32.152V24.152H35.3Z"
                                                transform="translate(15.546 10.94)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14968"
                                                data-name="Path 14968"
                                                d="M39.576,24A1.576,1.576,0,0,0,38,25.576V41.334a1.576,1.576,0,0,0,1.576,1.576h6.3a1.576,1.576,0,0,0,1.576-1.576V25.576A1.576,1.576,0,0,0,45.879,24ZM44.3,39.758H41.152V27.152H44.3Z"
                                                transform="translate(20.728 12.667)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14969"
                                                data-name="Path 14969"
                                                d="M48.576,19A1.576,1.576,0,0,0,47,20.576V44.212a1.576,1.576,0,0,0,1.576,1.576h6.3a1.576,1.576,0,0,0,1.576-1.576V20.576A1.576,1.576,0,0,0,54.879,19ZM53.3,42.637H50.152V22.152H53.3Z"
                                                transform="translate(25.91 9.788)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14970"
                                                data-name="Path 14970"
                                                d="M29.468,18.41l9.916,9.916a1.576,1.576,0,0,0,2.228,0l17.8-17.8L72.476,23.6a1.576,1.576,0,0,0,2.228,0L90.923,7.38v4.075h3.152V3.576A1.576,1.576,0,0,0,92.5,2H84.62V5.152H88.7L73.59,20.257,60.522,7.189a1.576,1.576,0,0,0-2.228,0l-17.8,17.8-9.916-9.916a1.576,1.576,0,0,0-2.228,0L6.293,37.129l2.228,2.228Z"
                                                transform="translate(2.472)"
                                                fill="#fffbf5"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="feature-title">POTENCJAŁ INWESTYCYJNY</div>
                            <p class="text">
                                Prognozowany wzrost cen nieruchomości sprawia, że jest to
                                doskonała inwestycja nie tylko pod kątem zakupu na własny
                                użytek, ale również pod wynajem krótko- i długoterminowy.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="feature-box">
                            <div class="feature-svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="98.847"
                                        height="99.432"
                                        viewBox="0 0 98.847 99.432"
                                >
                                    <g id="business" transform="translate(-0.55 -0.45)">
                                        <g
                                                id="Group_1153"
                                                data-name="Group 1153"
                                                transform="translate(69.554 63.445)"
                                        >
                                            <g
                                                    id="Group_1148"
                                                    data-name="Group 1148"
                                                    transform="translate(14.711)"
                                            >
                                                <g id="Group_1147" data-name="Group 1147">
                                                    <path
                                                            id="Path_14971"
                                                            data-name="Path 14971"
                                                            d="M53.347,31.5c-1.865,1.865-12.432-.622-9.117,9.117,9.738,3.315,7.252-7.459,9.117-9.117Z"
                                                            transform="translate(-39.465 -31.5)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                    <path
                                                            id="Path_14972"
                                                            data-name="Path 14972"
                                                            d="M50.1,34l-3.73,3.73A13.864,13.864,0,0,1,41.6,40.009"
                                                            transform="translate(-41.6 -28.82)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                </g>
                                            </g>
                                            <g
                                                    id="Group_1150"
                                                    data-name="Group 1150"
                                                    transform="translate(0 4.766)"
                                            >
                                                <g id="Group_1149" data-name="Group 1149">
                                                    <path
                                                            id="Path_14973"
                                                            data-name="Path 14973"
                                                            d="M34.5,33.8c1.865,1.865,12.432-.622,9.117,9.117C33.878,46.232,36.365,35.665,34.5,33.8Z"
                                                            transform="translate(-34.5 -33.8)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                    <path
                                                            id="Path_14974"
                                                            data-name="Path 14974"
                                                            d="M37.1,36.4l3.73,3.73A13.864,13.864,0,0,0,45.6,42.409"
                                                            transform="translate(-31.713 -31.013)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                </g>
                                            </g>
                                            <g
                                                    id="Group_1152"
                                                    data-name="Group 1152"
                                                    transform="translate(11.81 15.747)"
                                            >
                                                <g id="Group_1151" data-name="Group 1151">
                                                    <path
                                                            id="Path_14975"
                                                            data-name="Path 14975"
                                                            d="M52.364,39.1c-1.865,1.658-12.432-1.45-9.738,8.288C52.157,51.532,50.5,40.758,52.364,39.1Z"
                                                            transform="translate(-38.068 -39.1)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                    <path
                                                            id="Path_14976"
                                                            data-name="Path 14976"
                                                            d="M48.9,41.5l-3.937,3.522A18.484,18.484,0,0,1,40.2,47.094"
                                                            transform="translate(-40.2 -36.527)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                </g>
                                            </g>
                                            <path
                                                    id="Path_14977"
                                                    data-name="Path 14977"
                                                    d="M42.164,32.7c5.18,17.612-7.045,18.648,0,32.116"
                                                    transform="translate(-28.696 -30.214)"
                                                    fill="none"
                                                    stroke="#fffbf5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2.5"
                                            />
                                        </g>
                                        <g
                                                id="Group_1162"
                                                data-name="Group 1162"
                                                transform="translate(62.509 1.7)"
                                        >
                                            <g id="Group_1161" data-name="Group 1161">
                                                <g id="Group_1160" data-name="Group 1160">
                                                    <g id="Group_1159" data-name="Group 1159">
                                                        <circle
                                                                id="Ellipse_46"
                                                                data-name="Ellipse 46"
                                                                cx="6.216"
                                                                cy="6.216"
                                                                r="6.216"
                                                                transform="translate(11.603 11.603)"
                                                                fill="none"
                                                                stroke="#fffbf5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2.5"
                                                        />
                                                        <g id="Group_1158" data-name="Group 1158">
                                                            <g
                                                                    id="Group_1154"
                                                                    data-name="Group 1154"
                                                                    transform="translate(17.819)"
                                                            >
                                                                <path
                                                                        id="Path_14978"
                                                                        data-name="Path 14978"
                                                                        d="M39.7,4.808V1.7"
                                                                        transform="translate(-39.7 -1.7)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                                <path
                                                                        id="Path_14979"
                                                                        data-name="Path 14979"
                                                                        d="M39.7,20.4V17.5"
                                                                        transform="translate(-39.7 15.237)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                            </g>
                                                            <g
                                                                    id="Group_1155"
                                                                    data-name="Group 1155"
                                                                    transform="translate(0 17.819)"
                                                            >
                                                                <path
                                                                        id="Path_14980"
                                                                        data-name="Path 14980"
                                                                        d="M46.8,10.3h3.108"
                                                                        transform="translate(-14.27 -10.3)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                                <path
                                                                        id="Path_14981"
                                                                        data-name="Path 14981"
                                                                        d="M31.1,10.3H34"
                                                                        transform="translate(-31.1 -10.3)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                            </g>
                                                            <g
                                                                    id="Group_1156"
                                                                    data-name="Group 1156"
                                                                    transform="translate(5.18 5.387)"
                                                            >
                                                                <path
                                                                        id="Path_14982"
                                                                        data-name="Path 14982"
                                                                        d="M44.7,6.372,46.772,4.3"
                                                                        transform="translate(-21.701 -4.3)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                                <path
                                                                        id="Path_14983"
                                                                        data-name="Path 14983"
                                                                        d="M33.6,17.472,35.672,15.4"
                                                                        transform="translate(-33.6 7.599)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                            </g>
                                                            <g
                                                                    id="Group_1157"
                                                                    data-name="Group 1157"
                                                                    transform="translate(5.18 5.387)"
                                                            >
                                                                <path
                                                                        id="Path_14984"
                                                                        data-name="Path 14984"
                                                                        d="M44.7,15.4l2.072,2.072"
                                                                        transform="translate(-21.701 7.599)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                                <path
                                                                        id="Path_14985"
                                                                        data-name="Path 14985"
                                                                        d="M33.6,4.3l2.072,2.072"
                                                                        transform="translate(-33.6 -4.3)"
                                                                        fill="none"
                                                                        stroke="#fffbf5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2.5"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g
                                                id="Group_1165"
                                                data-name="Group 1165"
                                                transform="translate(31.636 34.644)"
                                        >
                                            <g id="Group_1164" data-name="Group 1164">
                                                <g id="Group_1163" data-name="Group 1163">
                                                    <path
                                                            id="Path_14986"
                                                            data-name="Path 14986"
                                                            d="M29.217,17.6,20.1,30.239H38.333Z"
                                                            transform="translate(-12.019 -17.6)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                    <path
                                                            id="Path_14987"
                                                            data-name="Path 14987"
                                                            d="M44.936,37.582H18L28.981,23.7h4.973Z"
                                                            transform="translate(-14.27 -11.061)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                    <path
                                                            id="Path_14988"
                                                            data-name="Path 14988"
                                                            d="M50.595,42.625H16.2L26.353,30.4H40.442Z"
                                                            transform="translate(-16.2 -3.879)"
                                                            fill="none"
                                                            stroke="#fffbf5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                    />
                                                </g>
                                                <path
                                                        id="Path_14989"
                                                        data-name="Path 14989"
                                                        d="M30.12,61.064c-7.045-17.2,0-24.864,0-24.864"
                                                        transform="translate(-4.635 2.339)"
                                                        fill="none"
                                                        stroke="#fffbf5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2.5"
                                                />
                                                <path
                                                        id="Path_14990"
                                                        data-name="Path 14990"
                                                        d="M20.9,36.3s7.045,7.459,0,24.864"
                                                        transform="translate(-11.162 2.446)"
                                                        fill="none"
                                                        stroke="#fffbf5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2.5"
                                                />
                                            </g>
                                        </g>
                                        <g
                                                id="Group_1166"
                                                data-name="Group 1166"
                                                transform="translate(1.8 19.518)"
                                        >
                                            <path
                                                    id="Path_14991"
                                                    data-name="Path 14991"
                                                    d="M29.15,44.281a13.675,13.675,0,0,1-27.35,0c0-7.666,6.216-33.98,13.675-33.98,7.666-.207,13.675,26.314,13.675,33.98Z"
                                                    transform="translate(-1.8 -10.299)"
                                                    fill="none"
                                                    stroke="#fffbf5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2.5"
                                            />
                                            <path
                                                    id="Path_14992"
                                                    data-name="Path 14992"
                                                    d="M6,64.708V32.8a12.538,12.538,0,0,0,4.973.829,13.929,13.929,0,0,0,4.973-.829V64.708"
                                                    transform="translate(2.702 13.821)"
                                                    fill="none"
                                                    stroke="#fffbf5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2.5"
                                            />
                                        </g>
                                        <path
                                                id="Path_14993"
                                                data-name="Path 14993"
                                                d="M1.8,48.2H98.147"
                                                transform="translate(0 49.847)"
                                                fill="none"
                                                stroke="#fffbf5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2.5"
                                        />
                                        <g
                                                id="Group_1168"
                                                data-name="Group 1168"
                                                transform="translate(65.41 39.41)"
                                        >
                                            <g id="Group_1167" data-name="Group 1167">
                                                <path
                                                        id="Path_14994"
                                                        data-name="Path 14994"
                                                        d="M48.04,24.666h-.414a3.307,3.307,0,0,0-2.9-1.658,2.628,2.628,0,0,0-1.243.207,4.076,4.076,0,0,0-8.081.829v.829h-.622a2.279,2.279,0,0,0,0,4.558H47.833a2.395,2.395,0,0,0,.207-4.766Z"
                                                        transform="translate(-32.5 -19.9)"
                                                        fill="none"
                                                        stroke="#fffbf5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2.5"
                                                />
                                            </g>
                                        </g>
                                        <g
                                                id="Group_1170"
                                                data-name="Group 1170"
                                                transform="translate(27.078 9.988)"
                                        >
                                            <g id="Group_1169" data-name="Group 1169">
                                                <path
                                                        id="Path_14995"
                                                        data-name="Path 14995"
                                                        d="M36.17,12.33h-.414a4.713,4.713,0,0,0-4.144-2.486,6.05,6.05,0,0,0-1.865.414,5.877,5.877,0,0,0-11.6,1.243v1.036c-.207,0-.622-.207-.829-.207a3.315,3.315,0,0,0,0,6.63H36.17a3.315,3.315,0,1,0,0-6.63Z"
                                                        transform="translate(-14 -5.7)"
                                                        fill="none"
                                                        stroke="#fffbf5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2.5"
                                                />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="feature-title">TERENY ZIELONE</div>
                            <p class="text">
                                Dbamy o to, aby osiedle oferowało przyjazne i zielone
                                otoczenie, które sprzyja zdrowemu i zrównoważonemu stylowi
                                życia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- MAP || Lokalizacja -->
        <!-- ---------- -->
        <section class="margin-sm" data-map="true">
            <div class="container">
                <div class="row position-relative">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4 pe-3">
                        <!-- TITLE -->
                        <h2 class="header-1 mb-30px" data-aos="fade-up">Lokalizacja</h2>

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
        <!-- Gallery  ||  Galeria  -->
        <!-- ---------- -->
        <section class="margin-sm gallery">
            <div class="container">
                <div class="row mb-3 mb-lg-5 position-relative">
                    <div class="row-tag row-tag-224">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4">
                        <!-- TITLE -->
                        <h3 class="header-1 mb-30px" data-aos="fade-up">Galeria</h3>
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
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-1@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-1.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-1@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
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
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-2@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
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
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3.png') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/png"
                                            />
                                            <source
                                                    srcset="{{ asset('images/home/gallery-3@2x.png') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/png"
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
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-4@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-4.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/home/gallery-4@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
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
                            Skontaktuj <br />
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