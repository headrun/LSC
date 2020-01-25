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
        <div class="vegtable_section">
            <h2><span class="boldcontentcolor">1.5m</span> of dyed fabric is required to make <span class="boldcontentcolor">1 shirt.</span> Brand head of a clothing company decides to hold fabric for <span class="boldcontentcolor">10 days</span> of production.
            </h2>
            <div class="fabricimages">
                <img src="Unit4Activity2/images/fabric.png" alt="" class="fabricbox" />
                <img src="Unit4Activity2/images/right-arrow.png " alt=" " class="rightarrow" />
                <img src="Unit4Activity2/images/shirt.png " alt=" " class="fabricbox" />
            </div>
            <!-- <p>Per person consumption : <span class="boldcontentcolor ">250 gm.</span></p> -->
        </div>
        <div class="veg_sec2 ">
            <h3>For the varying production capacity per day, enter the fabric stock required (in metres) </h3>

            <div class="row justify-content-center">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <h2>
                            Daily Shirt Production (in units)
                        </h2>

                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <h2>Fabric stock(in m)</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <span>100</span>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <div class="middlearrow">
                        <img src="Unit4Activity2/images/arrow.png" alt=" " />
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <input type="text" class="boxtext" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="act1" placeholder="Enter Value">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <span>200</span>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <div class="middlearrow">
                        <img src="Unit4Activity2/images/arrow.png" alt=" " />
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <input type="text" class="boxtext" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="act2" placeholder="Enter Value">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <span>400</span>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <div class="middlearrow">
                        <img src="Unit4Activity2/images/arrow.png" alt=" " />
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="box">
                        <input type="text" class="boxtext" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="act3" placeholder="Enter Value">
                    </div>
                </div>
            </div>
        </div>
        <div class="submit_btn1">
            <input type="button" class="submit1" value="SUBMIT" Onclick="Activity();" />
        </div>
        
        <div class="showsolution">
            <input type="button" class="solution" value="Show Solution" data-toggle="modal" data-target="#exampleModal22" />
        </div>
        
        <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg showinganw" role="document">
            <div class="modal-content">
              <div class="modal-body solutionimage">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <img src="Unit4Activity2/images/anw1.jpg">
              </div>
            </div>
          </div>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js "></script>
    <script src="Unit4Activity2/js/popper.min.js " type="text/javascript "></script>
    <script src="Unit4Activity2/js/bootstrap.min.js " type="text/javascript "></script>
    <script src="Unit4Activity2/js/intro.js " type="text/javascript "></script>
    <script src="Unit4Activity2/js/jquery-ui.js "></script>
    <script src="Unit4Activity2/js/activity.js "></script>
    <script src="Unit4Activity2/js/bootbox.min.js "></script>
    <script src="Unit4Activity2/js/sweetalert.min.js "></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".boxtext").keyup(function() {
                var val = $(this).val();
                if (val != '') {
                    $(this).removeClass('errclass');
                }
            });
        });

        function Activity() {
            var act1 = $("#act1").val();
            var act1_1 = 1500;
            var act2 = $("#act2").val();
            var act2_1 = 3000;
            var act3 = $("#act3").val();
            var act3_1 = 6000;
            if (act1 == act1_1 && act2 == act2_1 && act3 == act3_1) {
                $("#act1").removeClass('errclass');
                $("#act2").removeClass('errclass');
                $("#act3").removeClass('errclass');
                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Go to Next Level",
                }).then((value) => {
                    location.href = 'Unit4Activity2/question2.html';
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
                if (act1 != '' && act2 != '' && act3 != '') {
                    swal({
                        title: "Fail",
                        icon: "error",
                        button: "Retry",
                        className: "red-bg"
                    });
                } else {
                    swal({
                        title: "Please enter all values",
                        button: "OK",
                        className: "red-bg"
                    });
                }
            }
        }
    </script>
</body>

</html> 