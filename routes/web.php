<?php

use App\Http\Controllers\ContactController;
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
    return view('index');
});

Route::get('/js/app.js', function () {
    return response()->file(public_path('js/app.js'));
});

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/', [ContactController::class, 'store']);

