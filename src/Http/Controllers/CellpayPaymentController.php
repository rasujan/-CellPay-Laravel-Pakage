<?php

namespace Rasujan\CellpayPayment\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

$path = 'https://app.cellpay.com.np/test_merchant_api/';
$merchant_id = "9841980389";
$description = "Laptop";
$amount = "100";
$invoice_number = '123';
$success_callback = 'https://app.cellpay.com.np/test_merchant_api/details.php';
$failure_callback = 'https://app.cellpay.com.np/test_merchant_api/details.php';
$cancel_callback = 'https://app.cellpay.com.np/test_merchant_api/demo.html';


class CellpayPaymentController extends Controller
{

    public function index()
    {
        return redirect('cellpaypayment::cellpaypayment');
    }

    public function sendRequest()
    {
    }
}
