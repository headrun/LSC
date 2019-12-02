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
 position: relative;
 float: right;
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
</style>
</head>

    <body style="background-color: #f1f1f1;">
    <div class="container">
    <h1 style="text-align: center;font-family: monospace;">Concept</h1>
     <div class="card">
    <div class="container">
        <div class="row" style="color: #7d929d;">
            
            <div class="col-md-8 col-sm-12" style=" font-size: 18px;">
                <h1 style="font-family: monospace;">Total Time and Average Speed</h1>
                <p>Average speed = Total distance/ Total Time</p>
                <p>In travel or any activity,travel time, stop time and any other extra time taken should be considered to arrive at Total time. Overall average speed is the distance travelled by time taken.If you are travelling in different modes at different speeds, overall distance and time is to be obtained to find average speed.</p>
                <p>For example</p>
                <p>
                You walk along the beach at 1 m/s for 5 minutes. You take a 5 minute break. Then you ride a horse at 5.5 m/s for 10 minutes. What is total time, total distance and average speed.</p>
                <p><b>Walk</b></p>
                <p>Time = 5 minutes = 300 s
                  <br>Speed = 1 m/s
                  <br>Distance = Time * Speed = 300*1 = 300 m
                </p>
                <p><b>Break</b></p>
                <p>Time = 5 minutes = 300 s
                  <br>Distance = 0
                  <br>Speed = 0
                </p>
                <p><b>Horse Riding</b></p>
                <p>Time = 10 minutes = 600 s
                  <br>Speed = 5.5 m/s
                  <br>Distance = 600*5.5 = 3300 m
                </p>
                <p><b>Total Time = 5+5+10 = 20 minutes = 1200 s
                  <br>Total Distance = 300+0+3300 = 3600 m
                  <br>Average Speed = 3600/1200 = 3 m/s
                </b></p>
            </div>
            <div class="col-md-4 col-sm-12">
		<img src="https://media.giphy.com/media/13Uiy60hKX7wY0/giphy.gif" width="150px" height="150px" alt="Concept">
                <br>
                <br>
                <img src="https://media.giphy.com/media/bDmK86uwmptio/giphy.gif" width="150px" height="150px" alt="Concept">
                <br>
                <br>
                <img src="https://media0.giphy.com/media/lKnSCKqn0xUJDp1uR0/200w.webp?cid=3640f6095c9353936f5754506fac6066" width="150px" height="150px" alt="Concept">
                <!--<form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post">-->
		<!--<input type="submit" style="font-size: 15px;margin-top: 35px;" id="submit" value="Try Timer Question"> -->
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
                <!--</form>-->
                <br>
                <br>
            </div>
	</div>
        <div class="row">
         <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question">
       </div>
    </div>
  </div>
</div>
    </body>

       <script type="text/javascript">

$(document).on('click', '#submit', function(){
    $.ajax({
          url : "{{url()}}/quick/goToAverageTimer",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/module1/AverageTimerConcept";
          }
    });
});
</script>
    
@stop  
