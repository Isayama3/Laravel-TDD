<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('books', BookController::class)->middleware(["auth","validated"]);
Route::resource('authors', AuthorController::class);
Route::get('books/create',[BookController::class,"create"])->middleware(['can:create,App\Models\Book']);

Route::get("demo",function (){
    return \App\Facades\Char::koko();
});
