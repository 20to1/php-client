<?php


namespace TwentyToOne\PHPClient\Support;


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
}