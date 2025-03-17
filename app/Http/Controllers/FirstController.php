<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function myfunc($name,$makrsOfMaths, $marksOfEng){
        return $name. " scored total marks of " . $makrsOfMaths+$marksOfEng;
    }
}
