@extends('layout.sidebar1')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<style>
#image{
  background-repeat: no-repeat;
  background-position: 50% -20%;
  background-size: 46%;
}
bel.btn span {
  font-size: 1.5em ;
}

label input[type="radio"] ~ i.fa.fa-circle-o{
    color: #c8c8c8;    display: inline;
}
label input[type="radio"] ~ i.fa.fa-dot-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
    color: #7AA3CC;    display: inline;
}
label:hover input[type="radio"] ~ i.fa {
color: #7AA3CC;
}

label input[type="checkbox"] ~ i.fa.fa-square-o{
    color: #c8c8c8;    display: inline;
}
label input[type="checkbox"] ~ i.fa.fa-check-square-o{
    display: none;
}
label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
    display: none;
}
label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
    color: #7AA3CC;    display: inline;
}
label:hover input[type="checkbox"] ~ i.fa {
color: #7AA3CC;
}

div[data-toggle="buttons"] label.active{
    color: #7AA3CC;
}

div[data-toggle="buttons"] label {
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: normal;
line-height: 2em;
text-align: left;
white-space: nowrap;
vertical-align: top;
cursor: pointer;
background-color: none;
border: 0px solid 
#c8c8c8;
border-radius: 3px;
color: #c8c8c8;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}

div[data-toggle="buttons"] label:hover {
color: #7AA3CC;
}

div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
-webkit-box-shadow: none;
box-shadow: none;
}
</style>

</head>
<body id="image">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9"></div>
      <div class="col-lg-3 col-md-3">
	<br><b>Select Highway Route</b>
          <br>
          <div class="btn-group btn-group-vertical" data-toggle="buttons">
            <label class="btn">
              <input type="radio" name='gender' value="Golden"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Golden Quadrilateral</span>
            </label>
            <label class="btn">
              <input type="radio" name='gender' value="N_S"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> North-South Corridor</span>
            </label>
            <label class="btn">
              <input type="radio" name='gender' value="E_W"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> East-west Corridor</span>
            </label>
          </div>       
      </div>
    </div>
  </div>
</body>

<script>
$(document).ready(function(){
	document.body.style.backgroundImage = "url('https://lh3.googleusercontent.com/-I1qJcdpxnNc/XaVWfuF2BwI/AAAAAAAABRY/1nH5H_Fr9N4IoUhF_iAr4Y7O1vlBlEtnwCK8BGAsYHg/s512/LSCRoads%2B%25284%2529.png')";
});

  $("input[type='radio']").on('change', function ()
  {
    var value = $("input[name='gender']:checked").val();
    //alert(value);
    if(value == "Golden")
    {
      document.body.style.backgroundImage = "url('https://lh3.googleusercontent.com/-20CIrv37pQk/XaVYIj3yoiI/AAAAAAAABR4/9uY4L6D8jm8Dy2FcxjR55-V00BiCPUjtgCK8BGAsYHg/s0/LSCRoads%2B%25283%2529%2B%25282%2529.png')";
    }
    if(value == "N_S"){
      document.body.style.backgroundImage = "url('https://lh3.googleusercontent.com/-2m2gXAzDFLU/XaVnZDj3x5I/AAAAAAAABTo/qDN5LoM2VuM4TVZ5zWHJJWwX5tvm7BFeACK8BGAsYHg/s512/LSCRoads%2B%25285%2529.png')";
    }
    if(value == "E_W"){
      document.body.style.backgroundImage = "url('https://lh3.googleusercontent.com/-34ixj1VoS2Q/XaVosb7qyrI/AAAAAAAABUE/85O0s0zD-ccWz7LO3IKz_16SDFcKkwZLgCK8BGAsYHg/s512/LSCRoads%2B%25286%2529.png')";
    }
  });
</script>
@stop

