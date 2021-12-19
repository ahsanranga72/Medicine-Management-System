@extends('master')
@section('content')
<div class="card card-primary">
    <div class="card card-header">
        <h1>Add Medicine</h1>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
                <form id="medi_form" action="{{ route('storemedicine') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="medi_name">Medicine Name</label>
                                <input class="form-control" type="text" name="medi_name" id="medi_name" placeholder="Type Medicine Name Here" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="medi_type">Medicine Type</label>
                                <select name="medi_type" id="medi_type" class="form-control select2" style="width: 100%;">
                                    <option value="" selected>--Select a Medicine Type--</option>
                                    @foreach($types as $type)
                                    <option value="{{$type->mtype_name}}">{{$type->mtype_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gen_name">Generic Name</label>
                                <select name="gen_name" id="gen_name" class="form-control" style="width: 100%;">
                                    <option value="">--Select a Generic Name--</option>
                                    @foreach($generics as $generic)
                                    <option value="{{$generic->gen_name}}">{{$generic->gen_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="mg">Mg</label>
                                <input class="form-control" type="text" name="mg" id="mg" placeholder="Type Mg Here" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="manufacturer">Manufacturer</label>
                                <select name="manufacturer" id="manufacturer" class="form-control" style="width: 100%;">
                                    <option value="">--Select a Manufacturer--</option>
                                    @foreach($manufacturers as $manufacturer)
                                    <option value="{{$manufacturer->man_com_name}}">{{$manufacturer->man_com_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control" type="text" name="price" id="price" placeholder="Type price Here(in taka per piece)" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="uses">Indication/Uses</label>
                                <textarea class="form-control" name="uses" id="uses" cols="5" rows="3" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="caution">Caution and Side Effects</label>
                                <textarea class="form-control" name="caution" id="caution" cols="5" rows="3" style="width: 100%;"></textarea>
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