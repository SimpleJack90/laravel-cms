@extends('layouts.admin');


@section('content')




    @if(count($replies)>0)
        <h1>Comments</h1>

        <table class="table table-responsive-sm">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Content</th>
                <th>View Parent Comment:</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            {{--@php($i=1)--}}

            @foreach($replies as $reply)

                <tr>
                    <td>{{$reply->id}}</td>
                    <td>{{$reply->author}}</td>
                    <td>{{$reply->email}}</td>
                    <td>{{$reply->body}}</td>
                    <td><a href="{{route('home.post',$reply->comment->post->id)}}"
                           target="_blank">{{$reply->comment->body}}</a></td>
                    <td>
                        @if($reply->is_active==1)
                            {!! Form::open(['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}

                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">
                                {!! Form::submit('Un-approve',['class'=>'btn btn-warning']) !!}
                            </div>
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}

                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::submit('Approve',['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>

                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['CommentRepliesController@destroy',$reply->id]]) !!}


                        <div class="form-group">
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}

                    </td>
                    {{--<td>--}}
                        {{--{!! '<div style="width:30px;height:40px;background-color:red;" id="commentId'.$i++.'"></div>' !!}--}}


                    {{--</td>--}}
                </tr>

            @endforeach

            </tbody>
        </table>
    @else
        <h1 class="text-center">No  replies:</h1>

    @endif

    <div class="row">
        <div  class="col-sm-6 offset-sm-5">{{$replies->render()}}</div>

    </div>
@endsection