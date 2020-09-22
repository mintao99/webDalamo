<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
	
Route::resource('brand', 'App\Http\Controllers\Api\BrandController');

Route::resource('category', 'App\Http\Controllers\Api\CategoryController');

Route::resource('comment', 'App\Http\Controllers\Api\CommentController');

Route::resource('detail-import-product', 'App\Http\Controllers\Api\DIPController');

Route::resource('detail-order', 'App\Http\Controllers\Api\DOController');

Route::resource('import-product', 'App\Http\Controllers\Api\IPController');

Route::resource('order-receipt', 'App\Http\Controllers\Api\ORController');

Route::resource('order-status', 'App\Http\Controllers\Api\OSController');

Route::resource('permission', 'App\Http\Controllers\Api\PermissionController');

Route::resource('product', 'App\Http\Controllers\Api\ProductController');

Route::resource('product-category', 'App\Http\Controllers\Api\PCController');

Route::resource('provider', 'App\Http\Controllers\Api\ProviderController');

Route::resource('role', 'App\Http\Controllers\Api\RoleController');

Route::resource('user', 'App\Http\Controllers\Api\UserController');

Route::resource('user-permission', 'App\Http\Controllers\Api\UPController');
