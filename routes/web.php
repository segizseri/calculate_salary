<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

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

Route::get('/', [CalcController::class, 'salary'])->name('main-page');
Route::post('/add', [CalcController::class, 'employeAdd'])->name('employe-add');
Route::get('/list', [CalcController::class, 'list'])->name('list');