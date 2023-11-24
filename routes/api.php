<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalOrdersController;
use App\Http\Controllers\JournalOrder;
use App\Http\Controllers\PersonalCardController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\StaffingTableController;
use App\Http\Controllers\SubdivisionController;
use App\Http\Controllers\TypeEducationController;
use App\Http\Controllers\TypeOrderController;
use App\Http\Controllers\WorkBookController;

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

Route::prefix('journal-orders')->group(function() {
    Route::get('/', [JournalOrdersController::class, 'index']);
});
