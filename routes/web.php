<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('comment', 'App\Http\Controllers\CommentController');
Route::prefix('admin')
  ->namespace('App\Http\Controllers')
  ->middleware(['auth', 'verified', 'admin'])
  ->group(function() {
    Route::get('comment-rizky-amalsyah', 'CommentController@show')
      ->name('comment-rizky-amalsyah');
});

Route::prefix('admin')
  ->namespace('App\Http\Controllers\Admin')
  ->middleware(['auth', 'verified', 'admin'])
  ->group(function() {
    Route::get('/', 'DashboardController@index')
      ->name('admin-dashboard');
    Route::resource('admin-classification', 'ClassificationController');
    Route::resource('archive/admin-archive', 'ArchiveController');
    Route::resource('archive/admin-listdokumen', 'ListdokumenController');
    Route::resource('admin-loan', 'LoanController');
    Route::resource('admin-akun', 'AkunController');
    Route::get('/downloadfile/{items}','ListdokumenController@store')->name('downloadfile');
  });

  Route::prefix('user')
  ->namespace('App\Http\Controllers\User')
  ->middleware(['auth', 'verified'])
  ->group(function() {
    Route::get('/', 'DashboardController@index')
      ->name('dashboard');
      Route::resource('archive', 'ArchiveController');
      Route::resource('loan', 'LoanController');
  });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
