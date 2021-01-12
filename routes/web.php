<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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

// Route::get('/homecardsinsertion', function () {
//     return view('homecardsinsertion');
// });


Route::get('/hotel', [mycontroller::class, 'hotel']);



Route::get('/',[mycontroller::class, 'index']);


Route::post('/insertdata',[mycontroller::class, 'insert']);

Route::post('/inserttouristspotshomepage',[mycontroller::class, 'inserttouristspotshomepage']);

Route::post('/insertionofhotels',[mycontroller::class, 'insertionofhotels']);

Route::post('/insertionofrooms',[mycontroller::class, 'insertionofrooms']);

Route::get('/avarirooms',[mycontroller::class, 'avarirooms']);

Route::get('/index',[mycontroller::class, 'index']);

Route::view('user','user');

Route::view('userlogin','login');

Route::get('/user',[mycontroller::class, 'insertt']);

Route::get('/login',[mycontroller::class, 'login']);

Route::get('/loginform',[mycontroller::class, 'loginform']);


Route::get('/userform',[mycontroller::class, 'userform']);

Route::get('/awariroomsview',[mycontroller::class, 'awariroomsview']);

Route::post('/detailss',[mycontroller::class, 'detailss']);

Route::post('/details',[mycontroller::class, 'details']);

Route::post('/clientdetails',[mycontroller::class, 'clientdetails']);

Route::get('/adminform',[mycontroller::class, 'adminform']);

Route::get('/Adminname',[mycontroller::class, 'admin']);

Route::get('/homecardsinsertion',[mycontroller::class, 'homecardsinsertion']);