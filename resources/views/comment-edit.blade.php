@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="col-sm-6 col-sm-offset-3">
        @if (Session::has('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ Session::get('success') }}
        </div>
        @endif
        {!! Form::model($comment, ['method' => 'PUT', 'files' => true, 'route' => ['comment.update', $comment->id]]) !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    {{ Form::text('comment', null, ['class' => 'form-control', 'placeholder' => 'Enter your comment']) }}
                    @if ($errors->has('comment'))
                    <small class="text-danger">{{ $errors->first('comment') }}</small>
                    @endif
                </div>
                
                <input type="submit" value="Post" class="btn btn-primary btn-block">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
