@extends('layouts.app')
@section('content')

   <div class="panel-heading">Edit reservation: {{ $reservation->title }}</div>
   <div class="panel-body">
      <div class="col-lg-8">
         {!! Form::model($reservation, array('method'=>'PATCH','action' => ['ReservationsController@update',$reservation->id],'files'=>true)) !!}
        <div class="form-group col-lg-4">
         {!! Form::select('type', ['Window'=>'Window','RoofTop'=>'RoofTop','Center'=>'Center', 'Corner'=>'Corner'], null, array('required','class'=>'form-control', 'placeholder'=>'Select Seat Type')) !!}
        </div>
	<div class="form-group col-lg-12">
         {!! Form::text('rev_date', null, array('required','class'=>'form-control', 'placeholder'=>'Reservation Date')) !!}
        </div>
        <div class="form-group col-lg-12">
         {!! Form::text('rev_time', null, array('required','class'=>'form-control', 'placeholder'=>'Reservation Time')) !!}
        </div>
	<div class="form-group col-lg-3">
         {!! Form::number('total_seat', null, array('required','step'=>'any','class'=>'form-control', 'placeholder'=>'Total Seats')) !!}
      </div>
        <div class="form-group col-lg-4">
            {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
        </div>
         {!! Form::close()!!}
        </div>
   </div>

@endsection
