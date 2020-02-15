<?php


namespace Offchaindata\Api;

use Offchaindata\Handler\CurlFactory;
use Offchaindata\Support\ClientResponse;

class AuthHandler extends ClientResponse
{
    protected $resources;

    public function me()
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create("GET", $GLOBALS['url']['auth']);

        return $this;
    }
}