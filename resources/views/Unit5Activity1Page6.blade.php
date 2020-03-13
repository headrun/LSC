@extends('layout.sidebar2')
@section('content')
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
        <div class="invoice-fixed">
            <p>PackFoods has a major policy: Products expiring within 30 days will not be accepted into the warehouse</p>
        </div>
        <div class="invoice-content">
            <div class="container">
                <div class="showsolution" id="showslu" style="display: none;">
                    <input type="button" class="solution" value="Show Solution" data-toggle="modal" data-target="#exampleModal22" />
                </div>
                <!--<div class="invoice-content">-->
                <!--    <p>Reason: Expiry of cookie is within 30 days and hence it will not be accepted in the warehouse</p>-->
                <!--</div>-->
                <div class="second-question">
                    <h4 class="text-center"> Assume today is 10-03-2020. Will you inward all the products? If not, which will you reject? </h4>
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
                            <td scope="col" class="answer-radio">
                                <input type="radio" value="answer1" name="answer1" Onchange="Highlight('answer1');">
                            </td>
                        </tr>
                        <tr id="answer2">
                            <th scope="row">2</th>
                            <td><img src="Unit5Activity1/images/cookie3.png">
                                <span>Brand YYY</span></td>
                            <td>200 units </td>
                            <td>ZYTKK </td>
                            <td>01-03-2020 </td>
                            <td>31-05-2020</td>
                            <td scope="col" class="answer-radio">
                                <input type="radio" value="answer2" name="answer1" Onchange="Highlight('answer2');">
                            </td>
                        </tr>
                        <tr id="answer3">
                            <th scope="row">3</th>
                            <td><img src="Unit5Activity1/images/cookie3.png">
                                <span>Brand YYY</span></td>
                            <td>300 units </td>
                            <td>ZYTOP </td>
                            <td>01-02-2020 </td>
                            <td>01-05-2020</td>
                            <td scope="col" class="answer-radio">
                                <input type="radio" value="answer3" name="answer1" Onchange="Highlight('answer3');">
                            </td>
                        </tr>
                        <tr id="answer4">
                            <th scope="row">4</th>
                            <td><img src="Unit5Activity1/images/aaata.png">
                                <span>Atta AKR</span></td>
                            <td>50 units </td>
                            <td>KYUPO </td>
                            <td>01-02-2020 </td>
                            <td>30-06-2020</td>
                            <td scope="col" class="answer-radio">
                                <input type="radio" value="answer4" name="answer1" Onchange="Highlight('answer4');">
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
                    <img src="Unit5Activity1/images/invoice-answer.jpg">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="Unit5Activity1/js/jquery.min.js" type="text/javascript"></script>
<script src="Unit5Activity1/js/popper.min.js" type="text/javascript"></script>
<script src="Unit5Activity1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Unit5Activity1/js/sweetalert.min.js " type="text/javascript"></script>
<script type="text/javascript">
    function Highlight(id) {
        $("#answer1").removeClass('tr-right-answer');
        $("#answer2").removeClass('tr-right-answer');
        $("#answer3").removeClass('tr-right-answer');
        $("#answer4").removeClass('tr-right-answer');
        $("#" + id).addClass('tr-right-answer');
    }

    function Activity() {
        var val = $("input[type='radio']:checked").val();
        if (val == 'answer1' || val == 'answer2' || val == 'answer3' || val == 'answer4') {
            if (val == 'answer1') {
                swal({
                    title: "Congratulations",
                    icon: "success",
                    button: "Go to Next Level",
                }).then((value) => {
                    location.href = '/Unit5Activity1Page7';
                });
                $("#showslu").show();
            } else {
                swal({
                    title: "Retry",
                    icon: "error",
                    button: "Retry",
                    className: "red-bg",
                });
                $("#showslu").show();
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
@stop