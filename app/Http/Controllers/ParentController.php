<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function get_all_parents(){
        return view('parent.');
    }
}
