<?php

use App\Http\Controllers\wspbContoller;
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
    return view('welcome');
});



Route::get('/wspservice', [wspbContoller::class, 'webhook']);

Route::post('/wspservice', [wspbContoller::class, 'recibe']);

Route::get('/sendmessage', [wspbContoller::class, 'sendmessage']);

Route::get('/compras', function () {
   
    echo ' comrpaste este producto ';

    }
 ) ;

