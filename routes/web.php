<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
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
    return redirect('/form');
});

// 問い合わせ用
Route::group(['prefix' => 'form', 'as' => 'form.'], function () {
    Route::get('/', [FormController::class, 'index'])->name('index');
    Route::post('/', [FormController::class, 'post'])->name('post');

    Route::get('/confirm', [FormController::class, 'confirm'])->name('confirm');
    Route::post('/confirm', [FormController::class, 'store'])->name('store');

    Route::get('/thanks', [FormController::class, 'thanks'])->name('thanks');
});



// 管理者用
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::delete('/{contactId}', [AdminController::class, 'destroy'])->name('destroy');
});
