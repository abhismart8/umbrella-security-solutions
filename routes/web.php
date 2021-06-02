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
    return view('homepage.home', ['current' => 'home']);
});

Route::get('about-us', function () {
    return view('about-us.about', ['current' => 'about']);
});

Route::get('contact-us', function () {
    return view('contact-us.contact', ['current' => 'contact']);
});

Route::get('services/cctv-surveillance-system', function () {
    return view('services.cctv', ['current' => 'service']);
})->name('cctv-view');

Route::get('services/home-commericial-security-alarm-system', function () {
    return view('services.security-alarm-system', ['current' => 'service']);
})->name('home-security-view');

Route::get('services/access-control-system', function () {
    return view('services.access-control-system', ['current' => 'service']);
})->name('access-control-system-view');

Route::get('services/miscellaneous', function () {
    return view('services.misc', ['current' => 'service']);
})->name('misc-view');

Route::get('services/vehicle-tracking-system', [VehicleTrackingController::class, 'contactUsFormMailSend'])->name('vehicle-tracking-view');

// contact us form mail send
Route::post('contact-us/mail/send', [ContactUsController::class, 'contactUsFormMailSend'])->name('contact-us-form-mail-send');
