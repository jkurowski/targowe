@extends('admin.layout')
@section('content')
@if(Route::is('admin.developro.investment.edit'))
    <form method="POST" action="{{route('admin.developro.investment.update', $entry->id)}}" enctype="multipart/form-data">
        @method('PUT')
@else
    <form method="POST" action="{{route('admin.developro.investment.store')}}" enctype="multipart/form-data">
@endif
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-head container">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <h4 class="page-title row"><i class="fe-book-open"></i><a href="{{route('admin.developro.investment.index')}}" class="p-0">Inwestycje</a><span class="d-inline-flex ml-2 mr-2">/</span>{{ $cardTitle }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                @include('form-elements.back-route-button')
                <div class="card-body control-col12">
                    <div class="row w-100 form-group">
                        <div class="col-12">
                            @if(!Request::get('lang'))
                            @include('form-elements.crm.html-select', [
                                'label' => 'Typ inwestycji',
                                'name' => 'type',
                                'selected' => $entry->type,
                                'select' => [
                                    '2' => 'Inwestycja budynkowa'
                            ]])
                            @include('form-elements.crm.html-select', [
                                'label' => 'Status inwestycji',
                                'name' => 'status',
                                'selected' => $entry->status,
                                'select' => [
                                    '1' => 'Inwestycja w sprzedaży'
                            ]])
                            @include('form-elements.crm.html-select', [
                                'label' => 'Pokaż ceny',
                                'name' => 'show_prices',
                                'selected' => $entry->show_prices,
                                'select' => [
                                    '1' => 'Tak',
                                    '0' => 'Nie'
                            ]])
                            @endif
                            @include('form-elements.crm.html-input-text', ['label' => 'Nazwa inwestycji', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                            @include('form-elements.crm.html-input-text-count', ['label' => 'Nagłówek strony', 'sublabel'=> 'Meta tag - title', 'name' => 'meta_title', 'value' => $entry->meta_title, 'maxlength' => 60])
                            @include('form-elements.crm.html-input-text-count', ['label' => 'Opis strony', 'sublabel'=> 'Meta tag - description', 'name' => 'meta_description', 'value' => $entry->meta_description, 'maxlength' => 158])
                        </div>
                    </div>

                    <div class="row w-100 mb-4 form-group">
                        <div class="col-12">
                            <h2>Szczegółowe informacje o inwestycji</h2>
                        </div>
                        <div class="col-4">
                            @include('form-elements.crm.html-select', [
                                'label' => 'Województwo lokalizacji',
                                'name' => 'inv_province',
                                'selected' => $entry->inv_province,
                                'select' => $provinces,
                            ])
                        </div>
                        <div class="col-4">
                            @include('form-elements.crm.html-input-text', [
                                'label' => 'Powiat lokalizacji',
                                'name' => 'inv_county',
                                'value' => $entry->inv_county,
                            ])
                        </div>
                        <div class="col-4">
                            @include('form-elements.crm.html-input-text', [
                                'label' => 'Gmina lokalizacji',
                                'name' => 'inv_municipality',
                                'value' => $entry->inv_municipality,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.crm.html-input-text', [
                                'label' => 'Miejscowość lokalizacji',
                                'name' => 'inv_city',
                                'value' => $entry->inv_city,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.crm.html-input-text', [
                                'label' => 'Ulica lokalizacji',
                                'name' => 'inv_street',
                                'value' => $entry->inv_street,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.crm.html-input-text', [
                                'label' => 'Nr nieruchomości lokalizacji',
                                'name' => 'inv_property_number',
                                'value' => $entry->inv_property_number,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.crm.html-input-text', [
                                'label' => 'Kod pocztowy lokalizacji',
                                'name' => 'inv_postal_code',
                                'value' => $entry->inv_postal_code,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.crm.html-select', [
                                'label' => 'Spółka celowa',
                                'name' => 'company_id',
                                'selected' => $entry->company_id,
                                'select' => $companies,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.crm.html-select', [
                                'label' => 'Punkt sprzedaży',
                                'name' => 'sale_point_id',
                                'selected' => $entry->sale_point_id,
                                'select' => $salePoints,
                            ])
                        </div>
                    </div>

                    @include('form-elements.html-input-file-pdf', [
                        'label' => 'Prospekt informacyjny .pdf',
                        'sublabel' =>
                        '',
                        'name' => 'file_brochure',
                        'file' => $entry->file_brochure,
                        'file_preview' => config('images.investment.brochure_file_path'),
                        'class' => 'col-9'
                    ])

                </div>
            </div>
        </div>
        <input type="hidden" name="lang" value="{{$current_locale}}">
        @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
    </form>
    @include('form-elements.tintmce')
@endsection
