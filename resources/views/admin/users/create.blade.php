@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
@include('inc.types')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('users.index')}}" class="btn btn-sm btn-primary float-right"><i class="fa fa-search"></i> Show all users</a>
                    <div class="card-title"><h2>Create a new User</h2></div>
                    <hr>
                    <form action="{{ route('users.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender">
                            <option value="Male" hidden></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type_id">Type</label>
                            <select id="mySelect" onChange="check(this)" class="form-control" name="type_id">
                            <option value="" hidden></option>
                            <option value="1">Student</option>
                            <option value="2">Teacher</option>
                            <option value="3">Librarian</option>
                            <option value="4">Faculty Member</option>
                            <option value="5">Staff</option>
                            <option value="6">Others</option>
                            </select>
                        </div>
                        <div class="form-group" id="other-div" style="display:none;">
                            <label for="year_level">Year Level</label>
                            <select  id="otherName" class="form-control" name="year_level">
                                @foreach ($year_levels as $year_level)
                                <option value="{{$year_level->year_level}}">{{$year_level->year_level}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                            <option value="Active">Active</option>
                            <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection