<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\Pref;
use App\Http\Controllers\Bye;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{name}/{class}/{rollno}',function($name,$class,$rollno){
    return view ('hello', ["name"=>$name], ["class"=>$class],["rollno"=>$rollno]);
});

// Route::get('/{name?}/{class?}',function($name,$class){
//     return view ('hello') ->with("name","vverfwef") ->with("class","vhjrbfek");
// });
Route::view('/he/{name?}/{class?}','hello',["name"=>"vdrgraeg","class"=>"rdgbrg"]);  

Route::get('/pe/new/{newMobile}',function($newMobile){
    return view('phone',compact("newMobile"));
});

Route::view('/nope','nope')->name('no');

Route::prefix('student')->group(function(){
    Route::view('/hello','phone')->name('hi');
  
    Route::get('home',[Pref::class,'studentHome']);
    Route::get('time',[Pref::class,'studentTime']);
    Route::get('att',[Pref::class,'studentAtt']);
    Route::get('marks',[Pref::class,'studentMarks']);
});

Route::get('firstController/{name}/{marksOfMaths}/{marksOfEng}',[FirstController::class,'myfunc']);

Route::get('view1',[Bye::class,'v1']);
Route::get('view2',[Bye::class,'v2']);

Route::view("check",'temp.home');