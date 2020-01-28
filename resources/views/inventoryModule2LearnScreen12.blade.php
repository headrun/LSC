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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  padding: 28px;
}

tr:nth-child(odd){background-color: #f2f2f2}

th {
  /*background-color: #4CAF50;*/
  /*color: white;*/
}
</style>

</head>
<body id="body" style="">
<div class="container-fluid">
   <div class="row" style="background-color: white;">
     <!-- <h2 align="center"><b>In out of stock situation at home, you just have to go to nearby shop and buy more batter.<b> </h2> -->
   </div>
   <div class="row" style="padding: 20px;">
      <h2>Assume the retailer ordered 10 boxes of juice yesterday. She receives it after 1 day , that is, today. (Assume the following sales)</h2>
      <br>
    <br>
    
   <table>
  <tr>
    <th>Day</th>
    <th>Opening Stock</th>
    <th>Material Ordered</th>
    <th>Purchase Receipt</th>
    <th>Sales</th>
    <th>Closing Stock</th>
  </tr>
  <tr>
    <td>Yesterday</td>
    <td>12</td>
    <td>10</td>
    <td>0</td>
    <td>8</td>
    <td>12+0-8 = 4</td>
  </tr>
  <tr>
    <td>Today</td>
    <td>4</td>
    <td></td>
    <td>10</td>
    <td>3</td>
    <td>4+10-3 = 11</td>
  </tr>
</table>
     

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
   window.location = "{{url()}}/inventoryModule2LearnScreen13";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == -1){
   window.location = "{{url()}}/inventoryModule2LearnScreen11";
   }
  }
});
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});
// gets the center of a table cell relative to the document
function getCellCenter(table, row, column) {
  var tableRow = $(table).find('tr')[row];
  var tableCell = $(tableRow).find('td')[column];

  var offset = $(tableCell).offset();
  var width = $(tableCell).innerWidth();
  var height = $(tableCell).innerHeight();
  
  return {
    x: offset.left + width / 2,
    y: offset.top + height / 2
  }
}

// draws an arrow on the document from the start to the end offsets
function drawArrow(start, end) {

  // create a canvas to draw the arrow on
  var canvas = document.createElement('canvas');
  canvas.width = $('body').innerWidth();
  canvas.height = $('body').innerHeight();
  $(canvas).css('position', 'absolute');
  $(canvas).css('pointer-events', 'none');
  $(canvas).css('top', '0');
  $(canvas).css('left', '0');
  $(canvas).css('opacity', '0.85');
  $('body').append(canvas);
  
  // get the drawing context
  var ctx = canvas.getContext('2d');
  ctx.fillStyle = 'steelblue';
  ctx.strokeStyle = 'steelblue';
  
  // draw line from start to end
  ctx.beginPath();
  ctx.moveTo(start.x, start.y);
  ctx.lineTo(end.x, end.y);
  ctx.lineWidth = 2;
  ctx.stroke();
  
  // draw circle at beginning of line
  ctx.beginPath();  
  ctx.arc(start.x, start.y, 4, 0, Math.PI * 2, true);
  ctx.fill();

  // draw pointer at end of line (needs rotation)
  ctx.beginPath();  
  var angle = Math.atan2(end.y - start.y, end.x - start.x);
  ctx.translate(end.x, end.y);
  ctx.rotate(angle);
  ctx.moveTo(0, 0);
  ctx.lineTo(-10, -7);
  ctx.lineTo(-10, 7);
  ctx.lineTo(0, 0);
  ctx.fill();

  // reset canvas context
  ctx.setTransform(1, 0, 0, 1, 0, 0);  
  
  return canvas;
}

// finds the center of the start and end cells, and then calls drawArrow
function drawArrowOnTable(table, startRow, startColumn, endRow, endColumn) {
  drawArrow(
    getCellCenter($(table), startRow, startColumn),
    getCellCenter($(table), endRow, endColumn)
  );
}

// draw an arrow from (1, 0) to (2, 4)
drawArrowOnTable('table', 1, 2, 2, 3);

</script>
@stop

