<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Advice;

class AdviceController extends Controller
{
    public function create()
    {
    	$advices = Advice::all();
    	return view('admin.advice.create')->withAdvices($advices);
    }

    public function store(Request $request)
    {
    	$published = Input::has('published') ? true : false;

    	if ($published) {
    		
    		$advice = new Advice;

	    	$advice->advice = $request->advice;
	    	$advice->published = $published;

    		$advice->save();

    		return redirect()->route('advice.create')->with('success', 'successfully added advice');
    	}else{
    		return redirect()->back();
    	}
    	
    }

    public function edit($id)
    {
    	$advice = Advice::find($id);
        $advices = Advice::all();
    	return view('admin.advice.edit')->withAdvice($advice)->withAdvices($advices);
    }

    public function update(Request $request, $id)
    {
    	$published = $request->published ? true : false;

    	if ($published) {
    		
    		$advice = Advice::find($id);

	    	$advice->advice = $request->advice;
	    	$advice->published = $published;

    		$advice->save();

    		return redirect()->route('advice.create')->with('success', 'successfully updated advice');
    	}else{
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	$advice = Advice::find($id);

    	$advice->delete();

    	return redirect()->route('advice.create')->with('success', 'Medicine deleted successfully');
    }
}
