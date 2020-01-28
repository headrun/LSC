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

<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 2px solid #43d8b6;
}

th, td {
  border: 2px solid #43d8b6;
  text-align: left;
  padding: 28px;
}

tr:nth-child(odd){background-color: #f2f2f2}

th {
  /*background-color: #4CAF50;*/
  /*color: white;*/
}
</style>


</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <h2 align="center" id="one"><b>HighVal Stationeries decides to have the following material<b> </h2>
   </div>

   <!-- <h2 style="padding: 20px;">3 parameters everyone should be aware:</h2> -->
   <br>
   <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="two">
      <img src="{{asset('assets/img/U4M2Slide3_1.jpg')}}" width="180px;" height="180px;">
      <p align="center">Notebooks</p>
      <img src="{{asset('assets/img/U4M2Slide3_2.jpg')}}" width="180px;" height="180px;">
      <p align="center">Pens</p>
      <img src="{{asset('assets/img/U4M2Silde3_3.jpg')}}" width="180px;" height="180px;">
      <p align="center">Staplers</p>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="three">
      <table>
        <tr>
    <td></td>
    <td></td>
    <td id="first">DOC = Inventory/ Sales per day</td>
  </tr>
  <tr>
    <th>Inventory</th>
    <th>Sales per day (Average)</th>
    <th id="first1">Days of Inventory Cover (DOC)</th>
  </tr>
  <tr>
    <td>100</td>
    <td>10</td>
    <td id="first2">10</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td id="first3"></td>
  </tr>
  <tr>
    <td>500</td>
    <td>20</td>
    <td id="first4">25</td>
  </tr>
   <tr>
    <td></td>
    <td></td>
    <td id="first5"></td>
  </tr>
  <tr>
    <td>50</td>
    <td>10</td>
    <td id="first6">5</td>
</tr>
</table>
    </div>
   </div>



   <br>
   <!-- <h2 style="padding: 20px;" align="center"> With this background, let us learn further -->
</h2>
  
  
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
  $("#three").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
    $("#three").show();
   }
   else if(next == 2){
    document.getElementById("first").style.backgroundColor = "#7dd8c36b";
    document.getElementById("first1").style.backgroundColor = "#7dd8c36b";
    document.getElementById("first2").style.backgroundColor = "#7dd8c36b";
    document.getElementById("first3").style.backgroundColor = "#7dd8c36b";
    document.getElementById("first4").style.backgroundColor = "#7dd8c36b";
    document.getElementById("first5").style.backgroundColor = "#7dd8c36b";
    document.getElementById("first6").style.backgroundColor = "#7dd8c36b";
   }
   else if(next == 3){
   window.location = "{{url()}}/inventoryModule2LearnScreen4"; 
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
    $("#three").hide();
   }
   else if(next == 1){
    document.getElementById("first").style.backgroundColor = "";
    document.getElementById("first1").style.backgroundColor = "";
    document.getElementById("first2").style.backgroundColor = "";
    document.getElementById("first3").style.backgroundColor = "";
    document.getElementById("first4").style.backgroundColor = "";
    document.getElementById("first5").style.backgroundColor = "";
    document.getElementById("first6").style.backgroundColor = "";
   }
   else if(next == -1){
   window.location = "{{url()}}/inventoryModule2LearnScreen2";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

