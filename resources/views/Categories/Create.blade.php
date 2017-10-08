@extends('layouts.app')
@section('content')

   <div class="panel-heading">Add new category</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Categories.store','files'=>true)) !!}
	<div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
       </div> 
	<div class="form-group col-lg-4">
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant title')) !!}
       </div>     
       <div class="form-group col-lg-4">
         {!! Form::select('category', ['Indoor'=>'Indoor','RoofTop'=>'RoofTop','Outdoor'=>'Outdoor','Fast Food'=>'fast Food','Authentic'=>'Authentic','Exquisite'=>'Exquisite', 'Food Cart'=>'Food Cart'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Category')) !!}
       </div>
      
      <div class="form-group col-lg-4">
         {!! Form::file('image', array('required','class'=>'form-control', 'placeholder'=>'Select Category Image')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
