@extends('master')
@section('content')
<div class="card card-primary">
    <div class="card card-header">
        <h1>View Medicine</h1>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Prescription</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Patient name</th>
                                    <th>Patient Age</th>
                                    <th>Ref Dr Name</th>
                                    <th>Ref dr Details</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ppis as $key => $ppi)
                                <tr>
                                    <td>{{$ppi->pat_name}}</td>
                                    <td>{{$ppi->pat_age}}</td>
                                    <td>{{$ppi->ref_dr_name}}</td>
                                    <td>{{$ppi->ref_dr_details}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
