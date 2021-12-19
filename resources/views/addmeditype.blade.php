@extends('master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>Add Medicine Type
            <a class="btn btn-success float-right btn-sm" href="{{ route('viewmeditype') }}"><i class="fa fa-list"></i>Medicine Type List</a>
        </h3>
    </div>
    <form id="quickForm" method="POST" action="{{ route('storemeditype') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="mtype_name">Medicine Type</label>
                    <input type="text" name="mtype_name" class="form-control" id="mtype_name" placeholder="Enter Medicine Type Here">
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