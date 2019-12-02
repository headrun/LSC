<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Activity3</title>
      <link rel="stylesheet" href="Unit2Activity1a/css/bootstrap.min.css">
      <link rel="stylesheet" href="Unit2Activity1a/css/fontawesome.css">
      <link rel="stylesheet" href="Unit2Activity1a/fontawsome/css/all.css">
      <link rel="stylesheet" href="Unit2Activity1a/css/style.css">
      <link rel="stylesheet" href="Unit2Activity1a/css/introjs.css">
      <link rel="stylesheet" href="Unit2Activity1a/fonts.css">

      <style type="text/css">
      body{

      }

      </style>
   </head>
   <body class="newbg">
     <div id="start" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <!--<div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Let us perform a quick activity to understand Supply and Demand </h4>
              </div>-->
              <div class="modal-body">

          <button type="submit" class="btn btn-primary" onclick="javascript:introJs().start();" data-dismiss="modal" aria-hidden="true" style="width:100%;">Start</button>

              </div>
          </div>
      </div>
  </div>
<div class="content-section">
      <div class="content-title">
        <div class="level" data-step="2" data-intro="Level 1/3">Level: <span class="levelnum">1 </span><span class="levelnum1">/ 2</span></div>


      </div>
      <div class="game-content">
        <h2>Let us now design a transportation strategy for a company</h2>


          <div class="levelcontent">
            <div class="whatis">
              <h3>Company ships the following</h3>
              <h4>Delhi - Noida : 50 tons of steel per day</h4>
              <h5>Noida - Varanasi: 22 tons of steel per day</h5>


            </div>
            <div class="new-left">
              <div class="eachpoint">
                <div class="round"><img src="Unit2Activity1a/images/delhi.png" alt="Delhi" /></div>
                <div class="ton">10 Ton Truck</div>
                <div class="truck1"><img src="Unit2Activity1a/images/truck3.png" /></div>
                <div class="newline">&nbsp;</div>
                <div class="number">Delhi  </div>

              </div>

              <div class="eachpoint1">
                <div class="round"><img src="Unit2Activity1a/images/noida.png" alt="Noida" /></div>
                <div class="number">Noida </div>
              </div>

              <div class="form-values">
                <h4>Enter number of trucks per day</h4>
                <input type="text" placeholder="Enter number of trucks per day" />

                <h4>Enter cost per day</h4>
                <input type="text" placeholder="Enter cost per day" />
 </div>
            </div>

            <div class="new-right">
              <div class="eachpoint">
                <div class="round"><img src="Unit2Activity1a/images/noida.png" alt="Noida" /></div>
                <div class="ton">22 Ton Truck</div>
                <div class="truck1"><img src="Unit2Activity1a/images/truck4.png" /></div>
                <div class="newline">&nbsp;</div>
                <div class="number">Noida</div>

              </div>

              <div class="eachpoint1">
                <div class="round"><img src="Unit2Activity1a/images/varanasi.png" alt="Varanasi" /></div>
                <div class="number">Varanasi</div>
              </div>

              <div class="form-values">
                <h4>Enter number of trucks per day</h4>
                <input type="text" placeholder="Enter number of trucks per day" />

                <h4>Enter cost per day</h4>
                <input type="text" placeholder="Enter cost per day" />

              </div>
            </div>


    <div class="instruction">
      <input type="submit" Value="Submit" class="play_but" />

    <div class="backbut"><a href="Unit2Activity1a/level2.html">Go to Next Level >></a></div>
    </div>

        </div>




      </div>

      <div class="bottom-title">
        <div class="bottom-heading"  data-step="1" data-intro="Transportation Strategy">Transportation Strategy</div>

      </div>

     </div>



   </body>
   <script src="Unit2Activity1a/js/jquery.min.js" type="text/javascript"></script>
   <script src="Unit2Activity1a/js/popper.min.js" type="text/javascript"></script>
   <script src="Unit2Activity1a/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="Unit2Activity1a/js/intro.js" type="text/javascript"></script>
   <script type="text/javascript">


    $(document).ready(function(){
      $("#start").modal('show');
    });



   </script>
</html>
                                                                                                                             143,7         99%

