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
   width: 176px;
   height: 171px;
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
p {
    /*font-family: 'Varela Round', sans-serif;
    color: white;
    margin: 20px;*/
    padding-top: 0px;
}
.modal a.close-modal{
 display: none;
}
.jquery-modal{
 z-index: 11111;
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
.scroll{
  overflow-x: hidden;
}
.footer {
        bottom: 0;
        z-index: 1000;
        width: 100%;
        padding: 10px 0;
    }
    p {
  margin: 5px;
  padding-top: 5px;
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
 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;
   padding-top: 5px;">
     <h2 style="text-align:-webkit-left;font-family: 'Lora', serif;"><span style="margin-left: -44px;">Q1. </span>An automiobile spare parts company wants to set up a 2 Lakh Sqft warehouse in North India since majority of its suppliers are in North and 50% of overall market is in North India. Help the firm choose the location if your rental budget is 25 Lakh Rs per month?</h2>
     
   </div>
 </div>
 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top: 30px">
    <!-- <img src="https://i.ebayimg.com/00/s/NDUwWDQzOA==/z/QCAAAOSw3BJcQRVX/$_75.JPG"> -->
 </div>
</div>

    <div class="quiz-choice correct-q1">
      <p> Jaipur - 12 Rs/Sqft/Month Rental - Good truck linkages</p>
     </div>
     <div class="quiz-choice wrong-q1">
      <p> Delhi - 15 Rs/ Sqft/Month - Great trcuk availabilities</p>
     </div>
     <div class="quiz-choice wrong-q1">
      <p> Udaipur - 10 Rs/Sqft/Month Rental - No trucks for dispatch</p>
     </div>
     <div class="quiz-choice wrong-q1">
      <p> Agra - 13 Rs/Sqft/Month Rental - Good truck linkages</p>
     </div>

     <div>
      <button onclick="myfunction()" style="float: right;">Next</button>
    </div>

     <div style="padding-right: 12px;margin-top: 25px;">
      <a href="#ex1" rel="modal:open" class= "open"><button>Show Solution</button></a>
     </div>
     <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
     <h1 style="border-bottom: 1px solid grey;">Solution</h1>
     <br>
     <h3 style="font-weight: bold;">Step-1</h3>
     <h3>At 12 Rs/Sqft/Month, Jaipur would cost a renat of 24 lakh Rs/Month and is most suited.</h3>
     <h3 style="font-weight: bold;">Step-2</h3>
     <h3>Though Udaipur is chaper, lack of trucks will create distribution hindrances.</h3>
     <h3 style="font-weight: bold;">Step-3</h3>
     <h3>Delhi and Agra are costlier options.</h3>
     <br>
     <hr>
     <center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id = 'clos' >Close</a></center>
    </div>

</div></div></div>

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
     <div class="footer">
  <div class="container" style="text-align: center;">
    <button type="button" class="btn btn-default" style="color: white;float: left;background-color: #bdc3c7;font-size: 15px;" onclick="previousFun()" id="Previous">Previous</button>
    <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;font-size: 15px;" onclick="nextFun()" id="Next">Next</button>
    <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;font-size: 15px;" onclick="stop()" id="FinishQuiz">Finish</button>
  </div>
</div>
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
    /*score++
    console.log(score);
    $data = $('.clock').text().split(':');
    $text = $data[0].trim()+':'+$data[1].trim()+':'+$data[2].trim()*/
    $.confirm({
        title: 'Correct answer!',
        content: 'Congratulations!',
        type: 'green',
        typeAnimated: true,
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
var AllQuestions = {
  data: [
  {
    name:'Which of the following is a factor to determine warehouse location?',
     A: 'Organizational hierarchy of company',
     B: 'Product margin',
     C: 'None of the above',
     D: 'Availabilioty of human resources in the locality for employment',
     E: 'Location of Warehouse - Layout of Building, Human Resource, Consumer Base, Proximity to Linkages, Cost Matrix'
  },
  {
    name:'Which of the following is a storage system classification',
     A: 'Perishable products',
     B: 'Costly storage',
     C: 'Floor space',
     D: 'Pallet storage',
     E: 'Unit Loads, Bulk Storage for Solids, Loose Item Storage, Pallet Storage Systems'
  },
  {
    name:'Which of the following items need strict First Expiry First Out from warehouse?',
     A: 'Clothes',
     B: 'Jewellery',
     C: 'Wood',
     D: 'Dairy Products',
     E: 'Since dairy products have a short shelf life, they have to move from the warehouse on first expiry basis'
  },
  {
    name:'Which of the following scenario requires warehouses near customer demand locations?',
     A: 'Continuous production',
     B: 'High product cost',
     C: 'All',
     D: 'Urgent demand locations',
     E: 'Urgenty demand requires product to be within customer access at a short span of time. Hence storage of products should be close to customer locations'
  }]
}

function myfunction() {
    var index = 0;
    $('.card').empty();
    $('.footer').show();
    $('#Previous').hide();
    $("#FinishQuiz").hide();
    getQuestions(index);
}

function getQuestions(index) {
    var html = '';
    html += '<div class="container"><div class="row" style="margin-left: 3%">  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-top: 5px;"> <h2 style="text-align:-webkit-left;font-family: monospace;"><span style="margin-left: -44px;" id="qqq">Q' + (index + 2) + '. </span>' + AllQuestions.data[index].name +' </h2></div></div></div> <div class="quiz-choice" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].A + '</p></div> <div class="quiz-choice" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].B + '</p></div><div class="quiz-choice" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].C + ' </p></div><div class="quiz-choice" onclick="CorrectAnswer()"><p>'+ AllQuestions.data[index].D + '</p></div><div><br><div style="padding-right: 12px;margin-top: 25px;"><a href="#ex1" rel="modal:open" class= "open"><button>Show Solution</button></a></div><div id="ex1" class="modal"><h1 style="border-bottom: 1px solid grey;">Solution</h1><br><h3>'+AllQuestions.data[index].E +'</h3><br><hr><center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id="clos">Close</a></center></div>';
      $('.card').html(html);
      indexId = index;
      previousQsn = index;
      nextHide =  AllQuestions.data.length;
   }

   
   function WrongAnswer(){
    var x = document.getElementById("qqq").innerHTML;
    console.log(x.substring(1).replace('.',''));
     $.confirm({
        title: 'Wrong Answer!',
        content: "Please choose correct Answer",
        type: 'red',
        typeAnimated: true,
      });
   }

   function CorrectAnswer() {
    $.confirm({
        title: 'Correct answer!',
        content: 'Congratulations!',
        type: 'green',
        typeAnimated: true,
    });
   }

   function nextFun() {

     $('#Previous').show();
    // $('.card').empty();
     index = indexId +1;
     if(index > nextHide-2){
        $("#Next").hide();
        $("#FinishQuiz").show();
     }
     else{
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
   
     $('.card').empty();
     getQuestions(index);
   }
   
   function previousFun() {
     $('.card').empty();
     index = previousQsn - 1;
     if(index < 1){
        $("#Previous").hide();
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
     else{
        $("#Previous").show();
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
     getQuestions(index);
   }

   function stop(){
    var score = 0;
    score++
    console.log(score);
    $data = $('.clock').text().split(':');
    $text = $data[0].trim()+':'+$data[1].trim()+':'+$data[2].trim()
    $.confirm({
        title: 'Congratulations!',
        content: 'You have finished in '+ $text,
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Go To Next Module',
                btnClass: 'btn-green',
                action: function(){
                  window.location = "{{url()}}/DistributionModule";  
                }
            },
        }
    });
   }
</script>
@stop
