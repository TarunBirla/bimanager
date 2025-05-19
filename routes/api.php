<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\CreateRFQandPO;


// Public


Route::post('/import-excel', [ExcelImportController::class, 'import']);
Route::post('/rfqimport-excel', [ExcelImportController::class, 'rfqimport']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'sendResetLink']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
// Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/craeterfqdata', [CreateRFQandPO::class, 'store']);
Route::post('/craetepodata', [CreateRFQandPO::class, 'storePO']);
// ✅ New GET routes
Route::get('/get-rfq-data', [CreateRFQandPO::class, 'getRFQ']);
Route::get('/get-po-data', [CreateRFQandPO::class, 'getPO']);



// Protected
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');;
});
