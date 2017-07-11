 <div class="showcase block block-border-bottom-grey">
  <div class="container">
  <h2 class="block-title">
      Featured Opportunities
    </h2>
 <ul>
 <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":3, "pagination":true, "navigation":true, "itemsScaleUp":true}'>
    @foreach($opportunities as $opp)
      <div class="item">
        <a href="/opportunity/{{$opp->id}}" class="overlay-wrapper">
            <img src="/uploads/splash/{{$opp->splash}}" alt="Project 1 image" class="img-responsive underlay">
            </a>
         <div class="item-details bg-noise">
            <h4 class="item-title">
              <a href="{{$opp->id}}">{{$opp->name}}</a>
            </h4>
            <div class="row">
              <div class="col-sm-6 col-md-6">
              <p>{{$opp->location}}</p>
              </div>
              <div class="col-sm-6 col-md-6">
             
              <a class="pull-right" href="/industry/{{$opp->industry->id}}">
              {{$opp->industry->name}}
              </a>
              </div>
            </div>
        
            <p>{{$opp->pitch_summary}}</p>
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
            <div class="row"> 
              <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
            </div>
          </div>  
      </div>
   @endforeach 
 </ul>
</div>
</div>