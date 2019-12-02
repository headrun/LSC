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

  <div class="row" style="padding: 20px;">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-top: 5px;">
     <h2 style="text-align:-webkit-left;font-family: 'Lora', serif;"><span style="margin-left: -44px;">Q1. </span>Travel from Vishakapatnam to Kolkata (1000 km) is now possible through ship. Ticket cost 20,000 Rs. You can also go by car which would cost you 12 Rs per Km. Buy you need to stay overnight in a hotel whose room rent is 4,500 Rs. Which is cheaper option and by how much?
     </h2>
   </div>
  </div>
  
    <div class="row">
     <div class="quiz-choice wrong-q1" style="margin-left: 110px;">
         <img src="{{asset('assets/img/CostTimer1.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
          <p style="padding-top: 0px;"> Ship Cheaper by 3,500 Rs</p>
       </div>
       <div class="quiz-choice correct-q1">
         <img src="{{asset('assets/img/CostTimer2.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
          <p style="padding-top: 0px;"> Car Cheaper by 3,500 Rs</p>
       </div>
       <div class="quiz-choice wrong-q1">
         <img src="{{asset('assets/img/CostTimer3.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
          <p style="padding-top: 0px;"> Car Cheaper by 16,500 Rs</p>
       </div>
       <div class="quiz-choice wrong-q1">
         <img src="{{asset('assets/img/CostTimer4.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
	  <p style="padding-top: 0px;"> Both costs the same</p>
       </div>
    </div>
<br><br><br><br><br>
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

<!-- <div class="row">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-left: 99px;
   padding-top: 5px;">
     <h2 style="text-align:-webkit-left;"><span style="margin-left: -44px;">Q1.</span>Your playground is 30 Km away. You and your 3 cousins needs to reach there by 9:30AM. Time now in 8:00 AM. All of you are 14 years old. How will you go if all of you needs to reach on time and when will you reach?P.S: Your father will accompany you if you want to go by car. Only 4 people can travel in a car</h2>
     <div class="quiz-choice wrong-q1">
       <p> 1 hour</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p> 0.5 hour</p>
     </div>
     <div class="quiz-choice correct-q1">
       <p> 2 hours</p>
     </div>
   </div>
 </div>
</div> -->


<!-- <div class="row" style="margin-left: 8%; margin-top: 47px;padding-top: 20px;">
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
      </div> -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

  </body>

 <!--  <footer class="footer_area" style="height:84px;margin-top: 56px;">
    <div class="container">
      <div class="row single-footer-widget">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="copy_right_text">
            <p style="margin-top: -44px;">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="" target="_blank">LSC</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="social_widget"     style="padding-top: 0px;margin-top: -7px;">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
</html>
<!--================Footer Area =================-->
  
  <!--================End Footer Area =================-->

<script>
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
                  window.location = "{{url()}}/Module?open=module3";
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
                 window.location = "{{url()}}/Module2/Concept";
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
