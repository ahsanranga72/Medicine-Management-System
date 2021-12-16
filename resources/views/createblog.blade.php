@extends ('master')
<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
@section('content')
@if(Session::has('message'))
<div class="alert alert-success" role="alert">
  {{Session::get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card card-primary">
  <div class="card-header">
    <h3>Create Blog
      <a class="btn btn-success float-right btn-sm" href="#"><i class="fa fa-list"></i>My Blogs</a>
    </h3>
  </div>
  <form id="quickForm" method="POST" action="#">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Write here</label>
          <textarea class="form-control" name="blog" id="blog" cols="30" rows="10" placeholder="Enter your thought"></textarea>
          <font style="color: red">
            {{($errors->has('name'))?($errors->first('name')):''}}
          </font>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<script>

</script>
@endsection