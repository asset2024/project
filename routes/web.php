<?php

use App\Http\Controllers\CashinController;
use App\Http\Controllers\CashoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CngController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\detailController;
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


// Route::get('/', function () {
//     return view('pages.admin.');
// });
Route::get('/', [DashboardController::class, 'enm']);
Route::get('/dashboard-enm', [DashboardController::class, 'enm'])->name('dashboard-enm');
Route::get('/dashboard-muji', [DashboardController::class, 'muji'])->name('dashboard-muji');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::post('/project/store', [ProjectController::class, 'store'])->name('store_project');

Route::get('/detail-project', [ProjectController::class, 'detail'])->name('detail-project');
Route::get('/detail-project2', [ProjectController::class, 'detail2'])->name('detail-project2');


Route::put('/project/{id}', [ProjectController::class, 'update'])->name('update_project');
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
Route::post('/pekerjaan/store', [PekerjaanController::class, 'store'])->name('store_pekerjaan');
Route::put('/pekerjaan/{id}', [PekerjaanController::class, 'update'])->name('update_pekerjaan');

Route::get('/pltm', [PltmController::class, 'index'])->name('pltm');

Route::get('/cng', [CngController::class, 'index'])->name('cng');

Route::get('/pasirjadi', [PasirjadiController::class, 'index'])->name('pasirjadi');

Route::get('/lpg', [LpgController::class, 'index'])->name('lpg');


Route::get('/cashin', [CashinController::class, 'index'])->name('cashin');
Route::post('/cashin/store', [CashinController::class, 'store'])->name('store_cashin');
Route::put('/cashin/{id}', [CashinController::class, 'update'])->name('update_cashin');

Route::get('/cashout', [CashoutController::class, 'index'])->name('cashout');
Route::post('/cashout/store', [CashoutController::class, 'store'])->name('store_cashout');
Route::put('/cashout/{id}', [CashoutController::class, 'update'])->name('update_cashout');

Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::post('/invoice/store', [InvoiceController::class, 'store'])->name('store_invoice');
Route::get('/client', [ClientController::class, 'index'])->name('client');
