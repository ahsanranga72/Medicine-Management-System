@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Generic name list
            <a class="btn btn-success float-right btn-sm" href="{{route('addgenericname')}}">
                <i class="fa fa-plus-circle"></i>Add Generic Name</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{Session::get('message')}}
                </div>
                @endif
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($generics as $key => $generic)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$generic->gen_name}}</td>
                    <td>
                    <a href="#" class="btn btn-sm btn-primary" title="edit"><i class="fa fa-edit"></i></a>
                    <a href="#" id="delete" class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tfoot>
        </table>
    </div>
</div>
@endsection