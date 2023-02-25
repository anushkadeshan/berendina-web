<?php

use App\Http\Controllers\admin\AnnualReportController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\VideosController;
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

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('locale');
Route::get('/press', [HomeController::class, 'press'])->name('home.press');
Route::get('/news-single/{id}/{title}', [HomeController::class, 'news_single'])->name('home.news_single');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('home.about_us');
Route::get('/bmic', [HomeController::class, 'bmic'])->name('home.bmic');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('home.contact_us');
Route::get('/careers', [HomeController::class, 'careers'])->name('home.careers');
Route::get('/covid-19', [HomeController::class, 'covid19'])->name('home.covid19');
Route::get('/all-news', [HomeController::class, 'all_news'])->name('home.all_news');
Route::get('/berendina-image-gallery', [PhotoController::class, 'show'])->name('home.image_gallery');
Route::get('/berendina-image-single', [PhotoController::class, 'showSingle'])->name('home.image_gallery_single');
Route::get('/berendina-video-gallery', [VideosController::class, 'show'])->name('home.video_gallery');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/bds-about-us', 'bds.about-us');
Route::view('/bds-milestones', 'bds.milestones');
Route::view('/bds-board-and-governance', 'bds.board');
Route::view('/bds-management-team', 'bds.management');
Route::view('/bds-partners', 'bds.partners');
Route::view('/bds-financial-higlights', 'bds.financial');
Route::view('/bds-key-strategic-components', 'bds.key-strategic');
Route::view('/bds-strategic-cross-cutting-themes', 'bds.cross-cutting');
Route::view('/bds-disaster-response-covid-19', 'bds.covid19');
Route::view('/bds-disaster-response-economic-crisis', 'bds.economic-crisis');
Route::view('/bds-case-studies', 'bds.case-studies');
Route::view('/bds-press-releases', 'bds.press-releases');
Route::view('/bds-photo-gallery', 'bds.photos');
Route::view('/bds-video-gallery', 'bds.videos');
Route::view('/bds-who-we-are', 'bds-who-we-are2');
Route::view('/bds-what-we-do', 'bds-what-we-do');
Route::view('/bds-where-we-work', 'bds-where-we-work');
Route::view('/bds-media', 'bds-media');
Route::view('/bds-annual-reports', 'bds-annual-reports');
Route::prefix('bds')->group(function () {
    Route::view('/about-us', 'bds-about-us');
});
Route::view('/bmic-about-us', 'bmic-who-we-are');
Route::view('/bmic-our-services', 'bmic-services');
Route::view('/bmic-case-studies', 'bmic.case-studies');
Route::get('/bmic-case-single', [HomeController::class, 'case_study_single']);
Route::get('/bds-case-single', [HomeController::class, 'case_study_single']);
Route::view('/bmic-social-performance-management', 'bmic-social-performance');
Route::view('/bmic-environment', 'bmic-envirnment');
Route::view('/bmic-annual-reports', 'bmic-annual-reports');
Route::view('/bmic-awards-and-appreciations', 'bmic-awards');
Route::view('/bmic-media', 'bmic-media');
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
        Route::prefix('home')->group(function () {
            Route::view('/figure-counter', 'admin.home.figure-counter')->name('figurecounter');
            Route::view('/main-slider', 'admin.home.slider')->name('slider');
            Route::view('/icons', 'icons')->name('icons');
        });
        Route::get('/careers', [CareerController::class, 'index'])->name('careers');
        Route::resource('management', ManagementController::class);
        Route::get('/careers-create', [CareerController::class, 'create'])->name('careers.create');
        Route::get('/careers- edit/{id}', [CareerController::class, 'edit'])->name('careers.edit');
        Route::view('/contacts', 'admin.contacts.index')->name('contacts.index');
        Route::view('/create-contacts', 'admin.contacts.create')->name('contacts.create');
        Route::get('/edit-contacts/{id}', [PagesController::class, 'editContacts'])->name('contacts.edit');
    });
});

Route::get('/careers-view/{id}/{career}', [CareerController::class, 'view'])->name('careers.view');
