<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function get_all_teachers(){
        return view('teacher.all-teacher');
    }

    public function get_teacher_detail(){
        return view('teacher.teacher-detail');
    }

    public function get_add_teacher_form(){
        return view('teacher.add-teacher');
    }

    public function get_teacher_payment(){
        return view('teacher.teacher-payment');
    }
}
