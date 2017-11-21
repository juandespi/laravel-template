<?php

Route::get('/', function () {

    // or

    // return view('welcome') -> with('name', 'World');

    // or

  // store as a variable
    // return view('welcome',  [ 'name' => $name ]);

    // or

    // return view('welcome',  compact('name')); // use compact() method
    // $name = 'John';
    // $employees = App:"";

    return view('index', compact('employees')); // use compact() method
//     return $tasks;
});

Route::get('api/employees/{employees}', function ($id) {
    $employees = App\Employee::find('emp_no');

    return $employees;
    // return view('employees.employee', compact('employees')); // use compact() method
});
