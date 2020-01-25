var time_available=36; // in hrs
var distance_to_betravelled=300000; // in meters
var total_budget = 12000.00; // in rupees
function getStorageItem(key_name)
{
  if(localStorage.getItem(key_name) === null)
  {
    return "";
  }
  if(!isNaN(localStorage.getItem(key_name)))
  {
    return parseInt(localStorage.getItem(key_name));
  }
  return localStorage.getItem(key_name);
}
function setStorageItem(key_name,value)
{
  localStorage.setItem(key_name,value);
}
function removeStorageItem(key_name)
{
  localStorage.removeItem(key_name);
}
function restart_activity()
{
  localStorage.clear();
  setStorageItem('total_time_travelled',0);
  setStorageItem('total_cost',0);
}
function updateRemainingTime()
{
  $('.total-time span').html(time_available-getStorageItem('total_time_travelled')+' hours');
  $('.total-time').data('intro','Total Time: '+time_available-getStorageItem('total_time_travelled')+' hours');
}
function backtolevel1(selected_type)
{
  restart_activity();
  window.location="index.html";
}
function updateRemainingBudget()
{
  var total_cost=getStorageItem('total_cost');
  if(total_cost=='')
  {
    total_cost=0;
  }
  else if(isNaN(total_cost)){
    total_cost=parseInt(total_cost);
  }
  if(total_cost>0)
  {
    rbudget='Money Left: <span>Rs. '+(total_budget-total_cost) +' <strike>12,000</strike></span>';
    rbudgetintro='Money Left: '+ (total_budget-total_cost) ;
  }
  else {
    rbudget='Total Budget: <span>Rs. 12,000</span>';
    rbudgetintro='Total Budget: Rs. 12,000';
  }
  $('.total-budget').html(rbudget);
  $('.total-budget').data('intro',);
  // total-budget
}
function check_money_time(level_no)
{
  // debugger;
  var tt = getStorageItem('total_time_travelled');
  var tc = getStorageItem('total_cost');
  var msg = '';
  switch (level_no) {
    case 1:
    {
      if(tt > 10)
      {
        msg = "Sorry! You took 12 hours to reach Bangalore! Game over";
      }
      else {
        return true;
      }
      break;
    }
    case 2:
    {
      var level1_type=getStorageItem('level1_type');
      var level2_type=getStorageItem('level2_type');
      if(level2_type == 'flight2')
      {
        msg = "Cost of trip exceeded budget of Rs. 12,000";
      }
      else if(level1_type == 'flight1' && level2_type == 'car2')
      {
        msg = "Cost of trip exceeded budget of Rs. 12,000";
      }
      else {
        return true;
      }
    }
    case 3:
    {
      var level1_type=getStorageItem('level1_type');
      var level2_type=getStorageItem('level2_type');
      var level3_type=getStorageItem('level3_type');
      if(level1_type == 'bus1' && level2_type == 'car2' && level3_type == 'car3')
      {
        return true;
      }
      else {
        var tt = getStorageItem('total_time_travelled');
        var tc = getStorageItem('total_cost');
        if(tt > time_available)
        {
          msg = "Sorry! You took " + time_available + " hours to reach Bangalore! Game over";
        }
        else if(tc > total_budget){
          msg = "Cost of trip exceeded budget of Rs. 12,000";
        }
      }
    }
  }
  if(msg != '')
  {
    bootbox.confirm({
    message: "<span style=\"color: red;font-weight: bold;\">" + msg + "</span>",
    closeButton: false,
    buttons: {
        confirm: {
            label: 'Play Again',
            className: 'btn-success'
        },
        cancel: {
            label: 'Retry',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result)
        {
          window.location='index.html';
        }
        else {
			if(level_no=='1'){
				 window.location='index.html';
			}
			else{
				window.location='level'+level_no+'.html';
			}
          //window.location='level'+level_no+'.html';
        }
      }
    });
    return false;
  }
  else {
    switch(level_no)
    {
      case 1:
      {
        window.location = 'level2.html';
        break;
      }
      case 2:
      {
        window.location = 'level3.html';
        break;
      }
      case 3:
      {
        break;
      }
    }
  }
}

function update_values(level_type,level_no)
{
  // debugger;
  var time_over = 0;
  var money_spent = 0;
  if(getStorageItem('level1_type')!='')
  {
    switch (getStorageItem('level1_type')) {
      case 'flight1':
      {
        time_over += 2;
        money_spent += 9000;
        break;
      }
      case 'bus1':
      {
        time_over += 6;
        money_spent += 1500;
        break;
      }
      case 'twowheeler1':
      {
        time_over += 12;
        money_spent += 1000;
        break;
      }
    }
  }
  if(getStorageItem('level2_type')!='')
  {
    switch (getStorageItem('level2_type')) {
      case 'flight2':
      {
        time_over += 2;
        money_spent += 12000;
        break;
      }
      case 'car2':
      {
        time_over += 16;
        money_spent += 4000;
        break;
      }
      case 'van2':
      {
        time_over += 20;
        money_spent += 2400;
        break;
      }
    }
  }
  if(getStorageItem('level3_type')!='')
  {
    switch (getStorageItem('level3_type')) {
      case 'cycle3':
      {
        time_over += 15;
        money_spent += 600;
        break;
      }
      case 'car3':
      {
        time_over += 3;
        money_spent += 6000;
        break;
      }
    }
  }
  setStorageItem('total_time_travelled',time_over);
  setStorageItem('total_cost',money_spent);
  updateRemainingTime();
  updateRemainingBudget();
}

