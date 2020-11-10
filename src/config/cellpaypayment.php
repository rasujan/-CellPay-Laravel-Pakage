<?php

return [
    //Primary Setup
    'merchant_id' => "9801977861", //Merchant's CellPay registered Mobile Number
    'live' => False, //live Condtion

    //URL Setup
    'success_callback' => "https://app.cellpay.com.np/test_merchant_api/details.php",
    'failure_callback' => "https://app.cellpay.com.np/test_merchant_api/details.php",
    'cancel_callback' => "https://app.cellpay.com.np/test_merchant_api/demo.html",
];
