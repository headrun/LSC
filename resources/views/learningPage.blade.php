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
        <h1>Hi {{ Session::get('user_name') }},Welcome to Logistics Learning Module</h1>
       </div>
        <div class="row" style="display:none;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module1" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/181/181017.svg" alt="Smiley face" width="" height="">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Speed</h3>
                            <br>
                            <p>Speed explains how fast or slow an object moves.</p>
                        </div>
                    </div><!-- </a> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/313/313062.svg" alt="Smiley face" width="" height="">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Cost</h3>
                            <br>
                            <p>An amount that has to be spent to buy something.</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <br><br>
        <div class="row" style="display:none;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module3">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/137/137143.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Constraints</h3>
                            <br>
                            <p>The state of being checked,restricted to avoid or perform some action.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module4">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/1792/1792155.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Optimization</h3>
                            <br>
                            <p>The action of making the best use of a resource.</p>
                        </div>
                    </div>
                </div>        
	    </div>
        </div>
    </div>
<br><br>
    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="display:none">
                <div class="card" id ="module2a" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://img.icons8.com/color/96/000000/garage-closed.png" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Logistics Infrastructure</h3>
                            <br>
                            <p>Logistics is generally the detailed organization and implementation of a complex operation. </p>
                        </div>
                    </div>
                </div>
	    </div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="moduleBasic">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/1356/1356510.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Basic Concepts</h3>
                            <br>
                            <p>The action of making the best use of a resource.</p>
                        </div>
                    </div>
                </div>
      </div>    


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="card" id ="module4a">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <!-- <div id="image"> -->
                                            <img src="https://image.flaticon.com/icons/svg/1998/1998858.svg" alt="Smiley face" width="110" height="110">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <h3>Modes of Transportation</h3>
                                    <br>
                            <p>The different modes of transport are air, water, and land transport.</p>
                        </div>
                    </div>
                </div>
    </div>
<br>
<br>
</div>
<br><br>
<div class="row" >
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="display:none">
                <div class="card" id ="moduleBasic">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/1356/1356510.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Basic Concepts</h3>
                            <br>
                            <p>The action of making the best use of a resource.</p>
                        </div>
                    </div>
                </div>
      </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module2a" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://img.icons8.com/color/96/000000/garage-closed.png" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>Logistics Infrastructure</h3>
                            <br>
                            <p>Logistics is generally the detailed organization and implementation of a complex operation. </p>
                        </div>
                    </div>
                </div>
            </div>



</div>

      
<div class="row" align="center" style="padding:30px;display:none">
          <a href="/ActivityLevels" style="color: white;font-size: 18px;">Go Through The Activity</a>
        </div>
</div>
</div>
</body>
  
</html>

<script type="text/javascript">

$(document).on('click', '#module1', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Module1Theory";
          }
    });
});
</script>

<script type="text/javascript">

$(document).on('click', '#module2', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Module2Theory";
          }
    });
});
</script>

<script type="text/javascript">
  $(document).on('click', '#module3', function(){
    window.location = "{{url()}}/Module3Theory";
  });
  $(document).on('click', '#module4', function(){
    window.location = "{{url()}}/Module4Theory";
  });
  $(document).on('click', '#module5', function(){
    window.location = "{{url()}}/Sample";
  });
  $(document).on('click', '#module2a', function(){
    window.location = "{{url()}}/LogisticsInfrastureOverview";
  });
  $(document).on('click', '#module4a', function(){
    window.location = "{{url()}}/Unit2LearnSlide1";
  });
  $(document).on('click', '#moduleBasic', function(){
    window.location = "{{url()}}/basicModule";
  });
  window.onload = function() {
    document.getElementById('learn').className = 'learn';
  };
</script>
@stop

