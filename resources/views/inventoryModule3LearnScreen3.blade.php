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
 /*position: fixed;*/
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

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
td{
  text-align: center;
}
</style>
</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <!-- <h2 align="center"><b>Let us try to understand this with another example:<b> </h2> -->
   </div>
   <div class="row" >
    <div style="padding: 20px;">
      <h2 align="center">Closing Stock = Opening Stock + Purchase receipt - Sale</h2>
    </div>

    <div class="row" align="center"> 
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('assets/img/U4M3Slide2_1.png')}}" width="100px;" height="100px;">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('assets/img/U4M3arrowright.png')}}" width="80px;" height="80px;">
        <img src="{{asset('assets/img/U4M3Slide2_2.png')}}" width="135px;" height="135px;">
        <img src="{{asset('assets/img/U4M3arrowright.png')}}" width="80px;" height="80px;">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <img src="{{asset('assets/img/U4M3Slide2_3.png')}}" width="100px;" height="100px;">
      </div>
    </div>
    <br><br>
<div style="background-color: red;" align="center">
  <b>Day 1</b>
</div>
<br>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <table style="width:100%">
  <tr>
    <td>Opening Stock</td>
    <td>100</td> 
  </tr>
  <tr>
    <td>Purchase order placed</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Purchase receipt</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>20</td>
  </tr>
  <tr>
    <td>Closing Stock</td>
    <td>80</td>
  </tr>
</table>
<span style="float: right; color: red;">After 1 day</span>
  </div>
  
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <table style="width:100%">
  <tr>
    <td>Opening Stock</td>
    <td>50</td> 
  </tr>
  <tr>
    <td>Purchase order placed</td>
    <td>20</td>
  </tr>
  <tr>
    <td>Purchase receipt</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>10</td>
  </tr>
  <tr>
    <td>Closing Stock</td>
    <td>35</td>
  </tr>
</table>
<span style="float: right; color: red;">Same day</span>
  </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <table style="width:100%">
  <tr>
    <td>Opening Stock</td>
    <td>30</td> 
  </tr>
  <tr>
    <td>Purchase order placed</td>
    <td>15</td>
  </tr>
  <tr>
    <td>Purchase receipt</td>
    <td>15</td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>10</td>
  </tr>
  <tr>
    <td>Closing Stock</td>
    <td>35</td>
  </tr>
</table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="center">
    <span style="color: blue;"><b>Purchase form distributor is the sale of warehouse</b></span>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="center">
    <span style="color: blue;"><b>Purchase form retailer is the sale of distributor</b></span>
  </div>
</div>
<br>
<div style="background-color: red;" align="center">
  <b>Day 2</b>
</div>
<br>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <table style="width:100%">
  <tr>
    <td>Opening Stock</td>
    <td>80</td> 
  </tr>
  <tr>
    <td>Purchase order placed</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Purchase receipt</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>30</td>
  </tr>
  <tr>
    <td>Closing Stock</td>
    <td>50</td>
  </tr>
</table>
<span style="float: right; color: red;">After 1 day</span>
  </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <table style="width:100%">
  <tr>
    <td>Opening Stock</td>
    <td>35</td> 
  </tr>
  <tr>
    <td>Purchase order placed</td>
    <td>30</td>
  </tr>
  <tr>
    <td>Purchase receipt</td>
    <td>20</td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>18</td>
  </tr>
  <tr>
    <td>Closing Stock</td>
    <td>37</td>
  </tr>
</table>
<span style="float: right; color: red;">Same day</span>
  </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <table style="width:100%">
  <tr>
    <td>Opening Stock</td>
    <td>35</td> 
  </tr>
  <tr>
    <td>Purchase order placed</td>
    <td>18</td>
  </tr>
  <tr>
    <td>Purchase receipt</td>
    <td>18</td>
  </tr>
  <tr>
    <td>Sale</td>
    <td>20</td>
  </tr>
  <tr>
    <td>Closing Stock</td>
    <td>33</td>
  </tr>
</table>
  </div>
</div>
  <!-- <h2 align="center" style="color: red;">Time from warehouse to distributor is 1 day. Material from distributor reaches retailer on same day</h2> -->
  <!-- <h2 align="center">Let us calculate inventory of these players for 2 days</h2> -->

   </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top: 13px;bottom:10px;">Previous Page</button> -->
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
 <div style="margin-top:-10px;font-size: 17px;">Press down arrow for next steps</div>
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
   window.location = "{{url()}}/inventoryModule3LearnScreen4";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
   window.location = "{{url()}}/inventoryModule3LearnScreen2";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

