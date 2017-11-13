@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="col-sm-9 col-md-offset-0">
        @if (Session::has('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ Session::get('success') }}
        </div>
        @endif
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <p>Enter your Post Title: </p>
                        <input type="text" name="title" class="form-control" placeholder="Enter your post title">
                        @if ($errors->has('title'))
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        <p>Enter your Post: </p>
                        <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Enter your post"></textarea>
                        @if ($errors->has('body'))
                        <small class="text-danger">{{ $errors->first('body') }}</small>
                        @endif
                    </div>
                    
                </select>
            </div>
            <input type="submit" value="Post" class="btn btn-primary" style="max-width: 200px" style="margin-left: 200px">
        </div>
    </div>
</form>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

@foreach ($posts as $post)
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
        Created by {{ $post->user->name}}, {{ $post->title }}
        <div class="pull-right">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('post.show', [$post->id]) }}">Show Post</a></li>
                    <li><a href="{{ route('post.edit', [$post->id]) }}">Edit Post</a></li>
                    <li>
                        <a href="#" onclick="document.getElementById('delete').submit()">Delete Post</a>
                        {!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['post.delete', $post->id]]) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </div>
        </div>
    </h3>
</div>

<div class="panel-footer" data-postid="{{ $post->id }}">
  
  <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-link">Comment</a>
</div>
</div>
@endforeach
</div>
</div>
@endsection
