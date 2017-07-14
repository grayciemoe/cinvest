@extends('layouts.master')
@section('content')
@include('layouts.nav1')
    <p style="color:white;">
    <br/>
    <br/>   
  
<div class="container">

            <!--Page heading-->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1-responsive">{{$industry->name}}
                        <small class="text-muted">Investment Opportunities </small>
                    </h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            <div class="row wow">
                <!--First column-->
                @foreach($industry->Opportunities as $opp)
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="/uploads/splash/{{$opp->splash}}" class="img-fluid" alt="">
                            <a href="/opportunity/{{$opp->id}}">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title"><a href="/opportunity/{{$opp->id}}">{{$opp->name}}</a></h4>
                            <!--Text-->
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
                        {{$opp->pitch_summary}}
                        <div class="row">  
                            <div class="col-sm-6 col-md-6">
                                <p>Total Investment: {{$opp->total_investment}}</p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p>Minimum per Investor: {{$opp->min_investment}}</p> 
                                
                            </div>
                        </div>

                            
                            <div class="read-more">
                                <a href="/opportunity/{{$opp->id}}" class="btn btn-brown">Read more</a>
                            </div>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                @endforeach
                <!--/.First column-->

                <!--Second column-->
               </div> 
            <hr>

            <!--Pagination-->
            <nav class="row flex-center wow fadeIn" data-wow-delay="0.2s">
                
                            <!--Arrow left-->
                           {{$opportunities->render()}}
            </nav>
            <!--/.Pagination-->
        </div>
@endsection