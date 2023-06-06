<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\FrontHomeController;

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

Route::get('sign-in',function(){
    return view('Front.sign-in');
});

Route::get('/', [FrontHomeController::class, 'index']);
/*--------------------------------------------
All Normal Users Routes List
 
--------------------------------------------*/
Route::middleware(['auth', 'isAdmin:user'])->group(function () {
  
    Route::get('/user/dashboard', [HomeController::class, 'userHome'])->name('user.dashboard');
});
  
/*------------------------------------------
All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'isAdmin:admin'])->group(function () {
  
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    // tags
    Route::get('/admin/dashboard/add-tag', [TagController::class, 'index'])->name('tag.show');
    Route::post('/admin/dashboard/add-tag', [TagController::class, 'store'])->name('add.tag');
    // category
    Route::get('/admin/dashboard/add-category', [CategoryController::class, 'index'])->name('category.show');
    Route::post('/admin/dashboard/add-category', [CategoryController::class, 'store'])->name('add.category');
    // question
    Route::get('/admin/dashboard/add-question', [QuestionController::class, 'index'])->name('question.show');
    Route::post('/admin/dashboard/add-question', [QuestionController::class, 'store'])->name('add.question');
});
  
/*------------------------------------------
All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'isAdmin:manager'])->group(function () {
  
    Route::get('/manager/dashboard', [HomeController::class, 'managerHome'])->name('manager.dashboard');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
