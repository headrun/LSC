<!DOCTYPE html>
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>LSC</title>
      <link rel="stylesheet" href="Unit3Activity2/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit3Activity2/css/fontawesome.css">
      <link rel="stylesheet" href="Unit3Activity2/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit3Activity2/css/style.css">
      <link rel="stylesheet" href="Unit3Activity2/css/introjs.css">
      <link rel="stylesheet" href="Unit3Activity2/fonts.css">

      <style type="text/css">
      body{

      }
      .watc{
            float: right;
            position: relative;
            z-index: 99;
            bottom: 10px;
            right: 40px;
     }
     .watc a{
            background: rgba(229,9,21,1);
            color: #ffffff;
            font-size: 14px;
            font-family: 'Montserrat-Regular';
            padding: 8px 15px;
            -webkit-border-radius: 16px;
            -moz-border-radius: 16px;
            border-radius: 16px;
            text-decoration: none;
     }
      </style>
   </head>
   <div id="myWare" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content">
               <!--<div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Let us perform a quick activity to understand Supply and Demand </h4>
                  </div>-->
               <div class="modal-body">
                 <div class="warehousenew">
                <h1> Welcome to our activity on Warehousing.</h1>
                <p>One of the major decisions taken by every firm is to decide how many warehouses to establish in which locations to ensure high service and low costs.</p>

<p>Your task for today is to help a major FMCG firm set up its warehouse network.</p>

