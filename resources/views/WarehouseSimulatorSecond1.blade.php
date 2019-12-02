<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Warehouse</title>
   <link rel="stylesheet" href="newcss/css/bootstrap.min.css">
   <link rel="stylesheet" href="newcss/css/style.css">
   <link rel="stylesheet" href="newcss/fonts.css">
   <link rel="stylesheet" href="newcss/Fontawsome/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="newcss/css/slick.css">
  <link rel="stylesheet" type="text/css" href="newcss/css/slick-theme.css">
<style type="text/css">
 .watc{
   float: right;
   position: relative;
   z-index: 99;
   bottom: 14px;
   right: 40px;
 }
 .watc a{
   background: rgba(229,9,21,1);
   color: #ffffff;
   font-size: 14px;
   font-family: 'Montserrat-Regular';
   padding: 8px 15px;
   -webkit-border-radius: 16px;
   -moz-border-radius: 16px;
   border-radius: 16px;
   text-decoration: none;
 }
video[poster]{
object-fit: cover;
}
</style>
</head>
<body>
 <video autoplay muted loop id="myVideo">
   <source src="newcss/images/AutomatedWarehouse-FullSimulation.mp4" type="video/mp4">
 </video>
 <div class="overlay">
 </div>
 <div class="fullpage">
   <div class="container">
     <div class="section-top">
<!--       <div class="logo"><a href="index.html"><img src="newcss/images/logo.png" /></a></div>-->
	<div><h3 style = "color:red;"><b>Logistics Framework</b></h3></div>
       <div class="watc" align="right" style="bottom: 36px;"><a href="/Videos">Go to Home Page</a></div>
     </div>
     <div class="sectionmiddle">
       <div class="row">
         <div class="col-xs-12 col-lg-2 col-md-2 col-sm-2">
         </div>
         <div class="col-xs-12 col-lg-7 col-md-7 col-sm-7">
           <div class="videoimage">
             <video id="myVideo1" width="100%" controls height="354px" poster="newcss/images/thumbnail1.png">
               <source src="newcss/images/logistics_framework.mp4" type="video/mp4">
               <source src="newcss/images/AutomatedWarehouse-FullSimulation.webm" type="video/webm">
             </video>
           </div>
         <div class="watch" onclick="playVid()"><a href="#"><i class="fas fa-play" aria-hidden="true"></i>
WATCH</a></div>
       <div class="stop" onclick="pauseVid()" style="display:none;"><a href="#"><i class="fas fa-stop-circle" aria-hidden="true"></i>
         STOP</a></div>
         <div class="playbutton" onclick="playVid1()"><i class="fas fa-play" aria-hidden="true"></i></div>
         </div>
       </div>
     </div>
</div>
<div class="watc" align="right" style="bottom: 52px;position: absolute;"><a href="/WarehouseSimulatorSecond2">Next Page</a></div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="newcss/js/bootstrap.min.js"></script>
<script src="newcss/js/slick.js" type="text/javascript"></script>
<script type="text/javascript">
   $(document).on('ready', function() {
     $(".regular").slick({
       dots: false,
       infinite: true,
       slidesToShow: 3,
       slidesToScroll: 1
     });
   });
</script>
<script>
var vid = document.getElementById("myVideo1");
var playVid,pauseVid,playVid1;
function playVid() {
 vid.play();
 $('.watch').hide();
 $('.playbutton').hide();
 $('.stop').show();
}
function pauseVid() {
 vid.pause();
 $('.stop').hide();
 $('.watch').show();
 $('.playbutton').show();
}
function playVid1() {
 vid.play();
 $('.watch').hide();
 $('.playbutton').hide();
 $('.stop').show();
}
</script>
</html>
