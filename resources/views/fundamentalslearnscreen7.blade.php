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
<!-- <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
@media screen and (min-width: 1900px) {
  #image {
    width: 870px;
  }
}

.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
h2,h3 {
  font-family: comic Sans;
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
  /*border-top-right-radius: 10px;*/
  /*border-bottom-right-radius: 10px;*/
}
.footer{
  position: fixed;
  bottom: 0;
  width: 100%;
}
.sweep:hover:before{transform: scaleX(1);}
</style>
</head>
<body id = "body">
<div class="container-fluid">
  <div class="row" style="background-color: #e5e0ef">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
      <img src="{{asset('assets/img/process.jpg')}}" width="100%" id="image"/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
    <div class="w3-container w3-animate-left">
    <br>
      <h2 style="color: #35395c;">Store already has 300 helmets. How much should it order from its factory?</h2>
    <br>
    </div>
    <div class="w3-container w3-animate-right">
      <h3 style="color: #35395c;">Available inventory = 300 helmets</h3>
      <h3 style="color: #35395c;">Purchase quantity = Requirement - Inventory</h3>
      <h3 style="color: #35395c;">Requirement = 1,500 helmets</h3>
      <h3 style="color: #35395c;">Inventory = 300 helmets</h3>
      <h3 style="color: #35395c;">Purchase quantity = 1,200 helmets</h3>
    </div>
    </div>
  </div>
  <div class="row footer">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <div style="cursor: pointer;">
<!--        <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left">-->
<button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;bottom:10px;margin-top: 13px;">Previous Page</button>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6" align="center">
      <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3" >
      <div style="cursor: pointer;">
      <!--  <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right">-->
      </div>
    </div>
  </div>
</div>
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
   window.location = "{{url()}}/FundamentalLearnScreen8";
   }
  }
   if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
   window.location = "{{url()}}/FundamentalLearnScreen6";
   }
  }

});
  $(document).on('click', '#back', function(){
    window.location = "{{url()}}/FundamentalLearnScreen6";
  });
  $(document).on('click', '#next', function(){
    window.location = "{{url()}}/FundamentalLearnScreen8";
  });
  $(document).on('click', '#gotohome', function(){
    window.location = "{{url()}}/SidebarLearningPage";
  });
</script>
@stop
