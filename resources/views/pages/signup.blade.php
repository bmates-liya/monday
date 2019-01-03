@extends('layouts.singlecolumn')
@section('content')
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        Verification code
    </div>
  </div>
<div class="container-fluid banner-sec">
    <div class="container">
      <div class="row">
      <div class="col-12 mt-5">
      <h2 class="text-center">Hi there :)</h2>
      <p class="text-center mt-3">Welcome to 77.com<br/>
  What would you like to do?</p>
      </div>
      <div class="col-12">
      <div class="col-sm-6 float-left signup">
      <p class="text-center"><i class="fas fa-plus-circle"></i><a href="#">Create a new account</a>
  </p>
      </div>
      <div class="col-sm-6 float-left signup" >
      
        <p class="text-center"><i class="fas fa-arrow-circle-right"></i><a href="#">Join an existing account</a></p>
      </div>
      
      </div>
      
      </div>
    </div>
  </div>
  @endsection