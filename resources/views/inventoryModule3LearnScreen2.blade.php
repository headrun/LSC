@extends('layout.sidebar1')
@section('content')
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
 .row{
    margin-left:0px;
  }
.footer{
 position: fixed;
 bottom: 0;
 width: 100%;
}
.main-wrapper{
 padding-top: 0px;
 padding-left: 0px;
}
h1,h2{
 font-family: comic Sans;
 color: #35395c;
 /text-align: center;/
}
h3{
 text-align: center;
 height: 18em;
}
.sweep{
 display:inline-block;
 position:relative;
 margin:0.4em;  padding:1em;
 cursor:pointer;
background:#35395c;
 color:white;
 z-index:0;
}
.sweep:before {
 content: "";
 position: absolute;
 z-index:-1;
 top: 0;  left: 0;  right: 0;  bottom: 0;
 background: #9c27b0;
 transform: scaleX(0);
 transform-origin: 0 50%;
 transition: transform .5s ease-out;
}
.sweep:hover:before{transform: scaleX(1);}
</style>
</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <!-- <h2 align="center"><b>Let us try to understand this with another example:<b> </h2> -->
   </div>
   <div class="row" >
    <div style="padding: 20px;">
      <h2 align="center">A company has a central warehouse which sells material to a distributor who further sells to a retailer form which end customers buy the product.</h2>
      <br>
     <!-- <h2>Ration Z wants to stock enough for 4 days</h2> -->
     <br>
     <!-- <h2 style="color: red">Find Inventory, Days of Cover and Inventory value</h2> -->
     <br><br>
     <!-- <h2><i>These complications are regular in a business environment</i></h2> -->
    </div>

    <div class="row"> 
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('assets/img/U4M3Slide2_1.png')}}" width="230px;" height="230px;">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('assets/img/U4M3arrowright.png')}}" width="80px;" height="80px;">
        <img src="{{asset('assets/img/U4M3Slide2_2.png')}}" width="230px;" height="230px;">
        <img src="{{asset('assets/img/U4M3arrowright.png')}}" width="80px;" height="80px;">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('assets/img/U4M3Slide2_3.png')}}" width="230px;" height="230px;">
      </div>
    </div>

  <h2 align="center" style="color: red;">Time from warehouse to distributor is 1 day. Material from distributor reaches retailer on same day</h2>
  <h2 align="center">Let us calculate inventory of these players for 2 days</h2>

   </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top: 13px;bottom:10px;">Previous Page</button> -->
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
 <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" style="background-color: #9f59b0;color:white;right: 1%;position: absolute;">Next Page</button> -->
          <!-- <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
        </div>
      </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  $(".cent").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   window.location = "{{url()}}/inventoryModule3LearnScreen3";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
   window.location = "{{url()}}/inventoryModule3Learn";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

