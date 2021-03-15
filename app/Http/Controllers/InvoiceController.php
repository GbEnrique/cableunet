<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
class InvoiceController extends Controller
{

	public function create(){

    	$user = Auth::user();
    	$invoice = Invoice::where('user_id',$user->id)->first();
    	return view('invoices.create',compact('invoice'));
    }
    public function show(Invoice $invoice){
    	 
        return view('invoices.show',compact("invoice"));
    }


    public function store(Request $request){

        $invoice = Invoice::where('user_id',$request->user_id)->first();

        if(!$invoice){

            $invoice = Invoice::create($request->all());
        }else{
             $invoice->price += $request->price;
             $invoice->user_id = $request->user_id;

             $invoice->save();
        }
    	

    	return redirect()->route('invoices.show',$invoice);
    }
}
