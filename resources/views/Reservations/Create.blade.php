@extends('layouts.app2')
@section('content')

   <div class="panel-heading">Add New Reservation: </div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Reservations.store','files'=>true)) !!}
      <div class="form-group col-lg-4">
         <p>Restaurant Name:</p>
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
      </div>
      <div class="form-group col-lg-4">
         <p>Select Seat Type:</p>
         {!! Form::select('type', ['Window'=>'Window','RoofTop'=>'RoofTop','Center'=>'Center', 'Corner'=>'Corner'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Seat Type')) !!}
      </div>
      <div class="form-group col-lg-4">
         <p>Enter Number of Seats: </p>
         {!! Form::number('total_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Total Seats')) !!}
      </div>
      <div>
        '<br></br>
      </div>
      <div class="form-group col-lg-4">
         <p>Enter Reservation Date: </p>
         {!! Form::text('rev_date', null, array('required','class'=>'form-control', 'placeholder'=>'Reservation Date')) !!}
      </div>
      <div class="form-group col-lg-4">
         <p>Enter Reservation Time: </p>
         {!! Form::text('rev_time', null, array('required','class'=>'form-control', 'placeholder'=>'Reservation Time')) !!}
      </div>
      <div>
        '<br></br>
        <br></br>
        <br></br>
      </div>
      
      <div class="form-group col-lg-2">
         {!! Form::submit('Reserve Now!!', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
