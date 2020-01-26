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
</style>
</head>
<!-- <div class="row" style="margin-top: 60px;background-color: #79478f">  -->
  <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
</div> -->
<body style="background-color: #79478f;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <div class="container" >
       <div>
        <h1>Hi {{ Session::get('user_name') }}, Welcome to Logistics Practice Module</h1>
       </div>
       <br><br>
       <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="inventoryModule1" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/992/992900.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Basics of Inventory</h3>
                            <br>
                            <p>Demand is an economic term that refers to the amount of products or services that consumers wish to purchase at any given price level.</p>
                        </div>
                    </div><!-- </a> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="inventoryModule2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/1642/1642331.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Inventory Module 2</h3>
                            <br>
                            <p>Supply is a fundamental economic concept that describes the total amount of a specific good or service that is available to consumers. </p>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <br><br>
	<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="inventoryModule3">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/1935/1935797.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Inventory Module 3</h3>
                            <br>
                            <p>Provides a unique opportunity to leverage high profile, quality authorship into a market segment .</p>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="display: none;">
                <div class="card" id ="inventoryModule4" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/138/138302.svg" alt="Smiley face" width="" height="">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Inventory Module 4</h3>
                            <br>
                            <p>Transportation is the movement of humans, animals and goods from one location to another.</p>
                        </div>
                    </div><!-- </a> -->
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>
</div>

</body>
  
</html>

<script type="text/javascript">
  $(document).on('click', '#inventoryModule1', function(){
    window.location = "{{url()}}/inventoryModule1Test";
  });
  $(document).on('click', '#inventoryModule2', function(){
    window.location = "{{url()}}/inventoryModule2Test";
  });
  $(document).on('click', '#inventoryModule3', function(){
    window.location = "{{url()}}/inventoryModule3Test";
  });
  window.onload = function() {
    document.getElementById('learn').className = 'learn';
  };
</script>
@stop

