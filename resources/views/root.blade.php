@extends('welcome')
@section('css')
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
@endsection
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">Search</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" id="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                    </div>
                    <div id="medi_list">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="tablename">
                                <h1>
                                    Medicine Details
                                </h1>
                            </div>
                            <div class="table">
                                <table id="orderTable" class="table table-bordered table-striped">
                                    <thead>
                                        <th>Medicine Name</th>
                                        <th>Medicine Type</th>
                                        <th>Generic Name</th>
                                        <th>Mg</th>
                                        <th>Manufacturer</th>
                                        <th>Price</th>
                                        <th>Indications/Uses</th>
                                        <th>Cautions and Side Effects</th>
                                    </thead>
                                    <tbody class="tableBody">

                                    </tbody>
                                </table>
                            </div>
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
        $('#search').keyup(function() {
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
                url: "{{ route('get_medi_datails_for_home') }}",
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
</script>
@endpush