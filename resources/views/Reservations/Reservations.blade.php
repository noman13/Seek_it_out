@extends('layouts.app')
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">Reservations
      <a href="Reservations/create">
      <span class="glyphicon glyphicon-plus pull-right"></span>
      </a>
   </div>
   <div class="panel-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table hover">
            <thead>
               <tr>
                 
                  <th>Title</th>
                  <th>Type</th>
                  <th>Rev_date</th>
                  <th>Rev_time</th>
		  <th>Total Seats</th>
		  <th>Reserved By</th>
                  <th>Cancel</th>
                  <th>Modify</th>
               </tr>
            </thead>
            <tbody>
               @foreach($reservations as $reservation)
               <tr>
                  
                  <td>{{$reservation->title}}</td>
                  <td>{{$reservation->type}}</td>
                  <td>{{$reservation->rev_date}}</td>
                  <td>{{$reservation->rev_time}}</td>
		  <td>{{$reservation->total_seat}}</td>
                  <td>{{$reservation->user->name}}</td>
		
                  <td>
                     {!! Form::open(['method'=>'DELETE','route'=>['Reservations.destroy',$reservation->id]]) !!}
                     {!! Form::submit('X',['class'=>'btn btn-danger'])!!}
                     {!! Form::close() !!}
                  </td>
                  <td>
                     <a href="Reservations/{{$reservation->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
          
        </table>
    
      </div>

</div>
@endsection
