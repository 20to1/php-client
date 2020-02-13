<?php


namespace Offchaindata\PHPClient\Support;


class ClientResponse
{
    protected $resources;

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
        return curl_getinfo($this->resources, CURLINFO_CONTENT_TYPE);
    }

    public function getStatusCode()
    {
        return curl_getinfo($this->resources, CURLINFO_HTTP_CODE);
    }
}