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
                <p>PPE is the equipment or set of equipment’s an employee must use while he/she works to prevent any injury in the workplace due to uncertain events.</p>
                <p><b> The purpose of PPE is to reduce the worker’s exposure towards the occupational hazards in workplace such as plants, warehouse.</b></p>
                <h1 style="font-family: monospace;">Types of PPE</h1>
                <p><b>Head Protection PPE</b></p>
                <p>Hard Hat with face sheild</p>
                <p>Hard hat with ear muff</p>
                <p>Hard Hat</p>
                <p><b>Eye & Face Protection PPE</b></p>
                <p>General/ Laser Safet Goggles</p>
                <p>Chemical Splash Goggle</p>
                <p>Face Shield</p>
                <p><b>Hand and Arms Proetction PPR</b></p>
                <p>Gloves (Nitrile/ Chemical Resistance/ Insulated)</p>
                <p><b>Feet Protection PPE</b></p>
                <p>Protection against Impact, Compression injuries</p>
                <p>Protection against Spills and Splashes</p>
                <p>Protection against Electrical shocks</p>
                <p>Protection against Heat/ Cold</p>
                <p>Protection against Slipping</p>
                <p><b>Body Protection PPE</b></p>
                <p>Coats/ Apron/ Overalls/ Body suits</p>
                <p><b>Ear Protection PPE</b></p>
                <p>Ear Plugs/ muffs/ Canal Caps</p>
                <p><b>Respiratory Protection PPE</b></p>
                <p>Respirators/ Breathing apparatus/ Dust mask</p>
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
    window.location = "{{url()}}/Unit5Module3Timer2";
  });
</script>  
@stop
