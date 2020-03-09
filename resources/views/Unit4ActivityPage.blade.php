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
<body style="background-color: #79478f;">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <div class="container" >
      <div>
        <h1>Hi {{ Session::get('user_name') }}, Welcome to Transportation Activities Module</h1>
      </div>
      <br><br>
	    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card" id ="module1">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img src="https://img.icons8.com/color/2x/activity-history.png" alt="Activity1" width="110" height="110">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <h3>Activity 1</h3>
                <br>
                <!-- <p>Provides a unique opportunity to leverage high profile, quality authorship into a market segment .</p> -->
              </div>
            </div>
          </div>        
        </div>  
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card" id ="module2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img src="https://img.icons8.com/color/2x/activity-history.png" alt="Activity2" width="110" height="110">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <h3>Activity 2</h3>
                <br>
                <!-- <p>Provides a unique opportunity to leverage high profile, quality authorship into a market segment .</p> -->
              </div>
            </div>
          </div>      
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card" id ="module3">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img src="https://img.icons8.com/color/2x/activity-history.png" alt="Activity" width="110" height="110">  
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <h3>Activity 3</h3>
                <br>
                <!-- <p> Economics is a social science concerned with the production, distribution, and consumption of goods and services.</p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card" id ="module4">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img src="https://img.icons8.com/color/2x/activity-history.png" alt="Activity" width="110" height="110">  
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <h3>Activity 4</h3>
                <br>
                <!-- <p> Economics is a social science concerned with the production, distribution, and consumption of goods and services.</p> -->
              </div>
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
    window.location = "{{url()}}/Unit4Activity1Page1";
  });
  $(document).on('click', '#module2', function(){
    window.location = "{{url()}}/Unit4Activity2Page1";
  });
  $(document).on('click', '#module3', function(){
    window.location = "{{url()}}/Unit4Activity3Page1";
  });
  $(document).on('click', '#module4', function(){
    window.location = "{{url()}}/Unit4Activity4Page1";
  });
  window.onload = function() {
    document.getElementById('activity').className = 'activity';
  };
</script>
@stop