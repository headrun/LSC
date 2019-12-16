@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Gobble Cereal Company</title>
      <link rel="stylesheet" href="Unit3Activity1/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit3Activity1/css/fontawesome.css">
      <link rel="stylesheet" href="Unit3Activity1/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit3Activity1/css/style.css">
      <link rel="stylesheet" href="Unit3Activity1/css/introjs.css">
      <link rel="stylesheet" href="Unit3Activity1/fonts.css">

      <style type="text/css">
      body{

      }
      .watcBack{
      float: left;
      z-index: 99;
      margin-top: 13px;
      bottom: 0px;
      right: 40px;
    }
    .watcBack a{
      background: rgba(229,9,21,1);
      color: #ffffff;
      font-size: 14px;
            font-family: 'Montserrat-Regular';
            padding: 8px 15px;
      -webkit-border-radius: 16px;
      -moz-border-radius: 16px;
      border-radius: 16px;
      text-decoration: none;
    }
      </style>
   </head>
   <body class="newbg">
     <div class="activity_content">
       <div class="container">

         <p class="activity1">Hi!  Welcome to the activity!</p>
         <p class="activity2">You will be designing a distribution channel for Gobble cereal, a breakfast cereal company</p>

         <div class="non-branded">
           <ul>
             <li><img src="Unit3Activity1/images/cereal-meal.png" /></li>
             <li><img src="Unit3Activity1/images/cereal-meal1.png" /></li>
             <li><img src="Unit3Activity1/images/cereal-meal2.png" /></li>
             <li><img src="Unit3Activity1/images/cereal-meal3.png" /></li>
             <li><img src="Unit3Activity1/images/cereal-meal4.png" /></li>
           </ul>
         </div>

<div class="getstarted"><a href="/Unit3Activity1Page2L">Go to next screen</a></div>
<div class="watcBack"><a href="/DistributionLearnPage">Back</a></div>
       </div>

     </div>
   </body>
   <script src="Unit3Activity1/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->

</html>
@stop

