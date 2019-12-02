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
                <span style="font-size: 28px;line-height: 28px;color: #7d929d;">Types of Distribution Channels</span>
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
                window.location = "{{url()}}/submitQuiz/?subject=Distribution&module=Distribution1";
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
  var display =[];
  var realValues;
  var uncheckedValues=[];
  var finalValues;
  function differenceOf2Arrays (array1, array2) {
    var temp;
    array1 = array1.toString().split(',');
    array2 = array2.toString().split(',');

    for (var i in array1) {
    if(array2.indexOf(array1[i]) === -1) temp = array1[i];
    }
    for(i in array2) {
    if(array1.indexOf(array2[i]) === -1) temp = array2[i];
    }
    return temp;
  }
  function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('quiz');
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
    });
    realValues=["a","b","c"];
    if(AllQuestions.data[indexId].D !=''){
      realValues=["a","b","c","d"];
    }
    index = indexId +1;
    uncheckedValues=[];
    $("input:checkbox:not(:checked)").each(function () {
      uncheckedValues.push($(this).val());
    });
    finalValues=differenceOf2Arrays(realValues, uncheckedValues);
    console.log(finalValues);
    selectedOption = finalValues;
    display[indexId] = selectedOption;
    console.log(display);
    $.ajax({
    type: "GET",
    url: "{{URL::to('/submitAnswer')}}",
    data: {
      'user_ans'  : selectedOption,
      'qsn_index' : index,
      'module'    : 'Distribution1',
      'subject'   : 'Distribution',
      '_token':$("input[name='_token']").val()
    },
    dataType: 'json',
    });
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
               name:'Which of the following is an example of direct distribution channel?',
               A: 'Amazon buy of toys',
               B: 'Retail outlet selling Atta',
               C: 'A clothes designer selling kurti from his home to customers',
               D: 'Supermarket sales of biscuits'
           },
           {
               name:"A manufacturer of soap sells material to wholesaler in Punjab. Wholesaler sells soap to a sub-wholesaler in Amritsar. This sub-wholesaler finally dispatches to retailers in Amritsar from where customers purchase. How many levels of channels are available between source and destination?",
               A: '0-Level',
               B: '2-Level',
               C: '3-Level',
               D: 'None of the above'
           },
           {
               name:"MRP of a chips pack is 20 Rs. Wholesaler buys it from manufacturer at a discount of 25% on MRP while retailer gets a 10% discount. If out of 2 lakh pieces sold, wholesaler and retailer each gets 50% of products, what is the overall buy price for wholesaler?",
               A: 'Rs. 15 Lakhs',
               B: 'Rs. 18 Lakhs',
               C: 'Rs. 33 Lakhs',
               D: 'Rs. 40 Lakhs'
           },
           {
               name:"MRP of a chips pack is 20 Rs. Wholesaler buys it from manufacturer at a discount of 25% on MRP while retailer gets a 10% discount. If out of 2 lakh pieces sold, wholesaler and retailer each gets 50% of products, what is the overall sales for the manufacturer?",
               A: 'Rs. 15 Lakhs',
               B: 'Rs. 18 Lakhs',
               C: 'Rs. 33 Lakhs',
               D: 'Rs. 40 Lakhs'
           },
           {
               name:"Which of the following channels are known for providing credit facility to both manufacturers and suppliers?",
               A: 'Wholesalers',
               B: 'Retailers',
               C: 'Supermarkets',
               D: 'Online'
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
     document.getElementById(display[index]).checked = true;
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
     document.getElementById(display[index]).checked = true;
   }
   
   function getQuestions(index) {
    var html = '';
    html += '<span style="font-size: 28px;line-height: 28px;color: #7d929d;">Types of Distribution Channels</span><button type="button" class="btn btn-default" style="background-color: #f0ad4e;color: white;float: right;" onclick="stop()">Exit Assessment</button><hr><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div id="qno">' + (index + 1) + '</div></div><div class="col-lg-10 col-md-10col-sm-10 col-xs-10"><p style="color: #34495e;font-family: "Varela Round","ProximaRegular", Helvetica, Arial, sans-serif;">' + AllQuestions.data[index].name +'</p><hr><input id="a" type="checkbox" name="quiz" value="a" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].A + '</span><br><input id="b" type="checkbox" name="quiz" value="b" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].B + '</span><br><input id="c" type="checkbox" name="quiz" value="c" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].C + '</span><br><input id="d" type="checkbox" name="quiz" value="d" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].D + '</span><br></div></div>';
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
  window.location = "{{url()}}/submitQuiz/?subject=Distribution&module=Distribution1";
}
</script>

@stop
