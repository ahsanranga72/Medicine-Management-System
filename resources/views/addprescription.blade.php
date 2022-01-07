@extends('master')
@section('content')
<style>
    .required-field {
        color: red;
    }

    ul.dropdown-menu.select-product-list {
        padding: 10px 15px;
        min-width: 20zrem;
    }

    ul.dropdown-menu.select-product-list li {
        margin: 5px 0;
    }

    ul.dropdown-menu.select-product-list li a {
        color: #212529;
    }

    .rcvrow {
        display: none;
    }
</style>
<div class="card card-primary">
    <div class="card card-header">
        <h1>Add Prescription</h1>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
                <form id="medi_form" action="{{ route('storeprescription') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pat_name">Patient Name</label>
                                <input class="form-control" type="text" name="pat_name" id="pat_name" placeholder="Type Patient Name Here" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pat_age">Patient Age</label>
                                <input class="form-control" type="number" name="pat_age" id="pat_age" placeholder="Type Patient Age Here" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ref_dr_name">Ref Dr Name</label>
                                <input class="form-control" type="text" name="ref_dr_name" id="ref_dr_name" placeholder="Type Ref Dr Name Here" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ref_dr_details">Ref Dr Details</label>
                                <input class="form-control" name="ref_dr_details" id="ref_dr_details" placeholder="Type Ref Dr details Here" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <lebel for="medi_name"><b>Select Medicine</b></lebel>
                            <input type="text" name="medi_name" class="form-control" placeholder="Type your medicine name here" id="medi_name">
                            <div id="medi_list">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="tablename">
                                <h3>
                                    Medicine List <span>*</span>
                                </h3>
                            </div>
                            <div class="table">
                                <table id="orderTable" class="table table-bordered table-striped">
                                    <thead>
                                        <th>Medicine Name</th>
                                        <th>Breakfast Notification Time</th>
                                        <th>Lunch Notification Time</th>
                                        <th>Dinner Notification Time</th>
                                    </thead>
                                    <tbody class="tableBody">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-12 text-right">
                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        //Search Medicine
        $('#medi_name').keyup(function() {
            var medi_name = $(this).val();
            if (medi_name != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('medi_list') }}",
                    method: "get",
                    data: {
                        medi_name: medi_name,
                        _token: _token
                    },
                    success: function(data) {
                        $('#medi_list').fadeIn();
                        $('#medi_list').html(data);
                    }
                });
            }
        });

    });


    //add medicine to table
    var count = 0
    $(document).on('click', 'li', function() {
        var medi_id = $(this).attr('data-product')
        var medi_name = $(this).attr('medi-name')
        count++
        $('#medi_list').fadeOut();


        if (medi_id != '') {
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('order_medi') }}",
                method: "get",
                data: {
                    medi_id: medi_id,
                    count: count,
                    _token: _token
                },
                success: function(data) {
                    $('.tableBody').append(data).fadeIn()

                }
            });
        }
    });

    //prescription submit
    $("#medi_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var actionUrl = form.attr('action');
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                alert(data); // show response from the php script.
            }
        });

    });
</script>
@endpush