@extends('layouts.app')
@section('content')

   <div class="panel-heading">Edit seat: {{ $Seat->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($Seat, array('method'=>'PATCH','action' => ['SeatsController@update',$Seat->id],'files'=>true)) !!}
         <div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
         </div>
         <div class="form-group col-lg-4">
         {!! Form::number('price', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Price by Seat')) !!}
         </div>
         <div class="form-group col-lg-4">
            {!! Form::file('image', array('class'=>'form-control', 'placeholder'=>'Select Seat Image')) !!}
         </div>
         <div class="form-group col-lg-4">
            {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close()!!}
      </div>
      <div class="col-lg-4"> 
         <img src="{{asset($Seat->image)}}" alt="{{$Seat->title}}" class="img-responsive img-rounded editSeatImg">
      </div>
   </div>

@endsection
