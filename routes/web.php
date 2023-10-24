<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/under-development', function () {
    return view('compoments.loading');
})->name("loading");

Route::get('/marketing', function () {
    return view('marketing');
})->name("marketing");

Route::get('/Branding', function () {
    return view('Branding');
})->name("Branding");

Route::get('/Web-Development', function () {
    return view('Web-Development');
})->name("Web-Development");

Route::get('/offer', function () {
    return view('offers');
})->name("offer");




Route::post('/contact-form',[ContactController::class,'getFormData'])->name('contact-form');

Route::post('/newsletter-form',[NewsLetterController::class,'getFormData'])->name('newsletter-form');

Route::post("/hiring-form",[OffersController::class,'get_form_data'])->name('hiring-form');
