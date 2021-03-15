<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programation;
use App\Http\Requests\StoreProgramation;
class ProgramationController extends Controller
{
    public function index(){

        $programations= Programation::orderBy('id','desc')->paginate();
        return view('programations.index',compact("programations"));
    }
    public function create(){
        // return response()->view('packchannels.index',$data);
        // return $packchannel;
        // return view('packchannels.create',compact("cable"));
    }

    public function store(StoreProgramation $request){

        $programation = Programation::create($request->all());
        return redirect()->route('programations.show',$programation);
    }

    public function show(Programation $programation){
        
        return view('programations.show',compact("programation"));
    }

    public function edit(Programation $programation){
    
        // return view('programations.edit',compact("programation"));    
    }

    public function crear( $channel){
        // return "el numero es ".$cable;
        return view('programations.create',compact("channel"));
    }
    public function ver($channel){
        // return $cable;
        $programations= Programation::where('channel_id',$channel)->orderBy('id','desc')->get();
        return view('programations.index',compact("programations"));
    }
}
