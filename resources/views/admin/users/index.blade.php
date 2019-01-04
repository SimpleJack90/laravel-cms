@extends('layouts.admin');




@section('content')
<style>
    #editUser:hover{
        color:blue;
        text-decoration: underline;
    }
</style>

@if(Session::has('deleted_user'))

    <p >{{session('deleted_user')}}</p>

@endif
@if(Session::has('updated_user'))
    <p >{{session('updated_user')}}</p>
    @endif
@if(Session::has('created_user'))
    <p >{{session('created_user')}}</p>
@endif

<h1>Users</h1>



    <table class="table  table-responsive-sm  ">
        <thead>
        <tr>
            <th>Id:</th>
            <th>Photo:</th>
            <th>Name:</th>
            <th>Email:</th>
            <th>Role:</th>
            <th>Status:</th>
            <th>Created:</th>
            <th>Updated:</th>
        </tr>
        </thead>

        <tbody>
        @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo?URL::asset($user->photo->file):'https://via.placeholder.com/200x100'}}"></td>
            <td><a id="editUser" href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td> {{$user->is_active==1 ? 'Active':'Not Active'}} </td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>

        @endforeach

        @endif

        </tbody>
    </table>
@endsection