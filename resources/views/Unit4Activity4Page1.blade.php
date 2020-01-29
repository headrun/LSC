@extends('layout.sidebar1')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>:: Activity ::</title>
    <link rel="stylesheet" href="Unit4Activity4/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit4Activity4/css/fontawesome.css">
    <link rel="stylesheet" href="Unit4Activity4/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit4Activity4/css/style.css">
    <link rel="stylesheet" href="Unit4Activity4/css/introjs.css">
    <link rel="stylesheet" href="Unit4Activity4/fonts.css">
    <link rel="stylesheet" href="Unit4Activity4/css/jquery-ui.css">
    <style>
        #slider label,
        #slider1 label {
            position: absolute;
            width: 20px;
            margin-left: -24px;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-family: 'Montserrat-Light';
        }

        #slider,
        #slider1 {
            width: 90%;
            margin: 2em auto;
        }
    </style>

</head>

<body class="newbg2">
    <div class="container">
        <div class="simulate">
            <div class="simulatequs">
                <h2>Months/Days of Inventory cover indicates how many months/days worth of demand you should hold in your stock</h2>
                <h3>Understand your purchase requirements for a given opening inventory and closing inventory requirements (You can vary Monthly sales and Months of cover)</h3>
                <p>Month of inventory = inventory / Monthly sales</p>
            </div>
            <div class="monthlysale">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="monthlyinner">
                            <h3>Monthly Sale</h3>
                            <div id="slider"></div>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="monthlyinner">
                            <h3>Months of inventory cover</h3>
                            <div id="slider1"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="submit_btn1">
                <button class="submit1">Proceed</button>
            </div> -->

            <div class="monthlyunits">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="monthlyunitsinner">
                            <h3>Opening Stock :</h3>
                            <span id="opening_stock" class="unitfield">250</span>
                        </div>
                        <div class="monthlyunitsinner">
                            <h3>Purchase :</h3>
                            <span id="purchase" class="unitfield">0</span>
                        </div>
                        <div class="monthlyunitsinner">
                            <h3>Monthly Sales (in units) :</h3>
                            <span id="monthlysale" class="unitfield">100</span>
                        </div>
                        <div class="monthlyunitsinner">
                            <h3>Months of Cover :</h3>
                            <span id="monthly_inv" class="unitfield">1</span>
                        </div>
                        <div class="monthlyunitsinner">
                            <h3>Closing Stock (in units) :</h3>
                            <span id="closing_stock" class="unitfield">100</span>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div id="chartContainer" class="unitgraph">
                        </div>

                    </div>
                </div>
            </div>
            <button id = "back" style="color: white; float: left; background-color: red;" class="btn btn-primary btn-lg"> Back</button>
            <button id = "next" style="color: white; float: right; background-color: red;" class="btn btn-primary btn-lg"> Next</button>

        </div>
        <script type="text/javascript">
          $(document).on('click', '#next', function(){
            window.location = "{{url()}}/Unit4ActivityPage";
          });
          $(document).on('click', '#back', function(){
            window.location = "{{url()}}/Unit4ActivityPage";
          });
        </script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="Unit4Activity4/js/popper.min.js" type="text/javascript"></script>
        <script src="Unit4Activity4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Unit4Activity4/js/intro.js" type="text/javascript"></script>
        <script src="Unit4Activity4/js/jquery-ui.js"></script>
        <script src="Unit4Activity4/js/activity.js"></script>
        <script src="Unit4Activity4/js/bootbox.min.js"></script>
        <script src="Unit4Activity4/js/sweetalert.min.js"></script>
        <script src="Unit4Activity4/js/bootstrap-slider.js"></script>
        <script src="Unit4Activity4/js/jquery-ui.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        <script>
            var sliding = false;
            var monthlysale = 100;
            var monthly_inv = 1;
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
                // console.log(ui.value);
                monthlysale = ui.value * 100;
                draw_chart();
                sliding = false;
            };
            var stop1 = function(ev, ui) {
                // console.log(ui.value);
                monthly_inv = ui.value;
                draw_chart();
                sliding = false;
            };

            $('#slider').slider({
                slide: slide,
                start: start,
                stop: stop,
                value: 0,
                min: 1,
                max: 10,
                step: 1
            }).each(function() {
                var opt = $(this).data().uiSlider.options;
                var vals = opt.max - opt.min;
                for (var i = 0; i <= vals; i++) {
                    var val = (i == 0) ? 100 : (i + 1) * 100;
                    var el = $('<label>' + val + '</label>').css('left', (i / vals * 100) + '%');
                    $("#slider").append(el);
                }
            });

            $('#slider1').slider({
                slide: slide,
                start: start,
                stop: stop1,
                value: 0,
                min: 1,
                max: 4,
                step: 0.5
            }).each(function() {
                var opt = $(this).data().uiSlider.options;
                var vals = (opt.max - opt.min) * 2;
                for (var i = 0; i <= vals; i++) {
                    var val = (i == 0) ? 1 : (i + 2) * 0.5;
                    var el = $('<label>' + val + '</label>').css('left', (i / vals * 100) + '%');
                    $("#slider1").append(el);
                }
            });
        </script>
        <script>
            function draw_chart() {
                opening_stock = 250;
                closing_stock = monthlysale * monthly_inv;
                purchase = closing_stock + monthlysale - opening_stock;
                if (purchase < 0) {
                    purchase = 0;
                }
                $('#opening_stock').html(opening_stock);
                $('#monthlysale').html(monthlysale);
                $('#purchase').html(purchase);
                $('#closing_stock').html(closing_stock);
                $('#monthly_inv').html(monthly_inv);
                //Better to construct options first and then pass it as a parameter
                var tooltipData = [opening_stock, purchase, monthlysale, closing_stock];
                var options = {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light2",
                    title: {
                        text: ""
                    },
                    axisY: {
                        title: "",
                        suffix: "",
                        minimum: 0,
                        maximum: opening_stock + purchase,
                        interval: 250,
                        includeZero: false
                    },
                    data: [{
                        type: "rangeColumn",
                        toolTipContent: "<b>{label} : {tipdata}",
                        dataPoints: [{
                            x: 0,
                            y: [0, opening_stock],
                            label: 'Opening Stock',
                            tipdata: opening_stock
                        }, {
                            x: 1,
                            y: [opening_stock, opening_stock + purchase],
                            label: 'Purchase',
                            tipdata: purchase
                        }, {
                            x: 2,
                            y: [opening_stock + purchase - monthlysale, opening_stock + purchase],
                            label: 'Sales',
                            tipdata: monthlysale
                        }, {
                            x: 3,
                            y: [0, closing_stock],
                            label: 'Closing Stock',
                            tipdata: closing_stock
                        }]
                    }]
                };

                $("#chartContainer").CanvasJSChart(options);
            }
            window.onload = function() {
                draw_chart();
            }
        </script>

</body>

</html>
@stop
