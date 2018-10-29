<div class="modal fade" id="yearLevelModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Year level of User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="{{ route('year_levels.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="year_level">Name</label>
                        <input type="text" name="year_level" class="form-control" placeholder="eg. First Year, Second Year, Third Year..." autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm mr-auto" data-toggle="collapse" data-target="#showYearLevel">Show All Year Level <i class="fa fa-caret-down"></i></button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-success">Create year level of user</button>
                </div>
            </form>

            <div class="container-fluid collapse" id="showYearLevel">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">List of year levels</h5>
                        @if (count($year_levels) > 0)
                        @foreach ($year_levels as $year_level)
                        <ul class="list-group">
                            <li class="list-group-item">{{$year_level->year_level}}</li>
                        </ul>
                        @endforeach
                        @else
                            <li class="list-group-item text-center">No Year Levels of user found</li>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



