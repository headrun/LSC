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
     <h1 style="text-align: center;font-family: monospace;">INVENTORY COVER</h1>
     <div class="card">
    <div class="container">
        <div class="row" style="margin-top: 0px;">
            
            <div class="col-md-8 col-sm-12" style="color: #7d929d;font-size:22px;">
                <h1 style="font-family: monospace;">Inventory cover is the average number of days goods remain in inventory before being sold.</h1>
                <p><b>Example 1: Inventory cover calculation</b></p>
                <p><b>A candy seller purchased 300 candies to sell for the week. He sold 30,20,40 candies respectively on first, second, third days.</b> </p>
                <br>
                <p>What is his average sale per day? </p>
		        <p>Average sale = Total sale / No. of days = 90/3 = 30</p><br>
                <p><b>What is his current stock?</b></p>
                <p>Current stock = Initial stock - Sold goods = 300 - 90 = 210</p>
                <p><b>Inventory days of cover = Total Inventory / demand per day</b></p>
                <p><b>How many more days are required to finish his stock?</b></p>
                <p>Days required = 210/30 = 7 </p>
                <p>At the end of third day, the candy seller is left with 7 days of inventory cover</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <img src="https://i.pinimg.com/originals/d5/c3/b4/d5c3b4ab4dd70f5324877adcc5cbe8f5.jpg" width="300px" height="300px" alt="Concept">
                <br>
                <br>
                <br>
               <!-- <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post">-->
               <!-- <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question"> -->
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
               <!-- </form>-->
            </div>
	</div>
        <div class="row">
         <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question">
       </div>
    </div>
    </body>

<script type="text/javascript">
  $(document).on('click', '#submit', function(){
    window.location = "{{url()}}/Economics/Module4/Timer";
  });
</script>   
@stop
