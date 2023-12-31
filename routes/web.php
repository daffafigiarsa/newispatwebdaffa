<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


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
    return view('layout.home.index');
});

//Uji Coba test template tanpa DRL
Route::get('/test', function () {
    return view('layout');
});
//Login
Route::get('/when-you-admin-please-login-and-input-username-password',[LoginCOntroller::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Admin routes
Route::resource('admin/posts', PostController::class)->middleware('auth');
Route::resource('admin/customer', CustomerController::class)->middleware('auth');

//layout Rutes
Route::get('/customer-center',[LayoutController::class,'customer'])->middleware('guest');
Route::post('/customer-post',[LayoutController::class,'postcustomer'])->middleware('guest');

//email

// Route::get('send-email',function(){
//     $email = new SendEmail();
//     Mail::to('dendirikirahmawan@gmail.com')->send($email);

//     return redirect('/admin/customer')->with('success','New Post has been created');
// });
