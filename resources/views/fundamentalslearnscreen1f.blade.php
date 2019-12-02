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
<style>
 .row{
    margin-left:0px;
  }
.footer{
 position: fixed;
 bottom: 0;
 width: 100%;
}
.main-wrapper{
 padding-top: 0px;
 padding-left: 0px;
}
h1,h2{
 font-family: comic Sans;
 color: #35395c;
 /text-align: center;/
}
h3{
 text-align: center;
 height: 18em;
}
.sweep{
 display:inline-block;
 position:relative;
 margin:0.4em;  padding:1em;
 cursor:pointer;
background:#35395c;
 color:white;
 z-index:0;
}
.sweep:before {
 content: "";
 position: absolute;
 z-index:-1;
 top: 0;  left: 0;  right: 0;  bottom: 0;
 background: #9c27b0;
 transform: scaleX(0);
 transform-origin: 0 50%;
 transition: transform .5s ease-out;
}
.sweep:hover:before{transform: scaleX(1);}
</style>
</head>
<body id="body" style="background-color: #dbe3e6;">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <h2><b>Planning Functions – Diamond Biscuit Story</b></h2>
   </div>
   <div class="row cent" align="center">
     <h1 style="padding: 12%;">
      For the same example, the supermarket and the<br> company has to answer a few questions
     </h1>
   </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top: 13px;bottom:10px;">Previous Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
 <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" style="background-color: #9f59b0;color:white;right: 1%;position: absolute;">Next Page</button> -->
          <!-- <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
        </div>
      </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  $(".cent").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $(".cent").show();
   }
   else if(next == 2){
   window.location = "{{url()}}/FundamentalLearnScreen1g";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $(".cent").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen1e";
   }
  }
});
// $(document).on('click', '#next', function(){
//    $.ajax({
//          url : "{{url()}}/quick/goToSample",
//          type : "POST",
//          // data : { 'getuser' : user,'getpassword' : password },
//          dataType : 'json',
//          success: function(response) {
//            console.log('success');
//            window.location = "{{url()}}/FundamentalLearnScreen1g";
//          }
//    });
// });
$(document).on('click', '#back', function(){
   $.ajax({
         url : "{{url()}}/quick/goToSample",
         type : "POST",
         // data : { 'getuser' : user,'getpassword' : password },
         dataType : 'json',
         success: function(response) {
console.log('success');
         window.location = "{{url()}}/FundamentalLearnScreen1e";
         }
   });
});
$(document).on('click', '#gotohome', function(){
   $.ajax({
         url : "{{url()}}/quick/goToSample",
         type : "POST",
         // data : { 'getuser' : user,'getpassword' : password },
         dataType : 'json',
         success: function(response) {
           console.log('success');
           window.location = "{{url()}}/FundamentalLearnPage";
         }
   });
});
</script>
@stop

