<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;



// posts
Route::group(['prefix' => 'v1'], function () {
    Route::get('/posts', [PostController::class, 'index'])->name('api.posts.index');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('api.posts.show');
    // Route::post('/posts', [PostController::class, 'store'])->name('api.posts.store');
    // Route::put('/posts/{customer}', [PostController::class, 'update'])->name('api.posts.update');
    // Route::delete('/posts/{customer}', [PostController::class, 'destroy'])->name('api.posts.destroy');
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
