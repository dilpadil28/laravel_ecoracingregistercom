<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

Route::get('/', [LoginController::class, 'showLoginForm']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(static function () {
    // Route::get('/permission', function () {
    //     $role = Role::find(2);
    //     $nama = ['view_users', 'add_users', 'edit_users', 'delete_users', 'view_announcements', 'add_announcements', 'edit_announcements', 'delete_announcements', 'view_tickets', 'add_tickets', 'edit_tickets', 'delete_tickets', 'view_requests', 'add_requests', 'edit_requests', 'delete_requests', 'view_services', 'add_services', 'edit_services', 'delete_services'];
    //     foreach ($nama as $key => $value) {
    //         # code...
    //         // Permission::create(['name' => $value]);
    //         $role->givePermissionTo($value);
    //     }
    // });
    Route::resource('users', UserController::class);
    Route::resource('tickets', TicketController::class);
    Route::get('announcements/getclients', [AnnouncementController::class,'getClients']);
    Route::get('announcements/getproducts', [AnnouncementController::class,'getProducts']);
    Route::resource('announcements', AnnouncementController::class);
    // Route::resource('requests', RequestController::class);
    // Route::post('requests/detail', [RequestController::class,'storeDetail'])->name('requests.store.detail');
    // Route::resource('services', ServiceController::class);
    Route::resource('members', MemberController::class);
});
