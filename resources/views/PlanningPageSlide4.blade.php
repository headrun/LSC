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
<!--  <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/> -->
 <style>
h2{
  font-family: comic Sans;
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
#rcorners1 {
  border-radius: 25px;
  background: #93c34d;
  padding: 20px;
  width: 350px;
  height: 200px;
}

#rcorners2 {
  border-radius: 25px;
  background: #41cdd485;
  padding: 20px;
  width: 360px;
  height: 200px;
}
.footer{
  position: fixed;
  bottom: 0;
  width: 100%;
}
.sweep:hover:before{transform: scaleX(1);}
.w3-container{
padding: 0.01em 134px;
}
</style>
</head>
<body id="body" style="background-color: #e5e0ef">
<div class="container-fluid">
    <div class="row" style="background-color: #e5e0ef">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img id = "one" src="{{asset('assets/img/image15.jpg')}}" width="100%" height="300px;"/>
        <img id = "three" src="https://pbs.twimg.com/media/DvUdF9UWsAAYWLR.jpg:large"  width="100%"  height="300px;"/>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6">
       <div class="w3-container">
<br>
 <!--  <h2 style="color: #35395c;">Slide 4<br><br> Each day, 200 families are visited and 2 biscuit packets are provided per family.<br><br> What is the demand for the biscuit for 3 days?</h2> -->
 <h2 id="rcorners1" style="color: white;">Refrigerated space <br><br> 2000 Sqft <br><br> (2 sqft/ litre * 1000 litre)</h2>
 <br>
 <h2 id = "five" class="w3-container w3-animate-left" style="padding: 20px;">Total: 2,400 Sqft</h2>
 <br>
 <h2 id="rcorners2">Non - Refrigerated space <br><br> 400 sqft <br><br> (1 sqft/ pack * 400 packs)</h2>
       </div>
      </div>
    </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;bottom:10px;">Previous Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
        <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
      </div>
<div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <img id="next"  data-toggle="popover" data-placement="top"  data-content="Press To Find Out" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
        </div>
      </div>
    </div>
</div> 
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
  $("#one").hide();
  $("#rcorners1").hide();
  $("#three").hide();
  $("#rcorners2").hide();
  $("#five").hide();
});
var count = 0;
var next=0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $("#one").show();
   }
   else if(next == 2){
   $("#rcorners1").show();
   }
   else if(next == 3){
   $("#three").show();
   }
   else if(next == 4){
   document.getElementById("rcorners2").style.marginTop = "100px";
   $("#rcorners2").show();
   }
   else if(next == 5){
   document.getElementById("rcorners2").style.marginTop = "8px";
   $("#five").show();
   }
   else if(next == 6){
   window.location = "{{url()}}/EconomicsModule";
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
   $("#rcorners1").hide();
   }
   else if(next == 2){
   $("#three").hide();
   }
   else if(next == 3){
   $("#rcorners2").hide();
   }
   else if(next == 4){
   $("#five").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/PlanningPageSlide3";
   }
   // document.getElementById("myBtn").click();
  }  
});

$(document).on('click', '#next', function(){
  window.location = "{{url()}}/PlanningPageSlide5";
});
$(document).on('click', '#back', function(){
  window.location = "{{url()}}/PlanningPageSlide3";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/EconomicsModule";
});
</script>
@stop

