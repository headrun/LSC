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
   <body class="newbg2">

     <div class="content-section">
       <div class="start" onclick="javascript:introJs().start();"> Start</div>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 3/3">Level: <span class="levelnum">3 </span><span class="levelnum1">/ 3</span></div>

        <div class="remainig-data">
          <div class="remainig-time" data-step="3" data-intro="Remainig Time:3hrs">Remainig Time: <span>3 hours</span></div>
          <div class="remainig-budget" data-step="4" data-intro="Distance::300km">Distance: <span>300 Km</span></div>
        </div>

      </div>
      <div class="game-content">

        <div class="levelcontent2" style="display:block;">
        <h2 style="text-align:left;color:#f5b120;">You Have Selected: Car </h2>

        <div class="drag-left">
        <div class="plain-section-inner1">
          <img src="Unit2Activity3/images/car-new.gif" alt="Car Journey" />
          <div class="plaindetailesinner">
          <span class="time">Speed: 50 km/hr</span>
          <span class="price">Cost: 5 Rs km/hr</span>
        </div>

        <div class="entercost">
          <h5>Enter Time Taken</h5>
          <div class="input">
            <input type="text" placeholder="Enter Time Taken"/>
          </div>

          <h5 style="margin-top:25px;">Enter Total Cost of trip</h5>
          <div class="input">
            <input type="text" placeholder="Enter Total Cost of trip"/>
          </div>

        </div>
        </div>




      </div>


      <div class="backbut" style="right:30px;"><a href="/Unit2Activity3Level3"><< Back</a>
        </div>

        </div>




      </div>

      <div class="bottom-title">
        <div class="bottom-heading"  data-step="1" data-intro="Speed Game">Speed Game</div>
        <div class="bottom-budget">
          <div class="total-time" data-step="5" data-intro="Total Time:3hrs">Total Time: <span>3 hours</span></div>
          <div class="total-budget" data-step="6" data-intro="Total Budget:Rs.6,000">Total Budget: <span>Rs. 6,000</span></div>
        </div>
      </div>

     </div>
     <button id = "next" style="color: #4dbfbf; float: right; background-color: red; position: relative; right: -95%;" class="btn btn-primary btn-lg">Home</button>


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
   
   $(document).on('click', '#next', function(){
       window.location = "{{url()}}/../../SidebarLearningPage";
   });
   </script>
</html>
@stop