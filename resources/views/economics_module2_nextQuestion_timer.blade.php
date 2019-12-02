<!doctype html>
<html lang="en" style="width: 100%; position:fixed;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Angel Nguyen">
  <meta name="description" content="An eLearning app for Hand-Eye co-ordination">
  <meta name="keywords" content="elearning, education, hand, eye, coordination, hands4eyes">
  <!-- <link rel="stylesheet" type="text/css" href="main.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <title>H4E Quiz</title>
  <!-- <link rel="stylesheet" href="quiz.css"> -->
  <!-- <script src="quiz.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{url()}}/css/averagetimer.css">
  </head>
  <style type="text/css">
    #center {
    width: 410px;
    height: 418px;
    position: absolute;
    /* right: 90%; */
    /* left: 90%; */
    margin-left: 137px;
    margin-top: -230px;
} 
.jconfirm-content{
 font-size: 15px;
}
  </style>

<!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <h2 style="color: white;"><a href="{{url()}}/Subjects" style="color: white;">Viveka Techno School</a><span style="margin-left: 500px;color: white;">Ramesh</span></h2>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a href="{{url()}}/login" class="primary_btn">Log Out</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
<!-- bodyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy -->
<body>
    <<!-- a href='index.html'><button type="button" name="home" id='btn-home'><i class='fa fa-home fa-2x'></i></button></a> -->
    <h1>QUIZ</h1>
    <div class="card">
    <div class="container">

    
    
     <!-- <<<----------timer-------->
     <!-- <div class="timer">
         <span class="time"></span>
         <svg width=200 height=200 class="svg_timer">
            <circle class="c1" cx=100 cy=100 r=80>
         </svg>
    </div> -->


    <div class="row">
 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-left: 99px;
   padding-top: 5px;">
     <h2 style="text-align:-webkit-left;"><span style="margin-left: -44px;">Q1.</span>Economics module 2 next qsn's timer qsn
     </h2>
     <div class="quiz-choice wrong-q1">
       <p>Same Day 6 PM</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p>Same Day 9 PM</p>
     </div>
     <div class="quiz-choice correct-q1">
       <p>Next Day 6 AM</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p>Next Day 6 PM</p>
     </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top: 180px">
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
<!-- <div class="seconds">
 <div class="hand small"></div>
</div>
<div class="minutes">
 <div class="hand medium"></div>
</div>
<div class="hours">
 <div class="hand large"></div>
</div> -->
</div>
</body>
    <img src="{{url()}}/images/module1/lorry.jpg">
  </div>
</div>

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

  </body>
  <!-- <footer class="footer_area" style="height:84px;margin-top: 56px;">
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
                 window.location = "{{url()}}/EconomicsModule?open=module2"; 
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
        title: 'WRONG!',
        content: "This isn't the answer, choose another!",
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Back to Concept',
                btnClass: 'btn-red',
		action: function(){
		   window.location = "{{url()}}/Economics/Module2/next_question/Concept";
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

</script>
