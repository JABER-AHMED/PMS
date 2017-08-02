<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Patient;

class AssistantController extends Controller
{
    public function assistant()
    {
    	$doctors = Doctor::all();
    	$patients = Patient::all();
    	return view('assistants.index')->withDoctors($doctors)->withPatients($patients);
    }
}
