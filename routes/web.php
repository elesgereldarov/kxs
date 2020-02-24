<?php


//Route::get('/','front\HomeController@index');//Front Ana sayfa
//Route::get('/urun/{id}','front\HomeController@urun');//Front Ana sayfa


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
});



Route::get('/','admin\HomeController@index');//Admin Ana sayfa
Route::post('/kaydet','HomeController@kaydet');

//Works Isler
Route::get('/admin/works/{Id}','admin\UrunController@index');
Route::get('/admin/person_works/{Id}','admin\UrunController@person_works');


//Route::get('/admin/urunler/profile/{Id}','admin\UrunController@profile');
Route::get('/admin/urunler_user/{Id}','admin\UrunController@urunler_user');
Route::get('/admin/urunler','admin\UrunController@urunler');
Route::get('/admin/urun/edit/{Id}','admin\UrunController@edit');
Route::get('/admin/urun/del/{Id}','admin\UrunController@destroy');
Route::get('/admin/urun/show/{Id}','admin\UrunController@show');
Route::get('/admin/urun/ekle/{Id}','admin\UrunController@create');
Route::post('/admin/urun/save/{Id}','admin\UrunController@store');
Route::post('/admin/urun/update/{Id}','admin\UrunController@update');
Route::get('/admin/urun/getgaleri/{Id}','admin\UrunController@galeri_formu');
Route::get('/admin/urun/getgaleri_new','admin\UrunController@galeri_formu_new');
Route::post('/admin/urun/galeri/{Id}','admin\UrunController@galeri_ekle');
Route::get('/admin/urun/galerisil/{Id}','admin\UrunController@galeri_sil');




Route::get('/admin/mesajlar/{Id}','admin\SidebarController@mesajlar');
Route::get('/admin/comments/{Id}','admin\SidebarController@reyler');
Route::post('/admin/comments/{Id}','admin\SidebarController@rey_gonder');

Route::get('/admin/suallar/{Id}','admin\SidebarController@suallar');
Route::post('/admin/suallar/{Id}','admin\SidebarController@sual_gonder');


Route::get('/admin/urun/direct/{Id}','admin\SidebarController@direct');
Route::post('/admin/urun/direct_gonder','admin\SidebarController@direct_gonder');




Route::get('/admin/direct_to/{Id}','admin\SidebarController@direct_to');
Route::get('/admin/direct_to_all/{Id}','admin\SidebarController@direct_to_all');
Route::post('/admin/direct_solution/{Id}','admin\SidebarController@direct_solution');

//Route::post('/admin/reyler/{Id}','admin\SidebarController@reyler');




//Kategori Islemleri
Route::get('/admin/kategoriler','admin\KategoriController@index');
Route::get('/admin/kategori/edit/{Id}','admin\KategoriController@edit');
Route::get('/admin/kategori/del/{Id}','admin\KategoriController@destroy');
Route::get('/admin/kategori/show/{Id}','admin\KategoriController@show');
Route::get('/admin/kategori/ekle','admin\KategoriController@create');
Route::post('/admin/kategori/save','admin\KategoriController@store');
Route::post('/admin/kategori/update/{Id}','admin\KategoriController@update');

//front islemleri
Route::get('/front','admin\UrunController@index');


//Admin Login Islemleri
Route::get('/admin/login','admin\LoginController@index')->name('admin.login');
Route::post('/admin/login','admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout','admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/register','admin\LoginController@register_form')->name('admin.register');
Route::post('/admin/register','admin\LoginController@register_save')->name('admin.register');


//Front Login Islemleri
Route::get('/login','front\LoginController@login_form')->name('login');
Route::post('/login','front\LoginController@login')->name('login');
Route::get('logout','front\LoginController@logout')->name('logout');
Route::get('register','front\LoginController@register_form')->name('register');
Route::post('register','front\LoginController@register_save')->name('register');


//User Proccess
Route::get('user','front\UserController@index')->name('user');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Laravel live search
Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Route::get('/admin/loginn','admin\SidebarController@index')->name('admin.loginn');











