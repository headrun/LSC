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
                <span style="font-size: 28px;line-height: 28px;color: #7d929d;"></span>
                <hr>
                <div style="background: #eaedf0;padding: 10px;border-radius:4px;">
                  <p style="color: #3f464c;font-family: 'Varela Round','ProximaRegular', Helvetica, Arial, sans-serif;">Number of Questions:<span style="color: #4dbfbf;">30</span></p>
                  <p style="color: #3f464c;font-family: 'Varela Round','ProximaRegular', Helvetica, Arial, sans-serif;">Time Limit:<span style="color: #4dbfbf;"> 60 m 0 s</span></p>
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
    var mins = 60;

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
    window.location = "{{url()}}/submitQuizAssessment/?unit=Transportation";
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
     if ( !Array.prototype.forEach ) {
       checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
        });
     }
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
    display[reqIndex] = selectedOption;
    console.log(display);
    $.ajax({
      type: "GET",
      url: "{{URL::to('/submitAnswerAssesment')}}",
      data: {
       'user_ans'  : selectedOption,
       'qsn_index' : index,
       // 'module'    : 'Demand and Supply',
       'unit'   : 'Final',
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
  var qsnsArray = [];
  var numOfQsns;
  function randomQuestionsForUnit(startIndex,stopIndex,numOfQsns){
    var i;
    for(i=1;i<=numOfQsns;i++){
      var randomNum = generateRandom(startIndex, stopIndex);
      qsnsArray.push(randomNum);
    }
    console.log(qsnsArray);
    function generateRandom(min, max) {
      var num = Math.floor(Math.random() * (max - min + 1)) + min;
      return qsnsArray.includes(num) ? generateRandom(min, max) : num;
    }
  }
 var indexId;
 var index;
 var reqIndex;
 var reqQsn;
 var previousQsn;
 var selectedOption;
 var nextHide;
 
    var AllQuestions = {
           data: [
           {
               name:'Which of the following is an example of seasonal supply?',
               A: 'Mango',
               B: 'Salt',
               C: 'Cars',
               D: 'Mobile Phones'
           },
           {
               name:'Ashwin buys 700 units of cell phones and sells 35 units every month. How many months will it take to sell entire stock?',
               A: '20 months',
               B: '10 months',
               C: '70 months',
               D: '15 months'
           },
           {
               name:'Train from munich, germany to salzburg, Austria takes 2 hours. If the distance is 500km, what is the speed of train?',
               A: '500 km/hr',
               B: '250 km/hr',
               C: '1000 km/hr',
               D: 'None of the above'
           },
           {
               name:'A housing complex has 200 houses and an average of 3 persons per house. If each person needs 4 liters of drinking water per day, what is total daily demand?',
               A: '800 liters',
               B: '2400 liters',
               C: '2000 liters',
               D: '1000 liters'
           },
           {
               name:'500 people have to travel from Bangalore to Mysore by bus. If 40 buses with 12 seats per are available for booking, how many persons will not have enough seats?',
               A: '20 persons',
               B: '480 persons',
               C: '500 persons',
               D: 'No shortage'
           },
           {
               name:'A warehouse has an openning stock of 10 lakh shirts. It receives 5 lakh additional shirts in 1 month and closing stock at end of the month is 3 lakh shirts. How many units were sold in the month?',
               A: '12 lakh',
               B: '3 lakh',
               C: '15 lakh',
               D: '10 lakh'
           },
           {
               name:'A lorry trip carries 10 tonnes of goods to kolkata. If 500 tonnes are shipped and each trip by a lorry cost 10,000Rs, what is the total cost?',
               A: '10 lakhs',
               B: '5 lakhs',
               C: '1 lakh Rs',
               D: 'None of the above'
           },
           {
               name:'You have two options to go to school. Through the city and through bypass road. City route is 30 KM away and you can go at 15 KM/Hour. Bypass route is 50 KM away and you can go at 50 KM/ hour with a 20 min wait at the toll. Which is the faster of the 2 options and how much time will you save?',
               A: 'City, 40 min',
               B: 'Bypass, 40 min',
               C: 'City, 20 min',
               D: 'Bypass, 60 min'
           },
           {
               name:'Transportation cost of 1 truck from warehouse to depot is Rs.10,000. Each truck can carry 7 tonnes of material. If 140 tonnes are to be shipped, what is the total transportation cost?',
               A: 'Rs.2,00,000',
               B: 'Rs.20,000',
               C: 'Rs.1,00,000',
               D: 'Rs.7,00,000'
           },
           {
               name:'Kishore travelled 500m in 30 minutes. what is his speed?',
               A: '1 km/hr',
               B: '2 km/hr',
               C: '0.5 km/hr',
               D: '3 km/hr'
           },
           {
               name:'A Shoe trading firm holds 30,000 Rs worth of products in its retail outlet. If this entire stock is depleted in 3 months, what is the annual sale?',
               A: '10,000 Rs',
               B: '1,20,000 Rs',
               C: '7,20,000 Rs',
               D: '1 Lakh Rs'
           },
           {
               name:'Month of June has 20 weekdays and 10 weekend days. A grocery store sells 100 cookie packs per weekday and 160 cookie packs per weekend day. If the grocery wants to keep 3 days as buffer inventory, what is the buffer inventory?',
               A: '3600 packs',
               B: '360 packs',
               C: '4000 packs',
               D: '100 packs'
           },
           {
               name:'Handling cost in a warehouse handling salt is 50 Rs/ ton dispatched. If the warehouse dispatches 20 tons every day, what is the total handling charge in the year 2019 if it works all 365 days?',
               A: '365000 Rs',
               B: '36500 Rs',
               C: '182500 Rs',
               D: '18250 Rs'
           },
           {
               name:'A filter manufacturer makes filters and sells those to dealers. Dealers sell the products to Sub-dealers who sell it to workshops, who consume it. How many levels of channels are available in this trade (excluding manufacturer)?',
               A: '4 levels',
               B: '3 levels',
               C: '2 levels',
               D: 'None of the above'
           },
           {
               name:'Which of the following is a type of Manufacturing Inventory?',
               A: 'Raw Material Inventory',
               B: 'Retail inventory',
               C: 'Wholesale inventory',
               D: 'All of the above'
           },
           {
               name:'A vegetable vendor bought 20 kg of onion from the market at 100 Rs/ kg and 30 kg of onion at 120 Rs/ kg. What is the weighted average inventory value per kg?',
               A: '110 Rs',
               B: '112 Rs',
               C: '113 Rs',
               D: '100 Rs'
           },
           {
               name:'Which of the following are reasons to establish a warehouse?',
               A: 'Seasonal demand and seasonal supply',
               B: 'Continuous supply',
               C: 'Both a & b',
               D: 'None of the above'
           },
           {
               name:'A dealer had 700 units of iPhone 6s left at the end of Saturday. If sales during Monday to Friday were 100 units per day, what was the inventory on Monday morning if no purchase was made during the week?',
               A: '1200 units',
               B: '700 units',
               C: '800 units',
               D: '1400 units'
           },
           {
               name:'An apparel firm holds T-shirts worth 10 Lakhs. If the cost per piece is 100 Rs, what is the total inventory?',
               A: '100',
               B: '1000',
               C: '10,000',
               D: '1 Lakh'
           },
           {
               name:'Which of the following determines the location of a warehouse?',
               A: 'Proximity to customers and suppliers',
               B: 'Availability of trucks',
               C: 'Availability of human resource',
               D: 'All of the above'
           },

           {
               name:'"Two batches of Cooking masala are received by a warehouse. Batch 1 - Manufacturing Date: 1st Jan 2020; Shelf Life: 3 months. Batch 2 - Manufacturing Date: 10th Jan 2020; Shelf Life: 3 months. If warehouse follows FEFO for order fulfilment (First Expiry First Out), which batch will be sent out first?"',
               A: 'Batch 1',
               B: 'Batch 2',
               C: 'Either of the two batches',
               D: 'Cannot be determined'
           },
           {
               name:'In a FMCG warehouse, which of the following will be the philosophy for order fulfilment?',
               A: 'First Expiry First Out (FEFO)',
               B: 'First In First Out (FIFO)',
               C: 'Last In First Out (LIFO)',
               D: 'Random'
           },
           {
               name:'Which of the following is not a Material Handling Equipment (MHE)?',
               A: 'Hand Pulling Trolley (HPT)',
               B: 'Battery Operated Trolley (BoPt)',
               C: 'Racking System',
               D: 'None of the above'
           },
           {
               name:'A person using a Hand Pulling trolley can move 12 pallets per hour. If 240 pallets are to be moved to storage in 2 hours, how many people operating HPT are required?',
               A: '10',
               B: '20',
               C: '5',
               D: '24'
           },

           {
               name:'Which of the following is a picking method?',
               A: 'Batch Picking',
               B: 'Order Picking',
               C: 'Both a & b',
               D: 'Neith a nor b'
           },
           {
               name:'Which of the following is an example of direct distribution channel?',
               A: 'Amazon buy of toys',
               B: 'Retail outlet selling Atta',
               C: 'A homemaker who makes sweets and seels it to neigbours',
               D: 'Supermarket sales of biscuits'
           },
           {
               name:'What is the disadvantage of having very low inventory?',
               A: 'Possible sales loss',
               B: 'High ordering cost',
               C: 'Huge money locked',
               D: 'None of the above'
           },
           {
               name:'Which of the following factors confirms that a warehouse is necessary in ABC Private Limited',
               A: 'ABC Private Limited trades commodities',
               B: 'ABC Private Limited"s Product is cheaper',
               C: 'ABC Private Limited"s production facility runs 24/7',
               D: 'Customers are primarily in a single city'
           },
           {
               name:'Swiss enterprises have to ship 1000 tonnes of chemicals from Singapore to India. Which is the best method of transport?',
               A: 'Seaways',
               B: 'Roadways',
               C: 'Airways',
               D: 'Railways'
           },

           {
               name:'A retailer buys 100 units of a new product and sells 40 units in week 1 and 15 units in week 2. What is the closing inventory at end of week 2?',
               A: '60',
               B: '100',
               C: '35',
               D: '45'
           },
           ]
   };


 function nextFun() {

  var selectedOption = $("input[name='quiz']:checked").val();
    if (selectedOption != undefined){
      $('#Previous').show();
     //$('.card').empty();
     reqIndex = previousQsn+1;
     index = reqIndex;
     reqQsn = qsnsArray[reqIndex];
     if(index > nextHide-2){
        $("#Next").hide();
        $("#FinishQuiz").show();
     }
     else{
        $("#Next").show();
        $("#FinishQuiz").hide();
     }
     $('.card').empty();
     getQuestions(reqQsn,reqIndex);
     document.getElementById(display[reqIndex]).checked = true;
    }
    else{
      alert('Please select the answer to go forward');
    }   
   }
   
   function previousFun() {
     $('.card').empty();
     reqIndex = previousQsn-1;
     index = reqIndex;
     reqQsn = qsnsArray[reqIndex];
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
     getQuestions(reqQsn,reqIndex);
     document.getElementById(display[reqIndex]).checked = true;
   }
   
   function getQuestions(index,reqIndex) {
    var html = '';
    html += '<span style="font-size: 28px;line-height: 28px;color: #7d929d;"></span><button type="button" class="btn btn-default" style="background-color: #f0ad4e;color: white;float: right; display:none" onclick="stop()">Exit Assessment</button><hr><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div id="qno">' + (reqIndex + 1) + '</div></div><div class="col-lg-10 col-md-10col-sm-10 col-xs-10"><p style="color: #34495e;font-family: "Varela Round","ProximaRegular", Helvetica, Arial, sans-serif;">' + AllQuestions.data[index].name +'</p><hr><input id="a" type="checkbox" name="quiz" value="a" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].A + '</span><br><input id="b" type="checkbox" name="quiz" value="b" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].B + '</span><br><input id="c" type="checkbox" name="quiz" value="c" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].C;
    if(AllQuestions.data[index].D !=''){
     html += '</span><br><input id="d" type="checkbox" name="quiz" value="d" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].D;
    } 
    html += '</span><br></div></div>';
      $('.card').html(html);
      indexId = index;
      previousQsn = reqIndex;
      nextHide =  qsnsArray.length; 
   }
function myFunction() {
    randomQuestionsForUnit(0,9,10);
    randomQuestionsForUnit(10,19,10);
    randomQuestionsForUnit(20,29,10);
    // randomQuestionsForUnit(35,49,12);
    // randomQuestionsForUnit(50,52,3);
    countdown();
    reqIndex = 0;
    reqQsn = qsnsArray[reqIndex];
    $('.card').empty();
    $('.footer').show();
    $('#Previous').hide();
    $('#FinishQuiz').hide();
    getQuestions(reqQsn,reqIndex);
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
 var selectedOption = $("input[name='quiz']:checked").val();
    if (selectedOption != undefined){
      window.location = "{{url()}}/submitQuizAssessment/?unit=Final";
    }
    else{
      alert('Please select the answer to go forward');
    }
}

</script>

@stop

