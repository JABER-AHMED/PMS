<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Patient;

class AdminController extends Controller
{
    public function doctor()
    {
    	$doctors = Doctor::all();
    	$patients = Patient::all();
    	return view('doctors.index')->withDoctors($doctors)->withPatients($patients);
    }

    public function index()
    {
    	return view('admin.index');
    }
}