<h5>You need to know the following.</h5>
<ul>
<li> A) Each customer city is to be reached within 2 days</li>
<li> B) It costs 3 Crore Rs to set up one warehouse facility</li>
<li> C) Maximum budget of 15 crores Rs is allocated to you for warehouse establishment.</li>
</ul>
<p>Can you successfully set up the warehouse network at minimum cost possible?</p>
<h6>Lets find out!</h6>
<div class="getready">
<button type="submit" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Start</button>
</div>
</div>


               </div>
            </div>
         </div>
      </div>
   <body class="newbg">
    <div class="overlayware"></div>
     <div class="activity_content">
       <div class="container">

         <p class="activity1">Warehouses</p>
         <p class="activity2 text-left">Per warehouse investment: 3 Crores</p>
         <p class="activity2 text-right">Total Budget: 15 Crores</p>
         <h2 class="belowmarix">Below matrix shows the number of days taken for shipping between the cities.</h2>
         <div class="ware-branded">
             <table class="table warehousetable text-center">
               <thead>
                 <tr>
                  <th>Warehouse</th>
                   <th class="Mumbai">Mumbai</th>
                   <th class="Pune">Pune</th>
                   <th class="Rajkot">Rajkot</th>
                   <th class="Jaipur">Jaipur</th>
                   <th class="Delhi">Delhi</th>
                   <th class="Gurgaon">Gurgaon</th>
                   <th class="Noida">Noida</th>
                   <th class="Chennai">Chennai</th>
                   <th class="Bangalore">Bangalore</th>
                   <th class="Hyderabad">Hyderabad</th>
                   <th class="Coimbatore">Coimbatore</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                  <td>Mumbai</td>
                   <td class="Mumbai">1</td>
                   <td class="Pune">1</td>
                   <td class="Rajkot">2</td>
                   <td class="Jaipur">3</td>
                   <td class="Delhi">4</td>
                   <td class="Gurgaon">4</td>
                   <td class="Noida">5</td>
                   <td class="Chennai">5</td>
                   <td class="Bangalore">4</td>
                   <td class="Hyderabad">3</td>
                   <td class="Coimbatore">5</td>
                 </tr>
                 <tr>
                  <td>Pune</td>
                   <td class="Mumbai">1</td>
                   <td class="Pune">1</td>
                   <td class="Rajkot">3</td>
                   <td class="Jaipur">3</td>
                   <td class="Delhi">4</td>
                   <td class="Gurgaon">4</td>
                   <td class="Noida">5</td>
                   <td class="Chennai">5</td>
                   <td class="Bangalore">4</td>
                   <td class="Hyderabad">3</td>
                   <td class="Coimbatore">5</td>
                 </tr>
                 <tr>
                  <td>Rajkot</td>
                   <td class="Mumbai">2</td>
                   <td class="Pune">3</td>
                   <td class="Rajkot">1</td>
                   <td class="Jaipur">3</td>
                   <td class="Delhi">5</td>
                   <td class="Gurgaon">5</td>
                   <td class="Noida">6</td>
                   <td class="Chennai">6</td>
                   <td class="Bangalore">5</td>
                   <td class="Hyderabad">4</td>
                   <td class="Coimbatore">7</td>
                 </tr>
                 <tr>
                  <td>Jaipur</td>
                   <td class="Mumbai">3</td>
                   <td class="Pune">3</td>
                   <td class="Rajkot">4</td>
                   <td class="Jaipur">1</td>
                   <td class="Delhi">1</td>
                   <td class="Gurgaon">1</td>
                   <td class="Noida">2</td>
                   <td class="Chennai">8</td>
                   <td class="Bangalore">7</td>
                   <td class="Hyderabad">6</td>
                   <td class="Coimbatore">9</td>
                 </tr>
                 <tr>
                  <td>Delhi</td>
                   <td class="Mumbai">4</td>
                   <td class="Pune">4</td>
                   <td class="Rajkot">5</td>
                   <td class="Jaipur">1</td>
                   <td class="Delhi">1</td>
                   <td class="Gurgaon">1</td>
                   <td class="Noida">1</td>
                   <td class="Chennai">8</td>
                   <td class="Bangalore">7</td>
                   <td class="Hyderabad">6</td>
                   <td class="Coimbatore">9</td>
                 </tr>
                 <tr>
                  <td>Gurgaon</td>
                   <td class="Mumbai">4</td>
                   <td class="Pune">4</td>
                   <td class="Rajkot">5</td>
                   <td class="Jaipur">1</td>
                   <td class="Delhi">1</td>
                   <td class="Gurgaon">1</td>
                   <td class="Noida">1</td>
                   <td class="Chennai">8</td>
                   <td class="Bangalore">7</td>
                   <td class="Hyderabad">6</td>
                   <td class="Coimbatore">9</td>
                 </tr>
                 <tr>
                  <td>Noida</td>
                   <td class="Mumbai">5</td>
                   <td class="Pune">5</td>
                   <td class="Rajkot">6</td>
                   <td class="Jaipur">2</td>
                   <td class="Delhi">1</td>
                   <td class="Gurgaon">1</td>
                   <td class="Noida">1</td>
                   <td class="Chennai">8</td>
                   <td class="Bangalore">7</td>
                   <td class="Hyderabad">6</td>
                   <td class="Coimbatore">9</td>
                 </tr>
                 <tr>
                  <td>Chennai</td>
                   <td class="Mumbai">5</td>
                   <td class="Pune">5</td>
                   <td class="Rajkot">6</td>
                   <td class="Jaipur">8</td>
                   <td class="Delhi">8</td>
                   <td class="Gurgaon">8</td>
                   <td class="Noida">8</td>
                   <td class="Chennai">1</td>
                   <td class="Bangalore">1</td>
                   <td class="Hyderabad">2</td>
                   <td class="Coimbatore">1</td>
                 </tr>
                 <tr>
                  <td>Bangalore</td>
                   <td class="Mumbai">4</td>
                   <td class="Pune">4</td>
                   <td class="Rajkot">5</td>
                   <td class="Jaipur">7</td>
                   <td class="Delhi">7</td>
                   <td class="Gurgaon">7</td>
                   <td class="Noida">7</td>
                   <td class="Chennai">1</td>
                   <td class="Bangalore">1</td>
                   <td class="Hyderabad">1</td>
                   <td class="Coimbatore">2</td>
                 </tr>
                 <tr>
                  <td>Hyderabad</td>
                   <td class="Mumbai">3</td>
                   <td class="Pune">3</td>
                   <td class="Rajkot">4</td>
                   <td class="Jaipur">6</td>
                   <td class="Delhi">6</td>
                   <td class="Gurgaon">6</td>
                   <td class="Noida">6</td>
                   <td class="Chennai">2</td>
                   <td class="Bangalore">1</td>
                   <td class="Hyderabad">1</td>
                   <td class="Coimbatore">3</td>
                 </tr>
                 <tr>
                  <td>Coimbatore</td>
                   <td class="Mumbai">5</td>
                   <td class="Pune">5</td>
                   <td class="Rajkot">7</td>
                   <td class="Jaipur">9</td>
                   <td class="Delhi">9</td>
                   <td class="Gurgaon">9</td>
                   <td class="Noida">9</td>
                   <td class="Chennai">1</td>
                   <td class="Bangalore">2</td>
                   <td class="Hyderabad">3</td>
                   <td class="Coimbatore">1</td>
                 </tr>
               </tbody>
             </table>
           </div>
           <div class="qustionwarehouse">
              <h2>Q : Each customer city should be reachable within 2 days</h2>
             <h3>Select Maximum warehouses : 5</h3>
           </div>

         <div class="non-branded">
           <ul>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Mumbai</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Pune</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Rajkot</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Jaipur</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Delhi</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Gurgaon</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Noida</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Chennai</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Bangalore</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Hyderabad</h4>
             </li>
             <li class="activeform">
                <div class="warehouseicon">
                  <i class="fas fa-warehouse"></i>
                </div>
                <h4>Coimbatore</h4>
             </li>


           </ul>
         </div>

