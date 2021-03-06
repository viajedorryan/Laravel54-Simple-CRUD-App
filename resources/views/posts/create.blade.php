@extends('layouts.master')

@section('content')
	<div class="col-md-6">
		<form class="form-horizontal" method="POSt" action="{{ url('/add') }}">
			{{ csrf_field() }}
		  	<fieldset>
			  	<legend>Laravel 5.4 Simple CRUD App | <b>Create Page</b></legend>
			  	@if(count($errors) > 0)
					@foreach($errors->all() as $error)
						<div class=" alert alert-danger">
							{{$error}}
						</div>
					@endforeach
			  	@endif
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Event</label>
			      <div class="col-lg-10">
			        <input type="text" name="event" class="form-control" placeholder="Event">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Description</label>
			      <div class="col-lg-10">
			        <textarea name="description" class="form-control" placeholder="Description"></textarea>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="submit" class="btn btn-primary">Submit</button>
			        <a href="{{ url('/home') }}" class="btn btn-primary" >Back</a>
			      </div>
			    </div>
		  	</fieldset>
		</form>
	</div>
@endsection



