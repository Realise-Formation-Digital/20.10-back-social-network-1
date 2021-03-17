<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Taxonomy;
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
Route::apiResource('Likes', LikeController::class);
Route::apiResource('Posts', PostController::class);
Route::apiResource('Taxonomies', TaxonomyController::class);
