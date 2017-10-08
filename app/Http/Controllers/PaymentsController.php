<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Payment;
use View;

class PaymentsController extends Controller
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

	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
	$payments = Payment::all();
	return view('Payments.Payments', compact('payments'));       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	
        return view('Payments.Create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
	
	$input['user_id'] = \Auth::user()->id;
	if($input['title'] != $input['verification']){
		return redirect()->back();	
	}else
	
	Payment::create($input);
	return redirect()->back();
   }

   public function upload($file)
   {
	/*$extension = $file->getClientOriginalExtension();
	$sha1 = sha1($file->getClientOriginalName());
	
	$filename = date('Y-m-d-h-i-s')."_".$sha1.".".$extension;
	$path = public_path('images/restaurants/');	
	$file->move($path, $filename);
	
	return 'images/restaurants/'.$filename;*/
	  
   }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	
	$payment = Payment::where('id', $id)->first();
	if(Auth::user() != $payment->user){
	return redirect()->back();
	}
	  //verification
        $payment = Payment::findOrFail($id);
	if($payment->title != $payment->verification){
	return redirect()->back();	
	}  
	return view('Payments.Edit', compact('payment'));
	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $input = $request->all();
	    
	    Payment::findOrFail($id)->update($input);

	    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	$payment = Payment::where('id', $id)->first();
	if(Auth::user() != $payment->user){
	return redirect()->back();
	}       
	Payment::findOrFail($id)->delete();
	return redirect()->back();
    }
}
