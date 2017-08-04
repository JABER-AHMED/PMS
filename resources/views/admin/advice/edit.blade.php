@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')

	<div class="row" style="margin-top: 70px;">
		<div class="col-md-4">
		<h1>Edit Advices</h1>
			<form action="{{route('advice.update', $advice->id)}}" method="POST">
				<div class="form-gorup">
					<input type="text" name="advice" class="form-control" value="{{$advice->advice}}">
				</div>
				<div class="form-gorup">
					<input type="checkbox" name="published" value="1">
				</div>
				<button type="submit" class="btn btn-primary">Update Advice</button>
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
						</tr>
					</thead>
					<tbody>
					@foreach($advices as $advice)
						<tr>
							<td>{{ $advice->id }}</td>
							<td style="text-align: center;">{{ $advice->advice }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection