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
        <div class="row">
            
            <div class="col-md-8 col-sm-12" style="font-size:22px;color: #7d929d;">
                <h1 style="font-family: monospace;">Industrial Pallet Rack Systems.</h1>
                <p>A pallet rack system is exactly what it sounds like: racking which accommodates pallet racks. This type of system is ideal for warehouses, grocery stores, and similar businesses.</p>
                <p>What kind of pallet rack system you need depends on a number of factors, including the amount of money you are willing to spend, available floor space, the height of ceilings, and size of pallets in use. Outlined below are the common types of racks and partitions that make up a pallet rack system.</p>
                <img src="{{asset('assets/img/M2CONCEPT2.jpg')}}" width="300px" height="300px" alt="Concept">
                <!-- <br> -->
                <!-- <br> -->
                <h1 style="font-family: monospace;">Bulk Racks</h1>
                <p>Warehouse storage bulk racks are an inexpensive solution to storing large quantities of products. They are especially ideal for storing dense and heavy products such as reams of paper, tins, and cans of food, etc.</p>
                <p>Select warehouse bulk racks based upon your specific need. For example, if you are looking to store lumber or long pipes, then consider using vertical bar racks or bar storage racks. Likewise, for storage of tires and other auto parts, purchase specific automotive racks.</p>
                <br>
                <br>
                <h1 style="font-family: monospace;">Wire Partitions</h1>
                <p>Wire mesh partitions are used primarily for securing crucial tools, but can also be used to create storage rooms to secure merchandise the requires special protection. These partitions are made with a strong diamond pattern of woven wire that contributes to its clean and classic look.</p>
                <p>These structurally strong partitions are made of heavy-gauge steel. Along with providing proper security for your items, wire mesh partitions can be expanded, reduced, or modified in shape as storage space needs change.</p>
                <br>
                <br>
                <h1 style="font-family: monospace;">Cantilever Racking</h1>
                <p>Cantilever racks feature a single beam with arms extending out. These racks are used for storage of bulky, over-sized loads such as timber, plasterboard, steel trusses, & piping. There are four key components to the rack: the upright, base, arms, and braces.</p>
                <p>Industrial cantilever shelving racks are easy to install, making them ideal for storing nearly any type of load from pallets to timber. The racks can also store product vertically up to 6 meters high, and are especially great for long loads, leading to reduced handling times and improvements in productivity. Additional arms can also be added to allow for storage of all shapes and sizes.</p>
                <br>
                <br>
                <h1 style="font-family: monospace;">Carton Flow Racks</h1>
                <p>Global Industrial Carton flow racks feature a slight slope so that cartons can "flow" or can be rolled to the front. This type of industrial shelf system is ideal for first in, first our products, and it is perfect for fast-moving items or a high-traffic warehouse. We carry a large variety of Carton Flow Racks.</p>
                <br>
                <br>
                <h1 style="font-family: monospace;">Mezzanines</h1>
                <p>Mezzanines are essentially a platform built on your warehouse floor space, which provides another level of storage. Upfront costs may be high, but they pay off for years, providing you with extra storage space without having to pay extra rent. In addition, if you move your storage facility, they can be dismantled and moved to your new location.</p>
                <p>They are 1/5th of the cost of new construction, contributing to further storage savings. In addition, there is great versatility in how you can use mezzanines. You will see them in various locations including distribution centers, malls, manufacturing plants, subway platforms, and even opera theaters.</p>
                <br>
                <br>
            </div>
            <div class="col-md-4 col-sm-12">
	              <img src="{{asset('assets/img/M2CONCEPT1.jpg')}}" width="300px" height="300px" alt="Concept">
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <!-- <img src="{{asset('assets/img/M2CONCEPT2.jpg')}}" width="300px" height="300px" alt="Concept">   -->
                <img src="{{asset('assets/img/M2CONCEPT3.jpg')}}" width="300px" height="300px" alt="
                Concept">
                <br><br>
                <br><br>
                <img src="{{asset('assets/img/M2CONCEPT4.jpg')}}" width="300px" height="300px" alt="Concept">
                <br><br>
                <br><br>
                <img src="{{asset('assets/img/M2CONCEPT5.jpg')}}" width="300px" height="300px" alt="Concept">
                <br><br>
                <br><br>

                <img src="{{asset('assets/img/M2CONCEPT6.jpg')}}" width="300px" height="300px" alt="Concept">
                <br>
                <br>
             <!--   <form action="file:///var/www/html/lcs/questions/stockone/blog.html" method="post"> -->
             <!--   <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question"> -->
                <!-- <button type="button" class="btn btn-default">Try Timer Questions</button> -->
                <!-- <input type="button" value="Click me">  -->
             <!--   </form> -->
            </div>
	</div>
        <div class="row">
         <input type="submit" style="font-size: 15px;" id="submit" value="Try Timer Question">
       </div>
    </div>
</div></div>
    </body>

<script type="text/javascript">
  $(document).on('click', '#submit', function(){
    window.location = "{{url()}}/Unit5Module2Timer1";
  });
</script>
@stop
