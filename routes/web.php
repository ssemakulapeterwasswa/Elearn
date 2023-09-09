<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'index']);
Route::get('about-us', [MainController::class, 'aboutUs']);

Route::get('contact-us', [MainController::class, 'contactUs']);

Route::get('learn-information', [MainController::class, 'learnInformation']);



