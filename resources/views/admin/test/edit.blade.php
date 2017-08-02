@extends('layouts.masteradmin')

@section('title')

@endsection

@section('content')

	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Edit Tests</h1>
			<form action="{{route('test.update', $test->id)}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="test_name" class="form-control" value="{{ $test->test_name }}">
				</div>
				<button type="submit" class="btn btn-primary">Update Test</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<hr>

@endsection