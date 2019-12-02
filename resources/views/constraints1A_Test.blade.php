@extends('layout.sidebar1')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LSC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
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
    .footer {
        position: fixed;
        bottom: 0;
        z-index: 1000;
        background: #3f464c;
        width: 100%;
        padding: 10px 0;
    }
</style>
<body>
    <div class="container">
        <div class="card">
                <span style="font-size: 28px;line-height: 28px;color: #7d929d;">Constraints</span>
                <hr>
                <div style="background: #eaedf0;padding: 10px;border-radius:4px;">
                  <p style="color: #3f464c;font-family: 'Varela Round','ProximaRegular', Helvetica, Arial, sans-serif;">Number of Questions:<span style="color: #4dbfbf;"> 5</span></p>
                  <p style="color: #3f464c;font-family: 'Varela Round','ProximaRegular', Helvetica, Arial, sans-serif;">Time Limit:<span style="color: #4dbfbf;"> 20 m 0 s</span></p>
                </div>
                <hr>
                <button type="button" class="btn btn-default" style="background-color: #4dbfbf;color: white;float: left;" onclick="myFunction()">Start Assessment</button>
            <br>
            <br>
        </div>
    </div>
    <div class="footer">
        <div class="container" style="text-align: center;">
	    <button type="button" class="btn btn-default" style="color: white;float: left;background-color: #bdc3c7;" onclick="previousFun()" id="Previous">Previous</button>
	    <body id="timer">
				<span style="color: white;">Time Left :: </span>
				<span id="minutes" style="color: white;"></span>
				<span style="color: white;">Min:</span>
            		        <span id="seconds" style="color: white;"></span>
                                <span style="color: white;">Secs</span>
  	    </body>
            <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;" onclick="nextFun()" id="Next">Next</button>
            <button type="button" class="btn btn-default" style="color: white;float: right;background-color: #4dbfbf;" onclick="stop()" id="FinishQuiz">Finish</button>
        </div>
    </div>
</body>
</html>
<script>
    //set minutes
    var mins = 20;

    //calculate the seconds
    var secs = mins * 60;

    //countdown function is evoked when page is loaded
    function countdown() {
        setTimeout('Decrement()', 60);
    }

    //Decrement function decrement the value.
    function Decrement() {
        if (document.getElementById) {
            minutes = document.getElementById("minutes");
            seconds = document.getElementById("seconds");

            //if less than a minute remaining
            //Display only seconds value.
            if (seconds < 59) {
                seconds.value = secs;
            }

            //Display both minutes and seconds
            //getminutes and getseconds is used to
            //get minutes and seconds
            else {
                // minutes.value = getminutes();
                // seconds.value = getseconds();
             document.getElementById('minutes').innerHTML = getminutes();
				     document.getElementById('seconds').innerHTML = getseconds();
            }
            //when less than a minute remaining
            //colour of the minutes and seconds
            //changes to red
            if (mins < 1) {
                minutes.style.color = "red";
                seconds.style.color = "red";
            }
            //if seconds becomes zero,
            //then page alert time up
            if (mins < 0) {
                alert('time up');
                minutes.value = 0;
                seconds.value = 0;
            }
            //if seconds > 0 then seconds is decremented
            else {
                secs--;
                setTimeout('Decrement()', 1000);
            }
        }
    }

    function getminutes() {
        //minutes is seconds divided by 60, rounded down
        mins = Math.floor(secs / 60);
        return mins;
    }

    function getseconds() {
        //take minutes remaining (as seconds) away
        //from total seconds remaining
        return secs - Math.round(mins * 60);
    }
