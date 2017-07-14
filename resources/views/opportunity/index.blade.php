@extends ('layouts.master')
@section('content')
@include('layouts.nav1')
<div class="row">
	<p style="color:white;">
<br/>
<br/>	
		</p>
</div>	
        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Main column-->
                <div class="col-lg-8">
                	@foreach($opportunities as $opp)
                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                        <!--Post data-->
                        <h1 class="h1-responsive">{{$opp->name}} <small class="text-muted"></small></h1>
                        <div class="row">
              				<div class="col-sm-6 col-md-6">
              						<p>{{$opp->location}}</p>
              				</div>
             				<div class="col-sm-6 col-md-6">
   									<a  href="/industry/{{$opp->industry->id}}">
              								{{$opp->industry->name}}
              						</a>
              				</div>
            			</div>
                        <div class="row">  
              				<div class="col-sm-6 col-md-6">
                				<p>Total Investment: {{$opp->total_investment}}</p>
              				</div>
              				<div class="col-sm-6 col-md-6">
                				<p>Minimum per Investor: {{$opp->min_investment}}</p> 
               					
              				</div>
            			</div>

                        <!--Featured image -->
                        <div class="view overlay hm-white-light">
                            <img src="/uploads/splash/{{$opp->splash}}" alt="">
                            <div class="mask">
                            </div>
                        </div>

                        <br>

                        <!--Post excerpt-->
                        {{$opp->pitch_summary}}

                        <!--"Read more" button-->
                        <div class="read-more">
                                <a href="/opportunity/{{$opp->id}}" class="btn btn-brown">Read more</a>
                            </div>
                    </div>
                    <!--/.Post-->

                    <hr>
                    @endforeach
                    
                    <hr>

                    <!--Pagination-->
                    <nav class="text-center">
                        
                            <!--Arrow left-->
                           {{$opportunities->render()}}
                    </nav>
                    <!--/.Pagination-->

                </div>

                <!--Sidebar-->
                <div class="col-lg-4">

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
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


                    	<br/>
                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.6s">
                        <h4>Subscription form:</h4>
                        <br>
                        <div class="card">
                            <div class="card-block">
                                <p><strong>Get Notified on Investment Opportunities</strong></p>
                                <p>lorem ipsum dolor</p>
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
                                <button class="btn btn-info">Submit</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->
            </div>
        </div>
        <!--/.Main layout-->

    </main>

@endsection