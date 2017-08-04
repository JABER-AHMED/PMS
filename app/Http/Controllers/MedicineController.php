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

    public function edit($id)
    {
    	$medicine = Medicine::find($id);
        $medicines = Medicine::all();
    	return view('admin.medicine.edit')->withMedicine($medicine)->withMedicines($medicines);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, array(

    		'medicine' => 'required'

    	));

    	$medicine = Medicine::find($id);

    	$medicine->medicine = $request->medicine;

    	$medicine->save();

    	return redirect()->route('medicine.create', $medicine->id)->with('success','Medicine Updated Successfully....');
    }

    public function delete($id)
    {
    	$medicine = Medicine::find($id);

    	$medicine->delete();

    	return redirect()->route('medicine.create')->with('success', 'Medicine deleted successfully');
    }

}
