<?php

use App\Http\Controllers\LanguageController;

use Illuminate\Support\Facades\Route;
Route::get('/ajax/csrf/token36', function () {
    return csrf_token();
});
Route::group(array('middleware' => ['language']) , function (){
    Route::get('/',function(){
        return view('frontend.pages.index');
    });
    Route::get('language/{locale}', [LanguageController::class,'index'])->name('language');
    Route::post('/ajax/login', [\App\Http\Controllers\Auth\LoginController::class , 'postLogin']);

});

