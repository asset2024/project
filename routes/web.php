<?php

use App\Http\Controllers\CashinController;
use App\Http\Controllers\CashoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CngController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LpgController;
use App\Http\Controllers\PasirjadiController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PltmController;
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
    return view('pages/page-login');
});
Route::get('/dashboard', [DashboardController::class, 'enm']);
// Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
// Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard-enm', [DashboardController::class, 'enm'])->name('dashboard-enm');
Route::get('/dashboard-muji', [DashboardController::class, 'muji'])->name('dashboard-muji');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::post('/project/store', [ProjectController::class, 'store'])->name('store_project');

Route::get('/detail-project/{id}', [ProjectController::class, 'detail'])->name('detail-project');



Route::put('/project/{id}', [ProjectController::class, 'update'])->name('update_project');
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
Route::post('/pekerjaan/store', [PekerjaanController::class, 'store'])->name('store_pekerjaan');
Route::put('/pekerjaan/{id}', [PekerjaanController::class, 'update'])->name('update_pekerjaan');

Route::get('/pltm', [PltmController::class, 'index'])->name('pltm');

Route::get('/cng', [CngController::class, 'index'])->name('cng');

Route::get('/pasirjadi', [PasirjadiController::class, 'index'])->name('pasirjadi');

Route::get('/lpg', [LpgController::class, 'index'])->name('lpg');
Route::get('/lpg-detail', [LpgController::class, 'detail'])->name('lpg-detail');


Route::get('/cashin', [CashinController::class, 'index'])->name('cashin');
Route::post('/cashin/store', [CashinController::class, 'store'])->name('store_cashin');
Route::put('/cashin/{id}', [CashinController::class, 'update'])->name('update_cashin');

Route::get('/cashout', [CashoutController::class, 'index'])->name('cashout');
Route::post('/cashout/store', [CashoutController::class, 'store'])->name('store_cashout');
Route::put('/cashout/{id}', [CashoutController::class, 'update'])->name('update_cashout');

Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('/client', [ClientController::class, 'index'])->name('client');

Route::get('/harga', [HargaController::class, 'index'])->name('harga');
