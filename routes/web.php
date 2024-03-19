<?php

use App\Http\Controllers\CashinController;
use App\Http\Controllers\CashoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\ProjectController;
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
    return view('pages.admin.welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::post('/project/store', [ProjectController::class, 'store'])->name('store_project');

Route::get('/detail-project', [ProjectController::class, 'detail'])->name('detail-project');
Route::get('/detail-project', [ProjectController::class, 'detail2'])->name('detail-project');


Route::put('/project/{id}', [ProjectController::class, 'update'])->name('update_project');
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
Route::post('/pekerjaan/store', [PekerjaanController::class, 'store'])->name('store_pekerjaan');
Route::put('/pekerjaan/{id}', [PekerjaanController::class, 'update'])->name('update_pekerjaan');

Route::get('/cashin', [CashinController::class, 'index'])->name('cashin');
Route::post('/cashin/store', [CashinController::class, 'store'])->name('store_cashin');
Route::put('/cashin/{id}', [CashinController::class, 'update'])->name('update_cashin');

Route::get('/cashout', [CashoutController::class, 'index'])->name('cashout');
Route::post('/cashout/store', [CashoutController::class, 'store'])->name('store_cashout');
Route::put('/cashout/{id}', [CashoutController::class, 'update'])->name('update_cashout');

Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('/client', [ClientController::class, 'index'])->name('client');
