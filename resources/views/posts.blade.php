@extends('layouts.blog-home')

@section('custom-styles')
    <style>



    </style>
    @endsection

@section('content')
    <!-- First Blog Post -->

    @if(count($posts)>0)
        @foreach($posts as $post)


    <h2 style="color:#662d1c;">
        <a href="{{route('home.post',$post->id)}}" target="_blank">{{$post->title}}</a>
    </h2>
    <p style="color:black;"  class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>
    <p>Posted<a href="#" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="{{$post->created_at}}">
            {{$post->created_at->diffForHumans()}}
        </a>
        </p>
    <hr>
    <img width="900" height="300" class="img-responsive" src="{{URL::asset($post->photo->file)}}" alt="">
    <hr>
    <p style="color:black;">{{str_limit($post->body,40)}}</p>
    <hr>
    <a class="btn " style="background-color: #662d1c; border-color:#662d1c; color:#fff;" target="_blank" href="{{route('home.post',$post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>

    @endforeach
        @else
        <h1>No posts to show</h1>

    @endif

    <div  class="row">
        <div  class="col-sm-6 offset-sm-5">{{$posts->render()}}</div>

    </div>




    @endsection

@section('search')
    <div style="border-color: #662D1C;" class="well">
        <h4 style="color:#662d1c;" >Search Posts:</h4>
        <div class="input-group">
            <input style="border-color: #662D1C;" type="text" class="form-control">
            <span class="input-group-btn">
                            <button style="border-color: #662D1C;background-color: #662D1C;" class="btn btn-default" type="button">
                                <span style="color:#fff;"  class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </div>
        <!-- /.input-group -->
    </div>
@endsection

@section('categories')
    <div style="border-color: #662D1C;" class="well">
        <h4 style="color:#662d1c;" >Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                    <li><a  href="#">{{$category->name}}</a>
                    </li>
                        @endforeach

                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">

            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('scripts')
    <script>



        $(document).ready(function(){

            setTimeout($(".pagination").css({'color':'white','background-color':'#662d1c','border-color':'#662d1c'}),1000);

            $('[data-toggle="tooltip"]').tooltip({

            });


        })
    </script>
    @endsection
@section('sidebar')
    <div style="border-color: #662D1C;" class="well">
        <h4 style="color:#662d1c;" >Recent Posts</h4>
        <p style="color:#662d1c;" >Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder
            Place Holder Place Holder Place HolderPlace Holder Place Holder Place HolderPlace Holder Place Holder Place Holder
            Place Holder Place Holder Place HolderPlace Holder Place Holder Place HolderPlace Holder Place Holder Place Holder</p>
    </div>
@endsection


