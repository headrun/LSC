@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity</title>
      <link rel="stylesheet" href="/finalActivity/css/bootstrap.min.css">
      <link rel="stylesheet" href="/finalActivity/css/fontawesome.css">
      <link rel="stylesheet" href="/finalActivity/fontawsome/css/all.css">
      <link rel="stylesheet" href="/finalActivity/css/style1.css">
      <link rel="stylesheet" href="/finalActivity/css/introjs.css">
      <link rel="stylesheet" href="/finalActivity/fonts.css">

      <style type="text/css">
      body{
        background-color: #f1f1f1;
      }

      </style>
   </head>
   <body>
     <div class="activity_content">
       <div class="container">
         <h1>Activity</h1>
		
         <!-- <p class="activity1">Let us perform a quick activity to understand Supply and Demand </p> -->
         <p class="activity2">Big Box Pvt Ltd is an FMCG company in Chennai </p>
         <p class="activity2">Demand for Maggi for the year 2019 is as follows </p>
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

<div class="getstarted"><a href="finalActivityScreen2" >Get Start Activity</a></div>
       </div>

     </div>
   </body>
   <script src="/finalActivity/js/jquery.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/popper.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->

</html>
@stop
