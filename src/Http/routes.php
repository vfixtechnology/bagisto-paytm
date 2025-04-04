<?php
use Illuminate\Support\Facades\Route;
use Vfixtechnology\Paytm\Http\Controllers\PaytmController;


Route::group([
    //   'prefix'     => 'payu',
    'middleware' => ['web', 'theme', 'locale', 'currency']
], function () {
    Route::get('redirect',[PaytmController::class,'redirect'])->name('paytm.process');
    Route::post('paytmcheck',[PaytmController::class,'checkstatus'])->name('paytm.callback');
});

