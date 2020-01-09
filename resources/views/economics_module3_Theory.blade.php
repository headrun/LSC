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
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
    line-height: 1.3333;
    font-weight: bold;
    /*margin-left: -40px;*/

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
}

#submit:hover {
 cursor: pointer;
 /*background-color: #E6772D;*/
 background-color: #7f60c6;
 color: white;
}
p{
font-family: 'Lora', serif;
color: #333333;
font-size: 19px;
}
</style>

</head>

    <body style="background-color: #f1f1f1;">
    <div class="container">
     <h1 style="text-align: center;font-family: monospace;">THEORY</h1>
          <div class="card">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-sm-12" style="font-size:22px;color: #7d929d;">
                <h1 style="font-family: monospace;">Inventory is a complete list of items such as property, goods in stock, or the contents of a building.</h1>
                <p><b>Example 1: Inventory calculation</b></p>
                <p><b>Once Ron and friends were back to school from the Scouting camp, they decided to conduct an ice-cream party for all the 90 students and 10 teachers who participated in the camp.  They reserved 100 icecreams from a nearby shop, but decided to take icecreams in two batches from the shop. </b></p>
		        <p>In the first batch, Ron took 60 icecreams .</p>  
                <p>"Total inventory = 100<br>Opening inventory = 60"</p><br>
                <p><b>If 50 students ate the icecreams from the first batch, how many icecreams are left with Ron?</b></p>
                <p>No. of icecreams left with Ron = 60 - 50 = 10 <br> Here, consumed icecreams are called the "dispatched" goods </p>
                <p><b>"Dispatch" is term used for the items from the inventory which are either consumed or sent out. Any new addition to the existing inventory is called "receipt".</b></p>
                <p><b>If Ron has taken the pending 40 icecreams also, receipt = 40</b></p>
                <p>Current count of icecreams = 10 + 40 = 50</p>
                <p><b>Closing inventory = Opening inventory - dispatch + receipt</b></p>
                <p>Closing inventory = 60 - 50 + 40 = 50</p>
                <p><b>If only 30 more students ate the icecream later, what is the closing inventory now?</b><p>
                <p>Current Opening inventory = Previous closing inventory = 50
                <br>Dispatch = 30
                <br>Receipt = 0
                <br>Closing inventory = 50 - 30 + 0 = 20</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <img src="{{url()}}/images/economics/inventory_concept.jpg" width="300px" height="300px" alt="Concept">
                <br>
                <br>
                <br>
                <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post" style="display:none;">
                <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question"> 
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
                </form>
            </div>
        </div>
    </div>
  </div></div>
    </body>

<script type="text/javascript">
  $(document).on('click', '#submit', function(){
    window.location = "{{url()}}/Economics/Module3/Timer";
  });
</script>  
@stop