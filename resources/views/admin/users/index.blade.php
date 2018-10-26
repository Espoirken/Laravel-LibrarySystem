@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card" style="height:38em">
        <div class="card-body">
        <div class="row">
            <div class="col-lg-2"><h2>Users</h2></div>
            <div class="col-lg-6"> <input type="text" class="form-control"></div>
            <div class="col-lg-2"><h2>End</h2></div>
        </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Year level</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users)> 0)
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->year_level}}</td>
                            <td>{{$user->type_id}}</td>
                            <td>{{$user->status}}</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ route('users.edit', ['id' => $user->id])}}"><i class="fa fa-user-edit"></i> Edit</a></td>
                            <td><a class="btn btn-sm btn-danger" href="{{ route('users.delete', ['id' => $user->id])}}"><i class="fa fa-user-times"></i> Delete</a></td>
                        </tr>
                    @endforeach
                    @else
                        <tr>    
                            <th colspan="10" class="text-center">No records</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">{{$users->links()}}</div>
    </div>
</div>
@endsection