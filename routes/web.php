<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;

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
Route::group(['middleware'=>['loggedin']],function(){
    Route::get('/regform',[taskController::class,'regform']);
    Route::get('/login',[taskController::class,'login']);
});

Route::post('/save',[taskController::class,'reg_valid']);
Route::post('/store',[taskController::class,'login_valid']);

Route::group(['middleware'=>['userAuth']],function(){
    Route::get('/dashboard',function(){return view('dashboard');});
    Route::get('/list',[taskController::class,'list']);
});


Route::get('/logout',function(){
    session()->pull('username');
    return redirect('login');
});

Route::group(['middleware'=>['cantAuth']],function(){
    Route::get('ageform',function(){return view('ageform');});
});
// Route::get('ageform',function(){return view('ageform');});
Route::post('checkage',[taskController::class,'checkage']);
Route::get('signout',function(){
    session()->pull('age');
    return redirect('ageform');
});
Route::group(['middleware'=>['canAuth']],function(){
Route::group(['middleware'=>['ageAuth']],function(){
    Route::get('access',function(){return view('access');});
});
Route::group(['middleware'=>['noageAuth']],function(){
    Route::get('noaccess',function(){return view('noaccess');});
});
});
