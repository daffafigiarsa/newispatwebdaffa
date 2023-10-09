<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\LayoutIndoController;
use App\Http\Controllers\NewsController;
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
    return view('layout.home.index',[
        'url' => '',
        'class' => '',
        'navbar' =>'hero_area',
        'sub' => 'EN',
    ]);
});

Route::get('_indo', function () {
    return view('layout.home.index_indo',[
        'url' =>'/',
        'class' => '',
        'navbar' =>'hero_area',
        'sub' => 'IN',
    ]);
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
Route::resource('admin/grade', GradeController::class);
Route::resource('admin/posts', PostController::class)->middleware('auth');
Route::resource('admin/english',EnglishController::class)->middleware('auth');
Route::resource('admin/customer', CustomerController::class)->middleware('auth');
Route::resource('admin/news', NewsController::class)->middleware('auth');

//layout Rutes english
Route::get('/customer-center',[LayoutController::class,'customer'])->middleware('guest');
Route::post('/customer-post',[LayoutController::class,'postcustomer'])->middleware('guest');
Route::get('bod',[LayoutController::class,'bod'])->middleware('guest');
Route::get('profilindo',[LayoutController::class,'profilindo'])->middleware('guest');
Route::get('vision',[LayoutController::class,'vision'])->middleware('guest');
Route::get('highlight',[LayoutController::class,'highlight'])->middleware('guest');
Route::get('milestone',[LayoutController::class,'milestone'])->middleware('guest');
Route::get('she',[LayoutController::class,'she'])->middleware('guest');
Route::get('isocertification',[LayoutController::class,'isocertification'])->middleware('guest');
Route::get('jisapproval',[LayoutCOntroller::class,'jisapproval'])->middleware('guest');
Route::get('sni',[LayoutController::class,'sni'])->middleware('guest');
Route::get('kan',[LayoutController::class,'kan'])->middleware('guest');
Route::get('tkdn',[LayoutController::class,'tkdn'])->middleware('guest');
Route::get('sirim',[LayoutCOntroller::class,'sirim'])->middleware('guest');

Route::get('highcarbon',[LayoutController::class,'highcarbon'])->middleware('guest');
Route::get('lowcarbon',[LayoutController::class,'lowcarbon'])->middleware('guest');
Route::get('clodheading',[LayoutController::class,'clodheading'])->middleware('guest');
Route::get('generalpw',[LayoutController::class,'generalpw'])->middleware('guest');
Route::get('welding',[LayoutController::class,'welding'])->middleware('guest');
Route::get('pline',[LayoutController::class,'pline'])->middleware('guest');
Route::get('structure',[LayoutController::class,'structure'])->middleware('guest');
Route::get('nails',[LayoutController::class,'nails'])->middleware('guest');


Route::get('ispatwireproduct',[LayoutController::class,'ispatwireproduct'])->middleware('guest');
Route::get('ispatpancaputra',[LayoutController::class,'ispatpancaputra'])->middleware('guest');
Route::get('ispatbukitbaja',[LayoutController::class,'ispatbukitbaja'])->middleware('guest');


Route::get('fasilitas',[LayoutController::class,'fasilitas'])->middleware('guest');
Route::get('steelmaking',[LayoutController::class,'steelmaking'])->middleware('guest');
Route::get('rolling',[LayoutController::class,'rolling'])->middleware('guest');
Route::get('fasilitaspancaputra',[LayoutController::class,'fasilitaspancaputra'])->middleware('guest');
Route::get('fasilitasbukitnaja',[LayoutController::class,'fasilitasbukitnaja'])->middleware('guest');
Route::get('fasilitaswire',[LayoutController::class,'fasilitaswire'])->middleware('guest');

Route::get('karir',[LayoutController::class,'karir'])->middleware('guest');

////layout Rutes indonesia
Route::get('/customer-center_indo',[LayoutIndoController::class,'customer_indo'])->middleware('guest');
Route::post('/customer-post_indo',[LayoutIndoController::class,'postcustomer_indo'])->middleware('guest');

Route::get('profilindo_indo',[LayoutIndoController::class,'profilindo_indo'])->middleware('guest');
Route::get('bod_indo',[LayoutIndoController::class,'bod_indo'])->middleware('guest');
Route::get('vision_indo',[LayoutIndoController::class,'vision_indo'])->middleware('guest');
Route::get('highlight_indo',[LayoutIndoController::class,'highlight_indo'])->middleware('guest');
Route::get('milestone_indo',[LayoutIndoController::class,'milestone_indo'])->middleware('guest');
Route::get('she_indo',[LayoutIndoController::class,'she_indo'])->middleware('guest');
Route::get('isocertification_indo',[LayoutIndoController::class,'isocertification_indo'])->middleware('guest');
Route::get('jisapproval_indo',[LayoutIndoController::class,'jisapproval_indo'])->middleware('guest');
Route::get('sni_indo',[LayoutIndoController::class,'sni_indo'])->middleware('guest');
Route::get('kan_indo',[LayoutIndoController::class,'kan_indo'])->middleware('guest');
Route::get('tkdn_indo',[LayoutIndoController::class,'tkdn_indo'])->middleware('guest');
Route::get('sirim_indo',[LayoutIndoController::class,'sirim_indo'])->middleware('guest');

Route::get('highcarbon_indo',[LayoutIndoController::class,'highcarbon_indo'])->middleware('guest');
Route::get('lowcarbon_indo',[LayoutIndoController::class,'lowcarbon_indo'])->middleware('guest');
Route::get('clodheading_indo',[LayoutIndoController::class,'clodheading_indo'])->middleware('guest');
Route::get('generalpw_indo',[LayoutIndoCOntroller::class,'generalpw_indo'])->middleware('guest');
Route::get('welding_indo',[LayoutIndoCOntroller::class,'welding_indo'])->middleware('guest');
Route::get('pline_indo',[LayoutIndoController::Class,'pline_indo'])->middleware('guest');
Route::get('structure_indo',[LayoutIndoController::class,'structure_indo'])->middleware('guest');
Route::get('nails_indo',[LayuotIndoController::class,'nails_indo'])->middleware('guest');

Route::get('ispatwireproduct_indo',[LayoutIndoController::class,'ispatwireproduct_indo'])->middleware('guest');
Route::get('ispatpancaputra_indo',[LayoutIndoController::class,'ispatpancaputra_indo'])->middleware('guest');
Route::get('ispatbukitbaja_indo',[LayoutIndoController::class,'ispatbukitbaja_indo'])->middleware('guest');

Route::get('fasilitas_indo',[LayoutIndoController::class,'fasilitas_indo'])->middleware('guest');
Route::get('steelmaking_indo',[LayoutIndoController::class,'steelmaking_indo'])->middleware('guest');
Route::get('rolling_indo',[LayoutIndoController::class,'rolling_indo'])->middleware('guest');
Route::get('fasilitaspancaputra_indo',[LayoutIndoController::class,'fasilitaspancaputra_indo'])->middleware('guest');
Route::get('fasilitasbukitnaja_indo',[LayoutIndoController::class,'fasilitasbukitnaja_indo'])->middleware('guest');
Route::get('fasilitaswire_indo',[LayoutIndoController::class,'fasilitaswire_indo'])->middleware('guest');
Route::get('karir_indo',[LayoutIndoController::class,'karir_indo'])->middleware('guest');
Route::get('news_indo',[LayoutIndoController::class,'news_indo'])->middleware('guest');








