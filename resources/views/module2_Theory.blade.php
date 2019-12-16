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
    <body style="background-color: #f1f1f1;overflow-x: hidden;">
    <div class="container" style="margin-top: 45px;">
      <h1 style="text-align: center;font-family: monospace;">THEORY</h1>
           <div class="card">
    <div class="container">
        <div class="row" style="">
            
            <div class="col-md-8 col-sm-12">
                <h1 style="font-family: monospace;">Cost</h1>
                  <p style = "font-size: 18px;">Total Cost = Fixed Cost + Variable Cost</p>
                  <p style = "font-size: 18px;">Variable Cost = Cost per unit * Total Units</p>
               
                <p style="font-size: 18px;">For example,<br>
                  Joey takes a Uber from his home to burger shop which is 5 KM away.
                  <br> For every Km, he needs to pay 8 Rs. What is total cost?
                </p>
                <p style="font-size: 18px;">There is no fixed cost for Joey to go to burger shop. <b>Fixed Cost = 0</b>
                <br>Variable Cost = Cost per km * Number of km
                <br><b>Variable Cost = 5 km * 8 Rs/km = 40 Rs</b>
                <br><b>Total Cost = 0+40 = 40 Rs</b>
                </p>
                <p style="font-size: 18px;">If Joey to pay 10 Rs to Chandler to book an Uber every time, then what is the total Cost?
                </p>
                <p style="font-size: 18px;"><b>Fixed Cost = 10 Rs
                  <br>Total Cost = 10+40 = 50 Rs</b>
                </p>
                <p style="font-size: 18px;"><b>Note: Variable Cost = Total Cost - Fixed Cost.
                  <br>Cost per unit * Number of units = Total Cost - Fixed Cost
                  <br>Number of units = (Total Cost - Fixed Cost)/(Cost per unit)</b>
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br><br><br>
              <br><br><br><br><br><br><br>

                <!-- <img src="https://media.giphy.com/media/13Uiy60hKX7wY0/giphy.gif" width="150px" height="150px" alt="Concept">
                <br>
                <br>
                <img src="https://media.giphy.com/media/bDmK86uwmptio/giphy.gif" width="150px" height="150px" alt="Concept">
                <br>
                <br>
                <img src="https://media0.giphy.com/media/lKnSCKqn0xUJDp1uR0/200w.webp?cid=3640f6095c9353936f5754506fac6066" width="150px" height="150px" alt="Concept"> -->
                <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post" style="text-align: right; display:none;">
                <input type="submit" id="submit" value="Try Timer Questions"> 
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
  </div></div>

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
            window.location = "{{url()}}/Module2/Timer";
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
            window.location = "{{url()}}/Unit2CostActivity";
          }
});
});
$(document).on('click', '#back', function(){
  window.location = "{{url()}}/basicModule";       
});

</script>
 
