@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity2</title>
      <link rel="stylesheet" href="Unit2Activity2copy/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit2Activity2copy/css/fontawesome.css">
      <link rel="stylesheet" href="Unit2Activity2copy/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit2Activity2copy/css/style.css">
      <link rel="stylesheet" href="Unit2Activity2copy/css/introjs.css">
      <link rel="stylesheet" href="Unit2Activity2copy/fonts.css">

      <style type="text/css">
      body{

      }

      </style>
   </head>
   <body class="newbg">
     <div id="start" class="modal fade" style="margin-top: 40px;">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">

                  <h4 class="modal-title">Your Seleted Answer is:<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
              </div>
              <div class="modal-body">
                <div class="plain-section">

                  <div class="correctanswer">
                    <h1>Your Selected answer is <span style="color:#ec171f;">Wrong</span></h1>
                    <span class="time">Speed: <span>40 Km / Hour</span></span>
                    <span class="time">Mileage: <span>35 Km per litre of fuel</span></span>
                    <span class="time">Cost: <span>3 Rs / Km</span></span>
                </div>
                </div>
              </div>
          </div>
      </div>
  </div>

     <div class="content-section">
        <div class="content-title">

        <div class="remainig-data">
        <div class="remainig-budget" data-step="4" data-intro="Distance:100 km">Distance: <span>100 Km</span></div>
        <div class="remainig-budget" data-step="3" data-intro="Money in Hand:Rs. 2000">Money in Hand: <span>Rs. 2000</span></div>
        </div>

      </div>
      <div class="game-content">




        <div class="levelcontent">
        <h3 style="text-align:left;">Your Results is:</h3>

        <div class="drag1">
        <div class="box">
        <div class="plain-section">
          <div class="vehicle-img">
          <img src="Unit2Activity2copy/images/new-car.gif" alt="Car Journey" />
          </div>
          <div class="plaindetailes">
            <span class="time">Speed: 60 Km / Hour</span>
            <span class="time">Mileage: 20 Km per litre of fuel</span>
            <span class="time">Cost: 30 Rs / Km</span>
        </div>
        </div>
      </div>

      <div class="box">
        <div class="bus-section">
        <div class="vehicle-img1">
          <img src="Unit2Activity2copy/images/cycle.gif" alt="Cycle Journey" />
        </div>
          <div class="plaindetailes">
            <span class="time">Speed: 18 Km / Hour</span>
            <span class="time">Mileage: Unlimited</span>
            <span class="time">Cost: 2 Rs / Km</span>
        </div>
        </div>
      </div>

      <div class="box correct">
        <h2>This is the Correct Answer</h2>
        <div class="plain-section">
          <div class="vehicle-img">
            <img src="Unit2Activity2copy/images/giphy1.gif" alt="Two Wheeler Journey" />
          </div>

          <div class="plaindetailes">
            <span class="time">Speed: 40 Km / Hour</span>
            <span class="time">Mileage: 35 Km per litre of fuel</span>
            <span class="time">Cost: 3 Rs / Km</span>
        </div>
        </div>
      </div>



      <div class="box">
        <div class="bus-section">
        <div class="vehicle-img1">
          <img src="Unit2Activity2copy/images/truck.gif" alt="Truck Journey" />
        </div>
          <div class="plaindetailes">
            <span class="time">Speed: 30 Km / Hour</span>
            <span class="time">Mileage: 10 Km per litre of fuel</span>
            <span class="time">Cost: 20 Rs / Km</span>
        </div>
        </div>
      </div>

    </div>


    <div class="bottom_links">
    <div class="nextbut"><a href="/Unit2Activity2Page4L"> Go to Next Level >></a></div>
    <div class="backbut"><a href="/Unit2Activity2Page2L"><< Back</a></div>

    </div>




        </div>




      </div>

      <div class="bottom-title">
        <div class="bottom-heading"  data-step="1" data-intro="Speed Game">Speed Game</div>
        <div class="bottom-budget">
          <div class="total-time" data-step="6" data-intro="Avilable Fuel:6 Lts">Avilable Fuel: <span>6 Lts</span></div>
          <div class="total-time" data-step="5" data-intro="Total Time:5hrs">Total Time: <span>5 hours</span></div>
        </div>
      </div>

     </div>



   </body>
   <script src="Unit2Activity2copy/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2copy/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2copy/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2copy/js/intro.js" type="text/javascript"></script>
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