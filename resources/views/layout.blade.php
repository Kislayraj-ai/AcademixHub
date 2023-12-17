<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
<style>
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


.navbar-brand{
  text-shadow : 0px 2px 6px #999 ;
  color: #fff ;
  letter-spacing :0.2rem   ;
}
</style>


</head>
    <body class="antialiased">

  <div class="container">
    <div class="row">
    <div class="col-md-12">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AcademixHub</a>

    
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
<div class="d-flex w-100">


  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  d-flex justify-content-between" style="width:100%;">
      <li class="nav-item active">
        <a class="nav-link" href="#"></a>
      </li>

 <li class="nav-item active">
        @php
       session_start();
        echo  $_SESSION['username']
       @endphp
        <a href="logout" class="btn btn-danger">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      </nav>
   </div>
   </div>




<div class="row">
<div class="col-md-1">


<!-- The sidebar -->
<div class="sidebar">
  <a class="layoutPannel" href="{{ url('home') }}">Home</a>
  <a class="layoutPannel" href="{{ url('students') }}">Student</a>
  <a class="layoutPannel" href="{{ url('teacher') }}">Teacher</a>
  <a class="layoutPannel" href="{{ url('courses') }}">Course</a>
  <a class="layoutPannel" href="{{ url('enrolls') }}">Enroller</a>
    <a href="{{ url('payments') }}">Payment</a>
</div>

<div class="col-md-10"></div>
        <div class="content">
          @yield('content')
        </div>
</div>

</div>

  </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>

  $('.sidebar a').click(function(e) {
    let layout = e.target ;
    localStorage.setItem('layout',layout.textContent)
   });

  $(document).ready(()=>{

    const getTheSelectedLayoutBtn = ()=>{

      let getSelectedItem = localStorage.getItem('layout')
      getSelectedItem = getSelectedItem ? getSelectedItem.toLowerCase() : '' ;

     $('.sidebar a').removeClass('active');

       $('.sidebar a').each((index, item)=>{
          let layoutItems = item.textContent ;   
          layoutItems =  layoutItems.toLowerCase() ;

         if (getSelectedItem === layoutItems) {
             $(item).addClass('active');
           // console.log(item);
         }
       })
    }
  getTheSelectedLayoutBtn()
       
  })

  </script>

    </body>
</html>


