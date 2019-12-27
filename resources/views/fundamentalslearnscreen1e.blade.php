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
h1{
  font-family: comic Sans;
  color: #35395c;
  text-align: center;

}

#rcorners2 {
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 15px;
  width: 300px;
  height: 225px;
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
<body id="body" style="background-color: #dbe3e6;">
<div class="container-fluid">

    <div class="row" style="background-color: white;">
      <h2><b>Logistics Functions – Diamond Biscuit Story</b></h2>
    </div>

    <div class="row">
        <div class="question w3-container w3-animate-bottom" style="margin-top: 10%" align="center">
          <h1>How will the logistics functions look with supplier in <br> mind??</h1>
        </div>

         <div class="row w3-container w3-animate-bottom last" style="margin-top: 10%" align="center">
            <h1>These are the transactional functions of logistics<br><br> i.e. Functions that take care of transacations such <br>as order processing, transportation<br><br> Beyond these, Logistics also has a Planning component.</h1>
</div>

         <div class="row" style="padding-top: 10px;">
            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <img src="{{asset('assets/img/production.jpg')}}" width="90%" style="height: 215px;" class="two">
              <!-- <img src="{{asset('assets/img/logo/27.png')}}"> -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <img src="{{asset('assets/img/store1.jpg')}}" width="90%" style="height: 215px;" class="one">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <img src="{{asset('assets/img/store2.jpg')}}" width="95%" style="height: 215px;" class="one">
            </div>
         </div>

         <div class="row" style="margin-top: 5px;margin-bottom: 5px;">
           <div class="col-lg-3 col-md-3 col-sm-3 col-3" align="center">
            <!-- <img src="{{asset('assets/img/arrow_down.png')}}"> -->
           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-2">
             <img src="{{asset('assets/img/arrow_down.png')}}"  align="left" class="three">
             <img src="{{asset('assets/img/arrow_up.png')}}" align="right" class="three">
           </div>
           <!-- <div class="col-lg-1 col-md-1 col-sm-1 col-1"> -->

           <!-- </div> -->
           <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-2" align="center">
             <img src="{{asset('assets/img/arrow_down.png')}}" class="one">
           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-2" align="center">
             <img src="{{asset('assets/img/arrow_up.png')}}" class="one">
           </div>

           <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
         </div>

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              <div id="rcorners2" style="position: inherit;left: 10%;" class="three">
                <ul>
                  <li>Order receipt from Warehouse</li>
                  <li>Order assignment</li>
                  <li>Pick</li>
                  <li>Pack</li>
                  <li>Dispatch</li>
                  <li>Transport</li>
                  <li>Receipt at warehouse</li>
                  <li>Storage at warehouse</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <div id="rcorners2" style="left: 10%;position: absolute;" class="one">
                <ul>
                  <li>Order receipt from store</li>
                  <li>Order assignment</li>
                  <li>Pick</li>
                  <li>Pack</li>
                  <li>Dispatch</li>
                  <li>Transport</li>
                  <li>Receipt at customer</li>
                  <li>Storage at customer site</li>
                </ul>
              </div>
            </div>
          </div>
    </div>
    <br><br>

 <div class="row footer" style="background-color: none;">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;margin-top: 13px;bottom:10px;">Previous Page</button>
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
  $(".question").hide();
  $(".one").hide();
  $(".two").hide();
  $(".three").hide();
  $(".last").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $(".question").show();
   }
 else if(next == 2){
   $(".question").hide();
   $(".one").show();
   }
   else if(next == 3){
   $(".two").show();
   }
   else if(next == 4){
   $(".three").show();
   }
   else if(next == 5){
    $(".one").hide();
    $(".two").hide();
    $(".three").hide();
    $(".last").show();
   }
   else if(next == 6){
   window.location = "{{url()}}/FundamentalLearnScreen1f";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $(".question").hide();
   }
   else if(next == 1){
   $(".question").show();
   $(".one").hide();
   }
   else if(next == 2){
   $(".two").hide();
   }
   else if(next == 3){
   $(".three").hide();
   }
   else if(next == 4){
    $(".one").show();
    $(".two").show();
    $(".three").show();
    $(".last").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen1d";
   }
  }
});


$(document).on('click', '#back', function(){
  window.location = "{{url()}}/FundamentalLearnScreen1d";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

