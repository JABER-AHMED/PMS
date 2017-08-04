@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')

	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Add Medicine</h1>
			<form action="{{route('medicine.store')}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="medicine" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Add Medicine</button>
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
					@foreach($medicines as $medicine)
						<tr>
							<td>{{ $medicine->id }}</td>
							<td style="text-align: center;">{{ $medicine->medicine }}</td>
							<td>
							<a href="{{route('medicine.edit', $medicine->id)}}" class="btn btn-default">Edit</a>
							<a href="{{route('medicine.delete', $medicine->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection