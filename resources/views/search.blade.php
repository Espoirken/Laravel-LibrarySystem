@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
@include('admin.books.detail')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            @include('admin.books.detail')
            <div class="row">
            <div class="col-lg-2"><h2 class="card-title">Results</h2></div>
            <div class="col-lg-6">
            <form class="form-inline" action="{{ route('search.books')}}" method="POST">
                <div class="form-group">
                    @csrf
                    <input type="text" name="search" class="form-control mx-sm-3" style="width:600px" placeholder="Search a book...">
                    <input type="submit" class="btn btn-primary" class="form-control" value="Search">
                </div>
              </form>
            </div>
            <div class="col-lg-1 offset-lg-3"><a href="{{ route('books')}}"  class="btn btn-sm btn-success float-right" style="width:100px"><i class="fa fa-arrow-left"></i> Back</a></div>
            </div>
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
                        {{-- <th>DATE ADDED</th> --}}
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
                        <td> 
                            <a data-toggle="modal" href="#bookDetailModal" 
                            data-id="{{$book->id}}" 
                            data-book_title="{{$book->book_title}}" 
                            data-category_name="{{$book->category->category_name}}" 
                            data-author="{{$book->author}}" 
                            data-publisher_name="{{$book->publisher_name}}" 
                            data-isbn="{{$book->isbn}}" 
                            data-edition="{{$book->edition}}" 
                            data-copyright_year="{{$book->copyright_year}}" 
                            data-source="{{$book->source}}" 
                            data-date_added="{{$book->created_at->timezone('Asia/Singapore')->format('M. d, Y - D  h:i:s A')}}" 
                            data-status="{{$book->status}}" 
                            > 
                            {{$book->book_title}}
                        </td>
                        <td>{{$book->category->category_name}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->publisher_name}}</td>
                        <td>{{$book->copyright_year}}</td>
                        <td>{{$book->source}}</td>
                        {{-- <td>{{$book->created_at->timezone('Asia/Singapore')->format('M. d, Y - D  h:i:s A')}}</td> --}}
                        <td>{{$book->status}}</td>
                        <td><a class="btn btn-sm btn-primary" href="{{ route('books.edit', ['id' => $book->id ])}}"><i class="fa fa-edit"></i> Edit</a></td>
                        <td><a class="btn btn-sm btn-danger" id="deleteBook" data-id="{{$book->id}}" data-title="{{$book->book_title}}" href="{{ route('books.delete', ['id' => $book->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> Trash</a></td>
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