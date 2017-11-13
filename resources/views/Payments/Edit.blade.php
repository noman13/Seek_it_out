@extends('layouts.app')
@section('content')

   <div class="panel-heading">Edit payment: {{ $payment->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($payment, array('method'=>'PATCH','action' => ['PaymentsController@update',$payment->id],'files'=>true)) !!}
        
	 <div class="form-group col-lg-4">
      <p>Change Restaurent: </p>
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
         </div> 
         <div class="form-group col-lg-4">
            <p>change Transection Type: </p>
         {!! Form::select('transaction_type', ['bKash'=>'bKash','rocket'=>'rocket'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Transaction Type')) !!}
         </div>
         <div class="form-group col-lg-4">
            <p>Change Mobile Number: </p>
          {!! Form::number('mobile_no', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter mobile no')) !!}
         </div>
         <div class="form-group col-lg-4">
            <p>Change TrxID : </p>
         {!! Form::text('transaction_id', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Enter transaction id')) !!}
         </div>
      <div>
        '<br></br>
        <br></br>
        <br></br>
      </div>

         <div class="form-group col-lg-3">
            {!! Form::submit('Update Payment', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close()!!}
         </div>
   </div>

@endsection
