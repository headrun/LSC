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
      <h1 style="text-align: center;font-family: monospace;">CONCEPT</h1>
      <div class="card">
    <div class="container">
        <div class="row">

                <h1 style="font-family: monospace;">Optimization</h1>
                <p style="font-size: 18px;">For a given objective, one can find best solution in terms of time or money or distance or any external factort.</p>
                <p><b>Previous question had an objective as a time constraint (24 hours). Nirav could either fly directly to Mumbai or take a flight to Delhi and then to Mumbai within 24 hours.</b></p>
                <p><b>Though direct flight is faster, it doesnt matter since both options could help him reach within stipulated time. However taking flight to Delhi and then to Mumbai is much cheaper, thereby the correct solution.</b></p>
                <p><b>Example 1: Cost constraint</b></p>
                <p>You have only 100 Rs in hand and need to travel for 10 km. You can hire a cab for 20 Rs / km or walk. What would you do to reach at the earliest?</p>
                <p><b>Constraint: Money (100 Rs)</b></p>
                <p>Objective: Travel 10 KM at the earliest.</p>
                <p><b>Option 1: Cab
                  <br>Total cost is Number of units * Cost per unit = 10*20 = 200
                  <br>Since Total cost > 100, he cannot take a cab whole distance.
                </b></p>
                <p>You can walk to your destination. However, this is not the most Optimal solution.
                  <br>Since you have 100 Rs, you can travel half the distance in cab and then walk to reach faster.</p>
                <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post" style="text-align: right;">
                <input type="submit" id="submit" value="Try Timer Questions"> 

                </form>

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
            window.location = "{{url()}}/Module4/Timer";
          }
    });
});
</script>
 
@stop
