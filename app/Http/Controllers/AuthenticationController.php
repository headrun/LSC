<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use App\Clients;
use Hash;
use Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\PurchasingGroup;
use App\PurchaseGroupSupplierMap;
use App\User;
use App\UserLogin;
use DB;
use App\PuHead;
use Config;
use App\LtrpmLevel;
use App\Buyer;
use App\Quiz;
use App\Assessment_Student;
use App\Assessment_Questions;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AuthenticationController extends Controller
{

    public function login(Request $request){
      if(Session::get('email')){
        return view('SidebarLearningPage');
      }else{
        return view('login');
      }
    }

    public function signout(){
      Session::flush();
        return view('login');
    }

    public function module(){
	    $inputs = Input::all();
        if($inputs['username'] != 'superuser'){
        if($inputs && isset($inputs['username']) && isset($inputs['password'])){
           // if (Auth::attempt(array('email' => $inputs['email'], 'password' => $inputs['password']))) {
             $userData = DB::table('users')
                          ->where('user_name','=',$inputs['username'])
                          ->get();
                    if(count($userData) != 0){
                       $userData=$userData[0];
                   }else{
                       Session::flash('message', 'Invalid User.');
                   }
	     if(count($userData) != 0) { 
		     $userNameFinal = '';
		     $userName = $userData->user_name;
                         $userNameSplit = preg_split("/[_]+/", $userName);
                         for ($i=0; $i < count($userNameSplit); $i++) {
                             $firstName = ucfirst($userNameSplit[$i]);
                             $userNameFinal = $userNameFinal . $firstName .' ';
			 } 
                     Session::put('userId', $userData->id);
                     Session::put('user_name', $userNameFinal);
                     Session::put('school_name', $userData->school_name);
                     Session::put('email', $userData->email);
                     Session::put('password', $userData->password);
            }
            // }
                

            $users = DB::table('users')
                         ->where('user_name','=',$inputs['username'])
			 ->get();
	    
               if(count($users) !=0){
                if($inputs['password'] == $users[0]->password || $inputs['password'] == $users[0]->token){
                     return view('SidebarLearningPage');
                }
                else {
                     return  Redirect::back()->withErrors(['Invalid Login']);
                }
	       } else if(count($users) == 0){
		   $users = DB::table('users')->take(1)->get();
                   if($inputs['password'] == $users[0]->token){
                    $data = array('user_name'=>$inputs['username'],'school_name'=>'','email'=>'','password'=>'student','token'=>$users[0]->token,'student_roll_number'=>'');
		    $users = DB::table('users')->insert($data);
		    $userData = DB::table('users')
			          ->where('user_name','=',$inputs['username'])
				        ->get();
		    if(count($userData) != 0){
			       $userData=$userData[0];
		    }else{
			return  Redirect::back()->withErrors(['User Not Available']);
		    }
		    if(count($userData) != 0) {			 
			 Session::put('userId', $userData->id);
		    Session::put('user_name', $userData->user_name);
				Session::put('school_name', $userData->school_name);
				Session::put('email', $userData->email);
				Session::put('password', $userData->password);
		    }
		    return view('SidebarLearningPage');
		   }
	       return  Redirect::back()->withErrors(['User Not Available']);
               }
                
	}
	}
    }
    public function generateToken(Request $request)
    {
	    $name = $request->input('username');
	    $password = $request->input('password');
	    $users = DB::table('users')->where('user_name','=',$name)->get();
	    if($name == 'superuser'){ 
		        if($password == $users[0]->password) {
				        $api_token = str_random(60);
				        $users = DB::table('users')->update(['token' => $api_token]);
				        return Response::json(array("token"=>$api_token));
          	         }
			 else {
			     return Response::json(array("token"=>"Not created due to wrong password.Please give valid password."));
			 }
	    } 
	    else {
		return Response::json(array("token"=>"Not created due to Invalid Credentials"));
	    }
    }
   
     public function submitQuiz(){
        $count = 0;
        $result = 0;
        $i = 0;
        $inputs = Input::all();
         $actual_ans = Quiz::where('subject','=',$inputs['subject'])
                          ->where('module','=',$inputs['module'])
                          ->select('actual_answer','qsn_text','option1_text','option2_text','option3_text','option4_text','actual_answer','question','solution','image_url')
                          ->get();
     //    $user_ans = Quiz::where('subject','=',$inputs['subject'])
       //                   ->where('module','=',$inputs['module'])
         //                 ->select('user_answer')
	//               ->get();

	$user_ans = DB::table('user_answers')
                          ->where('subject','=',$inputs['subject'])
                          ->where('module','=',$inputs['module'])
                          ->where('user_id','=',Session::get('userId'))
                          ->select('user_answer')
			  ->get();

         foreach ($actual_ans as $key => $value1) {
                 if($value1['actual_answer'] == $user_ans[$i]->user_answer){
                    $count++;
                 }
                 $i++;
         }
        $result = $count;
        $dataToView = array('result','actual_ans','user_ans');
        //if($result){
        //  return Response::json(array("status"=>"success"));
        //} else {
          //return Response::json(array("status"=>"failed"));
        //}
      return View('resultPage',compact($dataToView));


    }

    public function submitAnswer1(){
        $inputs = Input::all();
        if(Quiz::where('subject','=',$inputs['subject'])
                            ->where('module','=',$inputs['module'])
                            ->where('question','=',$inputs['qsn_index'])
                            ->exists() && isset($inputs['user_ans'])) {
            $quizSubmit = $quizSubmit = Quiz::where('subject','=',$inputs['subject'])
                                              ->where('module','=',$inputs['module'])
                                              ->where('question','=',$inputs['qsn_index'])
                                              ->update(['user_answer' => $inputs['user_ans']]);
        return Response::json(array("status"=>"success"));
    }
    }   

    public function submitAnswer(){
	    $inputs = Input::all();

        if(DB::table('user_answers')->where('subject','=',$inputs['subject'])
                            ->where('module','=',$inputs['module'])
                            ->where('qsn_id','=',$inputs['qsn_index'])
			    ->exists() && isset($inputs['user_ans'])) {

            $quizSubmit = $quizSubmit = DB::table('user_answers')->where('subject','=',$inputs['subject'])
                                              ->where('module','=',$inputs['module'])
                                              ->where('qsn_id','=',$inputs['qsn_index'])
                                              ->where('user_id','=',Session::get('userId'))
                                              ->update(['user_answer' => $inputs['user_ans']]);
        return Response::json(array("status"=>"success"));
    }
}

     public function getAnswer(){
       $inputs = Input::all();
       $quizSubmit = Quiz::where('subject','=','mathematics')
                                        ->where('module','=','Speed')
                                        ->where('question','=',($inputs['qsn_index']-1))
                                        ->select('user_answer')->get();


        return Response::json(array("status"=>"success"));
     }

 function submitAnswerAssesment(){
        $inputs = Input::all();
        /*$assessment = Assessment_Student::where('student_id','=',Session::get('userId'))
                                             ->where('unit','=',$inputs['unit'])
                                             ->select('assessment_id')
                                             ->get();*/
         if(Assessment_Student::where('student_id','=',Session::get('userId'))
                                                 ->where('unit','=',$inputs['unit'])
                                                 ->where('question_id','=',$inputs['qsn_index'])
                                                 // ->where('assessment_id','=',$assessment[0]['assessment_id'])
                                                 ->exists() && isset($inputs['user_ans'])){
            $user_answer_update = Assessment_Student::where('student_id','=',Session::get('userId'))
                                                 ->where('unit','=',$inputs['unit'])
                                                 ->where('question_id','=',$inputs['qsn_index'])
                                                 // ->where('assessment_id','=',$assessment[0]['assessment_id'])
                                                 ->update(array('user_answer'=> $inputs['user_ans'], 'status' => 'active'));
         }else{
             if(Assessment_Student::where('student_id','=',Session::get('userId'))
                                             ->where('unit','=',$inputs['unit'])
                                             ->select('assessment_id')
                                             ->exists()){
        $assessment_id = Assessment_Student::where('student_id','=',Session::get('userId'))
                                             ->where('unit','=',$inputs['unit'])
                                             ->select('assessment_id')
                                             ->get();
        $assess_id = $assessment_id[0]['assessment_id'];
        } 
        else{
        $assessment_id1 = Assessment_Student::where('student_id','=',Session::get('userId'))
                                             ->select('assessment_id')
                                             ->get()
                                             ->last();
             $assess_id = $assessment_id1['assessment_id']+1;
        }
        $AnswerSubmit = Assessment_Student::submitUserAnswer($inputs, $assess_id);
         }
            return Response::json(array("status"=>"success"));
}

public function getusersdata(){
    $users_data = DB::table('users')->where('school_name','=','TSAHSS')
                                    ->orWhere('school_name','=','KVMHSS')
                                    ->get();
    $userNameFinal = '';
    foreach ($users_data as $key => $value) {
      $userNameSplit = preg_split("/[_]+/", $users_data[$key]->user_name);
        for ($i=0; $i < count($userNameSplit); $i++) {
           $firstName = ucfirst($userNameSplit[$i]);
           $userNameFinal = $userNameFinal . $firstName .' ';
           
        } 
        $users_data[$key]->new_name = $userNameFinal;
        $userNameFinal = '';
    }
    $data = array('users_data');
    return view('usersdata',compact($data));
  }
  public function getmodaldata(){
    $inputs = Input::all();
    $useransw =  Assessment_Student::where('unit','=','Fundamentals of Logistics')
                                    ->where('student_id','=',$inputs)
                                    ->select('question_id','user_answer')
                                    ->get();
    $actans = Assessment_Questions::where('unit','=','Fundamentals of Logistics')
                                    ->select('question','actual_answer')
                                    ->get();
    foreach ($useransw as $key => $value) {
      $final = Assessment_Questions::where('unit','=','Fundamentals of Logistics')                            ->where('question','=',$value['question_id'])
                                     ->get();
      $useransw[$key]['actual_answer'] = $final[0]['actual_answer'];
    }
    if($useransw){
      return Response::json(array("status"=>"success",'useransw'=>$useransw));
    }
  }
  

public function submitQuizAssessment(){
        $count = 0;
        $result = 0;
	$i = 0;
	// $j = 0;
	// $actual_ans2 = [];
        $inputs = Input::all();
         $actual_ans1 = Assessment_Questions::where('unit','=',$inputs['unit'])
                          ->select('actual_answer')
			  ->get();
	
        $user_ans = Assessment_Student::where('unit','=',$inputs['unit'])
		                       ->where('student_id','=',Session::get('userId'))
                                       ->where('status','=','active')
                                       ->select('user_answer','question_id')
			               ->get();

/*
	for ($k=0;$k<count($user_ans);$k++){

	$actual_ans = Assessment_Questions::where('unit','=',$inputs['unit'])
	                                   ->where('question','=',$user_ans[$k]['question_id'])
		                           ->select('actual_answer')
					   ->get();
	
          }
         
         
         foreach ($actual_ans as $key => $value1) {
                 if($value1['actual_answer'] == $user_ans[$i]['user_answer']){
                    $count++;
                 }
                 $i++;
	 }*/
         //  return count($user_ans);
	foreach ($user_ans as $key => $value) {
         $actualAns = Assessment_Questions::where('unit','=',$inputs['unit'])
                                        ->where('question','=',$user_ans[$key]['question_id'])
                                        ->select('actual_answer')
                                        ->get();

     $user_ans[$key]['actual_answer'] = $actualAns[0]['actual_answer'];
   //  $user_ans[$key]['actual_answer'] = count($actualAns) ? $actualAns['actual_answer'] : '';
       if($value['actual_answer'] == $value['user_answer']){
          $count++;
       }
   }
   //  return count($user_ans);
         
        $result = $count;

        $result_saving = DB::table('users')->where('id','=',Session::get('userId'))
                                        ->update(['assessment_result1' => $result]);

        $test_retake_value = Assessment_Student::where('student_id','=',Session::get('userId'))
                                          ->count();


        $dataToView = array('result','test_retake_value');
        //if($result){
        //  return Response::json(array("status"=>"success"));
        //} else {
          //return Response::json(array("status"=>"failed"));
        //}
      return View('resultPageAssessment',compact($dataToView));

         return Response::json(array("status"=>"success"));

   }

   public function retakeAssessment() {
       $quizsubmit = Assessment_Student::where('student_id','=',Session::get('userId'))
                                ->update(['status' => 'inactive']);
       
       if($quizsubmit){
          return Response::json(array("status"=>"success")); 
       }else{
         return Response::json(array("status"=>"failed"));
       }
     }


        public function gotToNextText()
	{
        $quizsubmit = Assessment_Student::where('student_id','=',Session::get('userId'))
		                         ->update(['status' => 'inactive']);
        $quizSubmit =  Quiz::where('subject','=','mathematics')
                            ->where('module','=','Speed')
			    ->update(['user_answer' => 'NULL']);
	$quizSubmit =  Quiz::where('subject','=','mathematics')
                            ->where('module','=','Cost')
                            ->update(['user_answer' => 'NULL']);
        $quizSubmit =  Quiz::where('subject','=','mathematics')
                            ->where('module','=','Constraints')
                            ->update(['user_answer' => 'NULL']);
        $quizSubmit =  Quiz::where('subject','=','mathematics')
                            ->where('module','=','Optimization')
			    ->update(['user_answer' => 'NULL']);
	$quizSubmit =  Quiz::where('subject','=','Fundamentals Of Logistics')
                            ->where('module','=','Demand and Supply')
                            ->update(['user_answer' => 'NULL']);
        $quizSubmit =  Quiz::where('subject','=','Fundamentals Of Logistics')
                            ->where('module','=','Planning')
                            ->update(['user_answer' => 'NULL']);
        $quizSubmit =  Quiz::where('subject','=','Fundamentals Of Logistics')
                            ->where('module','=','Miscellaneous')
                            ->update(['user_answer' => 'NULL']);

        if($quizSubmit){
            return Response::json(array("status"=>"success"));
        }
        else{
            return Response::json(array("status"=>"failed"));
        }
	}

    public function submitQuiz1(){
       /*$count = 0;
       $inputs = Input::all();
       if(Quiz::where('subject','=','mathematics')
                           ->where('module','=','Speed')
                           ->where('question','=','q1')
                           ->exists() && isset($inputs['user_ans'])) {
           $quizSubmit = $quizSubmit = Quiz::where('subject','=','mathematics')
                                             ->where('module','=','Speed')
                                             ->where('question','=','q1')
                                             ->update(['user_answer' => $inputs['user_ans']]);
  }
     else {
        $actual_ans = Quiz::where('subject','=','mathematics')
                         ->where('module','=','Speed')
                         ->select('actual_answer')
                         ->get();
        $user_ans = Quiz::where('subject','=','mathematics')
                         ->where('module','=','Speed')
                         ->select('user_answer')
                         ->get();
        foreach ($actual_ans as $key => $value1) {
            foreach ($user_ans as $key => $value2) {
                if($value1['actual_answer'] == $value2['user_answer']){
                   $count++;
                }
            }
        }
     }*/

         return Response::json(array("status"=>"success"));

   }
   
    public function modulePage() {
        $view_data = array();
        return view('module', compact($view_data));   
    }

    public function trainingPage() {
        $view_data = array();
        return view('trainingPage', compact($view_data));   
    } 

     public function EconomicsTrainingPage() {
        $view_data = array();
        return view('economicsTrainingPage', compact($view_data));   
    }

    public function learn() {
        $view_data = array();
        return view('learningPage', compact($view_data));   
    } 

    public function EconomicsLearn() {
        $view_data = array();
        return view('economicsLearningPage', compact($view_data));   
    }

    public function test() {
        $view_data = array();
        return view('testPage1', compact($view_data));   
    } 

    public function EconomicsTest() {
        $view_data = array();
        return view('economicsTestPage', compact($view_data));   
    }

    public function economicsModulePage() {
        $view_data = array();
        return view('EconomicsModule', compact($view_data));
    }

     public function SocialModulePage() {
        $view_data = array();
        return view('socialModule', compact($view_data));
     }

    public function SocialModuleOut() {
        $view_data = array();
        return view('socialModuleOut', compact($view_data));
    }

     public function subjectsPage() {
        $view_data = array();
        return view('subjects', compact($view_data));
    }

    public function sample(){
        return Response::json(array('status' => 'success', 'data' => ''));
    }
    
    public function samplePage() {
        $view_data = array();
        return view('sample', compact($view_data));   
    }

    public function concept(){
        return Response::json(array('status' => 'success', 'data' => ''));
    }
    
    public function conceptPage() {
        $view_data = array();
        return view('concept', compact($view_data));   
    }

     public function timer(){
        return Response::json(array('status' => 'success', 'data' => ''));
    }
    
    public function timerPage() {
        $view_data = array();
        return view('timer', compact($view_data));   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}


