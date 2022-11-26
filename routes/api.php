<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
// ->middleware(['auth:web'])
->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});

Route::get('/', function () {
    return ['message' => 'ok'];
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
