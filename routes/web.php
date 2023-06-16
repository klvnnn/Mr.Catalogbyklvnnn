<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
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

Route::get('/about', function () {
    return view('landing.about');
});
Route::get('/contact', function () {
    return view('landing.contact');
});

//Landing
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/products', [LandingController::class, 'products'])->name('landing.products');
Route::get('/products-details/{id}', [ProductController::class, 'show'])->name('product.show');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// --middleware auth
Route::middleware('auth')->group(function () {
    //Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Dashboardd
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-setting', [DashboardController::class, 'setting'])->name('dashboard.setting');


    //ADMIN
    Route::middleware('role:Admin')->group(function () {
        //CRUD Role
        Route::get('/dashboard-role', [RoleController::class, 'index'])->name('role.role');
        Route::get('/dahboard-role-create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/dashboard-role', [RoleController::class, 'store'])->name('role.store');
        Route::get('/dashboard-role-edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/dashboard-role/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('/dashboard-role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

        // Slider
        Route::get('/dashboard-slider', [SliderController::class, 'index'])->name('slider.slider'); // route untuk menampilkan data awal
        Route::get('/dashboard-slider-create', [SliderController::class, 'create'])->name('slider.create'); // route untuk menampilkan form create
        Route::post('/dashboard-slider', [SliderController::class, 'store'])->name('slider.store'); // route untuk menyimpan data
        Route::get('/dashboard-slider-edit/{id}', [SliderController::class, 'edit'])->name('slider.edit'); // route untuk menampilkan form edit
        Route::put('/dashboard-slider/{id}', [SliderController::class, 'update'])->name('slider.update'); // route untuk mengupdate data
        Route::delete('/dashboard-slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy'); // route untuk menghapus data
    });

    //ADMIN & STAFF
    Route::middleware('role:Admin|Staff')->group(function () {
        //CRUD User
        Route::get('/dashboard-user', [UserController::class, 'index'])->name('user.user');
        Route::get('/dashboard-user-create', [UserController::class, 'create'])->name('user.create');
        Route::post('/dashboard-user', [UserController::class, 'store'])->name('user.store');
        Route::get('/dashboard-user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/dashboard-user/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/dashboard-user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        // Category
        Route::get('/dashboard-categories', [CategoriesController::class, 'index'])->name('categories.category');
        Route::get('/dashboard-categories-create', [CategoriesController::class, 'create'])->name('categories.create');
        Route::post('/dashboard-categories', [CategoriesController::class, 'store'])->name('categories.store');
        Route::get('/dashboard-categories-edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
        Route::put('/dashboard-categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
        Route::delete('/dashboard-categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

        //Products
        Route::get('/dashboard-products', [ProductController::class, 'index'])->name('products.products');
        Route::get('/dashboard-products-create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/dashboard-products', [ProductController::class, 'store'])->name('products.store');
        Route::get('/dashboard-products-edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/dashboard-products/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/dashboard-products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

        // Brand
        Route::get('/dashboard-brands', [BrandController::class, 'index'])->name('brands.brands'); // route untuk menampilkan data awal
        Route::get('/dashboard-brands-create', [BrandController::class, 'create'])->name('brands.create'); // route untuk menampilkan form create
        Route::get('/dashboard-brands-edit/{id}', [BrandController::class, 'edit'])->name('brands.edit'); // route untuk menampilkan form edit
        Route::post('/dashboard-brands', [BrandController::class, 'store'])->name('brands.store'); // route untuk menyimpan data
        Route::put('/dashboard-brands/{id}', [BrandController::class, 'update'])->name('brands.update'); // route untuk mengupdate data
        Route::delete('/dashboard-brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy'); // route untuk menghapus data

    });
});