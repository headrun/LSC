@extends('layout.sidebar1')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <link rel="stylesheet" href="{{url()}}/css/averagequestion.css">
  <!--  ------------------ pop up ------------------   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- -------------- pop up end  ----------  -->
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
    /*font-family: LoraBold;*/
    line-height: 1.3333;
    font-weight: bold;
    margin-left: -40px;
    padding-left: 40px;
    /*background-color: #f1f1f1;*/
}
 
 .card {
   background-color: white;
   width: 86%;
   margin: 0 auto;
   float: none;
   margin-bottom: 10px;
         padding: 20px;
   border: 10px solid rgba(0,0,0,0.2);
   border-radius: 10px;
 }
 .quiz-choice {
   background-color: #baacd8;
 }
 .header_area {
   background-color: #7f5fc6;
 }
 #submit {
 font-size: 18px;
 font-family: 'Varela Round', sans-serif;
 margin: 5px;
 color: white;
 background-color: #7d929d;
 border: none;
 border-radius: 20px;
 padding: 10px;
 width: 200px;
}

#submit:hover {
 cursor: pointer;
 background-color: #7f60c6;
 color: white;
}
p{
font-family: 'Lora', serif;
color: #333333;
font-size: 17px;
margin-top: 50px;
}
.jconfirm-content{
 font-size: 15px;
}
.modal a.close-modal{
 display: none;
}
.jquery-modal{
  z-index: 11111;
}
.modal{ 
  max-width:700px;
}
</style>

</head>

    <body style="background-color: #f1f1f1;">
      <div class="container">
    <h1 style="font-family: monospace;">QUIZ</h1>
    <div class="card">
    <div class="container">
    <div class="row" style="margin-left: 7%">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 " style="color: white;">
        <div id="question-one" class="quiz-ans-container" style="padding-bottom: 63px;    padding-left: 0px;margin-right: 20px;">
        <h2 style="text-align: -webkit-left;font-family: 'Lora', serif;"><span style="margin-left: -42px;">Q1. </span>Nirav has to reach Mumbai from London within 24 hours. He can book a direct flight from London to Mumbai which will take 12 hours for Rs. 50,000. He can also fly from London to Delhi (12 hours) for 25,000 Rs  and another flight from Delhi to Mumbai (4 hours) for 10,000 Rs with a 2 hour stop over in Mumbai. As a third option, after reaching Delhi, he can drive to Mumbai (14 hours) for 5,000 Rs. What is the cheapest mode for Nirav to reach Mumbai within 24 hours and how much time will he take?
        </h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
        <img src="{{asset('assets/img/OptimizationSample.jpg')}}" width="350px" height="300px" alt="Image" style="margin-left: 0px;margin-top: 4%;">
      </div>
    </div>
    <div class="row" style="margin-left: 8%; margin-top: -2%;">
     <div class="col-md-12 col-sm-12" style="color: white;">
       <div class="quiz-choice wrong-q1">
       <p style="text-align:center;margin-top: -2px;"> Direct flight to Mumbai ; 12 hours</p>
       </div>
       <div class="quiz-choice wrong-q1">
       <p style="text-align:center;margin-top: -2px;"> Flight to Delhi and Drive to Mumbai ; 24 hours</p>
       </div>
       <div class="quiz-choice correct-q1">
       <p style="text-align:center;margin-top: -2px;"> Flight to Delhi and then fly to Mumbai ; 18 hours</p>
       </div>
       <div class="quiz-choice wrong-q1" style="margin-right: 2px;">
       <p style="text-align:center;margin-top: -2px;"> There is no way to reach in 24 hours</p>
       </div>
     </div>
   </div>
   <div style="padding-right: 12px;margin-top: 25px;">
     <a href="#ex1" rel="modal:open"><button>Show Solution</button></a>
     <button class="concept" style="float: right;">Go To Concept</button>
   </div>
   <!-- Modal HTML embedded directly into document -->
   <div id="ex1" class="modal">
    <h1 style="border-bottom: 1px solid grey;">Solution</h1>
    <br>
    <h3 style="font-weight: bold;">Step-1</h3>
    <h3>Nirav has to reach mumbai From London</h3>
    <h3 style="font-weight: bold;">Step-2</h3>
    <h3>Nirav will reach Mumbai on direct flight which will take 12 hours for Rs 50,000</h3>
    <h3 style="font-weight: bold;">Step-3</h3>
    <h3 style="font-weight: bold;">If Nirav Fly London to Delhi and fly delhi to mumbai,</h3>
    <h3>Nirav will reach Delhi, which will take 12 hours for Rs 25,000 and another flight will take 4 hours for 10,000 and 2 hour stop</h3>
    <h3>Nirav will reach mumbai through delhi and fly to mumbai, which will take 18 hours for 35,000</h3>
    <h3 style="font-weight: bold;">Step-4</h3>
    <h3 style="font-weight: bold;">If Nirav Fly London to Delhi and drivei to mumbai,</h3>
    <h3>Nirav will reach Delhi, which will take 12 hours for Rs 25,000 and Drive to mumbai which will take 14 hours for 30,000</h3>
    <h3>Nirav will reach mumbai through delhi and drive to mumbai, which will take 26 hours for 30,000</h3>
    <h3 style="font-weight: bold;">Step-5</h3>
    <h3>Chepest mode to reach mumbai within 24 hours is flight to delhi and then flight to mumbai; time 18 hours and cost 35,000</h3>
    <br>
    <hr>
    <center><a href="#" rel="modal:close" style="font-size: 20px; text-decoration: none;">Close</a></center>
   </div>

 </div></div></div>

    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <!-- <footer class="footer_area" style="margin-top: 10px;height: 80px;">
    <div class="container">
      <div class="row single-footer-widget">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="copy_right_text">
            <p style="margin-top: -45px;">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="" target="_blank">LSC</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="social_widget"     style="padding-top: 18px;margin-top: -22px;">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
</body>
</html>

<script>
  $( ".open" ).click(function() {
   $('.modal').fadeIn('slow');
});
  $(document).ready(function(){
    jconfirm.defaults = {
    boxWidth: '30%',
    useBootstrap: false,
  };

  var score = 0;

  $('#question-two').hide();
  $('#concept').hide();
  $('#question-three').hide();
  $('#question-four').hide();
  $('#question-five').hide();
  $('#quiz-result').hide();


  $('.correct-q1').click(function(){
    score++
    console.log(score);
    $.confirm({
        title: 'Correct answer!',
        content: 'Congratulations',
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: "It's  Correct",
                btnClass: 'btn-green',
                // action: "https://www.w3schools.com/w3css/w3css_icons.asp"
                action: function(){
                  // $('#concept').show();
                  // $('#question-one').hide();
                  
                }
            },
        }
    });
  });

 

  $('.wrong-q1').click(function(){
    $.confirm({
        title: 'Wrong Answer!',
        content: "Please choose correct Answer",
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Try Again',
                btnClass: 'btn-red',
            },
        }
    });
  });

  // End Quiz JS

});
</script>


<script type="text/javascript">

$(document).on('click', '.concept', function(){
    $.ajax({
          url : "{{url()}}/quick/goToConcept",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Module4/Concept";
          }
    });
});
</script>

@stop
