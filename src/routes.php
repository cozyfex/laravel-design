<?php

use CozyFex\Laravel\Design\Controllers\FormController;
use CozyFex\Laravel\Design\Controllers\GalleryController;
use CozyFex\Laravel\Design\Controllers\PasswordController;
use CozyFex\Laravel\Design\Controllers\TableController;
use CozyFex\Laravel\Design\Controllers\ULController;
use CozyFex\Laravel\Design\Controllers\ViewController;
use CozyFex\Laravel\Design\Controllers\WidgetController;
use Illuminate\Support\Facades\Route;

# For base design
Route::prefix('base')->group(function () {
    Route::resource('form', FormController::class, ['as' => 'base']);
    Route::resource('view', ViewController::class, ['as' => 'base']);
    Route::resource('widget', WidgetController::class, ['as' => 'base']);
    Route::resource('gallery', GalleryController::class, ['as' => 'base']);
    Route::resource('table', TableController::class, ['as' => 'base']);
    Route::resource('ul', ULController::class, ['as' => 'base']);
    Route::resource('password', PasswordController::class, ['as' => 'base']);
});
