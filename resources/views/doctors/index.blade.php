@extends('layouts.master')

@section('title')

@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-body" style=" box-shadow: 0 0 5px 1px #e3e3e3;">
			  @foreach($doctors as $doctor)
				<h2>{{$doctor->name}}</h2>
				<p>{{$doctor->designation}}</p>
				<p>{{$doctor->specilities}}</p>
				<p>Address: {{$doctor->address}}</p>
				<p>Number: +880{{$doctor->number}}</p>
				<p>E-mail: {{$doctor->email}}</p>
			  @endforeach
			  <table class="table">
			    <thead>
			    </thead>
			    <tbody>
			      <tr>
			      @foreach($patients as $patient)
			        <td>Patient Name: {{$patient->name}}</td>
			        <td>Age: {{$patient->age}} Years</td>
			        <td>Sex: {{$patient->sex}}</td>
			        <td>Date: {{$patient->date }}</td>
			        @endforeach
			      </tr>
			     </tbody>
			   </table>
			</div>
		</div>
	</div>

@endsection