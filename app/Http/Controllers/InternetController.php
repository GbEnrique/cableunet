<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Internet;
use App\Http\Requests\StoreInternet;

class InternetController extends Controller
{
    public function index(){

    	$internets= Internet::orderBy('id','desc')->paginate();
    	return view('internets.index',compact("internets"));
    }
    public function create(){
    	return view('internets.create');
    }
    public function store(StoreInternet $request){

        $internet = Internet::create($request->all());

        return redirect()->route('internets.show',$internet);
    }
    
    public function show(Internet $internet){
    	
    	return view('internets.show',compact("internet"));
    }
    
    public function edit(Internet $internet){
    
        return view('internets.edit',compact("internet"));    
    }
    public function update(Request $request,Internet $internet){

         $request->validate([
            'name'=>'required',
            'price'=>'required',
            'speed'=>'required'
        ]);

        $internet->update($request->all());
        return redirect()->route('internets.show',$internet);
    }

    public function destroy(Internet $internet){
        $internet->delete();

        return redirect()->route('internets.index');
    }   
}
