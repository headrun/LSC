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
                <span style="font-size: 28px;line-height: 28px;color: #7d929d;">Transportation</span>
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
       'unit'   : 'Transportation',
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
               name:'Which of the following channels are known for providing credit facility to both manufacturers and suppliers',
               A: 'Wholesalers',
               B: 'Retailers',
               C: 'Supermarket',
               D: 'Online'
           },
           {
               name:'A filter manufacturer makes filters and sells to dealers. Dealers sell the products to Sub-dealers who sell it to workshops, who consume it. How many level of channels are available in this trade (excluding manufacturer)?',
               A: '4 levels',
               B: '3 levels',
               C: '2 levels',
               D: 'None of the above'
           },
           {
               name:'Which of the following is an example of direct distribution channel?',
               A: 'A clothing brand selling  to customers through Amazon',
               B: 'Vegetable vendor who sells in his cart to customers',
               C: 'Hyundai dealer selling a car to customers',
               D: 'All of the above'
           },
           {
               name:'An Shoe trading firm hols 30,000 Rs worth of products in its retail outlety. If this entire stock is depleted in 3 months, what is the annual sale?',
               A: '10,000 Rs',
               B: '1,20,000 Rs',
               C: '7,20,000 Rs',
               D: '1 Lakh Rs'
           },
           {
               name:'Which of the following is a factor deciding distribution channel?',
               A: 'Perishability',
               B: 'Consumer market size',
               C: 'Financial Strength of company',
               D: 'All of the above'
           },
           // 5
           {
               name:'Which of the mentioned factors justify a shorter distribution channel?',
               A: 'Longer shelf life',
               B: 'Low shelf life',
               C: 'Government regulations',
               D: 'None of the above'
           },
           {
               name:'Which of the mentioned factors justify use of channels of distribution or middle men for sale?',
               A: 'Low shelf life',
               B: 'Customized products',
               C: 'High market size and geographical spread',
               D: 'None of the above'
           },
           {
               name:'Which of the following is not a a warehousing activity?',
               A: 'Cross dock',
               B: 'Protection of goods',
               C: 'Marketing',
               D: 'None of the above'
           },
           {
               name:'Which of the following determines a location of a warehouse?',
               A: 'Proximity to customers and suppliers',
               B: 'Availability of trucks',
               C: 'Availability of human resource',
               D: 'All of the above'
           },
           {
               name:'Which of the following are reasons to establish a warehouse?',
               A: 'Seasonal demand and seasonal supply',
               B: 'Continous supply',
               C: 'Both a & b',
               D: 'None of the above'
           },
           // 10
           {
               name:'Handling cost in a warehouse handling salt is 50 Rs/ ton dispatched. If the warehouse dispatches 20 tons every day, what is the total handling charge in the year 2019 if it works all 365 days?',
               A: '365000 Rs',
               B: '36500 Rs',
               C: '182500 Rs',
               D: '18250 Rs'
           },
           {
               name:'Which of the following is not a common type of warehouse?',
               A: 'Public',
               B: 'Bonded',
               C: 'Retail',
               D: 'Private'
           },
           {
               name:'A dealer had 700 units of Iphone 6s left at end of Saturday. If sales during Monday to Friday was 100 units per day, what was the inventory on Monday morning, if no purchase was made during the week?',
               A: '1200 units',
               B: '700 units',
               C: '800 units',
               D: '1400 units'
           },
           {
               name:'An Indian firm imports 500 units of shampoo from US based FMCG company at 5$ per unit. If 200 units were sold over 2 months, what is the inventory value at end of 2 months?',
               A: '1750$',
               B: '1500$',
               C: '2500$',
               D: 'None of the above'
           },
           {
               name:'Poppy is an umbrella brand which sells 25 umbrellas per day during Monsoon and 20 umbrellas per day during Summer. If the brand decides to hold 50 days of inventory during monsoon and 70 days of inventory during summer, what are the monsoon and summer inventories?',
               A: 'Summer: 1250; Monsoon: 1400',
               B: 'Summer: 1750; Monsoon: 1000',
               C: 'Summer: 1400; Monsoon: 1250',
               D: 'Summer & Winter: 2650'
           },
           // 15
           {
               name:'A trader bought 900 car seats assuming he will sell it in 100 days. However it took him 150 days to sell the car seats. What were the expected and actual sales per day?',
               A: 'Expected sales = 9 units/ Day; Actual Sales = 6 units/ Day',
               B: 'Expected sales = 6 units/ Day; Actual Sales = 6 units/ Day',
               C: 'Expected sales = 6 units/ Day; Actual Sales = 9 units/ Day',
               D: 'None of the above'
           },
           {
               name:'A trader bought 900 car seats assuming he will sell it in 100 days. However it took him 150 days to sell the car seats. How much should he have bought if he wishes to sell his entire inventory in 100 days?',
               A: '300 units',
               B: '900 units',
               C: '600 units',
               D: 'None of the above'
           },
           {
               name:'Identify the disadvantages of holding very little inventory',
               A: 'Warehouse space under utilization',
               B: 'Stock out and loss of customer',
               C: 'Money locked up',
               D: 'All of the above'
           },
           {
               name:'Identify the disadvantages of holding very high inventory',
               A: 'Stock out and loss of customer',
               B: 'Money locked in inventory',
               C: 'Possibility of inventory becoming obsolte',
               D: 'b and c'
           },
           {
               name:'A sales man in New York, had 1000 Christmas bells on December 1st. She bought 5000 more on 10th December and 3000 on 12th December; If he sold 7500 pieces in total in December, what is her closing inventory as of December 31st?',
               A: '2000 units',
               B: '8000 units',
               C: '9000 units',
               D: '7000 units'
           },
           // 20
           {
               name:'Which of the following is a type of Manufacturing Inventory?',
               A: 'Raw Material Inventory',
               B: 'Retail inventory',
               C: 'Wholesale inventory',
               D: 'All of the above'
           },
           {
               name:'A toy maker manufactures 350 toy cars in September; If he had 50 toys at beginning of month and ends up with 10 toys at end of September, what was his sale over the month?',
               A: '590 units',
               B: '400 units',
               C: '500 units',
               D: '390 units'
           },
           {
               name:'Month of June has 20 week days and 10 weekend days. A grocery store sells 100 cookie packs per week day and 160 cookie packs per weekend day. If the grocery wants to keep 30 days of inventory cover and 10% additional stock as buffer inventory, what is the buffer inventory?',
               A: '3600 packs',
               B: '360 packs',
               C: '4000 packs',
               D: '100 packs'
           },
           {
               name:'You trade steel containers. You have 120 units of stock with 12 days of cover. If daily sales exceeds by 20%, what is the new days of cover',
               A: '12',
               B: '15',
               C: '10',
               D: '13'
           },
           {
               name:'An apparel firm holds T-shirts worth 10 Lakhs. If cost per piece is 100 Rs, what is the total inventory?',
               A: '100',
               B: '1000',
               C: '10000',
               D: '1 Lakh'
           },
           {
               name:'Water is converted to juice by a beverage company. 2 litre of water is converted to 1 litre of juice. The company has 200 Litres of water in beginning of a day. If produced 750 Litres of juice that month. How many litres of water was purchased over the month?',
               A: '1500 litres',
               B: '550 litres',
               C: '1300 litres',
               D: '1000 litres'
           },
           // low were done.
           {
               name:'A distributor buys Toor Dal packets from a FMCG company at a discount of 20% on MRP. If he bought 2000 packets at 48000 Rs, what is the MRP of the 1 packet?',
               A: '24 Rs',
               B: '35 Rs',
               C: '30 Rs',
               D: '20 Rs'
           },
           {
               name:'"Cost of producing a car accessory is Rs.1000 for a firm. The firm sells it to dealer with a 10% markup . The dealer sells it to retailer at further 10% markup. Retailer sells to end consumers at 20% markup. What is the final selling price and overall profit percentage from initial production cost? Markup = (Selling price - Cost Price)/Cost Price"',
               A: '1452 Rs',
               B: '1100 Rs',
               C: '1430 Rs',
               D: '1400 Rs'
           },
           {
               name:'Retailer buys 100 Kg wheat per month from wholesaler in Jan, Feb and March at 50 Rs/Kg. Wholesaler gives 3 month credit period to the retailer (Meaning retailer can pay for his purchase at end of 3months). If retailer pays 7000 Rs by May, how much should he pay to Wholesaler at end of May and end of June respectively?',
               A: '10000 Rs and 15000 Rs',
               B: '8000 Rs and 8000 Rs',
               C: '3000 Rs and 8000 Rs',
               D: 'None of the above'
           },
           {
               name:'Transportation cost of a company is 10 Crores per year and is 5% of the overall revenue. If rent of the firm is 8.33 Lakhs per month, what is the rent as a percentage of revenue?',
               A: '5%',
               B: '1%',
               C: '0.5%',
               D: '10%'
           },
           {
               name:'A firm pays 10 Rs/sqft/month for a 1 Lakh warehouse and 100 Rs/ton of handling cost. If 5000 tons are handled per month, what is the overall warehousing cost per ton?',
               A: '30 Rs/ton',
               B: '3000 Rs/ton',
               C: '300 Rs/ton',
               D: '200 Rs/ton'
           },
           {
               name:'You bought a coffee instant powder of 50gm and consumed 5gm every day for last 4 days. If in future, you will consume 3 gm per day, how many days of inventory cover is currently avalaible?',
               A: '14 days',
               B: '10 days',
               C: '7.25 days',
               D: '16.66 days'
           },
           {
               name:'Prices of gold change on a daily bases. A jewellery sales firm bought 100 gm of gold at 3000 Rs/gm last week and bought 200 gm of gold at 3500 Rs/gm this week. What is the inventory value now if no sales has happened from the fim over 2 weeks?',
               A: '10.5 Lakh Rs',
               B: '9 Lakh Rs',
               C: '10 Lakh Rs',
               D: '7 Lakh Rs'
           },
           {
               name:'A vegetable vendor brought 20 kg of onion from market at 100 Rs/ kg and 30 kg of onion at 120 Rs/ kg. What is the weighted average inventory value per kg?',
               A: '110 Rs',
               B: '112 Rs',
               C: '113 Rs',
               D: '100 Rs'
           },
           {
               name:'A consumer electronics firm orderd 1000 washing machines from China on 1st April and 2000 machines on 1st of May. If it takes 2 months for material to reach the firm, what is the physical and intransit inventory as of 1st of June?',
               A: 'Physcial inventory = 1000; In transit inventory = 2000',
               B: 'Physcial inventory = 2000; In transit inventory = 2000',
               C: 'Physcial inventory = 3000',
               D: 'Intransit inventory = 3000'
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
    html += '<span style="font-size: 28px;line-height: 28px;color: #7d929d;">Transportation</span><button type="button" class="btn btn-default" style="background-color: #f0ad4e;color: white;float: right; display:none" onclick="stop()">Exit Assessment</button><hr><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div id="qno">' + (reqIndex + 1) + '</div></div><div class="col-lg-10 col-md-10col-sm-10 col-xs-10"><p style="color: #34495e;font-family: "Varela Round","ProximaRegular", Helvetica, Arial, sans-serif;">' + AllQuestions.data[index].name +'</p><hr><input id="a" type="checkbox" name="quiz" value="a" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].A + '</span><br><input id="b" type="checkbox" name="quiz" value="b" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].B + '</span><br><input id="c" type="checkbox" name="quiz" value="c" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].C;
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
    randomQuestionsForUnit(0,25,23);
    randomQuestionsForUnit(26,34,7);
    // randomQuestionsForUnit(16,34,2);
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
      window.location = "{{url()}}/submitQuizAssessment/?unit=Transportation";
    }
    else{
      alert('Please select the answer to go forward');
    }
}

 


</script>

@stop

