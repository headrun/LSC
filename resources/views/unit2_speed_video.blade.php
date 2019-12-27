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
h2{
  font-family: comic Sans;
  color: #35395c;
  /*text-align: center;*/
} 
h4{
  text-align: center;
  color: red;
} 

li{
  font-size: 25px;
  /*line-height: 2.0;*/
}  
  .footer{
   position: fixed;
   bottom: 0;
   width: 100%;
  }
  </style>
  </head>
  <body id="body" style="background-color: #dbe3e6;">
  <div class="container-fluid">
      <div class="row" style="background-color: white;">
        <h2 id="heading" align="center"><b>Speed Distance Time</b></h2>
      </div>
<div class="row" align="center" style="margin-top: 20px;">
        <video width="750" height="430" controls poster="newcss/images/unit2thumbnail1.png" style="outline-color: #dbe3e6;">
          <source src="newcss/images/unit2video1.mp4" type="video/mp4">
        </video>
      </div>

     <div class="row footer">
       <div class="col-lg-3 col-md-3 col-sm-3">
           <div style="cursor: pointer;">
     <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;width:118px;bottom:10px;">Previous Page</button>
         </div>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6" align="center" >
         <div style="margin-top:-30px;font-size: 17px;display:none">Press down arrow for next steps</div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
         <div style="cursor: pointer;">
	 <!--  <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right">-->
             <button class="btn" id="next" style="background-color: #9f59b0;color:white;left:10%;position: absolute;width:118px;bottom:10px;left: 171px;">Next Page</button>
         </div>
       </div>
     </div>
     </div>
     </body>
     </html>


<script type="text/javascript">
  $(document).on('click', '#next', function(){
    window.location = "{{url()}}/Unit2SpeedVideo2";
  });
  $(document).on('click', '#back', function(){
    window.location = "{{url()}}/Module1Theory";
  });
  $(document).on('click', '#gotohome', function(){
    window.location = "{{url()}}/FundamentalLearnPage";
  });
</script>
@stop
