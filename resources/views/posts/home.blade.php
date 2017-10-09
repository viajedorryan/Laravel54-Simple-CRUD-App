@extends('layouts.master')

@section('content')
	<div class="col-md-12">
		<legend>Laravel 5.4 Simple CRUD App | <b>Home Page</b></legend>
		@if(session('info'))
			<div class=" alert alert-info">
				<center>{{session('info')}}</center>
			</div>
		@endif
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Event</th>
		      <th>Description</th>
		      <th colspan="2"><center>Action</center></th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(count($posts) > 0)
				@foreach($posts->all() as $post)
					<tr>
				      <td>{{ $post->id }}</td>
				      <td>{{ $post->event }}</td>
				      <td>{{ $post->description }}</td>
				      <td colspan="2">
				      	<center>
					      	<a href='{{ url("/read/{$post->id}") }}' class="label label-primary">Read</a>
					      	|
					      	<a href='{{ url("/update/{$post->id}") }}' class="label label-success">Update</a>
					      	|
					      	<a href='{{ url("/delete/{$post->id}") }}' class="label label-danger">Delete</a>
					    </center>
				      </td>
				    </tr>
				@endforeach
		  	@endif
		  </tbody>
		</table> 
	</div>
@endsection