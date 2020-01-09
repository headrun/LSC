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

   <!-- -------------- pop up end  ----------  -->
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
font-size: 17px;
padding: 37px;
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
</style>

</head>

    <body style="background-color: #f1f1f1;">
      <div class="container">
   <h1 style="font-family: monospace;">QUIZ</h1>
   <div class="card">
    <div class="container">
   <div class="row" style="margin-left: 7%">
     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="color: white;">
       <div id="question-one" class="quiz-ans-container" style="padding-bottom: 63px;    padding-left: 0px;margin-right: 20px;">
       <h2 style="text-align: -webkit-left;"> <span style = "margin-left:-52px;">Q1.</span><span style="font-family: 'Lora', serif;"> Ruby and Radha are bringing pulpy orange juice to a potluck in their class. They called Ruby's mother to help them out and she told them that 20 oranges are required to make 8 glasses of juice. There are 48 friends joining them in the potluck. How many oranges should they buy?</span></h2>
     </div>
   </div>
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
       <img src="{{asset('assets/img/Ec_mod1_demand.jpg')}}" width="230px" height="200px" alt="Image" style="margin-left: 20px;margin-top: 4%;">
     </div>
 </div>
   <div class="row">
     <div class="col-md-12 col-sm-12" style="color: white;">
       <div class="quiz-choice wrong-q1" style="margin-left: 100px;text-align: center;">
       <p> 80</p>
       </div>
       <div class="quiz-choice wrong-q1" style="text-align: center;">
       <p> 100</p>
       </div>
       <div class="quiz-choice correct-q1" style="text-align: center;">
       <p> 120</p>
       </div>
       <div class="quiz-choice wrong-q1" style="margin-right: 20px;text-align: center;">
       <p> 460</p>
       </div>
     </div>
   </div>

 <div style="padding-right: 12px;margin-top: 25px;">
   <a href="#ex1" rel="modal:open" class = "open"><button>Show Solution</button></a>
   <button class="concept"  style="float: right;">Go To Concept</button>
 </div>

</div>
</div></div>
<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
 <h1 style="border-bottom: 1px solid grey;">Solution</h1>
  <br>
 <h3 style="font-weight: bold;">Step-1</h3>
 <h3>Total 20 Oranges required to make 8 glasses of juice</h3>
 <h3 style="font-weight: bold;">Step-2</h3>
 <h3>Oranges required to make one glass of juice = 20/8  i.e, 2.5 Oranges</h3>
 <h3 style="font-weight: bold;">Step-3</h3>
 <h3>Considering Each student requires one glaass of juice</h3>
 <h3 style="font-weight: bold;">Step-4</h3>
 <h3>There are total 48 students and 48 glasses of juice required</h3>
 <h3 style="font-weight: bold;">Step-5</h3>
 <h3>Oranges required to make 48 glasses of Juice = 48 * 2.5 Oranges i.e, 120</h3>
 <br>
 <hr>
 <center><a href="#" rel="modal:close" style="font-size: 20px;text-decoration: none;">Close</a></center>
</div>

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

  // End Quiz JS

});

$(document).on('click', '.concept', function(){
  window.location = "{{url()}}/Economics/Module1/Concept";
});
</script>
@stop