</script>
<script type="text/javascript">
function onlyOne(checkbox) {

	index = indexId +1;
      $.each($("input[name='quiz']:checked"), function(){
         selectedOption = $(this).val();
         $.ajax({
          type: "GET",
            url: "{{URL::to('/submitAnswer')}}",
          data: {
             'user_ans'  : selectedOption,
             'qsn_index' : index,
             'module'    : 'Constraints1',
             'subject'   : 'Transportation',
             '_token':$("input[name='_token']").val()
            },
          dataType: 'json',
        });
      });
    var checkboxes = document.getElementsByName('quiz')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
<script>
    $(document).ready(function(){
        $(".footer").hide();
  });
 var indexId;
 var selectedOption;
 var previousQsn;
 var nextHide;
   var AllQuestions = {
           data: [
           {
               name:'A company has a maximum transportation budget of 2,00,000 Rs per month. It needs to ship 500 tonnes of steel per month from A to B. A truck can carry maximum of 10 tonnes and each trip costs 5,000 Rs. What percentage of requirement can be fulfilled within the transportation budget?',
               A: '100%',
               B: '80%',
               C: '60%',
               D: 'Cannot be calculated'
           },
           {
               name:"A car has to reach destination 520 KM away in 10 hours.  For first 4 hours, it travelled at 40 Km/hour. What should be the speed for remainder of the trip to reach within time?",
               A: '60 Km/ hour',
               B: '40 Km/ hour',
               C: '52 KM/ hour',
               D: 'Car cannot reach on time'
           },
           {
               name:"Karthik rented a car and drove at 60 Km/ hour for 30 minutes. When he started driving, fuel was 4 litres. After 30 minutes, only 2 litres of fuel is left. What is the mileage of the car?",
               A: '30 Km/ltr',
               B: '15 Km/ltr',
               C: '10 Km/ltr',
               D: '0'
           },
           {
               name:"Swiss enterprises have to ship 1000 tonnes of chemicals from Singapore to India. Which is the best method of transport?",
               A: 'Seaways',
               B: 'Roadways',
               C: 'Airways',
               D: 'Railways'
           },
           {
               name:"Bus from Bangalore airport to Central railway stations cost 250 Rs/ person. Cab costs 20 Rs/ KM as it drives at 40 KM/ hour for 1 hour. Note that maximum of 4 people can travel in a cab excluding driver. If 3 of you are travelling from Bangalore airport to Central railway station, which is the cheaper mode of transport and by how much?",
               A: 'Cab, 200 Rs',
               B: 'Bus, 200 Rs',
               C: 'Bus, 2,200 Rs',
               D: 'Not enough information to arrive at result'
           }]
   }; 
 function nextFun() {

     $('#Previous').show(); 
    // $('.card').empty();
     index = indexId +1;
     if(index > nextHide-2){
        $("#Next").hide();
        $("#FinishQuiz").show();
     }
     else{
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
    
     $('.card').empty();
     getQuestions(index);
   }
   
   function previousFun() {
     $('.card').empty();
     index = previousQsn - 1;
     if(index < 1){
        $("#Previous").hide();
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
     else{
        $("#Previous").show();
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
     getQuestions(index);
   }
   
   function getQuestions(index) {
    var html = '';
    html += '<span style="font-size: 28px;line-height: 28px;color: #7d929d;">Speed</span><button type="button" class="btn btn-default" style="background-color: #f0ad4e;color: white;float: right;" onclick="stop()">Exit Assessment</button><hr><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div id="qno">' + (index + 1) + '</div></div><div class="col-lg-10 col-md-10col-sm-10 col-xs-10"><p style="color: #34495e;font-family: "Varela Round","ProximaRegular", Helvetica, Arial, sans-serif;">' + AllQuestions.data[index].name +'</p><hr><input type="checkbox" name="quiz" value="a" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].A + '</span><br><input type="checkbox" name="quiz" value="b" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].B + '</span><br><input type="checkbox" name="quiz" value="c" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].C + '</span><br><input type="checkbox" name="quiz" value="d" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].D + '</span><br></div></div>';
      $('.card').html(html);
      indexId = index;
      previousQsn = index;
      nextHide =  AllQuestions.data.length; 
   }
function myFunction() {
    countdown();
    var index = 0;
    $('.card').empty();
    $('.footer').show();
    $('#Previous').hide();
    $('#FinishQuiz').hide();
    getQuestions(index);
}
 // $(document).ready(function(){
 //  var index = 0;
 //  getQuestions(index);
 //  jconfirm.defaults = {
 //    boxWidth: '30%',
 //    useBootstrap: false,
 //  };
  var score = 0;
  $('#question-two').hide();
  $('#concept').hide();
  $('#question-three').hide();
  $('#question-four').hide();
  $('#question-five').hide();
  $('#quiz-result').hide();
  $('.correct-q1').click(function(){
    score++
    console.log(score);
    $.confirm({
        title: 'Correct answer!',
        content: 'Congratulations',
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: "It's  Correct",
                btnClass: 'btn-green',
                // action: "https://www.w3schools.com/w3css/w3css_icons.asp"
                action: function(){
                  // $('#concept').show();
                  // $('#question-one').hide();
                  
                }
            },
        }
    });
  });
  
  $('.wrong-q1').click(function(){
    $.confirm({
        title: 'Wrong Answer!',
        content: "Please choose correct Answer",
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Try Again',
                btnClass: 'btn-red',
            },
        }
    });
  });
// });

function stop() {
	window.location = "{{url()}}/submitQuiz/?subject=mathematics&module=Speed";
}
</script>

@stop
