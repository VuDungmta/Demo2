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
 Route::group(['middleware' => 'web'], function () {
      
        Route::get('/home', 'HomeController@index');
    });
     Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'web'], function() {
    
        /* Admin Auth */
        Route::get('login', 'Auth\AuthController@getLogin');
        Route::post('login', 'Auth\AuthController@postLogin');
        Route::get('register', 'Auth\AuthController@getRegister');
        Route::post('register', 'Auth\AuthController@postRegister');
        Route::get('logout', 'Auth\AuthController@getLogout');
    
      Route::group(['middleware' => 'auth.admin'], function(){
        /*Admin Dashboard Routes */
            Route::get('dashboard', 'AdminController@getDashboard');
            Route::get('admin', 'AdminController@getDashboard');    
        });
    });
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show', 'StudInsertController@ShowList');
Route::get('/register1',function(){
   return view('register1');
});
Route::post('/user/register1',array('uses'=>'UserRegistration@postRegister'));
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::get('insert','StudInsertController@insertform');
Route::get('excel','StudInsertController@DowloadExcel');
Route::post('create','StudInsertController@insert');
Route::get('delete/{id}','StudInsertController@destroy');
Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));
Route::get('exportPDF', 'MaatwebsiteDemoController@exportPDF');
//Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
