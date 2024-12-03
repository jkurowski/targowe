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
                                <li class="breadcrumb-item">
                                    <a href="{{ route('news.index') }}">{{ $page->title }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $article->title }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-4 gallery">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-xl-8">
                        <div class="post-details">
                            <picture>
                                <source type="image/webp" srcset="{{asset('uploads/articles/webp/'.$article->file_webp) }}">
                                <source type="image/jpeg" srcset="{{asset('uploads/articles/'.$article->file) }}">
                                <img src="{{asset('uploads/articles/'.$article->file) }}" alt="{{ $article->title }}" class="w-100">
                            </picture>

                            <div class="post-details-entry mt-4 mb-3">
                                <h1 class="post-details-title mb-4">{{ $article->title }}</a></h1>
                                <p><b>{{$article->content_entry}}</b></p>
                            </div>
                            <div class="post-details-text">
                                <p>{!! parse_text($article->content) !!}</p>
                            </div>
                            <a href="{{route('news.index')}}" class="btn btn-primary mt-4">Wróć do listy aktualności<svg viewBox="0 0 19.971 19.971" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-339 -1753.9)" data-name="Group 816"><g transform="translate(358.97 1753.9) rotate(90)" fill="#345e3e" stroke="#345e3e" data-name="Ellipse 20"><ellipse cx="9.985" cy="9.985" rx="9.985" ry="9.985" stroke="none"/><ellipse cx="9.985" cy="9.985" rx="9.485" ry="9.485" fill="none"/></g><g transform="translate(348.98 1759.8) rotate(45)" fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" data-name="Icon feather-arrow-up-right"><path d="M0,5.764,5.764,0" data-name="Path 14793"/><path d="m0 0h5.764v5.764" data-name="Path 14794"/></g></g></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')

@endpush