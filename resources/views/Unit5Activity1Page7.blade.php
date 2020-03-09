<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Breakfast Cereal Company</title>
    <link rel="stylesheet" href="Unit5Activity1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit5Activity1/css/fontawesome.css">
    <link rel="stylesheet" href="Unit5Activity1/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit5Activity1/css/style.css">
    <link rel="stylesheet" href="Unit5Activity1/css/introjs.css">
    <link rel="stylesheet" href="Unit5Activity1/fonts.css">
    <link rel="stylesheet" href="Unit5Activity1/css/sweetalert.css">
</head>

<body class="newbg">
    <section class="invoice">
        <div class="invoice-content">
            <div class="container">
                <div class="showsolution">
                    <input type="button" class="solution" value="Show Solution" data-toggle="modal" data-target="#exampleModal22" />
                </div>
                <div class="invoice-content">
                    <p>Now customer has placed an order. Order is as below</p>
                </div>
                <table class="table table-striped table_data">
                    <thead>
                        <tr>
                            <th scope="col">S. No</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="Unit5Activity1/images/cookie3.png">
                                <span>Brand YYY</span></td>
                            <td>350 units </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img src="Unit5Activity1/images/aaata.png">
                                <span>Atta AKR</span></td>
                            <td>30 units </td>
                        </tr>
                    </tbody>
                </table>
                <div class="second-question mb-3">
                    <h4>You have to generate a picklist.</h4>
                    <h4>PackFoods is very particular that FEFO is followed (First Expiry First Out). Which will you pick? Following is your available stock
                    </h4>

                </div>
                <table class="table table-striped table_data">
                    <thead>
                        <tr>
                            <th scope="col">S. No</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Batch Number</th>
                            <th scope="col">Manufacturing Date</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Your Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="answer1">
                            <th scope="row">1</th>
                            <td><img src="Unit5Activity1/images/cookie1.png">
                                <span>Brand ZZZ</span></td>
                            </td>
                            <td>100 units </td>
                            <td>ZYTTS </td>
                            <td>01-01-2020 </td>
                            <td>31-03-2020</td>
                            <td scope="col" class="answer-quntity">
                                <input type="text" class="answer1 quntitytext" name="answer1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity">
                            </td>
                        </tr>
                        <tr id="answer2">
                            <th scope="row">2</th>
                            <td><img src="Unit5Activity1/images/cookie3.png">
                                <span>Brand YYY</span></td>
                            </td>
                            <td>200 units </td>
                            <td>ZYTKK </td>
                            <td>01-03-2020 </td>
                            <td>31-05-2020</td>
                            <td scope="col" class="answer-quntity">
                                <input type="text" name="answer2" class="answer2 quntitytext" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity">
                            </td>
                        </tr>
                        <tr id="answer3">
                            <th scope="row">3</th>
                            <td><img src="Unit5Activity1/images/cookie3.png">
                                <span>Brand YYY</span></td>
                            </td>
                            <td>300 units </td>
                            <td>ZYTOP </td>
                            <td>01-02-2020 </td>
                            <td>01-05-2020</td>
                            <td scope="col" class="answer-quntity">
                                <input type="text" name="answer3" class="answer3 quntitytext" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity ">
                            </td>
                        </tr>
                        <tr id="answer4 ">
                            <th scope="row ">4</th>
                            <td><img src="Unit5Activity1/images/aaata.png">
                                <span>Atta AKR</span></td>
                            <td>50 units </td>
                            <td>KYUPO </td>
                            <td>01-02-2020 </td>
                            <td>30-06-2020</td>
                            <td scope="col " class="answer-quntity">
                                <input type="text " name="answer4" class="answer4 quntitytext" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity ">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="getstarted"><a href="javascript:void(0);" class="submit-btn" Onclick="Activity();">Submit</a></div>

            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg showinganw" role="document">
            <div class="modal-content">
                <div class="modal-body solutionimage">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="Unit5Activity1/images/screen7.jpg">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="Unit5Activity1/js/jquery.min.js" type="text/javascript"></script>
<script src="Unit5Activity1/js/popper.min.js" type="text/javascript"></script>
<script src="Unit5Activity1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Unit5Activity1/js/sweetalert.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function Activity() {
        var str1 = $(".answer1").val();
        var str2 = $(".answer2").val();
        var str3 = $(".answer3").val();
        var str4 = $(".answer4").val();
        if (str1 != '' || str2 != '' || str3 != '' || str4 != '') {
            if (str1 == '' && str2 == 50 && str3 == 300 && str4 == 30) {
                swal({
                    title: "Activity Completed",
                    icon: "success",
                    button: "Go to Home Page",
                }).then((value) => {
                    location.href = '/SidebarLearningPage';
                });
            } else {
                swal({
                    title: "Retry",
                    icon: "error",
                    button: "Retry",
                    className: "red-bg",
                });
                $(".answer1").val('');
                $(".answer2").val('');
                $(".answer3").val('');
                $(".answer4").val('');
            }
        } else {
            swal({
                title: "Please select your answer",
                button: "OK",
                className: "red-bg",
            });

        }
    };
</script>

</html>