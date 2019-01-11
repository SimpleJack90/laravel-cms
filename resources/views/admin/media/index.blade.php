@extends('layouts.admin');

@section('content')

    @if($photos)
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
            <th></th>


        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
        <tr>
            <td>{{$photo->id}}</td>
            <td><img height="50" width="100" src="{{$photo->file ? URL::asset($photo->file):'https://via.placeholder.com/200x100'}}"></td>
            <td>{{$photo->created_at?$photo->created_at->diffForHumans():'no date'}}</td>
            <td>
                {!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!}
                    <div class="form-group">
                    {!! Form::submit('Delete ',['class'=>'btn btn-danger'])!!}
                    </div>
                {!! Form::close() !!}


            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    @endif
    @endsection