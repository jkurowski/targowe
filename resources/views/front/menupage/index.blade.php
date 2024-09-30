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
    <div id="page-content" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @if($parent && $parent->id)
                    <div class="col-4 pr-5">
                        {!! App\Models\Page::sidemenu($parent->id) !!}
                    </div>
                @endif

                <div @if($parent && $parent->id) class="col-8" @else class="col-12" @endif>
                    {!! parse_text($page->content) !!}
                </div>
            </div>
        </div>
    </div>
@endsection