@extends('layouts.singlecolumn')
@section('content')
<div class="container-fluid banner-sec">
    <div class="container">

      <form name="loginform" id="loginform" method="POST" action="{{route('postlogin')}}">
      @csrf
      <div class="row">
        <div class="col-sm-4 login mt-5">
            <h2>Log In</h2>
            <p>Enter your account's web address:</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="emailid" name="emailid"  aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
            <p>Password:</p>
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="password" name="password"  aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
            <p><a href="#">Forgot your account's web address?</a></p>
            <button type="button" class="btn btn-primary" name="login" id="login">Login</button>
        </div>
        <div class="col-sm-8 mr-auto mb-5 imp "><img src="Images/desktop-banner.jpg" class="w-100 mt-4" alt=""/></div>
      </div>
      </form>

    </div>
  </div>
  @section('script')
<script type="text/javascript">
  
      $("#login").click(function(){

        $("#loginform").submit();
      });
 
    
</script>
@stop
@endsection
