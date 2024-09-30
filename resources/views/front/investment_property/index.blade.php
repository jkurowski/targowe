@extends('layouts.page', ['body_class' => 'property'])

@section('meta_title', $property->name)
@section('seo_title', $investment->name.' - '.$floor->name.' - '.$property->name)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => $property->name,
    'header_file' => 'rooms.jpg',
    'items' => [
        ['uri'=> $current_locale.'/mieszkania', 'title' => 'Mieszkania'],
        ['uri'=> $current_locale.'/pietro/budynek/'.$investment->id.'/p/'.$floor->id, 'title' => $investment->name.' - '.$floor->name]
    ]
])
@stop

@section('content')
<div id="property">
    <div class="container-fluid container-md">
        <div id="propertyNav" class="row">
            <div class="col-12 col-sm-4">
                @if($prev) <a href="{{route('front.investment.property', ['investment_id' => $property->investment_id, 'floor' => $property->floor_id, 'property' => $prev->id])}}" class="bttn bttn-nav">Poprzednie</a>@endif
            </div>
            <div class="col-12 col-sm-4">
                <a href="{{route('front.investment.floor', [$floor->investment_id, $floor->id])}}" class="bttn bttn-nav">Plan piętra</a>
            </div>
            <div class="col-12 col-sm-4">
                @if($next) <a href="{{route('front.investment.property', ['investment_id' => $property->investment_id, 'floor' => $property->floor_id, 'property' => $next->id])}}" class="bttn bttn-nav">Następne</a>@endif
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="property-desc">
                    <div class="room-status room-status-{{$property->status}}">
                        {{ roomStatus($property->status )}}
                    </div>

                    @if($property->specialoffer && $property->status <> 3 || $property->safe_loan && $property->status <> 3)
                        <span class="ribbon1">
                            @if($property->specialoffer)
                                <span>Oferta specjalna</span>
                            @endif
                            @if($property->safe_loan)
                                <span>Bezpieczny kredyt 2%</span>
                            @endif
                        </span>
                    @endif

                    @if($property->price && $investment->show_prices)
                        <h6 class="propertyPrice">@money($property->price)</h6>
                    @endif
                    <ul class="list-unstyled">
                        <li>Numer mieszkania:<span>{{$property->number}}</span></li>
                        <li>Piętro:<span>{{$floor->number}}</span></li>
                        <li>Pokoje:<span>{{$property->rooms}}</span></li>
                        <li>Powierzchnia:<span>{{$property->area}} m<sup>2</sup></span></li>
                        @if($property->window)<li>Wystawa okna:<span>{!! window($property->window) !!}</span></li>@endif
                        @if($property->garden_area)<li>Ogródek:<span>{{$property->garden_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area)<li>Balkon:<span>{{$property->balcony_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area_2)<li>Balkon 2:<span>{{$property->balcony_area_2}} m<sup>2</sup></span></li>@endif
                        @if($property->terrace_area)<li>Taras:<span>{{$property->terrace_area}} m<sup>2</sup></span></li>@endif
                        @if($property->loggia_area)<li>Balkon 3:<span>{{$property->loggia_area}} m<sup>2</sup></span></li>@endif
                        @if($property->parking_space)<li>Miejsce postojowe:<span>{{$property->parking_space}}</span></li>@endif
                        @if($property->garage)<li>Garaż:<span>{{$property->garage}}</span></li>@endif
                        @if($property->specialoffer_text)<li>{{$property->specialoffer_text}}</li>@endif
                    </ul>

                    <div class="row">
                        <div class="col-12 ">
                            @if($property->file_pdf)
                                <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank" class="bttn" style="background: white;font-size: 23px"><i class="las la-file-download"></i> POBIERZ PLAN .PDF</a>
                            @endif
                        </div>
                        <div class="col-12">
                            @if($property->view_3d)
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEstate" class="bttn"><i class="las la-vr-cardboard"></i> WIRTUALNY SPACER</a>
                                <!-- Modal -->
                                <div class="modal fade" id="modalEstate" tabindex="-1" aria-labelledby="modalEstateLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-fluid">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                                                <iframe src="{!! estate2link($property->view_3d) !!}" frameborder="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        </div>
                        <div class="col-12">
                            <button id="addToFav" class="bttn" data-id="{{$property->id}}"><i class="las la-heart"></i> DODAJ DO ULUBIONYCH</button>
                            <div id="clipboardmessage"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center d-block d-lg-none">
                        <a href="#contact" class="bttn scroll-to" data-offset="0">FORMULARZ KONTAKTOWY</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div id="contact">
                    <div class="form-container">
                        <form class="row validateForm" id="contact-form" action="{{route('contact.property', $property->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="col-12">
                                @if (session('success'))
                                    <div class="alert alert-success border-0 mb-3">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-warning border-0 mb-3">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                                <label for="form_name">Imię i nazwisko <span class="text-danger">*</span></label>
                                <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                @error('form_name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror

                            </div>
                            <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                <label for="form_email">Adres e-mail <span class="text-danger">*</span></label>
                                <input name="form_email" id="form_email" class="validate[required,custom[email]] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                @error('form_email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                <label for="form_phone">Numer telefonu <span class="text-danger">*</span></label>
                                <input name="form_phone" id="form_phone" class="validate[required,custom[phone]] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                                @error('form_phone')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-12 mt-3 mt-sm-4">
                                <label for="form_message">Wiadomość <span class="text-danger">*</span></label>
                                <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                @error('form_message')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            @foreach ($rules as $r)
                                <div class="col-12 mt-4">
                                    <div class="rodo-rule clearfix">
                                        <input name="rule_{{$r->id}}" id="zgoda_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                        <label for="zgoda_{{$r->id}}">{!! $r->text !!}</label>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-12">
                                <input name="form_page" type="hidden" value="{{$property->name}}">
                                <script type="text/javascript">
                                    document.write("<button class=\"bttn w-100 justify-content-center\" type=\"submit\">WYŚLIJ WIADOMOŚĆ</button>");
                                </script>
                                <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b></p></noscript>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 mt-0 mt-lg-5">
                <div class="property-img">
                    @if($property->file)
                        <a href="{{ asset('/investment/property/'.$property->file) }}" class="swipebox">
                            <picture>
                                <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}">
                            </picture>
                        </a>
                    @endif
                </div>
            </div>

            <div class="col-12 col-lg-7 mt-0 mt-lg-5">
                @if($property->view_360)
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $property->view_360 }}"></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <div id="root3dEstate"></div>
    <script>
        (function(w, d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], a = {renderDom: function(){}};
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.async=!!0;
            js.src = 'https://implementations.3destate.pl/sdk.js';
            fjs.parentNode.insertBefore(js, fjs);
            w.API_IMPLEMENTATION_3D_ESTATE = a;
            w.websiteCode = "fraxbud";
        }(window, document, 'script', 'jssdk-implementation-3destate'));

        window.API_IMPLEMENTATION_3D_ESTATE.renderDom();
    </script>
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        const button = document.querySelector('#addToFav');
        button.addEventListener('click', function() {
            const xhr = new XMLHttpRequest();
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const property_id = button.getAttribute('data-id');

            xhr.open('POST', '/pl/clipboard');
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            const data = { id: property_id };
            const jsonData = JSON.stringify(data);
            xhr.send(jsonData);

            xhr.addEventListener('load', function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const message = response.message;
                    const count = response.count;
                    document.querySelector('#clipboardmessage').innerHTML = message;
                    document.querySelector('#clipboardcount').innerHTML = count;
                }
            });
        });

        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
