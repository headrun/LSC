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
margin: 4px;
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
.footer {
        bottom: 0;
        z-index: 1000;
        width: 100%;
        padding: 10px 0;
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

    <body style="background-color: #f1f1f1;overflow-x: hidden;" id="body">
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
  <div class="card">
    <div class="container">
      <div class="row" style="margin-left: 3%">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-top: 5px;">
            <h2 style="text-align:-webkit-left;font-family: 'Lora', serif;"><span style="margin-left: -44px;">Q1. </span>Which of the following is a platform built on your warehouse floor space, which provides another level of storage?</h2> 
           </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top: 50px">
          <img src="{{asset('assets/img/bulletTrain.png')}}">
        </div> -->
      </div>

       <div class="quiz-choice wrong-q1">
         <p> Industrial Pallet System</p>
       </div>
       <div class="quiz-choice wrong-q1">
         <p> Cantilever Racking</p>
       </div>
       <div class="quiz-choice correct-q1">
         <p> Mezzanine</p>
       </div>
       <div class="quiz-choice wrong-q1">
         <p> None of the above</p>
       </div>

    <div style="padding-right: 12px;margin-top: 25px;display: none;">
      <a href="#ex1" rel="modal:open" class= "open"><button>Show Solution</button></a>
    </div>
     <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
      <h1 style="border-bottom: 1px solid grey;">Solution</h1>
      <br>
      <h3 style="font-weight: bold;">Step-1</h3>
      <h3>Expiry: 1-12-2019; Shelf Life: 3 months</h3>
      <h3 style="font-weight: bold;">Step-2</h3>
      <h3>Manufacturing Date: Expiry Date - Shelf Life = 1-9-2019</h3>
      <br>
      <hr>
      <center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id="clos">Close</a></center>
    </div>

    </div>
  </div>

    <!-- <div id="question-two" class="quiz-ans-container" style="padding-left: 190px;padding-bottom: 63px;">
      <h2>Q2. Which of these disease affect steadiness of your hands?</h2>
      <div class="row" style="padding-left: 55px;">
      <div class="quiz-choice correct-q2">
        <p>Parkinson's Disease</p>
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
</html>

<script>
  $(document).ready(function(){
    $(".footer").hide();
  });
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
        content: 'Congratulations you have finished in '+ $text,
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'GO TO NEXT SAMPLE QSN',
                btnClass: 'btn-green',
                action: function(){
                  window.location = "{{url()}}/Unit5Module2Sample2";  
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
		text: 'Back to Concept',
                btnClass: 'btn-red',
                action: "{{url()}}/Unit5Module2Concept1",
                action: function(){
                 window.location = "{{url()}}/Unit5Module2Concept1";
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

/*window.addEventListener("load",function(event){
  x=document.querySelector('.c1'); 
  y=document.querySelector('.time');
  total=20;
  t=total;
  s=setInterval(timer,1000);
});

function timer(){
  if(t===0)
    clearInterval(s);
  sec=(t%60).toString();
  min=Math.round(t/60).toString();
  console.log(min.length);
  if(min.length===1)
    min='0'+min;
  if(sec.length===1)
    sec='0'+sec;
  y.innerHTML=min+':'+sec;
  ratio=(t/total);
  rad=parseInt(x.getAttribute('r'));
  progress=Math.ceil(rad*(22/7)*2*(1-ratio));
  t-=1;
  x.style.strokeDashoffset=progress.toString();
  console.log(progress.toString());
}*/

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
