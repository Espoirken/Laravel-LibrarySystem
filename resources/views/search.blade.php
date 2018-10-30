@extends('layouts.app')
@section('content')


    <input type="text" name="search" placeholder="search here">
    @foreach ($users as $user)
        {{-- {{dd($user->type)}} --}}
        {{$user->type->user_type}}
    @endforeach
@endsection