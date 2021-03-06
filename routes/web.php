<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DemoController;
use App\Mail\ClientMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [IndexController::class, 'index'])->name('index.index');
Route::get('/demo/{type?}/{id?}', [DemoController::class, 'demo'])->name('demo.index');