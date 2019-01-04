@extends('layouts.singlecolumn')
@section('content')
<div class="container-fluid banner-sec">
    <div class="container"> <form name="signup" id="signup" method="POST" action="{{route('postsignup')}}">
                @csrf
        <div class="row">

           
            <div class="col-sm-4 login mt-4 check-nb">
              <h2>Welcome to 77.COM</h2>
              <p>We're so glad you're here.Now, tell us a bit about yourself</p>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <div class="input-group mb-3"> <span>
                <input type="text" id="fullname" name="fullname" title="Full Name" value="{{ old('fullname')}}" autocomplete="off" class="form-control"  placeholder="Full Name">
                </span> <span>
                <input type="password" id="password" name="password" title="Password" value="{{ old('password')}}" class="form-control"  placeholder="New Password">
                </span>
                <p><a href="#">Show</a></p>
                <span>
                <input type="text" id="phone" name="phone" title="Phone" class="form-control" maxlength="12"  placeholder="Phone">
                </span>
                <p>We'll only use this to provide immediate support we'll never spam you!</p>
              </div>
              <button type="button" id="next" class="btn btn-primary">Next</button>
            </div>
            
            <div class="col-sm-8 mr-auto mb-5 imp "><img src="{{ asset('images/desktop-banner.jpg')}}" class="w-100 mt-4" alt=""/></div>
          </div>
        </form>
      
    </div>
  </div>
@endsection

@section('script')
<script type="text/javascript">
  $('#next').unbind("click");
    $("#next").click(function()
    {

    $TeamIndustry=$("#TeamIndustry").val();
    $( "#signup" ).submit();
    
    });
 
</script>
@endsection