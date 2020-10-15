<?php

namespace Rasujan\CellpayPayment;

use Illuminate\Support\ServiceProvider;

class CellpayPaymentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->mergeConfigFrom(
            __DIR__ . '/config/cellpaypayment.php',
            'cellpaypayment'
        );
        $this->publishes([
            __DIR__ . '/config/cellpaypayment.php' => config_path('cellpaypayment.php')
        ]);
    }
    public function register()
    {
    }
}
