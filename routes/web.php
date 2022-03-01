<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RiderController;
use App\Mail\RegisteredUser;
use Illuminate\Support\Facades\Mail;
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
Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@sendEmail')->name('sendEmail');
Route::get('/list-a-project', 'HomeController@startProject')->name('startProject')->middleware('auth');
Route::post('/list-a-project', 'HomeController@listProject')->name('listProject')->middleware('auth');
Route::get('/invest', 'HomeController@invest')->name('invest');
Route::get('/invest/{id}', 'HomeController@project_view')->name('project_view');
Route::get('/nft-marketplace', 'HomeController@nft')->name('nft');
Route::get('/how-it-works/creators', 'HomeController@how_it_works_creators')->name('how_it_works');
Route::get('/how-it-works/investors', 'HomeController@how_it_works_investors')->name('how_it_works');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/terms-and-condition', 'HomeController@term_condition')->name('term_condition');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', 'HomeController@register')->name('register');

Route::get('/account', 'HomeController@account')->name('account');
Route::get('/account/investments', 'HomeController@investments')->name('investments');
Route::get('/account/investments/{id}', 'HomeController@view_investment')->name('view_investment');
Route::get('/pending-listing', 'HomeController@pendingList')->name('pendingList');
Route::get('/approved-listing', 'HomeController@approvedList')->name('approvedList');

Route::get('/search', 'HomeController@search')->name('search');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay')->middleware('auth');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('/home', function (Request $request) {
    // if (Auth::user()->user_type == 'admin') {
    //     return redirect('/admin/index');
    // }elseif (Auth::user()->user_type == 'vendor') {
    //     return redirect('/vendor/dashboard');
    // }elseif (Auth::user()->user_type == 'rider') {
    //     return redirect('/rider/dashboard');
    // }elseif(Auth::user()->user_type == 'user'){
    //     return redirect('/account');
    // }else{
    // }
        return redirect("/account");
})->middleware('auth');
Route::get('/admin', 'AdminController@index')->name('index')->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Auth::routes();

// PAYSTACK_PUBLIC_KEY=pk_live_e63686f15db61b65efd0fc006d1771ac09ebb6d0
// PAYSTACK_SECRET_KEY=sk_live_a87a54e7ae692115de878d30deb4f30389150ee5
// PAYSTACK_PAYMENT_URL=https://api.paystack.co