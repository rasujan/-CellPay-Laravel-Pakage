<?php

use Illuminate\Support\Facades\Http;



Route::get('cellpaypayment', function () {

    //Pulling form config Deceleration
    $merchant_id = config('cellpaypayment.merchant_id');
    $description = config('cellpaypayment.description');
    $amount = config('cellpaypayment.amount');
    $invoice_number = config('cellpaypayment.invoice_number');
    $live = config('cellpaypayment.live');


    //Url Decelaration
    $url = "";
    $success_callback = "";
    $failure_callback = "";
    $cancel_callback = "";

    //Setting up urls for live or test
    if ($live) {
        $url = 'https://app.cellpay.com.np/mpay/';
        $success_callback = "https://app.cellpay.com.np/mpay/details.php";
        $failure_callback = "https://app.cellpay.com.np/mpay/details.php";
        $cancel_callback = "https://app.cellpay.com.np/mpay/demo.html";
    } else {
        $url = 'https://app.cellpay.com.np/test_merchant_api/';
        $success_callback = "https://app.cellpay.com.np/test_merchant_api/details.php";
        $failure_callback = "https://app.cellpay.com.np/test_merchant_api/details.php";
        $cancel_callback = "https://app.cellpay.com.np/test_merchant_api/demo.html";
    }

    $response = Http::asForm()->post($url, [
        'merchant_id' => $merchant_id,
        'description' => $description,
        'amount' => $amount,
        'invoice_number' => $invoice_number,
        'success_callback' => $success_callback,
        'failure_callback' => $failure_callback,
        'cancel_callback' => $cancel_callback
    ]);





    //Response Mustbe redirected
    //redirect($response);

    return $response;
});
