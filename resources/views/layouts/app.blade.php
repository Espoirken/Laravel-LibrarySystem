<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    @toastr_js
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    
    <!-- Select 2 searching-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#users').select2({
                placeholder: "Select a user...",
            });
            
        });
        
        $(document).ready(function() {
            $('#books').select2({
                placeholder: "Select a state",
            });
        });
    </script>
    


    <!-- TEST-->
    
    
    <!-- TEST-->


    <!-- Check All checkboxes-->
    <script type="text/javascript">
        function toggle(source) {
           var checkboxes = document.querySelectorAll('input[type="checkbox"]');
           for (var i = 0; i < checkboxes.length; i++) {
               if (checkboxes[i] != source)
                   checkboxes[i].checked = source.checked;
           }
       }
    </script>

    <!-- Search-->
    <script>
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
    </script>

    <!-- Search book-->
    <script>
        function myFunction() {
            // Declare variables 
            var input, filter, table, tr, td, i;
            input = document.getElementById("borrowInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("borrowTable");
            tr = table.getElementsByTagName("tr");
        
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < 1000; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            td1 = tr[i].getElementsByTagName("td")[1];
            td2 = tr[i].getElementsByTagName("td")[2];
            td3 = tr[i].getElementsByTagName("td")[3];
            td4 = tr[i].getElementsByTagName("td")[4];
            td5 = tr[i].getElementsByTagName("td")[5];
            td6 = tr[i].getElementsByTagName("td")[6];
            td7 = tr[i].getElementsByTagName("td")[7];
            td8 = tr[i].getElementsByTagName("td")[8];
            if (td||td1||td2||td3||td4||td5||td6||td7||td8) {
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
                else if (td7.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } 
                else if (td8.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } 
                else {
                tr[i].style.display = "none";
                }
            } 
            }
        }
    </script>

    
    <!-- Book Detail Modal -->
    <script>
            $(function () {
          $('#bookDetailModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var book_title = button.data('book_title'); // Extract info from data-* attributes
            var category_name = button.data('category_name'); // Extract info from data-* attributes
            var author = button.data('author'); // Extract info from data-* attributes
            var publisher_name = button.data('publisher_name'); // Extract info from data-* attributes
            var isbn = button.data('isbn'); // Extract info from data-* attributes
            var edition = button.data('edition'); // Extract info from data-* attributes
            var copyright_year = button.data('copyright_year'); // Extract info from data-* attributes
            var date_added = button.data('date_added'); // Extract info from data-* attributes
            var source = button.data('source'); // Extract info from data-* attributes
            var status = button.data('status'); // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('#id').val(id);
            modal.find('#book_title').val(book_title);
            modal.find('#category_name').val(category_name);
            modal.find('#author').val(author);
            modal.find('#publisher_name').val(publisher_name);
            modal.find('#isbn').val(isbn);
            modal.find('#edition').val(edition);
            modal.find('#copyright_year').val(copyright_year);
            modal.find('#date_added').val(date_added);
            modal.find('#source').val(source);
            modal.find('#status').val(status);
          });
        });
    </script>

    {{-- BOOK DETAIL MODAL END --}}
  

    {{-- SWEET ALERT  DELETE USER--}}
    <script>
        $(document).ready(function(){
            
            $(document).on('click', '#deleteUser', function(e){
                
                var userId = $(this).data('id');
                var name = $(this).data('name');
                SwalDeleteUser(userId, name);
                e.preventDefault();
            });
            
        });
        
        function SwalDeleteUser(userId, name){
            swal({
                title: 'Are you sure?',
                text: userId + ", " + name+" will be deleted permanently!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, trash it!',
                showLoaderOnConfirm: true,
                reverseButtons:true,
                preConfirm: function() {
                  return new Promise(function(resolve) {
                     $.ajax({
                        url: '/admin/users/delete/'+userId,
                        type: 'GET',
                     })
                     .done(function(){
                        swal(
                        'Deleted!',
                        userId + " : " + name+' has been deleted.',
                        'success'
                        )
                        window.setTimeout(function(){location.reload()},700)
                     })
                     .fail(function(){
			     	swal('Oops...', 'Cannot delete the user!', 'error');
			        });
                  });
                },
                allowOutsideClick: false			  
            });	
            
        }
    </script>     
    {{-- SWEET ALERT DELETE USER END--}}

    {{-- SWEET ALERT  DELETE BOOK --}}
    <script>
        $(document).ready(function(){
            
            $(document).on('click', '#deleteBook', function(e){
                
                var bookId = $(this).data('id');
                var bookTitle = $(this).data('title');
                SwalDelete(bookId, bookTitle);
                e.preventDefault();
            });
            
        });
        
        function SwalDelete(bookId, bookTitle){
            
            swal({
                title: 'Are you sure?',
                text: " \"" +bookId + ", "+ bookTitle + "\" will be stored into the weeded books",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, trash it!',
                showLoaderOnConfirm: true,
                reverseButtons:true,
                preConfirm: function() {
                  return new Promise(function(resolve) {
                     $.ajax({
                        url: '/books/delete/'+bookId,
                        type: 'GET',
                     })
                     .done(function(){
                        swal(
                        'Trashed!',
                        bookTitle + ' has been trashed.',
                        'success'
                        )
                        window.setTimeout(function(){location.reload()},700)
                     })
                     .fail(function(){
			     	swal('Oops...', 'Cannot delete the book!', 'error');
			        });
                  });
                },
                allowOutsideClick: false			  
            });	
            
        }
    </script>     
    {{-- SWEET ALERT DELETE END--}}


    {{-- SWEET ALERT RESTORE--}}

    <script>
        $(document).ready(function(){
            
            $(document).on('click', '#restoreBook', function(e){
                
                var bookId = $(this).data('id');
                var bookTitle = $(this).data('title');
                SwalRestore(bookId, bookTitle);
                e.preventDefault();
            });
            
        });
        
        function SwalRestore(bookId, bookTitle){
            
            swal({
                title: 'Are you sure?',
                text: "Do you want to restore a book with the book title of \"" + bookTitle +"\" and Accession Number of " + bookId + "?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#38c172',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, restore it!',
                showLoaderOnConfirm: true,
                reverseButtons:true,
                preConfirm: function() {
                  return new Promise(function(resolve) {
                     $.ajax({
                        url: '/books/restore/'+bookId,
                        type: 'GET',
                     })
                     .done(function(){
                        swal(
                        'Restored!',
                        bookTitle + ' has been restored.',
                        'success'
                        )
                        window.setTimeout(function(){location.reload()},700)
                     })
                     .fail(function(){
			     	swal('Oops...', 'Cannot delete the book!', 'error');
			        });
                  });
                },
                allowOutsideClick: false			  
            });	
        }
    </script>       
    {{-- SWEET ALERT RESTORE END--}}

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @toastr_css
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            <img src=" {{ asset('uploads/default_image/1.jpeg')}}" width="30" height="30" style="margin:10px" class="rounded-circle" alt="avatar"></a>
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('attendance')}}"><i class="fa fa-address-book" aria-hidden="true"></i> Attendances</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-book" aria-hidden="true"></i> Transactions
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('borrow.index') }}"><i class="fa fa-book-open"></i> Borrow Book</a>
                                <a class="dropdown-item" href="{{ route('return.index') }}"><i class="fa fa-undo"></i> Return Book</a>
                                <a class="dropdown-item" href="{{ route('books.reserve') }}"><i class="fas fa-book"></i> Reserve Books</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-book" aria-hidden="true"></i> Books
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('books')}}"><i class="fa fa-book"></i> List of Books</a>
                                <a class="dropdown-item" href="{{ route('books.create')}}"><i class="fa fa-plus"></i> Create a new Book</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('categories.index')}}"><i class="fas fa-list"></i> List of Categories</a>
                                <a class="dropdown-item " data-toggle="modal" data-target="#categoryModal" href="{{ route('categories.create')}}"><i class="fas fa-plus"></i> Create a new Category</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('restore.index')}}"><i class="fa fa-book-dead"></i> Weeded Books</a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-users" aria-hidden="true"></i>  Users
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">  
                                <a class="dropdown-item" href="{{ route('users.index')}}"><i class="fa fa-users"></i> List of Users</a>
                                <a class="dropdown-item" href="{{ route('users.create')}}"><i class="fa fa-plus"></i> Create a new User</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('types.index')}}"><i class="fa fa-user-tag" aria-hidden="true"></i> Types of User</a>
                                <a class="dropdown-item " data-toggle="modal" data-target="#typesModal" href="{{ route('types.create')}}"><i class="fa fa fa-plus"></i> Create a new Type of User</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('year_levels.index')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> List of Year levels</a>
                                <a class="dropdown-item " data-toggle="modal" data-target="#yearLevelModal" href="{{ route('year_levels.create')}}"><i class="fa fa fa-plus"></i> Create a new Year level of User</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('settings')}}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports')}}"><i class="fa fa-chart-bar" aria-hidden="true"></i> Reports</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        <main class="py-4">
            @yield('content')
            {{-- This is the modal --}}
            @include('admin.books.categories.create')
            @include('admin.users.types.create')
            @include('admin.users.year_level.create')
            {{-- End of modal --}}
        </main>
    </div>
    
    @toastr_render
</body>
</html>
