<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalOrdersController;
use App\Http\Controllers\JournalOrder;
use App\Http\Controllers\PersonalCardsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\StaffingTablesController;
use App\Http\Controllers\SubdivisionsController;
use App\Http\Controllers\TypeEducationsController;
use App\Http\Controllers\TypeOrdersController;
use App\Http\Controllers\WorkBooksController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('journal_orders')->group(function() {
    Route::get('/', [JournalOrdersController::class, 'index']);
    Route::post('/', [JournalOrdersController::class, 'store']);
    Route::put('/', [JournalOrdersController::class, 'update']);
    Route::delete('/{id}', [JournalOrdersController::class, 'destroy']);
});

Route::prefix('personal_cards')->group(function() {
    Route::get('/', [PersonalCardsController::class, 'index']);
    Route::post('/', [PersonalCardsController::class, 'store']);
    Route::put('/', [PersonalCardsController::class, 'update']);
    Route::delete('/{id}', [PersonalCardsController::class, 'destroy']);
});

Route::prefix('positions')->group(function() {
    Route::get('/', [PositionsController::class, 'index']);
    Route::post('/', [PositionsController::class, 'store']);
    Route::put('/', [PositionsController::class, 'update']);
    Route::delete('/{id}', [PositionsController::class, 'destroy']);
});

Route::prefix('staffing_tables')->group(function() {
    Route::get('/', [StaffingTablesController::class, 'index']);
    Route::post('/', [StaffingTablesController::class, 'store']);
    Route::put('/', [StaffingTablesController::class, 'update']);
    Route::delete('/{id}', [StaffingTablesController::class, 'destroy']);
});

Route::prefix('subdivisions')->group(function() {
    Route::get('/', [SubdivisionsController::class, 'index']);
    Route::post('/', [SubdivisionsController::class, 'store']);
    Route::put('/', [SubdivisionsController::class, 'update']);
    Route::delete('/{id}', [SubdivisionsController::class, 'destroy']);
});

Route::prefix('type_educations')->group(function() {
    Route::get('/', [TypeEducationsController::class, 'index']);
    Route::post('/', [TypeEducationsController::class, 'store']);
    Route::put('/', [TypeEducationsController::class, 'update']);
    Route::delete('/{id}', [TypeEducationsController::class, 'destroy']);
});

Route::prefix('type_orders')->group(function() {
    Route::get('/', [TypeOrdersController::class, 'index']);
    Route::post('/', [TypeOrdersController::class, 'store']);
    Route::put('/', [TypeOrdersController::class, 'update']);
    Route::delete('/{id}', [TypeOrdersController::class, 'destroy']);
});

Route::prefix('work_books')->group(function() {
    Route::get('/', [WorkBooksController::class, 'index']);
    Route::post('/', [WorkBooksController::class, 'store']);
    Route::put('/', [WorkBooksController::class, 'update']);
    Route::delete('/{id}', [WorkBooksController::class, 'destroy']);
});
