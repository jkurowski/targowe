@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="overflow-x-hidden">
        @include('layouts.partials.developro-header', ['title' => ($page->meta_title) ? $page->meta_title : $page->title])

        <section class="margin-below-breadcrumb gallery">
            <div class="container">
                <div class="row mb-3 mb-lg-5 position-relative">
                    <div class="row-tag row-tag-224">
                        <span class="title">OSIEDLE TARGOWE</span>
                    </div>
                    <div class="offset-1 offset-sm-0 col-11 col-lg-4">
                        <!-- TITLE -->
                        <h1 class="header-1 mb-30px" data-aos="fade-up">Galeria</h1>
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
                    {!! parse_text($page->content) !!}
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')

@endpush