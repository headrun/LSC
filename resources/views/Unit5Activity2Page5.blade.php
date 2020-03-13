@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>:: Activity 2 - Unit 5 ::</title>
    <link rel="stylesheet" href="Unit5Activity2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit5Activity2/css/fontawesome.css">
    <link rel="stylesheet" href="Unit5Activity2/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit5Activity2/css/style.css">
    <link rel="stylesheet" href="Unit5Activity2/css/introjs.css">
    <link rel="stylesheet" href="Unit5Activity2/fonts.css">
    <link rel="stylesheet" href="Unit5Activity2/css/sweetalert.css">
    <script src="Unit5Activity2/js/jquery.min.js" type="text/javascript"></script>

</head>

<body class="newbg">
    <br><br><br>
    <div class="activity_content">
        <div class="container">
            <br><br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <!-- <div class="vieworder">
                        <input type="button" class="order_view" value="Show Stock Table" data-toggle="modal" data-target="#stocktable" />
                    </div> -->
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="showsolution" id="showslutn" style="display: none;">
                        <input type="button" class="solution" value="Show Solution" data-toggle="modal" data-target="#exampleModal22" />
                    </div>
                </div>
            </div>

            <div class="tablepicking">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="codetable">
                            <p class="activity1">Stock Table</p>
                            <table class="table table-striped table-bordered modelbackground">
                                <thead>
                                    <tr>
                                        <th scope="col">Location Code</th>
                                        <th scope="col">Product Code</th>
                                        <th scope="col">Product Description</th>
                                        <th scope="col">Quantity in Inventory</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th rowspan="6">R101</th>
                                        <td>B1T1-S</td>
                                        <td>Brand 1 Type 1 Size S</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>B1T1-M</td>
                                        <td>Brand 1 Type 1 Size M</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>B1T1-L</td>
                                        <td>Brand 1 Type 1 Size L</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>B1T2-S</td>
                                        <td>Brand 1 Type 2 Size S</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>B1T2-M</td>
                                        <td>Brand 1 Type 2 Size M</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>B1T2-L</td>
                                        <td>Brand 1 Type 2 Size L</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">R102</td>
                                        <td>B2T1-S</td>
                                        <td>Brand 2 Type 1 Size S</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>B2T1-M</td>
                                        <td>Brand 2 Type 1 Size M</td>
                                        <td>75</td>
                                    </tr>
                                    <tr>
                                        <td>B2T1-L</td>
                                        <td>Brand 2 Type 1 Size L</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>R202</td>
                                        <td>B3T2-L</td>
                                        <td>Brand 3 Type 2 Size L</td>
                                        <td>50</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="codetable">
                            <p class="activity1">Order picking</p>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Number</th>
                                        <th scope="col">Product Code</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Pick Location</th>
                                        <th scope="col">Pick Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>OD01</th>
                                        <td>B1T1-S</td>
                                        <td>1</td>
                                        <td><input type="text" rel="R101" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="1" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD02</th>
                                        <td>B1T2-S</td>
                                        <td>5</td>
                                        <td><input type="text" rel="R101" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="5" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD03</th>
                                        <td>B2T1-L</td>
                                        <td>5</td>
                                        <td><input type="text" rel="R102" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="5" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD04</th>
                                        <td>B2T1-M</td>
                                        <td>8</td>
                                        <td><input type="text" rel="R102" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="8" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD05</th>
                                        <td>B1T1-L</td>
                                        <td>10</td>
                                        <td><input type="text" rel="R101" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="10" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD06</th>
                                        <td>B1T1-S</td>
                                        <td>3</td>
                                        <td><input type="text" rel="R101" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="3" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD07</th>
                                        <td>B1T1-L</td>
                                        <td>10</td>
                                        <td><input type="text" rel="R101" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="10" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD08</th>
                                        <td>B2T1-M</td>
                                        <td>5</td>
                                        <td><input type="text" rel="R102" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="5" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD09</th>
                                        <td>B1T2-L</td>
                                        <td>10</td>
                                        <td><input type="text" rel="R101" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="10" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                    <tr>
                                        <th>OD10</th>
                                        <td>B3T2-L</td>
                                        <td>4</td>
                                        <td><input type="text" rel="R202" class="picklocation" placeholder="Enter Location" /></td>
                                        <td><input type="text" rel="4" class="picklocation" placeholder="Enter Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="getstarted"><a href="javascript:void(0);" class="submit-btn" Onclick="Activity();">Submit</a></div>

        </div>
    </div>


    <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg showinganw" role="document">
            <div class="modal-content">
                <div class="modal-body solutionimage">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <img src="Unit5Activity2/images/stocktable.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="stocktable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg showinganw" role="document">
            <div class="modal-content">
                <div class="modal-body solutionimage">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <div class="codetable">
                        <table class="table table-striped table-bordered modelbackground">
                            <thead>
                                <tr>
                                    <th scope="col">Location Code</th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Product Description</th>
                                    <th scope="col">Quantity in Inventory</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th rowspan="8">R101</th>
                                    <td>B1T1-S</td>
                                    <td>Brand 1 Type 1 Size S</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>B1T1-M</td>
                                    <td>Brand 1 Type 1 Size M</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>B1T1-L</td>
                                    <td>Brand 1 Type 1 Size L</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>B1T1-XL</td>
                                    <td>Brand 1 Type 1 Size XL</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>B1T2-S</td>
                                    <td>Brand 1 Type 2 Size S</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>B1T2-M</td>
                                    <td>Brand 1 Type 2 Size M</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>B1T2-L</td>
                                    <td>Brand 1 Type 2 Size L</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>B1T2-XL</td>
                                    <td>Brand 1 Type 2 Size XL</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">R102</td>
                                    <td>B2T1-S</td>
                                    <td>Brand 2 Type 1 Size S</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>B2T1-M</td>
                                    <td>Brand 2 Type 1 Size M</td>
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <td>B2T1-L</td>
                                    <td>Brand 2 Type 1 Size L</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>R201</td>
                                    <td>B2T1-XL</td>
                                    <td>Brand 2 Type 1 Size XL</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>R202</td>
                                    <td>B3T2-L</td>
                                    <td>Brand 3 Type 2 Size L</td>
                                    <td>50</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>

