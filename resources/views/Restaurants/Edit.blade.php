@extends('layouts.app2')
<!--view of Restaurant-->
@section('content')

   <div class="panel-heading">Edit Restaurant Information:     {{ $restaurant->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($restaurant, array('method'=>'PATCH','action' => ['RestaurantsController@update',$restaurant->id],'files'=>true)) !!}
        
	<div class="form-group col-lg-4">
    <p>Restaurant Name:</p>
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
        </div>
         <div class="form-group col-lg-12">
          <p>Restaurant Details:</p>
            {!! Form::textarea('description', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Details')) !!}
         </div>
	 <div class="form-group col-lg-3">
    <p>Total Seat:</p>
           {!! Form::number('total_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Total Seat')) !!}
         </div>
         <div class="form-group col-lg-3">
          <p>Available Seat:</p>
           {!! Form::number('avail_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Available Seat')) !!}
         </div>
         <div class="form-group col-lg-4">
          <p>Change Image:</p>
            {!! Form::file('image', array('class'=>'form-control', 'placeholder'=>'Select Restaurant Image')) !!}
         </div>
         <div class="form-group col-lg-4">
            {!! Form::submit('Update Restaurant Info.', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close()!!}
      </div>
      <div class="col-lg-4"> 
         <img src="{{asset($restaurant->image)}}" alt="{{$restaurant->title}}" class="img-responsive img-rounded editRestaurantImg">
      </div>
   </div>

@endsection
