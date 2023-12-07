<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\LandingController;

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
    return redirect()->route('landing.en');
});

Route::get('/en', [LandingController::class, 'index'])->name('landing.en');

Route::get('/id', [LandingController::class, 'index'])->name('landing.id');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/admin', function () {
        return redirect()->route('admin.images');
    });

    Route::get('/admin/images', [ImagesController::class, 'index'])->name('admin.images');
    Route::get('/admin/images/create', [ImagesController::class, 'create'])->name('admin.images.create');
    Route::post('/admin/images/store', [ImagesController::class, 'store'])->name('admin.images.store');
    Route::get('/admin/images/edit/{id}', [ImagesController::class, 'edit'])->name('admin.images.edit');
    Route::put('/admin/images/update/{id}', [ImagesController::class, 'update'])->name('admin.images.update');
    Route::delete('/admin/images/destroy/{id}', [ImagesController::class, 'destroy'])->name('admin.images.destroy');
});
