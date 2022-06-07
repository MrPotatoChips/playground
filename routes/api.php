<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/user/create', [UserController::class, 'create']);

Route::get('/user/{code}', [UserController::class, 'view']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->group(function() {
//     //shared routes
//     Route::get('auth/me', [AuthController::class, 'me']);
//     Route::post('auth/logout', [AuthController::class, 'logout']);
//     Route::post('auth/password', [AuthController::class, 'changePassword']);

//     Route::prefix('admin')->middleware(['ability:admin'])->group(function() {
//         Route::apiResource('users', UserController::class);
//     });
// });