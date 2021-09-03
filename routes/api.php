<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestAPIController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('first-api',[TestAPIController::class,'firstAPI']);
Route::get('/get-blog/{id}',[BlogController::class,'getBlog']);
Route::post('add-blog',[BlogController::class,'addBlog']);
Route::put('update-blog',[BlogController::class,'updateBlog']);
Route::delete('delete-blog/{id}',[BlogController::class,'deleteBlog']);
Route::get('search-blog/{param}',[BlogController::class,'searchBlog']);
Route::post('save-valid-blog',[BlogController::class,'validateDate']);
Route::post('file-upload',[FileUploadController::class,'FileUpload']);

Route::apiResource("post",PostController::class);
Route::post('login',[UserController::class,'login']);