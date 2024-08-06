<?php

use Illuminate\Routing\RouteGroup;
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
    return view('Homepage/index');
});

// Contacts
Route::prefix('/contacts')->group(function () {
    Route::get('/all', function () {
        return view('Contacts/AllContacts');
    });

    Route::get('/new', function () {
        return view('Contacts/NewContacts');
    });
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


