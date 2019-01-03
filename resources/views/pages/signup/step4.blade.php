@extends('layouts.singlecolumn')
@section('content')

<div class="container">
    <form name="step3" id="step3" method="POST" action="{{route('poststep3')}}">
        @csrf
        <div class="row">
            <div class="col-sm-4 login mt-6 check-s">
              <h2>Choose your Account url</h2>
              <p>This url will take you directly to your account</p>
              <span><i class="fas fa-check"></i></span>
              <div class="input-group mb-2 check"> <span>
                <div class="input-group ">
                  <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">77.com</button>
                  </div>
                </div>
                </span> </div>
              <div class="custom-control custom-checkbox imp-check mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">I agree to the <a href="#">Terms of Use</a> and<a href="#"> Privacy Policy</a></label>
              </div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">sign up</button>
            </div>
            <div class="col-sm-8 mr-auto mb-5 imp "><img src="{{ asset('images/desktop-banner.jpg')}}" class="w-100 mt-4" alt=""/></div>
          </div>
    </form>
  </div>

@stop
@section('script')
<script type="text/javascript">
  $('#next').unbind("click");
    $("#next").click(function()
    {

    $TeamIndustry=$("#TeamIndustry").val();
    $( "#step3" ).submit();
    
    });
 
</script>
@endsection