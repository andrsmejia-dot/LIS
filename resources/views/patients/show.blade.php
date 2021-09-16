@extends('layouts.layout')

@section('content')
    <h1>RESULTADOS</h1>
    <hr>
    <h1>PERFIL LIPÍDICO</h1>
    {{-- <form action="/patients/{{$patient->id}}"> --}}
    {{-- <table class="table table-striped" id="patients">
        <thead>
            <tr>
                <th scope="col">COLESTEROL</th>
                <th scope="col">HDL</th>
                <th scope="col">LDL</th>
                <th scope="col">TRIGLICÉRIDOS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <?php echo $colesterol?> -->

                <th>{{ $patient->$colesterol }}</th>
                <th>{{ $patient->$hdl }}</th>
                <th>{{ $patient->$ldl }}</th>
                <th>{{ $patient->$trigliceridos }}</th>
            </tr>
        <a href="/patients" class="btn btn-info">Regresar</a>
        </tbody>
        </table>
    </form> --}}
    ////////////////////////
    @section('content')
    <h1>Lista de pacientes en el LIS con Blade</h1>
    <a class="btn btn-primary" href="patients/create">CREAR PACIENTE</a>
    <h1>LISTADO DE PACIENTES</h1>
    @csrf
    <table class="table table-striped table-hover" id="patients">
        <thead>
            <tr>
                <th scope="col">COLESTEROL</th>
                <th scope="col">HDL</th>
                <th scope="col">LDL</th>
                <th scope="col">TRIGLICÉRIDOS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <th>{{ $patient->$colesterol }}</th>
                <th>{{ $patient->$hdl }}</th>
                <th>{{ $patient->$ldl }}</th>
                <th>{{ $patient->$trigliceridos }}</th>
                <th>
                    <form action="{{route('patients.destroy' , $patient->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/patients/{{$patient->id}}/show" class="btn btn-info">Resultados</a>
                        <a href="/patients/{{$patient->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection

@endsection
