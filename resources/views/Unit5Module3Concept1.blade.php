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
     <h1 style="text-align: center;font-family: monospace;">CONCEPT</h1>
     <div class="card">
    <div class="container">
        <div class="row" style="color: #7d929d;">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" font-size:22px;">
                <!-- <h1 style="font-family: monospace;">Batch Picking</h1> -->
                <p>Major Picking Methods</p>
                <p>Batch Picking - Consolidate orders and pick at product level</p>
                <p>Order Picking - Pick for an order</p>
                <br>
                <p>For example, lets assume the following orders to a warehouse</p>
                <p>Order 1</p>
                <p>Product 1: 20</p>
                <p>Product 2: 40</p>
                <p>Product 3: 10</p>
                <p>Order 2</p>
                <p>Product 1: 10</p>
                <p>Product 2: 10</p>
                <p>Order 3</p>
                <p>Product 3: 30</p>
                <h1 style="font-family: monospace;">Batch Picking</h1>
                <p>Consolidate all orders at product level</p>
                <p>Product 1: 20+10 = 30</p>
                <p>Product 2: 40 + 10 = 50</p>
                <p>Product 3: 10 + 30 = 40</p>
                <br>
                <p>User picks 30,50,40 units of Product 1,2,3 respectively.</p>
                <p>At segregation table, 30 units of Product 1 is split for Order 1 and 2, 50 units of Product 2 split into Order 1 & 2, 40 units of Product 3 split to Order 1 & Order 3.</p>
                <h1 style="font-family: monospace;">Order Picking</h1>
                <p>Picking is executed at order level and not a consolidated level. Let us assume Vimal, Karthik, Priya are picking for the order.</p>
                <p>Vimal could pick for Order 1 (Product 1,2 & 3), Karthik would pick for Order 2 (Product 1 & 2), Priya would pick Order 3 (Product 3).</p>
                <h1 style="font-family: monospace;">Which is the right picking stratgey?</h1>
                <p>Scenarios where multiple orders have same products prefers Batch picking.</p>
                <p>For instance, consider Flipkart. 1000s of customers order everyday and tmany could oder same product. It is better to pcik total quantity of the product instead of picking at order level.</p>
                <br>
                <p>If products across orders are not the same or is number of customers served are limited, it would be ideal to pick at order level or 2-3 orders in one go (Multi order picking).</p>

            </div>
                <!-- <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post"> -->
                <!-- <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question"> -->
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
                <!-- </form>-->
	</div>
        <div class="row">
         <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question">
       </div>
    </div>
</div>
</div>
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
    window.location = "{{url()}}/Unit5Module3Timer1";
  });
</script>  
@stop
