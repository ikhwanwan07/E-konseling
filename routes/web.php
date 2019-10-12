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
    return view('welcome');
});



Route::get('/login',"AuthController@login")->name('login');
Route::post('/postLogin',"AuthController@postLogin");
Route::get('/logout',"AuthController@logout");

Route::group(['middleware'=>['auth','CheckRole:admin']],function(){
Route::get('/dashboard',"adminController@index");
Route::get('/post',"adminController@post");
Route::get('/mahasiswa',"mahasiswaController@index");
Route::post('/mahasiswa/create',"mahasiswaController@create");
Route::get('/mahasiswa/{id}/edit',"mahasiswaController@edit");
Route::post('/mahasiswa/{id}/update',"mahasiswaController@update");
Route::get('/mahasiswa/{id}/hapus',"mahasiswaController@delete");
Route::get('/dosen',"dosenController@index");
Route::post('/dosen/create',"dosenController@create");
Route::get('/dosen/{id}/edit',"dosenController@edit");
Route::post('/dosen/{id}/update',"dosenController@update");
Route::get('/dosen/{id}/hapus',"dosenController@delete");
Route::get('/tabelpost ',"adminController@show")->name('tabelpost');
Route::get('/post',"adminController@tambah");
Route::post('/postBerita',"adminController@postBerita")->name('post.berita');
Route::get('/Berita/{id}/edit',"adminController@edit");
Route::post('/Berita/{id}/update',"adminController@update");
Route::get('/Berita/{id}/hapus',"adminController@delete");
Route::get('/prestasi',"adminController@prestasi");
Route::get('/jadwal',"adminController@jadwal");
Route::get('/nilai_mhs',"adminController@nilai_mhs");

});

Route::group(['middleware'=>['auth','CheckRole:dosen,admin,mahasiswa']],function(){
    Route::get('/dashboard',"adminController@index");
    Route::get('/tipe',"adminController@tipe");
    Route::get('/konseling',"dosenController@konseling");
    Route::get('/konsultasi',"adminController@konsultasi");
    Route::get('/konsentrasi',"adminController@konsentrasi");
    Route::get('/tabel',"adminController@tabel");
    Route::get('/berita',"mahasiswaController@berita");
    Route::get('/profile',"mahasiswaController@profile");
    Route::get('/nilai',"mahasiswaController@nilai");
    Route::get('/Berita/{id}',"mahasiswaController@lihat")->name('lihat');
    Route::get('/setting',"adminController@setting");


    

});


//Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');