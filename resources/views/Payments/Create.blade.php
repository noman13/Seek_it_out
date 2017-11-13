@extends('layouts.app2')
@section('content')

   <div class="panel-heading">Add Your Payments Here: </div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Payments.store','files'=>true)) !!}
	<div class="form-group col-lg-4">
      <p>Please verify</p>
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Enter your Verification Code Here')) !!}
      </div>
      <div class="form-group col-lg-4">
         <p>Enter Restaurant Name: </p>
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-4">
         <p>Enter Transection Type: </p>
         {!! Form::select('transaction_type', 
         ['bKash'=>'bKash','rocket'=>'rocket'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Transaction Type')) !!}
      </div>
      <div class="form-group col-lg-3">
         <p>Enter Your Mobile Number Here: </p>
         {!! Form::number('mobile_no', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter mobile no')) !!}
      </div>
      <div class="form-group col-lg-3">
         <p>Enter Transaction ID: </p>
         {!! Form::text('transaction_id', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter transaction id')) !!}
      </div>
       <div>
        '<br></br>
        <br></br>
        <br></br>
      </div>
      <div class="form-group col-lg-2">
         {!! Form::submit('Add Payment Now!', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
