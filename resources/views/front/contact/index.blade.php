@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="overflow-x-hidden">
        @include('layouts.partials.developro-header', ['title' => ($page->meta_title) ? $page->meta_title : $page->title])

        <section class="margin-xs" id="contact">
            <div class="container">
                <div class="row position-relative gy-3">
                    <div class="row-tag">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4 mb-3 mb-lg-0">
                        <!-- TITLE -->
                        <h1 class="header-1 mb-30px" data-aos="fade-up">Kontakt</h1>
                        <!-- PARAGRAPH -->
                        <div class="paragraph text-pretty mb-3" data-aos="fade-up" data-aos-delay="200">
                        {!! $page->content !!}
                        </div>
                        <!-- ADDRESS -->
                        <div class="contacts-box pt-3 pt-lg-4 pt-xl-6">
                            <a href="tel:+696162406" class="box">
                                <div class="icon">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16.903"
                                            height="16.903"
                                            viewBox="0 0 16.903 16.903"
                                    >
                                        <path
                                                id="Icon_awesome-phone-alt"
                                                data-name="Icon awesome-phone-alt"
                                                d="M16.421,11.945l-3.7-1.585a.792.792,0,0,0-.924.228l-1.638,2a12.237,12.237,0,0,1-5.85-5.85l2-1.638a.79.79,0,0,0,.228-.924L4.955.479A.8.8,0,0,0,4.048.02L.614.813A.792.792,0,0,0,0,1.585,15.317,15.317,0,0,0,15.319,16.9a.792.792,0,0,0,.773-.614l.792-3.433A.8.8,0,0,0,16.421,11.945Z"
                                                transform="translate(0 0)"
                                                fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <span class="info">696 162 406</span>
                            </a>
                            <a href="mailto:mieszkania@wgwstalbet.eu" class="box">
                                <div class="icon">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16.903"
                                            height="13.522"
                                            viewBox="0 0 16.903 13.522"
                                    >
                                        <path
                                                id="Icon_material-email"
                                                data-name="Icon material-email"
                                                d="M18.213,6H4.69A1.688,1.688,0,0,0,3.008,7.69L3,17.832a1.7,1.7,0,0,0,1.69,1.69H18.213a1.7,1.7,0,0,0,1.69-1.69V7.69A1.7,1.7,0,0,0,18.213,6Zm0,3.381-6.761,4.226L4.69,9.381V7.69l6.761,4.226L18.213,7.69Z"
                                                transform="translate(-3 -6)"
                                                fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <span class="info">mieszkania@wgwstalbet.eu</span>
                            </a>
                            <div class="box">
                                <div class="icon">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="15.504"
                                            height="22.148"
                                            viewBox="0 0 15.504 22.148"
                                    >
                                        <path
                                                id="Icon_material-location-on"
                                                data-name="Icon material-location-on"
                                                d="M15.252,3A7.746,7.746,0,0,0,7.5,10.752c0,5.814,7.752,14.4,7.752,14.4S23,16.566,23,10.752A7.746,7.746,0,0,0,15.252,3Zm0,10.52a2.768,2.768,0,1,1,2.768-2.768A2.77,2.77,0,0,1,15.252,13.52Z"
                                                transform="translate(-7.5 -3)"
                                                fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <span class="info"
                                >ul. Warszawska 79, <br />
                    98-100 Łask</span
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 offset-lg-1">
                        <div class="contact-form-bg">
                            <!-- FORM ROW -->
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <!-- FORM TITLE -->
                                    <div class="subtitle text-center mb-3 mb-sm-6 mt-5 text-primary">
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