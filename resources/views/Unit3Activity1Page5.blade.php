@extends('layout.sidebar1')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>LSC</title>
      <link rel="stylesheet" href="Unit3Activity1/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit3Activity1/css/fontawesome.css">
      <link rel="stylesheet" href="Unit3Activity1/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit3Activity1/css/style.css">
      <link rel="stylesheet" href="Unit3Activity1/css/introjs.css">
      <link rel="stylesheet" href="Unit3Activity1/fonts.css">
   </head>
   <style type="text/css">
    .watc{
	    float: right;Unit3Activity1/
	    z-index: 99;
	    margin-top: 13px;
	    bottom: 0px;
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
   <body class="newbg">
     <div class="activitymap">
      <div class="activity">
         <div class="container">
            <h1>Chennai – 5,000, Coimbatore – 3,000<a style="float:right;" href="screen4.html" class="back_right"><i class="fa fa-angle-left" aria-hidden="true"></i>
 Back</a></h1>


      <div class="activity-white" style="padding:15px;">
      <div class="branded">
        <ul>
          <li><img src="Unit3Activity1/images/online.png" /> <span>Online - <span>20%</span> </span></li>
          <li><img src="Unit3Activity1/images/wholesale.png" /> <span>Wholesale – <span>20%</span></span></li>
          <li><img src="Unit3Activity1/images/supermarket.png" /> <span>Supermarkets – <span>20%</span></span></li>
          <li><img src="Unit3Activity1/images/Retailers.png" /><span>Retailers - <span>40%</span></span></li>
        </ul>
      </div>
      <div class="newques">
        <h2>Enter the volumes across each channel in the below boxes</h2>

        <h3>Sriperumbathur Warehouse</h3>
<span id="message"></span>
<div class="que-detailes">
<h4>Chennai</h4>
<ul>
<li><span>Online</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="ch_online" Onblur="Get_Details('ch_','online');"/></div></li>
<li><span>Retail</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="ch_retail" Onblur="Get_Details('ch_','retail');"/></div></li>
<li><span>Wholesale</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="ch_wholesale" Onblur="Get_Details('ch_','wholesale');"/></div></li>
<li><span>Supermarket</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="ch_market" Onblur="Get_Details('ch_','market');"/></div></li>
</ul>

<div class="retail1 justify-content-center" style="text-align:center;" >
<ul>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li><span>Retail</span><div class="input_loc1" id="ch_result">&nbsp;</div></li>
<li>&nbsp;</li>
</ul>
</div>
</div>



<div class="que-detailes1">
<h4>Coimbatore</h4>
<ul>
<li><span>Online</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="co_online" Onblur="Get_Details('co_','online');"/></div></li>
<li><span>Retail</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="co_retail" Onblur="Get_Details('co_','retail');"/></div></li>
<li><span>Wholesale</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="co_wholesale" Onblur="Get_Details('co_','wholesale');"/></div></li>
<li><span>Supermarket</span><div class="input_loc1"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="co_market" Onblur="Get_Details('co_','market');"/></div></li>
</ul>

<div class="retail1 justify-content-center" style="text-align:center;" >
<ul>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li><span>Retail</span><div class="input_loc1" id="co_result">&nbsp;</div></li>
<li>&nbsp;</li>
</ul>
</div>
</div>
<div class="submit">
<input type="submit" value="Submit" Onclick="Get_Details();"/>
<div class="watc"><a href="/SidebarLearningPage">Go to Home Page</a></div>
</div>
    </div>
    </div>
  </div>
   </div>

    </div>
   </body>

	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
	<h1><span>Congratulations! You have successfully designed network for Gobble Cerelas.</span><button type="button" class="close" data-dismiss="modal">&times;</button></h1></div>
	<div class="modal-body">

	<p><img src="Unit3Activity1/images/congratulations-icon.png" alt="congratulations"/></p>
	</div>

	</div>
	</div>
	</div>

   <script src="Unit3Activity1/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->
   <script src="Unit3Activity1/js/intro.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/bootbox.min.js" type="text/javascript"></script>
<script>
//$('#myModal').modal('show');
function Get_Details(){
	$("#ch_result").html('');
	$("#co_result").html('');
	var type ='ch_';
	var ch_online = ($("#"+type+"online").val()!='') ? $("#"+type+"online").val() : 0 ;
	var ch_retail= ($("#"+type+"retail").val()!='') ? $("#"+type+"retail").val() : 0 ;
	var ch_wholesale= ($("#"+type+"wholesale").val()!='') ? $("#"+type+"wholesale").val() : 0 ;
	var ch_market= ($("#"+type+"market").val()!='') ? $("#"+type+"market").val() : 0 ;
	var ch_sum = parseFloat(ch_online)+parseFloat(ch_retail)+parseFloat(ch_wholesale)+parseFloat(ch_market);
	var ch_check_online = (parseFloat(ch_sum)*20)/100;
	var ch_check_retail= (parseFloat(ch_sum)*40)/100;
	var ch_check_wholesale= (parseFloat(ch_sum)*20)/100;
	var ch_check_market =(parseFloat(ch_sum)*20)/100;
	var type ='co_';
	var co_online = ($("#"+type+"online").val()!='') ? $("#"+type+"online").val() : 0 ;
	var co_retail= ($("#"+type+"retail").val()!='') ? $("#"+type+"retail").val() : 0 ;
	var co_wholesale= ($("#"+type+"wholesale").val()!='') ? $("#"+type+"wholesale").val() : 0 ;
	var co_market= ($("#"+type+"market").val()!='') ? $("#"+type+"market").val() : 0 ;
	var co_sum = parseFloat(co_online)+parseFloat(co_retail)+parseFloat(co_wholesale)+parseFloat(co_market);
	var co_check_online = (parseFloat(co_sum)*20)/100;
	var co_check_retail= (parseFloat(co_sum)*40)/100;
	var co_check_wholesale= (parseFloat(co_sum)*20)/100;
	var co_check_market =(parseFloat(co_sum)*20)/100;

	if(co_online!=0 && co_retail!=0 && co_wholesale!=0 && co_market!=0 && ch_online!=0 && ch_retail!=0 && ch_wholesale!=0 && ch_market!=0){
    $("#ch_result").html(ch_wholesale);
    $("#co_result").html(co_wholesale);
    if(co_sum > 3000 || ch_sum > 5000){
			$("#message").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span>Oops! Not all entries are right! Retry</span></div>');
		}else{
			if(ch_online == ch_check_online && ch_retail == ch_check_retail && ch_wholesale == ch_check_wholesale && ch_check_market ==ch_market && co_online == co_check_online && co_retail == co_check_retail && co_wholesale == co_check_wholesale && co_check_market ==co_market){
				$("#message").html('');
        $('#myModal').modal('show');

			}else{
				$("#message").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span>Oops! Not all entries are right! Retry</span></div>');
			}
		}
	}
}
</script>
</html>
@stop