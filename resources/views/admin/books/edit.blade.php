@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h2>Create a new book</h2></div>
                    <hr>
                    <form action="{{ route('books.update', ['id' => $books->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="book_title">Book Title</label>
                            <input type="text" name="book_title" value="{{$books->book_title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id">
                            <option value="1">1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" value="{{$books->author}}" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" value="{{$books->source}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="publisher_name">Publisher Name</label>
                            <input type="text" name="publisher_name" value="{{$books->publisher_name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="copyright_year">Copyright Year</label>
                            <input type="text" name="copyright_year" value="{{$books->copyright_year}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Status</label>
                            <select class="form-control" name="category_id">
                            <option value="{{$books->status}}">{{$books->status}}</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="disabled">Disabled</option>
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