@extends('layouts.app2')
<!--view of Restaurant-->
@section('content')
 <div class="panel-heading">Add New Restaurant: </div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Restaurants.store','files'=>true)) !!}
   <div class="form-group col-lg-4">
    <p>Enter Veification Code: </p>
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
      </div>
      <div class="form-group col-lg-4">
        <p>Enter Restaurant Name: </p>
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'New Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-12">
        <p>Short Description: </p>
         {!! Form::textarea('description', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Details')) !!}
      </div>
      <div class="form-group col-lg-3">
        <p>Total Seat: </p>
         {!! Form::number('total_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Total Seat')) !!}
      </div>
      <div class="form-group col-lg-3">
        <p>Available Seat: </p>
         {!! Form::number('avail_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Available Seat')) !!}
      </div>
      <div class="form-group col-lg-4">
        <p>Restaurant Image: </p>
         {!! Form::file('image', array('required','class'=>'form-control', 'placeholder'=>'Select Restaurant Image')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::submit('Add Restaurant', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>


@endsection

