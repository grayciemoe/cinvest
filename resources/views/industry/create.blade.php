@extends('layouts.master')
@section('content')
</div>
<div class="container">
	<h2>Add Industry</h2>
	<form action="/industry/post" method="POST" accept-charset="utf-8">
	{{csrf_field()}}
	<div class="form-group">	
	<label for="name">Name:</label>
	<input type="text" name="name" id="name" class="form-control">
	</div>
	<div class="form-group">
  	<button type="submit" class="btn btn-primary">Submit</button>
  </div>
@include('layouts.errors')
		
	</form>
</div>
@endsection