<div id="filtr">
    <div class="search-label">Szukaj w całej inwestycji</div>
    <form method="get" action="{{ route('plan') }}">
        <div class="container p-0">
            <div class="row">
                @if($area_range)
                    <div class="col-6 col-md">
                        <label for="filtr-area" class="w-100">Metraż</label>
                        <select name="area" id="filtr-area">
                            <option value="">Wszystkie metraże</option>
                            {!! area2Select($area_range) !!}
                        </select>
                    </div>
                @endif
                <div class="col-6 col-md">
                    <label for="filtr-rooms" class="w-100">Pokoje</label>
                    <select name="rooms" id="filtr-rooms">
                        <option value="" selected>Wszystkie pokoje</option>
                        <option value="1" @if(request()->input('rooms') == 1) selected @endif>1 pokój</option>
                        <option value="2" @if(request()->input('rooms') == 2) selected @endif>2 pokoje</option>
                        <option value="3" @if(request()->input('rooms') == 3) selected @endif>3 pokoje</option>
                    </select>
                </div>
                <div class="col-6 col-md mt-3 mt-md-0">
                    <label for="filtr-floor" class="w-100">Piętro</label>
                    <select name="floor" id="filtr-floor">
                        <option value="" @if(!request()->has('floor')) selected @endif>Wszystkie piętra</option>
                        <option value="0" @if(request()->filled('floor') && request()->input('floor') == 0) selected @endif>Parter</option>
                        <option value="1" @if(request()->input('floor') == 1) selected @endif>Piętro 1</option>
                        <option value="2" @if(request()->input('floor') == 2) selected @endif>Piętro 2</option>
                        <option value="3" @if(request()->input('floor') == 3) selected @endif>Piętro 3</option>
                        <option value="4" @if(request()->input('floor') == 4) selected @endif>Piętro 4</option>
                        <option value="5" @if(request()->input('floor') == 5) selected @endif>Piętro 5</option>
                        <option value="6" @if(request()->input('floor') == 6) selected @endif>Piętro 6</option>
                        <option value="7" @if(request()->input('floor') == 7) selected @endif>Piętro 7</option>
                    </select>
                </div>
                <div class="col-6 col-md mt-3 mt-md-0">
                    <label for="filtr-button" class="w-100">&nbsp;</label>
                    <button type="submit" id="filtr-button" class="bttn bttn-center bttn-sm w-100">Szukaj</button>
                </div>
            </div>
        </div>
    </form>
</div>
