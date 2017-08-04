@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
				<div style="margin-top: 60px;" class="panel panel-primary">
					<div class="panel-heading">Doctor's Information</div>
					<div class="panel-body">
						<form action="{{route('store')}}" method="post">
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-user"></i></span>
			    			<input type="text" name="name" class="form-control" placeholder="Your Name">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-user-md"></i></span>
			    			<input type="text" name="designation" class="form-control" placeholder="Your designation">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
			    			<input type="text" name="specilities" class="form-control" placeholder="Specialities">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
			    			<input type="text" name="address" class="form-control" placeholder="Address">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			    			<input type="text" name="email" class="form-control" placeholder="Email">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="fa fa-phone"></i></span>
			    			<input type="text" name="number" class="form-control" placeholder="Number">
			    		</div>
			    		</div>
			    		<button type="submit" class="btn btn-primary btn-block">Submit Info</button>
			    		{{csrf_field()}}
			    	</form>
					</div>
				</div>
		</div>
	</div>
	</div>

@endsection