@extends('layouts.app')
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">Categories
      <a href="Categories/create">
      <span class="glyphicon glyphicon-plus pull-right"></span>
      </a>
   </div>
   <div class="panel-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table hover">
            <thead>
               <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>image</th>
                  <th>Created By</th>
                  <th>Delete</th>
                  <th>Edit</th>
               </tr>
            </thead>
            <tbody>
               @foreach($Categories as $category)
               <tr>
                  <td>{{$category->title}}</td>
                  <td>{{$category->category}}</td>
                  <td class="categoryThumb"><img class="categoryThumb" src="{{$category->image}}"></td>
                  <td>{{ $category->user->name }}</td>
                  <td>
                     {!! Form::open(['method'=>'DELETE','route'=>['Categories.destroy',$category->id]]) !!}
                     {!! Form::submit('X',['class'=>'btn btn-danger'])!!}
                     {!! Form::close() !!}
                  </td>
                  <td>
                     <a href="Categories/{{$category->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
          
        </table>
    
      </div>

</div>
@endsection
