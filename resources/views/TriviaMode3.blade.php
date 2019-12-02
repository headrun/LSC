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
<!--  <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/> -->
 <style>
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
    width: 870px;
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
<body>
<div class="container-fluid">
    <div class="row" style="background-color: #e5e0ef">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 0px;">
        <img src="https://logismarketfr.cdnwm.com/ip/sigma-progiciel-metier-integre-progiciel-metier-integre-650929.jpg" width = "100%" id = "image" style="height: 579px;"/>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 0px;">
        <img src="https://blog.placeit.net/wp-content/uploads/2014/12/placeit-9.jpg" width="100%" height="250px;">
        <div style="border: 2px solid black; background-color: #616165; color: white;" >
          <br>
          <h3 align="center">StockOne, A Mieone Product</h3>
          <div class="row" style="margin-left: 20px;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <span><img src="https://flaticons.net/icons/Miscellaneous/Maps.png" width="20px;"> </span>
              <p> No.5, 80 Feet Main Road, <br>4th Block, Koramangala  <br> Bengaluru, <br>Karnataka  <br> 560034</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6"> 
             <span><img src="https://flaticons.net/icons/Mobile%20Application/Globe.png" width="20px;"> </span> 
              <p>www.stockone.in</p>
            </div>
          </div>
          <h5 align="center">For Sale Enquires Visit: </h5>
          <div class="row" style="margin-left: 20px;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <span><img src="https://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Contact.png&r=255&g=255&b=255" width="20px;"> </span>
              <p>+91-9650177683 <br> +91 9535000665</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <p>www.stockone.in</p>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
        <!-- <div class="sweep" id="gotohome">Go To Home Page</div> -->
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

/*$(document).ready(function(){
 $('[data-toggle="popover"]').popover('show');
});*/

$(document).on('click', '#next', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/PlanningPageSlide4";
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
            window.location = "{{url()}}/TriviaMode2";
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
            window.location = "{{url()}}/EconomicsModule";
          }
    });
});
</script>
@stop
