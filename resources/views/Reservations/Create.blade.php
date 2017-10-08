@extends('layouts.app')
@section('content')

   <div class="panel-heading">Add new reservation</div>
   <div class="panel-body">
      {!! Form::open(array('route' => 'Reservations.store','files'=>true)) !!}
      <div class="form-group col-lg-4">
         {!! Form::text('title', null, array('required','class'=>'form-control', 'placeholder'=>'Restaurant Title')) !!}
      </div>
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
         {!! Form::submit('Reserve', array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close()!!}
   </div>

@endsection
