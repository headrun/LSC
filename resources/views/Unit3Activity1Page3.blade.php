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
   <body class="newbg">
     <div class="activitymap">
      <div class="activity">
        <div class="container">
           <h1 style="text-align:center;margin-top:20px;"><span class="newactivity">Chennai – 5,000, Coimbatore – 3,000</span> </h1>
        </div>
      </div>

      <div class="activity-map">
        <div class="container">
        <h3>In each city, online sales is expected to be 20%, wholesale is expected to be 20%, supermarket sales would be 20% and retailers would sell 40% of the overall volume</h3>
        <h4><span>Note: Wholesalers will also sell to retail outlets</span></h4>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="branded">
                <ul>
                  <li><img src="Unit3Activity1/images/online.png" /> <span>Online - <span>20%</span> </span></li>
                  <li><img src="Unit3Activity1/images/wholesale.png" /> <span>Wholesale – <span>20%</span></span></li>
                  <li><img src="Unit3Activity1/images/supermarket.png" /> <span>Supermarkets – <span>20%</span></span></li>
                  <li><img src="Unit3Activity1/images/Retailers.png" /><span>Retailers - <span>40%</span></span></li>
                </ul>
              </div>
            </div>
            </div>

            <div class="navigate"><a style="float:right;" href="/Unit3Activity1Page4" class="restart">Go to Next <i class="fa fa-angle-right" aria-hidden="true"></i></a><a style="float:left;" href="/Unit3Activity1Page2" class="back_right"><i class="fa fa-angle-left" aria-hidden="true"></i>
 Go to Back</a></div>

        </div>
      </div>
    </div>
   </body>
   <script src="Unit3Activity1/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <script src="js/intro.js" type="text/javascript"></script> -->
   <script src="Unit3Activity1/js/intro.min.js" type="text/javascript"></script>
   <script src="Unit3Activity1/js/bootbox.min.js" type="text/javascript"></script>

</html>
@stop