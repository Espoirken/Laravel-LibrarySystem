@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('books.create')}}" class="btn btn-sm btn-success float-right"><i class="fa fa-plus"></i> Create New Book</a>
            <h2 class="card-title">Books</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ACCESSION</th>
                        <th>TITLE</th>
                        <th>CATEGORY</th>
                        <th>AUTHOR</th>
                        <th>PUBLISHER</th>
                        <th>COPYRIGHT</th>
                        <th>SOURCE</th>
                        <th>DATE ADDED</th>
                        <th>STATUS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($books) > 0)
                    @foreach ($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->book_title}}</td>
                        <td>{{$book->category->category_name}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->source}}</td>
                        <td>{{$book->publisher_name}}</td>
                        <td>{{$book->copyright_year}}</td>
                        <td>{{$book->created_at->timezone('Asia/Singapore')->format('M. d, Y - D  h:i:s A')}}</td>
                        <td>{{$book->status}}</td>
                        <td><a class="btn btn-sm btn-primary" href="{{ route('books.edit', ['id' => $book->id ])}}"><i class="fa fa-edit"></i> Edit</a></td>
                        <td><a class="btn btn-sm btn-danger" href="{{ route('books.delete', ['id' => $book->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <th colspan="10" class="text-center">No books found</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center" >{{$books->links()}}</div> 
    </div>
</div>
@endsection