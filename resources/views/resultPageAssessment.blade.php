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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
  width: 542px;
  font-size: 15px;
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
                <?php if($test_retake_value<=30){?>
                <?php if($result!==0 && $result>=12){?>
                    <p align="center" style="color: #4dbfbf; font-size: 20px;">You have Successfully completed the Assessment. Please click on End button to go to home page.</p>
                    <br>
                    <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;margin-top:40px;" onclick="stopQuiz()" >End</button>
                    <?php }else{ ?>
                    <p align="center" id="oldRetakeText" style="color: #4dbfbf; font-size: 20px;">Please Retake The Test.</p>
                    <br>
                    <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;margin-top:40px;" onclick="retakeAssessment()">Retake</button>
                    <?php } ?>
                    <?php }else{ ?>
                       <p align="center" style="color: #4dbfbf; font-size: 20px;">You have Successfully completed the Assessment. Please click on End button to go to home page.</p>
                    <br>
                    <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;margin-top:40px;" onclick="stopQuiz()" >End</button>
                     <?php } ?>
                  </div>

           <hr>
     <!-- </div> -->
     <!-- <div style="padding: 25px;">
      <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;" onclick="stopQuiz()" >End</button>
   </div> -->
 </div>
</div>


</body>
</html>
<script>


  // $('#solution').append();
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
              window.location = "{{URL::to('/SidebarAssessmentpage')}}";
              $('#message').html("<p>Invoice Added successfully</P>");
            } else if (response.status === "failed"){
              $('#message').html("<p>Something Went Wrong. Please Try Again.</P>");
            }
          }
        });
 }
 
 function retakeAssessment(){
  var currurl = window.location.search;
  $.ajax({
          type: "GET",
            url: "{{URL::to('/retakeAssessment')}}",
          data: {
            'path':currurl,
             '_token':$("input[name='_token']").val()
            },
          dataType: 'json',
         success: function(response){
            if(response.status === "success"){
              
              window.location = "{{URL::to('/Assessment/Module1_Test')}}";
            } else if(response.status === "unit2"){
              window.location = "{{URL::to('/assessment_Unit2')}}";
            }
            else if (response.status === "failed"){
             
              window.location = "{{URL::to('/SidebarAssessmentpage')}}";
            }
          }
        });
 }


 function token() {
              // $.ajax({
              //      headers: {
              //             "Access-Control-Allow-Credentials": true,
              //             "Access-Control-Allow-Origin":"http://localhost:9999",
              //             "Access-Control-Allow-Headers": "Origin, X-Requested-With, Content-Type, Accept",
              //             'Content-Type': 'application/x-www-form-urlencoded'
              //         },
              //      url: "test.php",
              //      data: {
              //          "username":"superuser",
              //          "password":"superpass"
              //      },
              //      processData:false,
              //      cache : false,
              //      contentType: 'application/json; charset=utf-8',
              //      dataType: 'json',  
              //      crossDomain: true,
              //      type: 'POST',
              //      success: function(data) {
              //          alert(data);
              //          console.log(data);
              //      },
              //      error: function(){
              //          console.log("Could not connect!");
              //          alert("could not connect");
              //      }
              //  });

 $.ajax({
          type: "GET",
            url: "{{URL::to('/testt')}}",
          data: {
             '_token':$("input[name='_token']").val()
            },
          dataType: 'json',
         success: function(response){
            
          }
        });
 }
</script>


