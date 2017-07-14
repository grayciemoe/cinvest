@extends ('layouts.master')
@section ('content')
@include('layouts.nav1')
<div class="row">
	<p style="color:white;">
	<br/>
	<br/>	
	</p>
</div>

<div class="container">
	<h3>Register Your Opportunity:</h3>
	<form action="/opportunity/post" method="POST">
	{{csrf_field()}}
	<div class="row">
		<div class="col-sm-6 col-md-6">
		<div class="form-group">	
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control">
		</div>
		</div>
		<div class="col-sm-6 col-md-6">
		<div class="form-group">	
			<label for="location">Location:</label>
			<input type="text" name="location" id="location" class="form-control">
		</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="industry">Industry:</label>
				<select name="industry_id" id="industry_id" class="form-control">
				@foreach($industries as $industry)
					<option value="{{$industry->id}}">{{$industry->name}}</option>
				@endforeach
				</select>	
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="splash">Business Feature Image:</label>
				<input type="file" name="splash" id="splash" class="form-control">
			</div>	
		</div>		
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="total_investment">Total Investment Needed (USD):</label>
				<input type="text" name="total_investment" id="total_investment" class="form-control">
			</div>	
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="min_investment">Minimum Investment (USD)</label>
				<input type="text" name="min_investment" id="min_investment" class="form-control">
			</div>	
		</div>		
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="pitch_summary">Investor Pitch Summary</label>
				<textarea class="form-control" name="pitch_summary" id="pitch_summary">	</textarea>
			</div>
		
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="profile_summary">Business Profile Summary</label>
				<textarea class="form-control" name="profile_summary" id="profile_summary">	</textarea>
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-group">	
				<label for="plan_summary">Business Plan Summary</label>
				<textarea class="form-control" name="plan_summary" id="plan_summary">	</textarea>
			</div>
		
		</div>

	</div>

	<div class="form-group">
	  	<button type="submit" class="btn btn-primary">Submit</button>
	  </div>
	@include('layouts.errors')
	</form>
</div>

@endsection