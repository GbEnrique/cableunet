<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internet;
use App\Models\Telephone;
use App\Models\Cable;
use App\Models\Packservice;
use Illuminate\Support\Facades\Auth;

class PackserviceController extends Controller
{
    public function index(){

        $packservices= Packservice::orderBy('id','desc')->paginate();
        // $internet = null;
    	return view('packservices.index',compact("packservices"));
    }

    public function store(Request $request){

        $internet= Internet::where('id',$request->internet_id)->first();
        $telephone= Telephone::where('id',$request->telephone_id)->first();
        $cable= Cable::where('id',$request->cable_id)->first();

        
        $a=0;$b=0;$c=0;
        // $id_a=0;$i_b=0;
        if($internet ){$a=$internet->price;}
         
        if($telephone)$b=$telephone->price;
         
        if ($cable)$c=$cable->price;
         
        $price = $a+$b+$c;
        // $packservice->name = $request
        $packservice = Packservice::create([
            'name'=>$request->name,
            'price'=>$price,
            'internet_id'=>$request->internet_id,
            'telephone_id'=>$request->telephone_id,
            'cable_id'=>$request->cable_id,
        ]);
        // return $packservice;
        return redirect()->route('packservices.show', $packservice);
        
    }

    public function create(){
    	$internets = Internet::all();
    	$cables = Cable::all();
    	$telephones = Telephone::all();
    	return view('packservices.create',compact('internets','cables','telephones'));
    }

    public function show(Packservice $packservice){

         $internet= Internet::where('id',$packservice->internet_id)->first();
        $telephone= Telephone::where('id',$packservice->telephone_id)->first();
        $cable= Cable::where('id',$packservice->cable_id)->first();
        
        return view('packservices.show',compact("packservice","internet","telephone","cable"));
    }

     public function usuario(){

        $packservices= Packservice::orderBy('id','desc')->paginate();
        // $internet = null;
        return view('packservices.user',compact("packservices"));
    }

   public function ver( Packservice $packservice){

        $internet= Internet::where('id',$packservice->internet_id)->first();
        $telephone= Telephone::where('id',$packservice->telephone_id)->first();
        $cable= Cable::where('id',$packservice->cable_id)->first();
         $user = Auth::user();
        // return "plan de internet ".$packservice->name;
        return view('packservices.ver',compact("packservice","internet","telephone","cable","user"));
    }



}
