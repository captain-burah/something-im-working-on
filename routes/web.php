<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Mail\DemoEmail;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [FrontEndController::class, 'home'])->name('esnaad.home');

Route::get('/about-esnaad', [FrontEndController::class, 'about'])->name('esnaad.about');

Route::get('/communities/{slug}', [FrontEndController::class, 'communities_details'])->name('esnaad.communities');

Route::get('/developments/{slug}', [FrontEndController::class, 'developments_details'])->name('esnaad.developments');

Route::get('/projects', [FrontEndController::class, 'developments'])->name('esnaad.developments.comingsoon');

Route::get('/communities', [FrontEndController::class, 'communities'])->name('esnaad.communities.comingsoon');

Route::get('/media-center', [FrontEndController::class, 'media_center'])->name('esnaad.media_center');

Route::get('/contact', [FrontEndController::class, 'contact'])->name('esnaad.contact');

Route::get('/invest-in-dubai', [FrontEndController::class, 'invest'])->name('esnaad.invest_in_dubai');

Route::get('/constructions', [FrontEndController::class, 'constructions'])->name('esnaad.constructions');
Route::get('/constructions/{id}', [FrontEndController::class, 'constructions_details'])->name('esnaad.constructions.detail');

Route::get('/news', [FrontEndController::class, 'news'])->name('esnaad.news');
Route::get('/news/{id}', [FrontEndController::class, 'news_details'])->name('esnaad.news.detail');

Route::post('/communities/register-your-interest', [FrontEndController::class, 'communities_registration'])->name('esnaad.communities.registration');

Route::get('/thankyou', function() {
    return view('thankyou');
});

require __DIR__.'/auth.php';
