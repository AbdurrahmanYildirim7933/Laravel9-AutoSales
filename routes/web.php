<?php


use App\Http\Controllers\AdminPanel\AdminCarController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');;

Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');;

Route::get('/home', function () {
    return view('home.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//******************************ADMIN PANEL ROUTES***************************************
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminHomeController::class, 'index'])->name('index');;

//******************************ADMIN CATEGORY ROUTES***************************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/destroy/{id}','destroy')->name('destroy');
    Route::get('/show/{id}','show')->name('show');
});
//******************************ADMIN CAR ROUTES***************************************
    Route::prefix('/car')->name('car.')->controller(AdminCarController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
//******************************ADMIN PRODUCT IMAGE GALLERY ROUTES***************************************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{cid}','index')->name('index');
        Route::post('/store/{cid}','store')->name('store');
        Route::post('/update/{cid}/{id}','update')->name('update');
        Route::get('/destroy/{cid}/{id}','destroy')->name('destroy');
    });
});
