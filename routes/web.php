<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[mainController::class,'index'])->name('index');
Route::get('/project',[mainController::class,'project'])->name('project');
Route::get('/contact',[mainController::class,'contact'])->name('contact');
Route::get('/education',[mainController::class,'education'])->name('education');
Route::get('/about',[mainController::class,'about'])->name('about');

