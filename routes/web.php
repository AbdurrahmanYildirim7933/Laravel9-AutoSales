<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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

Route::get('/eskilaravel', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');;

Route::get('/home', [HomeController::class, 'index'])->name('home');;
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');;
// Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id', '[0-9]+','name'=>'[A-Za-z]+']);;
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');;

Route::get('/', function () {
    return view('home.index ');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//******************************ADMIN PANEL ROUTES***************************************
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');;

//******************************ADMIN CATEGORY ROUTES***************************************
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');
Route::post('/admin/category/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin_category_destroy');
Route::get('/admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin_category_show');


