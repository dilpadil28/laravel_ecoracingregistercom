<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

Route::get('/', [FrontendHomeController::class, 'index']);
Auth::routes();

Route::middleware('auth')->group(static function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('members', MemberController::class);
    Route::resource('users', UserController::class);
    Route::resource('frontends', FrontendController::class);
    Route::resource('profiles', ProfileController::class);
});

Route::get('/{id_member}', [FrontendHomeController::class, 'show'])->name('member');
