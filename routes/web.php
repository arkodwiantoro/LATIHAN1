<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});
//read data
Route::get('/index', [EmployeeController::class, 'index'])->name('index');

//tambah agent
Route::get('/tambahagent', [EmployeeController::class, 'tambahagent'])->name('tambahagent');
Route::post('/insertagent', [EmployeeController::class, 'insertagent'])->name('insertagent');

//tampilkan agent
Route::get('/tampilkanagent/{id}', [EmployeeController::class, 'tampilkanagent'])->name('tampilkanagent');
Route::post('/updateagent/{id}', [EmployeeController::class, 'updateagent'])->name('updateagent');

//hapus agent
Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');