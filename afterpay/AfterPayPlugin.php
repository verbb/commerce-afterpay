<?php
namespace Craft;

require __DIR__ . '/vendor/autoload.php';

class AfterPayPlugin extends BasePlugin
{
    // =========================================================================
    // PLUGIN INFO
    // =========================================================================

    public function getName()
    {
        return Craft::t('AfterPay');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'S. Group';
    }

    public function getDeveloperUrl()
    {
        return 'http://sgroup.com.au';
    }



    // =========================================================================
    // HOOKS
    // =========================================================================

    public function commerce_registerGatewayAdapters()
    {
       require_once __DIR__ . '/AfterPay_GatewayAdapter.php';

       return array('\Commerce\Gateways\Omnipay\AfterPay_GatewayAdapter');
    }
 
}
