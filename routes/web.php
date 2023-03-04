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
    return redirect('/form/contact');
});

Route::get('/form/contact', [FormController::class, 'contact'])->name('contact');
Route::post('/form/contact', [FormController::class, 'post'])->name('post');

Route::get('/form/confirm', [FormController::class, 'confirm'])->name('confirm');
Route::post('/form/confirm', [FormController::class, 'store'])->name('store');

Route::get('/form/thanks', [FormController::class, 'thanks'])->name('thanks');

// 管理者用
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::delete('/admin/{contactId}', [AdminController::class, 'destroy'])->name('admin.destroy');
