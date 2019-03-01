<div class="modal fade" id="categoryModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="{{ route('categories.store') }}" method="POST">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm mr-auto" data-toggle="collapse" data-target="#showCategory">Show All Categories <i class="fa fa-caret-down"></i></button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-success">Create category</button>
                </div>
            </form>

            <div class="container-fluid collapse" id="showCategory">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">List of Categories</h2>
                        @if (count($categories) > 0)
                        @foreach ($categories as $category)
                            <li class="list-group-item">{{$category->category_name}}</li>
                        @endforeach
                        @else
                            <ul class="list-group">
                                <li class="list-group-item">No categories found</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



