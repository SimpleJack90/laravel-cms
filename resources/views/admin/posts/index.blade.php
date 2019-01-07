@extends('layouts.admin');


@section('content')
    <style>
        #editUser:hover{
            color:blue;
            text-decoration: underline;
        }
    </style>
    <h1>Posts:</h1>

    <table class="table table-responsive-sm">

        <thead>
        <tr>
            <th>Id:</th>
            <th>Photo:</th>
            <th>Owner:</th>
            <th>Category:</th>
            <th>Title:</th>
            <th>Body:</th>
            <th>Created:</th>
            <th>Updated:</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img height="50" width="100" src="{{$post->photo_id ? URL::asset($post->photo->file):'https://via.placeholder.com/200x100'}}"></td>
                <td><a id="editUser" href="{{route('posts.edit',$post->id)}}"> {{$post->user->name}}</a></td>
                <td>{{$post->category_id ? $post->category->name:'uncategorized'}}</td>

                <td>{{$post->title}}</td>
                <td>{{str_limit($post->body,10).'...'}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>

            </tr>
            @endforeach

        @endif
        </tbody>
    </table>
    @endsection