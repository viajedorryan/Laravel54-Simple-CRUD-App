@extends('layouts.master')

@section('content')
	<div class="col-md-12">
		<legend>Laravel 5.4 Simple CRUD App | <b>Read Page</b></legend>
		<p><b>Event Name: </b>{{$posts->event}}</p>
		<p><b>Description: </b>{{$posts->description}}</p>
		<div class="form-group">
	        <a href="{{ url('/home') }}" class="btn btn-primary" >Back</a>
	    </div>
	</div>
@endsection