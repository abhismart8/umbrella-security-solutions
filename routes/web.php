<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\VehicleTrackingController;

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
    return view('homepage.home');
});

Route::get('about-us', function () {
    return view('about-us.about');
});

Route::get('contact-us', function () {
    return view('contact-us.contact');
});

Route::get('services/vehicle-tracking', [VehicleTrackingController::class, 'contactUsFormMailSend'])->name('vehicle-tracking-view');

// contact us form mail send
Route::post('contact-us/mail/send', [ContactUsController::class, 'contactUsFormMailSend'])->name('contact-us-form-mail-send');
