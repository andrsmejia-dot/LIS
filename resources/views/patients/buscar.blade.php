@extends('layouts.layout')

@section('content')
    <h1>Buscar pacientes en el LIS</h1>
    <form action="PatientBuscar" method="GET">
        @csrf
    <div class="mb-3">
        <b><label for="" class="form-label">Documento</label></b>
        <input type="text" class="form-control" id="id" name="id">
      </div>
    <a class="btn btn-primary" href="patients/" role ="button">Buscar</a>
    <br>
@endsection
