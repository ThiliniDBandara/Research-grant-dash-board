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
Route::get('/index', function () {
    return view('index');
});
Route::get('/form1', function () {
    return view('form1');
});
Route::get('/form B', function () {
    return view('form B');
});
Route::get('/form C', function () {
    return view('form C');
});
Route::get('/form A', function () {
    return view('form A');
});
Route::post('/savedetail','DetailsController@store');


Route::get('/view_details',function(){
    $data=App\Detail::all();
    return view('view_details')->with('details',$data);
});




Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/admin/dashboard','AdminController@dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/settings','AdminController@setting');
    Route::get('/admin/check-pwd','AdminController@chkPassword');
    Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');
    Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
    Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
    Route::get('/admin/view-categories','CategoryController@viewCategory');
    
   
});
Route::get('/logout','AdminController@logout');