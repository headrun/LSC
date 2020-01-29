@extends('layout.sidebar1')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Activity8</title>
    <link rel="stylesheet" href="Unit4Activity1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit4Activity1/css/fontawesome.css">
    <link rel="stylesheet" href="Unit4Activity1/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit4Activity1/css/style.css">
    <link rel="stylesheet" href="Unit4Activity1/css/introjs.css">
    <link rel="stylesheet" href="Unit4Activity1/fonts.css">
    <link rel="stylesheet" href="Unit4Activity1/css/jquery-ui.css">

    <style>
        #slider label {
            position: absolute;
            width: 20px;
            margin-left: -10px;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-family: 'Montserrat-Light';
        }
        
        #slider {
            width: 60%;
            margin: 2em auto;
        }
    </style>
</head>

<body class="newbg2">
    <div class="container">
        <div class="question3">
            <div class="kitchen_section">
                <h2>Q3. How much should be the total inventory ?</h2>

                <ul>
                    <li>Supermarket wants to stock rice to serve <span class="boldcontentcolor">2 day</span> demand.</li>
                    <li>20 people walk in every day. 50% people buy <span class="boldcontentcolor">0.5 kg</span> rice.</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="kitchenselect1">
                        <div id="slider"></div>
                        <input type="hidden" id="activity" value="0" />
                    </div>
                </div>
            </div>
        </div>

        <div class="submit_btn1">
            <button class="submit1" Onclick="Activity();">Submit</button>
        </div>
        <button id = "back" style="color: white; float: left; background-color: red;" class="btn btn-primary btn-lg"> Back</button>
        <button id = "next" style="color: white; float: right; background-color: red;" class="btn btn-primary btn-lg"> Next</button>
    </div>

    <script type="text/javascript">
          $(document).on('click', '#next', function(){
            window.location = "{{url()}}/Unit4Activity1Act4";
          });
          $(document).on('click', '#back', function(){
            window.location = "{{url()}}/Unit4Activity1Act2";
          });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="Unit4Activity1/js/popper.min.js" type="text/javascript"></script>
    <script src="Unit4Activity1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Unit4Activity1/js/intro.js" type="text/javascript"></script>
    <script src="Unit4Activity1/js/jquery-ui.js"></script>
    <script src="Unit4Activity1/js/activity.js"></script>
    <script src="Unit4Activity1/js/bootbox.min.js"></script>
    <script src="Unit4Activity1/js/sweetalert.min.js"></script>
    <script>
        var sliding = false;

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
            //console.log(ui.value);
            //sliding ? console.log('I slid.') : console.log('I clicked.');
            $("#activity").val(ui.value);
            Activity();
            sliding = false;
        };
        $('#slider').slider({
            slide: slide,
            start: start,
            stop: stop,
            value: 0,
            min: 0,
            max: 8,
            step: 1
        }).each(function() {
            var opt = $(this).data().uiSlider.options;
            var vals = opt.max - opt.min;
            for (var i = 0; i <= vals; i++) {
                var incr = (i == 0) ? 0 : i;
                var kg = (i == vals) ? '' : '';
                var el = $('<label>' + (i + incr) + kg + '</label>').css('left', (i / vals * 100) + '%');
                $("#slider").append(el);
            }
        });

        function Activity() {
            var act = $("#activity").val();
            if (act == 5) {
                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Go to Next Level",
                }).then((value) => {
                    location.href = '{{url()}}/Unit4Activity1Act4';
                });
            } else {

                swal({
                    title: "Fail",
                    icon: "error",
                    button: "Retry",
                    className: "red-bg"
                }).then((value) => {
                    location.reload();
                });
            }
        }
    </script>
</body>

</html>
@stop