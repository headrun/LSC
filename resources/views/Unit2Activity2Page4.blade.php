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

      </style>
   </head>
   <body class="newbg">


     <div class="content-section">

      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 2/3">Level: <span class="levelnum">2 </span><span class="levelnum1">/ 2</span></div>

        <div class="remainig-data">
        <div class="remainig-budget" data-step="4" data-intro="Distance:100 km">Distance: <span>250 Km</span></div>
        </div>

      </div>
      <div class="game-content">
        <h2>Truck starting from point A at 9 AM is expected to reach D</h2>




        <div class="levelcontent newcoontent">
          <div class="newtruck"><img src="Unit2Activity2copy/images/truck.png" alt="" /></div>
          <div class="eachpoint">
            <div class="round"><img src="Unit2Activity2copy/images/starting.png" alt="Starting" /></div>
            <div class="newline">50KM</div>
            <div class="number">A   <div class="rightinout"><input type="text" placeholder="10:40 AM" readonly /></div></div>

          </div>

          <div class="eachpoint">
            <div class="round1"><img src="Unit2Activity2copy/images/location1.png" alt="Location" /></div>
            <div class="newline">50KM</div>
            <div class="number">B <div class="rightinout"><input type="text" placeholder="01:20 PM" readonly /></div></div>


          </div>

          <div class="eachpoint">
            <div class="round1"><img src="Unit2Activity2copy/images/location2.png" alt="Location2" /></div>
            <div class="newline">150KM</div>
            <div class="number">C <div class="rightinout"><input type="text" placeholder="05:40 PM" readonly /></div></div>


          </div>

          <div class="eachpoint">
            <div class="round"><img src="Unit2Activity2copy/images/reach-point.png" alt="" /></div>
            <div class="number">D</div>


          </div>

          <h3 style="text-align:left;margin-top:30px;">Change the speed to know time to know the reach time at each point</h3>
          <div class="form-values">
            <h4>Enter Speed in Km / Hour.</h4>
            <input type="text" placeholder="Enter Speed in Km / Hour" />
            <input type="submit" Value="Submit" />

          </div>


        </div>




      </div>

      <div class="bottom-title">
        <div class="bottom-heading"  data-step="1" data-intro="Speed Game">Speed Game</div>
        <button href="/Unit2Activity2" id="module" style="color: #4dbfbf; float: right; background-color: red;" class="btn btn-primary btn-lg"> Home</button>

      </div>

     </div>



   </body>
   <script src="Unit2Activity2copy/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2copy/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2copy/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="Unit2Activity2copy/js/intro.js" type="text/javascript"></script>
   <script type="text/javascript">


    $(document).ready(function(){
      $("#start").modal('show');
    });
     $(document).on('click', '#module', function(){
          window.location = "/SidebarLearningPage";
});



   </script>
</html>
@stop