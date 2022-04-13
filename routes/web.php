<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsConyroller;

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
// Route::group(['middleware'=>['auth','role:admin']],function(){

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/all-jobs', [HomeController::class, 'allJobs'])->name('allJobs');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/job', [HomeController::class, 'job'])->name('job');
Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/qualification', [HomeController::class, 'qualification'])->name('qualification');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::post('/save_user', [AuthController::class, 'register_user'])->name('register_user');
Route::get('/save_user', [AuthController::class, 'save_user'])->name('save_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/do_login', [AuthController::class, 'login'])->name('do_login');
Route::get('/list_users', [AuthController::class, 'allUsers'])->name('list_users');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/master', [HomeController::class, 'sidebar']);
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/list_jobs', [JobsConyroller::class, 'all_jobs'])->name('all_jobs');
Route::get('/new_jobs', [JobsConyroller::class, 'create'])->name('new_jobs');
Route::post('/save_jobs', [JobsConyroller::class, 'store'])->name('save_jobs');