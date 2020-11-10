<?php

namespace Rasujan\CellpayPayment\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CellpayPaymentController extends Controller
{
    public function payment(Request $request)
    {
        //Checking is required
        $this->validate($request, [
            'amount' => 'required',
            'invoice_number' => 'required',
        ]);

        //Pulling form config Deceleration
        $merchant_id = config('cellpaypayment.merchant_id');
        $live = config('cellpaypayment.live');

        //passed to views
        $description = request('description');
        $amount = request('amount');
        $invoice_number = request('invoice_number');

        //Url Decelaration
        $url = "";
        $success_callback = config('cellpaypayment.success_callback');
        $failure_callback = config('cellpaypayment.failure_callback');;
        $cancel_callback = config('cellpaypayment.cancel_callback');;

        //Setting up urls for live or test
        if ($live) {
            $url = 'https://app.cellpay.com.np/mpay/';
        } else {
            $url = 'https://app.cellpay.com.np/test_merchant_api/';
        }

        return view(
            'cellpaypayment::cellpaypayment'
        )->with(
            [
                'invoice_number' => $invoice_number,
                'amount' => $amount,
                'description' => $description,
                'merchant_id' => $merchant_id,
                'url' => $url,
                'success_callback' => $success_callback,
                'failure_callback' => $failure_callback,
                'cancel_callback' => $cancel_callback,

            ]
        );
    }
}
