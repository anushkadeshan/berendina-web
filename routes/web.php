<?php

use App\Http\Controllers\admin\AnnualReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\VideosController;

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
Route::get('/news-single/{id}/{title}', [HomeController::class, 'news_single'])->name('home.news_single');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('home.about_us');
Route::get('/bmic', [HomeController::class, 'bmic'])->name('home.bmic');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('home.contact_us');
Route::get('/careers', [HomeController::class, 'careers'])->name('home.careers');
Route::get('/all-news', [HomeController::class, 'all_news'])->name('home.all_news');
Route::get('/berendina-image-gallery', [PhotoController::class, 'show'])->name('home.image_gallery');
Route::get('/berendina-image-gallery/{title}/{id}', [PhotoController::class, 'showSingle'])->name('home.image_gallery_single');
Route::get('/berendina-video-gallery', [VideosController::class, 'show'])->name('home.video_gallery');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::view('/bds-about-us', 'bds-about-us');
Route::view('/bds-who-we-are', 'bds-who-we-are');
Route::view('/bds-what-we-do', 'bds-what-we-do');
Route::view('/bds-where-we-work', 'bds-where-we-work');
Route::view('/bds-media', 'bds-media');
Route::prefix('bds')->group(function () {
    Route::view('/about-us', 'bds-about-us');
});
Route::view('/bmic-about-us', 'bmic-about-us');
Route::prefix('bmic')->group(function () {
    Route::view('/about-us', 'bmic-about-us');

});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('annual-reports', AnnualReportController::class);

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::prefix('press')->group(function () {
            Route::resource('press-release', PressReleaseController::class);
            Route::resource('photo-gallery', PhotoController::class);
            Route::resource('videos', VideosController::class);
            Route::get('/news', [PagesController::class, 'news'])->name('news');
            Route::get('/add-news', [PagesController::class, 'addNews'])->name('add-news');
            Route::get('/edit-news/{id}', [PagesController::class, 'editNews'])->name('edit-news');
            Route::get('/categories', [PagesController::class, 'categories'])->name('categories');
            Route::get('/add-category', [PagesController::class, 'addCategory'])->name('add-category');
            Route::get('/media', [PagesController::class, 'media'])->name('media');
            Route::get('/add-media', [PagesController::class, 'addMedia'])->name('add-media');
            Route::get('/edit-media/{id}', [PagesController::class, 'editMedia'])->name('edit-media');

        });

        Route::prefix('bds')->group(function () {
            Route::get('/case-studies', [PagesController::class, 'caseStudies'])->name('case-studies');
            Route::get('/add-case-studies', [PagesController::class, 'AddcaseStudies'])->name('add-case-studies');
            Route::get('/edit-case-study/{id}', [PagesController::class, 'editCaseStudies'])->name('edit-case-study');

        });
    });
});
