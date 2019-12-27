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
<!--  <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<style>
	.main-wrapper{
          margin-top: 0px;
          display: block;
          position: absolute;
          top: 40%;
	}
	h1{
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
.sweep:hover:before{transform: scaleX(1);}

.sweep{
    position: fixed;
  bottom: 0px;
  margin-left: -90px;
}

.ml3 {
  font-weight: 900;
  font-size: 3.5em;
}
.footer{
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>
</head>
<body id = "body" style="text-align: center;background-color: #e5e0ef">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
     <h1 style="color: #35395c;" class = "ml3">Ready for some purchase planning?</h1>
    </div>
  </div>


<!-- <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <div style="cursor: pointer;">
        <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6" align="center">
      <div class="sweep" id="gotohome">Go To Home Page</div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3" >
      <div style="cursor: pointer;">
        <img id="next" data-toggle="popover" data-placement="top" data-content="Press To Find Out" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right">
      </div>
    </div>
  </div> -->

  <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;text-align:left;padding-bottom:10px;">
           <button class="btn" id="back" style="background-color: #9f59b0;color:white;">Previous Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
        <div style="font-size: 17px;">Press down arrow for next steps</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <img id="next"  data-toggle="popover" data-placement="top"  data-content="Press To Find Out" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
        </div>
      </div>
    </div>

</div>
</body>
</html>

<script type="text/javascript">
var count = 0;
var next=0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   window.location = "{{url()}}/PlanningPageSlide6";
   }
   // document.getElementById("myBtn").click();
  }
  else if (event.keyCode === 38) {
  event.preventDefault();
  next = next-1;
  if(next == -1){
  window.location = "{{url()}}/PlanningPageSlide4";
  }
  }
});

$(document).on('click', '#next', function(){
  window.location = "{{url()}}/PlanningPageSlide6";
});
$(document).on('click', '#back', function(){
  window.location = "{{url()}}/PlanningPageSlide4";
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/EconomicsModule";
});

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|[\w!.?])/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: function(el, i) {
      return 50 * (i+1)
    }
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

</script>
@stop








