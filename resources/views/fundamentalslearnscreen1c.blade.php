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
  body{
    background-color: #dbe3e6
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
    <div class="row" style="background-color: white">
      <h2 style="margin:10px;"><b>Logistics Functions – Diamond Biscuit Story</b></h2>
    </div>

 
     <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-4" id="img1">
          <img id="one" src="{{asset('assets/img/store1.jpg')}}" width="85%" height="70%">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3" style="margin-top: 50px;" id="r1part2">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r1p2">
              <img src="{{asset('assets/img/arrow_up.png')}}"/>
              <img src="http://116.203.117.255:8888/assets/img/5slide1.png" width="60%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r1p22">
             <h4>Loading and dispatch with documents</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-5" style="margin-top: 50px;" id="r1part3">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r1p3">
              <img src="http://116.203.117.255:8888/assets/img/arrow.png" style="padding: 30px;">
              <img src="http://116.203.117.255:8888/assets/img/5slide2.png" width="40%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r1p33">
             <h4>Transportation to supermarket</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 30px;" >
        <div class="col-lg-3 col-md-3 col-sm-3 col-3" id="r2part1">
          <div class="row" id="row22">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r2p1">
              <img src="{{asset('assets/img/arrow_down.png')}}"/>
              <img src="http://116.203.117.255:8888/assets/img/5slide3.png" width="60%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r2p11">
             <h4>Order receipt from supermarket</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3" id="r2part2">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r2p2">
              <img src="http://116.203.117.255:8888/assets/img/arrow_up.png"/>
              <img src="http://116.203.117.255:8888/assets/img/5slide4.png" width="60%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r2p22">
             <h4>Packing</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3" id="r2part3">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r2p3">
              <img src="{{asset('assets/img/arrow_down.png')}}"/>
              <img src="http://116.203.117.255:8888/assets/img/5slide4.png" width="60%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r2p33">
             <h4>Receipt and storage at supermarket</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>      
      </div>


      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-3" id="r3part1" style="margin-top: 40px;">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r3p1" >
              <img src="{{asset('assets/img/arrow_down.png')}}"/>
              <img src="http://116.203.117.255:8888/assets/img/5slide6.png" width="60%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r3p11">
             <h4>Order assignment to staff</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-5" id="r3part2" style="margin-top: 40px;">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r3p2">
              <img src="http://116.203.117.255:8888/assets/img/arrow.png"/>
              <img src="http://116.203.117.255:8888/assets/img/5slide7.jpg" width="55%" align="right">              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="r3p22">
             <h4>Order picking</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4" id="img2" style="">
          <img id="one" src="{{asset('assets/img/store2.jpg')}}" width="85%" height="70%" align="right">
        </div>
      </div>

    </div>

    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;bottom:10px;position: absolute;">Previous Page</button>
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
  $("#img2").hide();
  $("#r1part2").show();
  $("#r1p2").hide();
  $("#r1p22").hide();
  $("#r1part3").show();
  $("#r1p3").hide();
  $("#r1p33").hide();
  $("#r2part1").show();
  $("#r2p1").hide();  
  $("#r2p11").hide();
  $("#r2part2").show();
  $("#r2p2").hide();
  $("#r2p22").hide();
  $("#r2part3").show();
  $("#r2p3").hide();
  $("#r2p33").hide();
  $("#r3part1").show();
  $("#r3p1").hide();
  $("#r3p11").hide();
  $("#r3part2").show();
  $("#r3p2").hide();
  $("#r3p22").hide();
});
var count = 0;
var next=0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
  event.preventDefault();
  next = next+1;
  if(next == 1){
   $("#img2").show();
   document.getElementById("img2").style.marginTop = "95px";
   }
  if(next == 2){
    document.getElementById("img2").style.marginTop = "10px";
   $("#r2p1").show();
   $("#r2p11").show();
   }
  else if(next == 3){
   $("#r3p1").show();
   $("#r3p11").show();
   }
  else if(next == 4){
   $("#r3p2").show();
   $("#r3p22").show();
    }
  else if(next == 5){
   $("#r2p2").show();
   $("#r2p22").show();
   }
  else if(next == 6){
   $("#r1p2").show();
   $("#r1p22").show();
   }
  else if(next == 7){
   $("#r1p3").show();
   $("#r1p33").show();
   }
  else if(next == 8){
    $("#r2p3").show();
    $("#r2p33").show();
    }
  else if(next == 9){
    window.location = "{{url()}}/FundamentalLearnScreen1d";
    }
  }
  else if (event.keyCode === 38) {
  event.preventDefault();
  next = next-1;
  if(next == 0){
    $("#img2").hide();
   }
  if(next == 1){
    document.getElementById("img2").style.marginTop = "95px";
   $("#r2p1").hide();
   $("#r2p11").hide();
   }
  else if(next == 2){
   $("#r3p1").hide();
   $("#r3p11").hide();
   }
  else if(next == 3){
   $("#r3p2").hide();
   $("#r3p22").hide();
    }
  else if(next == 4){
   $("#r2p2").hide();
   $("#r2p22").hide();
   }
  else if(next == 5){
   $("#r1p2").hide();
   $("#r1p22").hide();
   }
  else if(next == 6){
   $("#r1p3").hide();
   $("#r1p33").hide();
   }
  else if(next == 7){
    $("#r2p3").hide();
    $("#r2p33").hide();
    }
  else if(next == -1){
    window.location = "{{url()}}/FundamentalLearnScreen1b";
    }
  }

 });

$(document).on('click', '#back', function(){
  window.location = "{{url()}}/FundamentalLearnScreen1b";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop


