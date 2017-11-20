<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // or

    // return view('welcome') -> with('name', 'World');

    // or

  // store as a variable
    // return view('welcome',  [ 'name' => $name ]);

    // or

    // return view('welcome',  compact('name')); // use compact() method
    // $name = 'John';
    $employees = DB::table('employee')->get();

    return view('index', compact('employees')); // use compact() method
//     return $tasks;
});

Route::get('api/employee', function () {
    // return JSON for employees table
    $employees = DB::table('employee')->get();
    // dd($task);

    return $employees;
    // return view('index', compact('employees')); // use compact() method
});
