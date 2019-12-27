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
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
 h1, h2 {
      color: #792877;
    font-size: 24px;
    line-height: 1.3333;
    font-weight: bold;
    /*background-color: #f1f1f1;*/
}
 
 .card {
   background-color: white;
   width: 86%;
   margin: 0 auto;
   float: none;
   margin-bottom: 10px;
   padding: 20px;
      padding: 20px;
   border: 10px solid rgba(0,0,0,0.2);
   border-radius: 10px;
 }
 .quiz-choice {
   background-color: #baacd8;
 }
 .header_area {
   background-color: #7f5fc6;
 }
 #submit {
 font-size: 18px;
 font-family: 'Varela Round', sans-serif;
 margin: 5px;
 color: white;
 background-color: #7d929d;
 border: none;
 border-radius: 20px;
 padding: 10px;
 width: 200px;
}

#submit:hover {
 cursor: pointer;
 /*background-color: #E6772D;*/
 background-color: #7f60c6;
 color: white;
}
p{
font-family: 'Lora', serif;
color: #333333;
font-size: 19px;
}
</style>

</head>

    <body style="background-color: #f1f1f1;">
    <div class="container">
     <h1 style="text-align: center;font-family: monospace;">THEORY</h1>
     <div class="card">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 col-sm-12" style="font-size:22px;color: #7d929d;">
                <h1 style="font-family: monospace;">Social Module</h1><br>
                <p>The first social maps date from the early 20th century. A recent example is the mapping of the residences of U.S. Facebook users and their social links.<br><br>

                In marketing a social map is a visualized analysis of a digital identity of a person, brand or company. A social map shows exactly where a digital identity is created, formed or discussed and sets each element in context and proportions.<br><br>

                These social map created an intense discussion about digital reputation and digital identities. For companies a so-called Corporate Social Map is still very new and an unusual methodology, but also very effective and meaningful.</p><br>
            </div>

        </div>
    </div>
  </div></div>
    </body>

<script type="text/javascript">
  $(document).on('click', '#submit', function(){
    window.location = "{{url()}}/Economics/Module1/Timer";
  });
</script>    
@stop
