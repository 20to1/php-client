<?php


namespace TwentyToOne\PHPClient\Api;


use TwentyToOne\PHPClient\Support\ClientResponse;
use TwentyToOne\PHPClient\Handler\CurlFactory;

class Auth implements ClientResponse
{
    private $curl;
    private $url ='https://offchaindata.com/api/v1/auth/me';

    public function __construct()
    {
        $this->curl = new CurlFactory();
    }

    /**
     * @param null $options
     * @return bool|string
     */
    public function me($options = null)
    {
        return $this->curl->sendRequest([
            'url' => $this->url
        ]);
    }

    /**
     * Return HTTP Body from cURL request
     */
    public function getBody()
    {
        // TODO: Implement getBody() method.
    }

    /**
     * Return HTTP Headers from cURL request
     */
    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }
}