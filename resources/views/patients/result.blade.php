@extends('layouts.layout')

@section('content')
    <h1>RESULTADOS</h1>
    <hr>
    <h1>PERFIL LIPÍDICO</h1>
    <form action="/patients/{{$patient->id}}" method="POST">
    @csrf
    <table class="table table-striped" id="patients">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">COLESTEROL</th>
                <th scope="col">HDL</th>
                <th scope="col">LDL</th>
                <th scope="col">TRIGLICÉRIDOS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{ $patient->id }}</th>
                <th>{{ $patient->colesterol }}</th>
                <th>{{ $patient->hdl }}</th>
                <th>{{ $patient->ldl }}</th>
                <th>{{ $patient->trigliceridos }}</th>
            </tr>
        <a href="/patients" class="btn btn-info">Regresar</a>
        </tbody>
        </table>
    </form>
@endsection

