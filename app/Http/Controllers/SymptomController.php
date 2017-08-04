<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;

class SymptomController extends Controller
{
     public function create()
    {
    	$symptoms = Symptom::all();
    	return view('admin.symptom.create')->withSymptoms($symptoms);
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(

    		'symptom_name' => 'required'

    	));

    	$symptom = new Symptom;

    	$symptom->symptom_name = $request->symptom_name;

    	$symptom->save();
    	

    	return redirect()->route('symptom.create')->with('success', 'Add Medicine Successfully');
    }

    public function edit($id)
    {
    	$symptom = Symptom::find($id);
        $symptoms = Symptom::all();
    	return view('admin.symptom.edit')->withSymptom($symptom)->withSymptoms($symptoms);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, array(

    		'symptom_name' => 'required'

    	));

    	$symptom = Symptom::find($id);

    	$symptom->symptom_name = $request->symptom_name;

    	$symptom->save();

    	return redirect()->route('symptom.create', $symptom->id)->with('success','Symptoms Updated Successfully....');
    }

    public function delete($id)
    {
    	$symptom = Symptom::find($id);

    	$symptom->delete();

    	return redirect()->route('symptom.create')->with('success', 'Medicine deleted successfully');
    }
}
