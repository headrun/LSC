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
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
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
    <div class="container">
     <h1 style="text-align: center;font-family: monospace;">THEORY</h1>
        <div class="card">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-sm-12" style="font-size:22px;color: #7d929d;">
                <h1 style="font-family: monospace;">Supplies are items you use to run your business or make your product.</h1>
                <p>To run a business without shortage of products, supply should be greater than or equal to demand. Here, demand = 120 supply = 145 If supply = 100,  they can make only 40 glasses of juice.</p><br>
                <p><b>Example 1:  Supply identification</b></p>
                <p><b>In Ron's scouting camp where there were 90 students and 10 teachers, we calculated total demand and average demand of water.Let us identify the supply of water now.</b></p>
                <p>Water required for one person in a day : 30 ltr/day. <br>Total demand of water per day : 3000 ltrs/day.</p>
                <p><b>If a water tanker with capacity of 4000 ltrs reaches the spot every alternative day, will there be  scarcity of water? What is the supply?</b></p>
                <p>"Total demand  = 3000 ltr /day <br>Supply = 4000/2 ltrs/day = 2000 ltrs/day.</p>  
               <p>Supply is less than Demand. Hence there will be scarcity of water.</p>
                <p><b>To balance the demand and supply, how many water tankers are required?</b></p>
                <p> Current supply = 2000 ltrs/day
                <br>Demand = 3000 ltrs/day
                <br>Shortage = Demand - supply
                <br>Difference per day = 3000 - 2000 ltrs/day = 1000 ltrs/day
                <br>Since the tanker reaches the spot every alternative days, 
                <br>Overall shortage in supply = 1000*2 = 2000 ltrs.
                <br>Total required supply = Current supply + Shortage in supply =   6000 ltrs
                <br>No. of water tankers = 6000/4000 = 1.5</p>
                <p><b>Shortage = Demand - supply</b></p>
                <p><b>Shortage % = (Demand - Supply)/Supply
                </b></p>
            </div>
            <div class="col-md-4 col-sm-12">
                <img src="{{url()}}/images/economics/supply_concept.jpg" width="300px" height="300px" alt="Concept">
                <br>
                <br>
                <br>
                <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post" style="display:none;">
                <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question"> 
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
                </form>
            </div>
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
            window.location = "{{url()}}/Economics/Module2/Timer";
          }
    });
});
</script>
    
@stop