@extends('layouts.master')

@section('title')

@endsection

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
				<div style="margin-top: 60px;" class="panel panel-primary">
					<div class="panel-heading">Patients Information</div>
					<div class="panel-body">
						<form action="{{route('patient.store')}}" method="post">
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-user"></i></span>
			    			<input type="text" name="name" class="form-control" placeholder="Your Name">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
			    			<input type="text" name="age" class="form-control" placeholder="Age">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-genderless"></i></span>
			    			<input type="text" name="sex" class="form-control" placeholder="Sex">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			    			<input type="text" name="date" id="datepicker" class="form-control" placeholder="date">
			    		</div>
			    		</div>
			    		<button type="submit" class="btn btn-primary btn-block">Submit Info</button>
			    		{{csrf_field()}}
			    	</form>
					</div>
				</div>
		</div>
	</div>


@endsection