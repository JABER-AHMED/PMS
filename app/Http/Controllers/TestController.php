<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function create()
    {
    	$tests = Test::all();
    	return view('admin.test.create')->withTests($tests);
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(

    		'test_name' => 'required'
    	));

    	$test = new Test;

    	$test->test_name = $request->test_name;

    	$test->save();

    	return redirect()->route('test.create')->with('success', 'Test Added');
    }

    public function edit($id)
    {
    	$test = Test::find($id);
    	return view('admin.test.edit')->withTest($test);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, array(

    		'test_name' => 'required'

    	));

    	$test = Test::find($id);

    	$test->test_name = $request->test_name;

    	$test->save();

    	return redirect()->route('test.create', $test->id)->with('success','Test Updated Successfully....');
    }

    public function delete($id)
    {
    	$test = Test::find($id);

    	$test->delete();

    	return redirect()->route('test.create')->with('success', 'Test deleted successfully');
    }
}
