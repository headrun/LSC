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
    color:#666666;
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
        <h1>Hi {{ Session::get('user_name') }}, what would you like to do today?</h1>
       </div>
       <br><br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module1" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="http://icongloballogistics.com/images/Sea-Freight-img.gif" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Ports</h3>
                            <br>
                            <p> Port is a maritime commercial facility which may comprise one or more wharves where ships may dock to load and discharge passengers and cargo. </p>
                        </div>
                    </div><!-- </a> -->
                </div>
            </div>
            
        </div>

        
    </div>
</div>
</div>
</body>
  
</html>

<script type="text/javascript">
  $(document).on('click', '#module1', function(){
    window.location = "{{url()}}/SocialModule";
  });
  $(document).on('click', '#module2', function(){
    window.location = "{{url()}}/Economics/Module2/Sample";
  });
  $(document).on('click', '#module3', function(){
    window.location = "{{url()}}/Module3/Sample";
  });
  $(document).on('click', '#module4', function(){
    window.location = "{{url()}}/Module4/Sample";
  });
  $(document).on('click', '#module5', function(){
    window.location = "{{url()}}/Sample";
  });
  $(document).on('click', '#module6', function(){
    window.location = "{{url()}}/Sample";
  });
  window.onload = function() {
    document.getElementById('learn').className = 'learn';
  };
</script>
@stop
