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
  <link rel="stylesheet" href="{{url()}}/css/averagetimer.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
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
text-align: center;
}
</style>
<style>
    #center {
     width: 410px;
   height: 418px;
   position: absolute;
   /* float: right; */
   right: -10%;
   /* left: 70%; */
   top: 22%;
   /* margin-left: 137px; */
   /* margin-top: -213px; */
}
.behindCircle {
    width: 150px;
    height: 150px;
    background-color: #baacd8;
    border-radius: 50%;
    z-index: 1;
    margin: -20px;
    position: absolute;
    top: 101px;
    left: 90px;
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
.scroll{
  overflow-x: hidden;
}
button {
  background-color: #7d929d;
  color: white;
}
button:hover {
    cursor: pointer;
    /* background-color: #E6772D; */
    background-color: #7f60c6;
    color: white;
}
  </style>

</head>

    <body style="background-color: #f1f1f1;overflow-x: hidden;" id = "body">
      <div class="container">
    <h1 style="text-align: center;font-family: monospace;">QUIZ</h1>
       <body onload="activate()">
<div id="center">
 <div class="clock">
   <span id="hours">00</span><span class=""> :</span>
   <span id="mins">00</span><span> :</span>
   <span id="secs">00</span>
 </div>
<!-- <div class="largeCircle">
</div -->
 <div class="innerCircle">
 </div>
 <div class="behindCircle">
 </div>
</div>
</body>
    <div class="card">
    <div class="container">
    

    <div class="row" style="margin-left: 3%">
 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;
   padding-top: 5px;">
     <h2 style="text-align:-webkit-left;font-family: monospace;"><span style="margin-left: -44px;">Q1.</span> An apparel firm hols 50 lakh Rs worth of products in its retail outlety. If this entire stock is depleted in 2 months, what is the annual sale?</h2>
     
   </div>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-top: 51px;display: none;">
    <img src="https://thumbs.gfycat.com/ShyGracefulHornedtoad-mobile.jpg">
 </div>
</div>

<div class="quiz-choice wrong-q1">
       <p> 600 lakhs</p>
     </div>
     <div class="quiz-choice correct-q1">
       <p> 300 lakhs</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p> 25 lakhs</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p> None of the above</p>
     </div>

     <div style="padding-right: 12px;margin-top: 25px;">
      <a href="#ex1" rel="modal:open" class= "open"><button>Show Solution</button></a>
     </div>
     <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
     <h1 style="border-bottom: 1px solid grey;">Solution</h1>
     <br>
     <h3 style="font-weight: bold;">Step-1</h3>
     <h3>Inventory: 50 Lakh Rs</h3>
     <h3 style="font-weight: bold;">Step-2</h3>
     <h3>Time to sell 50 Lkah worth of products: 2 months</h3>
     <h3 style="font-weight: bold;">Step-3</h3>
     <h3>Average sales per month: 25 lakhs</h3>
     <h3 style="font-weight: bold;">Step-4</h3>
     <h3>Sales per year: Sales per month * Number of months = 25 lakhs * 12 = 300 lakhs Rs</h3>
     <br>
     <hr>
     <center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id="clos">Close</a></center>
    </div>

   </div>
</div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

  </body>

</html>
<!--================Footer Area =================-->
  
  <!--================End Footer Area =================-->

<script>
  $( ".open" ).click(function() {
    $('.modal').fadeIn('slow');
  });
  
  $( "#clos" ).click(function() {
	      var body = document.getElementById("body");
	          body.classList.add("scroll");
  });

  $(document).ready(function(){
  // Quiz JS
  // Global Default
  jconfirm.defaults = {
    boxWidth: '30%',
    useBootstrap: false,
  };

  var score = 0;

  $('#question-two').hide();
  // $('#question-three').hide();
  // $('#question-four').hide();
  // $('#question-five').hide();
  $('#quiz-result').hide();

  $('.correct-q1').click(function(){
    score++
    console.log(score);
    $data = $('.clock').text().split(':');
    $text = $data[0].trim()+':'+$data[1].trim()+':'+$data[2].trim()
    $.confirm({
        title: 'Correct answer!',
        content: 'Congratulations! You have finished in '+ $text,
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Go To Next Module',
                btnClass: 'btn-green',
                action: function(){
                  window.location = "{{url()}}/DistributionModule1";  
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
		text: 'Back to Concept',
                btnClass: 'btn-red',
                action: "{{url()}}/Unit3Module1Concept",
                action: function(){
                 window.location = "{{url()}}/Unit3Module1Concept";
                }

            },
        }
    });
  });



});



var sec = -1;
var min = 0;
var hour = 0;
var time;
var timer_is_on = 0;

function timer(){
  sec++; 
  if(min > 59){
    hour++;
    if(hour < 10){
      hour = '0' + hour;
    }
    document.getElementById("hours").innerHTML=hour;
    min=0;
  }
  if(sec > 59){
    min++;
    if(min < 10){
      min = '0' + min
    }
    document.getElementById("mins").innerHTML=min;
    sec=0;
  }
  if (sec < 10)
    sec = '0' + sec;
  document.getElementById("secs").innerHTML=sec; 
}

function activate(){
  if(!timer_is_on){
    timer_is_on=1;
    time=setInterval(timer, 1000);
    timer();
  }
}

</script>

  @stop

