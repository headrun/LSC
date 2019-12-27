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
   width: 195px;
   height: 195px;
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
padding-top: 20px;
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
 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
   <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;
   padding-top: 5px;">
     <h2 style="text-align:-webkit-left;font-family: monospace;"><span style="margin-left: -44px;">Q1.</span> Consider vegetables which has a shelf live of 2-3 days. What would suggest is a right distribution channel</h2>
     
   </div>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-top: 51px;display: none;">
    <img src="https://thumbs.gfycat.com/ShyGracefulHornedtoad-mobile.jpg">
 </div>
</div>

<div class="quiz-choice correct-q1">
       <p> Short distribution channel</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p> Long distribution channel</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p> No channel</p>
     </div>
     <div class="quiz-choice wrong-q1">
       <p> None of the above</p>
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
     <h3>For perishable products, longer distribution chain might lead to higher loss due to expiry of products.</h3>
     <h3 style="font-weight: bold;">Step-2</h3>
     <h3>However,s ince both supplier and customer markets are scattered, no channel of dsitribution is difficult.</h3>
     <h3 style="font-weight: bold;">Step-3</h3>
     <h3>Shorter channels such as Mandi/ market is ideal.</h3>
     <br>
     <hr>
     <center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id="clos">Close</a></center>
    </div>

   </div>
</div>

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
<!--================Footer Area =================-->
  
  <!--================End Footer Area =================-->

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

 

  $('.wrong-q1').click(function(){
    $.confirm({
        title: 'Wrong Answer!',
        content: "Please choose correct Answer",
        type: 'red',
        typeAnimated: true,
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

var AllQuestions = {
  data: [
  {
    name:'Which of the following is not a correct Distribution network?',
     A: 'Manufacturer-Retailer-Wholesaler',
     B: 'Manufacturer-Dealer',
     C: 'Manufacturer-Wholesaler-Retailer',
     D: 'All of the above',
     E: 'Retailer sells to end customers. Wholesalers generally can sell to retailers or direct customers'
  },
  {
    name:'Which of the following is not a market related factor affecting distribution channel?',
     A: 'Perishability',
     B: 'Buy Quantity',
     C: 'Buying habits',
     D: 'Market Size',
     E: 'Perishability is a product related factor affecting distribution channel'
  },
  {
    name:'A small sized manufacturing unit in tiruppur wants to sell to customers all across the country with minimal middle men and with little investment. Which is the most stuitable channel of distribution?',
     A: 'Online or E-Commerce',
     B: 'Setting up retail stores across the country',
     C: 'Wholesaler network',
     D: 'All of the above',
     E: 'Setting up retail stores will have irect access to customers, but needs high investments. Wholesaler network, though not very costly, will need further middle men such as retailers before the material reaches consumers. Online or E-commerce is the most suitable way to eliminate middle men and also have lesser cost of distribution while reaching customers'
  },
  {
    name:'True or False: Perishable items require shorter chain of distribution.',
     A: 'TRUE',
     B: 'FALSE',
     C: 'Perishability is not related to distribution chain',
     D: '',
     E: 'Highly perishable products require a shorter chain to ensure product does not expire before reaching customer'
  },
  {
    name:'Certain chemicals are only bought by industries or manufacturing units for making specialized chemicals or commercial products such as cosmetics/ detergents. Which is of these channels is not an appropriate distribution mode for the chemical firm?',
     A: 'Retail and Online',
     B: 'Retail',
     C: 'Online',
     D: 'Distribution',
     E: 'Retail and Online targets end consumer. Since chemicals are not bought by end consumers, retail/online are not relevant channels for distribution'
  },
  {
    name:'Pac-G biscuits is sold at 7 Rs per packet. Analysis by the company revealed that setting up production unit and producing the biscuit is veryc heap compared to transporting the biscuits to various cities. Which of the below, do you think is the right channel for the company?',
     A: 'Multiple manufacturing units to reduce the transportation of the biscuits',
     B: 'One Manufacturing unit; Many warehouses across country to ship biscuits from factory to warehouses and then to customers',
     C: 'Any of the above',
     D: '',
     E: 'Since transportation is costlier than production, it is better to set up many manufturing units rather than make the product centrally and transport it across the country'
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
  var optD = AllQuestions.data[index].D;
  var hiddenClassD = optD == '' ? 'hidden' : '';
    var html = '';
    html += '<div class="container"><div class="row" style="margin-left: 3%">  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-top: 5px;"> <h2 style="text-align:-webkit-left;font-family: monospace;"><span style="margin-left: -44px;" id="qqq">Q' + (index + 2) + '. </span>' + AllQuestions.data[index].name +' </h2></div></div></div> <div class="row"><div class="quiz-choice" onclick="WrongAnswer(this)"><p>'+ AllQuestions.data[index].A + '</p></div> <div class="quiz-choice" onclick="CorrectAnswer()"><p>'+ AllQuestions.data[index].B + '</p></div><div class="quiz-choice" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].C + ' </p></div><div id ="opt4" class="quiz-choice'+hiddenClassD+'" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].D + '</p></div></div><div><br><div style="padding-right: 12px;margin-top: 25px;"><a href="#ex1" rel="modal:open" class= "open"><button>Show Solutionn</button></a></div><div id="ex1" class="modal"><h1 style="border-bottom: 1px solid grey;">Solution</h1><br><h3>'+AllQuestions.data[index].E +'</h3><br><hr><center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id="clos">Close</a></center></div>';
      $('.card').html(html);
      indexId = index;
      previousQsn = index;
      nextHide =  AllQuestions.data.length;
   }

   
   function WrongAnswer(thisinp){
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

