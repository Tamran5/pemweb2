<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::get('/kategori/{slug}', function ($slug) {
    return view('kategori', ['slug' => $slug]);
})->name('kategori.tampil');

Route::get('/produk/{id}', function ($id) {
    return view('produk', ['id' => $id]);
})->name('produk.tampil');

// Rute publik tanpa autentikasi
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

// Rute yang memerlukan autentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    // Checkout
    Route::get('/pembayaran', function () {
        return view('pembayaran');
    })->name('pembayaran');

    // Riwayat Pesanan
    Volt::route('/pesanan', 'pesanan.index')->name('pesanan.daftar');
    Volt::route('/pesanan/{order_id}', 'pesanan.show')->name('pesanan.tampil');

    // Pengaturan Pengguna
    Route::redirect('/pengaturan', '/pengaturan/profil');
    Volt::route('/pengaturan/profil', 'pengaturan.profil')->name('pengaturan.profil');
    Volt::route('/pengaturan/alamat', 'pengaturan.alamat')->name('pengaturan.alamat');
    Volt::route('/pengaturan/metode-pembayaran', 'pengaturan.metode-pembayaran')->name('pengaturan.metode-pembayaran');
});

// Rute untuk admin (dengan middleware tambahan)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dasbor', function () {
        return view('admin.dasbor');
    })->name('admin.dasbor');

    Volt::route('/produk', 'admin.produk.index')->name('admin.produk.daftar');
    Volt::route('/produk/tambah', 'admin.produk.tambah')->name('admin.produk.tambah');
    Volt::route('/produk/{id}/edit', 'admin.produk.edit')->name('admin.produk.edit');
});

// Sertakan rute autentikasi default Laravel
require __DIR__.'/auth.php';