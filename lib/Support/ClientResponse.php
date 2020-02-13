<?php


namespace Offchaindata\PHPClient\Support;


interface ClientResponse
{
    /**
     * Return HTTP Body from cURL request
     */
    public function getBody();

    /**
     * Return HTTP Headers from cURL request
     */
    public function getHeaders();

    public function getContentType();

    public function getStatusCode();
}