@extends('layout.sidebar1')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
    /*font-family: LoraBold;*/
    line-height: 1.3333;
    font-weight: bold;
}
 
 .card {
   background-color: white;
   width: 86%;
   margin: 0 auto;
   float: none;
   margin-bottom: 10px;
      padding: 20px;
   border: 10px solid rgba(0,0,0,0.2);
   border-radius: 10px;
 }
 .quiz-choice {
   background-color: #baacd8;
 }
 .header_area {
   background-color: #7f5fc6;
 }
 #submit {
 font-size: 18px;
 font-family: 'Varela Round', sans-serif;
 margin: 5px;
 color: white;
 background-color: #7d929d;
 border: none;
 border-radius: 20px;
 padding: 10px;
 width: 200px;
 position: relative;
 float: right;
}

#submit:hover {
 cursor: pointer;
 background-color: #7f60c6;
 color: white;
}
p{
font-family: 'Lora', serif;
color: #333333;
font-size: 17px;
}
</style>
</head>

    <body style="background-color: #f1f1f1;">
    <div class="container">
      <h1 style="text-align: center;font-family: monospace;">Concept</h1>
      <div class="card">
    <div class="container">
        <div class="row" style="color: #7d929d;">
            
            <div class="col-md-12 col-sm-12">
                <h1 style="font-family: monospace;">Cost</h1>
                  <p>Total Cost = Fixed Cost + Variable Cost</p>
                  <p>Variable Cost = Cost per unit * Total Units</p>
               
                <p>For example,<br>
                  Joey takes a Uber from his home to burger shop which is 5 KM away.
                  <br> For every Km, he needs to pay 8 Rs. What is total cost?
                </p>
                <p>There is no fixed cost for Joey to go to burger shop. <b>Fixed Cost = 0</b>
                <br>Variable Cost = Cost per km * Number of km
                <br><b>Variable Cost = 5 km * 8 Rs/km = 40 Rs</b>
                <br><b>Total Cost = 0+40 = 40 Rs</b>
                </p>
                <p>If Joey to pay 10 Rs to Chandler to book an Uber every time, then what is the total Cost?
                </p>
                <p><b>Fixed Cost = 10 Rs
                  <br>Total Cost = 10+40 = 50 Rs</b>
                </p>
                <p><b>Note: Variable Cost = Total Cost - Fixed Cost.
                  <br>Cost per unit * Number of units = Total Cost - Fixed Cost
                  <br>Number of units = (Total Cost - Fixed Cost)/(Cost per unit)</b>
                </p>
                <div>
                <!-- <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post" style="text-align: right;"> -->
                <!-- <input type="submit" id="submit" value="Try Timer Questions"> -->

                <!-- </form> -->
                </div>
	    </div>
	    <div class="row">
               <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question">
            </div>
        </div>
    </div>
  </div></div>
    <!-- <footer class="footer_area" style="margin-top: 90px;">
        <div class="container">
            <div class="row single-footer-widget">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copy_right_text">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="" target="_blank">Headrun</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="social_widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    </body>

<script type="text/javascript">
$(document).on('click', '#submit', function(){
    $.ajax({
          url : "{{url()}}/quick/goToTimer",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Module2/Timer";
          }
    });
});
</script>
 
@stop
