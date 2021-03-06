@extends('layouts.blog-post')




@section('content')

    <!-- Blog Post -->

    <!-- Title -->
    <h1 style="color:#662d1c;">{{$post->title}}</h1>


    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted
        <a href="#" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="{{$post->created_at}}">
            {{$post->created_at->diffForHumans()}}
        </a>
        </p>

    <hr>

    <!-- Preview Image -->
    <img width="700" height="300" class="img-responsive" src="{{URL::asset($post->photo->file)}}" alt="">

    <hr>

    <!-- Post Content -->
    <p style="color:black;" class="lead">{{$post->body}}</p>

    <hr>

    @if(Session::has('comment_message'))

        {{session('comment_message')}}

        @endif
    <!-- Blog Comments -->

    <!-- Comments Form -->
    @if(Auth::check())
        <div class="well">
            <h4 style="color:#662d1c;" >Leave a Comment:</h4>

            {!! Form::open(['method'=>'POST','action'=>'PostCommentsController@createComment']) !!}

            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
                {!! Form::label('body','Text:',['style'=>'color:#662d1c;']) !!}
                {!! Form::textarea('body',null,['class'=>'form-control','row'=>3]) !!}
            </div>
            <br>
            <br>
            <div class="form-group">
                {!! Form::submit('Submit',['class'=>'btn','style'=>'background-color:#662d1c; color:#fff; border-color:#662d1c;']) !!}
            </div>


            {!! Form::close() !!}
        </div>
        @else
        <p><a style="color:blue;" href="{{route('login')}}">Log</a> in to leave comment or <a style="color:blue;" href="{{route('register')}}">Sign up</a> </p>
    @endif

    <hr>

    <!-- Posted Comments -->

    @if(count($comments)>0)
        @php($i=1)
    @foreach($comments as $comment)
    <!-- Comment -->

    <div class="media">
        <a class="pull-left" href="#">
            <img height="64" width="64" class="media-object" src="{{URL::asset($comment->photo)}}" alt="">

        </a>



        <div class="media-body">
            <h4 class="media-heading">by {{$comment->author}}
                <small>&nbsp;&nbsp;&nbsp;Posted {{$comment->created_at->diffForHumans()}}</small>
            </h4>
            @if(Auth::check())
            <button style="background-color:#662d1c; color:#fff;border-color:#662d1c;" class="toggle-reply btn btn-primary float-right" id="{{$i}}">Reply</button>
            @endif
            <p style="color:black;">{{$comment->body}}</p>


            @if(Session::has('reply_message'))

                {{session('reply_message')}}

            @endif

            <!-- Nested Comments-->
            @if(count($comment->replies)>0 )

                @foreach($comment->replies as $reply)
                    @if($reply->is_active==1)
                    <div class="comment-reply-container">
            <hr>


            <div class="media">
                <a class="pull-left" href="#">
                    <img height="64" width="64" class="media-object" src="{{URL::asset($reply->photo)}}" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">by {{$reply->author}}
                        <small>&nbsp;&nbsp;&nbsp;Posted {{$reply->created_at->diffForHumans()}}</small>
                    </h4>
                    <p style="color:black;">{{$reply->body}}</p>

                </div>
                <br>

            </div>
                    </div>
                    @endif
                        @endforeach
                        @endif

                      {!!   '<div  class="comment-reply" hidden id="commentId'.$i++.'">'  !!}

            {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@createReply']) !!}

            <input type="hidden" name="comment_id" value="{{$comment->id}}">

            <div class="form-group">
                {!! Form::label('body','Text:',['style'=>'color:#662d1c;']) !!}
                {!! Form::textarea('body',null,['class'=>'form-control','rows'=>2]) !!}
            </div>
            <br>
            <br>
            <div class="form-group">
                {!! Form::submit('Submit',['class'=>'btn','style'=>'background-color:#662d1c; color:#fff;']) !!}
            </div>


            {!! Form::close() !!}
                  {!!   '</div>'  !!}



        <!-- Nested Comments-->
        </div>
    </div>
        <hr>
    @endforeach
    @endif

    <!-- Comment -->

    @endsection

    @section('sidebarCategory')
        <h4 style="color:#662d1c;">Post Category</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">

                    <li><a href="#">{{$post->category->name}}</a>


                </ul>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
        @endsection

@section('scripts')
    <script>

        $(document).ready(function(){

            $('[data-toggle="tooltip"]').tooltip({

            });

            $(".toggle-reply").click(function(){
                var id = $(this).attr('id');
                if($('#commentId'+id).attr("hidden")) {
                    $('#commentId'+id).attr("hidden",false);
                }else{
                    $('#commentId'+id).attr("hidden",true);
                }
            });
        })


    </script>
    @endsection