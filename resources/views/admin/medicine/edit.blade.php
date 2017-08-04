@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
	<a href="{{route('medicine.create')}}" type="submit" class="btn btn-default">Go Back</a>
	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Edit Medicine</h1>
			<form action="{{route('medicine.update', $medicine->id)}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="medicine" class="form-control" value="{{ $medicine->medicine }}">
				</div>
				<button type="submit" class="btn btn-primary">Update Medicine</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-6">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th style="text-align:center;">Medicine</th>
				</tr>
			</thead>
			<tbody>
			@foreach($medicines as $medicine)
				<tr>
					<td>{{ $medicine->id }}</td>
					<td style="text-align:center;">{{ $medicine->medicine }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
</div>
</div>

@endsection