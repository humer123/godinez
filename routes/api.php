<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::post('/add-student', [Controller::class, 'addstudent']);
Route::post('/update-student', [Controller::class, 'updatestudent']);
Route::post('/delete-student', [Controller::class, 'deletestudent']);
Route::get('/getAll', [Controller::class, 'getAllstudent']);
