@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a data-toggle="modal" href="#typesModal" class="btn btn-sm btn-success float-right"><i class="fa fa-plus"></i> Create a New Type of User</a>
            @include('admin.users.types.create')
            <h2 class="card-title">Types of User</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($types) > 0)
                    @foreach ($types as $type)
                    <tr>
                        <td>{{$type->user_type}}</td>
                        <td width="100px"><a class="btn btn-sm btn-primary" href="{{ route('types.edit', ['id' => $type->id ])}}"><i class="fa fa-edit"></i> Edit</a></td>
                        <td width="100px"><a class="btn btn-sm btn-danger" href="{{ route('types.delete', ['id' => $type->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <th colspan="10" class="text-center">No types of user found</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center sticky-bottom" >{{$types->links()}}</div> 
    </div>
</div>
@endsection