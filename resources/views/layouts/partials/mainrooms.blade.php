<section id="mainRooms" @isset($class) class="{{$class}}" @endisset>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Nasze mieszkania</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bc bc-top-right bc-top-left">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="main-room">
                                <img src="{{ asset('images/deco.svg') }}" alt="" width="89" height="42" class="m-auto">
                                <h3>Kawalerki</h3>
                                <p>&nbsp;</p>
                                <a href="{{ route('plan') }}?rooms=1"><img src="{{ asset('/images/mieszkanie-1-pokojowe.jpg') }}" width="600" height="400" alt="Wizualizacja mieszkania 1-pokojowego" class="mt-4"></a>
                                <div class="main-room-area">
                                    27 m<sup>2</sup>
                                </div>
                                <div class="main-room-price">
                                    gotowe do odbioru
                                </div>
                                <div class="main-room-footer">
                                    <a href="{{ route('plan') }}?rooms=1" class="bttn">WIĘCEJ SZCZEGÓŁÓW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="main-room">
                                <img src="{{ asset('images/deco.svg') }}" alt="" width="89" height="42" class="m-auto">
                                <h3>Mieszkanie</h3>
                                <p>2 - pokojowe</p>
                                <a href="{{ route('plan') }}?rooms=2"><img src="{{ asset('/images/mieszkanie-2-pokojowe.jpg') }}" width="600" height="400" alt="Wizualizacja mieszkania 2-pokojowego" class="mt-4"></a>
                                <div class="main-room-area">
                                    32-46 m<sup>2</sup>
                                </div>
                                <div class="main-room-price">
                                    gotowe w 2024 roku
                                </div>
                                <div class="main-room-footer">
                                    <a href="{{ route('plan') }}?rooms=2" class="bttn">WIĘCEJ SZCZEGÓŁÓW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="main-room">
                                <img src="{{ asset('images/deco.svg') }}" alt="" width="89" height="42" class="m-auto">
                                <h3>Mieszkanie</h3>
                                <p>3 - pokojowe</p>
                                <a href="{{ route('plan') }}?rooms=3"><img src="{{ asset('/images/mieszkanie-3-pokojowe.jpg') }}" width="600" height="400" alt="Wizualizacja mieszkania 3-pokojowego" class="mt-4"></a>
                                <div class="main-room-area">
                                    53-73 m<sup>2</sup>
                                </div>
                                <div class="main-room-price">
                                    gotowe w 2024 roku
                                </div>
                                <div class="main-room-footer">
                                    <a href="{{ route('plan') }}?rooms=3" class="bttn">WIĘCEJ SZCZEGÓŁÓW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>