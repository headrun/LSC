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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
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

.jconfirm-content{
 font-size: 15px;
}
.modal a.close-modal{
  display: none;
}
.modal{
  max-width: 700px;
}
#step{
   font-weight: bold;
}
.jquery-modal{z-index: 11111;}
</style>

</head>

    <body style="background-color: #f1f1f1;">
      <div class="container">
         <h1 style="font-family: monospace;">QUIZ</h1>
   <div class="card">
    <div class="container">
   <div class="row" style="margin-left: 10%">
     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="color: white;">
       <div id="question-one" class="quiz-ans-container" style="padding-bottom: 63px;padding-left: 0px;margin-right: 20px;">
       <h2 style="text-align: -webkit-left;font-style: ">
        <span style = "margin-left:-52px;">Q1.</span>
        <span style="font-family: 'Lora', serif;">The Avengers are 3km away from the movie theatre. Their movie starts in 30 minutes. How fast should he ride his bike to reach on time?</span></h2>
     </div>
   </div>
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
       <img src="{{asset('assets/img/speedSample.jpg')}}"/>
     </div>
 </div>
   <div class="row">
     <div class="col-md-12 col-sm-12" style="color: white;">
       <div class="quiz-choice wrong-q1" style="margin-left: 100px;">
       <p> 3 km/hour</p>
       </div>
       <div class="quiz-choice correct-q1">
       <p> 6 km/hour</p>
       </div>
       <div class="quiz-choice wrong-q1">
       <p> 1.5 km/hour</p>
       </div>
       <div class="quiz-choice wrong-q1" style="margin-right: 20px;">
       <p> They cannot reach on time</p>
       </div>
     </div>
   </div>

   <div style="padding-right: 12px;margin-top: 25px;">
     <a href="#ex1" rel="modal:open" class="open"><button>Show Solution</button></a>
     <button class="concept"  style="float: right;">Go To Concept</button>
   </div>
   <!-- Modal HTML embedded directly into document -->
   <div id="ex1" class="modal">
     <h1 style="border-bottom: 1px solid grey;">Solution</h1>
     <h3 id="step">Step-1</h3>
      <h3>Theatre distance from Avengers is 3 km  i.e, distane = 3 km</h3>
      <h3 id="step">Step-2</h3>
      <h3>Movie will starts in 30 minuts which means Avengers have to reach theatre in 30 minuts i.e, time = 30 minuts</h3>
      <h3 id="step">Step-3</h3>
      <h3>Convert time into hours, 60 minuts = 1 hour, for 30 minuts = 30 minuts / 60 minuts i.e, 0.5 hour  so time = 0.5 hour</h3>
      <h3 id="step">Step-4</h3>
      <h3>If the Avengers wants to reach the theatre before movie get started, they have to ride the biles with the speed of 3 km / 0.5 hour i.e, 6 km/hour</h3>
      <h3>Hint: Speed Formula,  Speed = Distance / Time</h3>
      <br>
      <hr>
     <center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration:none;">Close</a></center>
   </div>   

</div></div></div>


   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <script src="index.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
</body> 
</html>

<script>
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
        title: 'Correct answer',
        content: 'Congratulations!',
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
});


$(document).on('click', '.concept', function(){
    $.ajax({
          url : "{{url()}}/quick/goToConcept",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Concept";
          }
    });
});
$( ".open" ).click(function() {
	$('.modal').fadeIn('slow');
});
</script>
@stop
