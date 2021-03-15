<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cable;
use App\Models\Packchannel;
use App\Http\Requests\StorePackchannel;


class PackchannelController extends Controller
{
	public function index(){

		$packchannels= Packchannel::orderBy('id','desc')->paginate();
    	return view('packchannels.index',compact("packchannels"));
    }
    public function create(){
        // return response()->view('packchannels.index',$data);
        // return $packchannel;
    	// return view('packchannels.create',compact("cable"));
    }

    public function store(StorePackchannel $request){

    	$packchannel = Packchannel::create($request->all());
    	return redirect()->route('packchannels.show',$packchannel);
    }

    public function show(Packchannel $packchannel){
    	
    	return view('packchannels.show',compact("packchannel"));
    }

    public function edit(Packchannel $packchannel){
    
        // return view('packchannels.edit',compact("packchannel"));    
    }

    public function crear( $cable){
    	// return "el numero es ".$cable;
    	return view('packchannels.create',compact("cable"));
    }
    public function ver($cable){
    	// return $cable;
    	$packchannels= Packchannel::where('cable_id',$cable)->orderBy('id','desc')->get();
    	return view('packchannels.index',compact("packchannels"));
    }
}
