<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bye extends Controller
{
   public $data = [
        'name' => 'Saksham',
        'age' => 22,
        'skills' => ['Laravel', 'PHP', 'JavaScript']
    ];
    public function v1(){
        
        return view ("view1",['data' => $this->data]);
    }
    public function v2()
    {
        return view("view2", ['data' => $this->data]);
    }

}
