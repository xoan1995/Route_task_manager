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
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
       return view('customers.index');
    });
    Route::get('create', function () {
        // 'Hien Thi form dang ky khach hang';
    });
    Route::get('{id}/show', function () {
       // echo 'Hien Thi form tao khach hang';
    });
    Route::get('{id}/edit', function () {
       // echo 'Hien Thi form chinh sua khach hang';
    });
    Route::patch('{id}/update', function () {
       // echo 'luu tru thong tin khach hang duoc chinh sua';
    });
    Route::get('{id}', function () {
        //echo 'Xoa thong tin du lieu kahch hang';
    });

});
