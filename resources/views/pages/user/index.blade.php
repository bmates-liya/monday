@extends('layouts.doublecolumn')
@section('content')

<div class="inbox">

<div class="sec-inbox">
<div class="col-xs-12">
    <div class="border-inbox">
    <div class="col-xs-12" style="margin-bottom:30px;">
    <ul class="list-inline" style="margin-top:30px;margin-bottom:30px;">
    <li><img src="{{ asset('images/5257404-dapulse_black.png')}}"></li>
    <li style="margin-top: 20px;
        margin-left: 10px;">Roy Mann</li>
    </ul>
    </div>
    <div class="col-xs-12">
    <p>Hi <b>{{ Auth::user()->name }}</b> </p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p>
    
    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>
    <p>Roy</p>
    <p>ssdsdsad</p>
    </div>
    </div>
    </div>
    </div>
    
    <div class="sec-inbox2">
    <div class="col-xs-12 inbox2-b">
    <div class="col-xs-12">
    <h4>Complete Your Profile</h4>
    <ul class="list-unstyled">
    <li><span><i class="fas fa-check"></i></span>Setup Account</li>
    <li><span><i class="fas fa-check"></i></span>Upload Your Photo</li>
    <li><span><i class="fas fa-check"></i></span>Enable Desktop Notfications</li>
    <li><span><i class="fas fa-check"></i></span>Invite Team Member(0/1)</li>
    <li><span><i class="fas fa-check"></i></span>Complete Profile</li>
    <li><span><i class="fas fa-check"></i></span>Install Our Mobile App</li>
    <li><div class="progress">
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      </div>
    </div></li>
    </ul>
    </div>
    </div>
    </div>
    
    <div class="sec-inbox2">
    <div class="col-xs-12 inbox2-b">
    <div class="col-xs-12">
    <h4>Filter By Board</h4>
    <ul class="list-unstyled">
    <li><span><i class="fas fa-check"></i></span>Vishnu</li>
    <li><span><i class="fas fa-check"></i></span>All Uploades of vishnu</li>
    <li><span><i class="fas fa-check"></i></span>Bookmarked Updates</li>
    </ul>
    </div>
    </div>
    </div>
    
    </div>

@stop
@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
<script src="{{asset('js/Custom.js')}}"></script> 
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script> 
<script>
$('#menu li').on('click', function(){
    $(this).addClass('current').siblings().removeClass('current');
});
</script> 
<script>

function openNav() {
    document.getElementById("slider-sec").style.width = "400px";
}

function closeNav() {
    document.getElementById("slider-sec").style.width = "0";
}

function openNav() {
    document.getElementById("mySidenav").style.width = "800px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script> 
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script> 
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script> 

@endsection