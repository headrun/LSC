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
   <!-- a href='index.html'><button type="button" name="home" id='btn-home'><i class='fa fa-home fa-2x'></i></button></a> -->
   <h1 style="font-family: monospace;">QUIZ</h1>
   <div class="card">
    <div class="container">
   <div class="row" style="margin-left: 4%;">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 " style="color: white;">
        <div id="question-one" class="quiz-ans-container" style="padding-bottom: 63px;    padding-left: 0px;margin-right: 20px;">
          <h2 style="text-align: -webkit-left;font-family: 'Lora', serif;"><span style="margin-left: -42px;">Q1. </span>Mario has to save the princess in 1 hour from the castle 200 km away. His helicopter flies  at 300 km/ hour.His super car travels at 125 km/ hour. Both vehicles cost 75 Rs/ km but he needs to pay 5,000 Rs to get on the helicopter. How much should he spend to save princess?</h2>
        </div>
      </div>  
      <div class="col-lg-4 col-sm-4 col-md-4" style="padding-top: 30px;">
        <img src="https://media.giphy.com/media/3ohfFxoiP6rbEZ4nrG/giphy.gif"/>
      </div>
  </div>
    <div class="row" style="margin-top: -50px;">
      <div class="col-md-12 col-sm-12" style="color: white;">
        <div class="quiz-choice correct-q1" style="margin-left: 60px;">
        <img src="{{asset('assets/img/ConstraintsSample.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Helicopter Cost:20,000Rs</p>
        </div>
        <div class="quiz-choice wrong-q1" style="margin-left: 40px;">
        <img src="{{asset('assets/img/ConstraintsSample2.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Super Car Cost:15,000Rs</p>
        </div>
        <div class="quiz-choice wrong-q1" style="margin-left: 40px;">
        <img src="{{asset('assets/img/ConstraintsSample2.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;"> Super Car Cost:20,000Rs</p>
        </div>
        <div class="quiz-choice wrong-q1" style="margin-left: 40px;">
        <img src="{{asset('assets/img/ConstraintsSample4.jpg')}}" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;">Mario will not reach in time</p>
        </div>
      </div>
    </div>
<br><br><br><br><br>
      <!-- <div class="concept" align="right" style=" margin-top: 80px;  margin-right: 30px;" ><button >Go To Concept</button></div> -->

    <div style="padding-right: 12px;margin-top: 25px;">
    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
    	<h1 style="border-bottom: 1px solid grey;">Solution</h1>
    	<br>
    	<h3 style="font-weight: bold;">Case-1</h3>
    	<h3 style="font-weight: bold;">Helicopter</h3>
    	<h3>Speed: 300 km/hr</h3>
    	<h3>Distance: 200 km</h3>
    	<h3>Time = Distance/Speed = 200/300 = 0.6Hours</h3>
    	<h3 style="font-weight: bold;">Case-2</h3>
    	<h3 style="font-weight: bold;">Super Car</h3>
    	<h3>Speed: 125 km/hr</h3>
    	<h3>Distance = 200 km</h3>
    	<h3>Time = 200/125 = 1.6 hours which is greater than 1 hour</h3>
    	<h3>Since Mario has to save princess within 1 hour, he should travel by helicopter</h3>
    	<h3 style="font-weight: bold;">Helicopter cost:</h3>
    	<h3>Fixed cost: 5000 Rs</h3>
    	<h3>Per Km cost: 75 Rs</h3>
    	<h3>Total distance: 200 km</h3>
    	<h3>Total cost = Fixed cost + Variable cost,</h3>
	<h3 style="margin-left: 80px;"> = 5000 + 75*200   i.e, 20,000</h3>
        <br>
    	<h3 style="font-weight: bold;">Mario spent 20,000 on Helicopter to save princess</h3>
    	<br>
    	<hr>
    	<center><a href="#" rel="modal:close" style="font-size: 20px; text-decoration: none;">Close</a></center>
    </div>
	<a href="#ex1" rel="modal:open"><button>Show Solution</button></a>
    	<button class="concept" style="float: right;">Go To Concept</button>
    </div>
</div></div></div>


   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <script src="index.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
</body>
</html>
  
  <!--================End Footer Area =================-->

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
          url : "{{url()}}/quick/goToConcept",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Module3/Concept";
          }
    });
});
</script>
@stop
