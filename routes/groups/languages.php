<?php

use App\Http\Controllers\Api\v1\LanguageController;
use Illuminate\Support\Facades\Route;


Route::controller(LanguageController::class)->prefix('v1/languages')->group(function () {
    Route::get('/', 'list')->name('languages.list');
});
