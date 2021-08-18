<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        return view('auth.login');
    });

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'Logout'])
        ->name('admin.logout');

    //User Management
    Route::prefix('users')->group(function() {
        Route::get('/view', [\App\Http\Controllers\Backend\UserController::class, 'View'])
            ->name('users.view');
        Route::get('/add', [\App\Http\Controllers\Backend\UserController::class, 'Add'])
            ->name('users.add');
        Route::post('/store', [\App\Http\Controllers\Backend\UserController::class, 'Store'])
            ->name('users.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Backend\UserController::class, 'Edit'])
            ->name('users.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Backend\UserController::class, 'Update'])
            ->name('users.update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Backend\UserController::class, 'Delete'])
            ->name('users.delete');
    });

//Profile Management
Route::prefix('profile')->group(function() {
    Route::get('/view', [\App\Http\Controllers\Backend\ProfileController::class, 'View'])
        ->name('profile.view');
    Route::get('/edit/{id}', [\App\Http\Controllers\Backend\ProfileController::class, 'Edit'])
        ->name('profile.edit');
    Route::post('/update', [\App\Http\Controllers\Backend\ProfileController::class, 'Update'])
        ->name('profile.update');
    Route::get('/edit_pw', [\App\Http\Controllers\Backend\ProfileController::class, 'EditPW'])
        ->name('profile.edit_pw');
    Route::post('/update_pw', [\App\Http\Controllers\Backend\ProfileController::class, 'UpdatePW'])
        ->name('profile.update_pw');
});
