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
                    <form action="{{ route('books.update', ['id' => $book->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="book_title">Book Title</label>
                            <input type="text" name="book_title" value="{{$book->book_title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                @if ($book->category->id == $category->id)
                                <option value="{{$category->id}}" selected>{{$category->category_name}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" value="{{$book->author}}" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" value="{{$book->source}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="publisher_name">Publisher Name</label>
                            <input type="text" name="publisher_name" value="{{$book->publisher_name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="copyright_year">Copyright Year</label>
                            <input type="text" name="copyright_year" value="{{$book->copyright_year}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                            @if ($book->status == )
                                
                            @endif
                            <option value="{{$book->status}}">{{$book->status}}</option>
                            <option value="Available">Available</option>
                            <option value="Inactive">Borrowed</option>
                            <option value="Weeded">Weeded</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection