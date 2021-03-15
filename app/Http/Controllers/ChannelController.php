<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packchannel;
use App\Models\Channel;
use App\Http\Requests\StoreChannel;
class ChannelController extends Controller
{
    public function index(){

		$channels= Packchannel::orderBy('id','desc')->paginate();
    	return view('channels.index',compact("channels"));
    }
    public function create(){
        // return response()->view('packchannels.index',$data);
        // return $packchannel;
    	// return view('packchannels.create',compact("cable"));
    }

    public function store(StoreChannel $request){

    	$channel = Channel::create($request->all());
    	return redirect()->route('channels.show',$channel);
    }

    public function show(Channel $channel){
    	
    	return view('channels.show',compact("channel"));
    }

    public function edit(Channel $channel){
    
        // return view('packchannels.edit',compact("packchannel"));    
    }

    public function crear( $packchannel){
    	// return "el numero es ".$cable;
    	return view('channels.create',compact("packchannel"));
    }
    public function ver($packchannel){
    	// return $cable;
    	$channels= Channel::where('packchannel_id',$packchannel)->orderBy('id','desc')->get();
    	return view('channels.index',compact("channels"));
    }
}
