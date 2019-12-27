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
@media screen and (min-width: 1200px) {
  #image {
    height: 540px;
  }
}
@media screen and (min-width: 1600px) {
  #image {
    height: 780px;
  }
}
@media screen and (min-width: 1900px) {
  #image {
    width: 870px;
  }
}
.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
h2{
  font-family: comic Sans;
  color: #35395c;
  margin: 10px;
  /*text-align: center;*/

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
h4{
  text-align: center;
}
.footer{
  position: fixed;
  bottom: 0;
  width: 100%;
}
#eight{
position:absolute;
top:50%;
width:100%;
text-align:center;
}
@media screen and (min-width: 1200px) {
  #box2 {
    height: 198px;
  }
}
@media screen and (min-width: 1600px) {
  #box2 {
    height: 340px;
  }
}
@media screen and (min-width: 1900px) {
  #box2 {
    width: 480px;
  }
}
</style>
</head>
<body id="body" style="background-color: #dbe3e6">
<div class="container-fluid">

    <div class="row" style="background-color: white;">
      <h2><b>Logistics Functions – Diamond Biscuit Story</b></h2>
    </div>

    <div class="row">

         <div class="row">
          <h2 id = "eight">How will the logistics functions look with supplier in mind??</h2>
            <h2 id="one" align="center">To dispatch material to various customers, warehouse needs to have sufficient stock of biscuits</h2>
            <h2 id="two" align="center">Warehouse receives biscuits from <b>manufacturing plant or supplier</b></h2>

         </div><br>

         <div class="row">
<div id="seven" class="col-lg-3 col-md-3 col-sm-3 col-3">
              <img id="box1" src="{{asset('assets/img/production.jpg')}}" width="100%" height="100%">
              <h4 id="box11">Manufacturing Factory</h4>
            </div>
            <div id="six" class="col-lg-1 col-md-1 col-sm-1 col-1">
              <img id="arrow1" src="{{asset('assets/img/arrow.png')}}" style="margin-top: 100px;">
            </div>
            <div id="five" class="col-lg-3 col-md-3 col-sm-3 col-3">
               <img id="box2" src="{{asset('assets/img/warehouse.jpg')}}" width="100%" height="100%">
               <h4 id="box22">Warehouse</h4>
            </div>
            <div  id="four" class="col-lg-1 col-md-1 col-sm-1 col-1">
              <img  src="{{asset('assets/img/arrow.png')}}" style="margin-top: 100px;">
            </div>
            <div id="three" class="col-lg-3 col-md-3 col-sm-3 col-3" align="center">
              <img src="{{asset('assets/img/store2.jpg')}}" width="100%" height="100%">
              <h4>Customer</h4>
            </div>
         </div>
         <br><br><br><br>

    </div>
<div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;margin-top: 13px;bottom:10px;">Previous Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
        <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
</div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
        </div>
      </div>
    </div>

</div>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
  $("#one").hide();
  $("#two").hide();
  $("#three").hide();
  $("#four").hide();
  $("#five").hide();
  $("#six").hide();
  $("#box1").hide();
  $("#box11").hide();
  $("#seven").hide();
  $("#eight").hide();
  $("arrow1").hide();
  $("box2").hide();
  $("box22").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $("#one").show();
   }
   else if(next == 2){
   $("#two").show();
   }
   else if(next == 3){
   $("#seven").show();
   $("#box1").hide();
   $("box11").hide();
   $("#six").show();
   $("#arrow1").hide();
   $("#five").show();
   $("#box2").hide();
   $("#box22").hide();
   $("#four").show();
   $("#three").show();
   }
   else if(next == 4){
    $("#box2").show();
    $("#box22").show();
   }
   else if(next == 5){
   $("#arrow1").show();
   }
   else if(next == 6){
     $("#box1").show();
     $("#box11").show();
   }
   else if(next == 7){
   $("#eight").show();
   $("#one").hide();
   $("#two").hide();
   $("#three").hide();
   $("#four").hide();
   $("#five").hide();
   $("#six").hide();
   $("#seven").hide();
   }
   else if(next == 8){
   window.location = "{{url()}}/FundamentalLearnScreen1f";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $("#one").hide();
   }
   else if(next == 1){
   $("#two").hide();
   }
   else if(next == 2){
   $("#seven").hide();
   $("#box1").show();
   $("box11").show();
   $("#six").hide();
   $("#arrow1").show();
   $("#five").hide();
   $("#box2").show();
   $("#box22").show();
   $("#four").hide();
   $("#three").hide();
   }
   else if(next == 3){
    $("#box2").hide();
    $("#box22").hide();
   }
   else if(next == 4){
   $("#arrow1").hide();
   }
   else if(next == 5){
     $("#box1").hide();
     $("#box11").hide();
   }
   else if(next == 6){
   $("#eight").hide();
   $("#one").show();
   $("#two").show();
   $("#three").show();
   $("#four").show();
   $("#five").show();
   $("#six").show();
   $("#seven").show();
   }
   else if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen1c";
   }
  }
});

$(document).on('click', '#back', function(){
  window.location = "{{url()}}/FundamentalLearnScreen1c";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

