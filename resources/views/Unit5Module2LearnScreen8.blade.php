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

<style type="text/css">
  .circle_container
{
  width : 128px;
  height : 128px;
  margin : 0;
  padding : 0;
/*  border : 1px solid red; */
}

/* Circle Main draws the actual circle */
.circle_main
{
  width : 100%;
  height : 100%;
  border-radius : 50%;
  border : 2px solid green; /* can alter thickness and colour of circle on this line */
  margin : 0;
  padding : 0;
}

/* Circle Text Container - constrains text area to within the circle */
.circle_text_container
{
  /* area constraints */
  width : 70%;
  height : 70%;
  max-width : 70%;
  max-height : 70%;
  margin : 0;
  padding : 0;

  /* some position nudging to center the text area */
  position : relative;
  left : 15%;
  top : 15%;
  
  /* preserve 3d prevents blurring sometimes caused by the text centering in the next class */
  transform-style : preserve-3d;
  
  /*border : 1px solid green;*/
}

/* Circle Text - the appearance of the text within the circle plus vertical centering */
.circle_text
{
  /* change font/size/etc here */
  /*font: 11px "Tahoma", Arial, Serif;  */
  text-align : center;
  
  /* vertical centering technique */
  position : relative;
  top : 50%;
  transform : translateY(-50%);
}

#para{
  border: 2px solid blue;
}
</style>
</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <h2 align="center" style="color: #26e66ad4"><b>Storing Equipment<b></h2>
   </div>
   <br><br>
   <div class="row" > 
     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" align="center">
      <img src="{{asset('assets/img/U5M2_16.png')}}" width="450px;" height="400px;">
     </div>
     <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
      <h4>Drive-in Racking:</h4>
      <br>
      <p><span>&#10004;</span> High density storage system used in warehouses to store pallets on a first in/last out (FILO) basis</p>
      <br>
      <p><span>&#10004;</span> Allows a fork truck to enter from one side only to pick up or deliver pallets that rest on continuous rails</p>
      <br>
      <p><span>&#10004;</span> Pallets are placed so they can slide backwards on a rail</p>
      <br>
      <p><span>&#10004;</span> <b>Drive-through racking</b> – store pallets on a first in/first out (FIFO) basis – pallets are loaded on one side of rack and retrieved from opposite side</p>
     </div>
   </div>
<br><br>
 
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
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
    window.location = "{{url()}}/Unit5Module2LearnScreen9";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
   window.location = "{{url()}}/Unit5Module2LearnScreen7";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

