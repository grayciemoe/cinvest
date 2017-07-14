@extends ('layouts.master')
@section('content')
@include('layouts.nav')
    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(11).jpg'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h1></li>
                        <li>
                            <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </li>
                        <li>
                            <a class="btn btn-default btn-lg">Get Funding</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                         <li>
                            <h1 class="h1-responsive">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h1></li>
                        <li>
                            <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </li>
                        <li>
                            <a class="btn btn-default btn-lg">Get Funding</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                         <li>
                            <h1 class="h1-responsive">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h1></li>
                        <li>
                            <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </li>
                            <a class="btn btn-default btn-lg">Get Funding</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
    
    <h3 class="text-center mt-2 mb-3">Featured Investment Opportunities</h3>
        <div class="row">
                @foreach($opportunities->take(3) as $opp)
            <!--First columnn-->
            <div class="col-lg-4">
            
            
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="/uploads/splash/{{$opp->splash}}" alt="">
                        <a href="/opportunity/{{$opp->id}}">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->

                        <h4 class="card-title"><a href="/opportunity/{{$opp->id}}">{{$opp->name}}</a></h4>
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
                        <!--Text-->
                        <p class="card-text">{{$opp->pitch_summary}}</p>
                        <div class="row">  
              <div class="col-sm-6 col-md-6">
                <h4> {{$opp->total_investment}}</h4>
                <span>Total Investement</span>
              </div>
              <div class="col-sm-6 col-md-6">
                <h4> {{$opp->min_investment}}</h4>
                <span>Min. Investment</span>
              </div>
            </div>
                        <a href="/opportunity/{{$opp->id}}" class="btn btn-info">Read more</a>
                         
                    </div>
                    <!--/.Card content-->

                </div>

                <!--/.Card-->
            </div>
              @endforeach
            <!--First columnn-->

            
    </div><!--row-->
    <h3 class="text-center mt-2 mb-3">Industries</h3>
    <div class="row">
    @foreach($industries as $industry)

        <!--Second column-->
        <div class="col-lg-3" style="height: 250px;">
                        <!--Card-->
            <div class="card-overlay" style="background-image: url('/img/courses.jpg')">

                <!--Content-->
                <div class="white-text text-center">
                    <div class="card-block">
                        <p class="teal-text"><i class="fa fa-pie-chart"></i>Opportunities: {{$industry->opportunities->count()}}</p>
                        <h5>
                            {{$industry->name}}
                        </h5>
                        <a class="btn btn-lg btn-outline-white"><i class="fa fa-clone left"></i> View More</a>
                    </div>
                </div>
            </div>
            <!--/.Card-->
           

        </div>
         @endforeach
    </div>
    <hr>
    <div class="row">  
        <div class="call-to-action container-fluid">
            <h4>Material Design for Bootstrap</h4>
            <ul class="text-center">
                
                <li><a target="_blank" href="#" class="btn btn-info" rel="nofollow">Get Funding</a></li>
                
            </ul>
        </div>
        <!--/.Call to action-->
     </div>    
    

    </div>
    <!--/.Content-->
@endsection  




    