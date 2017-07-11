<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunity;
use Image;
use App\Industry;

class OpportunityController extends Controller
{
    //

    Public function index(){

    	$opportunities=Opportunity::oldest()->get();
       
       // dd($opportunities);
    	return view ('home.index', compact('opportunities'));
    }

    public function create(){
        $industries=Industry::all();

    	return view('opportunity.create', compact(('industries')));
    }

    public function store(){
    	//validate
    	$this->validate(request(),[
    		'name'=>'required',
    		'location'=>'required',
    		'industry_id'=>'required',
    		'splash'=>'required',
    		'total_investment'=>'required',
    		'min_investment'=>'required',
    		'pitch_summary'=>'required'

    		]);

        
    	//pull request and save
    	$splash= request()->file('splash');
    	$filename=time().'.'.$splash->getClientOriginalExtension();
    	Image::make($splash)->resize(370,204)->save(public_path('/uploads/splash/'.$filename));


        $opp=new Opportunity;
        //dd($opp->industry_id);
        $opp->name= request('name');
        $opp->location= request('location');
        $opp->industry_id= request('industry_id');
        $opp->splash= $filename;
        $opp->total_investment= request('total_investment');
        $opp->min_investment= request('min_investment');
        $opp->pitch_summary= request('pitch_summary');
        $opp->profile_summary= request('profile_summary');
        $opp->plan_summary= request('plan_summary');

        //dd($opp);

        $opp->save();
        
    	//redirect
            return back();
    }
}
