<?php

use App\Http\Controllers\CashinController;
use App\Http\Controllers\CashoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
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
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
Route::get('/cash-in', [CashinController::class, 'index'])->name('cash-in');
Route::get('/cash-out', [CashoutController::class, 'index'])->name('cash-out');
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('/client', [ClientController::class, 'index'])->name('client');
