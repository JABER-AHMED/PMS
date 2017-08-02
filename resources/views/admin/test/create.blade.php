@extends('layouts.masteradmin')

@section('title')

@endsection

@section('content')

	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Add Tests</h1>
			<form action="{{route('test.store')}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="test_name" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Add Test</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<hr>
		<div class="row">
		<div class="col-md-10">
				<table class="table table-plain">
					<thead>
						<tr>
							<th>No</th>
							<th style="text-align: center;">Test</th>
							<th style="text-align: right; padding-right: 5rem;">Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($tests as $test)
						<tr>
							<td>{{ $test->id}}</td>
							<td style="text-align: center;">{{$test->test_name}}</td>
							<td>
							<a href="{{route('test.edit', $test->id)}}" class="btn btn-default">Edit</a>
							<a href="{{route('test.delete', $test->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection