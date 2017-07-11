<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industry;

class IndustryController extends Controller
{
    //
    public function create(){
    	return view('industry.create');
    }

    public function store(){
    	//validate
    	$this->validate(request(),[
    		'name'=>'required',
    		]);
    	//create and store
    	$industry=Industry::create(request(['name']));

    	
    	
    	//redirect
    	return back();

    }

    public function show(Industry $industry){
        $opportunities = $industry->opportunities()->paginate(3);


        return view('industry.show', compact('industry','opportunities'));
    }
    public function stats(Industry $industry){
        return view('industry.stats', compact('industry'));
    }

   // public function index(){
       // $industries=Industry::all();


       // return view('industry.index', compact('industries'));
   // }
}
