@extends('master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>Add Manufacture Company
            <a class="btn btn-success float-right btn-sm" href="{{ route('viewmanufacturercompany') }}"><i class="fa fa-list"></i>Company List</a>
        </h3>
    </div>
    <form id="quickForm" method="POST" action="{{ route('storemanufacturecompany') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="man_com_name">Manufacture Company Name</label>
                    <input type="text" name="man_com_name" class="form-control" id="man_com_name" placeholder="Enter Manufacture Company Name">
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