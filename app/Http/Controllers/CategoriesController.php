<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Category;
use View;

class CategoriesController extends Controller
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
    $Categories = Category::all();
    //dd($Categories);
    return view('Categories.Categories', compact('Categories'));       
    //dd(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //dd(2);
        return view('Categories.Create');
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
    
    //dd($input);
    $input['user_id'] = \Auth::user()->id;
    if($input['title'] != $input['verification']){
    //return redirect()->back();
	return 'Not Authorized!';	
    }else
    Category::create($input);

    return redirect()->back();
   }

   public function upload($file)
   {
    $extension = $file->getClientOriginalExtension();
    $sha1 = sha1($file->getClientOriginalName());
    
    $filename = date('Y-m-d-h-i-s')."_".$sha1.".".$extension;
    $path = public_path('images/Categories/'); 
    $file->move($path, $filename);
    
    return 'images/Categories/'.$filename;
      
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
	
	$Category = Category::where('id', $id)->first();
	if(Auth::user() != $Category->user){
	return redirect()->back();
	}       
        $Category = Category::findOrFail($id);
	if($Category->title != $Category->verification){
	return redirect()->back();	
	}  
        return view('Categories.Edit', compact('Category'));
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

        Category::findOrFail($id)->update($input);

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
        $Category = Category::where('id', $id)->first();
	if(Auth::user() != $Category->user){
	return redirect()->back();
	}       
	Category::findOrFail($id)->delete();
	return redirect()->back();
    }
}
