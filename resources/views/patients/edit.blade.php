@extends('layouts.layout')

@section('content')
    <h1>Editar información del paciente.</h1>
    <form action="/patients/{{$patient->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento" value="{{$patient->documento}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$patient->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$patient->apellido}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <br>
            <select id="sexo" name="sexo">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
                </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">EPS</label>
            <br>
            <select id="eps" name="eps">
                <option value="Otro">Otro</option>
                <option value="Sura">Sura</option>
                <option value="Coomeva">Coomeva</option>
                <option value="Colsanitas">Colsanitas</option>
                <option value="IPS udeA">IPS udeA</option>
                <option value="Savia Salud">Savia Salud</option>
                </select>
          </div>
          <div class="mb-3">
          <label for="" class="form-label">Colesterol</label>
          <input type="text" class="form-control" id="colesterol" name="colesterol" value="{{$patient->colesterol}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">hdl</label>
          <input type="text" class="form-control" id="hdl" name="hdl" value="{{$patient->hdl}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">ldl</label>
          <input type="text" class="form-control" id="ldl" name="ldl" value="{{$patient->ldl}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">trigliceridos</label>
          <input type="text" class="form-control" id="trigliceridos" name="trigliceridos" value="{{$patient->trigliceridos}}">
        </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection

