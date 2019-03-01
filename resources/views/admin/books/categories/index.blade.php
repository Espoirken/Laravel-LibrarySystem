@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a data-toggle="modal" href="#categoryModal" class="btn btn-sm btn-success float-right"><i class="fa fa-plus"></i> Create New Category</a>
            @include('admin.books.categories.create')
            <h2 class="card-title">Categories</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($categories) > 0)
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->category_name}}</td>
                        <td width="100px"><a class="btn btn-sm btn-primary" href="{{ route('categories.edit', ['id' => $category->id ])}}"><i class="fa fa-edit"></i> Edit</a></td>
                        <td width="100px"><a class="btn btn-sm btn-danger" href="{{ route('categories.delete', ['id' => $category->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <th colspan="10" class="text-center">No categories found</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center sticky-bottom" >{{$categories->links()}}</div> 
    </div>
</div>
@endsection