<div class="getstarted">
  <ul>
    <li><button onClick="Reset()">Reset</button></li>
    <li><button class="resetcolr" onClick="Submit()">Submit</button></li>
  </ul>

</div>
<div class="watc"><a href="/SidebarLearningPage">Go to Home Page</a></div>

       </div>

     </div>



  <!-- The Modal Start-->

<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <!-- <h4 class="modal-title">Modal Heading</h4> -->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body" id="messages">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-6 col-xl-6" id="served-id">

          </div>
          <div class="col-12 col-sm-6 col-lg-6 col-xl-6" id="unserved-id">

          </div>

        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- The Modal End-->


<div class="modal fade" id="succmodal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
  <h1><span>Congratulations! You have successfully served the problem.</span><button type="button" class="close" data-dismiss="modal">&times;</button></h1></div>
  <div class="modal-body">

  <p><img src="Unit3Activity2/images/congratulations-icon.png" alt="congratulations"/></p>
  </div>

  </div>
  </div>
  </div>

   </body>
   <script src="Unit3Activity2/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit3Activity2/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit3Activity2/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->

    <script>
$(document).ready(function(){
        $("#myWare").modal('show');
  $(".activeform").click(function(){
  var firstcount = $('.activeware').length;
  $(this).toggleClass('activeware');
  var seccount = $('.activeware').length;
  var cls = $(this).children('h4').text();
  $("."+cls).toggleClass('cityseletd');
  if(seccount>5){
    alert('Warehouse limit exceeded');
    $(this).removeClass('activeware');
  $("."+cls).removeClass('cityseletd');
  }
  });
});
function Reset(){
$('.activeware').each(function(){
$(this).removeClass('activeware');
var cls = $(this).children('h4').text();
$("."+cls).removeClass('cityseletd');
});
}
function Submit(){
  var mumbai=['Mumbai','Pune','Rajkot'];
  var pune=['Mumbai','Pune'];
  var rajkot=['Mumbai','Rajkot'];
  var jaipur=['Jaipur','Delhi','Gurgaon','Noida'];
  var delhi=['Jaipur','Delhi','Gurgaon','Noida'];
  var gurgon=['Jaipur','Delhi','Gurgaon','Noida'];
  var noida=['Jaipur','Delhi','Gurgaon','Noida'];
  var chenn=['Chennai','Bangalore','Hyderabad','Coimbatore'];
  var bang=['Chennai','Bangalore','Hyderabad','Coimbatore'];
  var hyd=['Chennai','Bangalore','Hyderabad'];
  var coim=['Chennai','Bangalore','Coimbatore'];
  var mumbai_cnt = 0;
  var pune_cnt = 0;
  var rajkot_cnt = 0;
  var jaipur_cnt = 0;
  var delhi_cnt = 0;
  var gurgon_cnt = 0;
  var noida_cnt = 0;
  var chenn_cnt = 0;
  var bang_cnt = 0;
  var hyd_cnt = 0;
  var coim_cnt = 0;
  var cls_count = $('.activeware').length;
  if(cls_count > 0){
    $('.activeware').each(function(index){
      if(Object.values(mumbai).indexOf($(this).children('h4').text())>=0){mumbai_cnt+=1;}
      if(Object.values(pune).indexOf($(this).children('h4').text())>=0){pune_cnt+=1;}
      if(Object.values(rajkot).indexOf($(this).children('h4').text())>=0){rajkot_cnt+=1;}
      if(Object.values(jaipur).indexOf($(this).children('h4').text())>=0){jaipur_cnt+=1;}
      if(Object.values(delhi).indexOf($(this).children('h4').text())>=0){delhi_cnt+=1;}
      if(Object.values(gurgon).indexOf($(this).children('h4').text())>=0){gurgon_cnt+=1;}
      if(Object.values(noida).indexOf($(this).children('h4').text())>=0){noida_cnt+=1;}
      if(Object.values(chenn).indexOf($(this).children('h4').text())>=0){chenn_cnt+=1;}
      if(Object.values(bang).indexOf($(this).children('h4').text())>=0){bang_cnt+=1;}
      if(Object.values(hyd).indexOf($(this).children('h4').text())>=0){hyd_cnt+=1;}
      if(Object.values(coim).indexOf($(this).children('h4').text())>=0){coim_cnt+=1;}
    });
    var success_msg ='<p><i class="fas fa-check-circle"></i>'
    var failed_msg ='<p><i class="fas fa-times-circle"></i> '
    var success_div = {};
    var failed_div = {};
    var succalert = '';
    var failalert = '';
    if(mumbai_cnt > 0){success_div[1]=success_msg+ 'Mumbai </p>';}else{failed_div[1]=failed_msg+ 'Mumbai </p>';}
    if(pune_cnt > 0){success_div[2]=success_msg+ 'Pune </p>';}else{failed_div[2]=failed_msg+ 'Pune </p>';}
    if(rajkot_cnt > 0){success_div[3]=success_msg+ 'Rajkot </p>';}else{failed_div[3]=failed_msg+ 'Rajkot </p>';}
    if(jaipur_cnt > 0){success_div[4]=success_msg+ 'Jaipur </p>';}else{failed_div[4]=failed_msg+ 'Jaipur </p>';}
    if(delhi_cnt > 0){success_div[5]=success_msg+ 'Delhi </p>';}else{failed_div[5]=failed_msg+ 'Delhi </p>';}
    if(gurgon_cnt > 0){success_div[6]=success_msg+ 'Gurgaon </p>';}else{failed_div[6]=failed_msg+ 'Gurgaon </p>';}
    if(noida_cnt > 0){success_div[7]=success_msg+ 'Noida </p>';}else{failed_div[7]=failed_msg+ 'Noida </p>';}
    if(chenn_cnt > 0){success_div[8]=success_msg+ 'Chennai </p>';}else{failed_div[8]=failed_msg+ 'Chennai </p>';}
    if(bang_cnt > 0){success_div[9]=success_msg+ 'Bangalore </p>';}else{failed_div[9]=failed_msg+ 'Bangalore </p>';}
    if(hyd_cnt > 0){success_div[10]=success_msg+ 'Hyderabad </p>';}else{failed_div[10]=failed_msg+ 'Hyderabad </p>';}
    if(coim_cnt > 0){success_div[11]=success_msg+ 'Coimbatore </p>';}else{failed_div[11]=failed_msg+ 'Coimbatore </p>';}
    for (var key in success_div) {succalert += success_div[key]}
    for (var key in failed_div) {failalert += failed_div[key]}
    if(failalert ==''){
        $('#succmodal').modal('show');
    }else{
      $("#served-id").html('<div class="servemodel"><div class="servee greenserve"><h2>Served</h2></div>'+ succalert +'</div>');
      $("#unserved-id").html('<div class="unservemodel"><div class="servee redserve"><h2>Not Served</h2></div>'+ failalert +'</div>');
      $('#myModal').modal('show');
    }
  }else{
    alert('Select atleast one Warehouse');
  }
}
</script>

</html>


