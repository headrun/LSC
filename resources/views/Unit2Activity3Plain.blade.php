@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity3</title>
      <link rel="stylesheet" href="Unit2Activity3/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit2Activity3/css/fontawesome.css">
      <link rel="stylesheet" href="Unit2Activity3/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit2Activity3/css/style.css">
      <link rel="stylesheet" href="Unit2Activity3/css/introjs.css">
      <link rel="stylesheet" href="Unit2Activity3/fonts.css">

      <style type="text/css">
      body{

      }

      </style>
   </head>
   <body class="newbg">

     <div class="content-section">
       <div class="start" onclick="javascript:introJs().start();"> Start</div>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 1/3">Level: <span class="levelnum">1 </span><span class="levelnum1">/ 3</span></div>

        <div class="remainig-data">
          <div class="remainig-time" data-step="3" data-intro="Remainig Time:5hrs">Remainig Time: <span>5 hours</span></div>
          <div class="remainig-budget" data-step="4" data-intro="Distance:300 km">Distance: <span>300 Km</span></div>
        </div>

      </div>
      <div class="game-content">

        <div class="levelcontent" style="display:block;">
        <h2 style="text-align:left;color:#f5b120;">You Have Selected: Flight</h2>

        <div class="drag-left">
        <div class="plain-section-inner">
          <img src="Unit2Activity3/images/giphy.gif" alt="plain Journey" />
          <div class="plaindetailesinner">
          <span class="time">Time: 2 Hour</span>
          <span class="price">Cost: 4,500 Rs per hour</span>
        </div>

        <div class="entercost">
          <h5>Enter Total Cost of trip</h5>
          <div class="input">
            <input type="text" placeholder="Enter Total Cost of trip"/>
          </div>

        </div>
        </div>




      </div>


      <div class="backbut"><a href="/Unit2activity3"><< Back</div>
        <div class="nextbut"><a href="/Unit2Activity3Level2">Goto Next Level >></div>
      </div>

        </div>




      </div>

      <div class="bottom-title">
        <div class="bottom-heading"  data-step="1" data-intro="Speed Game">Speed Game</div>
        <div class="bottom-budget">
          <div class="total-time" data-step="5" data-intro="Total Time:10hrs">Total Time: <span>10 hours</span></div>
          <div class="total-budget" data-step="6" data-intro="Total Budget:Rs.12,000">Total Budget: <span>Rs. 12,000</span></div>
        </div>
      </div>

     </div>


     <div class="container">


     </div>


   </body>
   <script src="Unit2Activity3/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit2Activity3/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit2Activity3/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="Unit2Activity3/js/intro.js" type="text/javascript"></script>
   <script type="text/javascript">
   $("#close").click(function(){
     $(".instruction_but").hide(1000);
   });

   $("#play").click(function(){
     $(".levelcontent").show(1000);
     $(".instruction").hide(1000);
   });



   </script>
</html>
@stop