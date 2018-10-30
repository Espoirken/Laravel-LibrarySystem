@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('books.reserve') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-2"><h2 class="card-title">Reserve Book</h2></div>
                    <div class="col-lg-3 offset-lg-6 form-group"> 
                        <label for="users"><h4>Select a student</h4></label>
                        <select class="form-control" id="users" name="users">
                            <option hidden></option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="col-lg-1"><button class="btn btn-sm btn-primary float-right" type="submit"><i class="fa fa-book"></i> Reserve</button></div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ACCESSION</th>
                            <th>TITLE</th>
                            <th>CATEGORY</th>
                            <th>AUTHOR</th>
                            <th>PUBLISHER</th>
                            <th>SOURCE</th>
                            <th>COPYRIGHT</th>
                            <th>DATE ADDED</th>
                            <th>STATUS</th>
                            <th>ADD</th>
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
                            <td>{{$book->publisher_name}}</td>
                            <td>{{$book->source}}</td>
                            <td>{{$book->copyright_year}}</td>
                            <td>{{$book->created_at->timezone('Asia/Singapore')->format('M. d, Y - D  h:i:s A')}}</td>
                            <td>{{$book->status}}</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="books[]" value="{{$book->id}}">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <th colspan="10" class="text-center">No books found</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection