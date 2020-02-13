<?php


namespace Offchaindata\PHPClient\Api;


use Offchaindata\PHPClient\Support\ClientResponse;
use Offchaindata\PHPClient\Handler\CurlFactory;

class Auth implements ClientResponse
{
    private $url ='https://offchaindata.com/api/v1/auth/me';

    public $response;

    public function me()
    {
        $factory = new CurlFactory();

        $this->response = $factory->create("GET", $this->url);

        return $this;
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

    }

    public function getContentType()
    {
        return curl_getinfo($this->response, CURLINFO_CONTENT_TYPE);
    }

    public function getStatusCode()
    {
        return curl_getinfo($this->response, CURLINFO_HTTP_CODE);
    }
}