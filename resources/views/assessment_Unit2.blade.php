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
                <span style="font-size: 28px;line-height: 28px;color: #7d929d;">Transportaion</span>
                <hr>
                <div style="background: #eaedf0;padding: 10px;border-radius:4px;">
                  <p style="color: #3f464c;font-family: 'Varela Round','ProximaRegular', Helvetica, Arial, sans-serif;">Number of Questions:<span style="color: #4dbfbf;"> 20</span></p>
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
 var numOfQsns = 3;
  var i;
  var qsnsArray = [];
  for(i=1;i<=numOfQsns;i++){
    var randomNum = generateRandom(0, 2);
    qsnsArray.push(randomNum);
  }
  console.log(qsnsArray);
  function generateRandom(min, max) {
    var num = Math.floor(Math.random() * (max - min + 1)) + min;
    return qsnsArray.includes(num) ? generateRandom(min, max) : num;
  }
 var indexId;
 var index;
 var reqIndex;
 var reqQsn;
 var previousQsn;
 var selectedOption;
 var nextHide;
   /*var AllQuestions = {
           data: [
           {
               name:'Train from munich, germany to salzburg, Austria takes 2 hours. If the distance is 500km, what is the speed of train?',
               A: '500 km/hr',
               B: '250 km/hr',
               C: '1000 km/hr',
               D: '1000 km/hr'
           },
           {
               name:'Bus from Chennai to Coimbatore travels at 50 km/hr speed. It takes a 1 hour break for dinner. If total time taken is 11 hours, what is the distance travelled?',
               A: '500 km',
               B: '550 km',
               C: '450 km',
               D: '350 km'
           },
           {
               name:'A metro train moves from A to B. It makes 5 stop in between of 12 minutes each. If A to B is 60km and train travel at 30km/hour, what is the time taken?',
               A: '3 hours',
               B: '2 hours',
               C: '1 hour',
               D: '4 hours'
           },
           {
               name:'You travel from home to supermarket, spend 1 hour to shop and return home. One-way distance is 10km and you travelled at 20 km/hr. what is your overall average speed?',
               A: '30 km/hr',
               B: '20 km/hr',
               C: '6.7 km/hr',
               D: '10 km/hr'
           },
           {
               name:'What is your speed if you travelled 10km in 15 minutes?',
               A: '10 km/hr',
               B: '40 km/hr',
               C: '20 km/hr',
               D: '15 km/hr'
           },
           {
               name:'Ravi travelled 600m in 1 minute. What is his speed?',
               A: '10 m/s',
               B: '10 km/hr',
               C: '20 m/s',
               D: '60 m/s'
           },
           {
               name:'Kishore travelled 500m in 30 minutes. What is his speed?',
               A: '1 km/hr',
               B: '2 km/hr',
               C: '0.5 km/hr',
               D: '3 km/hr'
           },
           {
               name:'If a cyclist moves at 5 m/s, what is the distance travelled in 1hr?',
               A: '18 m',
               B: '12 m',
               C: '18 km',
               D: '12 km'
           },
           {
               name:'A car moves from one city to another 120 km away. It breaks down in between and takes 1hr for repair. If the overall average speed including break is 40 km/hr. what speed does the car travel at?',
               A: '60 km/hr',
               B: '50 km/hr',
               C: '40 km/hr',
               D: '120 km/hr'
           },
           {
               name:'Which is the fastest means of transport?',
               A: 'Airways',
               B: 'Seaways',
               C: 'Roadways',
               D: 'Railways'
           },
           {
               name:'A truck carries 10lakh Rs worth material from factory to warehouse and returns back empty. If the round trip takes 2 days, how many trips can the truck take in a month? What is the value of material carried?',
               A: '10 trips; 1 Crores Rs',
               B: '10 trips; 2 Crores Rs',
               C: '15 trips; 1.5 Crores Rs',
               D: '15 trips; 3 Crores Rs'
           },
           {
               name:'A food delivery company receives 100 orders a day.A bike delivery person serve 5 orders in 1 round trip and can do 4 trips a day.How many bike delivery personnel are required per day?',
               A: '3',
               B: '2',
               C: '4',
               D: '5'
           },
           {
               name:'A warehouse should send material to 50 retail outlets. If warehouse sends 2 trucks per outlet and each truck carries 1 ton material, what is the total weight carried?',
               A: '100 tonnes',
               B: '50 tonnes',
               C: '1 ton',
               D: 'None of the above'
           },
           {
               name:'A truck can carry a maximum of 2 tonnes, carries 24 bags of fertilizer. Each bag weights 0.5 tonnes. What is the utilization percentage of truck?(Truck utilization=weight carrier/max.capacity)',
               A: '60%',
               B: '70%',
               C: '100%',
               D: '20%'
           },
           {
               name:'A car ride costs 12 Rs/km. If it travels for 2 hours at 40 km/hr, what is the total cost?',
               A: '800 Rs',
               B: '960 Rs',
               C: '1000 Rs',
               D: '480 Rs'
           },
           {
               name:'A lorry trip carries 10 tonnes of goods to kolkata. If 500 tonnes are shipped and each trip by a lorry cost 10,000Rs, what is the total cost?',
               A: '10 lakhs',
               B: '5 lakhs',
               C: '1 lakh Rs',
               D: 'None of the above'
           },
           {
               name:'Mileage of a bike is 30km/ltr. How many liters of fuel is consumed if you travel 45km?',
               A: '1 ltr',
               B: '2 ltr',
               C: '1.5 ltr',
               D: '3 ltr'
           },
           {
               name:'A liter of diesel costs, 70Rs. Your car has a mileage of 15 km/litre. If you travel for 60km, what is your fuel spend?',
               A: '300 Rs',
               B: '60 Rs',
               C: '280 Rs',
               D: '420 Rs'
           },
           {
               name:'Your maped has 2 litres of petrol. You travel 15km and 0.5 ltr of petrol is left in  the tank. What is your mileage?',
               A: '15 km/ltr',
               B: '10 km/ltr',
               C: '5 km/ltr',
               D: 'None of the above'
           },
           {
               name:'Neethu is travelling in a train which goes in 100 km/hr and travelled for 60 minutes. Her friend Raj took a bus which goes in 50km/hr and travelled for 90 minutes.What is the difference in distance covered by Neethu and Raj?',
               A: '50 kms',
               B: '25 kms',
               C: '75 kms',
               D: '30 kms'
           },
           {
               name:'Tina reaches her office, which is 15 kms away by travelling in a bus. She got into the bus at 8:00 am and reached office at 9:30 am. What is the speed of the bus she travelled?',
               A: '10 km/hr',
               B: '20 km/hr',
               C: '5 km/hr',
               D: '8 km/hr'
           },
           {
               name:'A courier delivery package reaches the central hub at 6 am in the morning. It gets picked by the delivery person at 7am. When will the package reach the destination, which is 10 kms away?The delivery cab\'s speed is known to be 40km/hr',
               A: '06:30 AM',
               B: '07:30 AM',
               C: '06:15 AM',
               D: '07:15 AM'
           },
           {
               name:'Food delivery from a restaurant is free for destinations within a radius of 2 kms. They charge extra Rs.10/- for every km further. Renus house is 5 kms away from the restaurant and she has ordered 2 pizzas each worth Rs.150/- . What is the Final cost she has to pay?',
               A: 'Rs.350/-',
               B: 'Rs.330/-',
               C: 'Rs.200/-',
               D: 'Rs.280/-'
           },
           {
               name:'Tony and family drove to a farmhouse which is 100 kms away. He fillled his car tank for Rs.2000/- and anticipated three toll-booths on the way. Also, he spent Rs.320/- for breakfast on the way. When he reached the farmhouse, he had spent a total of Rs.2500/- . What was the cost at each toll-booth if all the tolls were of equal price?',
               A: '60',
               B: '80',
               C: '100',
               D: '70'
           },
           {
               name:'Ram travels in his bike at a constant speed of 20km/hr and spends Rs.2/- for every kilometer he covers. He rode his bike for 2 hours on Monday, 3 hours on Tuesday and 4 hours on Wednesday. What is the total cost he spent from Monday to Wednesday?',
               A: '200',
               B: '320',
               C: '180',
               D: '360'
           },
           {
               name:'You have to travel 200 KM to your hometown and you have 200 Rs with you. You can take a bus which will cost you 3 Rs/ KM or share a cab at 50 Rs/ hour travelling at a speed of 50 KM/ hour. Which will you choose and what will be your cost?',
               A: 'Cab; Rs.200/-',
               B: 'Cab; Rs.150/-',
               C: 'Bus; Rs.150/-',
               D: 'Bus; RS.200/-'
           },
           {
               name:'Your bike milaege is 40 km/ltr. You have half a litre of fuel left. You can either directly go home which is 25 kms away or you can refill the tank at a station which is 10 kms and then go home. What is your constraint here and which will you choose ?',
               A: 'Time constraint ; fuel station',
               B: 'Speed constraint; home',
               C: 'Distance constraint ; fuel station',
               D: 'Distance constraint ; home'
           },
           {
               name:'You are going to attend a concert which will start in another one hour. You can ride a bicycle at a speed of 8 km/hr. You reached the destination half an hour late. How far is the concert from your starting point?',
               A: '8 kms',
               B: '4 kms',
               C: '10 kms',
               D: '12 kms'
           },
           {
               name:'You are going from Chennai to Bengaluru, 300 KM away. You have 2 carton boxes with you. You can go by car which will cost you 15 Rs/ Km, or you can by bike at 8 Rs/KM but you should courier the boxes to Bengaluru. Courier charge per box is 500 Rs. If you decide to take the cheaper option, what is your cost?',
               A: 'Rs.3400/-',
               B: 'Rs.4500/-',
               C: 'Rs.2400/-',
               D: 'Rs.2900/-'
           },
           {
               name:'You have two options to go to school. Through the city and through bypass road. City route is 30 KM away and you can go at 15 KM/Hour. Bypass route is 50 KM away and you can go at 50 KM/ hour with a 20 min wait at the toll. Which is the faster of the 2 options and how much time will you save?',
               A: 'City, 40 min',
               B: 'Bypass, 40 min',
               C: 'City, 20 min',
               D: 'Bypass, 60 min'
           },
           {
               name:'5000 Kgs of material is to be moved from Rajkot to Ahmedabad. Train takes 4 hours but loading and unloading salt into train takes 2 hours. Truck takes 200 Km route and travels at 40 Km/hour. Loading and unloading time is 1 hour. Which is faster?',
               A: 'Train',
               B: 'Truck',
               C: 'Both takes same time',
               D: ''
           },
           {
               name:'Raju and friends are travelling around the city on a Sunday. They hired a bicycle in which they travelled for one hour in 10km/hr speed. Later they got into a bus which goes in 20 km/hr and continued their travel for another 2 hours. After a break of 2 hours, they hired a cab to return in a speed of 40km/hr and it took one hour.What is the total distance travelled by them in the day?',
               A: '70 kms',
               B: '60 kms',
               C: '50 kms',
               D: '70 kms'
           },
           {
               name:'Tony is driving his car to his grandmothers house, which is about 200 kms from his place. Tony drove in a speed of 40km/hr on Monday and 50km/hr on Tuesday. Additionally, he takes a break of 10 minutes during the travel. What is be the average time taken by Tony to reach his grandmothers house?',
               A: '270 minutes',
               B: '280 minutes',
               C: '4 hours',
               D: '5 hours'
           },
           {
               name:'A truck is moving from Chandigarh to Delhi covering 250 kms costing Rs.20/- per km and a fixed daily fee for the driver. Total cost is Rs.5500/-. The next day, truck travelled for 400 kms, what was the total cost?',
               A: '8000',
               B: '8500',
               C: '5500',
               D: 'None of the above'
           },
           {
               name:'You can hire a cycle for Rs.10/- per hour. You took it to your home and returned covering a total distance of 16 kms away. You paid Rs.20/- for the service. What was your speed?',
               A: '16 km/h',
               B: '10 km/h',
               C: '8 km/h',
               D: '4 km/h'
           },
           ]
   };*/
   var AllQuestions = {
           data: [
           {
               name:'Test Question 1',
               A: 'Test Option 1',
               B: 'Test Option 2',
               C: 'Test Option 3',
               D: 'Test Option 4'
           },
           {
               name:'Test Question 2',
               A: 'Test Option 1',
               B: 'Test Option 2',
               C: 'Test Option 3',
               D: 'Test Option 4'
           },
           {
               name:'Test Question 3',
               A: 'Test Option 1',
               B: 'Test Option 2',
               C: 'Test Option 3',
               D: 'Test Option 4'
           },]
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
    html += '<span style="font-size: 28px;line-height: 28px;color: #7d929d;">Transportation</span><button type="button" class="btn btn-default" style="background-color: #f0ad4e;color: white;float: right; display:none" onclick="stop()">Exit Assessment</button><hr><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div id="qno">' + (reqIndex + 1) + '</div></div><div class="col-lg-10 col-md-10col-sm-10 col-xs-10"><p style="color: #34495e;font-family: "Varela Round","ProximaRegular", Helvetica, Arial, sans-serif;">' + AllQuestions.data[index].name +'</p><hr><input id = "a" type="checkbox" name="quiz" value="a" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].A + '</span><br><input id = "b" type="checkbox" name="quiz" value="b" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].B + '</span><br><input id = "c" type="checkbox" name="quiz" value="c" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].C;
    if(AllQuestions.data[index].D !=''){
      html += '</span><br><input id = "d" type="checkbox" name="quiz" value="d" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].D;
    }
    html += '</span><br></div></div>';
    $('.card').html(html);
    indexId = index;
    previousQsn = reqIndex;
    nextHide =  qsnsArray.length;
   }
function myFunction() {
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

