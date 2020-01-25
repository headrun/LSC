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
/*.row{
  margin:0px;
}
*/
.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
h2{
  font-family: comic Sans;
  color: white;
  padding: 10px;
  padding-left: 30px;
  margin-left: 20px;
  margin-right: 20px;
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
ul{
  margin-top: -10px;
  margin-left: 60px;
  list-style-type: none;
}
li{
  font-size: 22px;
}
body {
  background-color: #052452;
  color: white;
}
.footer{
  position: fixed;
bottom: 0;
  width: 100%;
}
</style>
</head>
<body id="body">
  <div class="container-fluid">
    <div class="row">
        <div>
        <h1 id="heading" class="w3-animate-left" style="text-align: center;font-size: 70px;">Inventory</h1>
        <h2 id = "start" class="w3-animate-left" style="color: red;text-align: center;font-size: 40px;margin-top:30px;">Lets learn it in more detail !!</h2>
        </div>
          <h2 id="h2" class="w3-animate-left" style="font-size: 30px;">Inventory or Stock is the goods and materials that any entity holds for purpose of sales or consumption</h2>
          <!-- <h2 id="line" class="w3-animate-left" style="font-size: 30px;"> Simply put, Logistics helps meet demand by</h2> -->
          <!-- <span style='font-size:20px;color: white;'>&#10148;</span><p>Planning</p>
          <p><span style='font-size:20px;color: white;'>&#10148;</span>Movement</p>
          <p><span style='font-size:20px;color: white;'>&#10148;</span>Handling</p> -->
        <ul>
          <li id="plan" class="w3-animate-left" style="font-size: 30px;"><span style='font-size:30px;color: white;'>&#10148;</span>Businesses hold stock to meet customer demand</li>
          <li id="move" class="w3-animate-left" style="font-size: 30px;"><span style='font-size:30px;color: white;'>&#10148;</span>Household or certain production units may hold stock for consumption</li>
          <!-- <li id="hand" class="w3-animate-left" style="font-size: 30px;"><span style='font-size:30px;color: white;'>&#10148;</span>Handling</li> -->
        </ul>
        <h2 id="h22" class="w3-animate-left" style="margin-top: -15px;font-size: 30px;">Either way Inventory is mandatory for smooth operations in most environemntal situations</h2>
    </div>
    <br><br><br><br><br><br>
    <div class="row footer">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div style="cursor: pointer;">
          <!-- <button class="btn" id = "back" style="background-color: #9f59b0;color:white;left:10%;bottom:10px;position: absolute;">Previous Page</button> -->
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
  document.getElementById("heading").style.marginTop = "16%";
  $("#start").hide();
  $("#h2").hide();
  $("#line").hide();
  $("#plan").hide();
  $("#move").hide();
  $("#hand").hide();
  $("#h22").hide();
});
var count = 0;
var next =0
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   document.getElementById("heading").style.marginTop = "0%";
   $("#h2").show();
   }
   else if(next == 2){
  $("#plan").show();
   }
   else if(next == 3){
   $("#move").show();
   }
   else if(next == 4){
   $("#h22").show();
   }
   else if(next == 5){
   $("#h2").hide();
   }
   else if(next == 6){   
    $("#plan").hide();
   }
   else if(next == 7){
   $("#move").hide();
   } 
   else if(next == 8){
   $("#h22").hide();
   } 
   else if(next == 9){
   $("#start").show();
   }
   else if(next == 10){
   window.location = "{{url()}}/InventoryModule1LearnScreen2";
   }
  }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   document.getElementById("heading").style.marginTop = "0%";
   $("#h2").hide();
   }
   else if(next == 1){
   $("#plan").hide();
   }
   else if(next == 2){
   $("#move").hide();
   }
   else if(next == 3){
   $("#hand").hide();
   }
   else if(next == 4){
   $("#h22").hide();
   }
   else if(next == 5){
 $("#start").hide();
   } 
   else if(next == -1){
   window.location = "{{url()}}/Unit4LearnPage";
   }
  }
});
// $(document).on('click', '#next', function(){
//   next = count++;
//   // alert(final);
//    if(next == 0){
//    $("#h2").show();
//    }
//    if(next == 1){
//    $("#line").show();
//    }
//    if(next == 2){
//    $("#plan").show();
//    }
//    if(next == 3){
//    $("#move").show();
//    }
//    if(next == 4){
//    $("#hand").show();
//    }
//    if(next == 5){
//    $("#h22").show();
//    }
//    if(next == 6){
//    $("#h2").hide();
// }
//    if(next == 7){
//    $("#line").hide();
//    }
//    if(next == 8){
//    $("#plan").hide();
//    }
//    if(next == 9){
//    $("#move").hide();
//    }
//    if(next == 10){
//    $("#hand").hide();
//    }
//    if(next == 11){
//    $("#h22").hide();
//    } 
//    if(next == 12){
//    $("#start").show();
//    } 
// if(next == 13){
//    window.location = "{{url()}}/FundamentalLearnScreen1b";
//    }
// });

/*$(document).on('click', '#next', function(){
 $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/FundamentalLearnScreen1b";
          }
    });
});*/

$(document).on('click', '#back', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Unit4LearnPage";
          }
    });
});
$(document).on('click', '#gotohome', function(){
    $.ajax({
          url : "{{url()}}/quick/goToSample",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
console.log('success');
            window.location = "{{url()}}/FundamentalLearnPage";
          }
    });
});
</script>
@stop

