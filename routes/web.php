<?php

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

Route::get('/', [App\Http\Controllers\Domain\MainController::class, 'index'])->name('domain.home');


Route::middleware(['auth', 'admin'])->prefix("manager")->as("manager.")->group(function () {
    Route::get('', [App\Http\Controllers\manager\ManagerController::class, 'index'])->name('home');
    Route::resource('/category', 'App\Http\Controllers\manager\CategoryController');
    Route::get('/blogs', [App\Http\Controllers\manager\BlogController::class, 'index'])->name('blogs.index');
    route::get('/blogs/edit/{id}', [\App\Http\Controllers\manager\BlogController::class, 'edit'])->name('blogs.edit');
    route::put('/blogs/edit/{id}', [\App\Http\Controllers\manager\BlogController::class, 'update'])->name('blogs.update');
    route::delete('/blogs/{id}/destroy', [\App\Http\Controllers\manager\BlogController::class, 'destroy'])->name('blogs.destroy');




    Route::get('/users', [App\Http\Controllers\manager\ManagerController::class, 'usersList'])->name('usersList');
    Route::delete('/users/delete/{id}', [App\Http\Controllers\manager\ManagerController::class, 'deleteUser'])->name('deleteuser');

});












Route::middleware('auth')->group(function () {

    Route::get('blogs/create', [\App\Http\Controllers\Domain\BlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs/create', [\App\Http\Controllers\Domain\BlogController::class, 'store'])->name('blogs.store');




    Route::get('/profile', [App\Http\Controllers\Domain\ProfileController::class, 'show'])->name('domain.profile.index');
    Route::post('/profile/edit', [App\Http\Controllers\Domain\ProfileController::class, 'update'])->name('domain.profile.update');
    Route::get('/profile/comments', [App\Http\Controllers\Domain\ProfileController::class, 'showComments'])->name('domain.profile.show.comments');
    Route::get('/profile/blogs', [App\Http\Controllers\Domain\ProfileController::class, 'showBlogs'])->name('domain.profile.show.blogs');

    Route::post('/comment/create', [\App\Http\Controllers\Domain\CommentController::class, 'store'])->name('domain.comments.store');



});



Route::get('/blogs', [\App\Http\Controllers\Domain\BlogController::class, 'show'])->name('blogs');

//Route::get('/search', [App\Http\Controllers\PostController::class, 'search'])->name('search');
Route::get('/contact', [App\Http\Controllers\Domain\ContactsController::class, 'show'])->name('contact.get');
Route::post('/contact', [App\Http\Controllers\Domain\ContactsController::class, 'store'])->name('contact.post');


Route::get('/about-us', [App\Http\Controllers\Domain\AboutUsController::class, 'show'])->name('about.us.get');




Route::get('/category/{slug}', [App\Http\Controllers\Domain\CategoryController::class, 'show'])->name('category.showBySlug');
Route::get('/category/{slug}/blogs/{id}', [\App\Http\Controllers\Domain\BlogController::class, 'selectPost'])->name('blog.single');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