function show_levelsuccess_message(level_type,level_no)
{
  var msg = '';
  var tt = getStorageItem('total_time_travelled');
  var tc = getStorageItem('total_cost');
  switch (level_type) {
    case 'flight1':
    {
      msg = "Congratulations! You have reached Bangalore in 2hrs by spending Rs. 9,000";
      break;
    }
    case 'bus1':
    {
      msg = "Congratulations! You have reached Bangalore in 6 hours by spending Rs. 1,500";
      break;
    }
    case 'twowheeler1':
    {
      msg = "Congratulations! You have reached Bangalore in 12 hours by spending Rs. 1,000";
      break;
    }
    case 'flight2':
    {
      msg = "Congratulations! You have reached Chennai in 2hr by spending Rs. 12,000";
      break;
    }
    case 'car2':
    {
      msg = "Congratulations! You have reached Chennai in 16 hours by spending Rs. 4,000";
      break;
    }
    case 'van2':
    {
      msg = "Congratulations! You have reached Chennai in 20 hours by spending Rs. 2,400";
      break;
    }
    case 'cycle3':
    {
      msg = "Congratulations! You have completed your task with " +  tt + " hours and Rs. " + tc + " to spare ";
      break;
    }
    case 'car3':
    {
      msg = "Congratulations! You have completed your task with " +  tt + " hours and Rs. " + tc + " to spare ";
      break;
    }
  }
  if(level_no<3)
  {
    btn_label ="Next Level";
  }
  else {
    btn_label ="Ok";
  }
  setStorageItem('level'+level_no+'_type',level_type);
  update_values(level_type,level_no);
    if(check_money_time(level_no))
    {
      bootbox.alert({
        message: "<span style=\"color: green;font-weight: bold;font-family: 'Montserrat-Light';\">" + msg + "</span>",
        closeButton: false,
        buttons: {
            ok: {
                label: btn_label,
                className: 'btn-danger'
            }
        },
        callback: function(){

          if(level_no<3)
          {
            window.location = "level"+(level_no+1)+".html";
          }
        }
      });
  }
}

