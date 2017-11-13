@extends('layouts.app2')
@section('content')
<div class="container">
<!--Shows Result-->
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample Restaurant details</h2>
      <div class="table-responsive">
   <table class="table table-bordered ">
<thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Total_seat</th>
                <th>Avail_seat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $restaurant)
            <tr>
                <td>{{$restaurant->title}}</td>
                <td>{{$restaurant->description}}</td>
                <td>{{$restaurant->total_seat}}</td>
                <td>{{$restaurant->avail_seat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>
        
</div>
@endsection