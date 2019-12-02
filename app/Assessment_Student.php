<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use App\Assessment_Student;

class Assessment_Student extends Model
{

    protected $table = 'assessment_student';


       public static function submitUserAnswer ($data,$assess_id) {
        $NewRecord = new Assessment_Student();
        
        $NewRecord->student_id       = Session::get('userId');

        $NewRecord->unit             = $data['unit'];

        $NewRecord->question_id      = $data['qsn_index'];
       
        $NewRecord->user_answer      = $data['user_ans'];

	$NewRecord->assessment_id      = $assess_id;

	$NewRecord->status             = "active";

        $NewRecord->save();

        return $NewRecord;
    }

}


