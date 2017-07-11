@extends ('layouts.master')
@section('content')
</div>
<div class="container" id="industry">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                 {{$industry->name}}
                <small>
                Number of Opportunities: {{ App\Industry::first()->opportunities->count()}}
                </small>
              </h1>
            </div>
            @foreach($opportunities as $opp)
            <div class="block block-border-bottom-grey block-pd-sm">
            <div class="row">
            <div class="col-sm-6 col-md-6">
              <h3 class="block-title">
                {{$opp->name}}
              </h3>
              </div>
              <div class="col-sm-6 col-md-6">
              <h3 class="pull-right">
                {{$opp->location}}
              </h3>
              </div>
            </div>
              
              <img src="/uploads/splash/{{$opp->splash}}" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
              <p>{{$opp->pitch_summary}}</p>
            </div>
            @endforeach
            {!! $opportunities->render() !!}
            <div class="block-highlight block-pd-h block-pd-sm">
              <h3 class="block-title">
                Lorem Ipsum
              </h3>
              <p class="text-fancy">Vel in amet mauris? Turpis pulvinar a proin tincidunt pid, vel odio lundium sit, cras. Duis mattis porttitor nunc elementum eros, in turpis nec. Lectus dictumst risus ut ac porta, urna ac vel, a ut dis!</p>
            </div>
            <div class="block">
              <h3 class="block-title">
                Vital Stats
              </h3>
              <div class="row">
                <div class="col-md-4">
                  <div class="stat">
                    <span data-counter-up>1000</span>s
                    <small>Happpy Customers</small>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="stat">
                    <span data-counter-up>163</span>+
                    <small>GB Transfered</small>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="stat">
                    <span data-counter-up>214</span>
                    <small>Bugs Fixed</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar -->
          <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
            <ul class="nav nav-pills nav-stacked">
              <li class="active">
                <a href="/industry/{{$industry->id}}" class="first">
                 {{$industry->name}}
                <small>
                Number of Opportunities: {{ App\Industry::first()->opportunities->count()}}
                </small>
                </a>
              </li>
              <li>
                <a href="/industry/{{$industry->id}}/stats">
                  Industry Statistics
                  <small>{{$industry->name}} in Kenya</small>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

@endsection