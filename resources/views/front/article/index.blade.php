@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="overflow-x-hidden">
        <div class="margin-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $page->title }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-4 feed">
            <div class="container">
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
    </main>
@endsection
@push('scripts')

@endpush