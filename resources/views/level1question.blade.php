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
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
    /*font-family: LoraBold;*/
    line-height: 1.3333;
    font-weight: bold;
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
</style>

</head>
 <body style="background-color: #f1f1f1;">
  <div class="container">
   <h1 style="font-family: arial; display:none;">QUESTION</h1>

    <div class="card" id="main">
       <div class="row" style="margin-left: 7%">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="color: white;">
           <div id="question-one" class="quiz-ans-container" style="padding-bottom: 10px;padding-left: 0px;margin-right: 0px;">
           <h2 style="text-align: -webkit-left;">
            <span style="margin-left: -44px;">Q1.</span>
            <span style="font-family: 'Lora', serif;">Sherlock has 3 options: </span></h2>
           </div>
         </div>
       </div>
       <div class="row" style="margin-left: 8%;">
          <div class="col-lg-4 col-xs-4 col-sm-4 col-md-4" >
            <img src="{{asset('assets/img/bridge.png')}}" width="230px" height="200px" alt="Image" style="border-radius: 50%" onclick="bridge()"><br><br>
            <h3>Cab through london bridge at 30 KM/Hour to his home</h3> 
          </div>
          <div class="col-lg-4 col-xs-4 col-sm-4 col-md-4">
            <img src="{{asset('assets/img/metro.jpg')}}" width="230px" height="200px" alt="Image" style="border-radius: 50%" onclick="train()"><br><br>
            <h3>Underground train at 40 KM/hour with 10 minutes waiting time</h3>
          </div>
          <div class="col-lg-4 col-xs-4 col-sm-4 col-md-4">
            <span onclick="helicopter()"><img src="{{asset('assets/img/helicopter.jpg')}}" width="230px" height="200px" alt="Image" style="border-radius: 50%" onclick="helicopter"></span><br><br>
            <h3>Helicopter at 60 KM/Hour with 90 minutes waiting time</h3>
          </div>
       </div><br><br>
    </div>


    <div class="card" id="bridge">
      <h3 style="font-weight: 1000;color: #a31834;text-align:center">Congratulations - You have cleared Level 1.</h3>
       <h3 style = "text-align:center" > You made it in time. Sherlock reaches in 3.5 hours i.e. 210 minutes.</h3> 
       <h3 style = " font-weight: 1000; text-align:center; color: red;">You have 290 points left.</h3>
    </div>

    <div class="card" id="train">
       <h3 style="font-weight: 1000;color: #a31834; text-align:center;">Congratulations - You have cleared Level 1</h3>
       <h3 style="font-weight: 600;text-align:center"> You made it in time. Sherlock reaches in 4 hours i.e. 240 minutes.</h3> 
       <h3 style = "font-weight: 1000; text-align:center;color: red;"> You have 260 points left.</h3>
    </div>
    
    <div class="card" id="helicopter">
      <h3 style="font-weight: 1000;color: #a31834; text-align:center;">Congratulations - You have cleared Level 1 in best possible time.</h3>
       <h3 style="font-weight: 600;text-align:center"> You made it in time. Sherlock reaches in 3 hours 10 minutes i.e. 190 minutes.</h3> 
       <h3 style = "font-weight: 1000; text-align:center;color: red;"> You have 310 points left.</h3>
    </div>
  </div>
 </body> 
</html>

<script>
$(document).ready(function(){
      $('#bridge').hide();
      $('#train').hide();
      $('#helicopter').hide(); 
  });
  function bridge() {
      //alert("bridge");
      $('#main').hide();
      $("#bridge").show();
      $('#train').hide();
      $('#helicopter').hide();
  }
  function train() {
      $('#main').hide();
      $("#bridge").hide();
      $('#train').show();
      $('#helicopter').hide();

  }
  function helicopter() {
     $('#main').hide();
      $("#bridge").hide();
      $('#train').hide();
      $('#helicopter').show();
  }

</script>
@stop

