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
  </style>

</head>

    <body style="background-color: #f1f1f1;overflow-x: hidden;">
      <div class="container">
    <h1 style="text-align: center;font-family: monospace;">QUIZ</h1>
    <body onload="activate()">
    <div id="center">
    <div class="clock">
      <span id="hours">00</span><span class=""> :</span>
      <span id="mins">00</span><span> :</span>
      <span id="secs">00</span>
    </div>
    <div class="innerCircle"></div>
    <div class="behindCircle">
    </div>
    </div>
  </body>
    <div class="card">
    <div class="container">


  

  <div class="row" style="margin-left: 3%">
 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-top: 5px;">
     <h2 style="text-align:-webkit-left;font-family: 'Lora', serif;"><span style="margin-left: -42px;">Q1. </span>You are going to your friends house. You have 3 routes,
      <br>Route 1 is 12 Km long but will take 1 hour due to traffic.
      <br>Route 2 takes 20 km and will take 45 minutes.
      <br>Route 3 takes 30 km and will take 30 minutes.
      <br>You have to spend 1 Rs per Km for petrol. He has a budget of 25 Rs. Which route will he take to reach at the earliest and how much will he spend?
     </h2>
   </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top: 80px">
    <img src="{{asset('assets/img/OptimizationTimer.jpg')}}">
  </div>
</div>

<div class="quiz-choice wrong-q1" style="margin-left: 125px;">
       <p style="text-align:center;margin-top: 0px;"> Route 1;<br>20 Rs</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p style="text-align:center;margin-top: 0px;"> Route 1;<br>12 Rs</p>
     </div>
     <div class="quiz-choice correct-q1">
       <p style="text-align:center;margin-top: 0px;"> Route 3;<br>30 Rs</p>
     </div>

</div></div>
    <!-- <div id="question-two" class="quiz-ans-container" style="padding-left: 190px;padding-bottom: 63px;">
      <h2>Q2. Which of these disease affect steadiness of your hands?</h2>
      <div class="row" style="padding-left: 55px;">
      <div class="quiz-choice correct-q2">
        <p>Parkinson’s Disease</p>
      </div>
      <div class="quiz-choice wrong-q2">
        <p>Mad Cow Disease</p>
      </div>
      <div class="quiz-choice wrong-q2">
        <p>Chicken Pox</p>
      </div>
      <div class="quiz-choice wrong-q2">
        <p>Cancer</p>
      </div>
    </div>
    </div> -->

    <!-- <div id="question-three" class="quiz-ans-container" style="display:none;">
      <h2>Q3. Which of these activities requires hand eye co-ordination?</h2>
      <div class="quiz-choice wrong">
        <p>Kicking a ball</p>
      </div>
      <div class="quiz-choice correct-q3">
        <p>Threading a needle</p>
      </div>
      <div class="quiz-choice wrong">
        <p>Running</p>
      </div>
      <div class="quiz-choice wrong">
        <p>Reading a book</p>
      </div>
    </div>

    <div id="question-four" class="quiz-ans-container" style="display:none;">
      <h2>Q4. Which part of the eye allows you to focus?</h2>
      <div class="quiz-choice wrong">
        <p>Iris</p>
      </div>
      <div class="quiz-choice wrong">
      <p>Pupil</p>
      </div>
      <div class="quiz-choice wrong">
        <p>Cornea</p>
      </div>
      <div class="quiz-choice correct-q4">
        <p>Lens</p>
      </div>
    </div>

    <div id="question-five" class="quiz-ans-container" style="display:none;">
      <h2>Q5. Which nerve sends information from the eye to the brain?</h2>
      <div class="quiz-choice correct-q5">
        <p>Optic</p>
      </div>
      <div class="quiz-choice wrong">
        <p>Central</p>
      </div>
      <div class="quiz-choice wrong">
        <p>Spinal</p>
      </div>
      <div class="quiz-choice wrong">
        <p>Sensory</p>
      </div>
    </div> -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
</body>


<div class="row" style="margin-left: 8%; margin-top: 47px;padding-top: 20px;display: none;">
  <h2 style="text-align:-webkit-left;"><span style="margin-left: -44px;">Q1.</span>Your playground is 30 Km away. You and your 3 cousins needs to reach there by 9:30AM. Time now in 8:00 AM. All of you are 14 years old. How will you go if all of you needs to reach on time and when will you reach?P.S: Your father will accompany you if you want to go by car. Only 4 people can travel in a car</h2>

      <div class="col-md-12 col-sm-12" style="color: white;padding-left: 100px;">
        <div class="quiz-choice wrong-q1" style="margin-left: 80px;">
        <img src="images/module3/car.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Suresh 4.5 Minutes</p>

        </div>

        <div class="quiz-choice wrong-q1" style="margin-left: 80px;">

        <img src="images/module3/bus.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">

        <p style="padding-top: 0px;"> Ramesh 4 Minutes</p>

        </div>

        <div class="quiz-choice wrong-q1" style="margin-left: 80px;">

        <img src="images/module3/time.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">

        <p style="padding-top: 0px;"> Suresh 10 Minutes</p>

        </div>
        </div>
      </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

  </body>
</html>

<script>
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
        content: 'Congratulations you have finished in '+ $text,
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Go To Next Module',
                btnClass: 'btn-green',
                action: function(){
                 window.location = "{{url()}}/Module"; 
                }
            },
        }
    });
  });

  // $('.correct-q2').click(function(){
  //   score++
  //     console.log(score);
  //   $.confirm({
  //       title: 'Correct answer!',
  //       content: 'Insert Fact Here',
  //       type: 'green',
  //       typeAnimated: true,
  //       buttons: {
  //           tryAgain: {
  //               text: 'Congratulations',
  //               btnClass: 'btn-green',
  //               action: function(){
  //                 // $('#question-three').show();
  //                 // $('#question-two').hide();
  //               }
  //           },
  //       }
  //   });
  // });


  //window.location.href = "index.html";

  $('.wrong-q1').click(function(){
    $.confirm({
        title: 'Wrong Answer!',
        content: "Please choose correct Answer",
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Back To Concept',
		btnClass: 'btn-red',
		action: function(){
		    window.location = "{{url()}}/Module4/Concept";
		}
            },
        }
    });
  });

  // $('.wrong-q2').click(function(){
  //   $.confirm({
  //       title: 'WRONG!',
  //       content: "This isn't the answer, choose another!",
  //       type: 'red',
  //       typeAnimated: true,
  //       buttons: {
  //           tryAgain: {
  //               text: 'Try Again',
  //               btnClass: 'btn-red',
  //           },
  //       }
  //   });
  // });

  // End Quiz JS

});

var sec = -1;
var min = 0;
var hour = 0;
var time;
var timer_is_on = 0;function timer(){
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
}function activate(){
if(!timer_is_on){
 timer_is_on=1;
 time=setInterval(timer, 1000);
 timer();
}
}
</script>
@stop
