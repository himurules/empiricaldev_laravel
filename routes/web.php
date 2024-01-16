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
Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/our-services', [HomeController::class, 'services']);
Route::get('/our-team', [HomeController::class, 'ourteam']);
Route::get('/our-projects', [HomeController::class, 'projects']);
Route::get('/our-process', [HomeController::class, 'ourprocess']);
Route::get('/contact-us', [HomeController::class, 'contactus']);
Route::get('/faq', [HomeController::class, 'faq']);

Route::post('/request-a-quote', [HomeController::class, 'requestQuote']);
