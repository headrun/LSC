<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//*********************************** Default Route *************************//

/* Old Code */
Route::get('/demo', function(){
    return view('demo');
});

Route::group(array('prefix' => ''), function() {
    Route::get('/',"AuthenticationController@login");
    Route::get('/login',"AuthenticationController@login");
    Route::get('/signout',"AuthenticationController@signout");
    Route::any('/Subjects', "AuthenticationController@subjectsPage");
    Route::any('/Module', "AuthenticationController@modulePage");
    Route::any('/TrainingPage', "AuthenticationController@trainingPage");
    Route::any('/EconomicsTrainingPage', "AuthenticationController@economicsTrainingPage");
    Route::any('/Learn', "AuthenticationController@learn");  
    Route::any('/EconomicsLearn', "AuthenticationController@EconomicsLearn");
    Route::any('/Test', "AuthenticationController@test"); 
    Route::any('/EconomicsTest', "AuthenticationController@EconomicsTest");
    Route::any('/EconomicsModule', "AuthenticationController@economicsModulePage");
    Route::any('/EconomicsModule1', function(){return view('EconomicsModule1');});
    Route::any('/EconomicsModule2', function(){return view('EconomicsModule2');});
    Route::any('/PlanningPage', function(){return view('PlanningPage');});
    Route::any('/PlanningPageSlide2', function(){return view('PlanningPageSlide2');});
    Route::any('/PlanningPageSlide3', function(){return view('PlanningPageSlide3');});
    Route::any('/PlanningPageSlide4', function(){return view('PlanningPageSlide4');});
    Route::any('/PlanningPageSlide5', function(){return view('PlanningPageSlide5');});
    Route::any('/PlanningPageSlide6', function(){return view('PlanningPageSlide6');});
    Route::any('/PlanningPageSlide8', function(){return view('PlanningPageSlide8');});
    Route::any('/SocialModule', "AuthenticationController@SocialModulePage");
    Route::any('/SocialModulePage', "AuthenticationController@SocialModuleOut");
    Route::any('/Sample', "AuthenticationController@samplePage");
    Route::any('/Concept', "AuthenticationController@conceptPage");
    Route::any('/Timer', "AuthenticationController@timerPage");
    Route::any('/module1/next_question', function(){return view('averagequestion');});
    Route::any('/module1/AverageTimerConcept', function(){return view('averagetimer');});
    Route::any('/AverageConcept', function(){return view('averageconcept');});
    Route::any('/Module2/Sample', function(){return view('module2_sample');});
    Route::any('/Module2/Concept', function(){return view('module2_concept');});
    Route::any('/Module2/Timer', function(){return view('module2_timer');});
    Route::any('/Module3/Sample', function(){return view('module3_sample');});
    Route::any('/Module3/Concept', function(){return view('module3_concept');});
    Route::any('/Module3/Timer', function(){return view('module3_timer');});
    Route::any('/Module4/Sample', function(){return view('module4_sample');});
    Route::any('/Module4/Concept', function(){return view('module4_concept');});
    Route::any('/Module4/Timer', function(){return view('module4_timer');});
    Route::any('/Economics/Module1/Sample', function(){return view('economics_module1_sample');});
    Route::any('/Economics/Module1/Concept', function(){return view('economics_module1_concept');});
    Route::any('/Economics/Module1/Timer', function(){return view('economics_module1_timer');});
    Route::any('/Economics/Module1/next_question', function(){return view('economics_module1_nextQuestion');});
    Route::any('/Economics/Module1/next_question/Concept', function(){return view('economics_module1_nextQuestion_concept');});
    Route::any('/Economics/Module1/next_question/Timer', function(){return view('economics_module1_nextQuestion_timer');});

    Route::any('/Economics/Module2/Sample', function(){return view('economics_module2_sample');});

    Route::any('/Economics/Module2/Concept', function(){return view('economics_module2_concept');});

    Route::any('/Economics/Module2/Timer', function(){return view('economics_module2_timer');});

    Route::any('/Economics/Module2/next_question', function(){return view('economics_module2_nextQuestion');});

    Route::any('/Economics/Module2/next_question/Concept', function(){return view('economics_module2_nextQuestion_concept');});

    Route::any('/Economics/Module2/next_question/Timer', function(){return view('economics_module2_nextQuestion_timer');});

    Route::any('/Economics/Module3/Sample', function(){return view('economics_module3_sample');});
    Route::any('/Economics/Module3/Concept', function(){return view('economics_module3_concept');});
    Route::any('/Economics/Module3/Timer', function(){return view('economics_module3_timer');});

    Route::any('/Economics/Module4/Sample', function(){return view('economics_module4_sample');});
    Route::any('/Economics/Module4/Concept', function(){return view('economics_module4_concept');});
    Route::any('/Economics/Module4/Timer', function(){return view('economics_module4_timer');});
});

