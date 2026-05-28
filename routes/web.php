<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $name = 'Manar';
    $departments = [
        '1'=> 'Technical',
        '2'=> 'Financial',
        '3'=> 'Sales',
    ];

    //return view('about')->with('name', $name) ;
    //return view('about' , ['name'=> $name] ) ;
    return view('about' , compact('name', 'departments') ) ;
});

Route::post('/about', function(){
    $name=$_POST['name'];
    $departments = [
        '01'=> 'Technical',
        '2'=> 'Financial',
        '3'=> 'Sales',
    ];
    return view('about', compact('name'));
});

Route::get('tasks', [TaskController::class, 'index']);

Route::post('create' , [TaskController::class, 'create']);

Route::post('delete/{id}' , [TaskController::class,'destroy']);

Route::post('edit/{id}', [TaskController::class,'edit']);

Route::post('update', [TaskController::class,'update']);

Route::get('app',function(){
    return view('layouts.app');
});
