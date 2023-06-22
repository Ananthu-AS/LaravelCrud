<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

// Route::get('/', function () {
//     return view('crud');
// });
Route::get('/', [CrudController::class, 'dash']);
Route::post('/create-user', [CrudController::class, 'create'])->name('create-user');
Route::get('/delete/{id}', [CrudController::class, 'delete']);
