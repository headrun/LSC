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
   <body class="newbg1">
     <div id="start" class="modal fade" style="margin-top: 40px;">
      <div class="modal-dialog">
          <div class="modal-content">
              <!--<div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Let us perform a quick activity to understand Supply and Demand </h4>
              </div>-->
              <div class="modal-body">

          <button type="submit" class="btn btn-primary" onclick="javascript:introJs().start();" data-dismiss="modal" aria-hidden="true" style="width:100%;">Enter Level 2</button>

              </div>
          </div>
      </div>
  </div>

     <div class="content-section">
       <div class="start" onclick="javascript:introJs().start();"> Start</div>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 2/3">Level: <span class="levelnum">2 </span><span class="levelnum1">/ 3</span></div>

        <div class="remainig-data">
          <div class="remainig-time" data-step="3" data-intro="Remainig Time:10hrs">Remainig Time: <span>10 hours</span></div>
          <div class="remainig-budget" data-step="4" data-intro="Distance:800 km">Distance: <span>800 Km</span></div>
        </div>

      </div>
      <div class="game-content">
      <div class="levelcontent1" style="display:block;">
        <h2>Your second task is to reach Pune which is 800 Km away.</h2>
        <h3>You have 3 options</h3>

        <div class="drag-left">
        <div class="plain-section" onclick="location.href = '/Unit2Activity3Plainlevel2';">
          <img src="Unit2Activity3/images/giphy.gif" alt="plain Journey" />
          <div class="plaindetailes">
          <span class="price">flight flying from chennai to bangalore</span>
          <span class="divider">|</span>
          <span class="time">Time: 2 Hour</span>
          <span class="divider">|</span>
          <span class="price">Cost: 6,000 Rs per hour</span>
        </div>
        </div>

        <div class="car-section" onclick="location.href = '/Unit2Activity3Car';">
          <img src="Unit2Activity3/images/car-pool.gif" alt="Car Pool" />
          <div class="plaindetailes">
            <span class="price">Car from chennai to bangalore</span>
            <span class="divider">|</span>
          <span class="time">Speed: 50km/Hour</span>
          <span class="divider">|</span>
          <span class="price">Cost: 5 Rs/KM</span>
        </div>
        </div>

        <div class="plain-section" onclick="location.href = '/Unit2Activity3Van';">
          <img src="Unit2Activity3/images/minivan-surf.gif" alt="Van Journey" />
          <div class="plaindetailes">
            <span class="price">Van from chennai to bangalore</span>
            <span class="divider">|</span>
          <span class="time">Speed: 40km/Hour</span>
          <span class="divider">|</span>
          <span class="price">Cost: 3 Rs/KM</span>
        </div>
        </div>
      </div>

        <div class="person">
          <img src="Unit2Activity3/images/cartton-img.png" alt="" />
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

    $(document).ready(function(){
      $("#start").modal('show');
    });



   </script>
</html>
@stop