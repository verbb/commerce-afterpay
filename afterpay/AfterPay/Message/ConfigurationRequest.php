<?php

namespace Omnipay\AfterPay\Message;

use Guzzle\Http\Message\Response as GuzzleResponse;

class ConfigurationRequest extends AbstractRequest
{
    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        return null;
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return parent::getEndpoint() . '/configuration';
    }

    /**
     * @param \Guzzle\Http\Message\Response $httpResponse
     * @return array
     */
    protected function parseResponseData(GuzzleResponse $httpResponse)
    {
        $data = parent::parseResponseData($httpResponse);

        // TODO: Not sure why GET /configuration returns object wrapped in array
        // but here we unwrap the object to keep response objects consistent
        if (!array_key_exists('errorCode', $data)) {
            return $data[0];
        }

        return $data;
    }
}
