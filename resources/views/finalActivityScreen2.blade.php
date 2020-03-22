
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Big Box Company</title>
      <link rel="stylesheet" href="/finalActivity/css/bootstrap.min.css">
      <link rel="stylesheet" href="/finalActivity/css/fontawesome.css">
      <link rel="stylesheet" href="/finalActivity/fontawsome/css/all.css">
      <link rel="stylesheet" href="/finalActivity/css/style1.css">
      <link rel="stylesheet" href="/finalActivity/css/introjs.css">
      <link rel="stylesheet" href="/finalActivity/fonts.css">
      <!-- <link rel="stylesheet" href="/finalActivity/css/jquery-ui.css"> -->
   </head>
   <body>
      <div id="myModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content">
               <!--<div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Let us perform a quick activity to understand Supply and Demand </h4>
                  </div>-->
               <div class="modal-body">
                  <p >Let us play a game to predict how much the supplier has to supply to meet the demand of the store.</p>
                  <button type="submit" class="btn btn-primary" onclick="javascript:call_introchangestart()" data-dismiss="modal" aria-hidden="true">Get Started</button>
               </div>
            </div>
         </div>
      </div>
      <div class="activity">
         <div class="container">
            <h1><span class="newactivity">Activity:</span> <a style="float:right;" href="finalActivityScreen2" class="restart">Restart</a><a style="float:right;" href="finalActivityScreen1" class="back_right"><i class="fa fa-angle-left" aria-hidden="true"></i>
 Back</a></h1>
 <p style="    font-family: 'Montserrat-Regular';
    font-size: 16px;
 padding:0;
 margin:0;
    border:0px;
    text-align: left;
    width: 100%;">Estimate the supply to ensure that the demand is exactly met</p>
         </div>
      </div>
      <div class="activity_bg">
         <div class="container">
            <div class="line1">
               <div class="empty">&nbsp;</div>
               <div class="headings">Supply</div>
               <div class="headings1">Opening Stock</div>
               <div class="headings2">Receipt From Supply</div>
               <div class="headings3">Demand</div>
               <div class="headings4">Closing Stock</div>
            </div>
            <div class="line2">
               <div class="month">Jan</div>
               <div class="text_data"><input readonly type="text" Value="100"/></div>
               <div class="left-arrow hidden_element" data-arrow-no="2"><img src="/finalActivity/images/left-arrow.png" alt="" /></div>
               <div class="text_data1" data-step="1" data-intro="Stock at the beginning of the month in Jan is 180" ><input readonly type="text" Value="180"/></div>
               <div class="text_data2" data-step="2" data-intro="There is no supply received in January"><input readonly type="text" Value="0"/></div>
               <div class="text_data3" data-step="3" data-intro="Sales predicted for Jan is 100"><input readonly type="text" Value="100"/></div>
               <div class="text_data4" data-step="4" data-intro="At the end of Jan the stock left is 80 (opening stock + stock received - demand)"><input readonly type="text" Value="80"/></div>
               <div class="right-arrow hidden_element" data-arrow-no="1"><img src="/finalActivity/images/right-arrow.png" alt="" /></div>
            </div>
            <div class="line3">
               <div class="month">Feb</div>
               <div class="text_data"><input readonly type="text" Value="100"/></div>
               <div class="left-arrow hidden_element"><img src="/finalActivity/images/left-arrow.png" alt="" /></div>
               <div class="text_data1" data-step="5" data-intro="This is Opening Stock for February(Closing Stock of January)"><input readonly type="text" Value="80"/></div>
               <div class="text_data2" data-step="6" data-intro="In January the supplier supplied 100 units which will be received at store only in February."><input readonly type="text" Value="100"/></div>
               <div class="text_data3"><input readonly type="text" Value="110"/></div>
               <div class="text_data4" data-step="7" data-intro="In Feb the stock at the end of the month is 70 (opening stock + stock received - demand)"><input readonly type="text" Value="70"/></div>
               <div class="right-arrow hidden_element"><img src="/finalActivity/images/right-arrow.png" alt="" /></div>
            </div>
            <div class="line4">
               <div class="month">March</div>
               <div class="text_data clear_inputs" data-step="8" data-intro="Enter the March Supply such that it meet the exact demand and the closing stock in April will be 0" data-intro-title1="Please enter Supply for March"><input readonly type="text" Value=""/></div>
               <div class="text_data1"><input readonly type="text" Value="70"/></div>
               <div class="text_data2"><input readonly type="text" Value="100"/></div>
               <div class="text_data3"><input readonly type="text" Value="120"/></div>
               <div class="text_data4"><input readonly type="text" Value="50"/></div>
               <div class="right-arrow hidden_element"><img src="/finalActivity/images/right-arrow.png" alt="" /></div>
            </div>
            <div class="line2">
               <div class="month">Apr</div>
               <div class="text_data clear_inputs" data-intro-title1="Enter the April Supply such that it meet the exact demand and the closing stock in May will be 0"><input readonly type="text" Value=""/></div>
               <div class="text_data1"><input readonly type="text" Value="50"/></div>
               <div class="text_data2 clear_inputs"><input readonly type="text" Value=""/></div>
               <div class="text_data3"><input readonly type="text" Value="150"/></div>
               <div class="text_data4 clear_inputs"><input readonly type="text" Value=""/></div>
            </div>
            <div class="line3">
               <div class="month">May</div>
               <div class="text_data" >&nbsp;</div>
               <div class="text_data1 clear_inputs"><input readonly type="text" Value=""/></div>
               <div class="text_data2 clear_inputs"><input readonly type="text" Value=""/></div>
               <div class="text_data3"><input readonly type="text" Value="150"/></div>
               <div class="text_data4 clear_inputs"><input readonly type="text" Value=""/></div>
            </div>

         </div>
      </div>
   </body>
   <script src="/finalActivity/js/jquery.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/popper.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->
   <script src="/finalActivity/js/intro.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/bootbox.min.js" type="text/javascript"></script>
   <script>
   var current_step_number=1;
   function done_click_event()
   {
     var closing_stock=$('.text_data.introjs-showElement').parent().next().children('.text_data4').children('input').val();
     if(isNaN(closing_stock))
     {
       closing_stock=0;
     }
     else {
       closing_stock=parseInt(closing_stock);
     }
     if($('.text_data[data-step='+current_step_number+']').children('input').val()=='')
     {
       return false;
     }
     else if(closing_stock!=0)
     {
       closing_stock_warning_alert(closing_stock);
       return false;
     }
     moveto_next_month_supply();
   }
   function moveto_next_month_supply()
   {
     $('.text_data input').attr('readonly','readonly');
     var nextObj=null;
     $('.text_data input').each(function() {
       if($(this).val()=='')
       {
         //console.log($(this));
         nextObj=$(this);
         $(this).removeAttr('readonly');
         return false;
       }
      });
      if(nextObj!==null)
      {
        setTimeout(function(){
          var popupObj=nextObj.parent().get(0);
          introJs().setOptions({hideNext:true,hidePrev:true,exitOnEsc:false,showBullets:false,showStepNumbers:false,exitOnOverlayClick:false}).addStep({
            element: popupObj,
            intro: $(popupObj).data('intro-title1'),
          }).onbeforeexit(done_click_event).start();
        },100);
      }
      else {
        //bootbox.alert("Congratulations! You have successfuly completed your challenge");
        var url='/finalActivity/images/congratulations-icon.png';
        bootbox.alert("<img src='" + url + "'><br/> <h2>Congratulations! You have successfuly completed your challenge</h2>",function(){
              window.location = "finalActivityScreen4";
        });

      }
   }
     function closing_stock_warning_alert(closing_stock)
     {
       if(closing_stock<0)
       {
         // bootbox.('Demand is less than Opening Stock + Receipt. You are in Shortage');
         bootbox.alert({
            message: "Demand is greater than Opening Stock + Receipt. You are in Shortage",
            buttons: {
                ok: {
                    label: 'Retry',
                    className: 'btn-danger'
                }
            }
        });
       }
       else if(closing_stock>0){
         bootbox.alert({
            message: "Demand is less than Opening Stock + Receipt. You are in Excess",
            buttons: {
                ok: {
                    label: 'Retry',
                    className: 'btn-danger'
                }
            }
        });
       }
       else {
         moveto_next_month_supply();
       }
     }

      function call_introchangestart()
      {
        $('.clear_inputs input').val("");
        $('.hidden_element').hide();
        introJs().setOptions({hideNext:true,hidePrev:true,exitOnEsc:false,showBullets:false,showStepNumbers:false,exitOnOverlayClick:false}).onbeforeexit(done_click_event).onchange(function(targetElement){
          var data_step=$(targetElement).data('step');
          current_step_number=data_step;
          //$('.introjs-skipbutton').hide();
          switch(data_step)
          {
            case 5:
            {
              $('.hidden_element[data-arrow-no=1]').show();
              break;
            }
            case 6:
            {
              $('.hidden_element[data-arrow-no=2]').show();
              break;
            }
            case 8:
            {
              $('.introjs-prevbutton').hide();
              $(targetElement).find('input').removeAttr('readonly');
              break;
            }
          }
        }).start();
      // }).goToStepNumber(10).start();
      }
      $(document).ready(function(){
      	$("#myModal").modal('show');

        $('.text_data input').keypress(function(e){
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
          }
        });
        $('.text_data input').keyup(function(){
          var receipt_supply=$(this).val();
          var this_parent=$(this).parent().parent().next();
          if(receipt_supply!='' && !isNaN(receipt_supply))
          {
            var opening_stock=this_parent.children('.text_data1').children('input').val();
            this_parent.children('.text_data2').children('input').val(receipt_supply);
            var demand_for_month=this_parent.children('.text_data3').children('input').val();
            var closing_stock=parseInt(opening_stock)+parseInt(receipt_supply)-parseInt(demand_for_month);
            this_parent.children('.text_data4').children('input').val(closing_stock);
            this_parent.next().children('.text_data1').children('input').val(closing_stock);
          }
          else {
            this_parent.children('.text_data4').children('input').val('');
            this_parent.children('.text_data2').children('input').val('');
          }
        });
        // call_introchangestart();
      });
   </script>
</html>

