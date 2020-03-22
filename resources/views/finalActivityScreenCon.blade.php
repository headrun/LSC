@extends('layout.sidebar2')
@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Congratulations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/finalActivity/css/normalize.min.css">
<link rel="stylesheet" href="/finalActivity/css/style4.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <div class="modal modal--congratulations">
	
        <div class="modal-top">


            <img class="modal-icon u-imgResponsive" src="/finalActivity/images/100daysui_100icon.png" alt="Trophy" />	
            <div class="modal-header">Congratulations</div>
            <div class="modal-subheader">Well done! You have successfully completed the assessment.</div>
			    								
        </div>
<div class="modal-bottom">
            <a  class="modal-btn u-btn u-btn--share" style="
    text-align: center;
    text-decoration: none;
" href="/SidebarAssessmentpage">HOME</a>
           
        </div>

    </div>
	
</div>
<!-- partial -->
  
</body>
</html>
@stop