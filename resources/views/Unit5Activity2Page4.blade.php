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
</head>

<body class="newbg">
    <div class="activity_content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="activity2">EmporioApparel decides to try 2 methods of picking.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="main-img-1">
                        <img src="Unit5Activity2/images/order.png">
                        <p>Order Picking</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="main-img-1">
                        <img src="Unit5Activity2/images/batch.png">
                        <p>Batch Picking</p>
                    </div>
                </div>
            </div>
            <!-- <p class="activity2 main-note"><span class="note">Note :</span> PackFoods has a major policy: Products expiring within 30 days will not be accepted into the warehouse</p> -->
            <div class="getstarted"><a href="/Unit5Activity2Page5">Let us Simulate Both</a></div>
        </div>
    </div>
</body>
<script src="Unit5Activity2/js/jquery.min.js" type="text/javascript"></script>
<script src="Unit5Activity2/js/popper.min.js" type="text/javascript"></script>
<script src="Unit5Activity2/js/bootstrap.min.js" type="text/javascript"></script>
<!-- <script src="js/intro.js" type="text/javascript"></script> -->

</html>
@stop