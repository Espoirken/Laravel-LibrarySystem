@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Edit Type of User</h2>
                    <form action="{{ route('types.update', ['id' => $types->id]) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PATCH')
                            <div class="form-group">
                                <label for="user_type">Name</label>
                                <input type="text" name="user_type" value="{{$types->user_type}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-sm btn-success" type="submit">Update</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection