@extends('master')
<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .hero-image {
        background-image: url("/dist/img/boxed-bg.png");
        background-color: #cccccc;
        height: 600px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: Black;
    }
</style>
@section('content')
@if(Session::has('message'))
<div class="alert alert-success" role="alert">
  {{Session::get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="hero-image">
    <div class="hero-text">
        <div class="wraper">
            <div class="callout callout-info">
                <h1>
                    AS CANDIDATE CREATE YOUR CV & APPLY FOR JOBS
                    <br>
                    AS EMPLOYEE CREATE & MANAGE JOBS
                </h1>
            </div>
        </div>
    </div>
</div>
@endsection