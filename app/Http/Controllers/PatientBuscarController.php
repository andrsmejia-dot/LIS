<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientBuscarController extends Controller
{
    public function show($id)
    {
        // $patient = Patient::find($id);

        return view('PatientBuscar.show')->with('patient',$patient);
    }

    public function index()
    {
        $patients = Patient::all();
        return view('PatientBuscar.index')->with('patients',$patients);
    }
    public function create()
    {
        return view('PatientBuscar.create');
    }
}
