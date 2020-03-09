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
                <!-- <h1 style="font-family: monospace;">Speed</h1> -->
                <p>If each locations follows a sequence of first expiry (material approaching expiry date first) being the first to be sent out to next level, this would ensure all material reaches consumers before expiry.Hence last expiry first out ins followed (LEFO).In cases where expiry date is not known to a facility, FIFO (First In First Out) will be followed. This means that the material received first will be sent out first.</p>
                <br>
                <p>For example, a pharmaceutical company receives 2 batches of Paracetamol</p>
                <p>Receipt Date: 1st April Batch 1: Expiry: In 30 Days</p>
                <p>Receipt Date: 2nd April Batch 2: Expiry: 60 days</p>
                <p>Receipt Date: 3rd April Batch 3: Expiry: 45 days</p>
                <br>
                <p>If FEFO is followed, order of sending material would be Batch 1, Batch 3, Batch 2</p>
                <p>If FIFO is followed, order would be Batch 1, Batch 2, Batch 3</p>
                <p>If LIFO is followed, order would be Batch 3, Batch 2, Batch 1</p>
                <p>If LEFO is followed, order would be Batch 2, Batch 3, Batch 1</p>
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
    window.location = "{{url()}}/Unit5Module1Timer4";
  });
</script>  
@stop
