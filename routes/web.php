<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/welcome', function () {
    return view('welcome');
});


// /Route LANDING Sementara --- Process!!!
Route::get('/about', function () {
    return view('landing.about');
});
Route::get('/products', function () {
    return view('landing.products');
});
Route::get('/contact', function () {
    return view('landing.contact');
});
Route::get('/single-product', function () {
    return view('landing.single-product');
});
// /End
// ?FIXX
Route::get('/', [LandingController::class, 'index'])->name('landing.index');

//Login
Route::get('/login', [LoginController::class, 'index'] )->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

//Register
Route::get('/register', [RegisterController::class, 'index'] )->name('register');
Route::post('/register', [RegisterController::class, 'store'] )->name('register.store');

Route::middleware('auth')->group(function(){
    //Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Dashboard Staff
    Route::get('/dashboard-user', [UserController::class, 'index'])->name('dashboard.user');
    //Dashboard User
    Route::get('/dashboard-setting', [SettingController::class, 'index'])->name('dashboard.setting');
});
// ?END
// !Route CRUD Sementara --- Pending!!!
//CRUD user
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/add-user', [UserController::class, 'create']);
// Route::post('/add-user-post', [UserController::class, 'store']);
// Route::get('/edit/{id}',[UserController::class,'edit']);
// Route::put('/update-user',[UserController::class,'update']);
// Route::get('/delete/{id}',[UserController::class,'delete']);
// //CRUD product
// Route::get('/product', [ProductController::class, 'index']);
// Route::get('/add-product', [ProductController::class, 'create']);
// Route::post('/add-product-post', [ProductController::class, 'store']);
// Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
// Route::put('/update-product', [ProductController::class, 'update']);
// Route::get('/delete-product/{id}', [ProductController::class, 'delete']);
// //CRUD category
// Route::get('/category', [CategoriesController::class, 'index']);
// Route::get('/add-category', [CategoriesController::class, 'create']);
// //Add slider
// Route::get('/landing', [SliderController::class, 'index']);
// Route::get('/add-slider', [SliderController::class, 'create']);
// Route::post('/add-slider-post', [SliderController::class, 'store']);
// !!!
