@extends("../layout/master")

@section("main_content")
	@if(Session::has('message'))
	<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif
	@if(Auth::user() && Auth::user()->role =='admin')
	<div class="row container"> 
	<form class="form-horizontal" method="POST" action='{{url("/home")}}'>
		{{csrf_field()}}
		<div class="form-group col-md-4">
		<input type="text" name="name" class="form-control" placeholder="Name">
		</div>
		<div class="col-md-1"></div>
		<div class="form-group col-md-4">
		<input type="text" name="description" class="form-control" placeholder="Description">
		</div>
		<div class="col-md-1"></div>
		<div class="form-group col-md-1">
		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Submit</button><br>
		</div>
	</form>
	</div>
	
	@endif	
	<!-- <div class="row">  -->
	<table class="table">
	<tr>
		<th>Name</th>
		<th>Description</th>
		<th></th>
	</tr>
	@foreach ($tasks as $task)
		<tr>
			<td>{!!$task->name!!}</td>
			<td>{!!$task->description!!}</td>
			@if(Auth::user() && Auth::user()->role =='admin')
			<td><a href='{{url("/home/delete/$task->id")}}'><button class="btn btn-danger">Delete</button></a></td>
			@endif
		</tr>
	@endforeach
	<!-- </table> -->
	</div>
@endsection
@extends('layouts.app')