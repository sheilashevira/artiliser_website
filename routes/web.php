<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PrintMaterialController;
use App\Http\Controllers\Backend\PrintTypeController;
use App\Http\Controllers\Backend\SizeController;
use App\Http\Controllers\Backend\CarouselRowController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AjaxLocation;
use App\Http\Controllers\Backend\DropdownController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Frontend\ProfileController;
// use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\GalleryController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------|
*/
Auth::routes();
// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [HomeController::class, 'index']);
//Profile
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::get('/change-password', [ProfileController::class, 'changePass'])->name('change-profile');
Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');

//About
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

//Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/index-cat/{id}', [GalleryController::class, 'getCategory'])->name('gallery.get-category');
Route::get('/gallery/index-search', [GalleryController::class, 'search'])->name('gallery.get-search');
Route::get('/gallery/detail/{id}', [GalleryController::class, 'detail'])->name('gallery.detail');
Route::get('/gallery/index-cat/detail/{id}', [GalleryController::class, 'detail'])->name('gallery.get-category-2');
Route::get('/gallery/cart', [GalleryController::class, 'cart']);
Route::get('/gallery/order-detail', [GalleryController::class, 'order']);
Route::get('/gallery/success', [GalleryController::class, 'success']);
Route::get('/gallery/error', [GalleryController::class, 'error']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/page-not-found', [App\Http\Controllers\HomeController::class, 'error404'])->name('error404');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

//Post
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/add', [PostController::class, 'add'])->name('post.add');
Route::post('/post/insert', [PostController::class, 'insert'])->name('post.insert');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
Route::get('/post/read/{id}', [PostController::class, 'read'])->name('post.read');

//Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/add', [CategoryController::class, 'add'])->name('category.add');
Route::post('/category/insert', [CategoryController::class, 'insert'])->name('category.insert');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/read/{id}', [CategoryController::class, 'read'])->name('category.read');

//PrintMaterial
Route::get('/print-material', [PrintMaterialController::class, 'index'])->name('print-material');
Route::get('/print-material/add', [PrintMaterialController::class, 'add'])->name('print-material.add');
Route::post('/print-material/insert', [PrintMaterialController::class, 'insert'])->name('print-material.insert');
Route::get('/print-material/edit/{id}', [PrintMaterialController::class, 'edit'])->name('print-material.edit');
Route::post('/print-material/update/{id}', [PrintMaterialController::class, 'update'])->name('print-material.update');
Route::get('/print-material/delete/{id}', [PrintMaterialController::class, 'delete'])->name('print-material.delete');
Route::get('/print-material/read/{id}', [PrintMaterialController::class, 'read'])->name('print-material.read');

//PrintType
Route::get('/print-type', [PrintTypeController::class, 'index'])->name('print-type');
Route::get('/print-type/add', [PrintTypeController::class, 'add'])->name('print-type.add');
Route::post('/print-type/insert', [PrintTypeController::class, 'insert'])->name('print-type.insert');
Route::get('/print-type/edit/{id}', [PrintTypeController::class, 'edit'])->name('print-type.edit');
Route::post('/print-type/update/{id}', [PrintTypeController::class, 'update'])->name('print-type.update');
Route::get('/print-type/delete/{id}', [PrintTypeController::class, 'delete'])->name('print-type.delete');
Route::get('/print-type/read/{id}', [PrintTypeController::class, 'read'])->name('print-type.read');

//Size
Route::get('/size', [SizeController::class, 'index'])->name('size');
Route::get('/size/add', [SizeController::class, 'add'])->name('size.add');
Route::post('/size/insert', [SizeController::class, 'insert'])->name('size.insert');
Route::get('/size/edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
Route::post('/size/update/{id}', [SizeController::class, 'update'])->name('size.update');
Route::get('/size/delete/{id}', [SizeController::class, 'delete'])->name('size.delete');
Route::get('/size/read/{id}', [SizeController::class, 'read'])->name('size.read');

//CarouselRow
Route::get('/carousel-row', [CarouselRowController::class, 'index'])->name('carousel-row');
// Route::get('/carousel-row/add', [CarouselRowController::class, 'add'])->name('carousel-row.add');
// Route::post('/carousel-row/insert', [CarouselRowController::class, 'insert'])->name('carousel-row.insert');
Route::get('/carousel-row/edit/{id}', [CarouselRowController::class, 'edit'])->name('carousel-row.edit');
Route::post('/carousel-row/update/{id}', [CarouselRowController::class, 'update'])->name('carousel-row.update');
Route::get('/carousel-row/delete/{id}', [CarouselRowController::class, 'delete'])->name('carousel-row.delete');
Route::get('/carousel-row/read/{id}', [CarouselRowController::class, 'read'])->name('carousel-row.read');

//About
Route::get('/about/admin', [AboutController::class, 'index'])->name('about');
Route::get('/about/add', [AboutController::class, 'add'])->name('about.add');
Route::post('/about/insert', [AboutController::class, 'insert'])->name('about.insert');
Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
Route::post('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
Route::get('/about/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
Route::get('/about/read/{id}', [AboutController::class, 'read'])->name('about.read');

//User
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
Route::post('/user/insert', [UserController::class, 'insert'])->name('user.insert');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::get('/user/changePassword/{id}', [UserController::class, 'changePassword'])->name('user.changePassword');
Route::post('/user/updatePassword/{id}', [UserController::class, 'updatePassword'])->name('user.updatePassword');
Route::post('api/fetch-states', [UserController::class, 'fetchState']);
Route::post('api/fetch-cities', [UserController::class, 'fetchCity']);
Route::get('/countries', [DropdownController::class, 'countries']);
// Route::get('/user/read/{id}', [UserController::class, 'read'])->name('user.read');

//Ajax Location
// Route::get('/countries', [AjaxLocation::class, 'countries']);
// Route::get('/getStates', [AjaxLocation::class, 'states']);
// Route::get('/getCities', [AjaxLocation::class, 'cities']);

