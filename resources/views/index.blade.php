@extends('layout')

@section('title', 'Home')

@section('content')
<article>
    <div class="judul">
        <h3>Tabel Tanki Minyak</h3>
    </div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Status Tanki</th>
                <th>Volume Minyak pada Tanki</th>
                <th>Temperatur</th>
                <th>Kapasitas Maksimum Tanki</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tanki as $tanki_detail)
            <tr>
                <td>{{$tanki_detail -> ID_TANKI}}</td>
                <td>{{$tanki_detail ->STATUS_TANKI}}</td>
                <td>{{$tanki_detail ->VOLUME}}</td>
                <td>{{$tanki_detail ->TEMPERATUR}}</td>
                <td>{{$tanki_detail ->KAPASITAS}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</article>


@endsection