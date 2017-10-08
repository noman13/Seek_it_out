@extends('layouts.app')
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">Payments
      <a href="Payments/create">
      <span class="glyphicon glyphicon-plus pull-right"></span>
      </a>
   </div>
   <div class="panel-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table hover">
            <thead>
               <tr>
                 
                  <th>Title</th>
                  <th>Transaction_type</th>
                  <th>Mobile_no</th>
                  <th>Transaction_id</th>
                  <th>Created By</th>
                  <th>Destroy</th>
                  <th>Alter</th>
               </tr>
            </thead>
            <tbody>
               @foreach($payments as $payment)
               <tr>
                  
                  <td>{{$payment->title}}</td>
                  <td>{{$payment->transaction_type}}</td>
                  <td>{{$payment->mobile_no}}</td>
                  <td>{{$payment->transaction_id}}</td>
                  <td>{{$payment->user->name  }}</td>
                  <td>
                     {!! Form::open(['method'=>'DELETE','route'=>['Payments.destroy',$payment->id]]) !!}
                     {!! Form::submit('X',['class'=>'btn btn-danger'])!!}
                     {!! Form::close() !!}
                  </td>
                  <td>
                     <a href="Payments/{{$payment->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
          
        </table>
    
      </div>

</div>
@endsection
