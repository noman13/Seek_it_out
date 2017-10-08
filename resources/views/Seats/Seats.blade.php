@extends('layouts.app')
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">Seats
      <a href="Seats/create">
      <span class="glyphicon glyphicon-plus pull-right"></span>
      </a>
   </div>
   <div class="panel-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table hover">
            <thead>
               <tr>
                  <th>Title</th>
                  <th>Price(per seat)</th>
                  <th>image</th>
                  <th>Created By</th>
                  <th>Delete</th>
                  <th>Edit</th>
               </tr>
            </thead>
            <tbody>
               @foreach($Seats as $seat)
               <tr>
                  <td>{{$seat->title}}</td>
                  <td>{{$seat->price}}</td>
                  <td class="seatThumb"><img class="seatThumb" src="{{$seat->image}}"></td>
                  <td>{{$seat->user->name}}</td>
                  <td>
                     {!! Form::open(['method'=>'DELETE','route'=>['Seats.destroy',$seat->id]]) !!}
                     {!! Form::submit('X',['class'=>'btn btn-danger'])!!}
                     {!! Form::close() !!}
                  </td>
                  <td>
                     <a href="Seats/{{$seat->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
          
        </table>
    
      </div>

</div>
@endsection
