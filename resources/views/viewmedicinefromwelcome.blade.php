@extends('welcome')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
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
                        <h3 class="card-title">Sort by Medicine Name</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Serial no.</th>
                                    <th>Medicine Name</th>
                                    <th>Medicine Type</th>
                                    <th>Generic Name</th>
                                    <th>Mg</th>
                                    <th>Manufacturer</th>
                                    <th>Price</th>
                                    <th>Indications/Uses</th>
                                    <th>Cautions and Side Effects</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($meds as $key => $med)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$med->medi_name}}</td>
                                    <td>{{$med->medi_type}}</td>
                                    <td>{{$med->gen_name}}</td>
                                    <td>{{$med->mg}}</td>
                                    <td>{{$med->manufacturer}}</td>
                                    <td>{{$med->price}}</td>
                                    <td>{{$med->uses}}</td>
                                    <td>{{$med->caution}}</td>
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
@push('js')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}')}}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endpush
