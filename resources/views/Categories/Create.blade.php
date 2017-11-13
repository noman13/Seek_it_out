<!--view of Category-->
@extends('layouts.app2')
@section('content')

   <div class="panel-heading">Add Restaurants To Categories</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Categories.store','files'=>true)) !!}
	<div class="form-group col-lg-4">
    <p>Enter Verification Code: </p>
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
       </div> 
	<div class="form-group col-lg-4">
    <p>Enter Restaurant Name: </p>
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant title')) !!}
       </div>     
       <div class="form-group col-lg-4">
        <p>Select Category: </p>
         {!! Form::select('category', ['Indoor'=>'Indoor','RoofTop'=>'RoofTop','Outdoor'=>'Outdoor','Fast Food'=>'fast Food','Authentic'=>'Authentic','Exquisite'=>'Exquisite', 'Food Cart'=>'Food Cart'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Category')) !!}
       </div>
      
      <div class="form-group col-lg-4">
        <p>Select Image: </p>
         {!! Form::file('image', array('required','class'=>'form-control', 'placeholder'=>'Select Category Image')) !!}
      </div>
      <div>
        '<br></br>
        <br></br>
        <br></br>
      </div>
      <div class="form-group col-lg-2">

         {!! Form::submit('Add Category', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
