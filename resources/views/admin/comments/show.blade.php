@extends('layouts.admin');


@section('content')



    @if(count($comments)>0)
        <h1>Comments</h1>

        <table class="table table-responsive-sm">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Content</th>
                <th>Post</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td><a href="{{route('home.post',$comment->post->id)}}"
                           target="_blank">View Post:{{$comment->post->title}}</a></td>
                    <td>
                        @if($comment->is_active==1)
                            {!! Form::open(['method'=>'PATCH','action'=>['PostCommentsController@update',$comment->id]]) !!}

                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">
                                {!! Form::submit('Un-approve',['class'=>'btn btn-warning']) !!}
                            </div>
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['method'=>'PATCH','action'=>['PostCommentsController@update',$comment->id]]) !!}

                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::submit('Approve',['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>

                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@destroy',$comment->id]]) !!}


                        <div class="form-group">
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}

                    </td>

                </tr>

            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div  class="col-sm-6 offset-sm-5">{{$comments->render()}}</div>

        </div>
    @else
        <h1 class="text-center">No  comments:</h1>

    @endif
@endsection