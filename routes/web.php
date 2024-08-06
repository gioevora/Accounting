<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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

// Contacts
Route::prefix('/contacts')->group(function () {
    Route::get('/view', [ContactController::class, 'index']);
    Route::get('/get-groups', [ContactController::class, 'get_groups']);
    Route::get('/search/{type}', [ContactController::class, 'search']);

    Route::get('/new', [ContactController::class, 'new']);
    Route::post('/add', [ContactController::class, 'add']);

    Route::get('/edit/{id}', [ContactController::class, 'edit']);
    Route::get('/get/{id}', [ContactController::class, 'get']);

    Route::post('/archive', [ContactController::class, 'archive']);
});

// Acctounting
Route::prefix('/bank')->group(function () {
    Route::get('/accounts', function () {
        return view('Accounting/BankAccounts');
    });

    Route::get('/new', function () {
        return view('Accounting/NewBankAccounts');
    });

    Route::get('/transfer', function () {
        return view('Accounting/TransferMoney');
    });
    Route::get('/rules', function () {
        return view('Accounting/BankRules');
    });
    Route::get('/create-rules', function () {
        return view('Accounting/CreateRule');
    });

    Route::get('/chart-accounts', function () {
        return view('Accounting/ChartAccounts');
    });
});


