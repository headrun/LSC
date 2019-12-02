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
<!--     <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
h3{
  font-size: 30px;
  margin-top: 12px; 
}
 .quiz-choice {
   background-color: #baacd8;
   height: 143px;
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
margin: 43px; 
}
div > img {
  width: 100%;
}

@media screen and (min-width: 1200px) {
  #image {
    height: 540px;
  }
}
@media screen and (min-width: 1600px) {
  #image {
    height: 780px;
  }
}
@media screen and (min-width: 1900px) {
  #image {
    width: 870px;
  }
}

.main-wrapper{
 padding: 0px;
}
h2,h3{
  font-family: comic Sans;
}
.jconfirm-content{
  font-size: 15px;
}
.sweep{
  display:inline-block;
  position:relative;
  margin:0.4em;  padding:1em;
  cursor:pointer;
  background:#35395c;
  color:white;
  z-index:0;
  font-size: 13px;
}
.sweep:before {
  content: "";
  position: absolute;
  z-index:-1;
  top: 0;  left: 0;  right: 0;  bottom: 0;
  background: #9c27b0;
  transform: scaleX(0);
  transform-origin: 0 50%;
  transition: transform .5s ease-out;
  /*border-top-right-radius: 10px;*/
  /*border-bottom-right-radius: 10px;*/
}
.sweep:hover:before{transform: scaleX(1);}
.container-fluid{
  padding: 0px;
}
.footer{
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>
</head>
 <body id="body" >
      <div class="container-fluid">
   <div class="row" style="background-color: #0000ff0f;margin-left: 0px;">
     <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="padding-left: 0px;">
       <img src="{{asset('assets/img/helmetstore.jpg')}}" id="image"/>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6 col-6">
<div  class="w3-container w3-animate-left" >
<br>
       <h3 style="color: #35395c;">An helmet store sells 100 helmets a day. What is the demand for 30 days?</h3>
</div>
      <div class="row">
	 <div class="col-md-12 col-sm-12" style="color: white;">
<div class = "w3-container w3-animate-right">
           <div class="quiz-choice correct-q1" style="margin-left: 50px;">
           <p>3000</p>
           </div>
           <div class="quiz-choice wrong-q1">
           <p>2000</p>
           </div>
           <div class="quiz-choice wrong-q1">
           <p>5000</p>
	   </div>
</div>
         </div>
      </div>
     </div>

</div>


   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <script src="index.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

   <div class="row footer">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div>
<!--          <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left" style="width:50px;cursor: pointer;margin-left:10px;">-->
<button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top: 13px;width:118px;bottom:10px;">Previous Page</button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" style="left: -96px">
        <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
      </div>
    </div>


  </div>
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
                text: "Move To Next Screen",
                btnClass: 'btn-green',
                // action: "https://www.w3schools.com/w3css/w3css_icons.asp"
                action: function(){
                  // $('#concept').show();
                  // $('#question-one').hide();
                  window.location = "{{url()}}/FundamentalLearnScreen6"
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

$(document).on('click', '#back', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/FundamentalLearnScreen4";
          }
    });
});

$(document).on('click', '#gotohome', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/SidebarLearningPage";
          }
    });
});

var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen4";
   }
  }

});
</script>
@stop
