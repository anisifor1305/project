<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\MainPageController::class, 'showPanel'])->middleware(App\Http\Middleware\isAuthed::class);
Route::get('/auth', function () {
    return view('auth');
});
Route::post('/auth', [App\Http\Controllers\AuthController::class, 'auth']);
Route::post('/newproject',[App\Http\Controllers\NewProjectController::class, 'newProject']);
// Route::get('/dashboard', function () {

//     return Inertia::render('Admin');

// })->name('dashboard');