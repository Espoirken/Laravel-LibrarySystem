<div class="modal fade" id="typesModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Type of User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="{{ route('types.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_type">Name</label>
                        <input type="text" name="user_type" class="form-control" placeholder="eg. Librarian, Teacher, Student..." autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm mr-auto" data-toggle="collapse" data-target="#showTypes">Show All Types of User <i class="fa fa-caret-down"></i></button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-success">Create type of user</button>
                </div>
            </form>

            <div class="container-fluid collapse" id="showTypes">
                <div class="card">
                    <div class="card-body">
                        <h4>Type of user</h4>
                        @if (count($types) > 0)
                        @foreach ($types as $type)
                        <ul class="list-group">
                            <li class="list-group-item">{{$type->user_type}}</td>
                        </ul>
                        @endforeach
                        @else
                            <li class="list-group-item text-center">No types of user found</li>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
