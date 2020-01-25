<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>:: Activity ::</title>
    <link rel="stylesheet" href="Unit4Activity3/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit4Activity3/css/fontawesome.css">
    <link rel="stylesheet" href="Unit4Activity3/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit4Activity3/css/style.css">
    <link rel="stylesheet" href="Unit4Activity3/css/introjs.css">
    <link rel="stylesheet" href="Unit4Activity3/fonts.css">
    <link rel="stylesheet" href="Unit4Activity3/css/jquery-ui.css">
    <link rel="stylesheet" href="Unit4Activity3/css/html-input-range.css">
    <link href="css/canvas.css" rel="stylesheet" />

    <style>
        #slider_sales,
        #slider1_sales,
        #slider2_sales {
            visibility: hidden;
        }

        #slider label,
        #slider1 label,
        #slider2 label,
        #slider_sales label,
        #slider1_sales label,
        #slider2_sales label {
            position: absolute;
            width: 20px;
            margin-left: -24px;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-family: 'Montserrat-Light';
        }

        #slider,
        #slider1,
        #slider2,
        #slider_sales,
        #slider1_sales,
        #slider2_sales {
            width: 90%;
            margin: 2em auto;
        }
    </style>
</head>

<body class="newbg2">
    <div class="container" style="max-width: 95%;">
        <div class="simulate">
            <div class="simulatequs">
                <h2>See impact on final inventory on branded canvas shoes for a trader</h2>
                <h3>You have the power to vary <span>purchase and sales</span></h3>
            </div>
            <div class="unitvalues">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <div class="simulate_table">
                          <table class="table text-center simultetablecontent">
                              <tr>
                                  <th></th>
                                  <th>Jan</th>
                                  <th>Feb</th>
                                  <th>Mar</th>
                              </tr>

                              <tr>
                                  <td>
                                      <h4>Opening Stock</h4>
                                  </td>
                                  <td>
                                      <h4 id="slider_opening_stock">500</h4>
                                  </td>
                                  <td>
                                      <h4 id="slider1_opening_stock"></h4>
                                  </td>
                                  <td>
                                      <h4 id="slider2_opening_stock"></h4>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <h4>Purchase</h4>
                                  </td>
                                  <td>
                                      <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                              <div class="kitchenselect1">
                                                  <span style="color:#fff" id="sslider"> </span>
                                                  <div id="slider" rel="slider"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                              <div class="kitchenselect1">
                                                  <span style="color:#fff" id="sslider1"> </span>
                                                  <div id="slider1" rel="slider1"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                              <div class="kitchenselect1">
                                                  <span style="color:#fff" id="sslider2"> </span>
                                                  <div id="slider2" rel="slider2"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>

                              <tr>
                                  <td>
                                      <h4>Sales</h4>
                                  </td>

                                  <td>
                                      <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                              <div class="kitchenselect1">
                                                  <span style="color:#fff" id="sslider_sales"> </span>
                                                  <div id="slider_sales" rel="slider_sales"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                              <div class="kitchenselect1">
                                                  <span style="color:#fff" id="sslider1_sales"> </span>
                                                  <div id="slider1_sales" rel="slider1_sales"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                              <div class="kitchenselect1">
                                                  <span style="color:#fff" id="sslider2_sales"> </span>
                                                  <div id="slider2_sales" rel="slider2_sales"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>

                              </tr>

                              <tr>
                                  <td>
                                      <h4>Closing stock</h4>
                                  </td>

                                  <td>
                                      <h4 id="slider_closing_stock"></h4>
                                  </td>
                                  <td>
                                      <h4 id="slider1_closing_stock"></h4>
                                  </td>
                                  <td>
                                      <h4 id="slider2_closing_stock"></h4>
                                  </td>

                              </tr>

                          </table>




                      </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                      <div id="resizable" style="height: 370px;border:1px solid gray;">
                          <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
                      </div>
                  </div>
              </div>
            </div>





        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="Unit4Activity3/js/popper.min.js" type="text/javascript"></script>
        <script src="Unit4Activity3/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Unit4Activity3/js/intro.js" type="text/javascript"></script>
        <script src="Unit4Activity3/js/jquery-ui.js"></script>
        <script src="Unit4Activity3/js/activity.js"></script>
        <script src="Unit4Activity3/js/bootbox.min.js"></script>
        <script src="Unit4Activity3/js/sweetalert.min.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        <script>
            var sliding = false;

            function draw_chart() {
                var jcs = 0;
                var fcs = 0;
                var mcs = 0;
                if (!$('#slider').is(':hidden') && !$('#slider_sales').is(':hidden')) {
                    var pre_closing_stock = parseInt($('#slider_opening_stock').html());
                    var purchase = $('#slider').slider("value");
                    var sales = $('#slider_sales').slider("value");
                    var closing_stock = pre_closing_stock + purchase - sales;
                    jcs = closing_stock;
                    $('#slider_closing_stock').html(closing_stock);
                    $('#slider1_opening_stock').html(closing_stock);
                }
                if (!$('#slider1').is(':hidden') && !$('#slider1_sales').is(':hidden')) {
                    var pre_closing_stock = parseInt($('#slider1_opening_stock').html());
                    var purchase = $('#slider1').slider("value");
                    var sales = $('#slider1_sales').slider("value");
                    var closing_stock = pre_closing_stock + purchase - sales;
                    fcs = closing_stock;
                    $('#slider1_closing_stock').html(closing_stock);
                    $('#slider2_opening_stock').html(closing_stock);
                }
                if (!$('#slider2').is(':hidden') && !$('#slider2_sales').is(':hidden')) {
                    var pre_closing_stock = parseInt($('#slider2_opening_stock').html());
                    var purchase = $('#slider2').slider("value");
                    var sales = $('#slider2_sales').slider("value");
                    var closing_stock = pre_closing_stock + purchase - sales;
                    mcs = closing_stock;
                    $('#slider2_closing_stock').html(closing_stock);
                }
                //Better to construct options first and then pass it as a parameter
                var options = {
                    title: {
                        text: "Closing Stocks"
                    },
                    data: [{
                        // Change type to "doughnut", "line", "splineArea", etc.
                        type: "column",
                        dataPoints: [{
                            label: "January",
                            y: jcs
                        }, {
                            label: "February",
                            y: fcs
                        }, {
                            label: "March",
                            y: mcs
                        }]
                    }]
                };

                $("#chartContainer1").CanvasJSChart(options);
            }
            var slide = function(ev, ui) {
                if (ev.originalEvent.type !== 'mousemove') {
                    sliding = false;
                    return true;
                }
                sliding = true;
                //console.log("I'm sliding.");
            };
            var start = function(ev, ui) {
                if (!sliding) {
                    //console.log("I'm not sliding.");
                }
            };
            var stop = function(ev, ui) {
                sliding = false;
                var this_val = ui.value;
                console.log(ui.value);
                // console.log(ui);
                // console.log(ev.target);
                var slided_id = $(ev.target).attr('id');
                // debugger;
                switch (slided_id) {
                    case 'slider':
                    case 'slider1':
                    case 'slider2':
                        {
                            console.log(this_val);
                            if (slided_id == 'slider' || slided_id == 'slider1' || slided_id == 'slider2') {
                                var slided_idd = slided_id;
                            } else {
                                var slided_idd = slided_id + '_sales';
                            }
                            var closing_stock = parseInt($('#' + slided_id + '_opening_stock').html());
                            if (!isNaN(closing_stock)) {
                                createslider(slided_id + '_sales', 0, closing_stock + this_val, 100, this_val, slided_idd);
                                $('#' + slided_id + '_sales').css('visibility', 'visible');
                            } else {
                                $('#' + slided_id).slider("value", 0);
                            }
                            break;
                        }
                }

                draw_chart();
            };

            function createslider(id, min_val, max_val, step, currentvalue, slided_id) {

                $('#' + id + ' label').remove();
                $('#' + id).slider({
                    slide: slide,
                    start: start,
                    stop: stop,
                    value: 0,
                    min: min_val,
                    max: max_val,
                    step: step,
                    cvalue: currentvalue,
                    slided_id: slided_id
                }).each(function() {

                    var opt = $(this).data().uiSlider.options;

                    var vals = (opt.max - opt.min) / 100;
                    var step = opt.step;
                    for (var i = 0; i <= vals; i++) {
                        if (i == 0) {
                            var el = $('<label>' + (i * step) + '</label>').css('left', (i / vals * 100) + '%');
                        } else if (i == vals) {
                            var el = $('<label>' + (i * step) + '</label>').css('left', (i / vals * 100) + '%');

                        } else {
                            var el = '';
                        }

                        /* if (slided_id == 'slider') {
                             $('#s' + opt.slided_id).html(opt.cvalue);
                         } else if (slided_id == 'slider1') {
                             $('#s' + opt.slided_id).html(opt.cvalue);
                         } else if (slided_id == 'slider2') {
                             $('#s' + opt.slided_id).html(opt.cvalue);
                         } else {
                             $('#s' + id).html(i * step);
                         }*/
                        console.log('#s' + id);
                        $('#s' + id).html(i * step);
                        // var ml = max_val / step;
                        $('#' + id).append(el);
                        //console.log(opt.cvalue);


                    }
                    $('#s' + opt.slided_id).html(opt.cvalue);


                });
            }
            createslider('slider', 0, 1000, 100, 0, 'slider');
            createslider('slider1', 0, 1000, 100, 0, 'slider1');
            createslider('slider2', 0, 1000, 100, 0, 'slider2');
            createslider('slider_sales', 0, 1000, 100, 0, 'slider_sales');
            createslider('slider1_sales', 0, 1000, 100, 0, 'slider1_sales');
            createslider('slider2_sales', 0, 1000, 100, 0, 'slider2_sales');
            draw_chart();
        </script>
</body>

</html>
