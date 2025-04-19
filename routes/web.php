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
Route::post('/newproject',[App\Http\Controllers\NewProjectController::class, 'newProject'])->middleware(App\Http\Middleware\isAuthed::class);
Route::get('/report/{project}', [App\Http\Controllers\ProjectController::class, 'projectDone'])->middleware(App\Http\Middleware\isAuthed::class);
Route::post('/addproject', [App\Http\Controllers\ProjectController::class, 'addProject'])->middleware(App\Http\Middleware\isAuthed::class);
Route::post('/adduser', [App\Http\Controllers\UserController::class, 'newUser'])->middleware(App\Http\Middleware\isAuthed::class);
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);