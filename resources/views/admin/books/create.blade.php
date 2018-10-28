@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('books')}}" class="btn btn-sm btn-primary float-right"><i class="fa fa-search"></i> Show all books</a>
                    <div class="card-title"><h2>Create a new book</h2></div>
                    <hr>
                    <form action="{{ route('books.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="book_title">Book Title</label>
                            <input type="text" name="book_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach ($books as $book)
                                <option value="" hidden></option>
                                <option value="{{$book->category->id}}">{{$book->category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="publisher_name">Publisher Name</label>
                            <input type="text" name="publisher_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="copyright_year">Copyright Year</label>
                            <input type="text" name="copyright_year" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="Active">Active</option>
                                    <option value="Active">Inactive</option>
                                    <option value="Disabled">Disabled</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Add book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection