<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\Packservice;
class InvoiceController extends Controller
{

	public function index(){

    	$user = Auth::user();
    	$invoices = Invoice::where('user_id',$user->id)->orderBy('id','desc')->get();

        $packservices = Packservice::all();
        // return $packservices;
    	return view('invoices.create',compact('invoices','packservices'));
    }


    public function create(){

    }
    public function show(Invoice $invoice){
    	 
        return view('invoices.show',compact("invoice"));
    }


    public function store(Request $request){

        $invoice = Invoice::where('user_id',$request->user_id)->first();

        if(!$invoice){

            $invoice = Invoice::create($request->all());
        }else{

            // return $invoice;

             if($request->packservice_id == $invoice->packservice_id){

                return redirect()->route('invoices.error');
             }else{ 

                $invoice = Invoice::create([
                    'price'=>$request->price,
                    'user_id' => $request->user_id,
                    'packservice_id'=>$request->packservice_id,

                ]);

             }

        }
    	
    	return redirect()->route('invoices.show',$invoice);
    }

     public function error(){

        return view('invoices.error');

     }
}
