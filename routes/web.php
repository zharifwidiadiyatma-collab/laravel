<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    echo " Hai, Selamat Datang di Website Laravel";
});
Route::get('/about',function () {
    echo " NIM : 26029 <br> Nama : Zharif widi <br> Kelas : 2RPLB";
} );
Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman artikel dengan ID : $id";
} );

/** 
Route::get('/hello', function () {
    return 'Hello, World!';
});
Route::get('siswa', function ($id) {
});
Route::post('siswa', function ($id) {
});
Route::put('siswa', function ($id) {
});
Route::delete('siswa', function ($id) {
});
Route::get('siswa/{id}', function ($id) {
});
Route::put('siswa/{id}', function ($id) {
});
Route::delete('siswa/{id}', function ($id) {
}); */


?>