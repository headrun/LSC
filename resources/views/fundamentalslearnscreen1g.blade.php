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
@media screen and (min-width: 1200px) {
  #image {
    height: 540px;
  }
}
@media screen and (min-width: 1600px) {
  #image {
    height: 780px;
  }
}
@media screen and (min-width: 1900px) {
  #image {
    width: 870px;
  }
}
.main-wrapper{
  padding-top: 0px;
  padding-left: 0px;
}
h2{
  font-family: comic Sans;
  color: #35395c;
  /*text-align: center;*/
}
h4{
  text-align: center;
  color: red;
  font-family: monospace;
  font-weight: bold;
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
  .footer{
   position: fixed;
   bottom: 0;
   width: 100%;
  }
  .sweep:hover:before{transform: scaleX(1);}
  #img2{
   height:278px;
  }
  ul {
    list-style: none;
    font-family: monospace;
    font-weight: bold;
  }

  ul li:before {
    content: '✓';
  }
  </style>
  </head>
  <body id="body" style="background-color: #dbe3e6;">
  <div class="container-fluid">

      <div class="row" style="background-color: white;">
        <h2><b>Planning Functions – Diamond Biscuit Story</b></h2>
      </div>  

      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
          <img id="img1" src="{{asset('assets/img/store2.jpg')}}" width="100%" height="100%">
         <h4 id="head1">Supermarket</h4>
         <ul>
          <li id="h1s1"> How much material to stock?</li>
          <li id="h1s2"> How much & when to procure from the company?</li>
        </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
        <img id="img2" src="{{asset('assets/img/store1.jpg')}}"  width="100%" height="100%">
        <h4 id="head2">Warehouse</h4>
        <ul>
          <li id="h2s1"> How much material to stock?</li>
          <li id="h2s2"> How much & when to procure from the manufacturer?</li>
          <li id="h2s3"> How to transport to store?</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-4">
        <img id="img3" src="{{asset('assets/img/production.jpg')}}"  width="100%" height="100%">
        <h4 id="head3">Manufacturing Factory</h4>
        <ul>
          <li id="h3s1"> How much biscuits (finished goods) material to stock?</li>
          <li id="h3s2"> How much raw material to stock?</li>
          <li id="h3s3"> How to plan production?</li>
          <li id="h3s4"> How much & when to procure from the raw material supplier?</li>
          <li id="h3s5"> How to transport to warehouse?</li>
        </ul>
      </div>

    </div>
     <div class="row footer">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div style="cursor: pointer;">
               <button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute; margin-top: 13px;bottom:10px;">Previous Page</button>
              <!-- <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> -->
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6" align="center">
            <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div style="cursor: pointer;">
              <!-- <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right"> -->
            </div>
          </div>
        </div>



    </div>
    </body>
    </html>

<script type="text/javascript">
  $(document).on('click', '#back', function(){
    window.location = "{{url()}}/FundamentalLearnScreen1f";
  });
$(document).on('click', '#gotohome', function(){
  window.location = "{{url()}}/FundamentalLearnPage";
});

$(document).ready(function() {
  $("#img1").hide();
  $("#head1").hide();
  $("#h1s1").hide();
  $("#h1s2").hide();

  $("#img2").hide();
  $("#head2").hide();
  $("#h2s1").hide();
  $("#h2s2").hide();
  $("#h2s3").hide();

  $("#img3").hide();
  $("#head3").hide();
  $("#h3s1").hide();
  $("#h3s2").hide();
 $("#h3s3").hide();
  $("#h3s4").hide();
  $("#h3s5").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $("#img1").show();
   }
   else if(next == 2){
   $("#head1").show();
   }
   else if(next == 3){
    $("#h1s1").show();
    }
    else if(next == 4){
    $("#h1s2").show();
    }
 else if(next == 5){
    $("#img2").show();
    }
    else if(next == 6){
    $("#head2").show();
    }
    else if(next == 7){
    $("#h2s1").show();
    }
    else if(next == 8){
    $("#h2s2").show();
    }
    else if(next == 9){
    $("#h2s3").show();
    }
    else if(next == 10){
    $("#img3").show();
    }
    else if(next == 11){
    $("#head3").show();
    $("#h3s1").show();
    }
    else if(next == 12){
      $("#h3s2").show();
    } 
    else if(next == 13){
    $("#h3s3").show();
     }
     else if(next == 14){
    $("#h3s4").show();
     } 
     else if(next == 15){
    $("#h3s5").show();
     } 
     else if(next == 16){
     window.location = "{{url()}}/FundamentalLearnScreen1h";
     }
     // document.getElementById("myBtn").click();
    }
  else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $("#img1").hide();
   }
   else if(next == 1){
   $("#head1").hide();
   }
   else if(next == 2){
    $("#h1s1").hide();
    }
    else if(next == 3){
    $("#h1s2").hide();
    }
    else if(next == 4){
    $("#img2").hide();
    }
    else if(next == 5){
    $("#head2").hide();
    }
    else if(next == 6){
    $("#h2s1").hide();
    }
    else if(next == 7){
    $("#h2s2").hide();
    }
    else if(next == 8){
    $("#h2s3").hide();
    }
    else if(next == 9){
    $("#img3").hide();
    }
    else if(next == 10){
    $("#head3").hide();
    $("#h3s1").hide();
    }
    else if(next == 11){
      $("#h3s2").hide();
    } 
    else if(next == 12){
    $("#h3s3").hide();
     }
     else if(next == 13){
    $("#h3s4").hide();
     } 
     else if(next == 14){
    $("#h3s5").hide();
     } 
     else if(next == -1){
     window.location = "{{url()}}/FundamentalLearnScreen1f";
     }
     // document.getElementById("myBtn").click();
    }
    });
  </script>
  @stop
