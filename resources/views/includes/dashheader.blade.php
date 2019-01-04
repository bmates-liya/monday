<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>77 Tech project management collaboration</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

@csrf
<link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
<script src="{{ asset('js/jquery.min.js') }}"  crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >


<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid sec1-temp">
        <div class="row">
          <div class="col-sm-2"><a class="navbar-brand" href="#"><img src="{{ asset('images/Logo.png')}}" alt=""/></a></div>
          <div class="col-sm-6 mt-4 mb-3">
            <ul class="list-inline">
              <li class="float-left"><i class="fas fa-bell"></i></li>
              <li class="float-left"><i class="fas fa-user-alt"></i></li>
              <li class="float-left" style="width:50%;">
                <input type="text" placeholder="Search Everything.." name="search">
                <span><i class="fas fa-search"></i></span></li>
            </ul>
          </div>
          <div class="col-sm-4 mt-4 mb-3">
            <ul class="list-inline float-right">
              <li class="float-left"><a  data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i>Invite Team Members</a></li>
              <li class="float-left">
                <button type="button" class="btn btn-primary">Upgrade</button>
              </li>
              <li class="user-drop">
                <div class="dropdown">
                  <button class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="{{ asset('images/5257404-dapulse_black.png')}}" alt=""> </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Profile</a> <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i> Upgrade Account</a> <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i>Admin</a> <a class="dropdown-item" href="#"><i class="fa fa-plug"></i> Intergration</a> <a class="dropdown-item" href="#"><i class="fas fa-recycle"></i>Recycle Bin</a> <a class="dropdown-item" href="#"><<i class="fas fa-file-archive"></i>Archived Boards</a> <a class="dropdown-item" href="#"><i class="fa fa-plus"></i> Invite Team Members</a> <a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i>Get Monday Mobile App</a> <a class="dropdown-item" href="#"><i class="fa fa-question-circle"></i> Help Center</a> <a class="dropdown-item" href="#"><i class="fas fa-keyboard"></i>Keyboard Shortcuts</a> <a class="dropdown-item" href="/user/logout"><i class="fas fa-sign-out-alt"></i> Logout</a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="side-left">
        <ul class="list-unstyled menu-s">
          <li><a href="#">Inbox</a><span>1</span></li>
          <li><a href="#">My Week</a></li>
        </ul>
        <div class="panel-group menu-left">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" href="#collapse1"><i class="fas fa-bars"></i> Boards</a> </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body"><a href="#"> Team Task </a><i class="fas fa-angle-double-right"></i></div>
              <div class="panel-footer"><span><a href="#" data-toggle="modal" data-target=".exampleModal" ><i class="fas fa-plus"></i> New</a></span></div>
            </div>
          </div>
        </div>
        <div class="panel-group menu-left">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" href="#collapse2"><i class="fas fa-share-alt"></i> Shareable Boards</a> </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-footer"><span><a href="#"  data-toggle="modal" data-target=".exampleModal" ><i class="fas fa-plus"></i> New</a></span></div>
            </div>
          </div>
        </div>
      </div>
      </div>
