<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AverageController extends Controller
{
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
}
