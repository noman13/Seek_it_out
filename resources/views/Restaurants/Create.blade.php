@extends('layouts.app')
@section('content')

   <div class="panel-heading">Add new restaurant</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Restaurants.store','files'=>true)) !!}
	<div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'New Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-12">
         {!! Form::textarea('description', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Details')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::number('total_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Total Seat')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::number('avail_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Available Seat')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::file('image', array('required','class'=>'form-control', 'placeholder'=>'Select Restaurant Image')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
