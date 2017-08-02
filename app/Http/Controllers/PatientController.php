<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function create()
    {
    	return view('patients.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(

    		'name' => 'required',
    		'age' => 'required',
    		'sex' => 'required',
    		'date' => 'required'
    	));

    	$patient = new Patient;

    	$patient->name = $request->name;
    	$patient->age = $request->age;
    	$patient->sex = $request->sex;
    	$patient->date = $request->date;

    	$patient->save();

    	return redirect()->route('patient.store')->with('success', 'patient info created..');
    }
}
