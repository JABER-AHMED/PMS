@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')

	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Add Advices</h1>
			<form action="{{route('advice.store')}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="advice" class="form-control">
				</div>
				<div class="form-gorup">
					<input type="checkbox" name="published" value="1">
				</div>
				<button type="submit" class="btn btn-primary">Add Advice</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-10">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th style="text-align: center;">Medicine</th>
							<th style="text-align: right; padding-right: 5rem;">Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($advices as $advice)
						<tr>
							<td>{{ $advice->id }}</td>
							<td style="text-align: center;">{{ $advice->advice }}</td>
							<td>
							<a href="{{route('advice.edit', $advice->id)}}" class="btn btn-default">Edit</a>
							<a href="{{route('advice.delete', $advice->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection