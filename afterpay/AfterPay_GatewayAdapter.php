<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class AfterPay_GatewayAdapter extends OffsiteGatewayAdapter
{
    // Public Methods
    // =========================================================================

    public function handle()
    {
        return "AfterPay";
    }
}
