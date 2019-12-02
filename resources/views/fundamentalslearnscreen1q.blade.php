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
  <title>Activity2</title>
      <link rel="stylesheet" href="/latestActivity/bootstrap.min.css">
      <link rel="stylesheet" href="/latestActivity/fontawesome.css">
      <link rel="stylesheet" href="/latestActivity/all.css">
      <link rel="stylesheet" href="/latestActivity/style.css">
      <link rel="stylesheet" href="/latestActivity/introjs.css">
      <link rel="stylesheet" href="/latestActivity/fonts.css">
 <style>
  .row{
    margin-left:0px;
  }

.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
.newbg{
        background-image: url('https://presentience.in/clients/activity/v2/images/bg.jpg');
      }
</style>
</head>
<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>

   <body class="newbg" data-gr-c-s-loaded="true" id="body">
     <div class="activity_content">
       <div class="container">
         <h1>Activity2</h1>
         <p class="activity1">Welcome to the Planning activity.</p>
         <p class="activity2">Now that we have understood the types of planning, let us take a challenging task.</p>
        <h5>Sierratone is a manufacturer of electronic sensors in 2 factories - Nagpur and Mumbai</h5>
        <p class="activity3">There is a robotic manufacturing Automoto enterprises in Hyderabad, which needs 500 units of electronic sensors.</p>
        <h3>Budget for transportation is 40,000 Rs</h3>
        <p class="activity4">Basis available information, decide your transportation planning to ensure Automoto enterprise receives material spending no more than 40,000 Rs</p>
        <div class="getstarted"><a href="/FundamentalLearnScreen1r" onclick="javascript:call_introchangestart()">Get Start Activity</a></div>
       </div>

     </div>
   
   <script src="/latestActivity/jquery.min.js" type="text/javascript"></script>
   <script src="/latestActivity/popper.min.js" type="text/javascript"></script>
   <script src="/latestActivity/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->


</body>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span>
</html>

<script type="text/javascript">
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
 //  window.location = "{{url()}}/FundamentalLearnScreen1";
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   window.location = "{{url()}}/FundamentalLearnScreen1p1";
  }
});
$(document).on('click', '#back', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/FundamentalLearnScreen1c";
          }
    });
});
</script>
@stop


