@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Add Symptoms</h1>
			<form action="{{route('symptom.store')}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="symptom_name" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Add Symptom</button>
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
							<th style="text-align: center;">Test</th>
							<th style="text-align: right; padding-right: 5rem;">Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($symptoms as $symptom)
						<tr>
							<td>{{ $symptom->id}}</td>
							<td style="text-align: center;">{{$symptom->symptom_name}}</td>
							<td>
							<a href="{{route('symptom.edit', $symptom->id)}}" class="btn btn-default">Edit</a>
							<a href="{{route('symptom.delete', $symptom->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection