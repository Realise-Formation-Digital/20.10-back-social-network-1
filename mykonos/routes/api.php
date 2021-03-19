<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\TaxonomyController;
use App\Http\Controllers\UserController as UserAuthController;

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




Route::group(['middleware' => 'auth:sanctum'], function () {
});

Route::apiResource('users', UserController::class);
Route::apiResource('posts', PostController::class);
Route::apiResource('taxonomies', TaxonomyController::class);
Route::apiResource('comments', CommentController::class);
Route::apiResource('likes', LikeController::class);

Route::post("login", [UserAuthController::class, 'login']);
Route::get("login", [UserAuthController::class, 'index']);
