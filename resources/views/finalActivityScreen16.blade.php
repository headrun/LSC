@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Big Box Company</title>
      <link rel="stylesheet" href="/finalActivity/css/bootstrap.min.css">
      <link rel="stylesheet" href="/finalActivity/css/fontawesome.css">
      <link rel="stylesheet" href="/finalActivity/fontawsome/css/all.css">
      <link rel="stylesheet" href="/finalActivity/css/style3.css">
      <link rel="stylesheet" href="/finalActivity/css/introjs.css">
      <link rel="stylesheet" href="/finalActivity/fonts.css">
   </head>
   <body class="newbg">
         <div class="activity">
        <div class="container">
           <h1 style="text-align:center;"><span class="newactivity">5000 boxes have to be shipped from Sriperumabthur warehouse to Chennai. 1000 boxes can be shipped in one truck!</span> </h1>
        </div>
      </div>


   <section class="qns_section">
  <div class="container">


<div class="form-group">
      <label for="answer1"> How many trucks are requried ?</label>
      <input type="answer1" class="col-5 col-sm-4 col-md-2 col-lg-2 col-xl-2 form-control" id="no_of_trucks" placeholder="Enter Your Answer" name="answer1">
    </div>


<div class="border_middle">%nsab</div>
<div class="form-group">
      <label for="answer1"> The distance between Sriperumabthur warehouse and Chennai is 500 Km
The cost per km is Rs5/- What will be the total cost of the transportation for all trucks combined ?</label>
      <input type="answer2" class="col-5 col-sm-4 col-md-2 col-lg-2 col-xl-2 form-control " id="total_cost_to_transport" placeholder="Enter Your Answer" name="answer2">
    </div>

    </div>
 <div class="getstarted mr-0"><a href="javascript:void(0);" class="submit-btn " Onclick="Activity();">Submit</a></div>

</section>


   </body>
   <script src="/finalActivity/js/jquery.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/popper.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->
   <script src="/finalActivity/js/intro.min.js" type="text/javascript"></script>
   <script src="/finalActivity/js/bootbox.min.js" type="text/javascript"></script>
   <script>
    function Activity()
    {
      if($.trim($('#no_of_trucks').val()) == 5 && $.trim($('#total_cost_to_transport').val()) == 12500)
      {
        <!-- var url='images/congratulations-icon.png'; -->
        <!-- bootbox.alert("<img src='" + url + "'><br/><h1><span>Congratulations! Well done! You have successfully completed the assessment.</span></h1>",function(){ -->
              <!-- // window.location = "screen15.html"; -->
        <!-- }); -->
        window.location = "/finalActivityScreenCon";
      }
      else {
        bootbox.alert("<h1 style=\"color:red;\"><span>Please enter the correct values</span><button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button></h1>");
      }
    }
   </script>
</html>
@stop