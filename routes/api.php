<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// Trasy dla postów
Route::apiResource('posts', PostController::class);

// Trasy dla kategorii
Route::apiResource('categories', CategoryController::class);

// // Przypisywanie kategorii do posta
// Route::post('posts/{post}/categories', [PostController::class, 'attachCategories']);
// Route::delete('posts/{post}/categories/{category}', [PostController::class, 'detachCategory']);

// // Przywracanie usuniętych kategorii
// Route::post('categories/{category}/restore', [CategoryController::class, 'restore']);
