@extends('layout.sidebar1')
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
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
 .row{
    margin-left:0px;
  }
.footer{
 position: fixed;
 bottom: 0;
 width: 100%;
}
.main-wrapper{
 padding-top: 0px;
 padding-left: 0px;
}
h1,h2{
 font-family: comic Sans;
 color: #35395c;
 /text-align: center;/
}
h3{
 text-align: center;
 height: 18em;
}
.sweep{
 display:inline-block;
 position:relative;
 margin:0.4em;  padding:1em;
 cursor:pointer;
background:#35395c;
 color:white;
 z-index:0;
}
.sweep:before {
 content: "";
 position: absolute;
 z-index:-1;
 top: 0;  left: 0;  right: 0;  bottom: 0;
 background: #9c27b0;
 transform: scaleX(0);
 transform-origin: 0 50%;
 transition: transform .5s ease-out;
}
.sweep:hover:before{transform: scaleX(1);}
</style>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 2px solid #43d8b6;
}

th, td {
  border: 2px solid #43d8b6;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  /*color: white;*/
}
</style>

</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <!-- <h2 align="center"><b>Types of Inventory<b> </h2> -->
   </div>
   <div class="row">
    <h2>Let us consider another example. A company makes cup cakes in their manufacturing unit using flour. Assuming initial inventories as give, let us look at their opening inventory</h2>
  </div>
  <h2>(a) It takes 3 days to make cup cakes from unprocessed flour</h2>
  <h2>(b) 50% of flour are picked for production on day 1 and remaining on day 2</h2>
  <h2>(c) 1 kg of flour can make 20 cup cakes</h2>

<br><br>
<table>
       
  <tr>
    <th>Month</th>
    <th>Raw Material</th>
    <th>WIP</th>
    <th>Finished Goods</th>
  </tr>
  <tr>
    <td>Day 0</td>
    <td>60 Kg</td>
    <td>0</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Day 1</td>
    <td>30 kg</td>
    <td>30 Kg * 20 cup cakes/kg = 600 cupcakes</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Day 2</td>
    <td>0 kg</td>
    <td>30*20 + 30*20 = 1200 cupcakes</td>
    <td>0</td>
</tr>
<tr>
    <td>Day 3</td>
    <td>0 kg</td>
    <td>1200 cupcakes</td>
    <td>1000 gears</td>
</tr>
<tr>
    <td>Day 4</td>
    <td>0 kg</td>
    <td>600 cupcakes</td>
    <td>600 cupcakes</td>
</tr>
<tr>
    <td>Day 5</td>
    <td>0 kg</td>
    <td>0</td>
    <td>1200 cupcakes</td>
</tr>
</table>

  <!-- <h2 align="center">Firm buys from cast iron from suppliers, manufactures in production unit and sends to warehouse</h2> -->
  <!-- <h2 align="center">Let us calculate inventory of these players for 2 days</h2> -->

   </div>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top: 13px;bottom:10px;">Previous Page</button> -->
          <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6" align="center">
 <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" style="background-color: #9f59b0;color:white;right: 1%;position: absolute;">Next Page</button> -->
          <!-- <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
        </div>
      </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  $(".cent").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   window.location = "{{url()}}/Unit4LearnPage";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
    window.location = "{{url()}}/inventoryModule3LearnScreen6";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
</script>
@stop

