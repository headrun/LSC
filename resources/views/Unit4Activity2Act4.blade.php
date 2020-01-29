@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>:: Activity ::</title>
    <link rel="stylesheet" href="Unit4Activity2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit4Activity2/css/fontawesome.css">
    <link rel="stylesheet" href="Unit4Activity2/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit4Activity2/css/style.css">
    <link rel="stylesheet" href="Unit4Activity2/css/introjs.css">
    <link rel="stylesheet" href="Unit4Activity2/fonts.css">
    <link rel="stylesheet" href="Unit4Activity2/css/jquery-ui.css">

</head>

<body class="newbg2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="blackt-shirts">
                    <h2>A t-shirt manufacturing firm makes on black t-shirts with slogans or images. Firm makes plain black t-shirts and then prints on it to produce final product. Final products are sold online
                    </h2>

                </div>
                <div class="blacktshirtimage">
                    <img src="Unit4Activity2/images/blackshirt.svg" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="blacktshirtimage2">
                    <img src="Unit4Activity2/images/blackshirtone.svg" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="blackshirtinput">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Jan 1st inventory</h4>
                            <span class="btn-st btn-4">1000m</span>
                        </div>
                    </div>
                </div>
                <div class="blackshirtinput">
                    <h4>Enter Feb 1st inventory </h4>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <input type="text" placeholder="Enter Value" id="act1" class="blackfabric blackfab" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                        </div>
                    </div>
                </div>
                <div class="blackshirtinput">
                    <h4>Enter March 1st inventory </h4>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" placeholder="Enter Value" id="act2" class="blackfabric blackfab"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" placeholder="Enter Value" id="act3" class="blackfabric blackfab"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                    </div>
                </div>
                <div class="blackshirtinput">
                    <h4>Jan 1st inventory</h4>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <span>550</span>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <span>25</span>
                        </div>
                    </div>
                </div>
                <div class="blackshirtinput">
                    <h4>Enter April 1st inventory</h4>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" placeholder="Enter Value" id="act4" class="blackfabric blackfab" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" placeholder="Enter Value" id="act5" class="blackfabric blackfab"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                        </div>
                    </div>
                </div>
                <div class="blackshirtinput">
                    <input type="button" onclick="Activity();" value="submit" class="submit1">
                </div>
                
                <div class="showsolution">
            <input type="button" class="solution" value="Show Solution" data-toggle="modal" data-target="#exampleModal3" />
        </div>
        
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg showinganw" role="document">
            <div class="modal-content">
              <div class="modal-body solutionimage">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <img src="Unit4Activity2/images/anw4.jpg">
              </div>
            </div>
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
            window.location = "{{url()}}/Unit4Activity2Act3";
          });
    </script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="Unit4Activity2/js/popper.min.js" type="text/javascript"></script>
    <script src="Unit4Activity2/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Unit4Activity2/js/intro.js" type="text/javascript"></script>
    <script src="Unit4Activity2/js/jquery-ui.js"></script>
    <script src="Unit4Activity2/js/activity.js"></script>
    <script src="Unit4Activity2/js/bootbox.min.js"></script>
    <script src="Unit4Activity2/js/sweetalert.min.js "></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".blackfabric").keyup(function() {
                var val = $(this).val();
                if (val != '') {
                    $(this).removeClass('errclass');
                }
            });
        });

        function Activity() {
            var act1 = $("#act1").val();
            var act1_1 = 1000;
            var act2 = $("#act2").val();
            var act2_1 = 750;
            var act3 = $("#act3").val();
            var act3_1 = 250;
            var act4 = $("#act4").val();
            var act4_1 = 200;
            var act5 = $("#act5").val();
            var act5_1 = 225;
            if (act1 == act1_1 && act2 == act2_1 && act3 == act3_1 && act4 == act4_1 && act5 == act5_1) {
                $("#act1").removeClass('errclass');
                $("#act2").removeClass('errclass');
                $("#act3").removeClass('errclass');
                $("#act4").removeClass('errclass');
                $("#act5").removeClass('errclass');
                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Ok",
                });
            } else {
                if (act1 != act1_1) {
                    $("#act1").addClass('errclass');
                } else {
                    $("#act1").removeClass('errclass');
                }
                if (act2 != act2_1) {
                    $("#act2").addClass('errclass');
                } else {
                    $("#act2").removeClass('errclass');
                }
                if (act3 != act3_1) {
                    $("#act3").addClass('errclass');
                } else {
                    $("#act3").removeClass('errclass');
                }
                if (act4 != act4_1) {
                    $("#act4").addClass('errclass');
                } else {
                    $("#act4").removeClass('errclass');
                }
                if (act5 != act5_1) {
                    $("#act5").addClass('errclass');
                } else {
                    $("#act5").removeClass('errclass');
                }
                if (act1 != '' && act2 != '' && act3 != '' && act4 != '' && act5 != '') {
                    swal({
                        title: "Fail",
                        icon: "error",
                        button: "Retry",
                        className: "red-bg"
                    });
                } else {
                    swal({
                        title: "Please enter all months inventory",
                        button: "OK",
                        className: "red-bg"
                    });
                }
            }
        }
    </script>
</body>

</html>
@stop   