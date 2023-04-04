<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('/users', \App\Http\Controllers\UserController::class);
Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'show']);

Route::apiResource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show']);

Route::apiResource('/bills', \App\Http\Controllers\BillController::class);
Route::get('/bills/{id}', [\App\Http\Controllers\BillController::class, 'show']);
Route::delete('/bills/{id}', [\App\Http\Controllers\BillController::class, 'destroy']);

Route::apiResource('/membersOfBill', \App\Http\Controllers\MemberOfBillController::class);
Route::get('/membersOfBill/{id}', [\App\Http\Controllers\MemberOfBillController::class, 'show']);
Route::get('/membersOfBill/friend/{id}', [\App\Http\Controllers\MemberOfBillController::class, 'getFriendBill']);
