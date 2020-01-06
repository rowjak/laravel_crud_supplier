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

// memuat controller di laravel php artisan make:controller {nama_controller}
Route::get('halo',"TestingController@halo");

// tanda danya ? artinya parameter opsional
Route::get('halaman/{page?}',function($page="profil"){
    return 'ini adalah halaman '.$page;
});

Route::get('halo/{nama?}','TestingController@halo');

//memberikan nama pada route yaitu {contact}, nama alias route tidak perlu sama dengan route getnya
Route::get('contact',function(){
    return 'ini adalah halaman contact';
})->name('contact');

//redirect ke route testing
Route::get('testing',function(){
    return redirect()->route('contact');
});

//route group, membuat route untuk semua subs
Route::group(['prefix' => 'produk'], function () {
    Route::get("all","ProductController@all");
    Route::get("shirt","ProductController@shirt");
    Route::get("latest","ProductController@latest");
    Route::get("popular","ProductController@popular");
});

// {aksesview}{nama_view}{parameter}
Route::view('katalog', 'vw_katalog',["produk"=>"dvd tutorial"]);

// untuk menampilkan list routing yang sudah dibuat menggunakan perintah 'php artisan route:list'


// -- Controller

Route::get('supplier','SupplierController@index');

//  -- Controller Resources

Route::resource('supplier', 'SupplierController');

Route::view('template', 'template/master');


Route::view('profil', 'vw_profil');
Route::view('about', 'vw_about');

Route::view('bootstrap', 'template/bootstrap');
