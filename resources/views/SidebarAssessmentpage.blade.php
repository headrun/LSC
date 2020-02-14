@extends('layout.sidebar')
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
<style>
	.header_area {
   background-color: #7f5fc6;
   }

   .card{
       padding: 20px;
       background-color: #ffffff;
       width: 100%;
       height: 100%;
       cursor: pointer;
       border-radius: 5px;
   }
   h1{
    color: #ffffff;
    font-size: 32px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 15px;
   }
   h3 {
   color: #333333;
   height: 10px;
   font-size: 20px;
   font-family: 'Montserrat', sans-serif;
   font-weight: 1000;
   line-height: 1.2;
   }
   #image {
   border: solid 1.3px #eeeeee;
   align-items: center;
   border-radius: 50%;
   justify-content: center;
   background-color: #ffffff;
   }
p{
color:#333;
}
</style>
</head>
<!-- <div class="row" style="margin-top: 60px;background-color: #79478f">  -->
  <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
</div> -->
<body style="background-color: #79478f;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <div class="container" >
       <div>
        <h1>Hi {{ Session::get('user_name') }}, Welcome to Logistics Assessment Module</h1>
       </div>
       <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <div class="card" id ="activity1" >
                   <div class="row">
                     <a href="{{url()}}/Assessment/Module1_Test">
                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                           <!-- <div id="image"> -->
                               <img src="https://image.flaticon.com/icons/svg/138/138297.svg" alt="Smiley face" width="110" height="110">
                           <!-- </div> -->
                       </div>
                       <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                           <h3 style = "padding : 5px;" >First Assessment</h3>
                           <br>
                           <p>Please Click Here To Write Your First Assessment.</p>
                       </div>
                       </a>
                   </div>
               </div>
           </div>
       <?php if(Session::get('email') == 'testuser@gmail.com' || Session::get('email') == 'vimal@mieone.com' || Session::get('email') == 'bhargavi@headrun.com' || Session::get('school_name') == 'KVMHSS'){?>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <div class="card" id ="activity1" >
                   <div class="row">
                     <a href="{{url()}}/assessment_Unit2">
                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                           <!-- <div id="image"> -->
                               <img src="https://image.flaticon.com/icons/svg/726/726455.svg" alt="Smiley face" width="110" height="110">
                           <!-- </div> -->
                       </div>
                       <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                           <h3 style = "padding : 5px;" >The Second Assessment</h3>
                           <br>
                           <p>Please click here to write your second assessment.</p>
                       </div>
                       </a>
                   </div>
               </div>
	   </div>
          <?php }?>

      
    </div>
</div>
</div>

</body>
  
</html>

<script type="text/javascript">

 window.onload = function() {
 document.getElementById('assessment').className = 'assessment';

};

</script>
@stop


