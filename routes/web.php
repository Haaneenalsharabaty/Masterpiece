<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/aboutUs', function () {
    return view('layouts.aboutUs');
});
Route::get('/', function () {
    return view('layouts.index');
});
;
Route::get('/gallery', [App\Http\Controllers\IndexController::class, 'nails']);
Route::get('/hair-gallery', [App\Http\Controllers\IndexController::class, 'hair']);
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('/contact-us-store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-us');
Route::get('/user-profile', [App\Http\Controllers\ProfileController::class, 'profile']);
Route::post('/user-profile-update', [App\Http\Controllers\ProfileController::class, 'update'])->name('users.edit');
Route::delete('/user-profile-delete/{id}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('users.destroy');

Auth::routes();
// Route::middleware(['auth','IsAdmin'])->group(function () {

Route::get('admin/index', [IndexController::class, 'index']);
// Route::get('/', [IndexController::class, 'admin']);
Route::get('users', [UserController::class, 'index']);
Route::get('editUser/{id}', [UserController::class, 'edit']);
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/add', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/add', [UserController::class, 'store'])->name('admin.users.store');
Route::get('deleteUser/{id}', [UserController::class, 'destroy']);
Route::get('categories',[CategoryController::class,'index']);
Route::get('editCategory/{id}',[CategoryController::class,'edit']);
Route::put('editCategory/{id}',[CategoryController::class,'update']);
Route::get('deleteCategory/{id}', [CategoryController::class, 'destroy']);
Route::get('servicess', [ServiceController::class, 'index']);

Route::get('/admin/catergories/add', [CategoryController::class, 'create']);
Route::post('/admin/catergories/store', [CategoryController::class, 'store']);

Route::get('editService/{id}',[ServiceController::class,'edit']);
Route::put('editService1/{id}',[ServiceController::class,'update']);
Route::get('/admin/services/add', [ServiceController::class, 'create']);
Route::post('/admin/services/store', [ServiceController::class, 'store']);
Route::get('deleteService/{id}', [ServiceController::class, 'destroy']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
