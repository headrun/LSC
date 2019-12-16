@extends('layout.sidebar1')
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
    .watc{
      float: left;
      z-index: 99;
      margin-top: 13px;
      bottom: 0px;
      right: 40px;
    }
    .watc a{
      background: rgba(229,9,21,1);
      color: #ffffff;
      font-size: 14px;
            font-family: 'Montserrat-Regular';
            padding: 8px 15px;
      -webkit-border-radius: 16px;
      -moz-border-radius: 16px;
      border-radius: 16px;
      text-decoration: none;
    }

      </style>
   </head>
   <body class="newbg">


     <div class="content-section">
    <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 1/3">Level: <span class="levelnum">1 </span><span class="levelnum1">/ 2</span></div>

        <div class="remainig-data">
        <div class="remainig-budget" data-step="4" data-intro="Distance:100 km">Distance: <span>100 Km</span></div>
        <div class="remainig-budget" data-step="3" data-intro="Money in Hand:Rs. 2000">Money in Hand: <span>Rs. 2000</span></div>
        </div>

      </div>
      <div class="game-content">
        <h2>You are to travel 100 KM in 5 hours with 6 Ltrs of fuel. You have 2000 Rs with you. Match the vehicles with relevant constraints</h2>




        <div class="levelcontent">

        <h3>Match the following</h3>

        <div class="drag1">
        <div class="drag-left">
        <div class="checkbox"><input type="radio" name="matching"/></div>
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

      <div class="drag-right">
        <div class="checkbox"><input type="radio" name="matching"/></div>
        <div class="plain-section">
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

    </div>


    <div class="drag2">
      <div class="drag-left">
        <div class="checkbox"><input type="radio" name="matching"/></div>
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


      <div class="drag-right">
        <div class="checkbox"><input type="radio" name="matching"/></div>
        <div class="plain-section">
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


    <div class="instruction">

      <a href="/Unit2Activity2Page3L" class="play_but" >Submit</a>
    </div>

        </div>




      </div>

      <div class="bottom-title">
        <div class="watc"><a href="/Unit2ConstraintsActivity">Back</a></div>
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
