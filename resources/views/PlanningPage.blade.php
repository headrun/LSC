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
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" /> -->
 <style>
h2{
  font-family: comic Sans;
}
.popover-content {
    padding: 9px 20px;
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
  /*border-top-right-radius: 10px;*/
  /*border-bottom-right-radius: 10px;*/
}
.sweep:hover:before{transform: scaleX(1);}
#sub_div {
    position: absolute;
    bottom: 0px;
}
#bot{
    margin-left: 0px;
}
.button5 {border-radius: 50%;}
.button {
  background-color: #d5a9e0; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.footer{
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>
</head>
<body id="body" style="background-color: #e5e0ef">
<div class="container-fluid">
    <div class="row" style="background-color: #e5e0ef">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img id = "two" src="https://vignette.wikia.nocookie.net/clubpenguin/images/b/ba/1_Cookie.png/revision/latest?cb=20120817035930" id="image" width="100%"/>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="w3-container w3-animate-left">
<br>
<h2 style="color: #35395c;" id = "one" class = "w3-animate-left">Ajo is the planning manager at XYZ biscuits company.</h2>
<br>
<h2 id = "three" class="w3-animate-left" >He is asked to establish 4 factories in India.</h2><br>

<div class="row" id = "four" >
  <img src="https://i.pinimg.com/736x/f5/c5/14/f5c5142a48d547d78232f4972794909a.jpg" width="180px;" style="padding: 20px;">
  <img src="https://i.pinimg.com/736x/f5/c5/14/f5c5142a48d547d78232f4972794909a.jpg" width="180px;" style="padding: 20px;">
  <img src="https://i.pinimg.com/736x/f5/c5/14/f5c5142a48d547d78232f4972794909a.jpg" width="180px;" style="padding: 20px;">
</div>
<div class="row" id = "six" >
  <button class="button button5" style=" margin: 15px;">Warehouse type decision</button>
  <button class="button button5" style=" margin: 15px;">Network planning</button>
  <button class="button button5" style=" margin: 15px;">Site selection</button>
</div>
<div class="row w3-animate-left" id = "five">
  <h2 style="color: #35395c;">In what order does he perform his actions?</h2>
</div>
<div class="row w3-animate-left" id = "seven">
  <h2 style="color: #35395c;">1. Network planning</h2>
  <h2 style="color: #35395c;">2. Warehouse type decision</h2>
  <h2 style="color: #35395c;">3. Site selection</h2>
</div>

        </div>
      </div>
    </div>
    <div class="row footer">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <div style="cursor: pointer;">
        <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top:13px;bottom:10px;">Previous Page</button>
        <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6" align="center">
      <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3" >
      <div style="cursor: pointer;">
        <!-- <img id="next" data-toggle="popover" data-placement="top" data-content="Press To Find Out" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
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
   $("#three").show();
   }
   else if(next == 4){
   $("#four").show();
   }
   else if(next == 5){
   $("#five").show();
   }
   else if(next == 6){
   $("#six").show();
   }
   else if(next == 7){
    $("#seven").show();
   }
   else if(next == 8){
   window.location = "{{url()}}/PlanningPageSlide2";
   }
   // document.getElementById("myBtn").click();
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
   $("#three").hide();
   }
   else if(next == 3){
   $("#four").hide();
   }
   else if(next == 4){
   $("#five").hide();
   }
   else if(next == 5){
   $("#six").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/EconomicsModule";
   }
   // document.getElementById("myBtn").click();
  }
});
$(document).on('click', '#next', function(){
  window.location = "{{url()}}/PlanningPageSlide2";
});
$(document).on('click', '#back', function(){
  window.location = "{{url()}}/EconomicsModule";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/EconomicsModule";
});
</script>
@stop
