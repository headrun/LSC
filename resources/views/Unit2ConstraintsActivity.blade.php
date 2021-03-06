@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity2</title>
      <link rel="stylesheet" href="Unit2Activity2/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit2Activity2/css/fontawesome.css">
      <link rel="stylesheet" href="Unit2Activity2/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit2Activity2/css/style.css">
      <link rel="stylesheet" href="Unit2Activity2/css/introjs.css">
      <link rel="stylesheet" href="Unit2Activity2/fonts.css">

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
     <div id="start" class="modal fade" style="margin-top: 40px;">
      <div class="modal-dialog">
          <div class="modal-content">
              <!--<div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Let us perform a quick activity to understand Supply and Demand </h4>
              </div>-->
              <div class="modal-body">

          <button type="submit" class="btn btn-primary" onclick="javascript:introJs().start();" data-dismiss="modal" aria-hidden="true" style="width:100%;">Start</button>

              </div>
          </div>
      </div>
  </div>

     <div class="content-section">
      <h1>Constrains in Transportation</h1>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 1/3">Level: <span class="levelnum">1 </span><span class="levelnum1">/ 2</span></div>

        <div class="remainig-data">
        <div class="remainig-budget" data-step="4" data-intro="Distance:100 km">Distance: <span>100 Km</span></div>
        <div class="remainig-budget" data-step="3" data-intro="Money in Hand:Rs. 2000">Money in Hand: <span>Rs. 2000</span></div>
        </div>

      </div>
      <div class="game-content">
        <h2>Lets play the series of activities and transporation related constrains</h2>




        <div class="levelcontent">


        <div class="drag1">
        <div class="drag-left">
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

    </div>


    <div class="drag2">
      <div class="drag-left">
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


    <div class="instruction">

      <a href="/Unit2Activity2Page2L" class="play_but" >Let's Play</a>
    </div>

        </div>




      </div>

      <div class="bottom-title">
        <div class="watc"><a href="/Module3Theory">Back</a></div>
        <div class="bottom-heading"  data-step="1" data-intro="Speed Game">Speed Game</div>
        <div class="bottom-budget">
          <div class="total-time" data-step="6" data-intro="Avilable Fuel:6 Lts">Avilable Fuel: <span>6 Lts</span></div>
          <div class="total-time" data-step="5" data-intro="Total Time:5hrs">Total Time: <span>5 hours</span></div>
        </div>
      </div>

     </div>



   </body>
   <script src="Unit2Activity2/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2/js/intro.js" type="text/javascript"></script>
   <script type="text/javascript">


    $(document).ready(function(){
      $("#start").modal('show');
    });



   </script>
</html>

<!-- <button id = "back" style="color: #4dbfbf; background-color: red;" class="btn btn-primary btn-lg"> Back</button> -->


<button id = "next" style="color: #4dbfbf; float: right; background-color: red; display:none;" class="btn btn-primary btn-lg"> Next</button>

<script type="text/javascript">
$(document).on('click', '#back', function(){
	  window.location = "{{url()}}/Module3Theory";
});
$(document).on('click', '#next', function(){
	  window.location = "{{url()}}/basicModule";
});
</script>
@stop
