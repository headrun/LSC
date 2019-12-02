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
     <h1 style="text-align: center;font-family: monospace;">DEMAND</h1>
     <div class="card">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-sm-12" style="font-size:22px;color: #7d929d;">
                <h1 style="font-family: monospace;">Demand is the quantity of any material required, based on the number of end-users.</h1>
                <p>If there are 10 more friends joining them, demand increases. </p>
                <p><b>Demand is directly proportional to the number of end-users .</b></p><br>
                <p><b>Example 1:  Demand calculation</b></p>
                <p><b>Ron and friends are heading for a scouting camp for one week. There are 90 students and 10 teachers.  Let's help Ron to calculate the demand of water in the camp.</b></p>
                <p>Water required for one person : 30 ltr/day.</p>
                <p><b>What is the demand of water for one day?</b></p>
		        <p><b>30 ltrs * 100 persons = 3000 ltr /day</b></p>
                <p><b>What is the total demand of water for the full camping days?</b></p>
		<p>3000 ltr/day * 7 days = 21000 ltrs</p>
		<p><b>Average demand = Total demand / No. of days. Here, average demand is 30.</b></p><br>
		        <p><b>What is the percentage increase in total demand if 10 more students are joining the camp for 2 days?</b></p>
                <p>((New demand - Old demand)/ Old demand ) * 100</p>
                <p>New demand per day = 30*110 = 3300</p>
                <p>New demand for 7 days =  (3300 * 2) + (3000 *5) = 6600 + 15000 = 21600</p>
                <p>Ans = ((21600 - 21000)/21000) * 100 = 2.85</p>
            </div>
            <div class="col-md-4 col-sm-12">
	        <img src="{{asset('assets/img/school_Child.jpg')}}" width="300px" height="300px" alt="Concept">
                <img src="https://cloud.glstock.com/14155/3343102/garbage-truck-driver-waving-cartoon.jpg" width="300px" height="300px" alt="Concept">  
                <img src="https://media.giphy.com/media/xThtanqVawzQNeHD20/giphy.gif" width="300px" height="300px" alt="Concept">
                <br>
                <br>
                <br>
             <!--   <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post"> -->
             <!--   <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question"> -->
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
             <!--   </form> -->
            </div>
	</div>
        <div class="row">
         <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question">
       </div>
    </div>
</div></div>
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
            window.location = "{{url()}}/Economics/Module1/Timer";
          }
    });
});
</script>
@stop
