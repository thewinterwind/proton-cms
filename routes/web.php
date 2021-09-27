<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login-page', function () {
    return view('login');
});

Route::get('/row-level-components', function () {
    return view('row_level_components');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/video_feed', function () {
    return view('/video_feed/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Categories
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/categories/category-name', [App\Http\Controllers\CategoriesController::class, 'category']);
Route::get('/categories/category-name/category-id', [App\Http\Controllers\CategoriesController::class, 'page']);

// Collections
Route::get('/collections', [App\Http\Controllers\CollectionsController::class, 'index']);
Route::get('/collections/collection-name', [App\Http\Controllers\CollectionsController::class, 'collection']);
Route::get('/collections/create', [App\Http\Controllers\CollectionsController::class, 'create']);
Route::get('/collections/edit', [App\Http\Controllers\CollectionsController::class, 'edit']);
Route::get('/collections/delete', [App\Http\Controllers\CollectionsController::class, 'delete']);

// Assets
Route::get('/assets', [App\Http\Controllers\AssetsController::class, 'index']);
Route::get('/assets/upload-assets', [App\Http\Controllers\AssetsController::class, 'uploadIndex']);
Route::get('/assets/upload', [App\Http\Controllers\AssetsController::class, 'upload']);
Route::get('/assets/assets-details', [App\Http\Controllers\AssetsController::class, 'details']);

// Posts
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index']);
Route::get('/posts/post-details', [App\Http\Controllers\PostsController::class, 'details']);
Route::get('/posts/create-post', [App\Http\Controllers\PostsController::class, 'create']);


// Templates
Route::get('/templates', [App\Http\Controllers\TemplatesController::class, 'index']);
Route::get('/templates/edit', [App\Http\Controllers\TemplatesController::class, 'edit']);
Route::get('/templates/delete', [App\Http\Controllers\TemplatesController::class, 'delete']);






