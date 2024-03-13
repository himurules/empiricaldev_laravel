<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/our-services', [HomeController::class, 'services'])->name('services');
Route::get('/our-projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/project-details/{projectName}', [HomeController::class, 'projectsdetails'])->name('projectsdetails');
Route::get('/our-gallery', [HomeController::class, 'gallery'])->name('media');
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/faq', [HomeController::class, 'faq']);

Route::post('/request-a-quote', [HomeController::class, 'requestQuote']);
Route::post('/request-a-contact', [HomeController::class, 'requestContact']);
