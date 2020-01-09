<html style="width: 98%;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Angel Nguyen">
  <meta name="description" content="An eLearning app for Hand-Eye co-ordination">
  <meta name="keywords" content="elearning, education, hand, eye, coordination, hands4eyes">
  <!-- <link rel="stylesheet" type="text/css" href="main.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <title>H4E Quiz</title>
  <!-- <link rel="stylesheet" href="quiz.css"> -->
  <!-- <script src="quiz.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{url()}}/css/averagequestion.css">
  </head>
<!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <h2 style="color: white;"><a href="{{url()}}/Subjects" style="color: white;">Viveka Techno School</a><span style="margin-left: 500px;color: white;">Ramesh</span></h2>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a href="{{url()}}/login" class="primary_btn">Log Out</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
<!-- ********************************************body************************************************ -->
<body>
    <<!-- a href='index.html'><button type="button" name="home" id='btn-home'><i class='fa fa-home fa-2x'></i></button></a> -->
      <h1 style = "margin-top:60px;">QUIZ</h1>
      <div class="card">
    <div class="container">
    <div class="row" style="margin-top: 40px;margin-left: 10%">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="color: white;">
        <div id="question-one" class="quiz-ans-container" style="padding-bottom: 63px;    padding-left: 0px;margin-right: 20px;">
        <h2 style="text-align: -webkit-left;"><span style="margin-left: -52px;">Q2.</span> Economice module 2 next question</h2>
        </div>
      </div>
      <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
        <img src="q2.jpg" width="230px" height="200px" alt="Image" style="margin-left: 20px;margin-top: 4%;">
      </div> -->
    </div>
    <div class="row" style="margin-left: 8%; margin-top: -50px;">
      <div class="col-md-12 col-sm-12">
        <div class="quiz-choice wrong-q1" style="margin-left: 80px;">
        <img src="{{url()}}/images/module1/img1.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;color:#7d929d;"> Suresh 4.5 Minutes</p>
        </div>
        <div class="quiz-choice correct-q1" style="margin-left: 80px;">
        <img src="{{url()}}/images/module1/img2.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;color:#7d929d;"> Ramesh 4 Minutes</p>
        </div>
        <div class="quiz-choice wrong-q1" style="margin-left: 80px;">
        <img src="{{url()}}/images/module1/img3.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;color:#7d929d;"> Suresh 10 Minutes</p>
        </div>
        <div class="quiz-choice wrong-q1" style="margin-left: 80px;">
        <img src="{{url()}}/images/module1/img7.jpg" width="100px" height="150px" alt="Image" style="border-radius:15px;">
        <p style="padding-top: 0px;color:#7d929d;"> Ramesh and Suresh reach together in 4 minutes</p>
        </div>
      </div>
    </div>
    <br>
      <div class="concept" align="right" style=" margin-top: 80px;  margin-right: 30px;" ><button >Go To Concept</button></div>
      </div>
    </div>

    


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
</body>


<!-- <**************************************footer***********************************************> -->
  
</html>
  
  <!--================End Footer Area =================-->

<script>
    $(document).ready(function(){
  jconfirm.defaults = {
    boxWidth: '30%',
    useBootstrap: false,
  };

  var score = 0;

  $('#question-two').hide();
  $('#concept').hide();
  $('#question-three').hide();
  $('#question-four').hide();
  $('#question-five').hide();
  $('#quiz-result').hide();

  $('.correct-q1').click(function(){
    score++
    console.log(score);
    $.confirm({
        title: 'Correct answer!',
        content: 'Congratulations',
        type: 'green',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: "It's  Correct",
                btnClass: 'btn-green',
                // action: "https://www.w3schools.com/w3css/w3css_icons.asp"
                action: function(){
                  // $('#concept').show();
                  // $('#question-one').hide();
                  
                }
            },
        }
    });
  });

  

  $('.wrong-q1').click(function(){
    $.confirm({
        title: 'Wrong Answer!',
        content: "Please choose correct Answer",
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Try Again',
                btnClass: 'btn-red',
            },
        }
    });
  });

  // End Quiz JS

});
</script>
<!-- for hint and show answer -->
<!-- <script >
  //uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function() {
  var d = document,
    accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
    setAria,
    setAccordionAria,
    switchAccordion,
    touchSupported = ('ontouchstart' in window),
    pointerSupported = ('pointerdown' in window);

  skipClickDelay = function(e) {
    e.preventDefault();
    e.target.click();
  }

  setAriaAttr = function(el, ariaType, newProperty) {
    el.setAttribute(ariaType, newProperty);
  };
  setAccordionAria = function(el1, el2, expanded) {
    switch (expanded) {
      case "true":
        setAriaAttr(el1, 'aria-expanded', 'true');
        setAriaAttr(el2, 'aria-hidden', 'false');
        break;
      case "false":
        setAriaAttr(el1, 'aria-expanded', 'false');
        setAriaAttr(el2, 'aria-hidden', 'true');
        break;
      default:
        break;
    }
  };
  //function
  switchAccordion = function(e) {
    e.preventDefault();
    var thisAnswer = e.target.parentNode.nextElementSibling;
    var thisQuestion = e.target;
    if (thisAnswer.classList.contains('is-collapsed')) {
      setAccordionAria(thisQuestion, thisAnswer, 'true');
    } else {
      setAccordionAria(thisQuestion, thisAnswer, 'false');
    }
    thisQuestion.classList.toggle('is-collapsed');
    thisQuestion.classList.toggle('is-expanded');
    thisAnswer.classList.toggle('is-collapsed');
    thisAnswer.classList.toggle('is-expanded');

    thisAnswer.classList.toggle('animateIn');
  };
  for (var i = 0, len = accordionToggles.length; i < len; i++) {
    if (touchSupported) {
      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
    }
    if (pointerSupported) {
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();
</script> -->

<script type="text/javascript">
  $(document).on('click', '.concept', function(){
    window.location = "{{url()}}/Economics/Module2/next_question/Concept";
  });
</script>
