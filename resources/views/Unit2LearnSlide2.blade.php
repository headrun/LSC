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
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <!-- for grids i.e. columns -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--  <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/> -->
 <style>
.footer{
 position: fixed;
 bottom: 0;
 width: 100%;
}
p{
    color: red;
    padding-left: 10px;
}
h2{
  font-family: comic Sans;
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
@media screen and (min-width: 1900px) {
  #image {
    height: 870px;
  }
}
.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
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
</style>
</head>
<body id="body">
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
        <img id="image" src="{{asset('assets/img/train.jpg')}}" width ="100%" style="height: 280px;" />
        <div style="background-color: white;font-size: 24px;" class="one">
          <br>
          <p> &#10070; 115,000 KM of railway track in India</p>
          <p> &#10070; 12,600 passenger trains and 7,400 freight trains every day</p>
          <p> &#10070; Transports 6 Lkah tonnes of goods every day</p>
          <p> &#10070; 8 billion passengers travel annually</p>
          <br><br><br><br>
        </div>
        
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
        <img id="image" class="two" src="{{asset('assets/img/smile.png')}}" width ="100%"/>
        <!-- <br><br> -->
        <br>
        <div class="row three">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <img src="{{asset('assets/img/goods.png')}}" width="80%" height="150px">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <br>
            <h2>Suitable for small and heavy loads</h2>
          </div>
        </div>
        <br>
        <div class="row three">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <br>
            <h2>Cheaper for longer distance</h2>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <img src="{{asset('assets/img/money.png')}}" width="80%" height="150px">
          </div>
        </div>
        <br>
        <div class="row three">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <img src="{{asset('assets/img/clock.png')}}" width="50%" height="150px">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <br>
            <h2>Faster than roadways</h2>
          </div>
        </div>
        <br>
        <div class="row three">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <br>
            <h2>Unaffected by weather</h2>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
            <img src="{{asset('assets/img/sun.png')}}" width="60%" height="150px">
          </div> 
        </div>
      </div>
    </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <button class="btn" id ="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;">Previous Page</button>
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
        <div class="sweep" id="gotohome">Go To Home Page</div>
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
var next =0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
   if(event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $(".one").show();
   }
   else if(next == 2){
   $(".two").show();
   }
   else if(next == 3){
   $(".two").hide();
   $(".three").show();
   }
   else if(next == 4){
   window.location = "{{url()}}/Unit2LearnSlide3";
   }
  }
  else if(event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $(".one").hide();
   }
   else if(next == 1){
   $(".two").hide();
   }
   else if(next == 2){
   $(".two").show();
   $(".three").hide();
   }
   else if(next == -1){
   window.location = "{{url()}}/Unit2LearnSlide1";
   }
  }
});

// $(document).on('click', '#next', function(){
//     $.ajax({
//           url : "{{url()}}/quick/goToSample",
//           type : "POST",
//           // data : { 'getuser' : user,'getpassword' : password },
//           dataType : 'json',
//           success: function(response) {
//             console.log('success');
//             window.location = "{{url()}}/Unit2LearnSlide3";
//           }
//  });
// });

$(document).on('click', '#back', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Unit2LearnSlide1";
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
