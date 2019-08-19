<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_All_Students(){
        return view('student.all-student');
    }

    public function get_student_detail(){
        return view('student.student-details');
    }

    public function get_admission_form(){
        return view('student.admission-form');
    }

    public function get_student_promotion(){
        return view('student.student-promotion');
    }
}
