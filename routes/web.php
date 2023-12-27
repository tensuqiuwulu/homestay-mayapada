<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ManageBookingController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\ContactController;

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

Route::post('/customers/auth/register', [CustomerAuthController::class, 'register'])->name('customers.auth.register');
Route::post('/customers/auth/login', [CustomerAuthController::class, 'login'])->name('customers.auth.login');
Route::get('/customers/auth/logout', [CustomerAuthController::class, 'logout'])->name('customers.auth.logout');


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

    Route::get('/admin/room', [RoomController::class, 'index'])->name('admin.room');
    Route::get('/admin/room/create', [RoomController::class, 'create'])->name('admin.room.create');
    Route::post('/admin/room/store', [RoomController::class, 'store'])->name('admin.room.store');
    Route::get('/admin/room/edit/{id}', [RoomController::class, 'edit'])->name('admin.room.edit');
    Route::put('/admin/room/update/{id}', [RoomController::class, 'update'])->name('admin.room.update');
    Route::delete('/admin/room/destroy/{id}', [RoomController::class, 'destroy'])->name('admin.room.destroy');

    Route::get('/admin/booking', [ManageBookingController::class, 'index'])->name('admin.booking');

    Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('/admin/contact/create', [ContactController::class, 'create'])->name('admin.contact.create');
    Route::post('/admin/contact/store', [ContactController::class, 'store'])->name('admin.contact.store');
    Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
    Route::put('/admin/contact/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');
    Route::delete('/admin/contact/destroy/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');

});
