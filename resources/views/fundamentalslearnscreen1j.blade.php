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
@media screen and (min-width: 1200px) {
  #image {
    height: 540px;
  }
}
@media screen and (min-width: 1600px) {
  #image {
    height: 780px;
  }
}
.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
h2{
  font-family: comic Sans;
  color: #35395c;
  margin: 10px;
  /*text-align: center;*/

}
h1{
  font-family: comic Sans;
  color: #35395c;
  text-align: center;

}

#rcorners2 {
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 15px;
  width: 300px;
  height: 225px;
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
      <h1><b>Why is Logistics important?</b></h1>
    </div>

    <div class="row">
        <div class="w3-container w3-animate-bottom" style="margin-top: 10%" align="center">
          <h4 class="one">Welcome to the pre-learning exercise.</h4>
          <br>
          <h4 class="two">Before understanding Logistics, we should learn about the 2 major elements which define logistics.</h4>
          <br>
          <br>
          <br>
          <h2 class="three"><b>Demand & Supply</b></h2>
        </div>
    </div>
    <br><br>

 <div class="row footer" style="background-color: none;">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id = "back" style="background-color: #9f59b0;bottom:10px;color:white;left:10%;position: absolute;margin-top: 13px;">Previous Page</button>
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
  $(".one").hide();
  $(".two").hide();
  $(".three").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $(".one").show();
   }
 else if(next == 2){
   $(".two").show();
   }
   else if(next == 3){
   $(".three").show();
   }
   else if(next == 4){
   window.location = "{{url()}}/FundamentalLearnScreen1k";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $(".one").hide();
   }
   else if(next == 1){
   $(".two").hide();
   }
   else if(next == 2){
   $(".three").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen1i";
   }
  }
});

$(document).on('click', '#back', function(){
  window.location = "{{url()}}/FundamentalLearnScreen1d";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop
