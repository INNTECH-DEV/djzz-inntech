<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CommentController;

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


Route::middleware('auth:sanctum')->group(function () {

    // Client
    Route::get('/clients', [ClientController::class, 'index']);
    Route::post('/clients', [ClientController::class, 'store']);
    Route::get('/clients/{id}', [ClientController::class, 'show']);
    Route::post('/edit-client/{id}', [ClientController::class, 'update']);
    Route::delete('/clients/{id}', [ClientController::class, 'destroy']);

    // User
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/user/update', [UserController::class, 'update']);
    Route::post('/client/update', [ClientController::class, 'update']);
    Route::post('/client/show', [ClientController::class, 'show']);

    // Documents
    Route::post('/document/generate/{id}', [DocumentController::class, 'generate']);
    Route::get('/documents', [DocumentController::class, 'index']);

    // Files
    Route::post('/file/upload', [FileController::class, 'upload']);
    Route::get('/files/{id}', [FileController::class, 'show']);
    Route::delete('/files/{id}', [FileController::class, 'destroy']);
    Route::post('/files/download/{id}', [FileController::class, 'download']);

    // Files
    Route::get('/comments', [CommentController::class, 'index']);
    Route::get('/comments/${id}', [CommentController::class, 'show']);
    Route::post('/comments', [CommentController::class, 'store']);
    
});