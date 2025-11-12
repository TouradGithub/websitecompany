<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.send');

// Admin auth (login / logout)
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.post');
// Default login route for auth middleware compatibility
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('contact-post', [\App\Http\Controllers\Admin\ContactController::class,'store'])->name('front.contact.submit');

// Global logout used by admin layout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.admin.projects.index');
    })->name('dashboard');

    // Settings management
    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
    Route::resource('services', ServiceController::class);
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class);


    // Projects management
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class, ['as' => 'admin']);

    // Gallery management
    Route::get('gallery', [\App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('gallery.index');
    Route::post('gallery', [\App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('gallery/{filename}', [\App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('gallery.destroy');
});
