<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\ProductController;

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
    return view('Homepage/index');
});

Route::prefix('/contacts')->group(function () {
    Route::get('/view', [ContactsController::class, 'index']);
    Route::get('/search/{type}', [ContactsController::class, 'search']);

    Route::get('/get-groups', [ContactsController::class, 'get_groups']);
    Route::post('/add-group', [ContactsController::class, 'add_group']);

    Route::get('/new', [ContactsController::class, 'new']);
    Route::post('/add', [ContactsController::class, 'add']);

    Route::get('/edit/{id}', [ContactsController::class, 'edit']);
    Route::get('/get/{id}', [ContactsController::class, 'get']);

    Route::post('/archive', [ContactsController::class, 'archive']);
});

Route::prefix('/bank')->group(function () {
    Route::get('/accounts', [AccountingController::class, 'accounts']);
    Route::get('/new', [AccountingController::class, 'new']);

    Route::get('/transfer', [AccountingController::class, 'transfer']);

    Route::get('/rules', [AccountingController::class, 'rules']);
    Route::get('/create-rules', [AccountingController::class, 'create_rules']);

    Route::get('/chart-accounts', [AccountingController::class, 'chart_accounts']);
    Route::get('/search/{type}', [AccountingController::class, 'search']);
    Route::post('/add', [AccountingController::class, 'add']);
    Route::get('/get/{id}', [AccountingController::class, 'get']);
    Route::post('/update', [AccountingController::class, 'update']);
});

Route::prefix('/business')->group(function (){
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/all', [ProductController::class, 'all']);
    Route::post('/add', [ProductController::class, 'add']);
    Route::get('/get/{id}', [ProductController::class, 'get']);
    Route::post('/update', [ProductController::class, 'update']);
    Route::post('/archive', [ProductController::class, 'archive']);
    Route::post('/delete', [ProductController::class, 'delete']);
});


