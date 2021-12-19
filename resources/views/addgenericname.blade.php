@extends('master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>Add Generic Name
            <a class="btn btn-success float-right btn-sm" href="{{ route('viewgenericname') }}"><i class="fa fa-list"></i>Generic Name List</a>
        </h3>
    </div>
    <form id="quickForm" method="POST" action="{{ route('storegenericname') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="gen_name">Generic Name</label>
                    <input type="text" name="gen_name" class="form-control" id="gen_name" placeholder="Enter Generic Name Here">
                </div>
            </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection