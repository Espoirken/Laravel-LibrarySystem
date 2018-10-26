@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Edit Category</h2>
                    <form action="{{ route('categories.update', ['id' => $categories->id]) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$categories->name}}" class="form-control">
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