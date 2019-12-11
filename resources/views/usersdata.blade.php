@extends('layout.sidebar1')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
 <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:300&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<style>
  .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }
  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }
  .card-counter.primary{
    background-color: #007BFF;
    color: #FFF;
  }
  .card-counter.danger{
    background-color: #EF5350;
    color: #FFF;
  }
  .card-counter.success{
    background-color: #66BB6A;
    color: #FFF;
  }
  .card-counter.info{
    background-color: #26C6DA;
    color: #FFF;
  }
  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }
  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 22px;
    display: block;
  }
  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  .modal-content{
    top: 60px;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php if($users_data!=0){?>
        @foreach ($users_data as $key => $value)
        <div class="col-md-3">
          <div class="card-counter primary" onClick="get('{{ $value->id }}')" data-toggle="modal" data-target="#exampleModal">
            <span class="count-numbers">{{ $value->new_name }}</span>
            <?php if( $value->assessment_result1 == 0){?>
            <p class="count-name">Not Attempted</p>
            <?php }else if ($value->assessment_result1 <12){ ?>
              <p class="count-name">Fail : {{$value->assessment_result1}}/30</p>
            <?php }else{ ?>
              <p class="count-name">Pass : {{$value->assessment_result1}}/30</p>
              <?php }?>
          </div>
        </div>
        @endforeach
      <?php }?>
    </div>

    <div class="row text-center">
      <button onclick="home()" type="button" class="btn btn-success" style="margin: 20px;">Go To Home Page</button>
    </div>

    <!----- modal ----->
   <div class="modal fade" id="exampleModal" role="dialog" style="max-width: 500px;    margin-top: 30px;margin-left: 365px;">
      <div class="">
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <center><h4 class="modal-title">Result Page</h4></center>
          </div>
     <div class="modal-body">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-2" id="question_id">
              <!-- <p ></p> -->
            </div>
            <div class="col-md-4" id="result">
              <!-- <p ></p> -->
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <p style="display: none;">Testing</p>
          </div>
        </div>
      </div>
    </div>
    <!----- modal ends ------>
  </div>
</body>
</html>
<script>
  function get(id){
    var id = id;
    $.ajax({
          url : "{{URL::to('/modaldata')}}",
          type : "GET",
          data : { 'ID' : id},
          dataType : 'json',
          success: function(response) {
            console.log('success');
            var data = response;
            var i;
            var question = document.getElementById("question_id");
            var result = document.getElementById("result");
            question.innerHTML = '';
            result.innerHTML = '';
            if(data.useransw.length != 0){
              console.log(data.useransw);
              for (i=0;i<data.useransw.length;i++){
                var question_id = data.useransw[i].question_id;
                question.innerHTML += question_id+'<br>';
                var actual_answer = data.useransw[i].actual_answer;
                var user_answer = data.useransw[i].user_answer;
                if(actual_answer == user_answer){
                  result.innerHTML += '<span style="color:green">Correct</span><br>';
                }
                else{
                  result.innerHTML += '<span style="color:red">Wrong</span><br>';
                }
              }
            }
            else{
              document.getElementById("result").innerHTML = "<center>No tests was written by this student.</center>";
            }
          }
    })
  }

  function home() {
    window.location = "{{url()}}/SidebarResultPage";
  }
  
</script>
@stop