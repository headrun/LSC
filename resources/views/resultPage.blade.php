<!DOCTYPE html>
<html lang="en">
<head>
 <title>LSC</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:300&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<style type="text/css">
 body{
   background: #566068;
       opacity: 0.95;
 }
 .card{
   background-color: white;
   border: 6px solid #00000066;
     border-radius: 8px;
     /*padding: 6px;*/
     padding-left: 2%;
       padding-right: 2%;
       padding-top: 2%;
       padding-bottom: 2%;
 }
 #qno {
   background: #eaedf0;
     padding: 10px;
     border-radius: 4px;
     text-align: center;
     width: 100px;
     height: 100px;
     font-family: 'Varela Round', "ProximaRegular", Helvetica, Arial, sans-serif;
     font-weight: 600;
     display: block;
     font-size: 54px;
     color: #4dbfbf;
 }
 p{
  font-family: 'Encode Sans Semi Expanded', sans-serif;
 }
 .ml10 {
  position: relative;
  font-weight: 300;
  font-size: 20px;
}

.ml10 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml10 .letter {
  display: inline-block;
  line-height: 1em;
  transform-origin: 0 0;
}
textarea { 
  border: none;
  resize: none; 
  height: 297px;
  width: 102%;
  font-size: 15px;
  box-sizing: border-box;
}  
</style>
</head>
<body>
 <div class="container">
   <br>
   <br>
   <br>
 <div class="card">
       <span style="font-size: 28px;line-height: 28px;color: #34495e">RESULT</span>
       <hr>
       <div style="background: #eaedf0;padding: 10px;border-radius:4px;">
         <?php if($result!==0){?>
             <p align="center" style="color: #4dbfbf; font-size: 20px;">Your Score : {{$result}}/{{count($actual_ans)}}</p>
             <?php }else{ ?>
             <p align="center" style="color: #4dbfbf; font-size: 20px;">Your Score : 0/{{count($actual_ans)}}</p>
             <?php } ?>
           </div>
           <hr>
     <!-- </div> -->
     <div style="padding: 25px;">
   <?php if($actual_ans!==0) $i=0; {?>            
     @foreach($actual_ans as $data)
     <p align="" style="color: #000; font-size: 20px;"><span style="color:#000;">Q{{$data->question}} : {{$data->qsn_text}}</span></p>
     <p style="color: #1866DB; font-size: 16px;">A . {{$data->option1_text}}</p>
     <p style="color: #1866DB; font-size: 16px;">B . {{$data->option2_text}}</p>
     <p style="color: #1866DB; font-size: 16px;">C . {{$data->option3_text}}</p>
     <p style="color: #1866DB; font-size: 16px;">D . {{$data->option4_text}}</p>
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8">
         <span class="text-wrapper ml10">
          <p class="letters" style="margin-bottom: 0px;color:#00ec04;">Correct Answer : {{$data->actual_answer}}</p>
         </span>
         <span class="text-wrapper ml10">
          <p class="letters" style="color: #009270;">Your Answer : {{$user_ans[$i]->user_answer}}</p>
         </span>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-4" style="padding:10px;" align="right">
         <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;" data-toggle="modal" data-target="#{{$data->question}}">Show Solution</button>
       </div>
     </div>
     <!-- Modal1 -->
    <div class="modal fade" id="{{$data->question}}" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="height: 450px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <center><h4 class="modal-title">Solution</h4></center>
          </div>
	  <div class="modal-body">
            <?php if($data->image_url != NULL){?>
	      <img src="{{$data->image_url}}" alt="image" width="300" height="300">
	      <?php }else{ ?>
              <textarea readonly>{{$data->solution}}</textarea>
            <?php }?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
     <br>
     <br>
<div>
<?php  $i++ ?>
    @endforeach
     <?php } ?>
      <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;" onclick="stopQuiz()" >End</button>
   </div>


</body>
</html>
<script>
// Wrap every letter in a span
$('.ml10 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml10 .letter',
    rotateY: [-90, 0],
    duration: 1300,
    delay: function(el, i) {
      return 45 * i;
    }
  }).add({
    targets: '.ml10',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  function stopQuiz() {
    $.ajax({
          type: "GET",
            url: "{{URL::to('/gotToNextText')}}",
          data: {
             '_token':$("input[name='_token']").val()
            },
          dataType: 'json',
         success: function(response){
            if(response.status === "success"){
              window.location = "{{URL::to('/SidebarTestPage')}}";
              $('#message').html("<p>Invoice Added successfully</P>");
            } else if (response.status === "failed"){
              $('#message').html("<p>Something Went Wrong. Please Try Again.</P>");
            }
          }
        });
 }
</script>
