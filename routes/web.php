<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontendController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/main', function () {
    return view('front.main');
});

Route::get('/huquqlar', function (){
    return view('front.huquq');
});
Route::get('/adabiyotlar', function (){
    return view('front.adabiyot');
});
Route::get('/foydali-manbalar', function (){
    return view('front.f_manba');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/salom', function ()
    {
       return view('admin.index');
    })->name('admin.index');
    Route::resource('/bobs','Admin\BobController');
    Route::resource('/lessons','Admin\DarsController');
    Route::resource('/pdfs', 'Admin\PdfController');
    
});
Route::get('/videolar', [FrontendController::class, 'videos'])->name('videos');
Route::get('/view/file/{id}', [FrontendController::class, 'view_file']);

Route::middleware('guest')->group(function () 
{
    Route::get('/register',[UserController::class, 'create'])->name('register.create');
    Route::post('/register',[UserController::class, 'store'])->name('register.store');
    Route::get('/login',[UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login',[UserController::class, 'login'])->name('login');
});

Route::get('/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');
