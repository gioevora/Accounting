<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ContactsController;
use App\Http\Controllers\User\AccountingController;
use App\Http\Controllers\User\BusinessController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::prefix('/contacts')->group(function () {
    Route::get('/view/{type}', [ContactsController::class, 'index']);
    Route::get('/add', [ContactsController::class, 'add']);
    Route::get('/edit/{id}', [ContactsController::class, 'edit']);
    Route::get('/details/{id}', [ContactsController::class, 'details']);

});

Route::prefix('/accounting/accounts')->group(function () {
    Route::get('/', [AccountingController::class, 'accounts']);
});

Route::prefix('/business/items')->group(function () {
    Route::get('/', [BusinessController::class, 'items']);
});

Route::prefix('/business/invoices')->group(function () {
    Route::get('/', [BusinessController::class, 'invoices']);
    Route::get('/add', [BusinessController::class, 'add_invoice']);
});

Route::prefix('/business/quotes')->group(function () {
    Route::get('/', [BusinessController::class, 'quotes']);
    Route::get('/add', [BusinessController::class, 'add_quote']);
});

Route::prefix('/business/bills')->group(function () {
    Route::get('/', [BusinessController::class, 'bills']);
    Route::get('/add', [BusinessController::class, 'add_bill']);
});



// Route::prefix('/bank')->group(function () {
//     Route::get('/accounts', [AccountingController::class, 'accounts']);
//     Route::get('/new', [AccountingController::class, 'new']);

//     Route::get('/transfer', [AccountingController::class, 'transfer']);

//     Route::get('/rules', [AccountingController::class, 'rules']);
//     Route::get('/create-rules', [AccountingController::class, 'create_rules']);

//     Route::get('/chart-accounts', [AccountingController::class, 'chart_accounts']);
//     Route::get('/search/{type}', [AccountingController::class, 'search']);
//     Route::post('/add', [AccountingController::class, 'add']);
//     Route::get('/get/{id}', [AccountingController::class, 'get']);
//     Route::post('/update', [AccountingController::class, 'update']);
// });


