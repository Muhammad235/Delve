<?php

use App\Http\Controllers\QuestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/speech', function () {
    return view('audio');
});


Route::get('/quest', [QuestController::class, 'index']);
// Route::get('/speake', [QuestController::class, 'index']);
