@extends('layouts.layout')

@section('content')
    <br><br>
    <h1>Ingreso de datos</h1>
    <br><br>
    <form action="/control" method="POST"> 
    @csrf
      <div class="row">
        <div class="col">
          <h1>Nivel 1</h1>
          <label for="">Colesterol total</label>
          <input type="text" class="form-control" name="coltotal_1">
        </div>
        <div class="col">
          <h1>Nivel 2</h1>
          <label for="">Colesterol total</label>
          <input type="text" class="form-control" name="coltotal_2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="">Colesterol de alta densidad (HDL)</label>
          <input type="text" class="form-control" name="HDL_1">
        </div>
        <div class="col">
          <label for="">Colesterol de alta densidad (HDL)</label>
          <input type="text" class="form-control" name="HDL_2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="">Colesterol de baja densidad (LDL)</label>
          <input type="text" class="form-control" name="LDL_1">
        </div>
        <div class="col">
          <label for="">Colesterol de baja densidad (LDL)</label>
          <input type="text" class="form-control" name="LDL_2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="">Triglicéridos</label>
          <input type="text" class="form-control" name="trigliceridos_1">
        </div>
        <div class="col">
          <label for="">Triglicéridos</label>
          <input type="text" class="form-control" name="trigliceridos_2">
        </div>
      </div>
        
      <br><br>  
      <a href="/" class="btn btn-secondary">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <br><br> 
      <br><br>  
      <a href="/control" class="btn btn-info">Consulta de resultados</a>
    </form>
@endsection