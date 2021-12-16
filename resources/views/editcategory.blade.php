@extends('master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>Add Category
            <a class="btn btn-success float-right btn-sm" href="{{route('viewcategory')}}"><i class="fa fa-list"></i>Category List</a>
        </h3>
    </div>
    <form id="quickForm" method="POST" action="{{route('updatecategory', $category['id'])}}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$category['name']}}" placeholder="Enter Category name">
                    <font style="color: red">
                        {{($errors->has('name'))?($errors->first('name')):''}}
                    </font>
                </div>
            </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection