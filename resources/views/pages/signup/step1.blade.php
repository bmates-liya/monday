@extends('layouts.singlecolumn')
@section('content')
<div class="container-fluid banner-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 login mt-6">
          <h2>Log In</h2>
          <p>Enter your account's web address:</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">77.com</button>
            </div>
          </div>
          <p><a href="#">Forgot your account's web address?</a></p>
          <button type="button" class="btn btn-primary">Login</button>
        </div>
        <div class="col-sm-8 mr-auto mb-5 imp "><img src="{{ asset('images/desktop-banner.jpg')}}" class="w-100 mt-4" alt=""/></div>
      </div>
    </div>
  </div>
@endsection