@extends('layouts.app')
@section('content')

   <div class="panel-heading">Add new seat</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Seats.store','files'=>true)) !!}
      <div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
      </div> 
      <div class="form-group col-lg-3">
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::number('price', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Price by Seats')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::file('image', array('required','class'=>'form-control', 'placeholder'=>'Select Seat Image')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
