@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h2>Create a new User</h2></div>
                    <hr>
                    <form action="{{ route('users.update',['id' => $user->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender">
                            <option value="{{$user->gender}}">{{$user->gender}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{$user->address}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" value="{{$user->contact}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type_id">Type</label>
                            <select class="form-control" name="type_id">
                            <option value="{{$user->type_id}}">echo the type here</option>
                            <option value="1">Student</option>
                            <option value="2">Teacher</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year_level">Year Level</label>
                            <input type="text" name="year_level" value="{{$user->year_level}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" value="{{$user->status}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection