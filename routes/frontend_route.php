<?php

use App\Http\Controllers\LanguageController;
use App\Library\HelpersDevice;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

Route::group(array('middleware' => ['language']) , function (){
    Route::get('/',function(){
        return view('frontend.pages.index');
    });
    Route::get('language/{locale}', [LanguageController::class,'index'])->name('language');
});

