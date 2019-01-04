@extends('layouts.singlecolumn')
@section('content')


<div id="myNav" class="overlay">
   
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
       
        <p><h2> VERIFY WITH THE PIN IN MAIL</h2></p>
        <div class="container">
            <form  id="frmver" name="frmver" >
            <div class="row">
              <div class="col-sm-3" style="">
              
              </div>
              
              <div class="col-sm-6 form-inline" style="">
                  
                  
                      <div class="form-group col-2">    
                       <input maxlength="1" type="txt_1" class="form-control col-10" id="txt_1" name="txt_1" placeholder="" autocomplete="off">  
                      </div>
                      <div class="form-group col-2">   
                       <input maxlength="1" type="txt_2" class="form-control col-10" id="txt_2" name="txt_2" placeholder="" autocomplete="off">
                      </div>
                      <div class="form-group col-2">   
                       <input maxlength="1" type="txt_3" class="form-control col-10" id="txt_3" name="txt_3" placeholder="" autocomplete="off">
                      </div>
                      <div class="form-group col-2">   
                          <input maxlength="1" type="txt_4" class="form-control col-10" id="txt_4" id="txt_4" placeholder="" autocomplete="off">
                      </div>
                      <div class="form-group col-2">
                        <input maxlength="1" type="txt_5" class="form-control col-10" id="txt_5" id="txt_5" placeholder="" autocomplete="off">
                      </div>
                      <div class="form-group col-2">
                        <input maxlength="1" type="txt_6" class="form-control col-10" id="txt_6" id="txt_6" placeholder="" autocomplete="off">
                      </div>
                 
                
                </div>
              
              <div class="col-sm-3" style="">
               
              </div>
            </div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-sm-5" style=""></div>
                <div class="col-sm-3" style="">
                    <div class="form-group col-5">
                        <button id="verify" name="verify" type="button" class="btn btn-primary" >Verify</button>
                    </div>

                </div>
                <div class="col-sm-5" style=""></div>
        
            </div>
          </form>
          </div> 
        
    </div>  
       
    
</div>



 
<div class="container-fluid banner-sec">
    <div class="container">
       
<form  id="frm" name="frm" >
      <div class="row">
        <div class="col-sm-4 login mt-6">
          <h2>Sign up</h2>
          <p>Enter your Work Email address:</p>
         
          <div class="input-group mb-4">
             
            <input id="recipientemail" name="recipientemail" type="text" class="form-control" autocomplete="off"> 
          </div>
          
          <button id="reg" type="button" class="btn btn-primary" >Register</button>

        </div>
        <div class="col-sm-8 mr-auto mb-5 imp "><img src="{{ asset('Images/desktop-banner.jpg') }}" class="w-100 mt-4" alt=""/></div>
      </div>
     </form>
    </div>
  </div> 
  

@endsection
@section('script')
  <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('js/additional-methods.min.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script>
     
      $( document ).ready(function() {
        jQuery.validator.setDefaults({
          debug: true,
          success: "valid"
        });
        var form = $( "#frm" );
        form.validate({
          rules:{
            recipientemail:{
              required:true,
              email:true,
            }
          
        },
        errorPlacement: function (error, element) 
        {
                var elm = $(element);
                error.insertBefore(elm.parent());
        }
      });
      });

    $("#verify").click(function(){

      var form2 = $( "#frmver" );
      $emailid=$("#recipientemail").val();
      $txt_1=$("#txt_1").val();
      $txt_2=$("#txt_2").val();
      $txt_3=$("#txt_3").val();
      $txt_4=$("#txt_4").val();
      $txt_5=$("#txt_5").val();
      $txt_6=$("#txt_6").val();

      $.ajax({
        type: "post",
        url: "/signup/verifysignupemail",
        data: {emailid:$emailid,txt_1:$txt_1,txt_2:$txt_2,txt_3:$txt_3,txt_4:$txt_4,txt_5:$txt_5,txt_6:$txt_6},
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(response)
        {
          var obj = jQuery.parseJSON( response );
          if(obj.count>0)
          {
            location.href="/signup/signup";
          }
        }
        });
   
      });
      $( "#reg" ).click(function() {    
        var form = $( "#frm" );
          if(form.valid())
          {
            $("#reg").hide(function()
            {
              $emailid=$("#recipientemail").val();
              $.ajax({
                type: "get",
                url: "/signup/checkverification",
                data: {emailid:$emailid},
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) 
                {
                  
                  var obj = jQuery.parseJSON( response );
                  if( obj.count<1 )
                  {
                    $.ajax({
                      type: "get",
                      url: "/signup/sendverification",
                      data: {emailid:$emailid},
                      headers: 
                        {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                      success: function (response) 
                        {
                          document.getElementById("myNav").style.width = "100%";
                          $("#reg").show();
                        }
                    
                      });
                  }
                  else
                  {
                      alert("Already there is an account in your name");
                      $("#reg").show();
                  }

                  //document.getElementById("myNav").style.width = "100%";
                }
          });
            });


          }

        });

        $("#txt_1").keyup(function(){
          if($("#txt_1").val()!="")
          {
            $("#txt_2").focus();
          }
          
        });
        $("#txt_2").keyup(function(){
          if($("#txt_2").val()!="")
            {
              $("#txt_3").focus();
            }
          });
          $("#txt_3").keyup(function(){
            if($("#txt_3").val()!="")
            {
              $("#txt_4").focus();
            }
          });
            $("#txt_4").keyup(function(){
            if($("#txt_4").val()!="")
            {
              $("#txt_5").focus();
            }
          });
            $("#txt_5").keyup(function(){
            if($("#txt_5").val()!="")
            {
              $("#txt_6").focus();
            }
          });
            $("#txt_6").keyup(function(){
            if($("#txt_6").val()!="")
            {
              $("#verify").focus();
            }
          });

      </script>
      @endsection