<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController; // Import controller

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
    // Arahkan root ke halaman login atau dashboard admin jika sudah login
    // Untuk sementara bisa ke halaman produk
    return redirect()->route('admin.products.index');
    // return view('welcome');
});

// Grup route untuk Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Middleware 'auth' bisa ditambahkan di sini nanti untuk proteksi login
    // Route::middleware(['auth', 'verified'])->group(function () {

        // Route resource untuk Produk
        Route::resource('products', ProductController::class);

    // }); // Akhir grup middleware
}); // Akhir grup prefix admin


// Route bawaan Laravel untuk autentikasi (jika Anda menginstalnya nanti)
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
