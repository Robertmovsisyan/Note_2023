<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('/getProducts', [NotesController::class, 'getProducts']);


//Route::prefix(config('app.api_prefix'))->group(function () {
//    Route::get('/get-user/{id}', [NotesController::class, 'getUser'])->name('get_user');
//});

Route::get('/getid', [NotesController::class, 'getid']);
