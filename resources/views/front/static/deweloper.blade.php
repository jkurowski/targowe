@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="overflow-x-hidden">
        @include('layouts.partials.developro-header', ['title' => ($page->meta_title) ? $page->meta_title : $page->title])

        <!-- ---------- -->
        <!-- Hero  ||  Deweloper  -->
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
                            <!-- TEXT -->
                            <div
                                    class="offset-1 offset-sm-0 col-11 col-lg-12 col-xxl-8 pe-3"
                            >
                                <!-- TITLE -->
                                <h1 class="header-1 mb-30px" data-aos="fade-up">Deweloper</h1>

                                <!-- PARAGRAPH -->
                                <p
                                        class="paragraph text-pretty mb-4 text fw-bold"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    WGW DEVELOPMENT GROUP to lokalny deweloper, który doskonale
                                    rozumie potrzeby mieszkańców Łasku i okolic. Nasza firma,
                                    wyrosła z doświadczenia w projektowaniu, prefabrykacji i
                                    generalnym wykonawstwie konstrukcji stalowych, a teraz z
                                    dumą wkracza na rynek deweloperski.
                                </p>
                                <p
                                        class="paragraph text-pretty mb-4 text"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                >
                                    Co nas wyróżnia? Lokalna perspektywa: Jako firma z Łasku,
                                    doskonale znamy tutejszy rynek i potrzeby mieszkańców.
                                    Doświadczenie: Nasz zespół, kierowany przez eksperta z
                                    wieloletnim stażem w czołowej firmie deweloperskiej,
                                    gwarantuje najwyższą jakość realizacji. Odpowiedź na
                                    potrzeby rynku: Tworzymy mieszkania, których brakuje w
                                    okolicy, wypełniając lukę na rynku wtórnym. Naszym
                                    priorytetem jest zadowolenie klientów. Dążymy do tego, aby
                                    nasze inwestycje nie tylko spełniały, ale przewyższały
                                    oczekiwania przyszłych mieszkańców. WGW DEVELOPMENT GROUP to
                                    połączenie lokalnej wiedzy, profesjonalizmu i ambicji. Nasza
                                    flagowa inwestycja mieszkaniowa to dopiero początek -
                                    planujemy dalszy rozwój i kolejne projekty, które przyczynią
                                    się do poprawy jakości życia w naszym regionie. Zapraszamy
                                    do zapoznania się z naszą ofertą i do współtworzenia
                                    przyszłości Łasku razem z WGW DEVELOPMENT GROUP!
                                </p>

                                <!-- BUTTON -->
                                <a
                                        class="btn btn-primary mt-3 mt-lg-5 mb-3 mb-lg-4"
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
                            <!-- NUMBERS -->
                            <div class="offset-1 offset-sm-0 col-12 mt-3 mt-lg-5">
                                <div class="row row-gap-4">
                                    <div class="col-11 col-md-4 col-lg-6 col-xxl-4">
                                        <div class="number-box">
                                            <div class="number">
                                                <span data-number="100">100</span>+<br />
                                                <span class="number-title">Realizacji</span>
                                            </div>
                                            <span class="text">
                          Zrealizowaliśmy skutecznie ponad 150 inwestycji
                        </span>
                                        </div>
                                    </div>
                                    <div class="col-11 col-md-4 col-lg-6 col-xxl-4">
                                        <div class="number-box">
                                            <div class="number">
                                                <span data-number="20">20</span>+<br />
                                                <span class="number-title">Lat</span>
                                            </div>
                                            <span class="text">
                          Ponad 20 lat doświadczenia w branży budowlanej
                        </span>
                                        </div>
                                    </div>
                                    <div class="col-11 col-md-4 col-lg-12 col-xxl-4">
                                        <div class="number-box">
                                            <div class="number">
                                                <span data-number="40">40</span>+<br />
                                                <span class="number-title">Pracowników</span>
                                            </div>
                                            <span class="text">
                          Nasza kadra pracownicza składa się z doświadczonych
                          inżynierów, architektów, projektantów oraz
                          specjalistów z różnych dziedzin
                        </span>
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
                                    srcset="{{ asset('images/developer/hero.webp') }}"
                                    media="(max-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/developer/hero@2x.webp') }}"
                                    media="(min-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/developer/hero.png') }}"
                                    media="(max-width: 992px)"
                                    type="image/png"
                            />
                            <source
                                    srcset="{{ asset('images/developer/hero@2x.png') }}"
                                    media="(min-width: 992px)"
                                    type="image/png"
                            />
                            <img
                                    src="{{ asset('images/developer/hero@2x.png') }}"
                                    width="986"
                                    height="1348"
                                    class="img-fluid hero-img"
                                    alt="Osiedle Targowe - O investycji"
                            />
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- Features-Cross  ||  BEZPIECZEŃSTWO I KOMFORT etc  -->
        <!-- ---------- -->

        <section class="margin-xs">
            <div class="container feature-cross">
                <!-- 1 -->
                <div class="row">
                    <div class="offset-lg-4 col-lg-4">
                        <div class="feature-box">
                            <div class="svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="89.96"
                                        height="73.926"
                                        viewBox="0 0 89.96 73.926"
                                >
                                    <g id="barrier" transform="translate(0 -6.407)">
                                        <path
                                                id="Path_15060"
                                                data-name="Path 15060"
                                                d="M11.028,34H5.406A1.406,1.406,0,0,0,4,35.406v5.622a1.406,1.406,0,0,0,2.811,0V36.811H9.622v4.217a1.406,1.406,0,1,0,2.811,0V35.406A1.406,1.406,0,0,0,11.028,34Z"
                                                transform="translate(1.622 11.192)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_15061"
                                                data-name="Path 15061"
                                                d="M58.217,39a4.217,4.217,0,1,0,4.217,4.217A4.217,4.217,0,0,0,58.217,39Zm0,5.622a1.406,1.406,0,1,1,1.406-1.406A1.406,1.406,0,0,1,58.217,44.622Z"
                                                transform="translate(21.904 13.22)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_15062"
                                                data-name="Path 15062"
                                                d="M82.932,31.136H77.309a6.831,6.831,0,0,0-3.612,1.04L29.363,6.594a1.406,1.406,0,0,0-1.912.506l-4.217,7.309a1.406,1.406,0,0,0,.506,1.912L70.281,43.2V71.9h-50.6V40.975a1.406,1.406,0,0,0-1.406-1.406H1.406A1.406,1.406,0,0,0,0,40.975V78.927a1.406,1.406,0,0,0,1.406,1.406H88.554a1.406,1.406,0,0,0,1.406-1.406V38.164A7.028,7.028,0,0,0,82.932,31.136ZM26.369,14.592l2.811-4.863,6.241,3.6-6.058,2.994Zm5.96,3.43,6.058-3.008,5.622,3.233L37.952,21.3Zm8.434,4.92,6.114-3.05L52.5,23.124,46.385,26.16Zm8.518,4.92,6.058-3.008,5.622,3.233-6.03,3.05Zm8.518,4.92,6.114-3.05,5.622,3.233-6.058,2.994Zm8.532,4.92,6.044-3.008L78,37.925l-6.016,3.05ZM80.964,39.57l.562.337a2.811,2.811,0,1,1-2.811,4.863l-3.809-2.193ZM2.811,42.381H16.867V71.9H2.811ZM87.148,77.522H2.811V74.71H87.148Zm0-5.622H73.092V44.813l4.217,2.432a5.622,5.622,0,0,0,5.622-9.727l-6.086-3.57h6.086a4.217,4.217,0,0,1,4.217,4.217Z"
                                                fill="#fffbf5"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <span class="title">BEZPIECZEŃSTWO I KOMFORT</span>
                            <p class="text">
                                Zamknięte osiedle z ograniczeniem dostępu dla niepożądanych
                                osób z zewnątrz - dla lepszego komfortu użytkowania.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row cross-mt cross-mb">
                    <div class="offset-lg-1 col-lg-3">
                        <div class="feature-box feature-start">
                            <div class="svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="89.96"
                                        height="101.631"
                                        viewBox="0 0 89.96 101.631"
                                >
                                    <path
                                            id="reputation"
                                            d="M105.845,45.9a9.467,9.467,0,0,0-5.428-9.4,6.434,6.434,0,0,1-3.24-3.241,9.468,9.468,0,0,0-9.4-5.428,6.436,6.436,0,0,1-4.427-1.186,9.468,9.468,0,0,0-10.856,0,6.436,6.436,0,0,1-4.426,1.186,9.467,9.467,0,0,0-9.4,5.428,6.434,6.434,0,0,1-3.24,3.24,9.468,9.468,0,0,0-5.428,9.4,6.434,6.434,0,0,1-1.186,4.426,9.468,9.468,0,0,0,0,10.857,6.435,6.435,0,0,1,1.186,4.427,9.467,9.467,0,0,0,5.428,9.4,7.079,7.079,0,0,1,1.06.607L50.134,99.311a1.21,1.21,0,0,0,1.73,1.385l10.177-5.333,6.146,9.707a1.21,1.21,0,0,0,1.022.563,1.187,1.187,0,0,0,.182-.014,1.21,1.21,0,0,0,.986-.883L75.34,86.218a9.514,9.514,0,0,0,5.159,0l4.962,18.517a1.21,1.21,0,0,0,2.191.334L93.8,95.362l10.177,5.333a1.21,1.21,0,0,0,1.73-1.385L99.356,75.616a7.092,7.092,0,0,1,1.061-.607,9.467,9.467,0,0,0,5.428-9.4,6.434,6.434,0,0,1,1.186-4.426,9.467,9.467,0,0,0,0-10.857,6.434,6.434,0,0,1-1.186-4.426Zm-37.09,55.546-5.266-8.317a1.21,1.21,0,0,0-1.584-.424l-8.72,4.57,5.227-19.507c.088.157.172.318.25.486a9.467,9.467,0,0,0,9.4,5.428,6.435,6.435,0,0,1,4.426,1.186q.295.207.6.389l-4.338,16.19ZM93.933,92.7a1.21,1.21,0,0,0-1.584.424l-5.266,8.317-4.338-16.19q.307-.183.6-.389a6.437,6.437,0,0,1,4.427-1.186,9.468,9.468,0,0,0,9.4-5.428c.078-.168.163-.328.25-.485l5.227,19.507-8.72-4.57Zm11.116-32.91a8.764,8.764,0,0,0-1.615,6.029,7.048,7.048,0,0,1-4.039,7,8.763,8.763,0,0,0-4.413,4.413,7.048,7.048,0,0,1-7,4.039,8.762,8.762,0,0,0-6.029,1.615,7.048,7.048,0,0,1-8.078,0,8.709,8.709,0,0,0-5.14-1.655q-.437,0-.889.04a7.048,7.048,0,0,1-7-4.039,8.762,8.762,0,0,0-4.413-4.413,7.048,7.048,0,0,1-4.039-7,8.762,8.762,0,0,0-1.615-6.028,7.048,7.048,0,0,1,0-8.078A8.764,8.764,0,0,0,52.4,45.685a7.049,7.049,0,0,1,4.039-7,8.762,8.762,0,0,0,4.413-4.413,7.048,7.048,0,0,1,7-4.039,8.757,8.757,0,0,0,6.028-1.615,7.048,7.048,0,0,1,8.078,0,8.757,8.757,0,0,0,6.029,1.615,7.048,7.048,0,0,1,7,4.039,8.763,8.763,0,0,0,4.413,4.413,7.048,7.048,0,0,1,4.039,7,8.762,8.762,0,0,0,1.615,6.029,7.047,7.047,0,0,1,0,8.078ZM77.919,35.454a20.3,20.3,0,1,0,20.3,20.3,20.321,20.321,0,0,0-20.3-20.3Zm0,38.177a17.844,17.844,0,0,1-13.513-6.184c.8-3.508,4.413-6.072,9.823-6.945a9.053,9.053,0,0,0,7.379,0c5.41.874,9.023,3.437,9.823,6.945a17.844,17.844,0,0,1-13.513,6.184Zm0-14.763A6.666,6.666,0,1,1,84.585,52.2,6.673,6.673,0,0,1,77.919,58.868ZM93.166,65.08c-1.414-3.026-4.512-5.3-8.818-6.464a9.085,9.085,0,1,0-12.858,0c-4.306,1.161-7.4,3.439-8.818,6.464a17.879,17.879,0,1,1,30.493,0ZM68.6,12.341l4.169,3.527-1.3,5.3a1.21,1.21,0,0,0,1.812,1.317l4.642-2.875,4.642,2.875a1.21,1.21,0,0,0,1.812-1.317l-1.3-5.3,4.17-3.527a1.21,1.21,0,0,0-.692-2.13l-5.446-.4L79.039,4.753a1.21,1.21,0,0,0-2.24,0L74.734,9.808l-5.446.4a1.21,1.21,0,0,0-.692,2.13Zm7.064-.175a1.209,1.209,0,0,0,1.031-.749l1.229-3.008,1.229,3.008a1.21,1.21,0,0,0,1.031.749l3.241.24-2.481,2.1a1.21,1.21,0,0,0-.394,1.212l.774,3.156-2.762-1.711a1.21,1.21,0,0,0-1.274,0L74.52,18.872l.774-3.156A1.21,1.21,0,0,0,74.9,14.5l-2.481-2.1ZM48.139,22.819l5.374.97,1.526,5.243a1.21,1.21,0,0,0,2.228.234l2.583-4.812,5.458.169a1.21,1.21,0,0,0,.911-2.046l-3.778-3.943L64.288,13.5A1.21,1.21,0,0,0,62.624,12l-4.918,2.374-4.317-3.345a1.21,1.21,0,0,0-1.94,1.12l.739,5.411-4.515,3.072a1.21,1.21,0,0,0,.466,2.191Zm6.03-3.684a1.209,1.209,0,0,0,.518-1.164l-.44-3.22,2.569,1.99a1.21,1.21,0,0,0,1.267.133l2.926-1.413-1.1,3.058a1.21,1.21,0,0,0,.265,1.246l2.248,2.346-3.248-.1a1.215,1.215,0,0,0-1.1.637l-1.537,2.863-.908-3.12a1.21,1.21,0,0,0-.947-.853l-3.2-.577,2.687-1.828ZM51.433,35.1a1.21,1.21,0,0,0-.234-2.228l-5.243-1.526-.97-5.374a1.21,1.21,0,0,0-2.191-.466l-3.071,4.515-5.411-.739a1.21,1.21,0,0,0-1.12,1.94l3.345,4.317-2.374,4.918a1.21,1.21,0,0,0,1.5,1.665L40.8,40.274l3.943,3.778a1.21,1.21,0,0,0,2.046-.911l-.169-5.458L51.433,35.1Zm-6.616.805a1.21,1.21,0,0,0-.637,1.1l.1,3.248-2.347-2.248a1.209,1.209,0,0,0-1.246-.265l-3.058,1.1,1.413-2.926a1.21,1.21,0,0,0-.133-1.267l-1.99-2.568,3.22.439A1.21,1.21,0,0,0,41.3,32l1.828-2.687.577,3.2a1.21,1.21,0,0,0,.853.947l3.12.908L44.817,35.9ZM90.531,24.623l5.458-.169,2.583,4.812a1.21,1.21,0,0,0,2.228-.234l1.526-5.243,5.374-.97a1.21,1.21,0,0,0,.466-2.191l-4.515-3.072.738-5.411a1.21,1.21,0,0,0-1.94-1.12L98.132,14.37,93.214,12a1.21,1.21,0,0,0-1.665,1.5L93.4,18.634,89.62,22.577a1.21,1.21,0,0,0,.911,2.046Zm5.4-6.1-1.1-3.058,2.926,1.413a1.21,1.21,0,0,0,1.267-.133l2.569-1.99-.44,3.22a1.21,1.21,0,0,0,.518,1.164l2.687,1.828-3.2.577a1.21,1.21,0,0,0-.947.853l-.908,3.12-1.537-2.863a1.21,1.21,0,0,0-1.066-.638h-.038l-3.248.1,2.248-2.346a1.21,1.21,0,0,0,.265-1.246Zm26.809,11.356a1.211,1.211,0,0,0-1.212-.594l-5.411.739-3.072-4.515a1.21,1.21,0,0,0-2.191.466l-.97,5.374-5.243,1.526a1.21,1.21,0,0,0-.234,2.228l4.811,2.583-.169,5.458a1.21,1.21,0,0,0,2.046.911l3.943-3.778,5.139,1.847a1.21,1.21,0,0,0,1.5-1.665L119.3,35.539l3.345-4.317a1.21,1.21,0,0,0,.092-1.346Zm-5.941,6.04,1.413,2.926-3.058-1.1a1.209,1.209,0,0,0-1.246.265l-2.347,2.248.1-3.248a1.21,1.21,0,0,0-.637-1.1l-2.863-1.537,3.12-.908a1.21,1.21,0,0,0,.853-.947l.577-3.2L114.536,32a1.211,1.211,0,0,0,1.164.518l3.22-.439-1.99,2.568a1.21,1.21,0,0,0-.133,1.267Z"
                                            transform="translate(-32.939 -4.001)"
                                            fill="#fffbf5"
                                    />
                                </svg>
                            </div>
                            <span class="title">JAKOŚĆ WYKONANIA</span>
                            <p class="text">
                                Tereny zewnętrzne, elewacje i części wspólne w blokach
                                wykończone w najwyższej jakości wykonania, która jest efektem
                                precyzyjnego podejścia do każdego etapu budowy.
                            </p>
                        </div>
                    </div>
                    <!-- CENTER -->
                    <div class="col-lg-4 mt-5 mt-lg-0 d-flex justify-content-center">
                        <div class="feature-center">
                            <div class="top"></div>
                            <div class="right"></div>
                            <div class="bottom"></div>
                            <div class="left"></div>
                            <div class="inside">
                                <img
                                        loading="lazy"
                                        class="img-fluid"
                                        src="{{ asset('images/reusable/developer-logo.svg') }}"
                                        width="171"
                                        height="100"
                                        alt="Logo Osiedle Targowe"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5 mt-lg-0">
                        <div class="feature-box feature-end">
                            <div class="svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="102.255"
                                        height="109.335"
                                        viewBox="0 0 102.255 109.335"
                                >
                                    <g id="environmental" transform="translate(-16.576)">
                                        <path
                                                id="Path_14921"
                                                data-name="Path 14921"
                                                d="M95.371,347.893a6.863,6.863,0,0,0-5.151,1.194l-6.33,4.525a6.942,6.942,0,0,0-.659-1.147,6.905,6.905,0,0,0-9.637-1.607l-5.2,3.716a6.858,6.858,0,0,0-4.228-1.464H58.6a9.2,9.2,0,0,1-5.121-1.551,11.826,11.826,0,0,0-14.556,1.121L37.8,353.712a4.423,4.423,0,0,1-2.1,1.072v-.074a3.375,3.375,0,0,0-3.37-3.372H19.946a3.375,3.375,0,0,0-3.37,3.372v3.137a1.6,1.6,0,0,0,3.2,0v-3.136a.168.168,0,0,1,.167-.168H32.328a.168.168,0,0,1,.167.168v24.78a.168.168,0,0,1-.167.168H19.946a.168.168,0,0,1-.167-.168v-14.16a1.6,1.6,0,0,0-3.2,0v14.16a3.375,3.375,0,0,0,3.37,3.372H32.328a3.375,3.375,0,0,0,3.37-3.372v-.168H64.371a22.691,22.691,0,0,0,13.268-4.255l20.612-14.733a6.913,6.913,0,0,0-2.88-12.442Zm-19.915,5.57a3.708,3.708,0,0,1,5.738,2.076l-10.031,7.17a5.494,5.494,0,0,1-.9.518,6.734,6.734,0,0,0,.811-3.34,6.819,6.819,0,0,0-.668-2.815Zm20.932,4.266L75.776,372.461a19.5,19.5,0,0,1-11.406,3.658H35.7V358.028a7.616,7.616,0,0,0,4.264-1.954l1.128-1.034a8.623,8.623,0,0,1,10.614-.818,12.393,12.393,0,0,0,6.9,2.09h5.563a3.724,3.724,0,0,1,3.7,3.636,3.617,3.617,0,0,1-1.06,2.613,3.9,3.9,0,0,1-2.763,1.167H53.553a1.6,1.6,0,1,0,0,3.2H67.98a8.624,8.624,0,0,0,5.044-1.617l19.058-13.622a3.7,3.7,0,0,1,5.168.862A3.715,3.715,0,0,1,96.388,357.729Z"
                                                transform="translate(0 -273.527)"
                                                fill="#fffbf5"
                                        />
                                        <path
                                                id="Path_14922"
                                                data-name="Path 14922"
                                                d="M218.879,16a3.378,3.378,0,0,0-3.187-1.773c-.647.042-1.29.1-1.929.176a33.45,33.45,0,0,0-56.9,3.092,1.6,1.6,0,1,0,2.815,1.529,30.335,30.335,0,0,1,3.583-5.213h2.965a2.641,2.641,0,0,1,2.508,1.808,6.66,6.66,0,0,0,6.327,4.56h1.893a3.47,3.47,0,0,1,3.466,3.466v5.664a6.925,6.925,0,0,1-.727,3.081l-1,2a6.857,6.857,0,0,1-4.033,3.469A36.545,36.545,0,0,0,156.07,31.88a30.27,30.27,0,0,1,.909-6,1.6,1.6,0,0,0-3.1-.8,33.481,33.481,0,0,0-1.013,6.79c-.108,0-.217.007-.324.012a3.375,3.375,0,0,0-3.2,3.551,36.958,36.958,0,0,0,36.922,34.98c.367,0,.752-.007,1.209-.022h.027A36.987,36.987,0,0,0,218.879,16ZM192.717,3.895l-2.279,3.418a2.639,2.639,0,0,1-2.2,1.177h-5.216A6.851,6.851,0,0,1,176.87,4.7a30.3,30.3,0,0,1,15.847-.806ZM181.553,35.832l1-2a10.142,10.142,0,0,0,1.065-4.513V23.65a6.677,6.677,0,0,0-6.669-6.669h-1.893a3.461,3.461,0,0,1-3.288-2.37,5.836,5.836,0,0,0-5.344-3.99,30.248,30.248,0,0,1,7.442-4.759l.126.253a10.038,10.038,0,0,0,9.027,5.579h5.216a5.835,5.835,0,0,0,4.865-2.6l2.864-4.3A30.1,30.1,0,0,1,208.3,12.736h-6.179a10.037,10.037,0,0,0-9.027,5.579l-1,2a10.144,10.144,0,0,0-1.065,4.513v1.113a36.807,36.807,0,0,0-9.214,18.045,37.476,37.476,0,0,0-4.194-3.96,10.051,10.051,0,0,0,3.931-4.2Zm25.17-19.893a36.774,36.774,0,0,0-12.1,6.627,6.853,6.853,0,0,1,.341-.814l1-2a6.852,6.852,0,0,1,6.162-3.808ZM152.541,35.268a.169.169,0,0,1,.045-.126.163.163,0,0,1,.117-.056c.571-.029,1.151-.044,1.723-.044a33.934,33.934,0,0,1,26.81,13.243q-.108,1.414-.11,2.844A37.06,37.06,0,0,0,183.255,63.5c-6.567-3.828-16.3-10.774-20.281-20.074a1.6,1.6,0,0,0-2.944,1.261c2.309,5.391,6.522,10.568,12.523,15.387a75.288,75.288,0,0,0,10.485,6.99,33.754,33.754,0,0,1-30.5-31.794Zm40.37,31.3a49.491,49.491,0,0,0,5.589-6.043c4.767-6.075,10.78-16.6,12.353-32.228a1.6,1.6,0,1,0-3.187-.321c-1.488,14.786-7.122,24.716-11.587,30.444a43.258,43.258,0,0,1-8.071,8.047A33.779,33.779,0,0,1,215.9,17.428h.01a.17.17,0,0,1,.147.089A33.8,33.8,0,0,1,192.91,66.565Z"
                                                transform="translate(-104.411)"
                                                fill="#fffbf5"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <span class="title">DBAŁOŚĆ O ŚRODOWISKO</span>
                            <p class="text">
                                Budując mieszkania, dbamy o środowisko poprzez wdrażanie
                                zrównoważonych praktyk na każdym etapie inwestycji.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="row">
                    <div class="offset-lg-4 col-lg-4">
                        <div class="feature-box">
                            <div class="svg-box">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="101.631"
                                        height="101.631"
                                        viewBox="0 0 101.631 101.631"
                                >
                                    <g id="experience" transform="translate(0)">
                                        <g
                                                id="Group_1146"
                                                data-name="Group 1146"
                                                transform="translate(0)"
                                        >
                                            <path
                                                    id="Path_14923"
                                                    data-name="Path 14923"
                                                    d="M385.138,27.534a1.489,1.489,0,0,0,1.489-1.489V15.525a15.524,15.524,0,1,0-31.049,0V86.083c0,.008,0,.015,0,.023a15.525,15.525,0,0,0,31.05,0h0V32.992a1.489,1.489,0,1,0-2.977,0V76.979a15.5,15.5,0,0,0-25.094,0V15.525a12.547,12.547,0,0,1,25.094,0v10.52a1.489,1.489,0,0,0,1.489,1.489ZM371.1,73.559a12.547,12.547,0,1,1-12.547,12.547A12.562,12.562,0,0,1,371.1,73.559Z"
                                                    transform="translate(-284.996 0)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_14924"
                                                    data-name="Path 14924"
                                                    d="M409.371,248.477a2.8,2.8,0,0,0-2.277-1.92l-2.1-.306-1.179-2.388a2.556,2.556,0,0,0-4.583,0l-1.179,2.388-2.1.306a2.821,2.821,0,0,0-1.564,4.812l1.522,1.484-.359,2.1a2.821,2.821,0,0,0,4.093,2.974l1.882-.989,1.881.989a2.821,2.821,0,0,0,4.093-2.974l-.359-2.1,1.522-1.484A2.8,2.8,0,0,0,409.371,248.477Zm-4.373,2.3a2.821,2.821,0,0,0-.811,2.5l.32,1.864-1.674-.88a2.82,2.82,0,0,0-2.626,0l-1.674.88.32-1.864a2.821,2.821,0,0,0-.811-2.5l-1.354-1.32,1.871-.272a2.82,2.82,0,0,0,2.124-1.543l.837-1.7.837,1.7a2.819,2.819,0,0,0,2.124,1.543l1.872.272Z"
                                                    transform="translate(-315.413 -194.315)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_14925"
                                                    data-name="Path 14925"
                                                    d="M409.371,151.5a2.8,2.8,0,0,0-2.277-1.92l-2.1-.306-1.179-2.388a2.556,2.556,0,0,0-4.583,0l-1.179,2.388-2.1.306a2.821,2.821,0,0,0-1.564,4.812l1.522,1.484-.359,2.1a2.821,2.821,0,0,0,4.093,2.974l1.882-.989,1.881.989a2.821,2.821,0,0,0,4.093-2.974l-.359-2.1,1.522-1.484a2.8,2.8,0,0,0,.714-2.892ZM405,153.8a2.821,2.821,0,0,0-.811,2.5l.32,1.864-1.674-.88a2.819,2.819,0,0,0-2.626,0l-1.674.88.32-1.864a2.821,2.821,0,0,0-.811-2.5l-1.354-1.32,1.871-.272a2.82,2.82,0,0,0,2.124-1.543l.837-1.7.837,1.7a2.819,2.819,0,0,0,2.124,1.543l1.872.272Z"
                                                    transform="translate(-315.413 -116.59)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_14926"
                                                    data-name="Path 14926"
                                                    d="M409.371,54.527a2.8,2.8,0,0,0-2.277-1.92l-2.1-.306-1.179-2.388a2.556,2.556,0,0,0-4.583,0L398.049,52.3l-2.1.306a2.821,2.821,0,0,0-1.564,4.812L395.9,58.9l-.359,2.1a2.821,2.821,0,0,0,4.093,2.974l1.882-.989,1.881.989A2.821,2.821,0,0,0,407.494,61l-.359-2.1,1.522-1.484a2.8,2.8,0,0,0,.714-2.892ZM405,56.827a2.821,2.821,0,0,0-.811,2.5l.32,1.864-1.674-.88a2.82,2.82,0,0,0-2.626,0l-1.674.88.32-1.864a2.821,2.821,0,0,0-.811-2.5l-1.354-1.32,1.871-.272a2.82,2.82,0,0,0,2.124-1.543l.837-1.7.837,1.7a2.819,2.819,0,0,0,2.124,1.543l1.872.272Z"
                                                    transform="translate(-315.413 -38.863)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_14927"
                                                    data-name="Path 14927"
                                                    d="M386.337,407.316l2.919,2.919a4.7,4.7,0,0,0,6.643,0l5.872-5.872a4.7,4.7,0,1,0-6.643-6.643l-2.574,2.574a4.7,4.7,0,0,0-6.217,7.02Zm2.105-4.537a1.719,1.719,0,0,1,2.432,0l.65.65a1.489,1.489,0,0,0,2.105,0l3.6-3.6a1.719,1.719,0,0,1,2.432,2.432l-5.872,5.872a1.72,1.72,0,0,1-2.432,0l-2.919-2.919A1.721,1.721,0,0,1,388.442,402.779Z"
                                                    transform="translate(-308.549 -317.671)"
                                                    fill="#fffbf5"
                                            />
                                            <path
                                                    id="Path_14928"
                                                    data-name="Path 14928"
                                                    d="M45.036,63.647l-2.384-.691V58.938a16.959,16.959,0,0,0,8.48-13.865h.537A7.5,7.5,0,0,0,55.792,31.3V21.585a21.454,21.454,0,0,0-1.7-8.418,1.489,1.489,0,1,0-2.741,1.162,18.5,18.5,0,0,1,1.466,7.256v8.566a7.525,7.525,0,0,0-1.144-.087H50.323l-5.856-6.433a2.279,2.279,0,0,0-2.673-.528L29.28,29.022v-.735a1.89,1.89,0,0,0-2.6-1.75l-8.659,3.527H16.745a7.534,7.534,0,0,0-1.143.087V21.585A18.606,18.606,0,0,1,47.365,8.427c.169.169.333.34.489.51a1.489,1.489,0,1,0,2.2-2.011c-.185-.2-.38-.406-.579-.605A21.584,21.584,0,0,0,12.624,21.585V31.3a7.5,7.5,0,0,0,4.12,13.772h.537a16.958,16.958,0,0,0,8.481,13.866v4.019l-2.384.691A32.26,32.26,0,0,0,7.3,74.284,1.489,1.489,0,1,0,9.6,76.166a29.3,29.3,0,0,1,9.473-7.636A15.906,15.906,0,0,0,25.328,77.1a4.229,4.229,0,0,0,3.728.523l1.35,2.671-3.78,18.361H4.579a1.6,1.6,0,0,1-1.6-1.6V94.769A29.557,29.557,0,0,1,6.026,81.721,1.489,1.489,0,1,0,3.358,80.4,32.549,32.549,0,0,0,0,94.769v2.283a4.585,4.585,0,0,0,4.579,4.579H63.835a4.585,4.585,0,0,0,4.579-4.579V94.769A32.4,32.4,0,0,0,45.036,63.647Zm1.555,3.662a12.907,12.907,0,0,1-5.183,7.33,1.271,1.271,0,0,1-1.615-.147l-2.556-2.556a8.476,8.476,0,0,0,5.189-5.946l1.781.516Q45.423,66.86,46.592,67.31ZM32.884,78.6l-1.4-2.76,2.719-2.719,2.721,2.721L35.535,78.6H32.884ZM56.2,37.568a4.532,4.532,0,0,1-4.527,4.527h-.516V33.042h.516A4.532,4.532,0,0,1,56.2,37.568Zm-43.979,0a4.532,4.532,0,0,1,4.527-4.527h.517v9.053h-.517A4.532,4.532,0,0,1,12.218,37.568Zm8.021,6.687V32.375L26.3,29.9v.2a2.291,2.291,0,0,0,3.27,2.071l13.035-6.166,5.569,6.117V44.255a13.969,13.969,0,1,1-27.938,0ZM34.207,61.2a16.868,16.868,0,0,0,5.468-.91v3.765a5.468,5.468,0,1,1-10.935,0V60.291a16.864,16.864,0,0,0,5.467.91Zm-7.2,13.438a12.908,12.908,0,0,1-5.182-7.326c.78-.3,1.574-.571,2.384-.806l1.781-.516a8.476,8.476,0,0,0,5.189,5.946l-2.556,2.556A1.271,1.271,0,0,1,27.007,74.639Zm6.175,6.934h2.056l3.517,17.08H29.665ZM65.437,97.051a1.6,1.6,0,0,1-1.6,1.6H41.794l-3.78-18.36,1.349-2.67a4.229,4.229,0,0,0,3.724-.524,15.9,15.9,0,0,0,6.251-8.568,29.437,29.437,0,0,1,16.1,26.238Z"
                                                    transform="translate(0)"
                                                    fill="#fffbf5"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="title">WIELOLETNIE DOŚWIADCZENIE</span>
                            <p class="text">
                                Ponad 20 lat w branży budowlanej. Naszym celem jest spełnienie
                                oczekiwań inwestora na każdym etapie inwestycji.
                            </p>
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
        <!-- Developer  ||   -->
        <!-- ---------- -->
        <section class="margin-xxs developer-bg section-max-width">
            <div class="container developer-container">
                <div class="row position-relative align-content-center z-1">
                    <div class="row-tag row-tag-hero row-tag-secondary">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div
                            class="offset-1 col-10 col-lg-4 offset-sm-0 position-relative z-1"
                    >
                        <!-- TITLE -->
                        <h2 class="header-1 mb-30px text-secondary" data-aos="fade-up">
                            Dołącz do grona naszych klientów
                        </h2>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-30px text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Tworzymy zaawansowane, innowacyjne i bezpieczne obiekty
                            budowlane, które przewyższają oczekiwania naszych Inwestorów.
                            Nasze projekty są naszą wielką dumą, ponieważ dzięki naszemu
                            doświadczeniu i wiedzy jesteśmy w stanie zrealizować nawet
                            najbardziej wymagające zadania.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- SLIDER ||  Rekomendacje -->
        <!-- ---------- -->
        <section class="margin-sm">
            <div class="container">
                <div class="row position-relative align-items-center">
                    <div class="row-tag row-align-center">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <!-- TITLE SECTION -->
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4 pe-3">
                        <!-- TITLE -->
                        <h3 class="header-1 mb-30px" data-aos="fade-up">Doświadczenie</h3>
                        <!-- PARAGRAPH -->
                        <p
                                class="paragraph text-pretty mb-4 text"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            Jesteśmy dumni z efektów naszej pracy i gorąco zachęcamy do
                            zapoznania się z naszymi ukończonymi przedsięwzięciami
                            deweloperskimi, które stanowią nie tylko dowód naszych
                            umiejętności, ale również potwierdzenie zaufania naszych
                            dotychczasowych klientów.
                        </p>
                    </div>
                    <!-- SLIDER -->
                    <div class="col-12 col-xl-8 position-relative mt-3 mt-xl-0">
                        <div class="slider-recommendation">
                            <!-- SLIDES -->
                            <div class="slick-slider-recommendation">
                                <!-- RECOMMENDATION 1 -->
                                <div class="">
                                    <div class="recommendation-box">
                                        <span class="name">„Mirabelkowa Aleja” etap I </span>
                                        <p class="paragraph mt-3">
                                            Budowa zamkniętego osiedla domów jednorodzinnych w
                                            zabudowie szeregowej pod nazwą „Mirabelkowa Aleja” etap
                                            I przy ul. Podchorążych 49 w Łodzi Inwestycja
                                            zrealizowana w ramach wyznaczonego terminu i budżetu
                                            przekraczającego
                                            <span class="d-xl-block">17 000 000 zł.</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- RECOMMENDATION 2 -->
                                <div class="">
                                    <div class="recommendation-box">
                                        <span class="name">„Mirabelkowa Aleja” etap II</span>
                                        <p class="paragraph mt-3">
                                            Budowa zamkniętego osiedla domów jednorodzinnych w
                                            zabudowie szeregowej pod nazwą „Mirabelkowa Aleja” etap
                                            II przy ul. Podchorążych 49 w Łodzi Inwestycja
                                            zrealizowana w ramach wyznaczonego terminu i budżetu
                                            przekraczającego
                                            <span class="d-xl-block">17 000 000 zł.</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- RECOMMENDATION 1 -->
                                <div class="">
                                    <div class="recommendation-box">
                                        <span class="name">EWELIN</span>
                                        <p class="paragraph mt-3">
                                            Budowa budynku mieszkalnego wielorodzinnego „EWELIN” w
                                            Łodzi przy ul. Obywatelskiej 110 (132 mieszkania o
                                            powierzchniach od 32m<sup>2</sup> do 97m<sup>2</sup>).
                                            Inwestycja zrealizowana w ramach wyznaczonego terminu i
                                            budżetu przekraczającego
                                            <span class="d-xl-block">19 000 000 zł.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
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

@endpush