<link rel="stylesheet" type="text/css" href="/css/style.css">

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fetchers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 route::get('return1',function(){

 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::view('/adminlte','bootstrap');
route::view('/adminlte/profile','profile');
route::view('/adminlte/pengalamanKuliah','pengalaman');

route::get('test',[fetchers::class,'show']);
