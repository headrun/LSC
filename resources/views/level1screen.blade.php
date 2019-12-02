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
 <style>
body{
        background-repeat: no-repeat;
        background-size: cover;
    }
h2 {
  background-color: #fffafacc;
  opacity: 0.8
}
#Next {
  position: absolute;
  right: 1%;
  bottom: 1%;
}
</style>
</head>
<body>
<div class="container">
    <button style="display: none;" onclick="getLevels()">test</button>
</div>    
</body>
</html>

<script>

   $(document).ready(function(){
       var index=0;
       getLevels(index);
   });

       var index=0;
       var indexId;
       var AllLevels = {
          data: [
          {
              source:'https://i.pinimg.com/736x/69/b4/d7/69b4d7746829eb8a006ef9234821be2e--art-therapy-sherlock.jpg',
              content: 'Sherlock Holmes has to hunt down a murderer in London and he has limited time.',
          },
          { 
              source:'http://cdn.hasshe.com/img/s/iXM-M6ea463EjYKARA9PoAAAAA.jpg',
              content: ' The accused is sitting in a hut 120 Km away.',
          },
          {
              source:'http://i0.wp.com/sketchpencilart.com/wp-content/uploads/2018/11/pencil-drawing-abstract-clock-and-broken-clock-drawing-pencil-drawings-in.jpg',
              content: 'Sherlock has 5 hours to reach the location before the murderer escapes. Can you help him reach on time? You have 500 points and for every minute you consume, you lose 1 point. Remember, you need more points for level 2. You lose when you run out of points.',
          }]
  };

  
    function getLevels(index) {
      document.body.style.backgroundImage = "url('"+AllLevels.data[index].source+"')";
   var html = '';
   html += '<div class="row"><div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"></div><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><h2 style="font-family:arial;color:#4869ce;">'+ AllLevels.data[index].content +'</h2></div></div><br>'+
    '<img src="https://image.flaticon.com/icons/svg/137/137606.svg" width="74" height="110" align="right" onclick="nextFun()" id="Next"> ';
   $('.container').html(html);
   indexId=index;
}

  function nextFun() {
      indexId++;
      if (indexId == 3) {
      window.location.assign("/level1question")
     }
      getLevels(indexId);
      }
  </script>
  @stop

