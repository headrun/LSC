@extends('layout.sidebar1')
@section('content')

<html lang="en">
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="newActivityCss/css/bootstrap.min.css">
      <link rel="stylesheet" href="newActivityCss/css/fontawesome.css">
      <link rel="stylesheet" href="newActivityCss/fontawsome/css/all.css">
      <link rel="stylesheet" href="newActivityCss/css/style.css">
      <link rel="stylesheet" href="newActivityCss/css/introjs.css">
      <link rel="stylesheet" href="newActivityCss/fonts.css">
 <style>
  .row{
    margin-left:0px;
  }

.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
</style>
</head>
<body id="body">
     <div class="activity_content" style="background-color:white">
       <div class="container">
         <h1>Activity</h1>
         <p class="activity1">Let us perform a quick activity to understand Supply and Demand </p>
         <p class="activity2">AtoZ private limited makes pressure cookers for a store in Chennai. The stores demand for the year 2019 is as follows </p>
<div class="months_table">
  <table cellspacing="1" cellpadding="1" border="1" style="border-color:#39a1bd;">
    <thead>
      <tr>
        <th>Jan</th>
        <th>Feb</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
      </tr>
       </thead>
         <tbody>
              <tr>
                <td>100</td>
                <td>110</td>
                <td>120</td>
                <td>150</td>
                <td>150</td>
                <td>180</td>
                <td>200</td>
              </tr>
          </tbody>
  </table>
</div>


        <p class="activity3">It takes 1 month  for supply to reach demand, that is, Supply in the month of January reaches store only by February. </p>
        <p class="activity4">Stock already has 180 units at start of January.</p>
        <h2>Terminologies</h2>
        <p class="activity5">Opening Stock = Stock at the beginning of the month</p>
        <p class="activity5">Receipt from supply = Material received from supply</p>
        <p class="activity5">Closing Stock = Stock at end of Month = Opening Stock + Receipt from supply – Demand</p>
        <p class="activity5">Closing stock at end of a month = Opening stock at beginning of next month </p>
        <p class="activity5">(i.e. stock at end of January = Stock at beginning of February.) Draw line and show </p>

        <div class="getstarted"><a href="/FundamentalLearnScreen1o2" onclick="javascript:call_introchangestart()">Get Start Activity</a></div>
               </div>

             </div>
           
           <script src="newActivityCss/js/jquery.min.js" type="text/javascript"></script>
           <script src="newActivityCss/js/popper.min.js" type="text/javascript"></script>
           <script src="newActivityCss/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

<script type="text/javascript">
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   //  window.location = "{{url()}}/FundamentalLearnScreen1p";
   }
   }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
    window.location = "{{url()}}/FundamentalLearnScreen1n";
   
  }
});

$(document).on('click', '#back', function(){
  window.location = "{{url()}}/FundamentalLearnScreen1c";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop


