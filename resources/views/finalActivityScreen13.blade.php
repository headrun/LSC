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
     <div class="activitymap">
      <div class="activity">
        <div class="container">
           <h1 style="text-align:center;"><span class="newactivity">Chennai – 5,000, Coimbatore – 3,000</span> </h1>
        </div>
      </div>

      <div class="activity-map">
        <div class="container">
      <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="branded">
                <ul style="    display: flex;   justify-content: center;">
                  <li><img src="/finalActivity/images/online.png" /> <span>Online - <span>20%</span> </span></li>
                  <li><img src="/finalActivity/images/wholesale.png" /> <span>Wholesale – <span>80%</span></span></li>
                  <!-- <li><img src="images/supermarket.png" /> <span>Supermarkets – <span>20%</span></span></li> -->
                  <!-- <li><img src="images/Retailers.png" /><span>Retailers - <span>40%</span></span></li> -->
                </ul>
              </div>
            </div>
            </div>

            <div class="activity-white" style="margin-top:40px;">
            <h3 style="padding:0px 20px;">Chennai and Coimbatore are served by Company warehouse in Sriperumabthur.</h3>
            <div class="warehouse">
              <img src="/finalActivity/images/warehouse.jpg" alt="Warehouse" />

            </div>
            </div>



            <div class="navigate" style="margin-bottom:30px;"><a style="float:right;" href="finalActivityScreen14" class="restart">Go to Next <i class="fa fa-angle-right" aria-hidden="true"></i></a><a style="float:left;" href="finalActivityScreen12" class="back_right"><i class="fa fa-angle-left" aria-hidden="true"></i>
 Go to Back</a></div>

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

</html>
@stop
