<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/cv', [HomeController::class, 'cb']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get("/hello", function () {
    return inertia("Hello");
});

Route::get('/test', [HomeController::class, 'test']);