Route::post('/login', "AuthenticationController@module");

Route::any('/UsersData',"AuthenticationController@getusersdata");
Route::any('/modaldata',"AuthenticationController@getmodaldata");

Route::any('/SidebarResultPage', function(){return view('SidebarResultPage');});

Route::group(array('prefix' => '/quick'), function() {
    Route::post('/generate/token', "AuthenticationController@generateToken");
    Route::any('/goToSample', "AuthenticationController@sample");
    Route::any('/goToConcept', "AuthenticationController@concept");
    Route::any('/goToTimer', "AuthenticationController@timer");
    Route::any('/goToAverageConcept', "AuthenticationController@concept");
    Route::any('/goToAverageTimer', "AuthenticationController@concept");
});

// Route::post('/generate/token', "AuthenticationController@generateToken");

Route::any('/Module1Theory', function(){return view('module1_Theory');});
Route::any('/Module2Theory', function(){return view('module2_Theory');});
Route::any('/Module3Theory', function(){return view('module3_Theory');});
Route::any('/Module4Theory', function(){return view('module4_Theory');});

Route::any('/Unit2SpeedVideo', function(){return view('unit2_speed_video');});
Route::any('/Unit2SpeedVideo2', function(){return view('unit2_speed_video2');});
Route::any('/Unit2SpeedVideo3', function(){return view('unit2_speed_video3');});

Route::any('/Unit2CostActivity', function(){return view('Unit2CostActivity');});
Route::any('/Unit2ConstraintsActivity', function(){return view('Unit2ConstraintsActivity');});
Route::any('/Unit2OptimizationActivity', function(){return view('Unit2OptimizationActivity');});


Route::any('/Module1Test', function(){return view('module1_Test');});
Route::any('/Module1ATest', function(){return view('speed1A_Test');});
Route::any('/Module2Test', function(){return view('module2_Test');});
Route::any('/Module3Test', function(){return view('module3_Test');});
Route::any('/Module3ATest', function(){return view('constraints1A_Test');});
Route::any('/Module4Test', function(){return view('module4_Test');});
Route::any('/Module5Test', function(){return view('planning_Test');});

Route::any('/Economics/Module1_Theory', function(){return view('economics_module1_Theory');});
Route::any('/Economics/Module2_Theory', function(){return view('economics_module2_Theory');});
Route::any('/Economics/Module3_Theory', function(){return view('economics_module3_Theory');});
Route::any('/Economics/Module4_Theory', function(){return view('economics_module4_Theory');});

Route::any('/Economics/Module1_Test', function(){return view('economics_module1_Test');});
Route::any('/Economics/Module2_Test', function(){return view('economics_module2_Test');});
Route::any('/Economics/Module3_Test', function(){return view('economics_module3_Test');});
Route::any('/Economics/Module4_Test', function(){return view('economics_module4_Test');});


Route::any('/EconomicsModule1TestQsn2', function(){return view('economics_module1_Test_Qsn2');});
// Route::any('/Test', function(){return view('test');});

// --------------  Sidebar Routing -------------------------

Route::any('/SidebarLearningPage', function(){return view('SidebarLearningPage');}); 
Route::any('/SidebarPracticePage', function(){return view('SidebarPracticePage');});
Route::any('/SidebarTestPage', function(){return view('SidebarTestPage');});
Route::any('/SidebarActivitiesPage', function(){return view('SidebarActivitiesPage');});
Route::any('/ActivitiesPage', function(){return view('ActivitiesPage');});
Route::any('/Activity1', function(){return view('Activity1');});
Route::any('/Activity1a', function(){return view('Activity1a');});
Route::any('/Activity2', function(){return view('Activity2');});
Route::any('/Activity2a', function(){return view('Activity2a');});
Route::any('/submitQuiz',"AuthenticationController@submitQuiz");

Route::any('/resultPage', function(){return view('resultPage');}); 

Route::any('/SocialModulePage1', function(){return view('SocialModulePage1');}); 

Route::any('/socialTest', function(){return view('socialTest');});

Route::any('/SocialModuleLearn', function(){return view('socialModuleLearn');}); 

Route::any('/SocialModuleTheory', function(){return view('socialModuleTheory');});

Route::any('/submitAnswer',"AuthenticationController@submitAnswer");

Route::any('/getAnswer',"AuthenticationController@getAnswer");

Route::any('/gotToNextText',"AuthenticationController@gotToNextText");

