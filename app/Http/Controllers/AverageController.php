<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AverageController extends Controller
{
        public function start()
    {
        return view('begin');
    }
    public function enterAttempts(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('attempts', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageScore($score1, $score2)
    {
        $average = ($score1 + $score2) / 2;
        return round($average, 2);
    }

    public function showRemarks($average)
    {
        if ($average >= 75) {
            return "PASSED";
        }else{
            return "FAILED";
        }

    }

    public function computePower(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_2 = $request->student_4;
        $student_3 = $request->student_5;

        $p1_average = $this->computeAverageScore($request->p1_attempt1, $request->p1_attempt2);
        $p2_average = $this->computeAverageScore($request->p2_attempt1, $request->p2_attempt2);
        $p3_average = $this->computeAverageScore($request->p3_attempt1, $request->p3_attempt2);
        $p4_average = $this->computeAverageScore($request->p4_attempt1, $request->p4_attempt2);
        $p5_average = $this->computeAverageScore($request->p5_attempt1, $request->p5_attempt2);

        $p1_remarks = $this->showRemarks($request->$p1_average);
        $p2_remarks = $this->showRemarks($request->$p2_average);
        $p3_remarks = $this->showRemarks($request->$p3_average);
        $p4_remarks = $this->showRemarks($request->$p4_average);
        $p5_remarks = $this->showRemarks($request->$p5_average);

        return view('resultsPage', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,

            // Player 1 attempts
            'p1_attempt1' => $request->p1_attempt1,
            'p1_attempt2' => $request->p1_attempt2,
            'p1_average' => $p1_average,
            'p1_remarks' => $request->$p1_remarks
            // Player 2 attempts
            'p2_attempt1' => $request->p2_attempt1,
            'p2_attempt2' => $request->p2_attempt2,
            'p2_average' => $p2_average,
            'p2_remarks' => $request->$p2_remarks
            // Player 3 attempts
            'p3_attempt1' => $request->p3_attempt1,
            'p3_attempt2' => $request->p3_attempt2,
            'p3_average' => $p3_average,
            'p3_remarks' => $request->$p3_remarks

            'p4_attempt1' => $request->p4_attempt1,
            'p4_attempt2' => $request->p4_attempt2,
            'p4_average' => $p4_average,
            'p4_remarks' => $request->$p4_remarks

            'p5_attempt1' => $request->p5_attempt1,
            'p5_attempt2' => $request->p5_attempt2,
            'p5_average' => $p5_average,
            'p5_remarks' => $request->$p5_remarks
        ]);
    }
}
