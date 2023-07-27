<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\UploadImageController;

use Illuminate\Support\Facades\Auth;







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


Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/explore', [ExploreController::class, 'explore'])->name('explore');
Route::get('/help', [HelpController::class, 'helper'])->name('help');
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/logo', [IndexController::class, 'logo'])->name('logo');
Route::get('/upload', [IndexController::class, 'upload'])->name('upload');
Route::get('/show/{id}', [ImageController::class, 'show'])->name('show');
Route::get('/upload', [UploadImageController::class, 'Image'])->name('upload');
Route::post('/image', [UploadImageController::class, 'store'])->name('image');
Route::get('/offer', [OfferController::class, 'offer'])->name('offer');


Auth::routes();

Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
