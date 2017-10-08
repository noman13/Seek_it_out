@extends('layouts.app')
@section('content')

   <div class="panel-heading">Edit payment: {{ $payment->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($payment, array('method'=>'PATCH','action' => ['PaymentsController@update',$payment->id],'files'=>true)) !!}
        
	 <div class="form-group col-lg-4">
         {!! Form::text('verification', null, array('required','class'=>'form-control', 'placeholder'=>'Please verify')) !!}
         </div> 
         <div class="form-group col-lg-4">
         {!! Form::select('transaction_type', ['bKash'=>'bKash','rocket'=>'rocket'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Transaction Type')) !!}
         </div>
         <div class="form-group col-lg-3">
          {!! Form::number('mobile_no', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter mobile no')) !!}
         </div>
         <div class="form-group col-lg-3">
         {!! Form::number('transaction_id', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter transaction id')) !!}
         </div>
         <div class="form-group col-lg-4">
            {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close()!!}
         </div>
   </div>

@endsection
