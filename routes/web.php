<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ManageBookingController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Customer\ReviewController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BrandbookController;
use App\Models\Brandbook;

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

Route::post('/customers/booking/store', [BookingController::class, 'storeBooking'])->name('customers.booking.store');

Route::post('/customers/review/store', [ReviewController::class, 'store'])->name('customers.review.store');

Route::get('/customers/invoice/{id}', [InvoiceController::class, 'downloadInvoice'])->name('customers.invoice');

Route::post('/customers/bukti/store', [BookingController::class, 'uploadBuktiBayar'])->name('customers.bukti.store');

// getr bukti bayar
Route::get('/customers/bukti/{id}', [BookingController::class, 'getBuktiBayarByBookingId'])->name('customers.bukti.get');





Route::middleware(['auth.custom'])->group(function () {
    Route::get('/admin', function () {
        return redirect()->route('admin.images');
    });

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/customer', [CustomerController::class, 'index'])->name('admin.customer');


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
    Route::get('/admin/booking/detail/{id}', [ManageBookingController::class, 'show'])->name('admin.booking.detail');
    Route::put('/admin/booking/update-status/{id}', [ManageBookingController::class, 'updateStatus'])->name('admin.booking.update-status');
    Route::put('/admin/booking/update-paid-status/{id}', [ManageBookingController::class, 'updatePaidStatus'])->name('admin.booking.update-paid-status');

    Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('/admin/contact/create', [ContactController::class, 'create'])->name('admin.contact.create');
    Route::post('/admin/contact/store', [ContactController::class, 'store'])->name('admin.contact.store');
    Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
    Route::put('/admin/contact/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');
    Route::delete('/admin/contact/destroy/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');

    Route::get('/admin/brandbook', [BrandbookController::class, 'index'])->name('admin.brandbook');
    Route::get('/admin/brandbook/create', [BrandbookController::class, 'create'])->name('admin.brandbook.create');
    Route::post('/admin/brandbook/store', [BrandbookController::class, 'store'])->name('admin.brandbook.store');
    Route::get('/admin/brandbook/edit/{id}', [BrandbookController::class, 'edit'])->name('admin.brandbook.edit');
    Route::put('/admin/brandbook/update/{id}', [BrandbookController::class, 'update'])->name('admin.brandbook.update');
    Route::delete('/admin/brandbook/destroy/{id}', [BrandbookController::class, 'destroy'])->name('admin.brandbook.destroy');

});
