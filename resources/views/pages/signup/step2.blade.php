@extends('layouts.singlecolumn')
@section('content')

<div class="container-fluid banner-sec">
    <div class="container">
      <form name="step2" id="step2" method="POST" action="{{route('poststep2')}}">
          @csrf
        
      <div class="row">
        <div class="col-sm-4 login mt-4 check-nb">
          <h2 style="font-size:30px;">Tell us about your team</h2>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif
          <div id="members" class="input-group mb-3">
            <span><input type="text" id="teamname" name="teamname" class="form-control" value="{{old('teamname')}}" placeholder="Your Team Name"></span>
          
            <p style="font-size:12px;">Give your account a name. You can change it later</p>
            <p style="font-size:18px;">How many people do you want to collaborate with?</p>
            <ul class="list-inline ">
            <li class="float-left" value="1"><a >Only me</a></li>
            <li class="float-left" value="5"><a >2-5</a></li>
            <li class="float-left" value="10"><a >6-10</a></li>
            <li class="float-left" value="15"><a >11-15</a></li>
            <li class="float-left" value="25"><a >16-25</a></li>
            <li class="float-left" value="50"><a >26-50</a></li>
            <li class="float-left"  value="100"><a >51-100</a></li>
            <li class="float-left" value="500"><a >101-500</a></li>
            <li class="float-left" value="5000"><a >500+</a></li>
            
            </ul>
          </div>
                  <input type="hidden" name="Memberslimit" id="Memberslimit" value="{{old('Memberslimit')}}" />
                  <button type="button" id="next" class="btn btn-primary">Next</button>
        </div>
        <div class="col-sm-8 mr-auto mb-5 imp "><img src="{{ asset('images/desktop-banner.jpg')}}" class="w-100 mt-4" alt=""/></div>
      </div>
    </form>
    </div>
  </div>

@stop
@section('script')
<script type="text/javascript">
  $('#members ul li').unbind("click");

    $('#members ul li').click(function(){ 
       
      $('#members li').css({'background-color': '#fff', 'color': '#646464'});
      $(this).css({'background-color': '#ed1d38', 'color': '#fff'});
      $val=$(this).val();
      $("#Memberslimit").val($val);

     
    });

    $('#next').unbind("click");
    $("#next").click(function()
    {
    $val=$("#No of members").val();
    $( "#step2" ).submit();
    });
 
</script>
@endsection