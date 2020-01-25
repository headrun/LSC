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
        <div class="vegtable_section">
            <h2>Q1. Vegetable vendor sells tomatoes in a colony of 20 people ?</h2>
            <img src="Unit4Activity1/images/vegtables.png" alt="vegtable" />
            <p>Per person consumption : <span class="boldcontentcolor">250 gm.</span></p>
        </div>
        <div class="veg_sec2">
            <h3>Add tomatoes to her morning stock to satisfy full demand</h3>
            <div class="buttonrange">
                <!-- <button Onclick="Inc_dec('dec');"><i class="fas fa-minus"></i></button> -->
                <button Onclick="Inc_dec('dec');"><img src="Unit4Activity1/images/minus.png" /></button>
                <input type="text" value="0" id="activity1" value="0" Onchange="Inc_dec('enter');" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="count" class="rangefield" />
                <button Onclick="Inc_dec('inc');"><img src="Unit4Activity1/images/plus.png" /></button>
                <!-- <button Onclick="Inc_dec('inc');"><i class="fas fa-plus"></i></button> -->
            </div>
            <div class="submit_btn">
                <input type="button" class="submit" value="SUBMIT" Onclick='Activity_1();' />
            </div>
        </div>
    </div>
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
            restart_activity();
        });

        function Inc_dec(type) {
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

        function Activity_1() {
            var act = $("#activity1").val();
            if (act == 5) {

                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Go to Next Level",
                }).then((value) => {
                    location.href = 'Unit4Activity1/question2.html';
                });
            } else {

                swal({
                    title: "Fail",
                    icon: "error",
                    button: "Retry",
                    className: "red-bg",
                }).then((value) => {
                    location.reload();
                });
            }
        }
    </script>
</body>

</html>