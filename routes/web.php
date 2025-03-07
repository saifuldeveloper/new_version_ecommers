<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('frontend.home.index');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');
});



// ===========forntend=================

Route::get('/services', [PagesController::class, 'services'])->name('services.page');
Route::get('/pricing', [PagesController::class, 'pricing'])->name('pricing.page');
Route::get('/free-trial', [PagesController::class, 'freetrail'])->name('freetrail.page');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio.page');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact.page');
Route::get('/about-us', [PagesController::class, 'about'])->name('about.page');


Auth::routes();
