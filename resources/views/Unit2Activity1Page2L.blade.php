@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity3</title>
      <link rel="stylesheet" href="Unit2Activity1a/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit2Activity1a/css/fontawesome.css">
      <link rel="stylesheet" href="Unit2Activity1a/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit2Activity1a/css/style.css">
      <link rel="stylesheet" href="Unit2Activity1a/css/introjs.css">
      <link rel="stylesheet" href="Unit2Activity1a/fonts.css">

   </head>
   <style type="text/css">
    .watcBack{
      float: left;
      z-index: 99;
      margin-top: 13px;
      bottom: 0px;
      right: 40px;
    }
    .watcBack a{
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
    .watc{
      float: right;
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
   <body class="newbg">
     <div class="content-section">
      <h1>Let us now design a transportation strategy for a company		</h1>
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 1/3">Level: <span class="levelnum">2 </span><span class="levelnum1">/ 2</span></div>

        <div class="remainig-data">
        <div class="remainig-budget" data-step="4" data-intro="Mileage:10 KM per litre">Mileage:  <span>10 KM per litre</span></div>
        <div class="remainig-budget" data-step="3" data-intro="Cost:Rs. 50 Per KM">Cost: <span>Rs. 50 Per KM</span></div>
          <div class="remainig-budget" data-step="3" data-intro="Capacity of Fuel:60 Liters">Capacity of Fuel: <span>60 Liters</span></div>
        </div>

      </div>
      <div class="game-content">





        <div class="levelcontent">


          <div class="a3_image">
          <img src="Unit2Activity1a/images/a3_diagram.svg">
         </div>

         <div class="questions">
           <h1>Can truck directly go from Noida to Varanasi without refuelling the tank? </h1>
           <ul>
             <li><button type="button" data-toggle="modal" data-target="#wrong_popup">Yes</button></li>
             <li class="active"><button type="button">No</button></li>
           </ul>

<div class="parameters">
           <h1>Fill the parameters </h1>
           <div class="center_section">
           <div class="parameter1">
             <label>Total Distance</label>
             <input type="text" placeholder="Enter Total Distance">
           </div>
           <div class="parameter1">
             <label>Total Cost</label>
             <input type="text" placeholder="Enter Total Cost">
           </div>
           <div class="parameter1">
             <label>&nbsp;</label>
            <button type="button" data-toggle="modal" data-target="#right_popup">Submit</button>
           </div>

         </div>
         </div>
         </div>

    <!-- <div class="instruction">
      <a href="selection.html" class="play_but" >Let's Play</a>
    </div> -->

        </div>




      </div>

      <div class="bottom-title">
        <div class="watcBack"><a href="/Unit2CostActivity">Back</a></div>
        <div class="bottom-heading"  data-step="1" data-intro="Transportation Strategy">Transportation Strategy</div>
	<!-- <button id = "next" style="color: #4dbfbf; float: right; background-color: red;" class="btn btn-primary btn-lg"> Home</button> -->
  <div class="watc"><a href="/basicModule">Next</a></div>
      </div>

     </div>



   </body>

   <div class="modal fade" id="wrong_popup">
    <div class="modal-dialog modal-md">
      <div class="modal-content">


        <!-- Modal body -->
        <div class="modal-body">
        <div class="error_img"><img src="Unit2Activity1a/images/sorry_truck.svg"></div>
        <div class="popup_content"><h4>Truck stopped min way due to lack of fuel.</h4>
        <p>You did not complete your mission</p>

          <button type="button" class="retry_btn" data-dismiss="modal">Re-Answer <i class="fas fa-redo"></i> </button>
        </div>
        </div>



      </div>
    </div>
  </div>


  <div class="modal fade" id="right_popup">
   <div class="modal-dialog modal-md">
     <div class="modal-content">


       <!-- Modal body -->
       <div class="modal-body">

       <div class="popup_content"><h4 class="congratulations">Congratulations! </h4>
       <p>You have come to end of activity</p>

         <button type="button" class="retry_btn" data-dismiss="modal">Close</button>
       </div>
       </div>



     </div>
   </div>
 </div>


   <script src="Unit2Activity1a/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit2Activity1a/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit2Activity1a/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="Unit2Activity1a/js/intro.js" type="text/javascript"></script>
   <script type="text/javascript">


    $(document).ready(function(){
      $("#start").modal('show');
    });

$(document).on('click', '#next', function(){
  window.location = "/SidebarLearningPage";
});

   </script>
</html>
@stop