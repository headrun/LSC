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
#img1,#img2,#img3,#img4,#img5{
  padding:16px;
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

ul {
  list-style: none;
}

ul li:before {
  content: '✓';
}
li{
  font-size: 25px;
  /*line-height: 2.0;*/
}
button{
  background-color: grey;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 27px;
  padding-right: 27px;
  color: white;
  font-size: 20px;
  border:none;
  letter-spacing: 0.6px;
  width: 70%;
  }
  #box1{
    margin-top: 60px;
  }
  #box2,#box3,#box4{
    margin-top: 24px;
  }
  .footer{
   position: fixed;
   bottom: 0;
   width: 100%;
  }
  </style>
  </head>
  <body id="body" style="background-color: #dbe3e6;">
  <div class="container-fluid">
      <div class="row" style="background-color: white;">
        <h2 id="heading"><b>Planning Functions – Diamond Biscuit Story</b></h2>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 10px;">
         <ul>
          <li id="head1"> How much biscuits (finished goods) material to stock?</li><br>
          <li id="head11"> How much raw material to stock?</li>
        </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
          <img id="img1" src="{{asset('assets/img/b1.png')}}">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
          <button id="box1">Inventory Planning</button>
        </div>
      </div>

      <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 27px;">
            <ul>
             <li id="head2"> How to plan production</li>
           </ul>
           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-2">
             <img id="img2" src="{{asset('assets/img/b2.png')}}">
           </div>
           <div class="col-lg-4 col-md-4 col-sm-4 col-4">
             <button id="box2">Production Planning</button>
           </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
         <ul>
          <li id="head3" style="margin-top: 27px;"> How much & when to procure from supplier?</li>
        </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
          <img id="img3" src="{{asset('assets/img/b2.png')}}">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
          <button id="box3">Procurment Planning</button>
        </div>
      </div>

    <div class="row" >
      <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 27px;">
       <ul>
        <li id="head4"> How to plan distribution to all customers</li>
      </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-2">
        <img id="img4" src="{{asset('assets/img/b2.png')}}">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-4">
        <button id="box4">Distribution Planning</button>
      </div>
    </div>
    <div class="row" style="margin-bottom:60px;">
       <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 27px;">
        <ul>
         <li id="head5"> How to plan transportation to customers</li>
       </ul>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-2 col-2">
         <img id="img5" src="{{asset('assets/img/b2.png')}}">
       </div>
       <div class="col-lg-4 col-md-4 col-sm-4 col-4">
         <button id="box5">Transportation Planning</button>
       </div>
     </div>

     <div class="row footer">
       <div class="col-lg-3 col-md-3 col-sm-3">
	 <div style="cursor: pointer;">
<button class="btn" id="back" style="background-color: #9f59b0;color:white;left:10%;position: absolute;margin-top: 13px;width:118px;bottom:10px;">Previous Page</button>
        <!--   <img id="back" src="https://img.icons8.com/color/48/000000/left-squared.png" align="left"> --> 
         </div>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6" align="center">
         <div style="margin-top:-30px;font-size: 17px;">Press down arrow for next steps</div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
         <div style="cursor: pointer;">
         <!--  <img id="next" src="https://img.icons8.com/color/48/000000/right-squared.png" align="right">-->
         </div>
       </div>
     </div>
     </div> 
     </body>
     </html>
<script type="text/javascript">

       // $(document).on('click', '#next', function(){
       //     $.ajax({
       //           url : "{{url()}}/quick/goToSample",
       //           type : "POST",
       //           // data : { 'getuser' : user,'getpassword' : password },
       //           dataType : 'json',
       //           success: function(response) {
       //             console.log('success');
       //             window.location = "{{url()}}/FundamentalLearnScreen1";
       //           }
       //     });
       // });

//        $(document).on('click', '#back', function(){
//            $.ajax({
//                  url : "{{url()}}/quick/goToSample",
//                  type : "POST",
//                  // data : { 'getuser' : user,'getpassword' : password },
// dataType : 'json',
//                  success: function(response) {
//                    console.log('success');
//                    window.location = "{{url()}}/FundamentalLearnScreen1";
//                  }
//            });
//        });

       $(document).on('click', '#back', function(){
           $.ajax({
                 url : "{{url()}}/quick/goToSample",
                 type : "POST",
                 // data : { 'getuser' : user,'getpassword' : password },
                 dataType : 'json',
                 success: function(response) {
                   console.log('success');
                   window.location = "{{url()}}/FundamentalLearnScreen1g";
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
$(document).ready(function() {
  $("#head1").hide();
  $("#head11").hide();
  $("#img1").hide();
  $("#box1").hide();
  $("#head2").hide();
  $("#img2").hide();
  $("#box2").hide();
  $("#head3").hide();
  $("#img3").hide();
  $("#box3").hide();
  $("#head4").hide();
  $("#img4").hide();
  $("#box4").hide();
  $("#head5").hide();
  $("#img5").hide();
  $("#box5").hide();
});
var count = 0;
var next = 0;
var input = document.getElementById("body");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 40) {
   event.preventDefault();
   next = next+1;
   if(next == 1){
   $("#head1").show();
   }
   else if(next == 2){
   $("#head11").show();
   }
   else if(next == 3){
    $("#img1").show();
    }
    else if(next == 4){
    $("#box1").show();
    }
    else if(next == 5){
    $("#head2").show();
    }
    else if(next == 6){
    $("#img2").show();
    }
    else if(next == 7){
    $("#box2").show();
    }
    else if(next == 8){
    $("#head3").show();
    }
    else if(next == 9){
    $("#img3").show();
    }
    else if(next == 10){
    $("#box3").show();
    }
    else if(next == 11){
    $("#head4").show();
    }
    else if(next == 12){
     $("#img4").show();
     } 
     else if(next == 13){
     $("#box4").show();
     }
     else if(next == 14){
     $("#head5").show();
     }
     else if(next == 15){
     $("#img5").show();
     } 
     else if(next == 16){
     $("#box5").show();
     } 
     else if(next == 17){
     window.location = "{{url()}}/FundamentalLearnScreen1i";
     }
     // document.getElementById("myBtn").click();
    }
   else if (event.keyCode === 38) {
   event.preventDefault();
   next = next-1;
   if(next == 0){
   $("#head1").hide();
   }
   else if(next == 1){
   $("#head11").hide();
   }
   else if(next == 2){
    $("#img1").hide();
    }
    else if(next == 3){
    $("#box1").hide();
    }
    else if(next == 4){
    $("#head2").hide();
    }
    else if(next == 5){
    $("#img2").hide();
    }
    else if(next == 6){
    $("#box2").hide();
    }
    else if(next == 7){
    $("#head3").hide();
    }
    else if(next == 8){
    $("#img3").hide();
    }
    else if(next == 9){
    $("#box3").hide();
    }
    else if(next == 10){
    $("#head4").hide();
    }
    else if(next == 11){
     $("#img4").hide();
     } 
     else if(next == 12){
     $("#box4").hide();
     }
     else if(next == 13){
     $("#head5").hide();
     }
     else if(next == 14){
     $("#img5").hide();
     } 
     else if(next == 15){
     $("#box5").hide();
     } 
     else if(next == -1){
     window.location = "{{url()}}/FundamentalLearnScreen1g";
     }
     // document.getElementById("myBtn").click();
    }
    });
</script>
@stop

    

