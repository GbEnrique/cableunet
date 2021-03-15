<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
     public function index(){

    	$users= User::orderBy('id','desc')->paginate();
    	return view('users.index',compact("users"));
    }

    
    public function show(User $user){
    	
    	return view('users.show',compact("user"));
    }
    
    public function edit(User $user){
    
        return view('users.edit',compact("user"));    
    }
    public function update(Request $request,User $user){

         $request->validate([
            'name'=>'required',
        ]);

         $user->name = $request->name;
         $user->email = $request->email;
         $user->status =$request->status;
         $user->save();

        return redirect()->route('users.show',$user);
    }

    public function destroy(User $user){
        $user->delete();

        return redirect()->route('users.index');
    }   
}
