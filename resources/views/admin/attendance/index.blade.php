@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h2>Attendance</h2></div>
                    <hr>
                    <form action="{{ route('attendance.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name"><h4>Students</h4></label>
                            <select class="form-control" id="users" name="name">
                                @foreach ($users as $user)
                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($attendances)>0)
                    @foreach ($attendances as $attendance)
                        <tr>
                            <td>{{$attendance->name}}</td>
                            <td>{{$attendance->created_at->toFormattedDateString()}}</td>
                            <td>{{$attendance->created_at->timezone('Asia/Singapore')->format('h:i:s A')}}</td>
                        </tr>
                    @endforeach
                    @else
                        <tr>    
                            <th colspan="5" class="text-center">No records</th>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-center" >{{$attendances->links()}}</div> 
        </div>
    </div>
    
</div>
@endsection