<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity2</title>
      <link rel="stylesheet" href="/latestActivity/bootstrap.min.css">
      <!-- <link rel="stylesheet" href="/latestActivity/fontawesome.css"> -->
      <!-- <link rel="stylesheet" href="/latestActivity/all.css"> -->
      <link rel="stylesheet" href="/latestActivity/style.css">
      <link rel="stylesheet" href="/latestActivity/introjs.css">
      <link rel="stylesheet" href="/latestActivity/fonts.css">
 <style>
  .row{
   margin-left:0px;
 }

.main-wrapper{
 padding-top: 0px;
 padding-left: 0px;
}
 .button_boot{
  background-color:red;
 }
 .newbg{
        background-image: url('https://presentience.in/clients/activity/v2/images/bg.jpg');
      }
 </style>
   </head>
   <body class="newbg">
     <div class="activitymap">
      <div class="activity">
         <div class="container">
            <h1><span class="newactivity">Activity2</span>
            <a style="float:right;" href="/ActivitiesPage" class="back_right">
 Next Page <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a style="float:right;margin-right: 10px;" href="/Activity2a" class="restart">Restart</a>
            <a style="float:right;" href="/Activity2" class="back_right"><i class="fa fa-angle-left" aria-hidden="true"></i>
 Back</a></h1>
         </div>
      </div>

      <div class="activity-map">
        <div class="container">
          <div class="activity-white">
          <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
              <div class="map-image">
                <img src="https://presentience.in/clients/activity/v2/images/map.jpg" alt="" />
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="stock">
                  <h2>Stock in Mumbai: <span>500 units</span></h2>
                  <h2>Stock in Nagpur: <span>200 units</span></h2>

                  <h3>Transportation:</h3>
                  <h4>Mumbai to Hyderbad: <span>Rs 100 per units</span></h4>
                  <h4>Nagpur to Hyderabad: <span>Rs 50 per units</span></h4>

                </div>
            </div>

          </div>

          <div class="totalrequirement">
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="total1">
                  Total Requirement: <span>500 Units</span>
                </div>

                <div class="total2">
                  <h3>Served: <span id="order_stock">0</span></h3>
                  <h3>Pending: <span id="pending_stock" >500</span></h3>
                </div>

              </div>
              <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="total1">
                  Total tranport budget: <span>Rs. 40,000</span>
                </div>

                <div class="total2">
                  <h3>Cost incurred: <span id="bud_exp" >Rs.0</span></h3>
                  <h3>Remaining Budget: <span id="bud_remain" >Rs. 40,000</span></h3>
                </div>
              </div>
            </div>


          </div>


          <div class="source">
              <div class="source1">
                <h3>Source</h3>
                <div class="input_new">
                  <div class="input_loc">Mumbai</div>
                </div>

                <div class="input_new">
                  <div class="input_loc">Nagpur</div>
                </div>
              </div>


              <div class="source1">
                <h3>Stock</h3>
                <div class="input_new">
                  <div class="input_loc">500</div>
                </div>

                <div class="input_new">
                  <div class="input_loc">200</div>
                </div>
              </div>

              <div class="source1">
                <h3>Cost per unit </h3>
                <div class="input_new">
                  <div class="input_loc">100</div>
                </div>

                <div class="input_new">
                  <div class="input_loc">50</div>
                </div>
              </div>

              <div class="source2">
                <h3>Enter Qty  </h3>
                <div class="input_new1">
                  <div class="input_loc1"><input type="text" id="qty_mum" name="qty_mum" onkeyup="check_quantity_mum()"/></div>
                </div>

                <div class="input_new1">
                <div class="input_loc1"><input type="text" id="qty_nag" name="qty_nag" onkeyup="check_quantity_nag()" /></div>
                </div>
              </div>

              <div class="source2">
                <h3>Cost</h3>
                <div class="input_new1">
                  <div class="input_loc1"><input type="text" id="mum_cost" readonly /></div>
                </div>

                <div class="input_new1">
                <div class="input_loc1"><input type="text" id="nag_cost" readonly /></div>
                </div>
              </div>




          </div>
        </div>
        </div>
      </div>
    </div>
   </body>
   <script src="/latestActivity/jquery.min.js" type="text/javascript"> </script>
   <script src="/latestActivity/popper.min.js" type="text/javascript"></script>
   <script src="/latestActivity/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->
   <script src="/latestActivity/intro.min.js" type="text/javascript"></script>
   <script src="/latestActivity/bootbox.min.js" type="text/javascript"></script>
   <script>
   function check_quantity_mum()
   {
      var qty_mum=parseInt($("#qty_mum").val());
      var qty_nag=parseInt($("#qty_nag").val());

 console.log(qty_mum)
 if(qty_mum>0)
 {
    if(qty_nag>0 && qty_mum>0)
{
  if(qty_mum>500){
       //bootbox.alert("We don't have much stock at Mumbai!");
 bootbox.alert({
message: "You have exceeded the maximum units from Mumbai!",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
$("#qty_mum").val('');
$("#mum_cost").val('');
if(qty_nag>0)
{
var totqty=qty_nag;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#nag_cost").val(qty_nag * 50);
var mum_cost=parseInt($("#mum_cost").val());
var nag_cost=parseInt($("#nag_cost").val());
var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
$("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
}
else{
$("#bud_remain").html('Rs.'+ 40000);
$("#bud_exp").html('Rs.'+0);
$("#mum_cost").val('');
$("#order_stock").html(0);
$("#pending_stock").html(500);
}
  }
  else{
        var totqty=qty_nag+qty_mum;
  if(totqty>500){
//var totqty=qty_nag;
$("#order_stock").html(qty_nag);
$("#pending_stock").html(500-qty_nag);
$("#qty_mum").val('');
$("#mum_cost").val('');
//bootbox.alert("Total Requirement not more than 500");
bootbox.alert({
message: "Units should not be more than 500",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
var mum_cost=parseInt($("#mum_cost").val());
var nag_cost=parseInt($("#nag_cost").val());
var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
$("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
if(totcost=='40000' && totqty=='500')
{
   var url='images/congratulations-icon.png';
                                bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>");
}
if(totcost>40000)
{
  bootbox.alert({
message: "Oops ...!. You have exceeded the maximum budget, please buy with in the budget.",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
}
  }
  else{
var totqty=qty_nag+qty_mum;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#mum_cost").val(qty_mum * 100);
var mum_cost=parseInt($("#mum_cost").val());
var nag_cost=parseInt($("#nag_cost").val());
var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
$("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
if(totcost=='40000' && totqty=='500')
{
 var url='images/congratulations-icon.png';
                                bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>");
}
if(totcost>40000)
{
  bootbox.alert({
message: "Oops ...!. You have exceeded the maximum budget, please buy with in the budget.",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
}
  }
  }
 
   
 
}
else{
      var totqty=qty_mum;
if(totqty>500){
$("#pending_stock").html(500);
$("#order_stock").html(0);
$("#qty_mum").val('');
$("#mum_cost").val('');
//bootbox.alert("Total Requirement not more than 500");
bootbox.alert({
message: "Units should not be more than 500",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
if(totcost=='40000' && totqty=='500')
{
 var url='images/congratulations-icon.png';
                                bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>");
}
if(totcost>40000)
{
  bootbox.alert({
message: "Oops ...!. You have exceeded the maximum budget, please buy with in the budget.",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
}
  }
  else{
var totqty=qty_mum;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#mum_cost").val(qty_mum * 100);
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
if(totcost=='40000' && totqty=='500')
{
 var url='images/congratulations-icon.png';
                                bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>");
}
if(totcost>40000)
{
  bootbox.alert({
message: "Oops ...!. You have exceeded the maximum budget, please buy with in the budget.",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
}
  }
}
 }
 else{
 //bootbox.alert("Please enter digits only");
   $("#qty_mum").val('');
$("#mum_cost").val('');
    if(qty_nag>0)
{
           var totqty=qty_nag;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#nag_cost").val(qty_nag * 50);
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
}
else{
    $("#bud_remain").html('Rs.'+ 40000);
$("#bud_exp").html('Rs.'+0);
$("#mum_cost").val('');
$("#order_stock").html(0);
$("#pending_stock").html(500);
}
 }
   }
   function check_quantity_nag()
   {
     var qty_mum=parseInt($("#qty_mum").val());
      var qty_nag=parseInt($("#qty_nag").val());
 if(qty_nag>200)
 {
    //bootbox.alert("We don't have much stock at Nagpur!");
  bootbox.alert({
message: "You have exceeded the maximum units from Nagpur",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
    qty_nag=0;
$("#qty_nag").val('');
 }
 else{
    qty_nag=qty_nag;
 }
 if(qty_nag>=0)
 {
    if(qty_nag>=0 && qty_mum>0)
{  
    var totqty=qty_nag+qty_mum;
  if(totqty>500){
       //var totqty=qty_nag;
$("#order_stock").html(qty_mum);
$("#pending_stock").html(500-qty_mum);
$("#qty_nag").val('');
$("#nag_cost").val('');
//bootbox.alert("Total Requirement not more than 500");
bootbox.alert({
message: "Units should not be more than 500",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
if(totcost=='40000' && totqty=='500')
{
 var url='images/congratulations-icon.png';
                                bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>");
}
if(totcost>40000)
{
  bootbox.alert({
message: "Oops ...!. You have exceeded the maximum budget, please buy with in the budget.",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
}
  }
  else{
var totqty=qty_nag+qty_mum;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#nag_cost").val(qty_nag * 50);
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
if(totcost=='40000' && totqty=='500')
{
 var url='images/congratulations-icon.png';
                                bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>");
}
if(totcost>40000)
{
  bootbox.alert({
message: "Oops ...!. You have exceeded the maximum budget, please buy with in the budget.",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
}
  }
 
}
else{
      var totqty=qty_nag;
if(totqty>500){
$("#pending_stock").html(500);
$("#order_stock").html(0);
$("#qty_nag").val('');
$("#nag_cost").val('');
//bootbox.alert("Total Requirement not more than 500");
bootbox.alert({
message: "Units should not be more than 500",
buttons: {
 ok: {
className: 'button_boot',
label: 'Retry'
 }
}
 });
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
  }
  else{
var totqty=qty_nag;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#nag_cost").val(qty_nag * 50);
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
  }
}
 }
 else{
// bootbox.alert("Please enter digits only");

 $("#qty_nag").val('');
 $("#nag_cost").val('');
  if(qty_mum>0)
{
 
           var totqty=qty_mum;
$("#order_stock").html(totqty);
$("#pending_stock").html(500-totqty);
$("#mum_cost").val(qty_mum * 100);
var mum_cost=parseInt($("#mum_cost").val());
                    var nag_cost=parseInt($("#nag_cost").val());
   var mc=isNaN(mum_cost) ? "0" :mum_cost;
var nc=isNaN(nag_cost) ? "0" :nag_cost;
   var totcost=parseInt(mc)+parseInt(nc);
var pnding_cost=(40000-totcost);
   $("#bud_remain").html('Rs.'+ pnding_cost);
$("#bud_exp").html('Rs.'+ totcost);
}
else{
    $("#bud_remain").html('Rs.'+ 40000);
$("#bud_exp").html('Rs.'+0);
$("#nag_cost").val('');
$("#order_stock").html(0);
$("#pending_stock").html(500);
}
 }
   }
   $( document ).ready(function() {
   
});
   </script>
</html>
