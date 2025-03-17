<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pref extends Controller
{
    function studentHome(){
        return "Student Home";
    }
    function studentAtt(){
        return "Student Attendence";
    }
    function studentTime(){
        return "Student Time Table";
    }
    function studentMarks(){
        return "Student Marks";
    }
}
