<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $student = "Web Security Student";
    $course = "Web Security Assignment";
    $year = date('Y');

    return view('home', [
        'student' => $student,
        'course' => $course,
        'year' => $year
    ]);

});
