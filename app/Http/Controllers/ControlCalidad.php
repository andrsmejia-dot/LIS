<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LevelOne;
use App\Models\LevelTwo;
use DateTime;
use DateTimeZone;
use App\Models\Patient;

class ControlCalidad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $levelones = LevelOne::all();
        $leveltwos = LevelTwo::all();

        $valores_ldl_1=[];
        $media_ldl_1=[];
        $desviacion_ldl_1=[];
        $coeficiente_variacion_ldl_1=[];
        $valores_ldl_2=[];
        $media_ldl_2=[];
        $desviacion_ldl_2=[];
        $coeficiente_variacion_ldl_2=[];

        $valores_hdl_1=[];
        $media_hdl_1=[];
        $desviacion_hdl_1=[];
        $coeficiente_variacion_hdl_1=[];
        $valores_hdl_2=[];
        $media_hdl_2=[];
        $desviacion_hdl_2=[];
        $coeficiente_variacion_hdl_2=[];

        $valores_coltotal_1=[];
        $media_coltotal_1=[];
        $desviacion_coltotal_1=[];
        $coeficiente_variacion_coltotal_1=[];
        $valores_coltotal_2=[];
        $media_coltotal_2=[];
        $desviacion_coltotal_2=[];
        $coeficiente_variacion_coltotal_2=[];

        $valores_trigliceridos_1=[];
        $media_trigliceridos_1=[];
        $desviacion_trigliceridos_1=[];
        $coeficiente_variacion_trigliceridos_1=[];
        $valores_trigliceridos_2=[];
        $media_trigliceridos_2=[];
        $desviacion_trigliceridos_2=[];
        $coeficiente_variacion_trigliceridos_2=[];

        for ($i = 0; $i < $levelones->count(); $i++){

            array_push($valores_ldl_1,(float)$levelones[$i]->LDL);
            array_push($valores_ldl_2,(float)$leveltwos[$i]->LDL);

            array_push($valores_hdl_1,(float)$levelones[$i]->HDL);
            array_push($valores_hdl_2,(float)$leveltwos[$i]->HDL);

            array_push($valores_coltotal_1,(float)$levelones[$i]->coltotal);
            array_push($valores_coltotal_2,(float)$leveltwos[$i]->coltotal);

            array_push($valores_trigliceridos_1,(float)$levelones[$i]->trigliceridos);
            array_push($valores_trigliceridos_2,(float)$leveltwos[$i]->trigliceridos);
            //$a = array_filter($valores_ldl_1);
            //$average = array_sum($a)/count($a);
            array_push( $media_ldl_1,array_sum(array_filter($valores_ldl_1))/count(array_filter($valores_ldl_1)));
            array_push( $media_ldl_2,array_sum(array_filter($valores_ldl_2))/count(array_filter($valores_ldl_2)));

            array_push( $media_hdl_1,array_sum(array_filter($valores_hdl_1))/count(array_filter($valores_hdl_1)));
            array_push( $media_hdl_2,array_sum(array_filter($valores_hdl_2))/count(array_filter($valores_hdl_2)));

            array_push( $media_coltotal_1,array_sum(array_filter($valores_coltotal_1))/count(array_filter($valores_coltotal_1)));
            array_push( $media_coltotal_2,array_sum(array_filter($valores_coltotal_2))/count(array_filter($valores_coltotal_2)));

            array_push( $media_trigliceridos_1,array_sum(array_filter($valores_trigliceridos_1))/count(array_filter($valores_trigliceridos_1)));
            array_push( $media_trigliceridos_2,array_sum(array_filter($valores_trigliceridos_2))/count(array_filter($valores_trigliceridos_2)));
            $var_ldl_1=0;
            $var_ldl_2=0;

            $var_hdl_1=0;
            $var_hdl_2=0;

            $var_coltotal_1=0;
            $var_coltotal_2=0;

            $var_trigliceridos_1=0;
            $var_trigliceridos_2=0;


            for ($j = 0; $j < count($valores_ldl_1); $j++){
                $var_ldl_1+=($valores_ldl_1[$j]-$media_ldl_1[$i])*($valores_ldl_1[$j]-$media_ldl_1[$i]);
                $var_ldl_2+=($valores_ldl_2[$j]-$media_ldl_2[$i])*($valores_ldl_2[$j]-$media_ldl_2[$i]);

                $var_hdl_1+=($valores_hdl_1[$j]-$media_hdl_1[$i])*($valores_hdl_1[$j]-$media_hdl_1[$i]);
                $var_hdl_2+=($valores_hdl_2[$j]-$media_hdl_2[$i])*($valores_hdl_2[$j]-$media_hdl_2[$i]);

                $var_coltotal_1+=($valores_coltotal_1[$j]-$media_coltotal_1[$i])*($valores_coltotal_1[$j]-$media_coltotal_1[$i]);
                $var_coltotal_2+=($valores_coltotal_2[$j]-$media_coltotal_2[$i])*($valores_coltotal_2[$j]-$media_coltotal_2[$i]);

                $var_trigliceridos_1+=($valores_trigliceridos_1[$j]-$media_trigliceridos_1[$i])*($valores_trigliceridos_1[$j]-$media_trigliceridos_1[$i]);
                $var_trigliceridos_2+=($valores_trigliceridos_2[$j]-$media_trigliceridos_2[$i])*($valores_trigliceridos_2[$j]-$media_trigliceridos_2[$i]);



            }
            array_push($desviacion_ldl_1,sqrt($var_ldl_1/count($valores_ldl_1)));
            array_push($desviacion_ldl_2,sqrt($var_ldl_2/count($valores_ldl_2)));

            array_push($desviacion_hdl_1,sqrt($var_hdl_1/count($valores_hdl_1)));
            array_push($desviacion_hdl_2,sqrt($var_hdl_2/count($valores_hdl_2)));

            array_push($desviacion_coltotal_1,sqrt($var_coltotal_1/count($valores_coltotal_1)));
            array_push($desviacion_coltotal_2,sqrt($var_coltotal_2/count($valores_coltotal_2)));

            array_push($desviacion_trigliceridos_1,sqrt($var_trigliceridos_1/count($valores_trigliceridos_1)));
            array_push($desviacion_trigliceridos_2,sqrt($var_trigliceridos_2/count($valores_trigliceridos_2)));

            array_push($coeficiente_variacion_ldl_1,$desviacion_ldl_1[$i]/$media_ldl_1[$i]);
            array_push($coeficiente_variacion_ldl_2,$desviacion_ldl_2[$i]/$media_ldl_2[$i]);

            array_push($coeficiente_variacion_hdl_1,$desviacion_hdl_1[$i]/$media_hdl_1[$i]);
            array_push($coeficiente_variacion_hdl_2,$desviacion_hdl_2[$i]/$media_hdl_2[$i]);

            array_push($coeficiente_variacion_coltotal_1,$desviacion_coltotal_1[$i]/$media_coltotal_1[$i]);
            array_push($coeficiente_variacion_coltotal_2,$desviacion_coltotal_2[$i]/$media_coltotal_2[$i]);

            array_push($coeficiente_variacion_trigliceridos_1,$desviacion_trigliceridos_1[$i]/$media_trigliceridos_1[$i]);
            array_push($coeficiente_variacion_trigliceridos_2,$desviacion_trigliceridos_2[$i]/$media_trigliceridos_2[$i]);





        }
        $data=array('levelones'=>$levelones,
            'valores_ldl_1'=>$valores_ldl_1,'media_ldl_1'=>$media_ldl_1,'desviacion_ldl_1'=>$desviacion_ldl_1,'coeficiente_variacion_ldl_1'=>$coeficiente_variacion_ldl_1,
            'valores_hdl_1'=>$valores_hdl_1,'media_hdl_1'=>$media_hdl_1,'desviacion_hdl_1'=>$desviacion_hdl_1,'coeficiente_variacion_hdl_1'=>$coeficiente_variacion_hdl_1,
            'valores_coltotal_1'=>$valores_coltotal_1,'media_coltotal_1'=>$media_coltotal_1,'desviacion_coltotal_1'=>$desviacion_coltotal_1,'coeficiente_variacion_coltotal_1'=>$coeficiente_variacion_coltotal_1,
            'valores_trigliceridos_1'=>$valores_trigliceridos_1,'media_trigliceridos_1'=>$media_trigliceridos_1,'desviacion_trigliceridos_1'=>$desviacion_trigliceridos_1,'coeficiente_variacion_trigliceridos_1'=>$coeficiente_variacion_trigliceridos_1,
            'valores_ldl_2'=>$valores_ldl_2,'media_ldl_2'=>$media_ldl_2,'desviacion_ldl_2'=>$desviacion_ldl_2,'coeficiente_variacion_ldl_2'=>$coeficiente_variacion_ldl_2,
            'valores_hdl_2'=>$valores_hdl_2,'media_hdl_2'=>$media_hdl_2,'desviacion_hdl_2'=>$desviacion_hdl_2,'coeficiente_variacion_hdl_2'=>$coeficiente_variacion_hdl_2,
            'valores_coltotal_2'=>$valores_coltotal_2,'media_coltotal_2'=>$media_coltotal_2,'desviacion_coltotal_2'=>$desviacion_coltotal_2,'coeficiente_variacion_coltotal_2'=>$coeficiente_variacion_coltotal_2,
            'valores_trigliceridos_2'=>$valores_trigliceridos_2,'media_trigliceridos_2'=>$media_trigliceridos_2,'desviacion_trigliceridos_2'=>$desviacion_trigliceridos_2,'coeficiente_variacion_trigliceridos_2'=>$coeficiente_variacion_trigliceridos_2,
                     );
        return view('control.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('control.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $levelone = new LevelOne();
        $leveltwo = new LevelTwo();


        $levelone->coltotal = $request->get('coltotal_1');
        $levelone->HDL = $request->get('HDL_1');
        $levelone->LDL = $request->get('LDL_1');
        $levelone->trigliceridos = $request->get('trigliceridos_1');
        $levelone->hora= new DateTime("now", new DateTimeZone('America/Bogota') );

        $leveltwo->coltotal = $request->get('coltotal_2');
        $leveltwo->HDL = $request->get('HDL_2');
        $leveltwo->LDL = $request->get('LDL_2');
        $leveltwo->trigliceridos = $request->get('trigliceridos_2');
        $leveltwo->hora= new DateTime("now", new DateTimeZone('America/Bogota') );

        $levelone->save();
        $leveltwo->save();
        return redirect('/control');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($document)
    {
        $patient = Patient::find($document);
        return view('control.show')->with('patients',$patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
