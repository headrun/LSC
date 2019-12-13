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
     <div id="start" class="modal fade" style="margin-top: 40px;">
      <div class="modal-dialog">
          <div class="modal-content">
              <!--<div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Let us perform a quick activity to understand Supply and Demand </h4>
              </div>-->
              <div class="modal-body">

          <button type="submit" class="btn btn-primary" onclick="javascript:introJs().start();" data-dismiss="modal" aria-hidden="true" style="width:100%;">Enter Level 3</button>

              </div>
          </div>
      </div>
  </div>

     <div class="content-section">
       <div class="start" onclick="javascript:introJs().start();"> Start</div>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 3/3">Level: <span class="levelnum">3 </span><span class="levelnum1">/ 3</span></div>

        <div class="remainig-data">
          <div class="remainig-time" data-step="3" data-intro="Remainig Time:3hrs">Remainig Time: <span>3 hours</span></div>
          <div class="remainig-budget" data-step="4" data-intro="Distance:300 km">Distance: <span>300 Km</span></div>
        </div>

      </div>
      <div class="game-content">
      <div class="levelcontent2" style="display:block;">
        <h2>Your last  task is to reach Mumbai which is 300 Km away. There are no specific conditions for this task except overall cost and time constraints</h2>
        <h3>You have 2 options</h3>

        <div class="drag-left">

        <div class="car-section1" onclick="location.href = '/Unit2Activity3Carlevel3';">
          <img src="Unit2Activity3/images/car-new.gif" alt="Car Pool" />
          <div class="plaindetailes">
          <span class="time">Time: 3 Hours</span>
          <span class="divider">|</span>
          <span class="price">Cost: 20 Rs km</span>
        </div>
        </div>

        <div class="plain-section" onclick="location.href = '/Unit2Activity3Cycle';">
          <img src="Unit2Activity3/images/cycle.gif" alt="cycle Journey" />
          <div class="plaindetailes">
          <span class="time">Speed: 20km/Hour</span>
          <span class="divider">|</span>
          <span class="price">Cycle Rent: Rs. 400</span>
          <span class="divider">|</span>
          <span class="price">Refreshment cost:Rs. 200</span>


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
          <div class="total-time" data-step="5" data-intro="Total Time:3hrs">Total Time: <span>3 hours</span></div>
          <div class="total-budget" data-step="6" data-intro="Total Budget:Rs.6,000">Total Budget: <span>Rs. 6,000</span></div>
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