@extends('layout.sidebar1')

@section('content')

<html lang="en">
<style>
.footer{
 position: fixed;
 bottom: 0;
 width: 100%;
}
.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
h2{
  font-family: comic Sans;
  color: yellow;
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
body{
  background-color: blue;
}
#h21{
  margin-top: 20px;
}
#h22{
  position: absolute;
  top: 40%;
  width: 100%;
  text-align: center;
}
#h23{
color:white;
position: fixed;
bottom: 15%;
width: 100%;
}
</style>
</head>
<body id="body">
<div class="container-fluid">

    <div class="row"> 

      <h2 id="h21">Nearly 200 Mn Sqft (20 Cr Sqft) of warehouse space is available in India</h2>
    
      
        <h2 id="h22">To top it all!!</h2>
      
      <div id="h23">
        
       <h2 style="color: white;">Logistics sector is the biggest recruiter in India in recent year</h2>
      </div>
      
    </div>

     <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
           <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;">Previous Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
        <div class="sweep" id="gotohome">Go To Home Page</div>
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

$(document).ready(function() {
$("#h21").hide();
$("#h22").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 40) {
 event.preventDefault();
 next = next+1;
 if(next == 1){
  $("#h21").show();
 }
 else if(next == 2){
  $("#h22").show();
 }
 else if(next == 3){
  window.location = "{{url()}}/FundamentalLearnPage";
  }
}
else if (event.keyCode === 38) {
 event.preventDefault();
 next = next-1;
 if(next == 0){
  $("#h21").hide();
 }
 else if(next == 1){
  $("#h22").hide();
 }
 else if(next == -1){
  window.location = "{{url()}}/TriviaMode";
  }
}

});

 $(document).on('click', '#next', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
 });
 $(document).on('click', '#back', function(){
  window.location = "{{url()}}/TriviaMode";
 });
 $(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/Learn";
 });
</script>
@stop

