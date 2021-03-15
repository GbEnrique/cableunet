<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cable;
use App\Http\Requests\StoreCable;

class CableController extends Controller
{
    public function index(){
    	$cables= Cable::orderBy('id','desc')->paginate();
    	return view('cables.index',compact("cables"));
    }
    public function create(){
    	return view('cables.create');
    }

    public function store(StoreCable $request){

        $cable = Cable::create($request->all());

        return redirect()->route('cables.show',$cable);
    }
    public function show(Cable $cable){
    	return view('cables.show',compact("cable"));
    }

    public function edit(Cable $cable){
    
        return view('cables.edit',compact("cable"));    
    }

    public function update(Request $request,Cable $cable){
    	
    	 $request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);

	    $cable->update($request->all());
        return redirect()->route('cables.show',$cable);
    }

     public function destroy(Cable $cable){

        $cable->delete();
        return redirect()->route('cables.index');
    } 
}
