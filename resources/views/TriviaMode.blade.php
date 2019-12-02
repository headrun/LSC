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
  color: white;
  text-align: center;

}
h3{
  text-align: center;
  color: white;
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
  background-color: red;
}
#h23,#h24{
color:#35395c;
}
</style>
</head>
<body id="body">
<div class="container-fluid">

    <div class="row"><br><br>
     <h2 id="h21">Do you know size of Indian logistics sector?</h2><br><br><br>
     <h2 id="h22">Guess!</h2><br><br>
     <h2 id="h23">200 Bn $</h2><br><br>
     <h2 id="h24">In Indian rupees, 14 Lakh crore Rs !!!!</h2>
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
$("#h23").hide();
$("#h24").hide();
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
  $("#h23").show();
  $("#h24").show();
 }
 else if(next == 4){
  window.location = "{{url()}}/TriviaMode2";
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
 else if(next == 2){
  $("#h23").hide();
  $("#h24").hide();
 }
 else if(next == -1){
  window.location = "{{url()}}/FundamentalLearnPage";
  }
}

});

 $(document).on('click', '#next', function(){
     $.ajax({
           url : "{{url()}}/quick/goToSample",
           type : "POST",
           // data : { 'getuser' : user,'getpassword' : password },
           dataType : 'json',
           success: function(response) {
             console.log('success');
             window.location = "{{url()}}/TriviaMode2";
           }
     });
 });

 
 $(document).on('click', '#back', function(){
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
 $(document).on('click', '#gotohome', function(){
     $.ajax({
           url : "{{url()}}/quick/goToSample",
           type : "POST",
           // data : { 'getuser' : user,'getpassword' : password },
           dataType : 'json',
           success: function(response) {
             console.log('success');
             window.location = "{{url()}}/Learn";
           }
     });
 });
 </script>
 @stop

