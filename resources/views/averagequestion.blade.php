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
  <!--  ------------------ pop up ------------------   -->
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
    /*margin-left: -40px;*/
    /*padding-left: 40px;*/
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
font-size: 15px;
/*padding: 37px;*/
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
.modal{
  max-width:700px;
}

</style>
</head>

    <body style="background-color: #f1f1f1;">
      <div class="container">
   <h1 style="font-family: monospace;">QUIZ</h1>
           <div class="card">
    <div class="container">
    <div class="row" style="margin-left: 4%">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="color: white;">
        <div id="question-one" class="quiz-ans-container" style="padding-bottom: 63px;    padding-left: 0px;margin-right: 20px;">
        <h2 style="text-align: -webkit-left;font-family: monospace;"><span style="margin-left: -57px;">Q2. </span>Ramesh and Suresh need to go to Supermarket 540 metres away to get the last Five-Star chocolate.Ramesh takes his bicycle and travels at 3 m/s but has to make a 1 minute stop to fill air in cycle tubes. Suresh walks to the supermarket at 2 m/s.Who reaches first and and in how many minutes?</h2>
        </div>
      </div>
      <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
        <img src="q2.jpg" width="230px" height="200px" alt="Image" style="margin-left: 20px;margin-top: 4%;">
      </div> -->
    </div>
    <div class="row" style="margin-left: 8%; margin-top: -50px;">
      <div class="col-md-12 col-sm-12" style="color: white;">
        <div class="quiz-choice wrong-q1">
        <img src="{{asset('assets/img/Speed2Sample1.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Suresh 4.5 Minutes</p>
        </div>
        <div class="quiz-choice correct-q1">
        <img src="{{asset('assets/img/Speed2Sample2.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Ramesh 4 Minutes</p>
        </div>
        <div class="quiz-choice wrong-q1">
        <img src="{{asset('assets/img/Speed2Sample1.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Suresh 10 Minutes</p>
        </div>
        <div class="quiz-choice wrong-q1">
	<img src="{{asset('assets/img/Speed2Sample4.png')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;padding: 0px;"> Ramesh and Suresh reach together in 4 minutes</p>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>
    <!-- Modal HTML embedded directly into document -->
    <div style="padding-right: 12px;margin-top: 25px;">
    	<div id="ex1" class="modal">
    		<h1 style="border-bottom: 1px solid grey;">Solution</h1>
    		<br>
    		<h3 style="font-weight: bold;">Case-1</h3>
    		<h3 style="font-weight: bold;">Ramesh</h3>
    		<h3>Speed = 3m/s</h3>
    		<h3>Distance = 540 meters</h3>
    		<h3>Time = Distance / Speed = 540 / 3  i.e, 180 Seconds (3 minutes)</h3>
    		<h3>Ramesh will stop for 1 minute to fill air in cycle tubes</h3>
    		<h3>Total time = time taken to fill air + time taken to travel on cycle</h3>
    		<h3>Total time = 3 minutes + 1 minute   i.e, 4 minutes</h3>
    		<h3 style="font-weight: bold;">Case-2</h3>
    		<h3 style="font-weight: bold;">Suresh</h3>
    		<h3>Speed = 2m/s</h3>
    		<h3>Distance = 540 meters</h3>
    		<h3>Time = Distance / Speed = 540 / 2  i.e, 270 Seconds (4.5 minutes)</h3>
    		<br>
    		<h3 style="font-weight: bold;">Ramesh will reach Supermarket in 4 minutes</h3>
    		<br>
    		<hr>
    		<center><a href="#" rel="modal:close" style="font-size: 20px; text-decoration: none;">Close</a></center>
    	</div>
    	<a href="#ex1" rel="modal:open"><button>Show Solution</button></a>
    	<button class="concept" style="float: right;">Go To Concept</button>
    </div> 
</div></div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
</body>  
</html>

<script>
  $( ".open" ).click(function() {
   $('.modal').fadeIn('slow');
});

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
        title: 'Correct answer!',
        content: 'Congratulations',
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
  // End Quiz JS
});
</script>
<script type="text/javascript">
$(document).on('click', '.concept', function(){
    $.ajax({
          url : "{{url()}}/quick/goToAverageConcept",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/AverageConcept";
          }
    });
});
</script>

@stop
