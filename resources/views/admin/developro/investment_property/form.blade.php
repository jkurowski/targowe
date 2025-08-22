@extends('admin.layout')
@section('content')
    @if(Route::is('admin.developro.investment.properties.edit'))
        <form method="POST" action="{{route('admin.developro.investment.properties.update', [$investment, $floor, $entry])}}" enctype="multipart/form-data" class="mappa">
            {{method_field('PUT')}}
            @else
                <form method="POST" action="{{route('admin.developro.investment.properties.store', [$investment, $floor])}}" enctype="multipart/form-data" class="mappa">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card">
                            <div class="card-head container">
                                <div class="row">
                                    <div class="col-12 pl-0">
                                        <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.investment.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span><a href="{{route('admin.developro.investment.floors.index', $investment)}}">{{$investment->name}}</a><span class="d-inline-flex me-2 ms-2">/</span><a href="{{route('admin.developro.investment.properties.index', [$investment, $floor])}}">{{ $floor->name }}</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            @include('form-elements.back-route-button')
                            <div class="card-body">
                                <div class="mappa-tool">
                                    <div class="mappa-workspace">
                                        <div id="overflow" style="overflow:auto;width:100%;">
                                            <canvas class="mappa-canvas"></canvas>
                                        </div>
                                        <div class="mappa-toolbars">
                                            <ul class="mappa-drawers list-unstyled mb-0">
                                                <li><input type="radio" name="tool" value="polygon" id="new" class="addPoint input_hidden"/><label for="new" data-toggle="tooltip" data-placement="top" class="actionBtn tip addPoint" title="Służy do dodawanie nowego elementu"><i class="fe-edit-2"></i> Dodaj punkt</label></li>
                                            </ul>
                                            <ul class="mappa-points list-unstyled mb-0">
                                                <li><input checked="checked" type="radio" name="tool" id="move" value="arrow" class="movePoint input_hidden"/><label for="move" class="actionBtn tip movePoint" data-toggle="tooltip" data-placement="top" title="Służy do przesuwania punktów"><i class="fe-move"></i> Przesuń / Zaznacz</label></li>
                                                <li><input type="radio" name="tool" value="delete" id="delete" class="deletePoint input_hidden"/><label for="delete" class="actionBtn tip deletePoint" data-toggle="tooltip" data-placement="top" title="Służy do usuwana punków"><i class="fe-trash-2"></i> Usuń punkt</label></li>
                                            </ul>
                                            <ul class="mappa-list list-unstyled mb-0"></ul>
                                            <ul class="mappa-points list-unstyled mb-0">
                                                <li><a href="#" id="toggleparam" class="actionBtn tip toggleParam" data-toggle="tooltip" data-placement="top" title="Służy do pokazywania/ukrywania parametrów"><i class="fe-repeat"></i> Pokaż / ukryj parametry</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="toggleRow">
                                            @include('form-elements.mappa', ['label' => 'Współrzędne punktów', 'name' => 'cords', 'value' => $entry->cords, 'rows' => 10, 'class' => 'mappa-html'])
                                            @include('form-elements.mappa', ['label' => 'Współrzędne punktów HTML', 'name' => 'html', 'value' => $entry->html, 'rows' => 10, 'class' => 'mappa-area'])
                                        </div>
                                        @include('form-elements.html-select', ['label' => 'Widoczne', 'name' => 'active', 'selected' => $entry->active, 'select' => [
                                            '1' => 'Tak',
                                            '0' => 'Nie'
                                            ]
                                        ])
                                        @include('form-elements.html-select', ['label' => 'Promocja', 'name' => 'specialoffer', 'selected' => $entry->specialoffer, 'select' => [
                                            '0' => 'Nie',
                                            '1' => 'Tak'
                                            ]
                                        ])
                                        @include('form-elements.html-select', ['label' => 'Bezpieczny Kredyt 2%', 'name' => 'safe_loan', 'selected' => $entry->safe_loan, 'select' => [
                                            '0' => 'Nie',
                                            '1' => 'Tak'
                                            ]
                                        ])

                                        @if(Route::is('admin.developro.investment.properties.edit'))
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <h2>Przynależne powierzchnie</h2>
                                                    @if($isRelated)
                                                        <div class="alert alert-danger">Ta powierzchnia jest powiązana z inną.</div>
                                                    @endif
                                                    <table class="table">
                                                        <tbody id="added">
                                                        @foreach($related as $r)
                                                            <tr>
                                                                <td class="pe-0 text-center">
                                                                    <input type="checkbox" class="checkbox" name="property[]" id="{{ $r->id }}" value="{{ $r->id }}" style="display: none;">
                                                                    <span data-property="{{ $r->id }}" class="remove-related"><i class="las la-trash-alt"></i></span>
                                                                </td>
                                                                <td><a href="#" target="_blank"><b>{{ $r->name }}</b></a></td>
                                                                <td class="text-center"><b>{{ $r->getLocation() }}</b></td>
                                                                <td class="text-center">Pow.: <b>{{ $r->area }}</b></td>
                                                                <td class="text-center">
                                                                    @if($r->price_brutto)
                                                                        Cena: <b>@money($r->price_brutto)</b>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <span class="badge room-list-status-{{ $r->status }}">{{ roomStatus($r->status) }}</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <form id="related">
                                                        <div class="input-group mb-3">
                                                            <select class="form-select select-related selecpicker-noborder p-0" name="" id="related_property_id" aria-describedby="button-addon" data-live-search="true" data-size="5">
                                                                <option value="">Wybierz</option>
                                                                @foreach($others as $id => $name)
                                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <button class="btn btn-outline-secondary" type="button" id="button-addon">Dodaj</button>
                                                        </div>
                                                    </form>
                                                    <div id="liveAlertPlaceholder"></div>
                                                </div>
                                            </div>
                                        @endif

                                        @include('form-elements.html-select', ['label' => 'Rodzaj powierzchni', 'name' => 'type', 'selected' => $entry->type, 'select' => [
                                            '1' => 'Mieszkanie / Apartament'
                                            ]
                                        ])
                                        @include('form-elements.html-select', ['label' => 'Typ powierzchni', 'name' => 'apartment_type', 'selected' => $entry->apartment_type, 'select' => [
                                            '1' => 'M1',
                                            '2' => 'M2',
                                            '3' => 'M3',
                                            '4' => 'M4'
                                            ]
                                        ])
                                        @include('form-elements.html-select', [
                                            'label' => 'Status',
                                            'name' => 'status',
                                            'selected' => $entry->status,
                                            'select' => [
                                                '1' => 'Na sprzedaż',
                                                '2' => 'Rezerwacja',
                                                '3' => 'Sprzedane',
                                                '4' => 'Wynajęte'
                                        ]])
                                        @include('form-elements.html-select', [
                                            'label' => 'Lokal usługowy',
                                            'name' => 'comercial_area',
                                            'selected' => $entry->comercial_area,
                                            'select' => [
                                                '0' => 'Nie',
                                                '1' => 'Tak'
                                        ]])
                                        @include('form-elements.input-text', ['label' => 'Nazwa', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Nazwa na liście', 'sublabel'=> 'Mieszkanie, Apartament itp', 'name' => 'name_list', 'value' => $entry->name_list, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Numer', 'name' => 'number', 'value' => $entry->number, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Kolejność na liście', 'sublabel'=> 'Tylko liczby', 'name' => 'number_order', 'value' => $entry->number_order, 'required' => 1])

                                        @include('form-elements.html-select', ['label' => 'Pokoje', 'name' => 'rooms', 'selected' => $entry->rooms, 'select' => [
                                            '1' => '1',
                                            '2' => '2',
                                            '3' => '3',
                                            '4' => '4',
                                            '5' => '5',
                                            '6' => '6'
                                            ]
                                        ])
                                        @include('form-elements.html-select-multiple', [
                                            'label' => 'Wystawa okna',
                                            'name' => 'window',
                                            'selected' => multiselect($entry->window),
                                            'select' => [
                                                '0' => 'Brak informacji',
                                                '1' => 'Północ',
                                                '2' => 'Południe',
                                                '3' => 'Wschód',
                                                '4' => 'Zachód',
                                                '5' => 'Północny wschód',
                                                '6' => 'Północny zachód',
                                                '7' => 'Południowy wschód',
                                                '8' => 'Południowy zachód',
                                                '9' => 'Wschód, Północ',
                                                '10' => 'Wschód, Południe',
                                                '11' => 'Zachód, Północ',
                                                '12' => 'Zachód, Południe'
                                        ]])

                                        @include('form-elements.html-input-text-count', ['label' => 'Oferta specjalna', 'sublabel'=> 'Dodatkowa treść', 'name' => 'specialoffer_text', 'value' => $entry->specialoffer_text, 'maxlength' => 180])

                                        @include('form-elements.html-input-text-count', ['label' => 'Opis w dymku', 'sublabel'=> 'Tylko dla garaży', 'name' => 'garage_text', 'value' => $entry->garage_text, 'maxlength' => 180])

                                        @include('form-elements.input-text', ['label' => 'Powierzchnia', 'name' => 'area', 'value' => $entry->area, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Cena', 'sublabel'=> 'Tylko liczby', 'name' => 'price', 'value' => $entry->price])

                                <div class="row form-group">
                                    <div class="col-3 col-form-label control-label">&nbsp;</div>
                                    <div class="col-4">
                                        <button id="add-price-component"
                                                class="btn btn-primary mt-2"
                                                type="button"
                                                data-price-components='@json($priceComponents)'>
                                            Dodaj dodatkowy składnik ceny
                                        </button>
                                    </div>
                                    <div id="price-components">
                                        @foreach(($entry->priceComponents ?? []) as $index => $component)
                                            <div class="row price-component mb-3" data-price-component-id="{{ $component->id }}">
                                                <div class="col-4">
                                                    <label class="control-label">Typ składnika ceny mieszkania:</label>
                                                    <select class="form-select" name="price-component-type[]">
                                                        @foreach($priceComponents as $pc)
                                                            <option value="{{ $pc->id }}" {{ $pc->id == $component->id ? 'selected' : '' }}>
                                                                {{ $pc->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="control-label">Rodzaj składnika ceny:</label>
                                                    <select class="form-select" name="price-component-category[]">
                                                        <option value="1" {{ $component->pivot->category == 1 ? 'selected' : '' }}>Obowiązkowy</option>
                                                        <option value="2" {{ $component->pivot->category == 2 ? 'selected' : '' }}>Opcjonalny</option>
                                                        <option value="3" {{ $component->pivot->category == 3 ? 'selected' : '' }}>Zmienny</option>
                                                    </select>
                                                </div>
                                                <div class="col-2">
                                                    <label class="control-label">Cena za m2 w PLN:</label>
                                                    <input class="form-control" name="price-component-m2-value[]" type="text" value="{{ $component->pivot->value_m2 }}">
                                                </div>
                                                <div class="col-2">
                                                    <label class="control-label">Cena całkowita w PLN:</label>
                                                    <input class="form-control" name="price-component-value[]" type="text" value="{{ $component->pivot->value }}">
                                                </div>
                                                <div class="col-1 text-end">
                                                    <label class="control-label d-block">&nbsp;</label>
                                                    <button class="btn action-button w-100" type="button"><i class="fe-trash-2"></i></button>
                                                </div>
                                                @error('price-component-m2-value.' . $index)
                                                <div class="col-12">
                                                    <div class="text-danger">{{ $message }}</div>
                                                </div>
                                                @enderror
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                        @include('form-elements.input-text', ['label' => 'Ogródek', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'garden_area', 'value' => $entry->garden_area])
                                        @include('form-elements.input-text', ['label' => 'Balkon', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'balcony_area', 'value' => $entry->balcony_area])
                                        @include('form-elements.input-text', ['label' => 'Balkon 2', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'balcony_area_2', 'value' => $entry->balcony_area_2])
                                        @include('form-elements.input-text', ['label' => 'Taras', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'terrace_area', 'value' => $entry->terrace_area])
                                        @include('form-elements.input-text', ['label' => 'Loggia', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'loggia_area', 'value' => $entry->loggia_area])

                                        @include('form-elements.html-input-text-count', ['label' => 'Nagłówek strony', 'sublabel'=> 'Meta tag - title', 'name' => 'meta_title', 'value' => $entry->meta_title, 'maxlength' => 60])
                                        @include('form-elements.html-input-text-count', ['label' => 'Opis strony', 'sublabel'=> 'Meta tag - description', 'name' => 'meta_description', 'value' => $entry->meta_description, 'maxlength' => 158])

                                        @include('form-elements.textarea', ['label' => 'Spacer 3D', 'name' => 'view_3d', 'value' => $entry->view_3d, 'rows' => 10])
                                        @include('form-elements.textarea', ['label' => 'Widok 360', 'name' => 'view_360', 'value' => $entry->view_360, 'rows' => 10])

                                        @include('form-elements.html-input-file', [
                                            'label' => 'Plan mieszkania',
                                            'sublabel' => '(wymiary: '.config('images.property_plan.width').'px / '.config('images.property_plan.height').'px)',
                                            'name' => 'file',
                                            'file' => $entry->file,
                                            'file_preview' => config('images.property.preview_file_path')
                                        ])
                                        @include('form-elements.html-input-file-pdf', [
                                            'label' => 'Plan .pdf',
                                            'sublabel' =>
                                            'Plan do pobrania',
                                            'name' => 'file_pdf',
                                            'file' => $entry->file_pdf,
                                            'file_preview' => config('images.property.preview_pdf_path')
                                        ])
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                    </div>
                </form>
                @endsection
@push('scripts')
<script src="{{ asset('/js/plan/underscore.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/plan/mappa-backbone.js') }}" charset="utf-8"></script>
<script type="text/javascript">
    const map = {
        "name":"imagemap",
        "areas":[{!! $entry->cords !!}]
    };
    $(document).ready(function() {
        const mapview = new MapView({el: '.mappa'}, map);
        @if($floor->file)
        mapview.loadImage('/investment/floor/{{$floor->file}}');
        @endif
    });
</script>

@if(Route::is('admin.developro.investment.properties.edit'))
<!-- Przynalezne -->
<link href="{{ asset('/js/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
<script src="{{ asset('/js/bootstrap-select/bootstrap-select.min.js') }}" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select-related').selectpicker();
    });
    attachSpanFunctionality();

    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type, duration = 7000) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper);

        setTimeout(() => {
            wrapper.remove();
        }, duration);
    }

    $('#button-addon').click(function(e) {
        e.preventDefault();

        const relatedPropertyId = $('#related_property_id').val();

        if (!relatedPropertyId) {
            alert('Please select a property to add.');
            return;
        }

        const data = {
            property: {{ $entry->id  }},
            related_property_id: relatedPropertyId,
            _token: '{{ csrf_token() }}'  // Include CSRF token if needed
        };

        $.ajax({
            url: '{{ route('admin.developro.investment.related.store', ['investment' => $investment, 'floor' => $floor, 'property' => $entry->id]) }}',
            method: 'POST',
            data: data,
            success: function(response) {
                $('#added').append(response);
                attachSpanFunctionality();

                const lastTypeInputValue = $('#added input[name="related_type"]:last').val();

                if (lastTypeInputValue === '1') {
                    appendAlert('Mieszkanie zostało przypisane poprawnie', 'success');
                } else if (lastTypeInputValue === '2') {
                    appendAlert('Komórka lokatorska została przypisana poprawnie', 'success');
                } else if (lastTypeInputValue === '3') {
                    appendAlert('Miejsce parkingowe zostało przypisane poprawnie', 'success');
                } else {
                    appendAlert('Wybrana powierzchnia została przypisana poprawnie', 'success');
                }
            },
            error: function(xhr) {
                const errorMessage = xhr.responseJSON.error;

                appendAlert(errorMessage, 'danger');
            }
        });
    });

    function attachSpanFunctionality() {
        const spans = added.querySelectorAll(".remove-related");
        spans.forEach(function(span) {
            span.addEventListener("click", function(d) {
                const closestTr = this.closest("tr");
                var related = this.getAttribute('data-property');

                const button = $(d.currentTarget);
                button.css('pointer-events', 'none');

                $.ajax({
                    url: '{{ route('admin.developro.investment.related.remove', ['investment' => $investment, 'floor' => $floor, 'property' => $entry->id]) }}', // Replace with the appropriate endpoint
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        related_id: related
                    },
                    success: function() {
                        appendAlert('Lokal został poprawnie usunięty', 'success');
                        if (closestTr) {
                            closestTr.remove(); // Remove the row after successful deletion
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Wystąpił błąd podczas usuwania.');
                    },
                    complete(){
                        button.css('pointer-events', 'auto');
                    }
                });
            });
        });
    }
</script>
@endif

<script>const addButton=document.getElementById("add-price-component"),priceComponents=JSON.parse(addButton.dataset.priceComponents);addButton.addEventListener("click",()=>{const e=Math.floor(1e3*Math.random()),t=priceComponents.map(e=>`<option value="${e.id}">${e.name}</option>`).join("");document.getElementById("price-components").insertAdjacentHTML("beforeend",`<div class="row price-component mb-3" data-price-component-id="${e}"><div class="col-4"><label class="control-label">Typ składnika ceny mieszkania:</label><select class="form-select" name="price-component-type[]">${t}</select></div><div class="col-3"><label class="control-label">Rodzaj składnika ceny:</label><select class="form-select" name="price-component-category[]"><option value="1">Obowiązkowy</option><option value="2">Opcjonalny</option><option value="3">Zmienny</option></select></div><div class="col-2"><label class="control-label">Cena za m² w PLN:</label><input class="form-control" name="price-component-m2-value[]" type="text" autocomplete="off"></div><div class="col-2"><label class="control-label">Cena całkowita w PLN:</label><input class="form-control" name="price-component-value[]" type="text" autocomplete="off"></div><div class="col-1 text-end"><label class="control-label d-block">&nbsp;</label><button class="btn action-button w-100" type="button"><i class="fe-trash-2"></i></button></div></div>`)}),document.addEventListener("click",function(e){if(e.target.closest(".action-button")){const t=e.target.closest(".price-component");t&&t.remove()}}),document.addEventListener("input",function(e){const t=document.getElementById("form_area"),o=parseFloat(t.value.replace(",","."));if(!(isNaN(o)||o<=0)){if(e.target.matches('input[name="price-component-value[]"]')){const t=n(e.target.value),a=e.target.closest(".row.price-component");if(!a)return;const c=a.querySelector('input[name="price-component-m2-value[]"]');if(!c)return;const l=t/o;c.value=l>0?l.toFixed(2):""}if(e.target.matches('input[name="price-component-m2-value[]"]')){const t=n(e.target.value),a=e.target.closest(".row.price-component");if(!a)return;const c=a.querySelector('input[name="price-component-value[]"]');if(!c)return;const l=t*o;c.value=l>0?l.toFixed(2):""}}function n(e){return parseFloat(e.replace(",","."))||0}});</script>
@endpush
