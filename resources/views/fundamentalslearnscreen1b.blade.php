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
.footer{
 position: fixed;
  bottom: 0;
  width: 100%;
}
.sweep:hover:before{transform: scaleX(1);}
</style>
</head>
<body id="body">
<div class="container-fluid">
    <div class="row">
 <div class="col-lg-7 col-md-7 col-sm-7 col-7">
        <h2 style="text-align: center;"><b>Logistics Functions – Diamond Biscuit Story</b></h2>
         <div class="row" style="padding: 20px">
            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
              <img id = "five" src="{{asset('assets/img/store1.jpg')}}" height="100%" width="100%">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <h4 id = "six" class="w3-animate-left" style="font-size: 30px;">Warehouse <br>– The Origin</h4>
            </div>
         </div>
         <div class="row" style="padding: 20px">
          <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <h4 id = "four" class="w3-animate-left" style="font-size: 30px;">Supermarket <br>– The Customer</h4>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
              <img id = "three" src="{{asset('assets/img/store2.jpg')}}" height="100%" width="100%" style="height: 240px;">
            </div>
         </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 col-5" style="background-color: blue;height: 606px;">
        <div class="w3-container w3-animate-left"><br><br>
          <h2 id = "one" style="color: white;font-size: 40px;" class="w3-animate-left">Diamond biscuits is a favourite biscuit brand in Coimbatore!</h2><br>
          <h2 id = "two" style="color: white;font-size: 40px;" class="w3-animate-left">Retailmart is a supermarket that has ordered 1000 packets from the company</h2><br>
          <h2 id = "seven" style="color: red;text-align: center;font-size: 40px;">What are the logistics functions involved in this scenario?</h2><br>
          <h2 id = "eight" style="text-align: center;font-size: 40px;color: white;">Lets find out!!</h2>
        </div>
</div>
    </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id = "back" style="background-color: #9f59b0;color:white;bottom:10px;left:10%;position: absolute;">Previous Page</button>
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
  $("#seven").hide();
  $("#eight").hide();
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
   if(next == 2){
   $("#two").show();
   }
   if(next == 3){
           $("#three").show();
           document.getElementById("three").style.marginTop = "250px";
   }
   if(next == 4){
           $("#four").show();
           document.getElementById("four").style.marginTop = "260px";
   }
   if(next == 5){
           $("#five").show();
           document.getElementById("three").style.marginTop = "0px";
           document.getElementById("four").style.marginTop = "0px";
   }
if(next == 6){
   $("#six").show();
   }
   if(next == 7){
   $("#one").hide();
   $("#two").hide();
   $("#seven").show();
   }
   if(next == 8){
   $("#eight").show();
   } 
 if(next == 9){
   window.location = "{{url()}}/FundamentalLearnScreen1c";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
  next = next-1;
  if(next == 0){
   $("#one").hide();
   }
   if(next == 1){
   $("#two").hide();
   }
   if(next == 2){
           $("#three").hide();
           document.getElementById("three").style.marginTop = "0px";
   }
   if(next == 3){
           $("#four").hide();
           document.getElementById("four").style.marginTop = "0px";
   }
   if(next == 4){
           $("#five").hide();
           document.getElementById("three").style.marginTop = "250px";
           document.getElementById("four").style.marginTop = "260px";
   }
if(next == 5){
   $("#six").hide();
   }
   if(next == 6){
   $("#one").show();
   $("#two").show();
   $("#seven").hide();
   }
   if(next == 7){
   $("#eight").hide();
   } 
 if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen1a1";
   }
  }
});

/*$(document).on('click', '#next', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
success: function(response) {
            console.log('success');
            window.location = "{{url()}}/FundamentalLearnScreen1c";
          }
    });
});*/

$(document).on('click', '#back', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/FundamentalLearnScreen1a";
          }
    });
});
$(document).on('click', '#gotohome', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/FundamentalLearnPage";
          }
    });
});
</script>
@stop

