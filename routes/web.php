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
    return view('masuk');
});



<<<<<<< HEAD
Route::get('/login', "AuthController@login")->name('login');
Route::post('/postLogin', "AuthController@postLogin");
Route::get('/logout', "AuthController@logout");
=======
Route::get('/login',"AuthController@login")->name('login');
Route::post('/postLogin',"AuthController@postLogin");
Route::get('/logout',"AuthController@logout");

Route::group(['middleware'=>['auth','CheckRole:admin']],function(){
//Route::get('/dashboard',"adminController@index");
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
Route::get('/postprestasi',"adminController@tambahprestasi");
Route::post('/postBerita',"adminController@postBerita")->name('post.berita');
Route::get('/Berita/{id}/edit',"adminController@edit");
Route::post('/Berita/{id}/update',"adminController@update");
Route::get('/Berita/{id}/hapus',"adminController@delete");
Route::get('/ipk',"adminController@ipk");
Route::get('/ipk/{id}',"adminController@showipk");
Route::post('/ipkcreate',"adminController@ipkcreate");
Route::get('/ipk/{id}/hapus',"adminController@deleteipk");
Route::get('/jadwal',"adminController@jadwal");
Route::get('/nilai_mhs',"adminController@nilai_mhs");
Route::get('/nilai/{id}',"adminController@showNilai");
Route::get('/sistem',"adminController@sistem");
Route::get('/proses/{cluster}',"adminController@proses");
Route::get('/mahasiswa/export_excel', 'adminController@export_excel');
Route::post('/mahasiswa/import_excel', 'adminController@import_excel');
>>>>>>> 2ce574eb550d975175d49c7ecd8190c4b8b7f019

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    Route::get('/dashboard', "adminController@index");
    Route::get('/post', "adminController@post");
    Route::get('/mahasiswa', "mahasiswaController@index");
    Route::post('/mahasiswa/create', "mahasiswaController@create");
    Route::get('/mahasiswa/{id}/edit', "mahasiswaController@edit");
    Route::post('/mahasiswa/{id}/update', "mahasiswaController@update");
    Route::get('/mahasiswa/{id}/hapus', "mahasiswaController@delete");
    Route::get('/dosen', "dosenController@index");
    Route::post('/dosen/create', "dosenController@create");
    Route::get('/dosen/{id}/edit', "dosenController@edit");
    Route::post('/dosen/{id}/update', "dosenController@update");
    Route::get('/dosen/{id}/hapus', "dosenController@delete");
    Route::get('/tabelpost ', "adminController@show")->name('tabelpost');
    Route::get('/post', "adminController@tambah");
    Route::get('/postprestasi', "adminController@tambahprestasi");
    Route::post('/postBerita', "adminController@postBerita")->name('post.berita');
    Route::get('/Berita/{id}/edit', "adminController@edit");
    Route::post('/Berita/{id}/update', "adminController@update");
    Route::get('/Berita/{id}/hapus', "adminController@delete");
    Route::get('/ipk', "adminController@ipk");
    Route::get('/ipk/{id}', "adminController@showipk");
    Route::post('/ipkcreate', "adminController@ipkcreate");
    Route::get('/ipk/{id}/hapus', "adminController@deleteipk");
    Route::get('/jadwal', "adminController@jadwal");
    Route::get('/nilai_mhs', "adminController@nilai_mhs");
    Route::get('/nilai/{id}', "adminController@showNilai");
    Route::get('/sistem', "adminController@sistem");
    Route::get('/proses/{cluster}', "adminController@proses");
    Route::get('/proses/{cluster}/iteration/{iteration}', "adminController@proses");
    Route::get('/proses/{cluster}/centroids/{centroids}', "adminController@proses");
    Route::get('/proses/{cluster}/iteration/{iteration}/centroids/{centroids}', "adminController@proses");
    Route::get('/mahasiswa/export_excel', 'adminController@export_excel');
    Route::post('/mahasiswa/import_excel', 'adminController@import_excel');
});

Route::group(['middleware' => ['auth', 'CheckRole:dosen,admin,mahasiswa']], function () {
    Route::get('/dashboard', "adminController@index");
    Route::get('/tipe', "adminController@tipe");
    Route::get('/konseling', "dosenController@konseling");
    Route::get('/konseling/{id}', "dosenController@showchat")->name('showChat');
    Route::get('/konsultasi/{id}', "adminController@showchat")->name('Chatmhs');
    Route::get('/konsultasi', "adminController@konsultasi");
    Route::get('/chat', "dosenController@chat");
    Route::post('/balas', "dosenController@balas");
    Route::post('/balasmhs', "adminController@balas");
    Route::get('/jadwalkonsultasi', "dosenController@jadwal");
    Route::get('/konsentrasi', "adminController@konsentrasi");
    Route::get('/tabel', "adminController@tabel");
    Route::get('/profile/{id}', "adminController@profilemhs")->name('showProfile');
    Route::get('/berita', "mahasiswaController@berita");
    Route::get('/profile', "mahasiswaController@profile");
    Route::post('/createkonsentrasi', 'adminController@createkonsentrasi');
    Route::post('/chat', "mahasiswaController@chat");
    Route::get('/nilai', "mahasiswaController@nilai");
    Route::get('/Berita/{id}', "mahasiswaController@lihat")->name('lihat');
    Route::get('/setting', "adminController@setting");
    Route::post('/tambahjadwal', "dosenController@tambahjadwal");
    Route::get('/jadwal/{id}/edit', "dosenController@editjadwal");
    Route::post('/jadwal/{id}/update', "dosenController@updatejadwal");
    Route::get('/jadwal/{id}/hapus', "dosenController@deletejadwal");
});


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();
