@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
	<a href="{{route('symptom.create')}}" class="btn btn-default" type="submit">Go Back</a>
	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Edit Tests</h1>
			<form action="{{route('symptom.update', $symptom->id)}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="symptom_name" class="form-control" value="{{ $symptom->symptom_name }}">
				</div>
				<button type="submit" class="btn btn-primary">Update Test</button>
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
						</tr>
					</thead>
					<tbody>
					@foreach($symptoms as $symptom)
						<tr>
							<td>{{ $symptom->id}}</td>
							<td style="text-align: center;">{{$symptom->symptom_name}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection