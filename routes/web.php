<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/vue',[NotesController::class,'vue'])->name('vue');

Route::post('/create_notes',[NotesController::class,'create_notes'])->name('create_notes');
Route::get('/Note_update/{id}',[NotesController::class,'Note_update'])->name('Note_update');

Route::post('/update_note',[NotesController::class,'update_note'])->name('update_note');
Route::post('/note_delete',[NotesController::class,'note_delete'])->name('note_delete');

