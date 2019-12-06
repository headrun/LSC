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
                <span style="font-size: 28px;line-height: 28px;color: #7d929d;">Fundamentals Of Logistics</span>
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
		window.location = "{{url()}}/submitQuizAssessment/?unit=Fundamentals Of Logistics";
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
    display[reqIndex] = selectedOption;
    console.log(display);
    $.ajax({
      type: "GET",
      url: "{{URL::to('/submitAnswerAssesment')}}",
      data: {
       'user_ans'  : selectedOption,
       'qsn_index' : index,
       // 'module'    : 'Demand and Supply',
       'unit'   : 'Fundamentals Of Logistics',
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
               name:'Ava diary sells milk chocolates at Rs.5 per piece. If Rs.1000 was earned from Dec 1 to Dec 20th, what is the average demand per day?',
               A: '200 units',
               B: '10 units',
               C: '50 units',
               D: 'None of the above'
           },
           {
               name:"400 trucks full of oranges arrive at Hyderabad. Each truck can carry 1000kg and each orange weighs 100gr. What is the total supply of oranges?",
               A: '40 lakh oranges',
               B: '50 lakh oranges',
               C: '10 lakh oranges',
               D: 'None of the above'
           },
            {
               name:"A to Z online stores sells 300 T-shirts to 150 student. What is the average demand per student?",
               A: '2',
               B: '3',
               C: '300',
               D: '150'
           },
            {
               name:"Relaxfit shoes ltd makes 100 shoes per day. Total sales in November was 2500 shoes. How many shoes were in excess?",
               A: '500',
               B: '3000',
               C: '2550',
               D: 'No excess'
           },
           {
               name:"Which of the following is an example of seasonal supply?",
               A: 'Mango',
               B: 'Salt',
               C: 'Cars',
               D: 'Mobile Phones'
           },

           //   5 were done

           {
               name:"Every 1 lakh cell phones needs one cell tower. If population of Chennai is 100 lakh and 70% of population have cell phone, how many cell towers are needed?",
               A: '70',
               B: '100',
               C: '1000',
               D: '700'
           },
           {
               name:"A housing complex has 200 houses and an average of 3 persons per house. If each person needs 4 liters of drinking water per day, what is total daily demand?",
               A: '800 liters',
               B: '2400 liters',
               C: '2000 liters',
               D: '1000 liters'
           },
           {
               name:"Transportation cost of 1 truck from warehouse to depot is Rs.10,000. Each truck can carry 7 tonnes of material. If 140 tonnes are to be shipped, what is the total transportation cost?",
               A: 'Rs.2,00,000',
               B: 'Rs.20,000',
               C: 'Rs.1,00,000',
               D: 'Rs.7,00,000'
           },
            {
               name:"A firm receives orders from 1000 customers. It has to decide which warehouse to ship the order from. What is the planning type?",
               A: 'Transportation Planning',
               B: 'Order Planning',
               C: 'Both A and B options',
               D: 'None of the above'
           },
           {
               name:"Ashwin buys 700 units of cell phones and sells 35 units every month. How many months will it take to sell entire stock?",
               A: '20 months',
               B: '10 months',
               C: '70 months',
               D: '15 months'
           },
           // 10 were done

           {
               name:"500 people have to travel from Bangalore to Mysore by bus. If 40 buses with 12 seats per are available for booking, how many persons will not have enough seats?",
               A: '20 persons',
               B: '480 persons',
               C: '500 persons',
               D: 'No shortage'
           },
            {
               name:"A soap factory has 2 manufacturing plants. Plant 1 consumes 500 liters of vegetable oil per day. Plant 2 consumes 100 liters of vegetable oil per day. What is the total demand of oil in a 7-day week?",
               A: '600 liters',
               B: '3500 liters',
               C: '4200 liters',
               D: '700 liters'
           },
            {
               name:"A factory has a manufacturing capacity of 200 tonnes per day. If 50% of production was in excess than the demand. What is the demand in April?",
               A: '3000 tonnes',
               B: '6000 tonnes',
               C: '200 tonnes',
               D: '100 tonnes'
           },
           {
               name:"A warehouse has an opening stock of 10 lakh shirts. It receives 5 lakh additional shirts in 1 month and closing stock at end of the month is 3 lakh shirts. How many units were sold in the month?",
               A: '12 lakh',
               B: '3 lakh',
               C: '15 lakh',
               D: '10 lakh'
           },
           {
               name:"Retailer in Chennai ordered 1000 microwave ovens from a company. The company has a warehouse in chennai that has 700 units of oven in stock. A Hyderabad warehouse has 1000 units in stock. What is the Optimal distribution plan?",
               A: 'Chennai warehouse : 1000 units',
               B: 'Chennai warehouse : 700 units',
               C: 'Hyderabad warehouse : 1000 units',
               D: 'None of the above'
           },
           // 15 were done
           {
               name:"An entrepreneur starts a business to sell TVs in Mumbai. He decides to import the TVs from Singapore by ship. Travel time is 1 month. How many TVs, will he order in November, if December sales is expected to be 20 Lakh Rs with 20,000Rs of sales price per TV unit?",
               A: '100 units',
               B: '20 units',
               C: '20 lakh units',
               D: '1000 units'
           },
            {
               name:"You have 5kg of Atta. Expected sales over the day is 4kg. If you want to close the day with 4kg in hand how much should you buy today?",
               A: '5kg',
               B: '4kg',
               C: '3kg',
               D: '2kg'
           },
           {
               name:"A distributor stocks 500kg of rice in his godown. 1kg requires a space of 2 square feet (sqft) and 20% additional space requires for seating area. What is the total warehousing space?",
               A: '1200 sqft',
               B: '1000 sqft',
               C: '600 sqft',
               D: 'cannot be determined'
           },
           {
               name:"A retail store has 100 packets of chips. It sells 30 receivers & 30 packets in 1 day. what is the stock of the end of day?",
               A: '30 packets',
               B: '60 packets',
               C: '100 packets',
               D: 'None of the above'
           },
           {
               name:"Supplier in china sends electronic equipments to India. Total time taken is 2 months. If supplier has to meet demand of september in India, when should it send the material?",
               A: '1st of July',
               B: '1st of June',
               C: '1st of September',
               D: '1st of May'
           },
           //  20 were done
           {
               name:"A tonner Truck costs 20,000Rs from A to B.A 10 tonner truck costs 12,000Rs. If you have to ship 60 tonnes of steel, which truck would you choose and what would be total cost?",
               A: '10 tonner truck; 60,000 Rs',
               B: '20 tonner truck; 60,000 Rs',
               C: '20 tonner truck; 72,000 Rs',
               D: '10 tonner truck; 72,000 Rs'
           },
            {
               name:"Rapido sells 2-wheelers in Pune. It has 480 units of 2-wheelers which is expected to cover of 2 years. what is the demand per month?",
               A: '25 units',
               B: '20 units',
               C: '24 units',
               D: '480 units'
           },
           {
               name:"You buy stationery items at 100Rs per unit. If you have bought 500 units and sold 80% of the items, what is the value of stock left with you?",
               A: '10,000 Rs',
               B: '100 Rs',
               C: '50,000 Rs',
               D: '40,000 Rs'
           },
           {
               name:"CERN is a mobile phone company and are releasing a new model CERNPRO121 in UK. CERN estimates that 1% of UK adult population will buy CERNPRO121. If UK population is 8 Crores and adults continue 50% of total population, what would be the demand for CERNPRO121?",
               A: '3 Lakh units',
               B: '4 Lakh Units',
               C: '4 Crore Units',
               D: 'None of the above'
           },
           {
               name:"FastNew manufacturers watches and is a well known brand in Canada. In the month of December and January, demand is expected to be 50,000 units each. FastNew has figures out that they can supply 30,000 units in December and 40,000 Units in January. What percentage of demand can they serve in the two months?",
               A: 'December: 100%, January: 100 %',
               B: 'December:60%, January: 100 %',
               C: 'December: 60%, January: 80 %',
               D: 'December: 70%, January: 70 %'
           },
           // 25 were done
           {
               name:"Which of the following is a classic example of non-seasonal demand?",
               A: 'Salt',
               B: 'Mango',
               C: 'Winter clothes',
               D: 'None of the above'
           },
           {
               name:"A fire cracker company is expected to sell 12 Lakh units in October. They produced fire crackers for 4 months from June to September. What is the average number of crackers, they produce per month if total supply was in shortage of 2 lakh units?",
               A: '2.5 Lakh units per month',
               B: '3 Lakh units per month',
               C: '3.5 Lakh units per month',
               D: '12 Lakh units per month'
           },
           {
               name:"Logistics head of a company should decide how many material should he order month on month from various suppliers to ensure there is sufficient stock in the company warehouse. Name the planning activity?",
               A: 'Transportation Planning',
               B: 'Procurement Planning',
               C: 'Order Planning',
               D: 'Network Planning'
           },
           {
               name:"Retailer A can be served by Dealer 1 and Dealer 2. Which of the below factors do not determine which dealer should serve the retailer?",
               A: 'Size of dealer facility',
               B: 'Transportation cost',
               C: 'Stock at dealers',
               D: 'Vehicle availability from dealers to retailer'
           },
           {
               name:"Audio sound systems import their speakers from USA. Order is placed in January for April, May and June requirement of Audio sound systems. April,May,June demand is 500, 1000, 1000 units respectively. How many units ordered in January will be 20% extra speakers than required amount?",
               A: '3000',
               B: '2000',
               C: '2500',
               D: '5000'
           },
           // 30 were done
           {
               name:"Dealer takes 1 month to reach Retailer. Plant takes 1 month to reach Dealer. Supplier takes 2 months to reach plant. If retailer sells 600 units, 700 units, 800 units in January, February and March. How much should the retailer supply in October of previous year?",
               A: '700',
               B: '600',
               C: '800',
               D: '0'
           },
           {
               name:"Cricket bats supplied in China takes 2 months to reach Mumbai. Demand in January in Mumbai is 2000 cricket bats. Every months demand grows by 20%. How many bats should be supplied to ensure Feb demand is satisfied. In which month should China send these bats?",
               A: '2000 bats in January',
               B: '2400 bats in December',
               C: '2400 bats in February',
               D: '2400 bats in November'
           },
           {
               name:"Crazybin stores plastic containers in 3 different warehouses. On Wednesday, there was orders from 10 different customers. What is the sequence of process it should follow?",
               A: 'Order Planning - Order Picking - Transport Planning',
               B: 'Order Picking - Order Planning - Transport Planning',
               C: 'Transport Planning - Order Planning - Order Fulfilment',
               D: 'No planning required'
           },
           {
               name:"A lifestyle brand decides to store 5000 units of particular style at any time in its warehouse. Current stock is 7000 units with an expected sale of 4000 units in the month. How many units should be purchased in the month to ensure 5000 units are available at end of the month?",
               A: '2000',
               B: '1000',
               C: '5000',
               D: ''
           },
           {
               name:"You have to send 5 Kg of packages from Bengaluru to Chennai. Total distance is 350 KM. If you send by Courier, you incur 400 Rs/Kg. If you send by a bus parcel service, you will incur 5 Rs/ KM. Which is the cheaper mode and what is the cost you will incur?",
               A: 'Bus Parcel service: 1,750 Rs',
               B: 'Courier: 2000 Rs',
               C: 'Courier: 1,750 Rs',
               D: 'Both will cost the same; 2000 Rs'
           },
           // 35 were done
           //  ------------   UNIT 2    -------------
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
           // 40 were done
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
               name:'Which is the fastest means of transport?',
               A: 'Airways',
               B: 'Seaways',
               C: 'Roadways',
               D: 'Railways'
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
           // 45 were done
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
           // 50 were done
           {
               name:'A truck can carry a maximum of 2 tonnes, carries 24 bags of fertilizer. Each bag weights 0.5 tonnes. What is the utilization percentage of truck?(Truck utilization=weight carrier/max.capacity)',
               A: '60%',
               B: '70%',
               C: '100%',
               D: '20%'
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
    html += '<span style="font-size: 28px;line-height: 28px;color: #7d929d;">Fundamentals Of Logistics</span><button type="button" class="btn btn-default" style="background-color: #f0ad4e;color: white;float: right; display:none" onclick="stop()">Exit Assessment</button><hr><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div id="qno">' + (reqIndex + 1) + '</div></div><div class="col-lg-10 col-md-10col-sm-10 col-xs-10"><p style="color: #34495e;font-family: "Varela Round","ProximaRegular", Helvetica, Arial, sans-serif;">' + AllQuestions.data[index].name +'</p><hr><input id="a" type="checkbox" name="quiz" value="a" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].A + '</span><br><input id="b" type="checkbox" name="quiz" value="b" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].B + '</span><br><input id="c" type="checkbox" name="quiz" value="c" onclick="onlyOne(this)"><span> '+ AllQuestions.data[index].C;
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
    randomQuestionsForUnit(10,15,3);
    randomQuestionsForUnit(16,34,2);
    randomQuestionsForUnit(35,49,12);
    randomQuestionsForUnit(50,52,3);
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
      window.location = "{{url()}}/submitQuizAssessment/?unit=Fundamentals Of Logistics";
    }
    else{
      alert('Please select the answer to go forward');
    }
}

 


</script>

@stop

