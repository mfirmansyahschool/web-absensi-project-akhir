<?php

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
    if (Auth::user()) {
        return redirect('/redirect');
    }
    return view('welcome');
});

Route::get('/home', function(){
    return redirect('/redirect');
});

Auth::routes(['register' => false]);

Route::get('/redirect', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('users.index');

Route::middleware('auth')->prefix('account')->name('account.')->group(function(){
    Route::get('identitas', 'UsersController@identitas')->name('identitas');
    Route::get('akun', 'UsersController@akun')->name('akun');
    Route::put('akun', 'UsersController@akunUpdate')->name('akun.update');
    Route::put('identitas', 'UsersController@identitasUpdate')->name('identitas.update');
});

Route::get('/contoh', function(){
    return view('home');
});

Route::middleware('Guru')->prefix('guru')->name('guru.')->group(function(){
    Route::get('', 'GuruController@index')->name('index');
});

Route::middleware('PiketKurikulum')->prefix('piket-kurikulum')->name('piketkurikulum.')->group(function(){
    Route::get('', 'PiketKurikulumController@index')->name('index');
    Route::get('absensi', 'PiketKurikulumController@absensi')->name('absensi');
    Route::get('laporan', 'PiketKurikulumController@laporan')->name('laporan');
    Route::get('daftar-guru', 'PiketKurikulumController@daftarGuru')->name('daftar-guru');
    Route::get('daftar-siswa', 'PiketKurikulumController@daftarSiswa')->name('daftar-siswa');
});

Route::middleware('Orangtua')->prefix('orangtua')->name('orangtua.')->group(function(){
    Route::get('', 'OrangtuaController@index')->name('index');
});