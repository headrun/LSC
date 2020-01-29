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
</style>
</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <h2 align="center"><b>Types of Inventory<b> </h2>
   </div>

    <div class="row" align="center"> 
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <p>Supplier</p>
        <img src="{{asset('assets/img/U4M3Van.png')}}" width="230px;" height="230px;">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <p>Manufacturer</p>
        <img src="{{asset('assets/img/U4M3Factory.png')}}" width="230px;" height="230px;">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <p>Warehouse</p>
        <img src="{{asset('assets/img/U4M3UserC.jpg')}}" width="230px;" height="230px;">
      </div>
    </div>
<br>
    <div class="row" align="center">
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3" id="four">
        <div class="circle_container">
          <div class="circle_main">
            <div class="circle_text_container">
              <div class = "circle_text">
                Transit Inventory
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3">
        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3">
        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3" id="four1">
        <div class="circle_container">
          <div class="circle_main">
            <div class="circle_text_container">
              <div class = "circle_text">
                Transit Inventory
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<br><br><br>
     <div class="row" align="center">
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3">
        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3" id="one">
        <div class="circle_container">
          <div class="circle_main">
            <div class="circle_text_container">
              <div class = "circle_text">
                Raw Material inventory
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3" id="three">
        <div class="circle_container">
          <div class="circle_main">
            <div class="circle_text_container">
              <div class = "circle_text">
                Finished Goods inventory
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3">
        
      </div>
    </div>
<br><br><br>
     <div class="row" align="center">
      <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4" id="two">
        <!-- <span style="border-radius: 100px; background: green;color : white;padding : 10px 15px;">Work in progress inventory</span> -->
        <div class="circle_container">
          <div class="circle_main">
            <div class="circle_text_container">
              <div class = "circle_text">
                Work in progress inventory
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
        
      </div>
    </div>
<br><br><br>
  <!-- <h2 align="center">Firm buys from cast iron from suppliers, manufactures in production unit and sends to warehouse</h2> -->
  <!-- <h2 align="center">Let us calculate inventory of these players for 2 days</h2> -->

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
  $("#one").hide();
  $("#two").hide();
  $("#three").hide();
  $("#four").hide();
  $("#four1").hide();
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
    $("#four1").show();
   }
   else if(next == 5){
    window.location = "{{url()}}/inventoryModule3LearnScreen5"; 
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
    $("#three").hide();
   }
   else if(next == 3){
    $("#four").hide();
    $("#four1").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/inventoryModule3LearnScreen3";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

