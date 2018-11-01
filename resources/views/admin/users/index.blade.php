@extends('layouts.app')
@include('inc.header')
@section('content')
@include('inc.messages')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-lg-2"><h2>Users</h2></div>
            <div class="col-lg-6"> <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search..."></div>
            <div class="col-lg-4"><a href="{{ route('users.create')}}" class="btn btn-sm btn-success float-right"><i class="fa fa-user-plus"></i> Create New User</a></div>
        </div>
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" onclick="toggle(this);"></th>
                        <th>STUDENT NUMBER</th>
                        <th>NAME</th>
                        <th>CONTACT</th>
                        <th>ADDRESS</th>
                        <th>TYPE</th>
                        <th>YEAR LEVEL</th>
                        <th>STATUS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- TEST --}}

                    {{-- <div class="infinite-scroll">
                            @foreach($users as $user)
                                <h4 class="media-heading">{{ $user->name }}
                                    <small>{{ $user->created_at->diffForHumans() }}</small>
                                </h4>
                                {{ $user->contact }}
                                <hr>
                            @endforeach
                        
                            {{ $users->links() }}
                        </div> --}}
                        {{-- END --}}
                    @if (count($users)> 0)
                    @foreach ($users as $user)
                        <tr class="header">
                            <td><div class="form-check"><input class="form-check-input" type="checkbox"></div></td>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->type->user_type}}</td>
                            <td>{{$user->year_level->year_level}}</td>
                            <td>{{$user->status}}</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ route('users.edit', ['id' => $user->id])}}"><i class="fa fa-user-edit"></i> Edit</a></td>
                            <td><a class="btn btn-sm btn-danger" onclick="return confirm('Deleting a user will permanently remove it from your system.')" href="{{ route('users.delete', ['id' => $user->id])}}"><i class="fa fa-user-times"></i> Delete</a></td>
                        </tr>
                        
                    @endforeach
                    @else
                        <tr>    
                            <th colspan="10" class="text-center">No records</th>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{$users->links()}}</div>
        </div>
    </div>
</div>
{{-- <script>
    function myFunction() {
        // Declare variables 
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
    
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        td1 = tr[i].getElementsByTagName("td")[1];
        td2 = tr[i].getElementsByTagName("td")[2];
        td3 = tr[i].getElementsByTagName("td")[3];
        td4 = tr[i].getElementsByTagName("td")[4];
        td5 = tr[i].getElementsByTagName("td")[5];
        td6 = tr[i].getElementsByTagName("td")[6];
        if (td||td1||td2||td3||td4||td5||td6) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else if (td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else if (td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else if (td3.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else if (td4.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else if (td5.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else if (td6.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            } 
            else {
            tr[i].style.display = "none";
            }
        } 
        }
    }
</script> --}}

{{-- <script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script> --}}
@endsection