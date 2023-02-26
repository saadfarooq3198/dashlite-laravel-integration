<?php

use App\Http\Controllers\Frontend as Frontend;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend as Backend;

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

require __DIR__.'/auth.php';

// Admin Routes
Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [Backend\DashboardController::class, 'index'])->name('index');
    Route::get('curriculm', [Backend\DashboardController::class, 'curriculm'])->name('curriculm');
    Route::get('almayeeyah', [Backend\DashboardController::class, 'almayeeyah'])->name('almayeeyah');
    // about routes
    Route::get('about/slider', [Backend\BannerController::class, 'aboutSlider'])->name('about.slider');
    Route::get('about/datatable', [Backend\BannerController::class, 'bannerDatatable'])->name('about.banner.datatable');
    Route::get('about/banner/create', [Backend\BannerController::class, 'create'])->name('about.banner.create');
    Route::post('about/banner/store', [Backend\BannerController::class, 'store'])->name('about.banner.store');
    Route::delete('about/banner/delete/{id}', [Backend\BannerController::class, 'destroy'])->name('about.banner.delete');
    Route::get('about/banner/edit/{id}', [Backend\BannerController::class, 'edit'])->name('about.banner.edit');
    Route::post('about/banner/update/{id}', [Backend\BannerController::class, 'update'])->name('about.banner.update');

    Route::get('about/static', [Backend\BannerController::class, 'staticData'])->name('about.static');






    // Update Routes
    Route::post('save-home', [Backend\SettingController::class, 'index'])->name('update-home');

    Route::resource('users', Backend\UserController::class);
});

// Frontend Routes
Route::get('/', [Frontend\HomeController::class, 'index'])->name('frontend-index');
Route::get('about', [Frontend\HomeController::class, 'about'])->name('about');
Route::get('almayeeyah', [Frontend\HomeController::class, 'almayeeyah'])->name('almayeeyah');
Route::get('contact', [Frontend\HomeController::class, 'contact'])->name('contact');
Route::get('curriculum', [Frontend\HomeController::class, 'curriculum'])->name('curriculum');
Route::get('ethos', [Frontend\HomeController::class, 'ethos'])->name('ethos');
Route::get('freestruc', [Frontend\HomeController::class, 'freestruc'])->name('freestruc');
Route::get('guide', [Frontend\HomeController::class, 'guide'])->name('guide');
Route::get('class', [Frontend\HomeController::class, 'class'])->name('class');
Route::get('partner-page', [Frontend\HomeController::class, 'partnerPage'])->name('partner-page');
Route::get('rd-section', [Frontend\HomeController::class, 'rdSection'])->name('rd-section');
Route::get('research', [Frontend\HomeController::class, 'research'])->name('research');
Route::get('schoolclub', [Frontend\HomeController::class, 'schoolclub'])->name('schoolclub');
Route::get('week-pop', [Frontend\HomeController::class, 'weekPOP'])->name('week-pop');
Route::get('weekend', [Frontend\HomeController::class, 'weekend'])->name('weekend');







