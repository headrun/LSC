@extends('layout.sidebar1')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
    line-height: 1.3333;
    font-weight: bold;
    /*margin-left: -40px;*/

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
 /*background-color: #E6772D;*/
 background-color: #7f60c6;
 color: white;
}
p{
font-family: 'Lora', serif;
color: #333333;
font-size: 19px;
}
.main-wrapper{
margin-top:0px;
}
</style>

</head>

    <body style="background-color: #f1f1f1;overflow-x: hidden;">
    <div class="container" style="margin-top: 45px;">
    <h1 style="text-align: center;font-family: monospace;">THEORY</h1>
    <div class="card">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-sm-12" style="font-size:22px;">
                <h1 style="font-family: monospace;">Speed</h1>
                <p>Speed or Velocity explains how fast or slow an object moves.</p>
                <p>Speed = Distance / Time </p>
                <br>
                <p>For instance, You are in Delhi and you are planning to go to Taj Mahal today. Taj Mahal is 200 km from your home.</p>
                <p>
                How fast should you go to reach by 11AM? Time now is 6 AM.</p>
                <p>Total Distance = 200 km.</p>
                <p>Time to reach : 11 AM - 6 AM = 5 hours</p>
                <p><b>Speed = 200/5 = 40 km/ hour</b></p>
                <p><b>Unit of Speed is km/ hour or m/ s</b></p>
                <p>Also Since Speed = Distance / Time, Then Time = Distance / Speed or Distance = Speed * Time</p>
            </div>
            <div class="col-md-4 col-sm-12" style = "display:none">
                <img src="{{url()}}/images/module1/image.jpg" width="300px" height="300px" alt="Concept">
                <br>
                <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post">
                <input type="submit" style="font-size: 15px;display:none;" id="submit" value="Try Timer Question">
                </form>
            </div>
        </div>
    </div></div></div>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div style="cursor: pointer;float: left;">
          <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;bottom:10px;margin-left: 4px;">Previous Page</button>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div style="cursor: pointer;float: right;">
          <button class="btn" id = "next" style="background-color: #9f59b0;color:white;left:10%;bottom:10px;margin-right: 4px;">Next Page</button>
        </div>
      </div>
      </div>

    </body>

    <script type="text/javascript">

$(document).on('click', '#submit', function(){
    $.ajax({
          url : "{{url()}}/quick/goToTimer",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Timer";
          }
});
});
$(document).on('click', '#next', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Unit2SpeedVideo";
          }
});
});

$(document).on('click', '#back', function(){
  window.location = "{{url()}}/basicModule";       
});

</script>
    
