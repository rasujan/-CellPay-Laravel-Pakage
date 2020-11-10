<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::group(['namespace' => 'Rasujan\CellpayPayment\Http\Controllers'], function () {
    Route::post('cellpaypayment', 'CellpayPaymentController@payment');
});
