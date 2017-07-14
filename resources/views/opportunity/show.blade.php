@extends('layouts.master')
@section('content')
@include('layouts.nav1')
<div class="row">
	<p style="color:white;">
	<br/>
	<br/>	
	</p>
</div>
 <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                <div class="widget-wrapper">
                	<h4>Downloads</h4>
                	<br>
                        <div class="list-group">
                        <ul	>
                        
                        	<li><a href="#" class="list-group-item"><i class="fa fa-paperclip" aria-hidden="true"> Investor Pitch</a></i> </li>
                        	<li><a href="#" class="list-group-item"><i class="fa fa-paperclip" aria-hidden="true"> Business Plan</a></i> </li>
							<li><a href="#" class="list-group-item"><i class="fa fa-paperclip" aria-hidden="true"> Business Profile</a></i> </li>
                      
                        </ul>
                        </div>
                </div>
                	<br>
                    <div class="widget-wrapper">
                        <h4>Industries:</h4>
                        <br>
                        <div class="list-group">
                        <ul	>
                        @foreach($industries as $industry)
                        @if($industry->opportunities->count())
                        	<li><a href="/industry/{{$industry->id}}" class="list-group-item">
                        		{{$industry->name}} ({{$industry->opportunities->count()}})
                        	</a> </li>
                        @endif
                        @endforeach
                        </ul>
                        </div>
                    </div>

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                    	<br>
                        <h4>Subscription form:</h4>
                        <br>
                        <div class="card">
                            <div class="card-block">
                                <p><strong>Subscribe to our newsletter</strong></p>
                                <p>Once a week we will send you a summary of the most useful news</p>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Your email</label>
                                </div>
                                <button class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">
                            	<h2 class="h2-responsive">{{$opportunity->name}}</h2>

                                <!--Featured image-->
                                <div class="view overlay hm-white-light z-depth-1-half">
                                    <img src="/uploads/splash/{{$opportunity->splash}}" class="img-fluid " alt="">
                                    <div class="mask">
                                    </div>
                                    <h3 class="price"><span class="badge red darken-2">10 Reviews</span></h3>
                                </div>
                                <!--/.Featured image-->

                                <br>
                                <div class="row">
              				<div class="col-sm-6 col-md-6">
              						<p>Location: {{$opportunity->location}}</p>
              				</div>
             				<div class="col-sm-6 col-md-6">
   									<p>Industry:<a href="/industry/{{$opportunity->industry->id}}"> {{$opportunity->industry->name}}
              						</a></p>
              				</div>
            			</div>
                        <div class="row">  
              				<div class="col-sm-6 col-md-6">
                				<p>Total Investment: {{$opportunity->total_investment}}</p>
              				</div>
              				<div class="col-sm-6 col-md-6">
                				<p>Minimum per Investor: {{$opportunity->min_investment}}</p> 
               					
              				</div>
            			</div>


                                <!--Product data-->
                                <h2 class="h2-responsive">Investor Pitch Summary</h2>
                                <hr>
                                {{$opportunity->pitch_summary}}

                                <h2 class="h2-responsive">Business Profile Summary</h2>
                                <hr>
                                {{$opportunity->profile_summary}}
                                	
                                <h2 class="h2-responsive">Business Plan Summary</h2>
                                <hr>
                                {{$opportunity->plan_summary}}
                                	
                                <ul class="rating inline-ul">
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>

                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Second row-->
                    <div class="row">
                        
                        <!--Heading-->
                            <div class="col reviews wow fadeIn" data-wow-delay="0.4s">
                                <h2 class="h2-responsive">Reviews</h2>
                            </div>

                        <!--First review-->
                        <div class="media wow fadeIn" data-wow-delay="0.2s">
                            <a class="media-left" href="#">
                                <img class="rounded-circle" src="http://mdbootstrap.com/img//Photos/Avatars/avatar-7.jpg" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">John Doe</h4>
                                <ul class="rating inline-ul">
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                            </div>
                        </div>

                        <!--Second review-->
                        <br><div class="media wow fadeIn" data-wow-delay="0.2s">
                            <a class="media-left" href="#">
                                <img class="rounded-circle" src="http://mdbootstrap.com/img//Photos/Avatars/avatar-5.jpg" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Maria Casie</h4>
                                <ul class="rating inline-ul">
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                            </div>
                        </div>

                        <!--Second review-->
                       
                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

  </div>
@endsection