<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoleController;
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
    Route::get('/', [UserController::class, 'index']);
    Route::get('/view/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update-user');
    Route::get('/update/{id}', function () {
        return view('admin.user.update');
    });
    Route::post('/delete/{id}', [ UserController::class, 'destroy' ])->name('delete-user');
});

Route::prefix('role')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::get('/view/{id}', [RoleController::class, 'show']);

    Route::post('/create', [RoleController::class, 'store'])->name('create-role');

    Route::post('/permission/{id}', [RoleController::class, 'permission'])->name('create-permission');

    Route::get('/create', function () {
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

Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index']);
    Route::get('/view/{id}', [ClientController::class, 'show']);

    Route::post('/create', [ClientController::class, 'store'])->name('create-client');

    Route::post('/users/{id}', [ClientController::class, 'users'])->name('create-users');

    Route::get('/create', function () {
        return view('admin.client.create');
    });

    Route::get('/update', function () {
        return view('admin.client.update');
    });

    Route::patch('/update', function () {
        return view('admin.client.update');
    });

    Route::delete('/delete', function () {
        return view('admin.client.update');
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
