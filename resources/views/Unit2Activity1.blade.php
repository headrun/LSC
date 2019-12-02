<!DOCTYPE html>
<html style="">
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<iframe src="https://presentience.in/clients/activity/v5/" style="width: 100%; height: -webkit-fill-available;overflow-y:hidden;">
</iframe>
<button id = "module" style="color: white; float: right; background-color: red;" class="btn btn-primary btn-lg"> Next</button>
</body>
</html>

<script type="text/javascript">
$(document).on('click', '#module', function(){
    $.ajax({
          url : "{{url()}}/quick/goToTimer",
          type : "POST",
          // data : { 'getuser' : user,'getpassword' : password },
          dataType : 'json',
          success: function(response) {
            console.log('success');
            window.location = "{{url()}}/Unit2Activity2";
          }
    });
});
</script>
