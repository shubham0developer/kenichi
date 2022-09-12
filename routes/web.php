<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/feedback', [FrontendController::class, 'setfeedback']);
Route::post('/contact', [FrontendController::class, 'setcontact']);


Route::get('/about', function () {
    return view('home');
});Route::get('/gallery', function () {
    return view('home');
});Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/kfood', function () {
    return view('home');
});
Route::get('/klegal', function () {
    return view('home');
});
Route::get('/kzardozi', function () {
    return view('home');
});
Route::get('/ksteel', function () {
    return view('home');
});
Route::get('/kit', function () {
    return view('home');
});
Route::get('/kwoods', function () {
    return view('home');
});
// admin dashboard
Route::group(['prefix' => '/admin',  'middleware' => 'authnow'], function()
{
Route::get('dashboard',[BackendController::class,'dashboardindex'])->name('admin_dashboard');
Route::get('settings',[BackendController::class,'settingsindex'])->name('admin_settings');
Route::get('contact',[BackendController::class,'contactindex'])->name('admin_contact');
Route::get('/contact/delete/{id}',[BackendController::class,'contactdel']);
Route::get('feedback',[BackendController::class,'feedbackindex'])->name('admin_feedback');
Route::get('testimonials',[BackendController::class,'testimonialsindex'])->name('admin_testimonials');
Route::get('subscription',[BackendController::class,'subscriptionindex'])->name('admin_subscription');
Route::get('emarketing',[BackendController::class,'emarketingindex'])->name('admin_emarketing');
});







Route::get('/admin/login',function(){
    return view('backend.login');
});
Route::post('/admin/login',[BackendController::class, 'login']);

Route::get('/admin/logout',[BackendController::class, 'logout'])->name('logout');