Route::any('/WarehouseSimulator', function(){return view('WarehouseSimulator');});
Route::any('/WarehouseSimulator1', function(){return view('WarehouseSimulator1');});
Route::any('/WarehouseSimulator2', function(){return view('WarehouseSimulator2');});
Route::any('/Videos', function(){return view('Videos');});
Route::any('/WarehouseSimulatorSecond1', function(){return view('WarehouseSimulatorSecond1');});
Route::any('/WarehouseSimulatorSecond2', function(){return view('WarehouseSimulatorSecond2');});
Route::any('/WarehouseSimulatorSecond3', function(){return view('WarehouseSimulatorSecond3');});
//Route::any('/allSimulators', function(){return view('allSimulators');});


Route::any('/TransportationVideo1', function(){return view('TransportationVideo1');});
Route::any('/TransportationVideo2', function(){return view('TransportationVideo2');});
Route::any('/TransportationVideo2B', function(){return view('TransportationVideo2B');});

Route::any('/Unit3Video1', function(){return view('Unit3Video1');});
Route::any('/Unit3Video2', function(){return view('Unit3Video2');});

Route::get('/TransportationActivitiesPage', function(){return view('TransportationActivitiesPage');});
Route::any('/Unit2activity1', function(){return view('Unit2activity1a');});
Route::any('/Unit2activity2', function(){return view('Unit2activity2');});
Route::any('/Unit2activity3', function(){return view('Unit2activity3');});

Route::get('/DistributionActivitiesPage', function(){return view('DistributionActivitiesPage');});
Route::any('/Unit3activity1', function(){return view('Unit3activity1');});
Route::any('/Unit3activity2', function(){return view('Unit3activity2');});

//---------------------  Distribution -----------------------

Route::any('/DistributionModule', function(){return view('DistributionModule');});
Route::get('/WarehouseModule', function(){return view('WarehouseModule');});
Route::any('/DistributionModule1', function(){return view('DistributionModule1');});
Route::any('/Unit3Module1Sample', function(){return view('Unit3Module1Sample');});  
Route::any('/Unit3Module1Concept', function(){return view('Unit3Module1Concept');});
Route::any('/Unit3Module1Timer', function(){return view('Unit3Module1Timer');});  
Route::any('/Unit3Module1Sample2', function(){return view('Unit3Module1Sample2');});
Route::any('/Unit3Module1Concept2', function(){return view('Unit3Module1Concept2');});
Route::any('/Unit3Module1Timer2', function(){return view('Unit3Module1Timer2');});  
Route::any('/DistributionLearnPage', function(){return view('DistributionLearnPage');});
Route::any('/DistributionActivity', function(){return view('DistributionActivity');});
Route::get('/DistributionLearning', function(){return view('DistributionLearning');});

Route::get('/Distribution/Module2/Sample1', function(){return view('distribution_module2_sample1');});
Route::get('/Distribution/Module2/Concept1', function(){return view('distribution_module2_concept1');});
Route::get('/Distribution/Module2/Timer1', function(){return view('distribution_module2_timer1');});
Route::get('/Distribution/Module2/Sample2', function(){return view('distribution_module2_sample2');});
Route::get('/Distribution/Module2/Concept2', function(){return view('distribution_module2_concept2');});
Route::get('/Distribution/Module2/Timer2', function(){return view('distribution_module2_timer2');});

Route::get('/DistributionTest', function(){return view('DistributionTest');});
Route::get('/DistributionTest1', function(){return view('DistributionTest1');});
Route::get('/WarehouseTest1', function(){return view('WarehouseTest1');});
Route::get('/DistributionTestPage1', function(){return view('DistributionTestPage1');});
Route::get('/DistributionTestPage2', function(){return view('DistributionTestPage2');});
Route::get('/WarehouseTestPage1', function(){return view('WarehouseTestPage1');});
Route::get('/WarehouseTestPage2', function(){return view('WarehouseTestPage2');});

Route::get('/WarehouseLearnPage', function(){return view('WarehouseLearnPage');});
Route::get('/Unit3LearnActivity2', function(){return view('Unit3LearnActivity2');});

// ---------------------- assessment -------------------

Route::any('/SidebarAssessmentpage', function(){return view('SidebarAssessmentpage');});

Route::any('/ActivityLevels', function(){return view('ActivityLevels');});

Route::any('/level1screen', function(){return view('level1screen');});

Route::any('/level1question', function(){return view('level1question');});

Route::any('/Assessment/Module1_Test', function(){return view('assessment_module1_test');});

Route::any('/assessment_Unit2', function(){return view('assessment_Unit2');});

Route::any('/submitAnswerAssesment',"AuthenticationController@submitAnswerAssesment");

Route::any('/submitQuizAssessment',"AuthenticationController@submitQuizAssessment");

Route::any('/resultPageAssessment', function(){return view('resultPageAssessment');});

//-------------------fundamentals------------------

Route::any('/FundamentalLearnPage', function(){return view('fundamentalslearnpage');});

Route::any('/FundamentalLearnScreen1', function(){return view('fundamentalslearnscreen1');});

