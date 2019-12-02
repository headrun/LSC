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
  <!-- for grids i.e. columns -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <style>
h3{
    color: red;
    padding-left: 10px;
}
.row{
    /*margin-left:0px;*/
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
h2{
  font-family: comic Sans;
  color: #35395c;
  margin: 10px;
  /*text-align: center;*/
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
.center{
  padding: 30px;
}
</style>
</head>
<body id="body">
<div class="container-fluid">

    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 img">
        <img src="{{asset('assets/img/aeroplane.jpg')}}" width="100%" style="height: 320px;">
        <div id="h31" style="background-color: white;margin-top: -20px;">
          <br>
        <h3>&#10070; 135 million passengers every year</h3>
        <h3>&#10070; World’s third largest domestic and civil aviation market</h3><br><br><br><br><br>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
        <img src="{{asset('assets/img/smile.png')}}" id="smiley" width="100%">
        <div class="row center">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <img src="{{asset('assets/img/img1.jpg')}}" width="100%" height="100%" id="img1">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6" id="h33">
            <h2 style="color: black;">Fastest means of transportation</h2>
            <h2 style="color: black;">Best  for transfer of costly material requiring immediate commute</h2>
          </div>
</div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 id="h34" style="color: black;">Best suited for evacuation/ transportation during natural calamities and emergencies</h2>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6" >
            <img src="{{asset('assets/img/img2.jpg')}}" width="100%" height="100%" id="img2">
          </div>
        </div>
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
  $("#h31").hide();
  $("#smiley").hide();
  $("#img1").hide();
  $("#img2").hide();
  $("#h33").hide();
  $("#h34").hide();
});
var next = 0;
var count = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
    $("#h31").show();
   }
   else if(next == 2){
    $("#smiley").show();
   }
   else if(next == 3){
    $("#smiley").hide();
    $("#img1").show();
    $("#img2").show();
    $("#h33").show();
    $("#h34").show();
   }
   else if(next == 4){
    window.location = "{{url()}}/Unit2LearnSlide7";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $("#h31").hide();
   }
   else if(next == 1){
    $("#smiley").hide();
   }
   else if(next == 2){
    $("#smiley").show();
    $("#img1").hide();
    $("#img2").hide();
    $("#h33").hide();
    $("#h34").hide();
   }
   else if(next == -1){
    window.location = "{{url()}}/Unit2LearnSlide5";
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
//             window.location = "{{url()}}/Unit2LearnSlide7";
//           }
//     });
// });

$(document).on('click', '#back', function(){
    $.ajax({
 url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Unit2LearnSlide5";
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