function check_entered_values(input_id)
{
  var e = $.Event("keyup");
  e.which = 13;
  $('#'+input_id).trigger(e);
}
$(document).ready(function(){
  $('.only_accept_numbers').keypress(function(e){
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
  });
  $('#plain_cost_of_the_trip').keyup(function(e){
    if(e.which==13)
    {
      var entered_cost=0;
      if($(this).val()!='')
      {
        entered_cost=parseInt($(this).val());
      }
      if(entered_cost==9000)
      {
        show_levelsuccess_message('flight1',1);
      }
      else {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Sorry! You entered a wrong cost. Enter again!</span>");
      }
    }
  });
  $('#plain2_cost_of_the_trip').keyup(function(e){
    if(e.which==13)
    {
      var entered_cost=0;
      if($(this).val()!='')
      {
        entered_cost=parseInt($(this).val());
      }
      if(entered_cost==12000)
      {
        show_levelsuccess_message('flight2',2);
      }
      else {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Sorry! You entered a wrong cost. Enter again!</span>");
      }
    }
  });

      function validate_time_taken(entered_hrs,level_type,level_no,is_from_cost,chhrs,chcost)
      {
        if(entered_hrs!='')
        {
          entered_hrs = parseInt(entered_hrs);
        }
        if(entered_hrs==chhrs)
        {
          if(!is_from_cost)
          {
            var entered_cost=$.trim($('#'+level_type+'_cost_of_trip_input').val());
            validate_cost(entered_cost,level_type,level_no,true,chhrs,chcost);
          }
          else {
            show_levelsuccess_message(level_type,level_no);
          }
        }
        else {
          bootbox.alert({
            message: "<span style=\"color: red;font-weight: bold;\">Sorry you entered wrong time</span>",
            buttons: {
                ok: {
                    label: 'Ok',
                    className: 'btn-danger'
                }
            }
          });
        }
      }
      function validate_cost(entered_cost,level_type,level_no,is_from_time,chhrs,chcost)
      {
        if(entered_cost!='')
        {
          entered_cost = parseInt(entered_cost);
        }
        if(entered_cost==chcost)
        {
          if(!is_from_time)
          {
            var entered_time=$.trim($('#'+level_type+'_time_taken_input').val());
            validate_time_taken(entered_time,level_type,level_no,true,chhrs,chcost);
          }
          else {
            show_levelsuccess_message(level_type,level_no);
          }
        }
        else {
          bootbox.alert({
            message: "<span style=\"color: red;font-weight: bold;\">Sorry you entered wrong cost</span>",
            buttons: {
                ok: {
                    label: 'Ok',
                    className: 'btn-danger'
                }
            }
          });
        }
      }
  $('#bus1_time_taken_input').keyup(function(e){
    if(e.which==13)
    {
      var entered_time=0;
      if($(this).val()!='')
      {
        entered_time=parseInt($(this).val());
      }
      if(entered_time=='')
      {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter time taken</span>");
      }
      else {
        validate_time_taken(entered_time,'bus1',1,false,6,1500);
      }
    }
  });
  $('#bus1_cost_of_trip_input').keyup(function(e){
    if(e.which==13)
    {
      var entered_cost=0;
      if($(this).val()!='')
      {
        entered_cost=parseInt($(this).val());
      }
      if(entered_cost=='')
      {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter total cost of the trip</span>");
      }
      else {
          validate_cost(entered_cost,'bus1',1,false,6,1500);
      }
    }
  });
  $('#twowheeler1_time_taken_input').keyup(function(e){
    if(e.which==13)
    {
      var entered_time=0;
      if($(this).val()!='')
      {
        entered_time=parseInt($(this).val());
      }
      if(entered_time=='')
      {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter time taken</span>");
      }
      else {
        validate_time_taken(entered_time,'twowheeler1',1,false,12,1000);
      }
    }
  });
  $('#twowheeler1_cost_of_trip_input').keyup(function(e){
    if(e.which==13)
    {
      var entered_cost=0;
      if($(this).val()!='')
      {
        entered_cost=parseInt($(this).val());
      }
      if(entered_cost=='')
      {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter total cost of the trip</span>");
      }
      else {
          validate_cost(entered_cost,'twowheeler1',1,false,12,1000);
      }
    }
  });

  $('#car2_time_taken_input').keyup(function(e){
    if(e.which==13)
    {
      var entered_time=0;
      if($(this).val()!='')
      {
        entered_time=parseInt($(this).val());
      }
      if(entered_time=='')
      {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter time taken<span>");
      }
      else {
        validate_time_taken(entered_time,'car2',2,false,16,4000);
      }
    }
  });
  $('#car2_cost_of_trip_input').keyup(function(e){
    if(e.which==13)
    {
      var entered_cost=0;
      if($(this).val()!='')
      {
        entered_cost=parseInt($(this).val());
      }
      if(entered_cost=='')
      {
        bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter total cost of the trip</span>");
      }
      else {
          validate_cost(entered_cost,'car2',2,false,16,4000);
      }
    }
  });

    $('#van2_time_taken_input').keyup(function(e){
      if(e.which==13)
      {
        var entered_time=0;
        if($(this).val()!='')
        {
          entered_time=parseInt($(this).val());
        }
        if(entered_time=='')
        {
          bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter time taken</span>");
        }
        else {
          validate_time_taken(entered_time,'van2',2,false,20,2400);
        }
      }
    });
    $('#van2_cost_of_trip_input').keyup(function(e){
      if(e.which==13)
      {
        var entered_cost=0;
        if($(this).val()!='')
        {
          entered_cost=parseInt($(this).val());
        }
        if(entered_cost=='')
        {
          bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter total cost of the trip</span>");
        }
        else {
            validate_cost(entered_cost,'van2',2,false,20,2400);
        }
      }
    });
    $('#cycle3_time_taken_input').keyup(function(e){
      if(e.which==13)
      {
        var entered_time=0;
        if($(this).val()!='')
        {
          entered_time=parseInt($(this).val());
        }
        if(entered_time=='')
        {
          bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter time taken</span>");
        }
        else {
          validate_time_taken(entered_time,'cycle3',3,false,15,600);
        }
      }
    });
    $('#cycle3_cost_of_trip_input').keyup(function(e){
      if(e.which==13)
      {
        var entered_cost=0;
        if($(this).val()!='')
        {
          entered_cost=parseInt($(this).val());
        }
        if(entered_cost=='')
        {
          bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter total cost of the trip</span>");
        }
        else {
            validate_cost(entered_cost,'cycle3',3,false,15,600);
        }
      }
    });
    $('#car3_time_taken_input').keyup(function(e){
      if(e.which==13)
      {
        var entered_time=0;
        if($(this).val()!='')
        {
          entered_time=parseInt($(this).val());
        }
        if(entered_time=='')
        {
          bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter time taken</span>");
        }
        else {
          validate_time_taken(entered_time,'car3',3,false,3,6000);
        }
      }
    });
    $('#car3_cost_of_trip_input').keyup(function(e){
      if(e.which==13)
      {
        var entered_cost=0;
        if($(this).val()!='')
        {
          entered_cost=parseInt($(this).val());
        }
        if(entered_cost=='')
        {
          bootbox.alert("<span style=\"color: red;font-weight: bold;\">Please enter total cost of the trip</span>");
        }
        else {
            validate_cost(entered_cost,'car3',3,false,3,6000);
        }
      }
    });
});
