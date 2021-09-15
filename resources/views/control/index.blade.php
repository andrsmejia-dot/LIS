@extends('layouts.layout')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <h1>Registro control de calidad</h1>
    <div class="boton_volver">
    <!-- <a class="btn btn-primary" href="patients/create">CREAR PACIENTE</a> -->

    

    <a href="/" class="btn btn-warning" >Volver</a>

    
    <table class="table table-striped table-hover control_calidad" id="coltotal">
        <thead>
        <tr>
            <th colspan="2"rowspan="1" scope="col">Colesterol total</th>

            
            <th colspan="4" scope="colgroup" >Nivel 1</th>
            <th colspan="4" scope="colgroup">Nivel 2</th>
        </tr>
        </thead>
        <tr>
            <th  colspan="2" scope="col">Hora y fecha</th>

            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
        </tr>
        <tbody>
    
        @for ($i = 0; $i < count($valores_coltotal_1); $i++)
           <tr>

                <td colspan="2" scope="row">{{$levelones[$i]->hora}}</td>


            
                <td class={{ $valores_coltotal_1[$i] < 7.48 && $valores_coltotal_1[$i]>5.77 ? '' : 'rojo' }}>{{round($valores_coltotal_1[$i],5)}}</td>
                <td>{{round($media_coltotal_1[$i],5)}}</td>
                <td>{{round($desviacion_coltotal_1[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_coltotal_1[$i], 5)}}</td>
                <td class={{ $valores_coltotal_2[$i] < 3.07 && $valores_coltotal_2[$i]>2.15 ? '' : 'rojo' }}>{{round($valores_coltotal_2[$i],5)}}</td>
                <td>{{round($media_coltotal_2[$i],5)}}</td>
                <td>{{round($desviacion_coltotal_2[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_coltotal_2[$i],5)}}</td>

            </tr>
        @endfor
   
            

        </tbody>
    </table>
    <table class="table table-striped table-hover control_calidad" id="coltotal">
        <thead>
        <tr>
            <th colspan="2"rowspan="1" scope="col">HDL</th>

            
            <th colspan="4" scope="colgroup" >Nivel 1</th>
            <th colspan="4" scope="colgroup">Nivel 2</th>
        </tr>
        </thead>
        <tr>
            <th  colspan="2" scope="col">Hora y fecha</th>

            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
        </tr>
        <tbody>
    
        @for ($i = 0; $i < count($valores_hdl_1); $i++)
           <tr>

                <td colspan="2" scope="row">{{$levelones[$i]->hora}}</td>


            
                <td class={{ $valores_hdl_1[$i] < 1.86 && $valores_hdl_1[$i]>1.40 ? '' : 'rojo' }}>{{round($valores_hdl_1[$i],5)}}</td>
                <td>{{round($media_hdl_1[$i],5)}}</td>
                <td>{{round($desviacion_hdl_1[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_hdl_1[$i], 5)}}</td>
                <td class={{ $valores_hdl_2[$i] < 0.904 && $valores_hdl_2[$i]>0.544 ? '' : 'rojo' }}>{{round($valores_hdl_2[$i],5)}}</td>
                <td>{{round($media_hdl_2[$i],5)}}</td>
                <td>{{round($desviacion_hdl_2[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_hdl_2[$i],5)}}</td>

            </tr>
        @endfor
   
            

        </tbody>
    </table>
    <table class="table table-striped table-hover control_calidad" id="coltotal">
        <thead>
        <tr>
            <th colspan="2"rowspan="1" scope="col">LDL</th>

            
            <th colspan="4" scope="colgroup" >Nivel 1</th>
            <th colspan="4" scope="colgroup">Nivel 2</th>
        </tr>
        </thead>
        <tr>
            <th  colspan="2" scope="col">Hora y fecha</th>

            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
        </tr>
        <tbody>
    
        @for ($i = 0; $i < count($valores_ldl_1); $i++)
           <tr>

                <td colspan="2" scope="row">{{$levelones[$i]->hora}}</td>


            
                <td class={{ $valores_ldl_1[$i] < 4.15 && $valores_ldl_1[$i]>3.44 ? '' : 'rojo' }}>{{round($valores_ldl_1[$i],5)}}</td>
                <td>{{round($media_ldl_1[$i],5)}}</td>
                <td>{{round($desviacion_ldl_1[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_ldl_1[$i], 5)}}</td>
                <td class={{ $valores_ldl_2[$i] < 2.02 && $valores_ldl_2[$i]>1.32 ? '' : 'rojo' }}>{{round($valores_ldl_2[$i],5)}}</td>
                <td>{{round($media_ldl_2[$i],5)}}</td>
                <td>{{round($desviacion_ldl_2[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_ldl_2[$i],5)}}</td>

            </tr>
        @endfor
   
            

        </tbody>
    </table>
    <table class="table table-striped table-hover control_calidad" id="coltotal">
        <thead>
        <tr>
            <th colspan="2"rowspan="1" scope="col">Triglicéridos</th>

            
            <th colspan="4" scope="colgroup" >Nivel 1</th>
            <th colspan="4" scope="colgroup">Nivel 2</th>
        </tr>
        </thead>
        <tr>
            <th  colspan="2" scope="col">Hora y fecha</th>

            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
            <th scope="col">Valor</th>
            <th scope="col">Media</th>
            <th scope="col">Desviacion estándar</th>
            <th scope="col">Coeficiente de variación</th>
        </tr>
        <tbody>
    
        @for ($i = 0; $i < count($valores_trigliceridos_1); $i++)
           <tr>

                <td colspan="2" scope="row">{{$levelones[$i]->hora}}</td>


            
                <td class={{ $valores_trigliceridos_1[$i] < 2.33 && $valores_trigliceridos_1[$i]>1.98 ? '' : 'rojo' }}>{{round($valores_trigliceridos_1[$i],5)}}</td>
                <td>{{round($media_trigliceridos_1[$i],5)}}</td>
                <td>{{round($desviacion_trigliceridos_1[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_trigliceridos_1[$i], 5)}}</td>
                <td class={{ $valores_trigliceridos_2[$i] < 1.04 && $valores_trigliceridos_2[$i]>0.815 ? '' : 'rojo' }}>{{round($valores_trigliceridos_2[$i],5)}}</td>
                <td>{{round($media_trigliceridos_2[$i],5)}}</td>
                <td>{{round($desviacion_trigliceridos_2[$i],5)}}</td>
                <td>{{round($coeficiente_variacion_trigliceridos_2[$i],5)}}</td>

            </tr>
        @endfor
   
            

        </tbody>
    </table>
    
@endsection

@section('js')
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#coltotal').DataTable({
        "lengthMenu" : [[5,10,50,-1] , [5,10,50,"All"]],

        "language": {
        processing:     "Procesando...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ pacientes",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ pacientes",
        infoEmpty:      "Mostrando registros del 0 a 0 de un total de 0 registros",
        infoFiltered:   "(filtrado de un total de _MAX_ registros)",
        infoPostFix:    "",
        loadingRecords: "Cargando...",
        zeroRecords:    "No se muestran resultados",
        emptyTable:     "No hay datos disponibles en la tabla.",
        paginate: {
            first:      "Primera",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Última"
        },
        aria: {
            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sortDescending: ": Activar para ordenar la columna de manera descendente"
        }
    }

    });
} );
        </script>
@endsection