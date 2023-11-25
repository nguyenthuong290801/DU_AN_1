<?php

use Illuminate\framework\factory\Route;
use App\controllers\seller\ApiController as SellerApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/

Route::get('/api/product-category', [SellerApiController::class, 'getProductCategory']);
Route::get('/api/attribute-option/{param}', [SellerApiController::class, 'getAttributeOption']);
Route::post('/api/product/new', [SellerApiController::class, 'store']);