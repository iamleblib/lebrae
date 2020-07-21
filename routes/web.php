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
    return view('index');
});

Route::get('user_dashboard', function () {
    return view('user_dashboard.index');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::get('/profile', 'DashboardController@profile')->name('profile');
Route::post('/profile/update', 'DashboardController@updateProfile')->name('profile.update');
//User Bank Account
Route::post('/account/bitcoin', 'UsersAccountController@userBitStore')->name('userBitStore');
Route::post('/account/bitcoin/update', 'UsersAccountController@userBitcoinUpdate')->name('userBitcoinUpdate');
Route::post('/account/bank/create', 'UsersAccountController@userBankStore')->name('userBankStore');
Route::post('/account/bank', 'UsersAccountController@userBankUpdate')->name('userBankUpdate');
Route::get('/account/index', 'UsersAccountController@index')->name('index');

//Valid ID
Route::put('/account/upload', 'UsersAccountController@uploadId')->name('valid_id');
