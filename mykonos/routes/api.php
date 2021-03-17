<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Comment;
use App\Http\Controllers\Api\Like;
use App\Http\Controllers\Api\Post;
use App\Http\Controllers\Api\Taxonomy;
use App\Http\Controllers\Api\User;
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

Route::apiResource('comments', CommentController::class);
Route::apiResource('likes', LikeController::class);
Route::apiResource('posts', PostController::class);
Route::apiResource('taxonomies', TaxonomyController::class);
Route::apiResource('users', UserController::class);