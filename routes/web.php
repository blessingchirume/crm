<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
});

Route::prefix('user')->group(function () {
    Route::get('/view', [UserController::class, 'index']);

    Route::get('/create', function () {
        return view('admin.user.create');
    });

    Route::post('/create', function () {
        return view('admin.user.create');
    });

    Route::get('/update/{id}', [UserController::class, 'show']);

    Route::patch('/update', function () {
        return view('admin.user.update');
    });

    Route::delete('/delete', function () {
        return view('admin.user.update');
    });
});

Route::prefix('role')->group(function () {
    Route::get('/view', function () {
        return view('admin.role.view');
    });

    Route::get('/create', function () {
        return view('admin.role.create');
    });

    Route::post('/create', function () {
        return view('admin.role.create');
    });

    Route::get('/update', function () {
        return view('admin.role.update');
    });

    Route::patch('/update', function () {
        return view('admin.role.update');
    });

    Route::delete('/delete', function () {
        return view('admin.role.update');
    });
});

Route::prefix('/project')->group(function () {
    Route::get('/view', function () {
        return view('admin.project.view');
    });

    Route::get('/create', function () {
        return view('admin.project.create');
    });

    Route::post('/create', [UserController::class, 'store'])->name('create');

    Route::get('/update', function () {
        return view('admin.project.update');
    });

    Route::patch('/update', function () {
        return view('admin.project.update');
    });

    Route::delete('/delete', function () {
        return view('admin.project.update');
    });
});


Auth::routes();

// Route::prefix('/crm')->middleware('auth')->group(function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
