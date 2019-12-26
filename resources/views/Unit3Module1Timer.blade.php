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
    name:'Distribution channels can be categorized as B2B (Business to Business) and B2C (Business to Customer). In B2B, customer is a business entity which buys product for further processing or selling. In B2C, customer is the end consumer. Which of the following in B2C?',
     A: 'JKC Chemicals sells chemicals to JD industries which uses chemicals for making batteries in their factory',
     B: 'Craftsvilla sells dresses to customers via Amazon',
     C: 'Company Sells branded detergents to supermarket who resell it',
     D: 'None of the Above',
     E: 'Craftsvilla sells directly to end customers '
  },
  {
    name:'Distribution channels can be categorized as B2B (Business to Business) and B2C (Business to Customer). In B2B, customer is a business entity which buys product for further processing or selling. In B2C, customer is the end consumer. Which of the following in B2B2BC?',
     A: 'Supermarket in Coimbatire to which customers walk in and buy products',
     B: 'JKC Chemicals sells chemicals to JD industries which uses chemicals for making batteries in their factory',
     C: 'Company sells insurance policies with sales guys directly going to each home and selling to customers',
     D: 'None of the Above',
     E: 'JKC sells to JD which uses chemicals in production. Customer JD is a business entity. In other cases, customers are end consumers buying directly'
  },
  {
    name:'Creations Limited sells 10 lakhs Rs worth of chocolate bars per month through e commerce and distributors. If E-commerce contributes to 50% business and each chocolate bar is sold at 100 Rs, how many chocolate bars are sold per month through E-commerce?',
     A: '10000',
     B: '5000',
     C: '5 Lakhs',
     D: '10 lakhs',
     E: 'Total Business per month: 10 Lakh Rs. E-Commerce business per month: 50% of 10 Lakh = 5 Lakh Rs. Price per chocolate bar = 100 Rs. Number of bars sold per month = Total selling price/ Price per unit = 5 Lakh/ 100 = 5000 units.'
  },
  {
    name:'ABC private limited is a spare parts firm which sells pumps through retail outlets and wholesalers. If wholesaler sale is 100 units per month and 10,000 Rs per unit and Retailer sale is 200 units per month at 12,000 Rs per unit, what is the total monthly sale value?',
     A: '25 Lakh Rs',
     B: '34 Lakh Rs',
     C: '10 Lakh Rs',
     D: '24 Lakh Rs',
     E: 'Total Wholesale sales = 100 units * 10,000 Rs pee unit = 10 Lakh Rs. Total Retail sales = 200 units * 12,000 Rs per unit = 24 Lakh Rs. Overall Sales per month = Retail sales + Wholesale sales = Rs 34 Lakhs.'
  },
  {
    name:'Company sells material to retailer at 10 Rs per unit. Retailer sells material at 15 Rs per unit to customer. If 500 units are sold per day, what is the daily profit made by retailer?',
     A: '7500 Rs',
     B: '2500 Rs',
     C: '5000 Rs',
     D: 'None of the above',
     E: 'Retailer cost price per day = 10 Rs*500 units = 5000 Rs.'
  },
  {
    name:'Which of the following channels are known for providing credit facility to both manufacturers and suppliers?',
     A: 'Retailers',
     B: 'Wholesalers',
     C: 'Supermarkets',
     D: 'Online',
     E: 'Wholesalers are known to provide credit facility anf financial support to both retailers and manufacturers. They pay in advance in many cases to manufacturers while providing many days of credit, typically 30 or 60 to retailers.'
  },
  {
    name:'A toy maker sells 1000 units in January and 2000 Units in February. E-Commerce contributed to 50% of his sale in January and 75% of sale in February. How many units additional did he sell in February through e-commerce as compared to January?',
     A: '1500',
     B: '1000',
     C: '500',
     D: '2000',
     E: 'E-Commerce sale in Janurary = 50%*1000 = 500 units. E-Commerce sale in February = 75%*2000 = 1500 units. Additional Sale in February = 1500-500 = 1000 units.'
  },
  {
    name:'Why are retail stores a preferred mode for distribution?',
     A: 'Easily accessible due to large number of retail stores present',
     B: 'All',
     C: 'Direct relationship with customers with credit facilities in many retail shops',
     D: 'Ability to sell in smaller quantities makes it more suited for customers',
     E: 'All of the above'
  },
  {
    name:'Which of the following is an example of Modern Trade?',
     A: 'Amazon',
     B: 'More Supermarket',
     C: 'Wholesalers',
     D: 'None of the above',
     E: 'Supermarket channel is generally called Modern Trade'
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
    html += '<div class="container"><div class="row" style="margin-left: 3%">  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> <div id="question-one" class="quiz-ans-container" style="padding-bottom: 60px;padding-top: 5px;"> <h2 style="text-align:-webkit-left;font-family: monospace;"><span style="margin-left: -44px;" id="qqq">Q' + (index + 2) + '. </span>' + AllQuestions.data[index].name +' </h2></div></div></div> <div class="quiz-choice" onclick="WrongAnswer(this)"><p>'+ AllQuestions.data[index].A + '</p></div> <div class="quiz-choice" onclick="CorrectAnswer()"><p>'+ AllQuestions.data[index].B + '</p></div><div class="quiz-choice" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].C + ' </p></div><div class="quiz-choice" onclick="WrongAnswer()"><p>'+ AllQuestions.data[index].D + '</p></div><div><br><div style="padding-right: 12px;margin-top: 25px;"><a href="#ex1" rel="modal:open" class= "open"><button>Show Solutionn</button></a></div><div id="ex1" class="modal"><h1 style="border-bottom: 1px solid grey;">Solution</h1><br><h3>'+AllQuestions.data[index].E +'</h3><br><hr><center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;" id="clos">Close</a></center></div>';
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
                  window.location = "{{url()}}/DistributionModule1";  
                }
            },
        }
    });
   }
</script>

  @stop

