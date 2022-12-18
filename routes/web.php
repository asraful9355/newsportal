<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscribeController;
use App\Models\Post;


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

// Route::get('/test',   function(){ 
// 	return App\Models\Post::find(13)->tags;
//  });




Route::get('/', [ FrontEndController::class, 'index']);
Route::get('/post/{id}/{slug}', [FrontEndController::class, 'singlePost'])->name('single.post');
Route::get('/search-post', [FrontEndController::class, 'searchPost'])->name('search.post');
Route::get('/category/post/{id}', [FrontEndController::class, 'categoryPost'])->name('category.single');
Route::get('/tag/post/{id}', [FrontEndController::class, 'tagPost'])->name('tag.single');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
       //   ----Dashboard Controler ------
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

     //   ----category route start now------

    Route::get('/create-category', [CategoriesController::class, 'create'])->name('category.create');
    Route::post('/store-category', [CategoriesController::class, 'store'])->name('store.category');
    Route::get('/index-category', [CategoriesController::class, 'index'])->name('index.category');
    Route::get('/edit-category/{id}', [CategoriesController::class, 'edit'])->name('edit.category');
    Route::get('/destroy-category/{id}', [CategoriesController::class, 'destroy'])->name('destroy.category');
    Route::post('/update-category/{id}', [CategoriesController::class, 'update'])->name('update.category');
    Route::get('/category/deactive/{id}', [CategoriesController::class, 'deactive'])->name('category.deactive');
    Route::get('/category/active/{id}', [CategoriesController::class, 'active'])->name('category.active');
                                            // ------post start-----
    Route::get('/create-post', [PostsController::class, 'create'])->name('create.post');
    Route::post('/store-post', [PostsController::class, 'store'])->name('store.post');
    Route::get('/index-post', [PostsController::class, 'index'])->name('index.post');
    Route::get('/edit-post/{id}', [PostsController::class, 'edit'])->name('edit.post');
    Route::get('/destroy-post/{id}', [PostsController::class, 'destroy'])->name('destroy.post');
    Route::post('/update-post/{id}', [PostsController::class, 'update'])->name('update.post');
    Route::get('/trash-post', [PostsController::class, 'trash'])->name('trash.post');
    Route::get('/restore-post/{id}', [PostsController::class, 'restore'])->name('restore.post');
    Route::get('/kill-post/{id}', [PostsController::class, 'kill'])->name('kill.post');

                                           //   ---- tag start ------
    Route::get('/create-tag', [TagsController::class, 'create'])->name('create.tag');
    Route::post('/store-tag', [TagsController::class, 'store'])->name('store.tag');
    Route::get('/index-tag', [TagsController::class, 'index'])->name('index.tag');
    Route::get('/edit-tag/{id}', [TagsController::class, 'edit'])->name('edit.tag');
    Route::post('/update-tag/{id}', [TagsController::class, 'update'])->name('update.tag');
    Route::get('/destroy-tag/{id}', [TagsController::class, 'destroy'])->name('destroy.tag');

                                 /*========> User <========  */
    Route::get('/users', [UsersController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('user.create');
    Route::post('/users/store', [UsersController::class, 'store'])->name('user.store');
    Route::get('/users/admin/{id}', [UsersController::class, 'admin'])->name('user.admin');
    Route::get('/users/not-admin/{id}', [UsersController::class, 'notAdmin'])->name('user.not.admin');
    Route::get('/my/profile',[UsersController::class,'myProfile'])->name('my.profile');
    Route::get('/card/profile',[UsersController::class,'cardProfile'])->name('card.profile');
    Route::get('/my/change/profile',[UsersController::class,'changeProfile'])->name('change.profile')->middleware('admin');
    Route::post('/my/update/profile/{id}',[UsersController::class,'updateProfile'])->name('update.profile');


       /*========> settings <========  */
    Route::get('/setting/index',[ SettingsController::class,'index'])->name('setting.index');
    Route::get('/setting/edit/{id}',[ SettingsController::class,'edit'])->name('setting.edit');
    Route::post('/setting/update/{id}',[SettingsController::class,'update'])->name('setting.update');
    Route::get('/logo/index',[SettingsController::class,'logoIndex'])->name('logo.index');
    Route::post('/logo/store',[SettingsController::class,'logoStore'])->name('logo.store');

                  //subscribe start 
    Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe');



    



});
