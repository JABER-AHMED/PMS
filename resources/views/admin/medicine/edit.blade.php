@extends('layouts.masteradmin')

@section('title')

@endsection

@section('content')

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

@endsection