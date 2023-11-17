<?php

use Illuminate\framework\factory\Route;
use App\controllers\admin\ApiController as AdminApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/
Route::get('/', [AdminApiController::class, 'index']);
//Route::get('/api/product', [AdminApiController::class, 'index']);
Route::post('/api/product', [AdminApiController::class, 'store']);

Route::get('/api/product/{id}', [AdminApiController::class, 'show']);
Route::post('/api/product/update/{id}', [AdminApiController::class, 'update']);
Route::post('/api/product/destroy/{id}', [AdminApiController::class, 'destroy']);
Route::post('/api/product/delete/{id}', [AdminApiController::class, 'delete']);
Route::post('/api/product/restore/{id}', [AdminApiController::class, 'restore']);
Route::get('/api/product/search/{id}', [AdminApiController::class, 'searchByName']);
