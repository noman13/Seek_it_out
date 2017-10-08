@extends('layouts.app')
@section('content')

   <div class="panel-heading">Add Payment</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Payments.store','files'=>true)) !!}
	<div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::select('transaction_type', 
         ['bKash'=>'bKash','rocket'=>'rocket'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Transaction Type')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::number('mobile_no', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter mobile no')) !!}
      </div>
      <div class="form-group col-lg-3">
         {!! Form::text('transaction_id', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter transaction id')) !!}
      </div>
      <div class="form-group col-lg-4">
         {!! Form::submit('Create', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
