<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Restaurant;
use View;

class RestaurantsController extends Controller
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
	 
	 //what authorized user sees
    public function index()
    {
	$restaurants = Restaurant::all();
	return view('Restaurants.Restaurants', compact('restaurants'));       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	
        return view('Restaurants.Create');
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
	if(isset($input['image']))
	{
		//upload $input['image']
		$input['image'] = $this->upload($input['image']);	

	}
	else{
	       $input['image'] = 'images/default.jpg';
	}
	
	$input['user_id'] = \Auth::user()->id;
	if($input['title'] != $input['verification']){
		return redirect()->back();	
	}else
	
	Restaurant::create($input);
	return redirect()->back();
   }

   public function upload($file)
   {
	$extension = $file->getClientOriginalExtension();
	$sha1 = sha1($file->getClientOriginalName());
	
	$filename = date('Y-m-d-h-i-s')."_".$sha1.".".$extension;
	$path = public_path('images/restaurants/');	
	$file->move($path, $filename);
	
	return 'images/restaurants/'.$filename;
	  
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
	
	$restaurant = Restaurant::where('id', $id)->first();
	if(Auth::user() != $restaurant->user){
	return redirect()->back();
	}
	  //verification
        $restaurant = Restaurant::findOrFail($id);
	if($restaurant->title != $restaurant->verification){
	return redirect()->back();	
	}  
	return view('Restaurants.Edit', compact('restaurant'));
	
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
	    if(isset($input['image']))
	
		$input['image'] = $this->upload($input['image']);	

	    Restaurant::findOrFail($id)->update($input);

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
	$restaurant = Restaurant::where('id', $id)->first();
	if(Auth::user() != $restaurant->user){
	return redirect()->back();
	}       
	Restaurant::findOrFail($id)->delete();
	//$restaurant->delete();
	return redirect()->back();
    }
}
