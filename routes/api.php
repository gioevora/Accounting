<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ContactsController;
use App\Http\Controllers\API\GroupsController;
use App\Http\Controllers\API\AccountsController;
use App\Http\Controllers\API\ItemsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/contacts')->group(function () {
    Route::get('/search/{type}', [ContactsController::class, 'search']);
    Route::post('/add', [ContactsController::class, 'add']);
    Route::get('/edit/{id}', [ContactsController::class, 'edit']);
    Route::post('/archive', [ContactsController::class, 'archive']);
});

Route::prefix('/groups')->group(function () {
    Route::get('/all', [GroupsController::class, 'all']);
    Route::post('/add', [GroupsController::class, 'add']);
});

Route::prefix('/accounts')->group(function () {
    Route::get('/search/{type}', [AccountsController::class, 'search']);
    Route::post('/add', [AccountsController::class, 'add']);
    Route::get('/edit/{id}', [AccountsController::class, 'edit']);
    Route::post('/update', [AccountsController::class, 'update']);
});

Route::prefix('/items')->group(function () {
    Route::get('/all', [ItemsController::class, 'all']);
    Route::post('/add', [ItemsController::class, 'add']);
    Route::get('/edit/{id}', [ItemsController::class, 'edit']);
    Route::post('/update', [ItemsController::class, 'update']);
    Route::post('/archive', [ItemsController::class, 'archive']);
    Route::post('/delete', [ItemsController::class, 'delete']);
});

