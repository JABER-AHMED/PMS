<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class MedicineController extends Controller
{
    public function create()
    {
    	$medicines = Medicine::all();
    	return view('admin.medicine.create')->withMedicines($medicines);
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(

    		'medicine' => 'required'

    	));

    	$medicine = new Medicine;

    	$medicine->medicine = $request->medicine;

    	$medicine->save();
    	

    	return redirect()->route('medicine.create')->with('success', 'Add Medicine Successfully');
    }

}
