@extends('layouts.page', ['body_class' => 'garage'])

@section('meta_title', $floor->name.' '.$floor->number)
@section('seo_title', $floor->meta_title)
@section('seo_description', $floor->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => ($floor->meta_title) ? $floor->meta_title : $floor->name.' '.$floor->number,
    'header_file' => 'rooms.jpg',
    'items' => []
    ])
@stop

@section('content')
    <div id="floor" class="container mb-0 mb-lg-5">
        <div class="row">
            <div id="sideMenu" class="col-12 col-lg-3 mt-3 mt-lg-5 pe-3 pe-lg-5">
                <div class="floor-nav">
                    @foreach($investments as $i)
                        @if($i->garages->count() > 0)
                        <h3>{{$i->name}}</h3>
                        <ul class="list-unstyled">
                            @foreach($i->garages as $f)
                                <li @if($floor->id == $f->id) class="active" @endif ><a href="{{route('garage', [$i->id, $f->id])}}">{{$f->name}} {{$f->number}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-9 mt-0 mt-lg-5">
                <span onclick="toggleNav()" class="toggleSideMenu"><i class="las la-bars"></i> Zmień piętro</span>
                @if($floor->file)
                    <div id="plan-holder">
                        <img src="{{ asset('/investment/floor/webp/'.$floor->file_webp) }}" alt="{{$floor->name}}" id="invesmentplan{{$floor->id}}" usemap="#invesmentplan{{$floor->id}}" class="garage-plan">
                        <map name="invesmentplan{{$floor->id}}">
                            @if($floor->properties)
                                @foreach($floor->properties as $r)
                                    @if($r->html)
                                        <area
                                                shape="poly"
                                                data-item="{{$r->id}}"
                                                alt="{{$r->slug}}"
                                                data-roomnumber="{{$r->number}}"
                                                data-roomtype="{{$r->typ}}"
                                                data-roomstatus="{{$r->status}}"
                                                coords="{{cords($r->html)}}"
                                                class="inline status-{{$r->status}}" href="#" title="<h4>{{$r->name}}</h4> @if($r->price) <ul class='mb-0 list-unstyled mt-2'><li>Cena: <b class=fr>{{ $r->price }} zł</b></li></ul>@endif @if($r->garage_text) <p>{{ $r->garage_text }}</p>@endif">
                                    @endif
                                @endforeach
                            @endif
                        </map>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <section id="mainContact" class="brown-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 d-flex align-items-center">
                    <div class="contact-text pe-0 pe-lg-3 pe-xxl-5">
                        <h2 class="mb-4">Zainteresowany?</h2>
                        <p>Zapraszamy do zapoznania się z ofertą osiedla Fort Natura osobiście w biurze sprzedaży znajdującym się obok inwestycji (ul. Wybickiego 5, Kraków). Chętnie odpowiemy na pytania dotyczące inwestycji. Omówimy proces sprzedaży i w razie potrzeby zaproponujemy doradztwo kredytowe.</p>
                        <div class="row">
                            <div class="col-12 mt-4 mt-xl-5 contact-data">
                                <p class="align-items-center"><img src="{{ asset('/images/contact/contact-icon-phone.svg') }}" alt="" class="contact-icon"> <a href="tel:+48570570700">570 570 700</a></p>
                                <p class="align-items-center"><img src="{{ asset('/images/contact/contact-icon-envelope.svg') }}" alt="" class="contact-icon"> <a href="mailto:biuro@fraxbud.pl">biuro@fraxbud.pl</a></p>
                            </div>
                            <div class="col-12 col-xl-6 mt-4 mt-xl-5 contact-data">
                                <p><img src="{{ asset('/images/contact/contact-icon-marker.svg') }}" alt="" class="contact-icon"> Biuro Sprzedaży: <br>ul. Wybickiego 5 <br>31-302 Kraków</p>
                            </div>
                            <div class="col-12 col-xl-6 mt-4 mt-xl-5 contact-data">
                                <p><img src="{{ asset('/images/contact/contact-icon-clock.svg') }}" alt="" class="contact-icon"> Biuro czynne: <br>pn – pt <br>9:00 – 17:00</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/deco.svg') }}" alt="" class="m-auto mt-5 mb-5 d-none" width="89" height="42">
                        <img src="{{ asset('images/kontakt.jpg') }}" width="580" height="415" class="d-none" alt="Wizualizacja inwestycji">
                    </div>
                </div>
                <div class="col-12 col-lg-7 pt-5 pt-lg-0">
                    @include('front.contact.form')
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/garage.min.js') }}" charset="utf-8"></script>
        <script>
            function toggleNav() {
                const sideMenu = document.getElementById("sideMenu");
                const floor = document.getElementById("pagecontent");

                if(sideMenu.classList.contains('openMenu')){
                    sideMenu.style.width = "0";
                    sideMenu.classList.remove("openMenu");
                    floor.style.left = "0";
                    document.body.style.overflow = 'scroll';
                } else {
                    sideMenu.style.width = "250px";
                    sideMenu.classList.add("openMenu");
                    floor.style.left = "250px";
                    document.body.style.overflow = 'hidden';
                }
            }
        </script>
    @endpush
@endsection

