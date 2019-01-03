@extends('layouts.singlecolumn')
@section('content')

<div class="container">
    <form name="step3" id="step3" method="POST" action="{{route('poststep3')}}">
        @csrf
    <div class="row">
      <div class="col-sm-4 login mt-6 check-nb">
        <h2 style="font-size:30px;">What does Your team do</h2>
        <p>This way we can share some template <br/>ideas with you</p>
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
          <select class="form-control" name="TeamIndustry" id="TeamIndustry">
            <option value="" selected>What does your team do?</option>
            @foreach ($teamindustryds as $teamindustrydataset)                 
                <option value="{{ $teamindustrydataset->id }}"  >{{ $teamindustrydataset->title }}</option>
            @endforeach
          </select>
          </span> </div>
        <button type="button" class="btn btn-primary" id="next">Next</button>
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