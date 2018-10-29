@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a data-toggle="modal" href="#yearLevelModal" class="btn btn-sm btn-success float-right"><i class="fa fa-plus"></i> Create a New Year level of User</a>
            @include('admin.users.year_level.create')
            <h2 class="card-title">Year levels of User</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Year Levels of User</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($year_levels) > 0)
                    @foreach ($year_levels as $year_level)
                    <tr>
                        <td>{{$year_level->year_level}}</td>
                        <td width="100px"><a class="btn btn-sm btn-primary" href="{{ route('year_levels.edit', ['id' => $year_level->id ])}}"><i class="fa fa-edit"></i> Edit</a></td>
                        <td width="100px"><a class="btn btn-sm btn-danger" href="{{ route('year_levels.delete', ['id' => $year_level->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <th colspan="10" class="text-center">No Year Levels of user found</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center sticky-bottom" >{{$year_levels->links()}}</div> 
    </div>
</div>
@endsection