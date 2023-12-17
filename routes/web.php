<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\enrollController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layout');
})->name('home');



Route::resource('/students',StudentController::class);

//! teacher 
Route::controller(teacherController::class)->group(function(){
    Route::get("teacher", "showAllTeacher")->name('teacher');

    Route::post('addTeacher','addTeacher')->name("addNewTeacher") ;
    
    Route::get('/showTeacher/{id}','showSingleTeacher')->name('showSingleTeacher');
    
    Route::get('/editSingleTeacher/{id}','editSingleTeacher')->name('editSingle.teacher');
    Route::post('/updateSingleTeacher/{id}','updateSingleTeacher')->name('updateSingle.teacher');
    
    Route::get('/deleteTeacher/{id}', 'deleteTeacher')->name('delete.teacher');

    Route::get("createTeacher","createTeacher");
}) ;

//! courses
Route::resource('/courses',courseController::class);

//! Enroll 

Route::resource('/enrolls',enrollController::class);

//!payments
Route::resource('/payments',paymentController::class);


Route::get('home',  [ homeController::class,"viewAllStudentData" ] ) ;
// Route::get('/',  [ homeController::class,"viewAllStudentData" ] ) ;

Route::get('/', function(){
    return view('login');
} ) ;

Route::post('loginPortal', [ homeController::class,"loginToPortal" ] )->name('loginPortal');

Route::get('logout', [ homeController::class,"logoutPortal" ] )->name('logout');