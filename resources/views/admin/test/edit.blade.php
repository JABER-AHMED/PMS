@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
	<a href="{{route('test.create')}}" class="btn btn-default" type="sumit">Go Back</a>
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

	<div class="row">
		<div class="col-md-6">
				<table class="table table-plain">
					<thead>
						<tr>
							<th>No</th>
							<th style="text-align: center;">Test</th>
						</tr>
					</thead>
					<tbody>
					@foreach($tests as $test)
						<tr>
							<td>{{ $test->id}}</td>
							<td style="text-align: center;">{{$test->test_name}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection