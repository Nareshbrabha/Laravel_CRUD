<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\displayBasha;

Route::get('/', [displayBasha::class,"index"] );
Route::post('/add/user',[displayBasha::class,"adduser"]);
Route::delete('/del/user/{id}',[displayBasha::class,"deluser"]);
Route::get('/editview/user/{id}',[displayBasha::class,"editview"]);
Route::post('/edit/user/{id}',[displayBasha::class,"edit"]);