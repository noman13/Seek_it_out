@extends('layouts.app')
@section('content')

   <div class="panel-heading">Edit category: {{ $Category->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($Category, array('method'=>'PATCH','action' => ['CategoriesController@update',$Category->id],'files'=>true)) !!}
         <div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
         </div>
         <div class="form-group col-lg-4">
         {!! Form::select('category', ['Authentic'=>'Authentic','Exquisite'=>'Exquisite', 'Food Cart'=>'Food Cart'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Category')) !!}
         </div>
         <div class="form-group col-lg-4">
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
