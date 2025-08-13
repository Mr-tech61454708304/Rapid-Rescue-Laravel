<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmergencyRequestController;



Route::post('/patients-submit', [PatientController::class, 'store'])->name('patientssubmit');

Route::view ('/','index');
Route::view('/emergency-request','emergency-request');


// dashboards
Route::view('/emt-dashboard','emt-dashboard');
Route::view('/admin-dashboard','admin-dashboard');
Route::view('/driver-dashboard','driver-dashboard');






//admins

Route::post('/adminsignup',[AdminController::class,'adminsignup'])->name('adminsignup');
Route::view('/adminsignup','adminlayout.adminsignup');


// login form show karne ke liye

// 1. Login page (GET)
Route::view('/adminlogin', 'adminlayout.adminlogin')->name('adminlogin');
Route::post('/adminlogin', [AdminController::class, 'adminpannellogin'])->name('adminlogin.submit');

// Admin Dashboard - session check
Route::get('/admindashboard', function () {
    if (!session()->has('admin_logged_in')) {
        return redirect()->route('adminlogin');
    }
    return view('adminlayout.index'); // dashboard view
})->name('admindashboard');

//movies display 
Route::get('/admindashboard',[AdminController::class,'moviesdisplay'])->name('admindashboard');
Route::get('/movies/delete/{id}', [AdminController::class, 'deletemovie'])->name('movies.delete');

// Show update form
// Route::get('/movies/edit/{id}', [AdminController::class, 'editmovie'])->name('admin.movies.edit');

// Save updated data
// Route::put('/admin/movies/update/{id}', [AdminController::class, 'updatemovie'])->name('admin.movies.update');
//

//user count 

//
// admin logout 

// Admin logout – GET request (simple) ﹘ you can change to POST if you prefer
Route::get('/adminlogout', function () {
    session()->flush();                     // saari session values clear
    return redirect()->route('adminlogin'); // login page pe wapas
})->name('adminlogout');



//
Route::post('/adminpannellogin', [AdminController::class, 'adminpannellogin'])->name('adminpannellogin');

// request emergency 

Route::post('/emergency-request', [EmergencyRequestController::class, 'store'])->name('emergency.request.store');
Route::get('/driver-requests', [EmergencyRequestController::class, 'requestdisplay'])->name('driver.requests');