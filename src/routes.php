<?php

use CozyFex\LaravelDesign\Controllers\IndexController;
use CozyFex\LaravelDesign\Controllers\FormController;
use CozyFex\LaravelDesign\Controllers\GalleryController;
use CozyFex\LaravelDesign\Controllers\PasswordController;
use CozyFex\LaravelDesign\Controllers\TableController;
use CozyFex\LaravelDesign\Controllers\ULController;
use CozyFex\LaravelDesign\Controllers\ViewController;
use CozyFex\LaravelDesign\Controllers\WidgetController;
use Illuminate\Support\Facades\Route;

# For base design
Route::prefix('base')->group(function () {
    Route::resource('', IndexController::class, ['as' => 'base']);
    Route::resource('form', FormController::class, ['as' => 'base']);
    Route::resource('view', ViewController::class, ['as' => 'base']);
    Route::resource('widget', WidgetController::class, ['as' => 'base']);
    Route::resource('gallery', GalleryController::class, ['as' => 'base']);
    Route::resource('table', TableController::class, ['as' => 'base']);
    Route::resource('ul', ULController::class, ['as' => 'base']);
    Route::resource('password', PasswordController::class, ['as' => 'base']);
});
