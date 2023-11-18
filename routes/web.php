<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreferController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
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

Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/about-us',[FrontendController::class, 'about'])->name('about_us');
//user
Route::get('/user-register',[FrontendController::class, 'user_register'])->name('user_register');
Route::get('/user-login',[FrontendController::class, 'user_login'])->name('user_login');
Route::post('/user-login-store',[FrontendController::class, 'user_login_store'])->name('user_login_store');
//user

//designer
Route::get('/designer-register',[FrontendController::class, 'designer_register'])->name('designer_register');
Route::get('/designer-login',[FrontendController::class, 'designer_login'])->name('designer_login');
Route::post('/designer-login-store',[FrontendController::class, 'designer_login_store'])->name('designer_login_store');

//designer
Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'prefer' => PreferController::class,
        'contact' => ContactController::class,
        'logo' => LogoController::class,
        'about' => AboutController::class
    ]);
});

require __DIR__.'/auth.php';
