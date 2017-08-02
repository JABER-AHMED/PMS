<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
    	return view('admin.doctor.index');
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(

    		'name' => 'required',
    		'designation' => 'required',
    		'specilities' => 'required',
    		'address' => 'required',
    		'email' => 'required|email',
    		'number' => 'required|max:20'

    	));

    	$doctor = new Doctor;

    	$doctor->name = $request->name;
    	$doctor->designation = $request->designation;
    	$doctor->specilities = $request->specilities;
    	$doctor->address = $request->address;
    	$doctor->email = $request->email;
    	$doctor->number = $request->number;

    	$doctor->save();

    	return redirect()->route('store')->with('success', 'Informatino saved.');
    }

    // public function show($id)
    // {
    // 	$doctor = Doctor::find($id);
    // 	return view('doctors.index')->withDoctor($doctor);
    // }
}
