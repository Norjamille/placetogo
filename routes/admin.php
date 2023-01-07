<?php

Route::controller(\App\Http\Controllers\Admin\DashboardController::class)
    ->prefix('admin/dashboard')
    ->middleware(['auth','role:Admin'])
    ->group(function(){
        Route::get('/','index')->name('admin.dashboard.index');
    });

Route::controller(\App\Http\Controllers\Admin\CategoryController::class)
    ->prefix('admin/categories')
    ->middleware(['auth','role:Admin'])
    ->group(function(){
        Route::get('/','index')->name('admin.categories.index');
    });

Route::controller(\App\Http\Controllers\Admin\PlaceController::class)
    ->prefix('admin/places')
    ->middleware(['auth','role:Admin'])
    ->group(function(){
        Route::get('/','index')->name('admin.places.index');
    });

Route::controller(\App\Http\Controllers\Admin\SubsciptionController::class)
    ->prefix('admin/subscriptions')
    ->middleware(['auth','role:Admin'])
    ->group(function(){
        Route::get('/','index')->name('admin.subscriptions.index');
    });

Route::controller(\App\Http\Controllers\Admin\UserController::class)
    ->prefix('admin/users')
    ->middleware(['auth','role:Admin'])
    ->group(function(){
        Route::get('/','index')->name('admin.users.index');
    });

Route::controller(\App\Http\Controllers\Admin\PlanController::class)
    ->prefix('admin/plans')
    ->middleware(['auth','role:Admin'])
    ->group(function(){
        Route::get('/','index')->name('admin.plans.index');
    });