<?php


use App\Post;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
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

Route::get('/example', function () {
    return view('Main');
});

Route::get('locale/{locale}','App\Http\Controllers\MainController@changeLocale'
)->name('locale');

Route::get('/{lang}', function($lang){
	App::setlocale($lang);
	return view('Master');
});


Route::get('/mail/{id}/send','App\Http\Controllers\MailController@send')->name('pSend');