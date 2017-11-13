<!--view of Category-->
@extends('layouts.app2')
@section('content')

   <div class="panel-heading">Edit Category: {{ $Category->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($Category, array('method'=>'PATCH','action' => ['CategoriesController@update',$Category->id],'files'=>true)) !!}
         <div class="form-group col-lg-4">
         <p>Enter Verification Code: </p>
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
         </div>
         <div class="form-group col-lg-4">
         <p>Change Category:</p>
         {!! Form::select('category', ['Indoor'=>'Indoor','RoofTop'=>'RoofTop','Outdoor'=>'Outdoor', 'Fast Food'=>'Fast Food','Authentic'=>'Authentic','Exquisite'=>'Exquisite', 'Food Cart'=>'Food Cart'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Category')) !!}
         </div>
         <div class="form-group col-lg-4">
            <p>Change Image:</p>
            {!! Form::file('image', array('class'=>'form-control', 'placeholder'=>'Select Category Image')) !!}
         </div>
         <div class="form-group col-lg-4">
            {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close()!!}
      </div>
      <div class="col-lg-4"> 
         <img src="{{asset($Category->image)}}" alt="{{$Category->title}}" class="img-responsive img-rounded editCategoryImg">
      </div>
   </div>

@endsection