Route::any('/FundamentalLearnScreen2', function(){return view('fundamentalslearnscreen2');});

Route::any('/FundamentalLearnScreen3', function(){return view('fundamentalslearnscreen3');});

Route::any('/FundamentalLearnScreen4', function(){return view('fundamentalslearnscreen4');});

Route::any('/FundamentalLearnScreen5', function(){return view('fundamentalslearnscreen5');});

Route::any('/FundamentalLearnScreen6', function(){return view('fundamentalslearnscreen6');});

Route::any('/FundamentalLearnScreen7', function(){return view('fundamentalslearnscreen7');});

Route::any('/FundamentalLearnScreen8', function(){return view('fundamentalslearnscreen8');});

Route::any('/LogisticsInfrastureOverview', function(){return view('LogisticsInfrastuctureOverview');});

Route::any('/airportsOfIndia', function(){return view('airportsOfIndia');});

Route::any('/nationalHighways', function(){return view('nationalHighways');});

Route::any('/railwayNetwork', function(){return view('railwayNetwork');});

//---------------------------Trivia Mode ---------------------------------

Route::any('/TriviaMode', function(){return view('TriviaMode');}); 

Route::any('/TriviaMode2', function(){return view('TriviaMode2');});

Route::any('/TriviaMode3', function(){return view('TriviaMode3');});

// --------------------- UNIT 2 Learn Slides   ----------------------------

Route::any('/Unit2LearnSlide1', function(){return view('Unit2LearnSlide1');});

Route::any('/Unit2LearnSlide2', function(){return view('Unit2LearnSlide2');});

Route::any('/Unit2LearnSlide3', function(){return view('Unit2LearnSlide3');});

Route::any('/Unit2LearnSlide4', function(){return view('Unit2LearnSlide4');});

Route::any('/Unit2LearnSlide5', function(){return view('Unit2LearnSlide5');});

Route::any('/Unit2LearnSlide6', function(){return view('Unit2LearnSlide6');});

Route::any('/Unit2LearnSlide7', function(){return view('Unit2LearnSlide7');});

Route::any('/Unit2LearnSlide8', function(){return view('Unit2LearnSlide8');});

Route::any('/Unit2LearnSlide9', function(){return view('Unit2LearnSlide9');});

// ------------------- New FUndamental Learn Pages ----------------------------

Route::any('/FundamentalLearnScreen1a', function(){return view('fundamentalslearnscreen1a');});

Route::any('/FundamentalLearnScreen1a1', function(){return view('fundamentalslearnscreen1a1');});

Route::any('/FundamentalLearnScreen1b', function(){return view('fundamentalslearnscreen1b');});

Route::any('/FundamentalLearnScreen1c', function(){return view('fundamentalslearnscreen1c');});

Route::any('/FundamentalLearnScreen1d', function(){return view('fundamentalslearnscreen1d');});

Route::any('/FundamentalLearnScreen1e', function(){return view('fundamentalslearnscreen1e');});

Route::any('/FundamentalLearnScreen1f', function(){return view('fundamentalslearnscreen1f');});

Route::any('/FundamentalLearnScreen1g', function(){return view('fundamentalslearnscreen1g');});

Route::any('/FundamentalLearnScreen1h', function(){return view('fundamentalslearnscreen1h');});

Route::any('/FundamentalLearnScreen1i', function(){return view('fundamentalslearnscreen1i');});

Route::any('/FundamentalLearnScreen1j', function(){return view('fundamentalslearnscreen1j');});

Route::any('/FundamentalLearnScreen1k', function(){return view('fundamentalslearnscreen1k');});

Route::any('/FundamentalLearnScreen1l', function(){return view('fundamentalslearnscreen1l');});

Route::any('/FundamentalLearnScreen1m', function(){return view('fundamentalslearnscreen1m');});

Route::any('/FundamentalLearnScreen1n', function(){return view('fundamentalslearnscreen1n');});

Route::any('/FundamentalLearnScreen1o', function(){return view('fundamentalslearnscreen1o');});

Route::any('/FundamentalLearnScreen1o2', function(){return view('fundamentalslearnscreen1o2');});

Route::any('/FundamentalLearnScreen1p', function(){return view('fundamentalslearnscreen1p');});

Route::any('/FundamentalLearnScreen1p1', function(){return view('fundamentalslearnscreen1p1');});

Route::any('/FundamentalLearnScreen1q', function(){return view('fundamentalslearnscreen1q');});

Route::any('/FundamentalLearnScreen1r', function(){return view('fundamentalslearnscreen1r');});

Route::any('/FundamentalLearnScreen1s', function(){return view('fundamentalslearnscreen1s');});

// ----------------------------Basic Module  ----------
Route::any('/basicModule', function(){return view('basicModule');});
