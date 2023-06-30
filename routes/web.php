<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\AskquestionController;

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

Route::get('/', [FrontHomeController::class, 'index'])->name('home.page');

Route::get('/contact-us', [FrontHomeController::class, 'contactus'])->name('contact_us');
Route::get('/questions/{question_slug}', [FrontHomeController::class, 'getQuestion'])->name('get.question');
Route::get('/ask-question', [AskquestionController::class, 'askQuestion'])->name('ask.question');
Route::post('/ask-question', [AskquestionController::class, 'SubmitQuestion'])->name('post.question');

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
    Route::get('/admin/dashboard/add-question', [QuestionController::class, 'index'])->name('question.add');
    Route::post('/admin/dashboard/add-question', [QuestionController::class, 'store'])->name('add.question');
    Route::get('/admin/dashboard/edit-question/{id}', [QuestionController::class, 'edit'])->name('question.edit');
    Route::post('/admin/dashboard/edit-question', [QuestionController::class, 'update'])->name('question.update');

    Route::get('/admin/dashboard/questions', [QuestionController::class, 'show'])->name('question.show');
    Route::get('/admin/dashboard/delete-question/{id}', [QuestionController::class, 'destroy'])->name('question.delete');

});
  
/*------------------------------------------
All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'isAdmin:manager'])->group(function () {
  
    Route::get('/manager/dashboard', [HomeController::class, 'managerHome'])->name('manager.dashboard');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
