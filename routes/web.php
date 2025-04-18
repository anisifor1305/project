<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('main');
})->middleware(App\Http\Middleware\isAuthed::class);
Route::get('/auth', function () {
    return view('auth');
});
Route::post('/auth', [App\Http\Controllers\AuthController::class, 'auth']);