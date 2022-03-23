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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', 'dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', function() {
        // ホーム画面
        return view('dashboard');
    })->name('dashboard');

    Route::get('/groups/{id}', function() {
        // グループ詳細画面
        return 'groups show';
    })->whereNumber('id');

    Route::get('/groups/create', function() {
        // グループ作成画面
        return 'groups create';
    });

    Route::post('/groups', function() {
        // グループ作成
        return redirect('dashboard');
    });

    Route::get('/groups/{id}/edit', function() {
        // グループ編集画面
        return 'groups edit';
    })->whereNumber('id');

    Route::put('/groups/{id}', function() {
        // グループ編集
        return redirect('dashboard');
    });

    Route::delete('/groups/{id}', function() {
        // グループ削除
        return redirect('dashboard');
    });
});
