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

use App\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', 'LoginController@login')->name('user.login');

Route::get('myRoute', function () {
    echo "Hello";
});

Route::get('Khoa hoc', function () {
   echo "Laravel";
});

Route::get('addnewproduct', function () {
   $product = new Product();
   $product->product_name = 'San pham 1';
   $product->product_img = 'linkimg';

});
