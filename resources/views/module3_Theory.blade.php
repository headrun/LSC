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
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
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
 /*background-color: #E6772D;*/
 background-color: #7f60c6;
 color: white;
}
p{
font-family: 'Lora', serif;
color: #333333;
font-size: 19px;
}
</style>

</head>
    <body style="background-color: #f1f1f1;">
    <div class="container" style="margin-top: 45px;">
      <h1 style="text-align: center;font-family: monospace;">THEORY</h1>
           <div class="card" style="padding: 30px;">
    <div class="container">
        <div class="row">
            
            <div class="" style="">
                <h1 style="font-family: monospace;">Constraints</h1>
                <p>In real life, every option comes with a constraint. In travel, constraint could either be anything: Time/ Money/ Distance/ Luggage/ Comfort etc.</p>
                <p>Objective should be met with constraint followed</p>
                <br>
                <p><b>Previous question was on time constraint. Mario has to take the helipcopter to reach on time.</b></p>
                <p><b>Example 1: Cost constraint</b></p>
                <p>Say, you have 100 Rs in hand and you are in a car for which you pay 10 Rs/ km. How much distance can you travel?</p>
                <p><b>Constraint: 100 Rs</b></p>
                <p>Objective: Maximum distance possible</p>
                <p><b>Cost = Fixed Cost + Variable Cost</b></p>
                <p><b>Fixed Cost = 0</b></p>
                <p><b>Cost = Variable Cost = Cost per Unit * Number of Units</b></p>
                <p>100 = 5 Rs/ km * Number of km</p>
                <p>Distance = 20 km</p><br>
                <p><b>Example 2: Luggage or Capacity</b></p>
                <p>Your family has 4 members and you need to go to railway station from your home. You have a cycle which can take 1 person, a bike which can 2 people and a car which can take 5 people. How would you go?</p>
                <p>You have to go by Car.</p>
                <p>Cost or time of travel will follow accordingly</p>

            </div>
            <div class="">
                <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post" style="padding-left: 660px;padding-bottom: 10px;display:none;">
                <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Questions"> 
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
                </form>
            </div>
        </div>
    </div></div></div>

 <div class="col-lg-11 col-md-11 col-sm-11">
        <div style="cursor: pointer;float: right;">
          <button class="btn" id = "next" style="background-color: #9f59b0;color:white;left:10%;bottom:10px;">Next Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
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
            window.location = "{{url()}}/Module3/Timer";
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
            window.location = "{{url()}}/Unit2ConstraintsActivity";
          }
});
});
</script>
