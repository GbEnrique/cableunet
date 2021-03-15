<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function __invoke(){
    //     return view('home');
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $user = Auth::user();
        
       if($user->status=='admin'){
         return view('home',compact('user'));
       }else{
         return view('user',compact('user'));
       }
       // return view('home');
    }
}
