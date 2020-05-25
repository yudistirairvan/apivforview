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

// Route::get('/', function () {
//     return view('home');
// });

use App\Hashers\ArtikelHasher;

// Route::get('/', 'ArtikelController@home');
// Route::get('/home', 'ArtikelController@home');
// Route::get('login', function (){
//     return view('login');
// });
// Route::get('Broadcast', function(){


//         $details['email'] = 'yudistirairvan@gmail.com';
//         dispatch(new \App\Jobs\BroadcastEmailtoSubscriber($details));

//         dd('Berhasil');
// });
Route::get('/', function(){

    return redirect('login');
});

Route::get('login', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout');


Route::get('/artikel/{artikel}', 'ArtikelController@read');
Route::post('/subscribe/add', 'SubscriberController@add');
Route::post('/contactus/send', 'ContactUsController@send');
Route::get('/kategori/{kategoriname}', 'ArtikelController@listbykategori');

Route::get('/infoloker', 'ArtikelController@loker');
Route::get('/infoloker/{artikel}', 'ArtikelController@readloker');


Route::group(['prefix' => 'admin','middleware' => ['auth', 'role:super-admin']],function() {
    // Route::get('/', function(){

    //     return redirect('dashboard');
    // });


    Route::get('dashboard', 'DashboardController@index');
    // Route::get('artikel', 'ArtikelController@index');
    // Route::get('artikel/tambah','ArtikelController@tambah');
    // Route::get('artikel/tambah-tanpa-file','ArtikelController@tambahtanpafile');
    // Route::post('artikel/storenofile','ArtikelController@storenofile');
    // Route::post('artikel/store','ArtikelController@store');
    // Route::get('artikel/delete/{id}','ArtikelController@delete');
    // Route::get('artikel/edit/{id}','ArtikelController@edit');
    // Route::put('artikel/update/{id}','ArtikelController@update');
    // Route::get('artikel/editgambar/{id}','ArtikelController@editgambar');
    // Route::put('artikel/progressgambar/{id}','ArtikelController@progressgambar');
    // Route::get('artikel/editfile/{id}','ArtikelController@editfile');
    // Route::put('artikel/progressfile/{id}','ArtikelController@progressfile');
    // Route::get('artikel/publish/{id}','ArtikelController@publish');
    // Route::get('artikel/unpublish/{id}','ArtikelController@unpublish');


    Route::get('user','UserController@index');
    Route::get('user/tambah','UserController@tambah');
    Route::post('user/store','UserController@store');
    Route::get('user/delete/{id}','UserController@delete');
    Route::get('user/edit/{id}','UserController@edit');
    Route::put('user/update/{id}','UserController@update');

    Route::get('akun','AkunIGController@index');
    Route::get('akun/tambah','AkunIGController@tambah');
    Route::post('akun/store','AkunIGController@store');
    Route::get('akun/delete/{id}','AkunIGController@delete');
    Route::get('akun/edit/{id}','AkunIGController@edit');
    Route::put('akun/update/{id}','AkunIGController@update');

    Route::get('pp/satuan','ReportController@satuan');
    Route::get('pp/satuan/tambah','ReportController@tambahsatuan');
    Route::post('pp/satuan/storesatuan','ReportController@storesatuan');
    Route::get('pp/satuan/delete/{id}','ReportController@deletesatuan');
    Route::get('pp/satuan/edit/{id}','ReportController@editsatuan');
    Route::put('pp/satuan/updatesatuan/{id}','ReportController@updatesatuan');

    
    Route::get('pp/borongan','ReportController@borongan');
    Route::get('pp/borongan/tambah','ReportController@tambahborongan');
    Route::post('pp/borongan/storeborongan','ReportController@storeborongan');
    Route::get('pp/borongan/delete/{id}','ReportController@deleteborongan');
    Route::get('pp/borongan/edit/{id}','ReportController@editborongan');
    Route::put('pp/borongan/updateborongan/{id}','ReportController@updateborongan');


});



/**
 * Router Binding
 */
Route::bind('artikel', function (string $id) {
    return ArtikelHasher::decode($id);
});
Route::get('covid-19', 'CovidController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
