<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/home2', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('homepage');


Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/news/{id}/{slug}', [HomeController::class, 'news'])->name('news');
Route::get('/categorynews/{id}/{slug}', [HomeController::class, 'categorynews'])->name('categorynews');
Route::post('/getnews', [HomeController::class, 'getnews'])->name('getnews');




Route::get('/test/{id}/{name}', [\App\Http\Controllers\HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
#News
    Route::prefix('news')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\NewsController::class, 'index'])->name('admin_news');
        Route::get('/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])->name('admin_news_add');
        Route::post('/store', [\App\Http\Controllers\Admin\NewsController::class, 'store'])->name('admin_news_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('admin_news_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'update'])->name('admin_news_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'destroy'])->name('admin_news_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\NewsController::class, 'show'])->name('admin_news_show');
    });
#Messages
    Route::prefix('messages')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

#Image
    Route::prefix('image')->group(function () {
        Route::get('/create/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });
    Route::prefix('review')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('/show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
    });
#setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
#FAQ
    Route::prefix('faq')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('/create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('/store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
    });


});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroymyreview'])->name('user_review_delete');


});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

    Route::prefix('news')->group(function () {

        Route::get('/', [\App\Http\Controllers\NewsController::class, 'index'])->name('user_news');
        Route::get('/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('user_news_add');
        Route::post('/store', [\App\Http\Controllers\NewsController::class, 'store'])->name('user_news_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\NewsController::class, 'edit'])->name('user_news_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\NewsController::class, 'update'])->name('user_news_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\NewsController::class, 'destroy'])->name('user_news_delete');
        Route::get('/show', [\App\Http\Controllers\NewsController::class, 'show'])->name('user_news_show');
    });
    Route::prefix('image')->group(function () {
        Route::get('/create/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('/store/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('/delete/{id}/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');
    });

});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
