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
</head>

<body class="newbg2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="kitchen_section">
                    <h2>Q2. Stock your kitchen shelf to feed a family of 4 for 2 days ?</h2>

                    <ul>
                        <h4>Instructions :</h4>
                        <li class="text-left">A. <span class="boldcontentcolor">1 apple</span> per person per day</li>
                        <li class="text-left">B. <span class="boldcontentcolor">0.5 Kg atta</span> per family per day</li>
                        <li class="text-left">C. <span class="boldcontentcolor">1 chocolate</span> bar per person every 2 days</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="kitchenselect">
                    <div class="apple">
                        <img src="Unit4Activity1/images/apple.png" />
                    </div>
                    <input type="text" value="0" name="count1" Onclick="Inc_dec_1('enter');" id="activity1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="applefield" />
                    <button class="applebutton  video-game-button" Onclick="Inc_dec_1('dec');"><i class="fas fa-minus"></i></button>
                    <button class="applebutton  video-game-button-green" Onclick="Inc_dec_1('inc');"><i class="fas fa-plus"></i></button>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="kitchenselect">
                    <div class="apple">
                        <img src="Unit4Activity1/images/patta.png" />
                    </div>
                    <input type="text" value="0.5" name="count2" Onclick="Inc_dec_2('enter');" class="applefield" id="activity2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                    <button class="applebutton video-game-button" Onclick="Inc_dec_2('dec');"><i class="fas fa-minus"></i></button>
                    <button class="applebutton video-game-button-green" Onclick="Inc_dec_2('inc');"><i class="fas fa-plus"></i></button>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="kitchenselect">
                    <div class="apple">
                        <img src="Unit4Activity1/images/kitkat.png" />
                    </div>
                    <input type="text" value="0" name="count3" id="activity3" Onclick="Inc_dec_3('enter');" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="applefield" />
                    <button class="applebutton video-game-button" Onclick="Inc_dec_3('dec');"><i class="fas fa-minus"></i></button>
                    <button class="applebutton video-game-button-green" Onclick="Inc_dec_3('inc');"><i class="fas fa-plus"></i></button>
                </div>
            </div>

        </div>
        <div class="submit_btn1">
            <input type="button" class="submit1" value="SUBMIT" Onclick="Activity();" />
        </div>
        <button id = "back" style="color: white; float: left; background-color: red;" class="btn btn-primary btn-lg"> Back</button>
        <button id = "next" style="color: white; float: right; background-color: red;" class="btn btn-primary btn-lg"> Next</button>
    </div>
    <script type="text/javascript">
          $(document).on('click', '#next', function(){
            window.location = "{{url()}}/Unit4Activity1Act3";
          });
          $(document).on('click', '#back', function(){
            window.location = "{{url()}}/Unit4Activity1Page1";
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
    <script type="text/javascript">
        $(document).ready(function() {
            $(".drag-left div img").droppable({
                drop: function(event, ui) {
                    $(this).parent().trigger('click');
                }
            });
            $('.person img').draggable();
            $("#close").click(function() {
                $(".instruction_but").hide(1000);
            });
            $("#play").click(function() {
                $(".levelcontent").show(1000);
                $(".instruction").hide(1000);
                $('.remainig-data,.level').css('visibility', 'visible');
            });
            //$("#start").modal('show');
            restart_activity();
        });

        function Inc_dec_1(type) {
            var act = $("#activity1").val();
            if (type == 'inc') {
                var fianl = parseFloat(act) + 1;
            } else if (type == 'dec') {
                if (act > 0) {
                    var fianl = parseFloat(act) - 1;
                } else {
                    var fianl = act;
                }
            } else {
                var fianl = act;
            }
            $("#activity1").val(fianl);
        }

        function Inc_dec_2(type) {
            var act = parseFloat($("#activity2").val());
            if (type == 'inc') {
                var fianl = parseFloat(act) + parseFloat(0.5);
            } else if (type == 'dec') {
                if (parseFloat(act) > parseFloat(0.5)) {
                    var fianl = parseFloat(act) - parseFloat(0.5);
                } else {
                    var fianl = act;
                }
            } else {
                var fianl = act;
            }
            $("#activity2").val(fianl);
        }

        function Inc_dec_3(type) {
            var act = $("#activity3").val();
            if (type == 'inc') {
                var fianl = parseFloat(act) + 1;
            } else if (type == 'dec') {
                if (act > 0) {
                    var fianl = parseFloat(act) - 1;
                } else {
                    var fianl = act;
                }
            } else {
                var fianl = act;
            }
            $("#activity3").val(fianl);
        }

        function Activity() {
            var act1 = $("#activity1").val();
            var act2 = parseFloat($("#activity2").val());
            var act3 = $("#activity3").val();
            if (act1 == 8 && act2 == 1 && act3 == 4) {
                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Go to Next Level",
                }).then((value) => {
                    location.href = '{{url()}}/Unit4Activity1Act3';
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