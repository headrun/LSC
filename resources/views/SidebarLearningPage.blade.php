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
        <h1>Hi {{ Session::get('user_name') }}, Welcome to Logistics Learning Module</h1>
       </div>
       <br><br>
	<div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="fundamentalsOfLogistics">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/138/138297.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>1. Fundamentals of Logistics</h3>
                            <br>
                            <p>Provides a unique opportunity to leverage high profile, quality authorship into a market segment .</p>
                        </div>
                    </div>
                </div>        
	    </div>
           
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="transportation" ><!-- <a href="{{url()}}/Subjects"> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/726/726455.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>2. Transportation</h3>
                            <br>
                            <p>Transportation is the movement of humans, animals and goods from one location to another .</p>
                        </div>
                    </div><!-- </a> -->
                </div>
	    </div>
           </div>
	    <br><br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <div class="card" id ="distribution">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <!-- <div id="image"> -->
                                <img src="https://image.flaticon.com/icons/svg/994/994365.svg" alt="Smiley face" width="110" height="110">
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>3. Distribution</h3>
                            <br>
                            <p> It is a chain of businesses or intermediaries through which a good passes the end consumer.</p>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card" id ="module4">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            
                                <img src="https://image.flaticon.com/icons/svg/1792/1792155.svg" alt="Smiley face" width="110" height="110">
                            
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <h3>4. Role of Inventory</h3>
                            <br>
                            <p>A complete list of items such as property, goods in stock, or the contents of a building.</p>
                        </div>
                    </div>
                </div>        
            </div>
	</div>
    <br><br>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="card" id ="module5">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <!-- <div id="image"> -->
              <img src="https://www.flaticon.com/premium-icon/icons/svg/2104/2104165.svg" alt="Smiley face" width="110" height="110">
              <!-- </div> -->
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
              <h3>5. Handling of Specific Inventories in Warehouse</h3>
              <br><br>
              <p>It includes the products, work-in-process goods and finished goods.</p>
            </div>
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
$(document).on('click', '#transportation', function(){
   window.location = "{{url()}}/Learn"
});

$(document).on('click', '#distribution', function(){
  window.location = "{{url()}}/DistributionLearning";
});

 window.onload = function() {
 document.getElementById('learn').className = 'learn';
};

$(document).on('click', '#fundamentalsOfLogistics', function(){
   window.location = "{{url()}}/FundamentalLearnPage";
});

$(document).on('click', '#module4', function(){
   window.location = "{{url()}}/Unit4LearnPage";
});

$(document).on('click', '#module5', function(){
   window.location = "{{url()}}/Unit5LearnPage";
});
</script>
@stop

