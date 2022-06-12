<?php

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
    return view('login');
});
// Landingpage
Route::get('/','MenuController@home')->name('home');

// Login Ke Dashboard Admin
Route::get('admin/index','AdminController@index');
Route::get('admin','AdminController@showFormLogin')->name('admin');
Route::get('admin', 'AdminController@showFormLogin')->name('admin');
Route::post('admin', 'AdminController@admin');
Route::get('register', 'AdminController@showFormRegister')->name('register');
Route::post('register', 'AdminController@register');
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('master', 'HomeController@index')->name('master');
    Route::get('logout', 'AdminController@logout')->name('logout');
 
});

Route::get('registrasi/index','RegistrasiController@index');
Route::get('registrasi','RegistrasiController@showFormLogin2')->name('registrasi');
Route::get('registrasi', 'RegistrasiController@showFormLogin2')->name('registrasi');
Route::post('registrasi', 'RegistrasiController@admin2');
Route::get('reg', 'RegistrasiController@showFormRegister')->name('reg');
Route::post('reg', 'RegistrasiController@register');
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('rumah', 'RumahController@index')->name('rumah');
    Route::get('logout2', 'RegistrasiController@logout2')->name('logout2');
 
});

// Menu Kamar Admin
Route::get('/kamar','AdminKamarController@index')->name('kamar');
Route::get('/kamar-create','AdminKamarController@create')->name('kamar-create');
Route::post('/kamar-store','AdminKamarController@store')->name('kamar-store');
Route::get('/kamar-edit-{id_kamar}','AdminKamarController@edit');
Route::post('/kamar-update-{id_kamar}','AdminKamarController@update');
Route::get('/kamar-destroy-{id_kamar}','AdminKamarController@destroy');
Route::get('/kamar-show-{id_kamar}','AdminKamarController@show');


// Menu Fasilitas Kamar Admin
Route::get('/fasilitas_kamar','AdminFasilitasKamarController@index')->name('fasilitas_kamar');
Route::get('/fasilitas_kamar-create','AdminFasilitasKamarController@create')->name('fasilitas_kamar-create');
Route::post('/fasilitas_kamar-store','AdminFasilitasKamarController@store')->name('fasilitas_kamar-store');
Route::get('/fasilitas_kamar-edit-{id_fk}','AdminFasilitasKamarController@edit');
Route::post('/fasilitas_kamar-update-{id_fk}','AdminFasilitasKamarController@update');
Route::get('/fasilitas_kamar-destroy-{id_fk}','AdminFasilitasKamarController@destroy');
Route::get('/fasilitas_kamar-show-{id_fk}','AdminFasilitasKamarController@show');

// Menu Fasilitas Hotel Admin
Route::get('/fasilitas_hotel','AdminFasilitasHotelController@index')->name('fasilitas_hotel');
Route::get('/fasilitas_hotel-create','AdminFasilitasHotelController@create')->name('fasilitas_hotel-create');
Route::post('/fasilitas_hotel-store','AdminFasilitasHotelController@store')->name('fasilitas_hotel-store');
Route::get('/fasilitas_hotel-edit-{id_fh}','AdminFasilitasHotelController@edit');
Route::post('/fasilitas_hotel-update-{id_fh}','AdminFasilitasHotelController@update');
Route::get('/fasilitas_hotel-destroy-{id_fh}','AdminFasilitasHotelController@destroy');
Route::get('/fasilitas_hotel-show-{id_fh}','AdminFasilitasHotelController@show');

// Menu Pemesanan Admin
Route::get('/pemesanan1','AdminPemesananController@index')->name('pemesanan1');
Route::get('/pemesanan1-edit-{id_pemesanan}','AdminPemesananController@edit');
Route::post('/pemesanan1-update-{id_pemesanan}','AdminPemesananController@update');
Route::get('/pemesanan2','AdminPemesananController@rumah')->name('pemesanan2');
Route::post('/pemesanan2-update-{id_pemesanan}','AdminPemesananController@perbarui');
Route::get('/pemesanan-show-{id_pemesanan}','AdminPemesananController@show');

// Menu User Admin 
Route::get('/user','AdminUserController@index')->name('user');

// Login Ke Dashboard Resepsionis
Route::get('/master-resepsionis', 'ResepsionisController@index')->name('master-resepsionis');


// Menu Tamu Resepsionis 
Route::get('/tamu','ResepsionisTamuController@index')->name('tamu');

// Menu Pemesanan Resepsionis 
Route::get('/pemesanan','ResepsionisPemesananController@index')->name('pemesanan');
Route::get('/pemesanan-edit-{id_pemesanan}','ResepsionisPemesananController@edit');
Route::post('/pemesanan-update-{id_pemesanan}','ResepsionisPemesananController@update');

// Menu Room 
Route::get('/home','MenuController@home')->name('home');
Route::get('/room','MenuController@room')->name('room');
Route::get('/detail_kamar-{id_kamar}','MenuController@detail_kamar');
Route::get('/facility','MenuController@fasilitas')->name('facility');
Route::get('/contact','MenuController@contact')->name('contact');
Route::get('/pesan-{id_kamar}','MenuController@pesan');
Route::post('/konfirmasi','MenuController@konfirmasi')->name('konfirmasi');
Route::get('/struk','MenuController@struk')->name('struk');

// Pencarian
Route::get('/pencarian','PencarianController@index')->name('pencarian');