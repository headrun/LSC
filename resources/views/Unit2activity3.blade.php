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
      
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


      <style type="text/css">
      body{

      }

      </style>
   </head>
   <body class="newbg">
     <div id="start" class="modal fade">
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
       <div class="start" onclick="javascript:introJs().start();"> Start</div>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 1/3">Level: <span class="levelnum">1 </span><span class="levelnum1">/ 3</span></div>

        <div class="remainig-data">
          <div class="remainig-time" data-step="3" data-intro="Remainig Time:5hrs">Remainig Time: <span>10 hours</span></div>
          <div class="remainig-budget" data-step="4" data-intro="Remainig Budget:Rs.1000">Distance: <span>300 Km</span></div>
        </div>

      </div>
      <div class="game-content">
        <div class="instruction">
          <div class="instruction_but" data-toggle="modal" data-target="#myModal">Instructions</div>
          <div class="play_but" id="play">Play</div>
        </div>

        <div id="myModal" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body modal-new">
        <h1>You are currently in Chennai</h1>
        <p>You have a package which is to be delivered in Mumbai within 36 hours.
        </p>
        <button type="submit" data-dismiss="modal" data-toggle="modal" data-target="#myModal1" class="btn btn-primary btn_next"><span>Next</span> <i class="fa fa-chevron-right" aria-hidden="true"></i>
</button>
        </div>
        </div>
        </div>
        </div>

        <div id="myModal1" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body modal-new">
        <h2>You have to cross 3 levels to reach Mumbai with different targets and constraints</h2>
        <button type="submit" data-dismiss="modal" data-toggle="modal" data-target="#myModal2"  class="btn btn-primary btn_next"><span>Next</span> <i class="fa fa-chevron-right" aria-hidden="true"></i>
</button>
        </div>
        </div>
        </div>
        </div>


        <div id="myModal2" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body modal-new">
        <h3><span>Remember:</span> You have 12,000 Rs with you. You should reach Mumbai within this budget</h3>
        <h4>Ensure you do not lose all your resources in a single level</h4>
        <h5>All the best !</h5>
        <button type="submit" data-dismiss="modal" class="btn btn-danger btn_next" id="close"><span>Finish</span>

</button>
        </div>
        </div>
        </div>
        </div>


        <div class="levelcontent" style="display:none;">
        <h2>Your first task is to reach Bangalore which is 300 Km away. Maximum time allotted to you is 10 hours</h2>
        <h3>You have 3 options</h3>

        <div class="drag-left">
        <div class="plain-section" onclick="location.href = 'Unit2Activity3/plain.html';">
          <img src="Unit2Activity3/images/giphy.gif" alt="plain Journey" />
          <div class="plaindetailes">
          <span class="time">Time: 2 Hour</span>
          <span class="divider">|</span>
          <span class="price">Cost: 4,500 Rs per hour</span>
        </div>
        </div>

        <div class="bus-section" onclick="location.href = 'Unit2Activity3/bus.html';">
          <img src="Unit2Activity3/images/bus-animation.gif" alt="Bus Journey" />
          <div class="plaindetailes">
          <span class="time">Speed: 50km/Hour</span>
          <span class="divider">|</span>
          <span class="price">Cost: 5 Rs/KM</span>
        </div>
        </div>

        <div class="plain-section" onclick="location.href = 'Unit2Activity3/twowheeler.html';">
          <img src="Unit2Activity3/images/giphy1.gif" alt="Two Wheeler Journey" />
          <div class="plaindetailes">
          <span class="time">Speed: 25km/Hour</span>
          <span class="divider">|</span>
          <span class="price">Cost: 2 Rs/KM</span>
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
          <div class="total-time" data-step="5" data-intro="Total Time:10hrs">Total Time: <span>36 hours</span></div>
          <div class="total-budget" data-step="6" data-intro="Total Budget:Rs.10,000">Total Budget: <span>Rs. 12,000</span></div>
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








<!--<button id = "back" style="color: #4dbfbf; background-color: red;" class="btn btn-primary btn-lg"> Back</button>
<button id = "module" style="color: #4dbfbf; float: right; background-color: red;" class="btn btn-primary btn-lg"> Next</button>-->
</body>
</html>


  <script type="text/javascript">

$(document).on('click', '#module', function(){
    window.location = "{{url()}}/SidebarActivitiesPage";
    $.ajax({
          url : "{{url()}}/quick/goToTimer",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/SidebarActivitiesPage";
          }
    });
});

$(document).on('click', '#back', function(){
	  window.location = "{{url()}}/Unit2activity2";
});

</script>
