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
    <br><br><br>
<div class="activity_content">
    <div class="container">
        <div class="showsolution">
            <input type="button" class="solution" value="Show Solution" data-toggle="modal" data-target="#exampleModal22"/>
        </div>
        <div class="main-img-1">
            <img src="Unit5Activity1/images/warehouse-reached.png">
        </div>
        <p class="activity1">Truck has reached warehouse </p>
        <p class="activity2">You are starting the Goods Receipt process</p>
        <div class="quetions">
            <div class="quetions-content">
                <p>Which of the below information should you capture without fail?</p>
            </div>
            <div class="quetions-content">
                <ul>
                    <li>
                        <input type="checkbox" value="1" name="productcode" id="productcode">
                        <label for="productcode"> Product Code</label>
                    </li>
                    <li>
                        <input type="checkbox" value="2" name="productcode1" id="productcode1">
                        <label for="productcode1"> Product Quantity</label>
                    </li>
                    <li>
                        <input type="checkbox" value="3" name="productcode2" id="productcode2">
                        <label for="productcode2"> Batch Number</label>
                    </li>
                    <li>
                        <input type="checkbox" value="4" name="productcode3" id="productcode3">
                        <label for="productcode3">Manufacturing Date</label>
                    </li>
                    <li>
                        <input type="checkbox" value="5" name="productcode4" id="productcode4">
                        <label for="productcode4">Expiry Date</label>
                    </li>
                    <li>
                        <input type="checkbox" value="6" name="productcode5" id="productcode5">
                        <label for="productcode5"> Weight</label>
                    </li>
                    <li>
                        <input type="checkbox" value="7" name="productcode6" id="productcode6">
                        <label for="productcode6"> Product Colour</label>
                    </li>
                    <li>
                        <input type="checkbox" value="8" name="productcode7" id="productcode7">
                        <label for="productcode7"> Volume (Length, Breadth, Height)</label>
                    </li>
                    <li>
                        <input type="checkbox" value="9" name="productcode8" id="productcode8">
                        <label for="productcode8"> Packing material</label>
                    </li>
                </ul>
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
                <img src="Unit5Activity1/images/solution.jpg">
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
function Activity(){
	var a=$("input[type='checkbox']:checked").map(function(){return $(this).val();}).get();
	var b = ["1","2","3","4","5"];
	if(a.toString() == b.toString()){
		swal({
			title: "Congratulations",
			icon: "success",
			button: "Go to Next Level",
		}).then((value) => {
			location.href = '/Unit5Activity1Page6';
		});
	}else{
	    if(a.length > 0){
			swal({
				title: "Retry",
				icon: "error",
				button: "Retry",
				className: "red-bg",
			});
			
		}else{
			swal({
				title: "Please select products",
				button: "OK",
				className: "red-bg",
			});
		}
	}
}
</script>
</html>
@stop