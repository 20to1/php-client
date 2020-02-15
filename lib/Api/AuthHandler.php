<?php


namespace Offchaindata\PHPClient\Api;

use Offchaindata\PHPClient\Handler\CurlFactory;
use Offchaindata\PHPClient\Support\ClientResponse;

class Auth extends ClientResponse
{
    protected $resources;

    public function me()
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create("GET", $GLOBALS['url']['auth']);

        return $this;
    }
}