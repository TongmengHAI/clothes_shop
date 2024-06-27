<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\viewNewsController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\frontend\ViewProductController;

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

// Route::get('/', function () {
//     return view('frontend.home');
// });


// frontend
Route::get("/", [ViewProductController::class,"Home"])->name("home");
Route::get("/shop", [ViewProductController::class,"Shop"])->name("shop");
Route::get("/home/product_detail/{id}", [ViewProductController::class,'ProductDetail'])->name('productDetail');

Route::get("/news", [viewNewsController::class,"News"])->name("news");
Route::get("/news/news_detail", [viewNewsController::class,"NewsDetail"])->name("DetailNews");

// backend
Route::middleware(['auth'])->group(function(){
    Route::get("/dashboard", [AdminController::class,"Dashboard"])->name("dashboard");
    Route::get("/dashboard/add_logo", [LogoController::class,"GoAdd_logo"])->name("goAddLogo");
    Route::get("/dashboard/view_logo", [LogoController::class,"View_logo"])->name("viewLogo");
    Route::post("/dashboard/add_logo", [LogoController::class,"Add_logo"]);
    Route::post("/dashboard/delete_logo", [LogoController::class,"delete_logo"]);
    Route::post("/dashboard/update_logo", [LogoController::class,"upadte_logo"]);

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/dashboard/add_category','GoAdd_category')->name('goAddCategory');
        Route::get('/dashboard/view_category','View_category')->name('viewCategory');
        Route::post('/dashboard/add_category','Add_category')->name('addCategory');
        Route::delete('/dashboard/delete_category','Delete_category');
        Route::post('/dashboard/update_category','Update_category');
    });

    Route::controller(ProductController::class)->group(function(){
        Route::get('/dashboard/add_product','GoAdd_product')->name('goAddProduct');
        Route::get('/dashboard/view_product','View_product')->name('viewProduct');
        Route::post('/dashboard/add_product','Add_product')->name('addProduct');
        Route::delete('/dashboard/delete_product','Delete_product');
        Route::get('/dashboard/update_product/{id}','GoUpdate_product')->name('goUpdateProduct');
        Route::post('/dashboard/update_product','Update_product')->name('updateProduct');
    });

    Route::controller(NewsController::class)->group(function(){
        Route::get('/dashboard/add_News','GoAdd_News')->name('goAddNews');
        Route::get('/dashboard/view_News','View_News')->name('viewNews');
        Route::post('/dashboard/add_News','Add_News')->name('addNews');
        Route::delete('/dashboard/delete_news','Delete_News');
        Route::get('/dashboard/update_News/{id}','GoUpdate_News')->name('goUpdateNews');
        Route::post('/dashboard/update_News','Update_News')->name('updateNews');
    });

});

Route::get('/login',[UserController::class, "GoLogin"])->name('goLogin');
Route::post('/login',[UserController::class, "Login"])->name('login');
Route::get('/signup',[UserController::class, "GoSignup"])->name('signup');
Route::post('/signup',[UserController::class, "Signup"])->name('register');
Route::get('/logout',[UserController::class, "GoLogout"])->name('goLogout');
Route::post('/logout',[UserController::class, "Logout"])->name('logout');
