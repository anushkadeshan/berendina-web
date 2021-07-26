<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\LocalizationController;
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


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/lang/{locale}' , [LocalizationController::class,'index'])->name('locale');
Route::get('/press', [HomeController::class, 'press'])->name('home.press');
Route::get('/news-single', [HomeController::class, 'news_single'])->name('home.news_single');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('home.about_us');
Route::get('/bmic', [HomeController::class, 'bmic'])->name('home.bmic');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('home.contact_us');
Route::get('/careers', [HomeController::class, 'careers'])->name('home.careers');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('admin')->group(function () {
        
    
    });
});
