<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    // $categories = Category::all();
    return view('welcome');
});
Route::get('/cmdcat', [CommandController::class, 'showCategories'])->name('cmdcat');
Route::get('/cmdcat/addnote', [CommandController::class, 'showForm'])->name('cmdcataddnote');
Route::get('/cmdcat/delnote/{id}', [CommandController::class, 'destroy'])->name('cmdcatdelnote');
Route::post('/cmdcat/addnote', [CommandController::class, 'post'])->name('cmdcataddnotepost');
Route::get('/cmdcat/addcat', [CategoryController::class, 'showForm'])->name('cmdcatadd');
Route::post('/cmdcat/addcat', [CategoryController::class, 'post'])->name('cmdcataddpost');
Route::get('/cmdcat/{id}/delcat', [CategoryController::class, 'destroy'])->name('cmdcatdel');
Route::get('/cmdcat/{id}', [CommandController::class, 'show'])->name('cmdcatid');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
