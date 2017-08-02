@extends('layouts.master')

@section('title')

@endsection

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Registration</div>
			    <div class="panel-body">
			    	<form action="{{route('user.register')}}" method="post">
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			    			<input type="text" name="email" class="form-control" placeholder="Your E-mail">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    			<input type="text" name="username" class="form-control" placeholder="Your username">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    			<input type="password" name="password" class="form-control" placeholder="Password">
			    		</div>
			    		</div>
			    		<div class="form-group">
			    		<div class="input-group">
			    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    			<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
			    		</div>
			    		</div>
			    		<button type="submit" class="btn btn-primary btn-block">Register</button>
			    		{{csrf_field()}}
			    	</form>
			    </div>
			</div>
		</div>
	</div>

@endsection