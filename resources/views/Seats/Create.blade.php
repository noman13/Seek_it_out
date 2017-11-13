<!--view of Pricing-->
@extends('layouts.app2')
@section('content')

   <div class="panel-heading">Add New Pricing</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Seats.store','files'=>true)) !!}
      <div class="form-group col-lg-4">
         <p>Enter Verification Code: </p>
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
      </div> 
      <div class="form-group col-lg-3">
         <p>Enter Restaurant Name: </p>
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-3">
         <p>Price per Seat: </p>
         {!! Form::number('price', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Price by Seats')) !!}
      </div>
      <div class="form-group col-lg-3">
         <p>Select Image: </p>
         {!! Form::file('image', array('required','class'=>'form-control', 'placeholder'=>'Select Seat Image')) !!}
      </div>
      <div>
        '<br></br>
        <br></br>
        <br></br>
        <br></br>
      </div>
      <div class="form-group col-lg-2">
         {!! Form::submit('Add Pricing', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
