<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
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

Route::view('/', 'web.upfile');

Route::view('/sheet', 'web.upfile-sheet');

Route::view('/request-leave', 'web.resleave');

Route::get('/show-user', [UserController::class, 'index']);

Route::post('/excel-csv-file', [UserController::class, 'importInfo']);

Route::post('/excel-csv-sheet', [UserController::class, 'importTime']);

Route::get('/send-email', [MailController::class, 'index']);

Route::post('/reqleave', [UserController::class, 'reqleave']);
