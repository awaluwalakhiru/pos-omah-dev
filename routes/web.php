<?php

use App\Http\Controllers\Apps\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//route home to login page
Route::get('/', function () {
    return Inertia::render('Auth/Login');
})->middleware(['guest']);


// routes prefix 'apps'
Route::prefix('apps')->group(function () {
    // routes protected by auth middleware
    Route::group(['middleware' => ['auth']], function () {
        // route dashboard
        Route::get('/dashboard', DashboardController::class)
            ->name('apps.dashboard');

        // route permissions
        Route::get('/permissions', [App\Http\Controllers\Apps\PermissionController::class, 'index'])
            ->name('apps.permissions.index');

        // route roles
        Route::resource('/roles', App\Http\Controllers\Apps\RoleController::class, ['as' => 'apps']);
    });
});
