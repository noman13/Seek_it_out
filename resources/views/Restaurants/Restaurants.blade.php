@extends('layouts.app')
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">Restaurants
      <a href="Restaurants/create">
      <span class="glyphicon glyphicon-plus pull-right"></span>
      </a>
   </div>
   <div class="panel-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table hover">
            <thead>
               <tr>
                 
                  <th>Title</th>
                  <th>Description</th>
                  <th>Total_seat</th>
		  <th>avail_seat</th>
                  <th>image</th>
                  <th>Created By</th>
                  <th>Delete</th>
                  <th>Edit</th>
               </tr>
            </thead>
            <tbody>
               @foreach($restaurants as $restaurant)
               <tr>
                  
                  <td>{{$restaurant->title}}</td>
                  <td>{{$restaurant->description}}</td>
                  <td>{{$restaurant->total_seat}}</td>
	          <td>{{$restaurant->avail_seat}}</td>
                  <td class="restaurantThumb"><img class="restaurantThumb" src="{{$restaurant->image}}"></td>
                  <td>{{$restaurant->user->name  }}</td>
                  <td>
                     {!! Form::open(['method'=>'DELETE','route'=>['Restaurants.destroy',$restaurant->id]]) !!}
                     {!! Form::submit('X',['class'=>'btn btn-danger'])!!}
                     {!! Form::close() !!}
                  </td>
                  <td>
                     <a href="Restaurants/{{$restaurant->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
          
        </table>
    
      </div>

</div>
@endsection
