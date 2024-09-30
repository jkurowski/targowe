@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card-head container-fluid">
            <div class="row">
                <div class="col-6 pl-0">
                    <h4 class="page-title row"><i class="fe-database"></i>Import</h4>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center form-group-submit"></div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="table-overflow">
                <table id="sortable" class="table mb-0">
                    <thead>
                    <tr>
                        <th>Numer</th>
                        <th>Nazwa mieszkania</th>
                        <th>Nr. piętra</th>
                        <th>Widoczne</th>
                        <th>Typ powierzchni</th>
                        <th>Pokoje</th>
                        <th>Powierzchnia</th>
                        <th>Cena</th>
                        <th>Ogródek</th>
                        <th>Balkon</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($importedData as $data)
                        <tr>
                            <td>{{ $data['mieszkanie'] }}</td>
                            <td>{{ $data['nazwa'] }}</td>
                            <td>{{ $data['pietro'] }}</td>
                            <td>{{ $data['widoczne'] }}</td>
                            <td>{{ $data['typ_powierchni'] }}</td>
                            <td>{{ $data['pokoje'] }}</td>
                            <td>{{ $data['powierzchnia'] }}</td>
                            <td>{{ $data['cena'] }}</td>
                            <td>{{ $data['ogrodek'] }}</td>
                            <td>{{ $data['balkon'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection