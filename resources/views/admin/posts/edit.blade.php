@extends('layouts.admin');


@section('content')

    <h1>Edit Post:</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">

                <img style="width:400px;height: 400px;" src="{{$post->photo ? URL::asset($post->photo->file):'https://via.placeholder.com/200x100'}}" alt="Post Photo" class="img-thumbnail img-responsive ">
            </div>
            <div class="col-sm-9">

        {!!  Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true])!!}
        <div class="form-group">
            {!! Form::label('title','Title:')!!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','Category:')!!}
            {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id',['class'=>'form-control ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body','Content:')!!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Post',['class'=>'btn btn-danger  ']) !!}
        </div>

        {!! Form::close() !!}
            </div>
        </div>

    </div>
    @include('includes.form_error')
@endsection