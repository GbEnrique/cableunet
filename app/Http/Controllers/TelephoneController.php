<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telephone;
use App\Http\Requests\StoreTelephone;

class TelephoneController extends Controller
{
    public function index(){

    	$telephones= Telephone::orderBy('id','desc')->paginate();
    	return view('telephones.index',compact("telephones"));
    }
    public function create(){
    	return view('telephones.create');
    }
    public function store(StoreTelephone $request){

        $telephone = Telephone::create($request->all());

        return redirect()->route('telephones.show',$telephone);
    }

    public function show(Telephone $telephone){
    	
    	return view('telephones.show',compact("telephone"));
    }
    
    public function edit(Telephone $telephone){
    
        return view('telephones.edit',compact("telephone"));    
    }
    public function update(Request $request,Telephone $telephone){

         $request->validate([
            'name'=>'required',
            'price'=>'required',
            'minutes'=>'required'
        ]);

        $telephone->update($request->all());
        return redirect()->route('telephones.show',$telephone);
    }

    public function destroy(Telephone $telephone){
        $telephone->delete();

        return redirect()->route('telephones.index');
    }   
}