<script src="Unit5Activity2/js/popper.min.js" type="text/javascript"></script>
<script src="Unit5Activity2/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Unit5Activity2/js/sweetalert.min.js " type="text/javascript"></script>

<script>
    function Activity() {
        var num = 0;
        var check = 0;
        $("td input").each(function() {
            var qns = $(this).val();
            var ans = $(this).attr('rel');
            if (qns != '') {
                if (qns == ans) {
                    num++;
                    $(this).removeClass('showerr');
                } else {
                    $(this).addClass('showerr');
                }
                check++;
            } else {
                $(this).removeClass('showerr');
            }
        });
        if (check == 0) {
            swal({
                title: "Please Enter Location and Quantity",
                button: "OK",
                className: "red-bg",

            });
        } else {
            if (num == 30) {

                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Go to Next Level",
                }).then((value) => {
                    location.href = '/Unit5Activity2Page6';
                });
            } else {
                swal({
                    title: "Retry",
                    icon: "error",
                    button: "Retry",
                    className: "red-bg",
                });
            }
        }
    }
</script>
<!-- <script type="text/javascript">
    function Activity() {
        var a = $("input[type='checkbox']:checked").map(function() {
            return $(this).val();
        }).get();
        var b = ["1", "2", "3", "4", "5"];
        if (a.toString() == b.toString()) {
            swal({
                title: "Congratulations",
                icon: "success",
                button: "Go to Next Level",
            }).then((value) => {
                location.href = 'screen6.html';
            });
        } else {
            if (a.length > 0) {
                swal({
                    title: "Retry",
                    icon: "error",
                    button: "Retry",
                    className: "red-bg",
                });

            } else {
                swal({
                    title: "Please select products",
                    button: "OK",
                    className: "red-bg",
                });
            }
        }
    }
</script> -->

</html>
@stop